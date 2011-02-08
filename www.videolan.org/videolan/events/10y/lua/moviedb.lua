 --[[
 Retrieve movie information from themoviedb.org
 ]]
 
--global variables
APIKEY = "c2c73ebd1e25cbc29cf61158c04ad78a" --key for the TMDb API
CHUNK_SIZE = 65000                          --how many characters to read at once from the stream
dialog = nil                                --dialog box
search_box = nil                            --search box
wait_label = nil                            --"Searching for ..." label
movie_list = {}                             --movies from search result
movie_frame = nil                           --displays the movie overview
result_list = nil                           --listbox that display search results
open = nil                                  --button that opens the selected movie
title = ""                                  --search box input
 
 -- Script descriptor, called when the extensions are scanned
function descriptor()
    return { title = "TMDb - themoviedb.org" ;
             version = "1.0" ;
             author = "Anonymous" ;
             url = 'http://www.themoviedb.org/';
             shortdesc = "themoviedb.org";
             description = "<center><b>themoviedb.org</b></center><br />"
                        .. "Get information about movies from the themoviedb.org (TMDb).<br />"
                        .. "This extension will show you the tagline, director, screenwriters, "
                        .. "genres, cast, links to the trailer video and homepage, "
                        .. "and a link to the movie's TMDb page." ;
             capabilities = { "input-listener" } }
end

-- First function to be called when the extension is activated
function activate()
    create_dialog()
end

-- This function is called when the extension is disabled
function deactivate()

end

-- Dialog closed
function close()
    -- Deactivate this extension
    vlc.deactivate()
end

-- Create the main dialog with a simple search bar
function create_dialog()
    dialog = vlc.dialog("TMDb")
    dialog:add_label("<b>Movie Title:</b>", 1, 1, 1, 1)
    local item = vlc.input.item()
    text = dialog:add_text_input(item and item:name() or "", 2, 1, 1, 1)
    dialog:add_button("Search", search, 3, 1, 1, 1)
    dialog:show()
end

--Called when user hits the search button
function search()
    --Clear results from previous search
    movie_list = {}
    
    --Fetch search box input, set message
    title=text:get_text()
    local message = "Searching for <a href=\"http://www.themoviedb.org/search?search=" 
       .. title .. "\">" .. title .. "</a> ..." 
    
    --Delete unnecessary widgets
    if movie_frame ~= nil then
        dialog:del_widget(movie_frame)
        movie_frame=nil
    end
    if result_list ~= nil then
        dialog:del_widget(result_list)
        result_list=nil
        dialog:del_widget(open)
        open=nil
    end
    
    --Create wait label if it hasn't been created yet
    if not wait_label then
        wait_label = dialog:add_label(message, 1, 2, 3, 1)
    else
        wait_label:set_text(message)
    end
    dialog:update()
    
    --Get search results from the TMDb API
    local url = "http://api.themoviedb.org/2.1/Movie.search/en/xml/"..APIKEY.."/"..title
    local s, msg = vlc.stream(url)
    --Streaming error
    if not s then
        wait_label:set_text("An error occured while searching for <a href=\"http://www.themoviedb.org/search?search=" 
            .. title .. "\">" .. title .. "</a>." )
        vlc.msg.warn("[IMDb] " .. msg)
        return
    end
    --Read stream into variable data
    local data = ""
    local chunk = s:read(CHUNK_SIZE)
    repeat
        data = data .. chunk
        chunk = s:read(CHUNK_SIZE)
    until string.len(chunk) == 0
    
    --Pattern to match
    local pattern = "<movie>.-<original_name>(.-)</original_name>.-<id>(.-)</id>.-<released>(%d-)%-%d-%-%d-</released>.-</movie>"
    --Add results to movie_list
    for title, id, year in string.gmatch(data, pattern) do
        add_movie( {["title"]=title, ["id"]=id, ["year"]=year} )
    end
    
    --There are no matches
    if table.getn(movie_list) == 0 then
        wait_label:set_text("No matches found for " .. "<a href=\"http://www.themoviedb.org/search?search=" 
            .. title .. "\">" .. title .. "</a>." )
        dialog:update()
        
    --If there is only one match, then it is a direct hit
    elseif table.getn(movie_list) == 1 then
        load_moviepage(movie_list[1])
        
    --If there is more than one match, display results list
    else
        load_results()
    end
end

--Adds a movie to movie_list
--This wrapper function is needed to prevent duplicates
function add_movie(movie)
    local add=true
    --iterate through movie_list to see if there is a movie with the same ID
    for i, m in ipairs(movie_list) do
        if movie.id == m.id then
            add=false
            break
        end
    end
    
    if add then table.insert(movie_list, movie) end
end

--Display movie information
function load_moviepage(movie)
    wait_label:set_text("Loading information for <a href=\"http://www.themoviedb.org/movie/" .. movie.id ..
        "\">" .. movie.title .. "</a>...")
    dialog:update()
    
    --Remove unnecessary widgets
    if result_list ~= nil then
        dialog:del_widget(result_list)
        result_list=nil
        dialog:del_widget(open)
        open=nil
    end
        
    --Get movie information from the TMDb API
    local url = "http://api.themoviedb.org/2.1/Movie.getInfo/en/xml/"..APIKEY.."/" .. movie.id
    local s, msg = vlc.stream(url)
    --Streaming error
    if not s then
        wait_label:set_text("An error occured while loading <a href=\"http://www.themoviedb.org/movie/" .. movie.id
            .. "\">" .. movie.title .. "</a>." )
        vlc.msg.warn("[IMDb] " .. msg)
        return
    end
    --Read stream into variable data
    local data = ""
    local chunk = s:read(CHUNK_SIZE)
    repeat
        data = data .. chunk
        chunk = s:read(CHUNK_SIZE)
    until string.len(chunk) == 0
    
    --Hide wait label
    dialog:del_widget(wait_label)
    wait_label = nil
        
    --Build html string for movie_frame
    local text = "<h2>" .. movie.title .. " (" .. movie.year .. ")</h2>"
    
    --Tagline
    if string.find(data, "<tagline>([^<]-)</tagline>") ~= nil then
        local tagline = string.match(data, "<tagline>([^<]-)</tagline>")
        if string.len(tagline) > 0 then
            text = text .. "<b>Tagline</b><br />" .. tagline .. "<br /><br />"
        end
    end
    
    --Overview
    if string.find(data, "<overview>([^<]-)</overview>") ~= nil then
        local overview = string.match(data, "<overview>([^<]-)</overview>")
        if string.len(overview) > 0 then
            text = text .. "<b>Overview</b><br />" .. overview .. "<br /><br />"
        end
    end
    
    --Director
    if string.find(data, "<person name=\"([^\"]-)\" character=\"\" job=\"Director\"") ~= nil then
        local director = string.match(data, "<person name=\"([^\"]-)\" character=\"\" job=\"Director\"")
        if string.len(director) > 0 then
            text = text .. "<b>Director</b><br />"  .. director .. "<br /><br />"
        end
    end
    
    --Screenplay / Story writers
    local screenplay_pattern = "<person name=\"([^\"]-)\" character=\"\" job=\"Screenplay\""
    if string.find(data, screenplay_pattern) ~= nil then
        text = text .. "<b>Screenplay by</b><br />"
        for screenplay in string.gmatch(data, screenplay_pattern) do
            if string.len(screenplay) > 0 then
                text = text .. screenplay .. "<br />"
            end
        end
        text = text .. "<br />"
    end
    
    --Genres
    if string.find(data, "<category type=\"genre\" name=\"([^\"]-)\"") ~= nil then
        text = text .. "<b>Genres</b><br />" 
        for genre in string.gmatch(data, "<category type=\"genre\" name=\"([^\"]-)\"") do
            if string.len(genre) > 0 then
                text = text .. genre .. "<br />"
            end
        end
        text = text .. "<br />"
    end
    
    --Cast
    local actor_pattern = "<person name=\"([^\"]-)\" character=\"([^\"]-)\" job=\"Actor\""
    if string.find(data, actor_pattern) ~= nil then
        text = text .. "<b>Cast</b><br />"
        for actor, role in string.gmatch(data, actor_pattern) do
            if string.len(actor) > 0 and string.len(role) > 0 then
                text = text .. actor .. " as <i>" .. role .. "</i><br />"
            end
        end
        text = text .. "<br />"
    end
    
    --Link to trailer video
    if string.find(data, "<trailer>([^<]-)</trailer>") ~= nil then
        local trailer = string.match(data, "<trailer>([^<]-)</trailer>")
        if string.len(trailer) > 0 then
            text = text .. "<b>Trailer</b><br />" .. "<a href=\"" .. trailer .. "\">" .. trailer .. "</a><br /><br />"
        end
    end
    
    --Link to homepage
    if string.find(data, "<homepage>([^<]-)</homepage>") ~= nil then
        local homepage = string.match(data, "<homepage>([^<]-)</homepage>")
        if string.len(homepage) > 0 then
            text = text .. "<b>Homepage</b><br />" .. "<a href=\"" .. homepage .. "\">" .. homepage .. "</a><br /><br />"
        end
    end 
    
    --Link to TMDb page
    text = text .. "<b>Source TMDb page:</b><br />"
    url = "http://www.themoviedb.org/movie/" .. movie.id
    text = text .. "<a href=\"" .. url .. "\">" .. url .. "</a><br />"
    
    movie_frame = dialog:add_html(text, 1, 3, 3, 1)
end

--Display search results
function load_results()
    wait_label:set_text(table.getn(movie_list) .. " results for <a href=\"http://www.themoviedb.org/search?search=" 
            .. title .. "\">" .. title .. "</a>." )
    result_list = dialog:add_list(1, 3, 3, 1)
    open = dialog:add_button("Open", open_movie, 3, 4, 1, 1)
    
    --Add search results to listbox
    for i, movie in ipairs(movie_list) do
        result_list:add_value(movie.title .. " (" .. movie.year .. ")", i)
    end
end

--Open selected movie
function open_movie()
    --Get index of select movie
    local select = result_list:get_selection()
    if not select then return end
    local index = nil
    
    for i, v in pairs(select) do
        index=i
        break
    end
    
    --Load movie page
    if not index then return end
    load_moviepage(movie_list[index])
end

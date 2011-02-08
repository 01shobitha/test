
require "simplexml"

function descriptor()
    return { title = "TheTVDB" ;
             version = "1.0" ;
             author = "Seva Deribas" ;
             url = 'http://www.thetvdb.com/';
             shortdesc = "An open database for television fans.";
             description = "Read info about series fetched from TheTVDB database.";
             capabilities = { "input-listener" } }
end

function activate()
    create_dialog()
end

function deactivate()
end

function close()
    vlc.deactivate()
end

function create_dialog()
    dlg = vlc.dialog("TVDB")
    dlg:add_label("Series name:", 1, 1, 1, 1)
    local item = vlc.input.item()
    series_name = dlg:add_text_input(item and item:name() or "Input series name here", 2, 1, 1, 1)
	dlg:add_button("Search", get_info, 3, 1, 1, 1)
    dlg:show()
end

function get_info()	
	local title_table = {}
	local index = 1
	local count = 1
	local title = series_name:get_text()
    
    if title_list then
        dlg:del_widget(title_list)
        dlg:del_widget(button_open)
        dlg:del_widget(summary_label)
        title_list = nil
        button_open = nil
    end
    
	title_list = dlg:add_list("", 1, 3, 3, 1)
	--name = txt:get_text()
    if no_results then 		
		dlg:del_widget(no_results)
		no_results = nil
	end
	url = "http://thetvdb.com/api/GetSeries.php?seriesname=" .. title
	
	local waitmsg = 'Searching for <a href="' .. url .. '">' .. title .. "</a> on theTVDB..."
    if not waitlbl then
        waitlbl = dlg:add_label(waitmsg, 1, 2, 3, 1)
    else
        waitlbl:set_text(waitmsg)
    end
    dlg:update()
	
	xml = simplexml.parse_url(url)
	--vlc.msg.dbg(xml)

	if xml == nil then
		no_results = dlg:add_label("The search returned no results (Could be a server error).", 1, 2)
		if summary_label then dlg:del_widget(summary_label) end
		dlg:show()
		return
	end
	for i, v in pairs(xml.children) do
		--vlc.msg.dbg(v.name)
		if v.name == "Series" then
			title_table[count] = v.children[3].children[1]
			count = count + 1
		end
	end
	
	count = 1
	for i, v in pairs(title_table) do
		title_list:add_value(v, count)
		count = count + 1
	end
	
	waitlbl:set_text(count - 1 .. " results found for <a href=\"" .. url .. "\">" .. title .. "</a>.")
	
	button_open = dlg:add_button("Open", show_info, 1, 4, 1, 1)
	
	dlg:show()
end
function show_info()
	title = title_list:get_selection()
	for i, v in pairs(title) do
		selection = v
	end

	for i, v in pairs(xml.children) do
		--vlc.msg.dbg(v.name)
		if v.children[3].children[1] == selection then
			summary = v.children[5].children[1]
		end
	end

	if summary ~= nil then
		row = 4
		length = string.len(summary)
		w = 1
		artist_info = ""
	    summary_label = dlg:add_html(summary, 2, 3, 1, 1)
	else
		dlg:add_label("The overview for these series is currently anavailable.")
	end
	dlg:show()
end


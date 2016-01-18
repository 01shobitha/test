<?php
   $title = "10 years of open source";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">10 years of Open Source</h1>
<h2>Welcome to the pages for the Celebration of our 10 years of open source</h2>
<p>We are here to celebrate the 10 years of the open sourcing of VideoLAN and VLC.</p>
<p><b>10 days</b> of surprises, ideas and stories will pop up here.</p>
<br />

<div id="sidebar">
<h1><a class="actionDay" id="link-day1" href="day1.html">Day 1</a></h1>
<h1><a class="actionDay" id="link-day2" href="day2.html">Day 2</a></h1>
<h1><a class="actionDay" id="link-day3" href="day3.html">Day 3</a></h1>
<h1><a class="actionDay" id="link-day4" href="day4.html">Day 4</a></h1>
<h1><a class="actionDay" id="link-day5" href="day5.html" style="font-weight: bold;">Day 5</a></h1>
<h1><a class="actionDay" id="link-day6" href="day6.html">Day 6</a></h1>
<h1><a class="actionDay" id="link-day7" href="day7.html">Day 7</a></h1>
<h1><a class="actionDay" id="link-day8" href="day8.html">Day 8</a></h1>
<h1><a class="actionDay" id="link-day9" href="day9.html">Day 9</a></h1>
<h1><a class="actionDay" id="link-day10" href="day10.html">Day 10</a></h1>
<h1><a class="actionDay" id="link-day10" href="index.html">All days</a></h1>
</div>

<div id="days">
    <div id="day1" style="display: none;">
        <h1>Day 1: a VideoLAN history</h1>
        <p>Most people know <a href="/vlc"/>VLC</a>, but they don't know the history of the <a href="/videolan/">VideoLAN project</a>.</p>
        <p>Well, they don't even know what VideoLAN is, and that we are not a company...</p>
        <h2>1st February 2011</h2>
        <p>Today is the <b>10<sup>th</sup> anniversary</b> of the switch to <a href="http://www.opensource.org/">GPL</a> of the VideoLAN project
        applications...</p>
        <p>But, but, but... What was <em>before</em> the GPL?</p>

        <h3>1996: First VideoLAN project</h3>
        <p>The network of the campus of the <a href="http://www.ecp.fr">École Centrale Paris</a>,
        one of the prestigious French "<a href="http://en.wikipedia.org/wiki/Grande_ecole">Grande École</a>"
        university, has always been managed by a student organisation named <a href="http://www.via.ecp.fr">
        VIA Centrale Réseaux</a>.</p>
        <p>In 1996, it had a very slow <a href="http://en.wikipedia.org/wiki/Token_ring">Token-Ring</a> network, but the students wanted an upgrade. They found investors
        at the condition that they could justify the need for a new network...</p>
        <p>Therefore, they decided to push <b>Video</b> on the network...<br />
        <p>Remember, this is <b>1996</b>, were your average Pentium couldn't decode a DVD and when Youtube and Google didn't exist...</p>
        <p>This <b>student project</b> achieved his goals in early 1998, and a new network came.</p>

        <h3>1998: Second VideoLAN project</h3>
        <p>As it was successful, it was decided to go on the project.</p>
        <p>And they restarted the project from scratch, in <b>1998</b>.<br />
        <p>But in the mind of <a href="http://www.opensource.org/">open source</a> and modularity.</p>
        <p>This is when the <a href="/vlc/">VLC media player</a> that you know of, was <i>born</i>.<br />
        If you look at the <em>first commit</em> of the repository, in <b>August 1999</b>, you'll see that the most copyright
        indeed is from <b>1998</b>.</p>

        <h3>2001: Open Source</h3>
        <p>As <a href="/">VideoLAN</a> was a student project, the university had moral rights on the software produced.</p>
        <p>Thanks to the <b>students</b> and Professor <a href="http://fr.linkedin.com/pub/jean-philippe-rey/16/b19/95a">Jean-Philippe Rey</a>,
         the direction of the university allowed the switch of all code produced to GPL.</p>
        <p>The <a href="http://images.videolan.org/images/paper.jpeg">letter</a> from Mr. Gourisse was signed on February 1<sup>st</sup>, <b>2001</b>.</p>

        <h2>Since 2001</h2>
        <p>Afterward, the project has went on, with <b>students</b> and then <b>volunteers</b> from around the world.</p>
        <p>The project, has, of course, left the university and is a backed-up by a <b>volunteer non-profit organisation</b>.</p>
        <p>Today, VLC averages 24 million downloads per month (including two-third of updates) and the user-base is counted in tens of million.</p>

    </div>

    <div id="day2" style="display: none;">
        <h1>Day 2: a new website design</h1>
        <p>As you might have seen, we've change the design of the <a href="/">main website</a>.</p>
        <p>The website design was done by <a href="http://madebyargon.com/">Argon</a> and this project was sponsored by <a href="http://netzwelt.de">netzwelt.de</a>.</p>
        <p>It is still a work in progress, but we'll keep working on it with your help.</p>
    </div>

    <div id="day3" style="display: none;">
        <h1>Day 3: A cool video about VLC</h1>
        <p>For our 3<sup>rd</sup> day, we'd like to share a video that we think should be more known.</p>
        <p>Video created by Adam Vian.</p>
        <iframe title="YouTube video player" width="640" height="390" src="http://www.youtube.com/embed/vVXGLPl3n7E" frameborder="0" allowfullscreen></iframe>
    </div>

    <div id="day4" style="display: none;">
        <h1>Day 4: The best skins for VLC</h1>
        <br />
        <p>For our 4<sup>th</sup> day, we'd like to share the <b>6 best skins</b> we've seen this year.</p>
        <br />
        <br />

<?php
function vlcskins($img,$thumb, $skin){
    echo"<div style='width: 230px; font-size: 2em; float: left; text-align: center;'><div class='screenshot' style='overflow: hidden; width: 200px; height: 120px;'>"
        ."<a href='http://images.videolan.org/vlc/skins2/$img'><img
        src='http://images.videolan.org/vlc/skins2/$thumb' alt='VLC media player' /></a>
    </div>";
    echo "<a href='http://www.videolan.org/vlc/download-skins2-go.php?url=$skin'>Get this skin!</a></div>";
}
        vlcskins('Preview.jpg', 'tm_Preview.jpg', 'eDark Vlc.vlt' );
        vlcskins('screen_vlc_def_mod.jpg', 'tm_screen_vlc_def_mod.jpg', 'default_mod_mentalrey.vlt' );
        vlcskins('ASkin.png', 'tm_ASkin.png', 'ASkin.vlt' );
        vlcskins('vlc_skin.png', 'tm_vlc_skin.png', 'avs_0_95_beta.vlt' );
        vlcskins('darklounge_preview.jpg', 'tm_darklounge_preview.jpg', 'darklounge_vlc_1.0.vlt' );
        vlcskins('Alienware Darkstar.PNG', 'tm_Alienware Darkstar.PNG', 'Alienware Darkstar.vlt' );
?>
    </div>

    <div id="day5" >
        <h1>Day 5: Small photo from the VideoLAN team from FOSDEM</h1>
        <br />
        <p>For our 5<sup>th</sup> day, we'd like to share a small <b>photo</b> we've done during the <a href="http://fosdem.org">FOSDEM</a>
           conference, where some people from the <a href="/videolan/">VideoLAN team</a> met today, and tomorrow.</p>
        <p>The picture is taken in front of the huge Brussels green cone.</a>
        <br />
        <img src="/videolan/events/10y/Brussels_VideoLAN.jpg" alt="VideoLAN in FOSDEM 2011" />
        <br />
    </div>

    <div id="day6" style="display: none;">
        <h1>Day 6: Best extensions for VLC</h1>
        <br />
        <h2>VLC extensions</h2>
        <p>For our 6<sup>th</sup> day, we'd like to speak about <b>extensions</b> for VLC and provide a few.</p>
        <p>Extensions in VLC are not very popular yet, because we are missing a few functionnalities.<br />
            Still, some are already cool to use.</p>
        <p>Extensions in VLC can add new features that we don't want to support in the main core, or that we cannot.</p>

        <h2>Some extensions</h2>
        <br />
        <h3>VLC extension: subtitles downloader</h3>
        <p>This small extension allows you to get subtitles directly from web databases<br />
        <a href="http://anonym.to/?http://ale5000.altervista.org/vlc/extensions/subtitles-mod.lua">Download it now!</a></p>
        <br />
        <h3>VLC extensions: movie information</h3>
        <p>These are, in fact, 4 extension to get more information about the movie currently playing:
        <br /><a href="http://git.videolan.org/?p=vlc.git;a=blob_plain;f=share/lua/extensions/allocine-fr.lua;hb=HEAD">Allocine.fr extension</a>
        <br /><a href="http://git.videolan.org/?p=vlc.git;a=blob_plain;f=share/lua/extensions/imdb.lua;hb=HEAD">IMDB.com extension</a>
        <br /><a href="lua/moviedb.lua">themoviedb.org extension</a>
        <br /><a href="lua/tvdb.lua">thetvdb.com extension</a></p>
        <p><b>NB:</b> the legality of the use of these extension is not clear yet. If you have any info, please share with us.</p>
        <br />
        <h3>VLC extension: Add Similar files</h3>
        <p>This extension will find the similar files in the same folder (like for TV shows)<br />
           than the file playing and add them to the playlist.<br />
        <a href="lua/addsimilar.lua">Download it now!</a></p>
        <br />
        <p><em style="font-style: italic;">Sorry, but because of the FOSDEM event, this day 6, that was supposed to be out on sunday, went out on monday :D</em></p>
        <br />
    </div>

    <div id="day7" style="display: none;">
        <h1>Day 7: Cool thing to do with VLC</h1>
        <p>For our 7<sup>th</sup> day, we'd like to show out feature of VLC that you probably don't know about.</p>

        <h2>Running with coloured text output</h2>
        <p>One of the most useless feature of VLC is the <b>Colored ASCII</b> mode. To use it:<br />
        - <code>vlc -Acaca</code><br />
        - Preferences → Video → Change "output" to "Color ascii-art video output".
        </p>

        <h2>Running with no interface</h2>
        <p>If you like the <b>MPlayer</b> usability, or if you want a VLC with no interaction, you should use the dummy interface:<br />
        <code>vlc -Idummy</code> or <code>cvlc</code>.</p>
        <p>You can also approach this mode with the <b>Interface Preferences</b> options: change to "minimal starting mode".</p>

        <h2>Playback your screen</h2>
        <p>Try this one:<br />
        Media → Open Capture Device → Change "Capture mode" to "Desktop"<br />
        Enjoy!</p>
        <p>You can record, transcode and stream it too!</p>

        <h2>Open a Youtube URL</h2>
        <p>To open a Youtube video in VLC:<br />
        Media → Open Network → Paste the complete Youtube URL, like <em style="font-style: italic;">http://www.youtube.com/watch?v=vVXGLPl3n7E</em><br />
        Enjoy!</p>

        <h2>Use the interactive zoom</h2>
        <p>Did you know about the interactive zoom filter in VLC?</p>
        <p>To use it, play a video, then<br />Tools → Effects &amp; Filters → Video Effects → Geometry, tick "Magnification/Zoom".<br />
        Use your mouse in the top left corner to have fun with it!</p>
    </div>

    <div id="day8" style="display: none;">
        <h1>Day 8: Cones</h1>
        <p>For our 8<sup>th</sup> day, here is a small collection of nice cones.</p>
        <h2>New VLC cone, GCI-rendered, by Richard C. G. Øiestad</h2>
        <p>From the creator of the actual VLC icon, here is a new one.</p>
        <img src="vlc_new_cone.png" alt="VLC cone" />

        <h2>Some nice VLC cone</h2>
        <p>A small cone with a translucent film strip around it.</p>
        <img src="vlc_film.png" alt="VLC cone" />

        <h2>Funny cones</h2>
        <p>High-Quality Cone icons done by Tom Bigelajzen</p>
            <p><a href="http://images.videolan.org/images/goodies/Cone-Shortcuts-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Shortcuts-small.png" /></a>
            <a href="http://images.videolan.org/images/goodies/Cone-Subs-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Subs-small.png" /></a>
            <a href="http://images.videolan.org/images/goodies/Cone-Forum-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Forum-small.png" /></a>
            <a href="http://images.videolan.org/images/goodies/Cone-Video-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Video-small.png" /></a>
        </p>
        <p>
            <a href="http://images.videolan.org/images/goodies/Cone-Audio-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Audio-small.png" /></a>
            <a href="http://images.videolan.org/images/goodies/Cone-Input-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Input-small.png" /></a>
            <a href="http://images.videolan.org/images/goodies/Cone-Interface-large.png"><img src="http://images.videolan.org/images/goodies/Cone-Interface-small.png" /></a>
            <a href="http://images.videolan.org/images/goodies/Cone-List-large.png"><img src="http://images.videolan.org/images/goodies/Cone-List-small.png" /></a>
        </p>
    </div>

    <div id="day9" style="display:none;">
        <h1>Day 9: VLC community numbers</h1>
        <p>For our 9<sup>th</sup> day, we'd like to speak about numbers.</p>

        <h2>Commiters</h2>
        <p>The <b>number of committers</b> metric is too often discarded, in open source projects.<br />
        We believe this is a good way to mesure the popularity of a project.</p>
        <h3>Official committers</h3>
        <p>The <b>official commiters</b> are the ones who have or had write access.<br />
        They are <b>48 of them</b>, but most of them are inactive, those days...</p>
        <h3>External committers</h3>
        <p>The <b>external commiters</b> are people from the community, who send patches.
        There patches are then applied into the main repository, by other committers.<br />
        They are more than <b>500 of them</b>, during the first 10 years of the project.</p>

        <h2>Downloads</h2>
        <p>The <b>download numbers</b> are always inaccurate, because many downloads are not counted:<br />
        <ul class="bullets">
            <li>Linux numbers, because users download directly on their distributions;</li>
            <li>Unofficial mirrors, and direct FTP accesses;</li>
            <li>Websites like <em style="font-style: italic;">download.com</em>, <em style="font-style: italic;">CNET</em>, <em style="font-style: italic;">01Net</em> or <em style="font-style: italic;">softopedia</em>.</li>
        </ul></p>

        <h3>Numbers before sf.net</h3>
        <p>When we mainly used our own set of mirrors, we had counted <b>440 million</b> direct downloads.</p>
        <p>Those downloads were done between <em style="font-style: italic;">December 2004</em> and <em style="font-style: italic;">June 2010</em>
        and did not include updates.</p>

        <h3>Numbers since sf.net</h3>
        <p>Since last june, we are using SourceForge for distribution, especially in order to have a 3<sup>rd</sup> party counting the downloads.</p>
        <p>As you can see, VLC is already at <a href="http://sourceforge.net/top/topalltime.php?type=downloads">the 4<sup>th</sup> position</a>, on
         the <a href="http://sourceforge.net/top/topalltime.php?type=downloads">Top Downloads, For all time of SF.net</a>.</p>
        <p>The numbers are over <b>191 million</b>, but are including signatures and updates.<br />The actual numbers are thefore closer to <b>74 million</b>
        direct downloads, over the last 7 and half months.</p>
        <br />
        <p>That would make the total at around <b>514 million</b> direct downloads.</p>

        <h2>Users</h2>
        <p>As VLC is not phoning home when one uses it (for example, proprietary players like RealPlayer or DivX do), we cannot know exactly the exact userbase.</p>
        <p>We can only <b>guess</b> from the download numbers... Do your own <b>estimation</b> then :D</p>
    </div>

    <div id="day10" style="display:none;">
        <h1>Day 10: A short promotional video about VLC</h1>
        <p>For our 10<sup>th</sup> (and last) day, we'd like to share a short promo video done for VLC.</p>
        <p>This video was created and directed by a team of French students, realised by a group of technical volunteers
           and shot and produced by <a href="http://holistic-productions.com/">Holistic Productions</a>.</p>
        <iframe title="YouTube video player" width="640" height="390" src="http://www.youtube.com/embed/ZRM6-PrOfZE" frameborder="0" allowfullscreen></iframe>
        <p>Please share.</a>
    </div>

</div>

<h3>Support us</h3>
<p>Since all the work on <a href="/vlc/">VLC</a> and other <a href="/projects">videolan projects</a> is done by <b>volunteers</b>
in their <b>free time</b>, we welcome donations to help us manage the software. <b>Donate <a href="/contribute.html">now!</a></b></p>
<h3>Share</h3>
<a href="http://digg.com/news/technology/videolan_10_years_of_open_source">Digg</a>
<a href="http://www.facebook.com/vlc.media.player">Facebook</a>
<a href="http://news.ycombinator.com/item?id=2165356">Hacker News</a>
<a href="http://twitter.com/videolan">Twitter</a>
<br />


<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>

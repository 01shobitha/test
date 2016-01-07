<?php
   $title = "Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $new_design = true;
   $body_color = "blue";
   $additional_css = array("/style/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="bigtitle">VideoLAN</h1>

            <p class="projectDescription">
                The VideoLAN project is lead and
                composed of a team of volunteers,
                that believes in the power of open source
                when dealing with multimedia.
            </p>
        </div>
    </div>
    
    <div class="row" style='clear: both; margin-top: 40px;'>
        <div class="col-md-12">
            <h2>The VideoLAN non-profit organization</h2>
            <p>The VideoLAN project is backed up by the VideoLAN organization, based in France.</p>
            <p>The VideoLAN non-profit organization has a committee and members that are part of the VideoLAN project.</p>
            <p>The current board of VideoLAN is composed by:</p>
            <ul class="bullets">
                <li>President: Jean-Baptiste Kempf</li>
                <li>Treasurer: Felix Paul Kühne</li>
                <li>Secretary: Hugo Beauzée-Luyssen</li>
            </ul>
        </div>
    </div>        
    
    <div class="row">
        <div class="col-sm-6">
            <h2>Open Source</h2>
            <p>VideoLAN produces <a href="http://www.gnu.org/philosophy/free-sw.html">free
            software</a> for multimedia, released under the
            <a href="http://www.gnu.org/copyleft/gpl.html">General Public License</a>. </p>
        </div>
        <div class="col-sm-6">
            <h2>Hosted projects</h2>
            <p>VideoLAN hosts many open source projects, related or not to <a href="/vlc/">VLC</a>.<br />
            Check the list of <a href="/projects/">projects</a>.</p>
        </div>
     </div>
     <div class="row">   
        <div class="col-sm-6">
            <h2>Contribute</h2>
            <p>VideoLAN welcomes all contributions to the project! You can contribute
            time (development, documentation, packaging, tests, user support, ...),
            material or even money. See the <a href="/contribute.html">contribution
            page</a> for more information.</p>
        </div>
        <div class="col-sm-6">
            <h2>Events</h2>
            <p>We regularly attend computing events, like FOSDEM (Free-software
            and Open Source Developers European Meeting). We generally come back
            with some <a href="/videolan/events">photos and stories</a>.</p>
        </div> 
     </div>
     <div class="row">      
        <div class="col-sm-6">            
            <h2>History</h2>
            <p>The project started as a student project at the French <a
            href="http://www.ecp.fr/">École Centrale Paris</a>, in 1996.
            After a complete rewrite in 1998, it became Open Source, thanks to the agreement
            of the École Centrale Paris, in 2001.</p>
            <p>The project started to open up to developers outside of the École.
            It is now a worldwide project with <a href="/videolan/team/">developers</a> from 20 countries.</p>
            <p>Since 2009, the project is completely separated from École Centrale Paris,
            and is backed up by an autonomous non-profit organization.</p>
        </div>    
        <div class="col-sm-6">
            <h2>Contact</h2>
            <p>Please use and read the <a href="/contact.html">contact page</a> for
            any query, question and remark.</p>
        </div>    
    </div>
</div>


<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>

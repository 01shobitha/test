<?php
   $title = "10 years of open source";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">10 years of Open Source</h1>
<h2>Welcome to the pages for the Celebration of our 10 years of open source</h2>
<p>We are here to celebrate the 10 years of the open sourcing of VideoLAN and VLC.</p>
<p><b>10 days</b> of surprises, ideas and stories will pop up here.</p>
<br />
<h3>Support us</h3>
<p>Since all the work on <a href="/vlc/">VLC</a> and other <a href="/projects">videolan projects</a> is done by <b>volunteers</b>
in their <b>free time</b>, we welcome donations to help us manage the software.<b>Donate <a href="/contribute.html">now!</a></b></p>
<h3>Share</h3>
<a href="http://digg.com/news/technology/videolan_10_years_of_open_source">Digg</a>
<a href="http://www.facebook.com/vlc.media.player">Facebook</a>
<a href="http://news.ycombinator.com/item?id=2165356">Hacker News</a>
<a href="http://twitter.com/videolan">Twitter</a>
<br />

<div id="sidebar">
<h1><a class="actionDay" id="link-day1">Day 1</a></h1>
<h1><a class="actionDay" id="link-day2">Day 2</a></h1>
<h1><a class="actionDay" id="link-day3" style="font-weight: bold;">Day 3</a></h1>
<h1>Day  4</h1>
<h1>Day  5</h1>
<h1>Day  6</h1>
<h1>Day  7</h1>
<h1>Day  8</h1>
<h1>Day  9</h1>
<h1>Day 10</h1>
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

    <div id="day3" class="selected">
        <h1>Day 3: A cool video about VLC</h1>
        <p>For our 3<sup>rd</sup> day, we'd like to share a video that we think should </p>
        <iframe title="YouTube video player" width="640" height="390" src="http://www.youtube.com/embed/vVXGLPl3n7E" frameborder="0" allowfullscreen></iframe>
    </div>

</div>

<script type='text/javascript'>
$(".actionDay").click( function() {
    var target = $(this).attr("id").substr(8);
    var current = $(".selected").attr("id").substr(3);

    if (target == current)
        return;

    if (target > current) {
        $("#day" + current).slideUp('slow');
        $("#day" + target).show();

    } else if (target < current) {
        var divheight = $("#day" + target).height() + 100;
        $("#day" + target).css("height", "0px");
        $("#day" + target).show();
        $("#day" + target).animate({
            height: '+=' + divheight + 'px'
        }, "slow", function() {
            $("#day" + current).fadeOut();
        });
    }

    $("#day" + current).removeClass("selected");
    $("#day" + target).addClass("selected");
    $(".actionDay").css("font-weight", "normal" );
    $(this).css("font-weight", "bold" );
});
</script>

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>

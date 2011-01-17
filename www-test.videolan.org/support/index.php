<?php
   $title = "VideoLAN - User support and help";
   $lang = "en";
   $menu = array( "support", "overview" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php"); 
?>

<div id="left">

<h1> User support - Help</h1>

<p>VideoLAN is free and open source software; and is not backed by any company.
Developers are mostly <strong>volunteers</strong>.<br />
Therefore, user support is provided by <strong>volunteers</strong>.</p>

<p><strong>I need:</strong><br />
<a id="normalButton" href="#documentation">Documentation</a>
<a id="normalButton" href="#help">Help</a>
<a id="normalButton" href="#bugs">Bugs</a>
</p>
<div class="clearme"></div>

<h2>I need Documentation</h2>
<a id="documentation"></a>

<h3>FAQ</h3>
<p>If you have any questions about VideoLAN, about VLC media player, you should
<strong>always start</strong> by reading the <a href="faq.html">Official FAQ</a>.</p>

<h3>Documentation</h3>
<p>You can access our
 <a href="http://wiki.videolan.org/Documentation:Documentation"> Documentation</a>,
about <a href="http://wiki.videolan.org/Documentation:Play_HowTo">VLC playback</a> and
<a href="http://wiki.videolan.org/Documentation:Streaming_HowTo">VLC Streaming</a>.</p>

<h2>I need help</h2>
<a id="help"></a>
<h3>Problems</h3>
<p>If you have problems using our software, you should:</p>
<ul class="bullets">
<li>use the <a href="http://wiki.videolan.org/Common_Problems">troubleshouting guide</a>,</li>
<li> <a href="http://forum.videolan.org/search.php">search</a> the official
<a href="http://forum.videolan.org/">forum</a> for an answer.</li>
</ul>

<h3>Ask a question</h3>
<p>If this is not enough, ask a question.<br />
For that, you <strong>need</strong> to prepare a <strong>correct report</strong>
 using the <a href="http://wiki.videolan.org/VLC_report">VLC report page</a>.
<p>Then ask your question, on:</p>
<ul class="bullets">
<li>our <a href="http://forum.videolan.org">Forum</a>, in the correct section;</li>
<li>our <a href="lists.html">users mailing-lists</a>, especially <a href="mailto:vlc@REMOVETHIS@videolan.org">vlc - at - videolan.org</a>;</li>
<li>our IRC channel on the <a href="http://www.freenode.net">freenode</a> Network (<em>irc.videolan.org, #videolan</em>), for live answers. Use the <a href="http://webchat.freenode.net/">Freenode Web</a> interface, if necessary.</li>
</ul>

<h2>Reporting bugs</h2>
<a id="bugs"></a>
<p> Read and conform yourself to our <a href="http://wiki.videolan.org/Report_bugs">Reporting Bugs</a>
 policy and look on our <a href="http://trac.videolan.org">Bugtracking</a>.</p>

<h2>Professional questions and other questions</h2>

<h3>Consulting services</h3>

<p>If you are a professionnal, and need services around our products, 
some companies provide professionnal support on VideoLAN. They are
listed on the <a href="/vlc/partners.html">consultants</a> page.</p>

<h3>Contacting the team</h3>
See the <a href="/contact.html">contact page</a>.
</div>

<div id="right">
<?php panel_start("orange"); ?>
<h1>The forums</h1>

<p>Our <a href="http://forum.videolan.org">Web forums</a> can help you
find answers to your questions or problems. Please check that your
question has not yet been answered before asking.</p>

<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
 <h1> VideoLAN Wiki </h1>
	 
 <p>The VideoLAN Wiki is at <a   
 href="http://wiki.videolan.org">http://wiki.videolan.org/</a></p>

 <p>The Wiki is a website that anyone can change. Its goal is to document
 all that is not in the official documentation: tips and tricks for each
 O.S., graphical interfaces, etc...</p>
<?php panel_end(); ?>

<?php panel_start("orange"); ?>
<h1>The mailing-lists</h1>

<p>The user mailing-lists are dedicated to user support and
announces for VideoLAN releases and events. Please see the <a
href="lists.html">mailing-lists</a> page to subscribe, unsubscribe,
consult the archives and read about the rules and restrictions.</p>

<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h1>IRC</h1>

<p> If you want more real-time stuff, you can meet many VideoLAN
developers and users on IRC.<br />
<strong>Please remember</strong> that everyone in here is
doing this in his free time. Don't come running in and demanding
an answer. Sometimes the persons there have no knowledge of that
particular subject. Sometimes simply no one is present. If you want
to be sure to get a REAL answer you can often better try the <a
href="lists.html">mailing-lists</a>.<br />
Also consider the timezone. Most people in this chatroom are from Europe.</p>

<ul class="bullets">
  <li>IRC network: <code>irc.videolan.org</code></li>
  <li>Channel: <code>#videolan</code></li>
</ul>

<p> You can connect with any IRC client. If you cannot connect from your
place, try the web-based <a href="http://www.videolan.org/webirc/">IRCWeb</a> interface.
</p>
<?php panel_end(); ?>

<?php panel_start("orange"); ?>
<h1>Consulting services</h1>

<p>Some companies provide professionnal support on VideoLAN. They are
listed on the <a href="/vlc/partners.html">consultants</a> page.</p>
<?php panel_end(); ?>
</div>

<?php footer('$Id$'); ?>

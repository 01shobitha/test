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

<h2>I need Documentation</h2>

<h3>FAQ</h3>
<p>If you have any questions about VideoLAN, about VLC media player, you should
<strong>always start</strong> by reading the <a href="faq.html">Official FAQ</a>.</p>

<h3>Documentation</h3>
<p>You can access our
 <a href="http://wiki.videolan.org/Documentation:Documentation"> Documentation</a>,
about <a href="http://wiki.videolan.org/Documentation:Play_HowTo">VLC playback</a> and
<a href="http://wiki.videolan.org/Documentation:Streaming_HowTo">VLC Streaming</a>.</p>

 <a href="http://wiki.videolan.org/Documentation:Documentation" id="downloadButton">
<div class='downloadText'>Documentation</div><strong>wiki, in english</strong></a>,

<h2>I need help</h2>
<h3>HOW TO</h3>
<p>If you have a question about how to do something with VLC media player or
other VideoLAN software, you should:</p>
<ul>
<li> read the <a href="http://wiki.videolan.org/Documentation:Documentation">Documentation</a>,</li>
<li>browse our <a href="http://wiki.videolan.org/">wiki</a> and its knowledge 
database.</li>
</ul>

<h3>Problems</h3>
<p>If you are experimenting problems using our software, you should:</p>
<ul>
<li> read the <a href="http://wiki.videolan.org/Common_Problems">Common problems</a> page in our wiki.</li>
<li> <a href="http://forum.videolan.org/search.php">search</a> the official 
<a href="http://forum.videolan.org/">forum</a> for an answer.</li>
</ul>

<h3>Ask a question</h3>
<p>If this is not enough, which can happen, ask a question. For that, you need
to get information and prepare a correct report for people to help you. 
The <a href="http://wiki.videolan.org/VLC_report">VLC report page</a> on our
<a href="http://wiki.videolan.org">Wiki</a> will help you to do it.</p>
<p>Then ask your question, on:</p>
<ul>
<li>the <a href="http://forum.videolan.org">Forum</a>, in the correct section;</li>
<li>the <a href="lists.html">users mailing-lists</a>, especially <a href="mailto:vlc@REMOVETHIS@videolan.org">vlc - at - videolan.org</a>;</li>
<li>the IRC channel on the <a href="http://www.freenode.net">freenode</a> Network (<em>irc.videolan.org, #videolan</em>), for live answers.
Use the web-based <a href="http://webchat.freenode.net/">Freenode IRCWeb</a> interface,
if you need it.</li></ul>

<h2>Developers and Reporting bugs</h2>

<h3>Developers</h3>
<p>You are a developer and you want to help the project or build a project around our software?</p>
<p>Read the <a href="/developers/">developers</a> section of this website or go and finds lots of
info on the <a href="http://wiki.videolan.org/Developers_Corner">Developer's corner</a>. You
should also use the <a href="/developers/lists.html">developers mailing-lists</a> and IRC.</p>

<h3>Report a bug</h3>
<p> Read and conform yourself to our <a href="http://wiki.videolan.org/Report_bugs">Reporting Bugs</a>
 policy and look on our <a href="http://trac.videolan.org">Bugtracking</a>.</p>

<h2>Professional questions and other questions</h2>

<h3>Consulting services</h3>

<p>If you are a professionnal, and need services around our products, 
some companies provide professionnal support on VideoLAN. They are
listed on the <a href="/vlc/partners.html">consultants</a> page.</p>

<h3>Contacting the team</h3>
<p>If your matter is not answered yet, and you need to contact the <a href="/team/">team</a>,
do it by IRC or <a href="mailto:videolan@REMOVETHIS@videolan.org">mail</a>, <em>But please prefer the users mailing-list first for support</em> .</p>
<p>As we have a lot of spam and lots of e-mail, be sure to state in the subject that
you want to speak about VideoLAN. Try to not write HTML mails, thanks.</p>
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

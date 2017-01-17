<?php
   $title ="VideoLAN developers";
   $lang = "en";
   $additional_css = array("/style/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">Developer zone</h1>
<div id="left">
<h2>Welcome!</h2>

<p>Welcome to the new VideoLAN developers web site!</p>
<p>As you might have seen, if you come often enough, 
this website has been merged with the main VideoLAN website.</p>

<h2>Wiki</h2>
<p>You will find here basic information about the most famous
VideoLAN projects. <br />
A lot of information, like those concerning SVN/git repository, documentation,
HowTos have migrated to the <a href="https://wiki.videolan.org">wiki</a>.<br />
There is a <a href="https://wiki.videolan.org/Developers_Corner">Developer's Corner</a> on this wiki where you will find a lot of information.</p>

<h2>Getting Involved</h2>
<p><b>We need you</b>, so if you can, - developer or not -, please 
<a href="https://wiki.videolan.org/Help_VideoLAN">help us</a>.<br />
Don't forget to see us on <a href="irc://irc.videolan.org/videolan">IRC</a> 
or on the <a href="lists.html">Mailing-lists</a>.</p>


<h2>Help</h2>
<p>If you need help, you can use a few means to get information:</p>
<ul>
<li><a href="https://wiki.videolan.org/Developers_Corner">Dev Wiki</a></li>
<li><a href="https://forum.videolan.org">Forums</a></li>
<li><a href="lists.html">Mailing-lists</a></li>
<li><a href="irc://irc.videolan.org#videolan">IRC on irc.videolan.org #videolan</a></li>
</ul>

<h2>Update of this site</h2>
<p>This web site can be modified by any VideoLAN developer
with a SVN account. You just have to checkout the
<code>www.videolan.org/developers/</code> module and commit your changes:
the web site will be automatically updated a few minutes later.
</p>
</div>

<div id="right">
  <?php panel_start( 'orange' ); ?>
<h1>Useful Resources</h1>
<p><a href="https://wiki.videolan.org/Developers_Corner">Developers Wiki</a></p>
<p><a href="https://wiki.videolan.org/Git">Git</a></p>
<p><a href="https://wiki.videolan.org/Subversion">Subversion</a></p>
<p><a href="lists.html">Mailing lists</a></p>
<p><a href="https://trac.videolan.org/">Trac - project management</a></p>
<p><a href="http://webchat.freenode.net/">IRCWeb </a></p>
<p><a href="http://nightlies.videolan.org/">Nightly Builds</a></p>
 <?php panel_end(); ?>
</div>

<?php footer('$Id$'); ?>

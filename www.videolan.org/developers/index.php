<?php
   $title ="VideoLAN developers";
   $lang = "en";
   $date = "18 January 2007";
   $menu = array( "developers", "main" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<h2>Welcome!</h2>

<p>Welcome to the new VideoLAN developers web site!</p>
<p>As you might have seen, if you come often enough, 
this website has been merged with the main VideoLAN website.</p>

<h2>Wiki</h2>
<p>You will find here basic information about the most famous
VideoLAN projects. <br />
A lot of information, like those concerning CVS/SVN repository, documentation,
HowTos have migrated to the <a href="http://wiki.videolan.org">wiki</a>.<br />
There is a <a href="http://wiki.videolan.org/Developers_Corner">Developer's Corner</a> on this wiki where you will find a lot of information.</p>

<h2>Getting Involved</h2>
<p><b>We need you</b>, so if you can, - developer or not -, please 
<a href="http://wiki.videolan.org/Help_VideoLAN">help us</a>.<br />
Don't forget to see us on <a href="irc://irc.videolan.org#videolan">IRC</a> 
or on the <a href="list.html">Mailing-lists</a>.</p>


<h2>Help</h2>
<p>If you need help, you can use a few means to get information:
<ul>
<li><a href="http://wiki.videolan.org/Developers_Corner">Dev Wiki</a></li>
<li><a href="http://forum.videolan.org">Forums</a></li>
<li><a href="list.html">Mailing-lists</a></li>
<li><a href="irc://irc.videolan.org#videolan">IRC on irc.videolan.org #videolan</a></li>
</ul>

<h2>Update of this site</h2>
<p>This web site can be modified by any VideoLAN developer
with a SVN account. You just have to checkout the
<code>www.videolan.org/developers/</code> module and commit your changes:
the web site will be automatically updated a few minutes later.
</p>

<?php footer('$Id$'); ?>

<?php
   $title = "VLC media player for ALT Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div id="fullwidth">

<h1>VLC media player for <a href="http://www.syllable.org/">Syllable</a></h1>

<h2>Through Builder</h2>
<p>You can get VLC on Syllable via the Building system called Builder.
From the terminal, just run:</p>
<blockquote>
<pre>
build vlc-0.8.6f
su
build install vlc-0.8.6f
</pre>
</blockquote>

<h2>Packages</h2>

You can use the package from
<a href="http://web.syllable.org/pages/resources.html">Syllable resources</a>.
Just download it and then run:
</p>

<blockquote>
<pre>
 unzip name-version.resource -d /usr
package register name
</pre>
</blockquote>

</div>
<?php footer('$Id$'); ?>

<?php
   $title = "miniSAPserver - download";
   $lang = "en";
   $date = "12 december 2003";
   $menu = array( "streaming", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php
function pkgitem($version,$name)
{
  echo '<li><a href="http://download.videolan.org/pub/videolan/miniSAPserver/'.
       $version.'/'.$name.'"><code>'.$name.'</code></a></li>';
}
?>

<h1> MiniSAPserver for Linux, BSD and Mac OS X</h1>

<p>Latest miniSAPserver tarball (0.3.0) (suggests VLC 0.8.2 or higher):</p>

<ul>
  <?php pkgitem("0.3.0","miniSAPserver-0.3.0.tar.bz2"); ?>
</ul>

<?php
  footer('$Id$');
?>

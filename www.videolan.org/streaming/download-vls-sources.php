<?php
   $title = "VideoLAN Server source code";
   $lang = "en";
   $date = "9 October 2001";
   $menu = array( "streaming", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php
function pkgitem($version,$name,$comment)
{
  echo '<li><a href="http://download.videolan.org/pub/videolan/'.
       $version.'/'.$name.'"><code>'.$name.'</code></a> '.$comment.'</li>';
}
?>

<h1> VLS source code </h1>

<h2>Tarballs</h2>

<p> Latest VLS source code tarball (0.5.6): </p>

<ul>
  <?php
     pkgitem("vls/0.5.6","vls-0.5.6.tar.gz","");
  ?>
  <li><a href="http://download.videolan.org/pub/videolan/vls/0.5.6/"><i>browse the list</i></a></li>
</ul>

<p> Latest required libraries: </p>

<ul>
  <?php
     pkgitem("vls/0.5.6/contrib","libdvbpsi3-0.1.4.tar.gz","(MPEG TS and DVB PSI tables library)");
     pkgitem("vls/0.5.6/contrib","libdvdcss-1.2.8.tar.gz","(DVD decryption library)");
     pkgitem("vls/0.5.6/contrib","libdvdread-0.9.4.tar.gz","(DVD reading library)");
     pkgitem("vls/0.5.6/contrib","libdvb-0.2.2.tar.gz","(DVB library)");
  ?>

  <li><a href="http://download.videolan.org/pub/videolan/vls/0.5.6/contrib"><i>browse the list</i></a></li>
</ul>

<h2>SVN</h2>

<p> Find more about the SVN source code repository on the <a
href="http://developers.videolan.org/">developers website</a>. </p>

<h2>Older versions</h2>

<p>Older versions can be found by <a
href="http://download.videolan.org/pub/vls/">browsing</a> our FTP site.</p>

<?php
  footer('$Id$');
?>

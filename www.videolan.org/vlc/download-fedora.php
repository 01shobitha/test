<?php
   $title = "VLC media player for Fedora";
   $lang = "en";
   $date = "21 June 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for Fedora Core</h1>

<h2>Install VLC from the RPM packages</h2>

<p>Download the RPM packages tarballs listed in the section below and
uncompress them in the same directory :</p>

<pre>
   $ tar zxf &lt;package name&gt;
</pre>

<p>Then, as root, install the packages:</p>

<pre>
    # rpm -U vlc/* --force
</pre>


<h2>Fedora packages for i386</h2>

<p>Latest RPM x86 packages tarballs for Fedora Core : </p>

<ul>
<?php pkgitem("vlc/0.8.1/rpm/fedora","vlc-binary.tar.gz","(VLC Binaries packages)");
   ?></ul>

<p>Optional components:</p>

<ul><?php
    pkgitem("vlc/0.8.1/rpm/fedora","vlc-devel.tar.gz","(VLC Development headers)");
    pkgitem("vlc/0.8.1/rpm/fedora","vlc-source.tar.gz","(VLC Source Code)");
?></ul>

<p>You can also browse the packages directory of our FTP site : </p>
<ul> <?php mirrordir("vlc/0.8.1/rpm/fedora/vlc"); ?> </ul>

<p>Thank to Jason Luka who maintains these packages</p>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site :</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<?php footer('$Id$'); ?>

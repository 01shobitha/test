<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $date = "06 April 2002";
   $menu = array( "home", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php3");
?>

<table class="main" border="0" cellspacing="5">
  <tr>
    <td align="center" rowspan="2">
      <img alt="VideoLAN" src="/images/videolan-new5.png" 
        style="margin: 0px 50px;" width="300" height="167" />
    </td>
    <td class="news-title">
        Latest news <a href="http://www.videolan.org/videolan-news.rss"><img src="images/rss.png" alt="RSS 1.0" style="vertical-align: middle; border-width: 0px;"/></a>
    </td>
  </tr>
  <tr valign="top">
    <td class="news">
      <?php shownews("title",5); ?>
    </td>
  </tr>
</table>

<div class="solutions"> 
   <div class="solution1">
    <h3>VLC media player 0.8.5</h3>
    <p><a href="vlc/">VLC</a> is a free cross-platform media player.</p>
    <ul>
     <li>It supports a <a href="/vlc/features.html">large number of multimedia
	 formats</a>, without the need for additional codecs</li>
     <li>It is available for almost every OS</li>
     <li>It needs little CPU power</li>
    </ul>
    <div class="download">
<?php
/* Windows */
$dlwin32='<p><a class="download" href="/mirror.php?mirror=http://downloads.videolan.org/pub/videolan/&amp;file=vlc/0.8.5/win32/vlc-0.8.5-win32.exe">Download Now</a> for Windows (7.9 MB)</p>';

/* Mac OS */
$dlmacosxppc='<p><a class="download" href="/mirror.php?mirror=http://downloads.videolan.org/pub/videolan/&amp;file=vlc/0.8.5/macosx/powerpc/vlc-0.8.5.dmg">Download Now</a> for MacOS X PowerPC (12 MB)</p>';
$dlmacosxintel='<p><a class="download" href="/mirror.php?mirror=http://downloads.videolan.org/pub/videolan/&amp;file=vlc/0.8.5/macosx/intel/vlc-0.8.5-intel.dmg">Download Now</a> for MacOS X Intel (13 MB)</p>';
$dlmacos9='<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>';

/* Linux */
$dllinux='<p><a class="download" href="/vlc/">Download Now</a> for Linux and other OSes</p>';
$dldebian='<p><a class="download" href="/vlc/download-debian.html">Download Now</a> for Debian GNU/Linux</p>';
$dlubuntu='<p><a class="download" href="/vlc/download-ubuntu.html">Download Now</a> for Ubuntu Linux</p>';
$dlfedora='<p><a class="download" href="/vlc/download-fedora.html">Download Now</a> for Fedora Linux</p>';
$dlredhat='<p><a class="download" href="/vlc/download-redhat.html">Download Now</a> for Red Hat Linux</p>';
$dlmandriva='<p><a class="download" href="/vlc/download-mandriva.html">Download Now</a> for Mandriva Linux</p>';
$dlgentoo='<p><a class="download" href="/vlc/download-gentoo.html">Download Now</a> for Gentoo Linux</p>';
$dlsuse='<p><a class="download" href="/vlc/download-suse.html">Download Now</a> for Suse Linux</p>';

/* BeOS */
$dlbeos='<p><a class="download" href="/vlc/download-beos.html">Download Now</a> for BeOS</p>';

/* *BSD */
$dlfreenbsd='<p><a class="download" href="/vlc/download-freebsd.html">Download Now</a> for FreeBSD</p>';

?>
<script type="text/javascript">
<!--
if (navigator.platform.indexOf("Win32") != -1)
{
  document.writeln( '<?php echo $dlwin32; ?>' );
}
else if (navigator.platform.indexOf("BeOS") != -1 )
{
  document.writeln( '<?php echo $dlbeos; ?>' );
}
else if (navigator.platform.indexOf("Linux") != -1)
{
  if(    navigator.userAgent.indexOf("Ubuntu") != -1
      || navigator.userAgent.indexOf("ubuntu") != -1 )
  {
    document.writeln( '<?php echo $dlubuntu; ?>' );
  }
  else if( navigator.userAgent.indexOf("Fedora") != -1 )
  {
    document.writeln( '<?php echo $dlfedora; ?>' );
  }
  else if( navigator.userAgent.indexOf("SUSE") != -1 )
  {
    document.writeln( '<?php echo $dlsuse; ?>' );
  }
  else if( navigator.userAgent.indexOf("Debian") != -1 )
  {
    document.writeln( '<?php echo $dldebian; ?>' );
  }
  else if( navigator.userAgent.indexOf("Mandriva") != -1 )
  {
    document.writeln( '<?php echo $dlmandriva; ?>' );
  }
  else if( navigator.userAgent.indexOf("Red Hat") != -1 )
  {
    document.writeln( '<?php echo $dlredhat; ?>' );
  }
  else if( navigator.userAgent.indexOf("gentoo") != -1 )
  {
    document.writeln( '<?php echo $dlgentoo; ?>' );
  }
  else
  {
    document.writeln( '<?php echo $dllinux; ?>' );
  }
}
else if(    navigator.userAgent.indexOf("freebsd") != -1
         || navigator.userAgent.indexOf("FreeBSD") != -1 )
{
  document.writeln( '<?php echo $dlfreebsd; ?>' );
}
else if (    navigator.userAgent.indexOf("Mac OS X") != -1
          || navigator.userAgent.indexOf("MSIE 5.2") != -1
          || (    navigator.userAgent.indexOf("Mac")
               && navigator.userAgent.indexOf("Opera") ) )
{
  if(    navigator.platform.indexOf("MacPPC") != -1 
      || navigator.platform.indexOf("PowerPC") != -1 )
  {
    document.writeln( '<?php echo $dlmacosxppc; ?>' );
  }
  else if( navigator.platform.indexOf("Intel") != -1 )
  {
    document.writeln( '<?php echo $dlmacosxintel; ?>' );
  }
  else
  {
    document.writeln( '<?php echo $dlmacosxppc; ?>' );
    document.writeln( '<?php echo $dlmacosxintel; ?>' );
  }
}
else if ( navigator.platform.indexOf("Mac") != -1 )
{
    document.writeln( '<?php echo $dlmacos9; ?>' );
}
else
{
  document.writeln( '<?php echo $dlwin32; ?>' );
  document.writeln( '<?php echo $dlmacosxppc; ?>' );
  document.writeln( '<?php echo $dlmacosxintel; ?>' );
}
//-->
</script>
<noscript>
  <?php echo $dlwin32; ?>
  <?php echo $dlmacosxppc; ?>
  <?php echo $dlmacosxintel; ?>
</noscript>
    <p><a  href="/vlc/">Others systems, learn more</a></p>
    </div>
  </div>
  <div class="solution2">
     <h3>Streaming solution</h3>
     <p>VLC can also be used as a streaming server</p>
     <ul>
      <li>VLC can use a large number of input devices</li>
      <li>It features extended streaming features (video on demand,
          on the fly transcoding, ...)</li>
     </ul>
    <div class="download">
    <p><a href="/streaming">Learn more</a></p>
   </div>
  </div>
</div>

<div class="others">
  <div class="others1">
<h2>News</h2>

  <?php shownews("full",5); ?>




  </div>
  <div class="others2">

  <h2>Project</h2>

  <p>VideoLAN produces
  <a href="http://www.gnu.org/philosophy/free-sw.html">free
  software</a> for video, released under the GNU <a
  href="http://www.gnu.org/copyleft/gpl.html">General Public
  License</a>. <br />
  It started as a student project at the French <a
  href="http://www.ecp.fr/">École Centrale Paris</a> but is now a worldwide
  project with <a href="/team/index.html">developers</a> from 20 countries.</p>


<h2>Help</h2>
  <p> For setup instructions, see the <a href="/doc/">documentation</a>
  section. <br />If you have a problem that is not
  covered in the documentation, look at the <a
  href="/support/">support</a> section to know about the 
  <a href="http://forum.videolan.org">web forums</a>, the
  <a href="/support/lists.html">user mailing-lists</a> and other support
  methods.</p>

<h2>Contribute!</h2>

  <p>VideoLAN welcomes all contributions to the project! You can contribute
  time (development, documentation, packaging, tests, user support, ...),
  material or even money. See the <a href="contribute.html">contribution
  page</a> for more information.</p>


</div>
</div>

<?php footer('$Id$'); ?>

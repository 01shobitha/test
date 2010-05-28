<?php
   $title = "VLC media player internationalization";
   $lang = "en";
   $menu = array( "developers", "i18n" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>


<h1>VideoLAN internationalization</h1>

<p>This page is dedicated to the various <abbr title="Internationalization is the fact of building a multilingual-enabled architectur.">internationalization</abbr> (i18n) and <abbr title="Localization is the fact of translating what is needed in various languages">localization</abbr> (l10n) efforts in the VideoLAN project</p>

<p>Now, only <a href="/developers/vlc.html">VLC media player</a> is been processed through internalization.</p>

<h2>VLC media player internationalization</h2>

<p>VLC media player is translated using <a
href="http://www.gnu.org/software/gettext/gettext.html">GNU Gettext</a>.</p>

<p><a href="vlcstat.php">Stats for VLC localization</a></p>

<p><a href="vlc-howto.html">How to translate ?</a></p>

<h3>How can I help ?</h3>

<p>We always need new translators to help with localization of VLC.
You can create a localization for an unsupported language, help
the translators of one given language (either by translating or by
reviewing)</p>

<p>For each existing language, there is a translation maintainer. You
should contact him to coordinate help.</p>

<p>If you want to make a translation for a new language, please read the
<a href="vlc-howto.html">howto</a></p>

<h3>List of translation maintainers</h3>

<table border="0">
<tr><td class="type">Language</td><td class="type">Maintainer</td></tr>

<?php
$lgfile="languages";

$file_id=fopen($lgfile,"r");
$contents = fread ($file_id, filesize($lgfile) );
fclose ($file_id );
     
$langs = explode( "\n", $contents );

for($i=0;$i<count($langs) -1;$i++ )
{
  list($lang,$po,$maint,$mail) = explode('|',$langs[$i]);

  echo "<tr><td class=\"category\">$lang</td>
            <td><a href=\"mailto:$mail\">$maint</a></td></tr>\n";
}

?>
</table>

<?php footer('$Id$'); ?>

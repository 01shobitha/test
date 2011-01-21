<?php
   $title = "VLC media player internationalization";
   $lang = "en";
   $menu = array( "developers", "i18n" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN internationalization</h1>

<h2>VLC media player localization howto</h2>

<p>VLC media player is translated using <a
href="http://www.gnu.org/software/gettext/gettext.html">GNU Gettext</a>.
The whole translation is divided in a bunch of <i>strings</i>. All these
are grouped in a <i>.po</i> file.</p>

<h3>How to translate strings ?</h3>

<p>Edit the appropriate file (for instance <i>fr.po</i> for French     
translation). Write the translation of "msgid" strings into the "msgstr"
field You can always ask vlc-devel@videolan.org for assistance.</p>
<p>You can edit <i>.po</i> files with <a href="http://www.poedit.net/">poEdit</a>.</p>


<h3>How to start a new language ?</h3>

<p>If there is no localization file for your language, send a mail to
<i>vlc-devel@videolan.org</i>. In return we will send you a localization file.
</p>

<h3>How to test your localization on UNIX ?</h3>

<p>You must install the gettext package. See your UNIX distribution, or
<a href="http://www.gnu.org/software/gettext">the Gettext website</a></p>

<p>Use the <i>convert-po.sh</i> script attached :<br />
<kbd>./convert-po.sh &lt;LANG&gt;.po</kbd>.<br />
Copy the resulting <i>vlc.mo</i> file to <i>/usr/local/share/locale/&lt;LANG&gt;/LC_MESSAGES</i></p>


<h3>How to test your localization on MacOS X ?</h3>

<p>If you do not have GNU gettext installed (you'd probably know if you had
it :), you must download its binaries from our website : 
<a href="http://download.videolan.org/pub/videolan/contrib/devtools/gettext-macosx.tar.gz">http://download.videolan.org/pub/videolan/devtools/gettext-macosx.tar.gz</a></p>

<p>Extract them into the current directory : <kbd>tar xvzf gettext-macosx.tar.gz</kbd>.</p>

<p>Use the convert-po.sh script attached :<br />
<kbd>  setenv PATH gettext-macosx:$PATH<br />
  setenv DYLD_LIBRARY_PATH=gettext-macosx<br />
  ./convert-po.sh &lt;LANG&gt;.po</kbd>
</p>

<p>Copy the resulting <i>vlc.mo</i> file to <i>/usr/local/share/locale/&lt;LANG&gt;/LC_MESSAGES</i></p>


<h3>Dealing with fuzzy translation</h3>

<p>A fuzzy translation is an untranslated string for which gettext did
an automatic suggestion, but needs your confirmation. They are marked
with the <i>"#, fuzzy"</i> comment. If you think the suggestion is OK,
or if you fixed the suggestion, do not forget to remove the <i>"#,
fuzzy"</i> comment.</p>

<p><i>Written by Christophe Massiot &lt;massiot at via dot ecp dot
fr&gt; and Derk-Jan Hartman &lt;hartman at videolan dot org&gt;</i></p>


<?php footer('$Id$'); ?>

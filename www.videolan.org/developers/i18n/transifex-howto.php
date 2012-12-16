<?php
   $title = "VLC media player internationalization with transifex";
   $lang = "en";
   $menu = array( "developers", "i18n" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>Using transifex for VideoLAN translations</h1>

<h2>Do you have to use transifex?</h2>

<p>Use transifex only if you like, you don't have to. <em>If</em> you want to use transifex, please note:</p>

<h2>Email address and name</h2>

<p>The email address used for your account will be visible in the header (of the po
files). So will the full name set in your profile.
While I don't want to force anyone to set the full name there, it makes my life
easier if you provide your name in a way I can use in AUTHORS.</p>

<p>Please set this before doing any translations on the transifex website (or
uploading any files there).</p>

<h2>Existing translations</h2>

<p>Don't start again with an empty translation if you already started translating somewhere else (local po file for example)!</p>

<p>Do not throw away the work already done for your language. If you already have
some translations (typically there is a po file for your language),
it is possible to upload them and continue work from there.</p>

<p>Now, there are some problems here. If you don't like to solve them yourself,
just ask me to upload your translation for you.</p>


<h3>Use empty (or cleared) headers for file uploads</h3>

<p>Transifex recognizes (and adds) copyright lines in the headers of po files, but
it won't let me delete wrong lines. That's why I request you 
to set a full name before starting translating.
It only recognizes lines that follow a certain format:<br />

<br />
<kbd># Some Name &lt;email@address.com&gt;, 2008, 2012<br />
# Different Longer Name &lt;address@email.com&gt;, 2009-2012.<br /></kbd>
<br />

So the user information needs to be between "#" and "," and the line must end in
a year (the period is optional). You don't have to list each year, 
something like <br />
<kbd> ,2004, 2008-2012 </kbd> <br />
will work, too.</p>

<p>It took me quite some time to figure this out (and to get support for
YEAR-YEAR), and you really don't have to spend that much time on it. 
You can simply remove the credit lines from the header before uploading. You
won't have to worry about the header if you downloaded the file from transifex
as it already has the right format.</p>


<h3>Uploading "patches"</h3>

<p>You don't need to upload translation files with all messages. Instead, you can
simply write some kind of patch files and upload them.<br />
This might be useful if you want to have your new translations reviewed before
uploading.<br />
The file needs to be complete (with regards to the specs), though.</p>

<br />
<h4>po files</h4>

<p>For po files you will need the header (remove all the comments starting with #")
that typically ends short after the 
<kbd>"Plural-Forms:"</kbd> line and, for everything you want to translate the usual pair of
msgid and msgstr.</p>

<br />
<h4>xml files</h4>

<p>For the xml it will be<br />
<kbd>&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />
&lt;resources&gt;<br />
The translated resources HERE<br />
&lt;/resources&gt;<kbd></p>

<br />
<p>Note:<br />
This will overwrite the translations currently stored at transifex. It won't
touch the ones that are empty in your patch file, but there will be no warning
on overwriting.</p>


<h2>Now, does using transifex do any good for you?</h2>

<p>Depends. Besides the trouble with the translator's names it seems to work.</p>

<p>If you already have a good workflow and maybe 100% translated you probably don't
need this as it only means extra work.
While having some help with the translation usually is a good thing, a careless
or evil translator can do some harm to your translation, 
so you best download a backup version every now and then. 
(I don't think the old translations are lost forever, but I am sure you don't
want to check the translation history for several hundreds of messages.)
You might get "join requests" to your team you need to handle yourself (I
usually won't modify your translation or your team).<p>


<h3>Benefits:</h3>
<p>If the strings changes in the git the current version will show up automatically
(within a day), so you won't have to take care of that yourself.</p>
<p>You can upload whenever you got something translated and don't need to email your
progress and I will upload them to git at release time.</p>
<p>You can have several translators (maybe as reviewers) in your team.</p>
<p>It's less likely your updates are overlooked. At the moment, updating existing 
translations for VLC for Android&trade; and the website is almost automated</p>



<h2>Start work</h2>

<p>The other suggestions still apply (i.e.: contact current maintainer before starting with the work).</p>

<p>This <a href="https://www.transifex.com/projects/p/vlc-trans/">transifex project</a> currently contains 
VLC media player (2.0.X), translations for the website (only some pages), 
VLC for Android&trade; (beta) and for VideoLAN Movie Creator.</p>

<h3>Here you can find the files for translation or browse to see if your language already has a (partial) translation:</h3>
<table>
  <tr>
    <th>VLC for Android&trade; (beta)</th>
    <th>VideoLAN website</th>
    <th>VideoLAN Movie Creator</th>
  </tr>
  <tr>
    <td><a href="http://people.videolan.org/~etix/transifex/vlc-android/strings.xml">strings.xml</a></td>
    <td><a href="http://svn.videolan.org/dl.php?repname=VideoLAN+Websites&path=%2Fwww.videolan.org%2Flocale%2Fwebsite.pot">website.pot</a></td>
    <td><a href="http://git.videolan.org/?p=vlmc.git;a=blob_plain;f=ts/template.ts;hb=HEAD">template.ts</a></td>
  </tr>
  <tr>
    <td><a href="http://git.videolan.org/?p=vlc-ports/android.git;a=tree;f=vlc-android/res;hb=HEAD">browse git repo</a></td>
    <td><a href="http://svn.videolan.org/listing.php?repname=VideoLAN+Websites&path=%2Fwww.videolan.org%2Flocale%2F&rev=head">browse svn</a></td>
    <td><a href="http://git.videolan.org/?p=vlmc.git;a=tree;f=ts;hb=HEAD">browse git repo</a></td>
  </tr>
</table>
<p><i>Written by Christoph Miebach &lt;christoph dot miebach at web dot de&gt;</i></p>

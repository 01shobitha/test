<?php
   $title = "VLC media player internationalization with transifex";
   $lang = "en";
   $menu = array( "developers", "i18n" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>Using transifex for VideoLAN translations</h1>

<h2>Do you have to use transifex?</h2>

<p>Use transifex only if you like, you don't have to. It is easier for me to keep track of updates. <em>If</em> you want to use transifex, please note:</p>

<h2>Email address and name</h2>

<p>The email address used for your account will be visible in some files (for example in the header of the po
files). So will the full name set in your profile.</p>

<p>There is a setting to not show your email address. Hide your address, if you prefer to not 
publish a spam free address. Without a visible email, the only way to contact you will be the internal messages.</p>

<p>If you want to have your name in the AUTHORS file, you will have to sent me (username: Christoph_Miebach, email: see below) a message. Useful information will be:</p>
<ul>
  <li>Transifex username</li>
  <li>Real name</li>
  <li>Language(s) you are working at</li>
</ul>
<p>
I am hardly able to keep track of all the translators and as some of them prefer to be anonymous, 
I would consider myself spamming if I asked them for their names over and over again.
</p>

<h2>Existing translations</h2>

<p>Don't start again with an empty translation if you already started translating somewhere else (local po file for example)!</p>

<p>Do not throw away the work already done for your language. If you already have
some translations (typically there is a po file for your language),
it is possible to upload them and continue work from there. Reviewing translations is much faster than starting from scratch usually.</p>

<h3>Uploading "patches"</h3>

<p>You don't need to upload translation files with all messages. Instead, you can
simply write some kind of patch files and upload them.<br />
This might be useful if you want to have your new translations reviewed before
uploading.<br />
The file needs to be complete (with regards to the specs), though.</p>

<br />
<h4>po files</h4>

<p>For po files you will need the header starting with <kbd>msgid ""</kbd>
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
need this as it only means extra work, but using it as an uploading service is a good idea (instead of emailing the file to me).
While having some help with the translation usually is a good thing, a careless
or evil translator can do some harm to your translation, 
so you best download a backup version every now and then. 
(I don't think the old translations are lost forever, but you certainly don't
want to check the translation history for several hundreds of messages.)
You might get "join requests" to your team you need to handle yourself (I
usually won't modify your translation or your team).<p>


<h3>Benefits:</h3>
<p>If the strings change in the git, the current version will show up automatically
(within a day), so you won't have to take care of that yourself.</p>
<p>You can upload whenever you got something translated and don't need to email your
progress and I will upload them to git at release time.</p>
<p>Even better: Some of the nightly builds fetch the current translations, so you can see 
them live within a day.</p>
<p>You can have several translators (maybe as reviewers) in your team.</p>
<p>It's less likely your updates are overlooked. At the moment, updating existing 
translations for VLC for Android&trade; and the website is almost automated</p>

<p>It's possible to get the translation of a similar language displayed when using 
the translation web frontend</p>
<p>Not transifex related news: We are going to enable every translation (upon request) 
for the nightly builds. This is different to the normal releases.</p>

<h2>Stopping or pausing work as maintainer</h2>

<p>Please pick an additional maintainer for your language when you expect not having time any more (or for a longer while). 
If you are the only team member, you could pick me. This is just to have someone care for new join requests.
</p>

<h2>Start work</h2>

<p>The other suggestions still apply (i.e.: contact current maintainer before starting with the work, subscribe to the 
<a href="http://mailman.videolan.org/listinfo/translators/">translators mailing list</a>: translators@videolan.org).</p>

<p>This <a href="https://www.transifex.com/projects/p/vlc-trans/">transifex project</a> currently contains 
VLC media player (2.0.X and 2.1.X), translations for the website (only some pages), 
VLC for Android&trade; (beta) and for VideoLAN Movie Creator.</p>

<h3>Additional remarks</h3>
<ul>
<li>VideoLAN Movie Creator is <strong>not</strong> going to be released soon. Translating the current state probably is a waste of time.</li>
<li>For the smaller projects (website, Android, iOS) I usually start including your translation 
when it reaches 100%, so you probably want to finish the first one before starting the next.</li>
</ul>

<h3>Here you can find the files for translation or browse to see if your language already has a (partial) translation:</h3>
<table>
  <tr>
    <th>VLC for Android&trade; (beta)</th>
    <th>VideoLAN website</th>
    <th>VideoLAN Movie Creator</th>
  </tr>
  <tr>
    <td><a href="http://people.videolan.org/~etix/transifex/vlc-android/strings.xml">strings.xml</a></td>
    <td><a href="https://code.videolan.org/VideoLAN.org/websites/raw/master/www.videolan.org/locale/website.pot">website.pot</a></td>
    <td><a href="http://git.videolan.org/?p=vlmc.git;a=blob_plain;f=ts/template.ts;hb=HEAD">template.ts</a></td>
  </tr>
  <tr>
    <td><a href="http://git.videolan.org/?p=vlc-ports/android.git;a=tree;f=vlc-android/res;hb=HEAD">browse git repo</a></td>
    <td><a href="https://code.videolan.org/VideoLAN.org/websites/tree/master/www.videolan.org/locale">browse git repo</a></td>
    <td><a href="http://git.videolan.org/?p=vlmc.git;a=tree;f=ts;hb=HEAD">browse git repo</a></td>
  </tr>
</table>

<p><i>Written by Christoph Miebach &lt;christoph dot miebach at web dot de&gt;</i></p>

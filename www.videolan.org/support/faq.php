<?php
   $title = 'Frequently Asked Questions';
   $lang = 'en';
   $menu = array( "support", "faq" );
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<h1>FAQ</h1>
<p>Permission is granted to copy, distribute and/or modify this document
under the terms of the GNU General Public License
as published by the Free Software Foundation;
either version 2 of the License, or (at your option) any later version.
The text of the license can be found on
<a href="http://www.gnu.org/copyleft/gpl.html">the GNU website</a>.
</p>

<h1>VideoLAN</h1>

<h2>What is VideoLAN? What is the VideoLAN Team?</h2>

<p>VideoLAN is a <a href="../videolan">non-profit organization</a>, that produces and distributes
free and open source software for video and multimedia purpose,
released under Open Source licenses.</p>

<p>It started as a student project at the French École Centrale Paris
but is now a worldwide project with developers from everywhere
and dozens of millions of people using VideoLAN's software.</p>

<h2>What is the legal structure of VideoLAN?</h2>
<p>VideoLAN is a French non-profit organization.<br />
VideoLAN has its own bank account and is fully responsible of this website.</p>

<h2>What are the differences between VLC, VLC media player, VideoLAN Client, VideoLAN Server and VideoLAN?</h2>
<p><b>VLC</b> is the official name of VideoLAN's main product, often named VLC.
VideoLAN Client is an ancient name of this product.</p>

<p>VideoLAN Server is another product of VideoLAN, but is discontinued since a long time.</p>

<p>VideoLAN is <strong>not</strong> a software, see 1.1 of this FAQ.</p>

<h2>How can I contribute to VideoLAN?</h2>
<p>You might either contribute time, material, or money. You <strong>don't need</strong> to be a programmer to help us.
We are also always needing some translators and designers.<br />
You will find all information you need on the
<a href="/contribute.html">contribution page</a>.</p>

<h2>Why are your mailing-lists and your website in english?</h2>
<p>VideoLAN's developers come from all around the world and english is the only language they can use to communicate together.
 Although great care is given to the translation of VLC in various languages, maintaining translations of our website costs too much more time than we can afford.</p>

<h2>What to do if I can't find an answer to my question here?</h2>
<p>Read the other section of the <a href="/support/">Support center</a> </p>


<h1>VLC media player</h1>

<h2>Does VLC support DVDs from all regions?</h2>
<p>This mostly depends on your DVD drive.
Testing it is usually the quickest way to find out.
The problem is that a lot of newer drives are RPC2 drives these days.
Some of these drives don't allow raw access to the drive untill the drive firmware has done a regioncheck.
VLC uses <strong>libdvdcss</strong> and it needs raw access to the DVD drive to crack the encryption key.
So with those drives it is impossible to circumvent the region protection.
(This goes for all software. You will need to flash your drives firmware, but sometimes there is no alternate firmware available for your drive).
On other RPC2 drives that <strong>do</strong> allow raw access,
it might take VLC a <strong>long</strong> time to crack the key.
So just pop the disc in your drive and try it out, while you get a coffee.
RPC1 drives should 'always' work regardless of the regioncode.
</p>

<h2>Where does VLC store its config file?</h2>
<p>Currently, a config file is created on a per user basis (there is no global configuration file).
If you modify the available options in VLC and save the new configuration,
then a configuration file will be created in your user directory.
The precise location of this file depends on the Operating System you are running:
</p>
<ul>
<li>Linux / Unix: <code>$(HOME)/.config/vlc/vlcrc</code> (v0.9.0 and above), <code>$(HOME)/.vlc/vlcrc</code> (v0.8 and older)</li>
<li>Mac OS X: <code>HOME/Library/Preferences/org.videolan.vlc</code> <code>HOME/Library/Preferences/VLC</code> (v0.9 and older)</li>
<li>Windows 95/98/ME: <code>C:\Windows\Application Data\vlc\vlcrc</code></li>
<li>Windows 2000/XP: <code>C:\Documents and Settings\%username%\Application Data\vlc\vlcrc</code></li>
<li>Windows Vista/7: <code>C:\Users\%username%\Application Data\vlc\vlcrc</code></li>
<li>BeOS: <code>config/settings/vlcrc</code></li>
</ul>

<h2>VLC has a strange behavior...</h2>
<p> Please consider the <a href="https://wiki.videolan.org/Reset_Settings/">Reset preferences</a> section in our Wiki for a variety of possible solutions.<br />
</p>

<h2>Videos are too dark</h2>
<p>Often this is caused by video hardware overlay problems:
</p>
<ul>
<li>If it is only one video then use the &quot;Settings&quot; menu, option &quot;Extended&nbsp;GUI&quot;
and try to increase the Gamma value in the &quot;Video&quot; tab.</li>
<li>Check your video card settings and turn off hardware video overlay.
If the videos now play with proper lighting, then deinstalling and reinstalling the video drivers might help.</li>
</ul>

<h2>I cannot read DVDs!</h2>
<p>Here are a few things to check:</p>
<ul>
<li>If you are on Linux/Unix, did you install the '''''libdvdcss''''' package?</li>
<li>Do you have write access to your DVD device? For instance, from the console:
<pre># chmod 666 /dev/dvd</pre>
where <code>/dev/dvd</code> is the device corresponding to your DVD drive. 
</li>
</ul>

<h2>Video is choppy</h2>
<p>Your system might be too slow to decode all pictures. It might be that your CPU basically is not fast enough. It can also be that the subsystem is misconfigured/misdriven, this happens for example under Redhat Linux. Here are some elements to improve speed:</p>
<ul>
<li>Turn on DMA on your DVD device, for instance:
<ul>
<li>Under Linux:
<pre># hdparm -d1 /dev/dvd</pre></li>
<li>Under Windows, go to the <cite>System</cite> section of the control panel, and go to the <cite>Hardware manager</cite> (it is sometimes in a separate tab, and sometimes, you have to go to the <cite>Advanced</cite> tab. Then, righ-click on your DVD player, and check the <cite>DMA</cite> checkbox.</li>
</ul>
</li>
<li>Upgrade to the latest driver for your video board.<br />
If you are running Linux, you can additionnaly upgrade to the latest X.Org version.
If supported, check that the xvideo plug-in is effectively used with:
<pre>% vlc -vv</pre></li>
<li>Stop other running applications...</li>
<li>Try disabling framedropping. Framedropping allows VLC not to decode some pictures when the CPU is overloaded, but can result in choppier playback under certain conditions.</li>
</ul>

<p>Framedropping behaviour can be configured in the Video preferences of VLC.</p>

<h2>Audio and video are out of sync</h2>
<p>Try using another audio output plugin and, under Unix, kill <code>esd</code>, <code>artsd</code> or <code>pulseaudio</code> if they are running.
If the problem is due to the input file, have a look at the &quot;Audio desynchronisation compensation&quot; option.
</p>
<div style="background-color:#ffcd9b; border:1px solid #ff8040; padding: 10px; margin: 20px">
<div style="font-size: 125%"><strong>Oops, there is an information missing:</strong></div>

<div style="margin: 10px; margin-left: 30px; margin-right: 30px; padding-left: 10px; border: 1px dotted black; border-left: 3px solid gray">
<p>Audio desynchronisation compensation is limited by the cache size depending to the selected access module. This can be altered in the configuration panel.
</p>
</div>
Please, for the clueless people arguing that it doesn't work, include the information mentioned in the <cite>second post</cite> of <a href="http://forum.videolan.org/viewtopic.php?f=12&amp;t=19456&amp;p=61156&amp;hilit=desync#p61156">this thread</a> in The VideoLAN Forums exhaustingly, as by my nearly ever-lasting research on the same issue there are a lot of locations here and there where it isn't being mentioned unfortunately. Best if it was mentioned in the tooltip as well.

<span style="font-size: x-small">Please do put this tag into the appropiate location or remove it once it is a documented feature inside the software, agreed?</span></div>

<h2>VLC crashes.</h2>
<p>Increase the verbosity level (either in the preferences or with a <code>-vv</code> command line option) and look at the debug messages (in the terminal or in the Messages window).</p>

<p>If you are convinced that it is a bug in VLC, have a look at the <a href="http://www.videolan.org/support/bug-reporting.html">bug reporting page</a>.</p>

<h2>How can I take screenshots?</h2>
<p>To take a snapshot of the video displayed by VLC, you just need to press the pre-defined snapshot hotkey:</p>
<ul>
<li>Windows / Linux / Unix: <strong>Ctrl+Alt+S</strong></li>
<li>Mac OS X: <strong>Command+Alt+s</strong></li>
</ul>

<p>To change it, go to <em>Preferences -&gt; Interface -&gt; Hotkeys settings</em>, check <em>Advanced options</em>, and set <strong>Take video snapshot</strong>.
</p>
<p>You can also take a snaphot via the menu <em>Video -&gt; Snapshot</em>.
</p>
<p>To change the snapshot format or directory, go to <em>Preferences -&gt; Video</em>.
</p>

<h2>Where are my screenshots?</h2>
<p>If you haven't changed the snapshot directory in your preferences, your screenshots should go to:</p>
<ul>
<li>Windows: <code>My Documents\My Pictures\</code></li>
<li>Linux / Unix: <code>$(HOME)/.vlc/</code></li>
<li>Mac OS X: <code>Pictures</code></li>
</ul>
<p>To change it, go to <em>Preferences -&gt; Video -&gt; Video snapshot directory</em>.
</p>

<h2>My file doesn't seem to work!</h2>
<p>Are you sure VLC supports the file? Try checking the <a href="http://www.videolan.org/vlc/features.html">features page</a>. If it supported and you compiled VLC yourself, check if you have downloaded and installed all the codecs correctly. If it is not supported, then you are out of luck for now.</p>

<h2>VLC doesn't display all subtitles</h2>
<p>If VLC has autodetected your subtitles file, or if you opened it manually, but VLC only diplays some subtitles from time to time, you will need to change the subtitles file encoding.</p>

<p>Go to <em>Preferences -&gt; Input / Codecs -&gt; Other codecs -&gt; Subtitles</em>, and set <em>Subtitle text encoding</em> to the right one.
</p>
<p>See this reference: <a href="http://alis.isoc.org/codage/iso8859/jeuxiso.en.htm">ISO Standard for various characters sets</a>.
</p>

<p>Go to <em>Preferences -&gt; Video -&gt; Output modules</em>, and set <em>Video output module</em> to something different, like <em>DirectX video output</em>. Be sure you have advanced options enabled to be able to access this option.
Also, you might need to disable the &quot;YUV -&gt; RGB&quot; checkbox in <em>DirectX</em> section of <em>Preferences -&gt; Video -&gt; Output modules</em>.
</p>

<h2>Why is my ip permanently banned from the forum?</h2>

<p>Probably your IP address was banned, but it is not necessarily your fault.<br />
- If you are at home, your dynamic IP was probably previously abused by a spammer.<br />
- If you are at work/school, other users on your network may have caused the blacklisting.<br />
Try to go through the list of blacklists presented to you on https://forum.videolan.org/403.html and remove yourself, if you are listed.
Finally, don't forget to ensure that your computer and web browser are free of trojans/malware, and failing everything wait for a new dynamic IP.<p>

<h2>Will VLC be available on Windows Phone?</h2>

<p>We're currently working on it. Since development for Windows Phone is harder in comparison to other mobile platforms, we can't estimate the time needed to release a version for Windows Phone. 
The latest updates can be received by following us on twitter or subscribing to our RSS feed.</p>

<h2>When will VLC be able to stream to Chromecast?</h2>

<p>We're currently working on it but can't give a release date. </p>

</div>
<?php footer('$Id$'); ?>

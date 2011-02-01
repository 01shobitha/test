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

<p>VideoLAN is a group of people, that produces and distributes
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
<li>Mac OS X: <code>HOME/Library/Preferences/VLC</code></li>
<li>Windows 95/98/ME: <code>C:\Windows\Application Data\vlc\vlcrc</code></li>
<li>Windows XP/2000: <code>C:\Documents and Settings\%username%\Application Data\vlc\vlcrc</code></li>
<li>BeOS: <code>config/settings/vlcrc</code></li>
</ul>

<h2>VLC has a strange behavior...</h2>
<p>The first thing to do is to reset the VLC preferences in the preferences dialog of the application and restart VLC.
If VLC doesn't even start anymore, delete VLC's configuration file (see the previous question to know about its location).
Then restart VLC.
If it does not get any better, read the following questions!
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

<h2>The video runs but the picture is distorted</h2>
<p>There is probably a problem with the output layer.
There are several ways of troubleshooting it.
First, try with another output plugin, for instance:</p>
<pre>% vlc -V sdl
% vlc -V x11</pre>
<p>Second, change your screen depth and/or definition.
It quite often helps.
Lastly, if running Unix, have a look at your X.Org video driver.</p>

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
<li>Mac OS X: <code>Desktop/</code></li>
</ul>
<p>To change it, go to <em>Preferences -&gt; Video -&gt; Video snapshot directory</em>.
</p>
<h2>My file doesn't seem to work!</h2>
<p>Are you sure VLC supports the file? Try checking the <a href="http://www.videolan.org/vlc/features.html">features page</a>. If it supported and you compiled VLC yourself, check if you have downloaded and installed all the codecs correctly. If it is not supported, then you are out of luck for now.</p>

<p><strong>Note</strong>: At present, especially WMV3, the most recent Real Player, and the most recent Indeo Video ("IV50", etc.) files are not supported by VLC and are not going to be in the near future.
</p>

<h2>VLC doesn't display all subtitles</h2>
<p>If VLC has autodetected your subtitles file, or if you opened it manually, but VLC only diplays some subtitles from time to time, you will need to change the subtitles file encoding.</p>

<p>Go to <em>Preferences -&gt; Input / Codecs -&gt; Other codecs -&gt; Subtitles</em>, and set <em>Subtitle text encoding</em> to the right one.
</p>
<p>See this reference: <a href="http://alis.isoc.org/codage/iso8859/jeuxiso.en.htm">ISO Standard for various characters sets</a>.
</p>

<h2>Why is my video purple? (a.k.a. the smurf effect)</h2>
<p>Not sure. But many people have fixed this problem by changing their video output module.</p>

<p>Go to <em>Preferences -&gt; Video -&gt; Output modules</em>, and set <em>Video output module</em> to something different, like <em>DirectX video output</em>. Be sure you have advanced options enabled to be able to access this option.
Also, you might need to disable the &quot;YUV -&gt; RGB&quot; checkbox in <em>DirectX</em> section of <em>Preferences -&gt; Video -&gt; Output modules</em>.
</p>

<hr />
<h1>VideoLAN streaming solution</h1>

<h2>Do I need a &quot;streaming server&quot;?</h2>
<p>Well, there are in fact two kinds of streaming: passive streaming in which a movie is sent by a server and watched by one or several client, and Video On Demand (VOD) in which each client asks for its own stream.</p>
<ul>
<li>In passive streaming, the client has no control upon the server, and must subscribe for instance to a multicast group to receive the stream. This kind of streaming needs a server able to send data on a network with a protocol such as UDP multicast or RTP, for instance VLS or VLC stream output. The client side needs a player supporting such protocols, as VLC does.</li> 
<li>In Video On Demand, no specific "streaming server" is required, but the  client must be able to read the stream in real time, instead of just dowloading the whole video before one can start viewing it. A simple protocol such as HTTP is sufficient for Video On Demand, so you just  have to put your movie on a web server, and use a clever player to view it in real time, VLC for instance ;-) However of course you will not be able to view movies in real time if your network is too slow, so you MUST check that the average bandwith of your network link is higher than the average bandwith of your movie (size / duration). If it is not the case, VLC will try to keep in real time as much as possible, so you will probably get only the audio track and no video.</li>
</ul>

<h2>VLC vs. VLS</h2>
<p>Yes, both programs can be used to stream video, as explained in the <a href="http://www.videolan.org/doc/">VideoLAN HOWTO</a>.
The streaming features of each program are described on the <a href="http://www.videolan.org/streaming/features.html">streaming features</a> page.</p>

<p>Technically, there is an important difference:</p>
<ul>
<li>VLC opens all the system layers of the input stream, regenerate them all and then stream the result on the network or write it to a file. So VLC is good at streaming untrusted video and/or audio sources, like the video files found on the Internet and/or produced by non-professionnal software. VLC implements many muxers/demuxers (ps, ts, avi, ogg, mp4, ...) and many codecs, which allows to convert encapsulation formats and/or transcode an input stream on-the-fly ! VLC also has nice graphical interfaces.</li> 
<li>VLS only opens the highest system layers of the input stream and only has PS and TS demuxers. So VLS is good at streaming from trusted video and/or audio sources in PS or TS format produced by professional software or hardware like DVDs and DVB channels (satellite or digital terrestial TV) because it only regenerate the system layers that need to be regenerated, and no more. VLS is specially well designed to stream multiplexed TS streams, for instance a whole DVB transponder. VLS only has a TS muxer, doesn't do transcoding and doesn't have graphical interfaces.</li>
</ul>

<h2>Is it not a waste of time to develop both?</h2>
<p>To understand this situation, you must consider the history of VideoLAN. Before VLC's stream output, we had two very different programs:</p>
<ul>
<li>VLS, a program written in C++ running under Linux, Mac OS X and Windows only, that is basically a MPEG Transport Stream engine, with a very basic telnet interface, which was used as a server. You'll note VLS is not maintained anymore.</li>

<li>VLC, a multi-platform program written in C, that implements demuxers, codecs, video and audio outputs and graphical interfaces, which was used as a client only.
In september 2002, some VLC developers had the idea of taking advantage of the multiple demuxers and codecs implemented in VLC to build a Stream Output whose ultimate goal was to be able to do transcoding. They wrote a stream output for VLC, that was released with VLC 0.5.0 in late January 2003. Introduced with the 0.8.0 release, VLC is able to transcode to any format it can read. Furthermore, starting with the 0.7.x series, VLC is able to stream multiple sources with one instance. This can be controlled with the VideoLAN (Media) Manager (VLM), which can be accessed through a telnet interface and a http interface.</li>
</ul>

<p>But what is more important is that VLS and VLC developers were separate groups of people, and that they were free to write the software they prefer!
That is how free software runs, and it has shown in the past that is was a good engine for innovation and enhancement.</p>

</div>
<?php footer('$Id$'); ?>

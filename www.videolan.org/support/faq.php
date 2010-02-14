<?php
   $title = 'VideoLAN - Frequently Asked Questions';
   $lang = 'en';
   $menu = array( "support", "faq" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<p>Permission is granted to copy, distribute and/or modify this document
under the terms of the GNU General Public License
as published by the Free Software Foundation;
either version 2 of the License, or (at your option) any later version.
The text of the license can be found on
<a href="http://www.gnu.org/copyleft/gpl.html">the GNU website</a>.
</p>

<h1>VideoLAN</h1>

<h2>What is VideoLAN? What is the VideoLAN Team?</h2>

<p>VideoLAN is a group of people, the VideoLAN Team,
that produces free and open source software for video and multimedia purpose,
released under the GNU General Public License.
</p>

<p>It started as a student project at the French École Centrale Paris
but is now a worldwide project with developers from 20 countries
and millions of people using VideoLAN's software.
</p>

<h2>What is the legal structure of VideoLAN?</h2>

<p>The &quot;Club VideoLAN&quot; is a project of the association Centrale Réseaux,
which is a French non-profit organization based at the École Centrale Paris.
VideoLAN has its own bank account
and is responsible of its finance in front of the board of Centrale Réseaux.
</p>

<h2>What is the differences between VLC, VLC media player, VideoLAN Client, VideoLAN Server and VideoLAN?</h2>
<p><b>VLC</b> is the official name of VideoLAN's main product, often named VLC.
VideoLAN Client is an ancient name of this product.
</p>

<p>VideoLAN Server is another product of VideoLAN, but is discontinued since {{VLC}} can do more.
</p>

<p>VideoLAN is <strong>not</strong> a software, see 1.1 of this FAQ.
</p>

<h2>How may I help VideoLAN?</h2>
<p>You might either contribute time, material, or money. You <strong>don't need</strong> to be a programmer to help us.
We are also always needing some translators.
You will find all information you need on the
<a href="http://www.videolan.org/contribute.html">contribution page</a>.
</p>

<hr />
<h1>Legal concerns</h1>

<h2>May I use the VideoLAN logo?</h2>
<p>You may freely use the VideoLAN logo using the following copyright:
</p>
<blockquote><p>
Copyright &copy; 1996-2009 VideoLAN.
This logo or a modified version may be used or modified by anyone to refer to the VideoLAN project
or any product developed by the VideoLAN team, but does not indicate endorsement by the project.
</p></blockquote>

<h2>What are the usage restrictions for VideoLAN software?</h2>
<p>Short answer: there are none.</p>

<p>You can use the software in the way you want (within the boundary of law),
for personal, educational, research, military, governmental and/or professional
purpose.
</p>

<h2>Can I obtain VideoLAN software under different licensing terms?</h2>
<p>You would need to negotiate a new copyright license
with every single copyright holder of the affected piece of software.
You may also need to relicense some underlying libraries.
</p>
<p>In other words, you practically cannot obtain our software
under other licensing terms than normal open-source ones.
</p>

<h2>What about other licenses?</h2>
<p>The binary packages from the VideoLAN website and mirrors
are wholly licensed under their specified license
(normally the GNU General Public License version 2).
You do not need to obtain any separate copyright license.
</p>

<h3>What about patent licenses?</h3>
<p>Regarding <cite>Patentable Inventions</cite>,
the second paragraph
of article 52
of the European Patent Convention (EPC) states:
</p>
<blockquote><p>
The following (..) shall not be regarded as [patentable] inventions:
scientific theories and mathematical methods; (...)
programs for computers (...).
</p></blockquote>
<p>The VideoLAN project only provides software, i.e. &quot;programs for computers&quot;.
Those are outside the scope of patentability.
Hence there is not need to obtain any patent licenses
for VideoLAN software <strong>within most of Europe</strong>
(European Union, Croatia, Liechtenstein, Macedonia, Monaco, Norway,
 San Marino, Switzerland and Turkey).
In other venues, please check any applicable law.
</p>
<p>Please note however that the combination of software with hardware
may yield something patentable.
As such, if you do make a hardware product with VideoLAN software,
you may conceivably need to obtain patent licenses for the hardware parts.
</p>

<h2>May I redistribute a piece of VideoLAN software?</h2>
<p>
Yes, you may distribute an original or a modified version of a piece of VideoLAN software as long as you comply with its license terms. It is the GNU General Public License Version 2 (referred herein as GPL), and it is in the file named COPYING in our products. 
</p>

<p><strong>Note</strong>: You do not need to ask the VideoLAN team the permission to do so!
</p>

<h3>How do I do comply with those terms?</h3>
<p>The easiest way to conform to the GPL is to accompany the product you want to distribute with its sources.
</p>

<p>For example, if you plan to distribute the latest binary version of VLC on a DVD-ROM,
you should also include the <a href="http://www.videolan.org/vlc/download-sources.html">VLC source code</a>
and the source code for the underlying included libraries on the same media.
</p>

<p>If you plan to distribute the latest binary version of VLC on a website,
you should provide a link to the <a href="http://www.videolan.org/vlc/download-sources.html">VLC source code</a>.
</p>

<p>There are other ways to comply with the GPL,
but this should be the simplest one as it does not rely on a contract.
</p>

<h2>Is libdvdcss legal?</h2>
<p> The use and distribution of the libdvdcss library is controversial
in some signatories countries
of the <a href="http://www.wipo.int/">WIPO</a> Copyright Treaty,
and the corresponding European Union Copyright Directive (EUCD) within the EU.
For instance, the United States of America,
it is implemented through the DMCA (Digital Millennium Copyright Act).
</p>
<p> Different countries implement subtly different restrictions
on the use of anti-piracy counter-measures.
If you are unsure about the legality of using and distributing this library
in your country, please consult your lawyer.
</p>

<p><strong>Beware</strong>:
VLC media player installers for Microsoft Windows and MacOS X
are distributed with the libdvdcss library included.
The VLC media player source code does <strong>not</strong> include libdvdcss.
Also Linux VLC packages normally do not include libdvdcss.
</p>

<h2>Third parties are selling your software.
<a name="sale">Is this legal?</a></h2>
<p>Yes, absolutely.
</p>
<p>Our licensing terms explicitly allow selling or sublicensing our software.
We allow that very much on purpose.
For instance, we like computer magazines to include our software on their CDs,
and we also like Linux distributions, PC manufacturers and storage device
vendors to pre-install our software and make money out of it.
For us, that is basically zero-cost advertisement.
See also <a href="http://www.gnu.org/philosophy/selling.html">the rationale
from the Free Software Foundation</a> (those who wrote our licensing terms).
</p>
<p>We reckon that certain form of sales, such as online commercial downloads,
provide no value to us neither our customers.
Many people consider those sales to be deceptive, if not outright fraudulent.
As our software can be downloaded for free from our website and mirrors,
<cite>there should be no need to pay</cite>.
Unfortunately, it is impossible to differentiate good and bad sales,
so we allow all of them.
Besides, we are open-source enthusiasts, not lawyers.
</p>

<h2>I bought your software.
<a name="refund">How do I get a refund?</a></h2>
<p>The VideoLAN project and its <kbd>videolan.org</kbd> website
are in no way involved with retail or gross sale of any product.
As a consequence, the VideoLAN project is unable to provide any refund.
To put it bluntly, we did not get your money, so we cannot give it back.
</p>
<p>If you want a refund for software from the VideoLAN project,
you must solicit it from the merchant that sold you the product.
Depending on the applicable consumer protection laws and contractual terms
you could have agreed to,
you might consider turning to the financial intermediaries,
and/or the competent administration for commercial fraud
(e.g. the DGCCRF in France).
</p>

<hr />
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

<hr />
<h1>Miscellaneous</h1>

<h2>Why are your mailing-lists and your website in english?</h2>
<p>VideoLAN's developers come from all around the world and english is the only language they can use to communicate together. Although great care is given to the translation of VLC in various languages, maintaining translations of our website costs too much more time than we can afford.</p>

<h2>What to do if I can't find an answer to my question here?</h2>
<p>Have a look at the <a href="http://wiki.videolan.org/">Wiki</a>.
There is another FAQ, which answers more questions on using and compiling the VideoLAN applications.
Technical terms on streaming and multimedia are discussed too.</p>

<p>Search the <a href="http://forum.videolan.org/">forums</a> for your question.
There are many solutions to problems on using our programs.</p>

<p>If your question still was not answered, post it on the forums
or mail an appropriate <a href="http://www.videolan.org/support/lists.html">mailing-list</a>.
More informations on support provided by the project
or consulting companies can be found on the <a href="http://www.videolan.org/support/">support page</a>.
</p>

</div>
<?php footer('$Id$'); ?>

<?php
   $title = "VideoLan - Bug reporting";
   $lang = "en";
   $date = "25 January 2003";
   $menu = array( "support", "report" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> Bug reporting </h1>

<p>If you find any bugs, or if you experience any crashes, then we would very much like to hear of these problems/suggestions. To make dealing with these as easy as possible, we have created this checklist for you.
</p>

<h2>Is it truly a new bug?</h2>

<p>It may sound strange, but many of the bugreports we get are not really bugs at all, or have been know for months. Please check the following:</p>
<ul>
<li>Are you using the latest version of VLC? Bug reports on older versions of VLC are likely to be ignored, because changes in the program may make it impossible to reproduce the bug, or may even have fixed it. Always make sure the issue you want to report is still present in the current version of VLC.</li>
<li>Have you reset your preferences and restarted VLC yet? Often old preferences and incorrect settings are the cause of an issue you are seeing. The Windows version of VLC has an entry in the <i>Start Menu</i> that completely resets your VLC setup. It is called: <i>Reset VLC defaults and quit</i>. On other platforms you should read this <a href="/doc/faq/en/index.html#id239188">FAQ-entry</a>. (Uninstalling VLC does not remove it's old settings.) Double check that your issue still exists. </li>

<li>Some things are simply NOT supported by VLC. We have a <a href="/vlc/features.html">basic list</a> of features that are supported in VLC and a <a href="https://trac.videolan.org/vlc/query?action=view&severity=enhancement&order=priority">list of things</a> we would like to implement in the future. If your suggestion is not on this list, you might want to make a <i>feature request</i> in the <a href="http://forum.videolan.org/viewforum.php?f=7">Requests Forum</a>, asking the developers to support this. Remember that we all do this in our spare time. There is no timeline whatsoever for the implementation of these enhancements and we do not make ANY promises as to when we will add them to VLC. If you really want something right now, you best implement it yourself. Look <a href="http://developers.videolan.org/vlc">here</a> to see how you can develop on VLC.</li>
<li>Many bugs are already known. Sometimes they are already fixed for the next version of VLC. Please <a href="https://trac.videolan.org/vlc/search?q=&ticket=on">search</a> the list of known and fixed issues. If you find your issue, see if it is already closed. The page of the issue will then show something like: <i>Ticket #87 (Closed: fixed)</i>.</li>
</ul>

<h2>So you still think you found a bug?</h2>

<p>Then it is time to start looking at the <a href="http://forum.videolan.org">forums</a>. <a href="http://forum.videolan.org/search.php">Search</a> them and see if someone else has asked a similar question or has seen a similar bug. If not, post your question or problem in the <a href="http://forum.videolan.org/viewforum.php?f=2">VLC media player forum</a> and make sure you include as much information as possible (see also the pointers below). Of course you can also mail us with your problems when you subscribe to the <a href="/support/lists.html">mailinglist</a>.</p>
<p>When the bug has been confirmed by a developer or forum moderator, it can be entered into our <a href="https://trac.videolan.org/vlc/">Trac system</a> by one of them. Normal users cannot add new issues. 
</p>

<p>When you post on the forum or email us, please provide as much information as possible in your report. 
We try to answer all your mails, posts and reports, but there are so many that sometimes we simply don't have the time to do so. The more sound details you provide about your issue, the better the chance that we will investigate it fully.</p>

<h2>What to include in your report</h2>

<p>Please gather the following information and send it along with your report.</p>
<ul>
<li>Make sure you are registered on the forum, or that your email has a valid reply address, so we can get back to you with possible additional questions. Reports without <b>contact information</b> or by unregistered users, will not be handled by the team.</li>
<li>Your operating <b>system</b> and the <b>version</b> you use. VLC runs on many systems and this information is really important.<br />
	<i>For instance: WinXP, MacOSX 10.2 or Mandrake 8.1</i></li>
<li>The <b>hardware</b> you use. Make sure to name all the audio and video hardware in question that might be related to VLC's usage.<br />
        <i>For instance: iMac G4 or Pentium4 with GeForce3, with an external USB dolby surround output device.</i></li>
<li>The <b>version</b> of VLC you use.<br />
	<i>For instance: VLC 0.8.2 (You should always use the latest version of course)</i></li>
<li>The exact <b>situation</b> in which the problem occurred. Please describe in as much detail as possible.<br />
	<i>For instance: I pressed the play button while fast-forwarding and VLC crashed.</i></li>
<li>Can you always <b>reproduce</b> the problem in a certain way?<br />
	<i>For instance: The crash always occurs with the 'Matrix' DVD after 10 minutes.</i></li>
<li>The type of <b>movie</b> you were playing. And wether or not the issuesis present on other types of movies.<br />
	<i>For instance: DVD, Divx or mpeg.</i></li>
<li>The video<b>sample</b> in question:<br />
	 If the issue is specific to a certain movie, it can help a lot if we have the movie itself. In this case please upload as much of the file as you can to our <a href="ftp://streams.videolan.org/incoming">FTP samplesserver</a>. Give the file a distinct name, and upload a textfile with the same name in which you again describe the problem. Report this upload in your forum posting and tell us the name of your file. This makes sure we can more easily find back your sample.</li>
</ul>

<h2>Additional remarks</h2>

<p>If you can, or if it applies to you try to take into account the following.</p>

<h3>Mac OS X users</h3>
<ul>
<li>Please send along the last part of ~/Library/Logs/CrashReporter/VLC.crash.log if you can. Many crashes of VLC are logged in this file. You can open the file from VLC by going to the menu Window and choosing Messages. Now click the "Open CrashLog" button.<br />
Please make sure you send the last crash (at the bottom of the file) and that it actually is the crash you described. The Date/Time field reports the time of the crash so that way you can check if it is the crash you experienced, or an earlier one.</li>
</ul>

<h3>Compile problems</h3>
<ul>
<li>Make sure you have read the developer <a href="http://developers.videolan.org/vlc/">documentation</a>.</li>
<li>Give the full log showing the problem
<blockquote>
  <p>
  ./configure &lt;options&gt; &gt; logfile.txt 2&gt;&amp;1 <br />
  make 2&gt;&amp;1 > logfile.txt 2&gt;&amp;1
  </p>
</blockquote>
</li>
<li>When dealing with a ./configure issue, please provide the generated config.log file.</li>
<li>Your compiler brand and version may be relevant here as well.</li>
</ul>

<p>
<b>Written by Derk-Jan Hartman, for the VideoLAN Team.</b>
</p>

<?php footer('$Id$'); ?>

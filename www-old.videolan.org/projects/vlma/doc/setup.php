<?php
   $title ="VideoLAN Manager - Installation";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>VLMa installation</h1>

<!--<div id="videocontainer">
<script src="http://download.videolan.org/swfobject.js" type="text/javascript"></script>
<script type="text/javascript">
var s1 = new SWFObject("http://download.videolan.org/mediaplayer.swf","mediaplayer","600","400","8");
s1.addParam("allowfullscreen","true");
s1.addVariable("width","600");
s1.addVariable("height","400");
s1.addVariable("file","http://download.videolan.org/projects/vlma/doc/screencast.flv");
s1.write("videocontainer");
</script>
</div>-->

<h2>Prerequisities</h2>

<ul class="bullets">
 <li>Java 2 SDK 5.0 or later</li>
 <li>VLMa binary distribution (either downloaded from a mirror or built from
   source)</li>
</ul>

<h2>Common</h2>

<p>First extract VLMa distribution archive to the folder of your choice, you
should see the following folders:</p>

<ul class="bullets">
 <li>bin/      Command line wrappers to manage VLMa</li>
 <li>conf/     Configuration</li>
 <li>data/     Data</li>
 <li>lib/      Dependencies</li>
 <li>logs/     Log directory</li>
 <li>webapps/  Webapps to deploy</li>
 <li>work/     Folder needed by the servlet container</li>
</p>

<h2>Installation on UNIX-like OSes (Mac OS, Linux, etc.)</h2>

<p>Ensure that the JAVA_HOME environment variable has been set. Run the
following command:</p>
<pre> % echo $JAVA_HOME </pre>

<p>If it does not print anything to the standard input but whitespaces, this
means that JAVA_HOME has not been set. You can set JAVA_HOME using the
following command:
<pre> % export JAVA_HOME=/path/to/your/JDK/installation </pre>

<p>Then open a terminal and go to the folder where you extracted VLMa. You can
run VLMa daemon by running the following command:</p>
<pre> % bin/vlmad start</pre>

<p>To run the web UI, open a new terminal and run:</p>
<pre> % bin/vlmaw start</pre>

<h2>Installation on Windows</h2>

<p>Ensure that the JAVA_HOME environment variable has been set and that it
points to a valid JDK installation. To do this, have a look at:</p>
<ul class="bullets">
  <li><a href="http://support.microsoft.com/kb/310519">http://support.microsoft.com/kb/310519</a> for Windows XP,</li>
  <li><a href="http://support.microsoft.com/kb/931715">http://support.microsoft.com/kb/931715</a> for Windows Vista.</li>
</ul>

<p>Then open a prompt and change directory to where you extracted VLMa. You can
run VLMa daemon by running the following command:</p>
<pre> % bin\vlmad start</pre>

<p>To run the web UI, open a new prompt and run:</p>
<pre> % bin\vlmaw start</pre>

<h2>Access to the web interface</h2>

<p>To finish with, go to http://localhost:8080/vlmaw, you should see VLMa
dashboard which tells you which medias are currently streamed and the list of
servers VLMa didn't manage to contact through their telnet interface.</p>

<p>The use of the embedded servlet container is a convenience for testing. If
you plan to use VLMa in production, we recommend you make a complete
installation of a servlet container like Tomcat, Jetty or whichever other
servlet container.</p>

</div>

<?php footer('') ?>

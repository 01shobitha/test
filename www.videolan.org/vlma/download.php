<?php
   $title ="VideoLAN Manager";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<h1>VLMa - Download</h1>

<h2>Jars</h2>

<p>Latest VLMa jars (0.1):</p>
<ul class="bullets">
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.1/vlmad.jar">VLMad jar</a> (4.5 MB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.1/vlmaw.war">VLMaw war</a> (5.6 MB)</li>
</ul>

<h2>Tarballs</h2>

<p>Latest VLMa source tarballs (0.1):</p>
<ul>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.1/vlma.zip">VLMa zip</a> (212 KB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.1/vlma.tar.gz">VLMa tar.gz</a> (88 KB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.1/vlma.tar.bz2">VLMa tar.bz2</a> (72 KB)</li>
</ul>

<h2>Older versions</h2>

<p>Older versions can be found by browsing the <a href="http://download.videolan.org/pub/videolan/vlma/">FTP archive</a>.</p>

<h1>VLMa - Installation</h1>

<p>Installing the VLMa is very simple. This <a href="doc/setup.html">screencast</a> explains the procedure.</p>

<ul class="bullets">
  <li>The daemon:<br/>
  This package contains all dependencies. You have just to run the deamon using Java VM :<br/>
  java -jar vlmad.jar</li>

  <li>The Web Application:<br/>
  Deploy the vlmaw.war archive using your favorite servlet container. If you don't have any, take a look
  at <a href="http://tomcat.apache.org">Tomcat</a>.</li>
</ul>

</div>

<div id="right">
  <div class="panel-blue"> <!-- begin panel -->

    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
        <h1>Git</h1>

        <p>VLMa's source code is available through Git at</p>
        <pre>git://git.videolan.org/vlma.git</pre>
        <p>or browseable online using 
        <a href="http://git.videolan.org/?p=vlma.git;a=summary">GitWeb</a></p>


      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

  <div class="panel-orange"> <!-- begin panel -->

    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
        <h1>Requirements</h1>

        <h2>Running VLMa</h2>

        <ul>
          <li>JRE >= 5.0</li>
          <li>A servlet container (like Tomcat or Jetty)</li>
        </ul>

        <h2>Building VLMa</h2>

        <ul>
          <li>JDK >= 5.0</li>
          <li>Maven 2</li>
        </ul>

      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

</div>

<?php footer('$Id$') ?>

<?php
   $title ="VideoLAN Manager";
   $lang = "en";
   $menu = array( "vlma", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<h1>VLMa - Download</h1>

<h2>Binary packages</h2>

<p>Latest binary packages (0.2.0):</p>
<ul class="bullets">
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-bin.zip">VLMa (zip)</a> (13.3 MB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-bin.tar.gz">VLMa (tar.gz)</a> (13.3 MB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-bin.tar.bz2">VLMa (tar.bz2)</a> (13.3 MB)</li>
</ul>

<h2>Tarballs</h2>

<p>Latest VLMa source tarballs (0.2.0):</p>
<ul class="bullets">
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-src.zip">VLMa (zip)</a> (328 KB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-src.tar.gz">VLMa (tar.gz)</a> (136 KB)</li>
  <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-src.tar.bz2">VLMa (tar.bz2)</a> (112 KB)</li>
</ul>

<h2>Older versions</h2>

<p>Older versions can be found by browsing the <a href="http://download.videolan.org/pub/videolan/vlma/">FTP archive</a>.</p>

<h1>VLMa - Installation</h1>

<p>Build and installation instructions are detailed in the INSTALL file distributed with VLMa and on <a href="/vlma/doc/setup.html">the setup page</a>.</p>

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
        <pre>http://git.videolan.org/git/vlma.git</pre>
        <p>or browseable online using 
        <a href="http://git.videolan.org/?p=vlma.git;a=summary">GitWeb</a>.</p>


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

        <b>Running VLMa</b>

        <ul>
          <li>Java 2 SDK 5.0 or later</li>
          <li>A servlet container (like Tomcat or Jetty)</li>
        </ul>

        <b>Building VLMa from source</b>

        <ul>
          <li>Java 2 SDK 5.0 or later</li>
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

<?php
   $title ="VideoLAN Manager";
   $lang = "en";
   $new_design = true;
   $menu = array( "vlma", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
  <h1 class="bigtitle">VLMa <small>Downloads</small></h1>
  <div class="row">
    <div class="column col-xs-12 col-md-6">
      <h2>Binary packages</h2>

      <p>Latest binary packages (0.2.0):</p>
      <ul class="bullets">
        <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-bin.zip">VLMa (zip)</a> (13.3 MB)</li>
        <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-bin.tar.gz">VLMa (tar.gz)</a> (13.3 MB)</li>
        <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-bin.tar.bz2">VLMa (tar.bz2)</a> (13.3 MB)</li>
      </ul>
    </div>
    <div class="column col-xs-12 col-md-6">
      <h2>Tarballs</h2>

      <p>Latest VLMa source tarballs (0.2.0):</p>
      <ul class="bullets">
        <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-src.zip">VLMa (zip)</a> (328 KB)</li>
        <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-src.tar.gz">VLMa (tar.gz)</a> (136 KB)</li>
        <li><a href="http://download.videolan.org/pub/videolan/vlma/0.2.0/vlma-0.2.0-src.tar.bz2">VLMa (tar.bz2)</a> (112 KB)</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="column col-xs-12 col-md-6">
      <h2>Installation</h2>
      <p>Build and installation instructions are detailed in the INSTALL file distributed with VLMa and on the <a href="/vlma/doc/setup.html">setup page</a>.</p>
    </div>
    <div class="column col-xs-12 col-md-6">
      <h2>Older versions</h2>
      <p>Older versions can be found by browsing the <a href="http://download.videolan.org/pub/videolan/vlma/">FTP archive</a>.</p>
    </div>
  </div>

  <div class="row">
    <div class="column col-xs-12 col-md-6">
      <h2>Requirements</h2>
        <h3>Running VLMa</h3>
        <ul class="bullets">
          <li>Java 2 SDK 5.0 or later</li>
          <li>A servlet container (like Tomcat or Jetty)</li>
        </ul>

        <h3>Building VLMa from source</h3>
        <ul class="bullets">
          <li>Java 2 SDK 5.0 or later</li>
          <li>Maven 2</li>
        </ul>
    </div>
    <div class="column col-xs-12 col-md-6">
      <h2>Git</h2>
      <p>VLMa's source code is available through Git at</p>
      <pre><code>http://git.videolan.org/git/vlma.git</code></pre>
      <p>or browseable online using <a href="http://git.videolan.org/?p=vlma.git;a=summary">GitWeb</a>.</p>
    </div>
  </div>
</div>

<?php footer('$Id$') ?>

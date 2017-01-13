<?php
   $title ="VideoLAN Manager - Installation";
   $lang = "en";
   $new_design = true;
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">VLMa <small>Installation</small></h1>

    <?php /* TODO: Re-add missing http://download.videolan.org/projects/vlma/doc/screencast.flv */ ?>

    <h2>Prerequisities</h2>
    <ul class="bullets">
        <li>Java 2 SDK 5.0 or later</li>
        <li>VLMa binary distribution (either downloaded from a mirror or built from source)</li>
    </ul>

    <h2>Common</h2>
    <p>First extract VLMa distribution archive to the folder of your choice, you should see the following folders:</p>

    <dl class="dl-horizontal">
        <dt><code>bin/</code></dt>
        <dd>Command line wrappers to manage VLMa</dd>

        <dt><code>conf/</code></dt>
        <dd>Configuration</dd>

        <dt><code>data/</code></dt>
        <dd>Data</dd>

        <dt><code>lib/</code></dt>
        <dd>Dependencies</dd>

        <dt><code>logs/</code></dt>
        <dd>Log directory</dd>

        <dt><code>webapps/</code></dt>
        <dd>Webapps to deploy</dd>

        <dt><code>work/</code></dt>
        <dd>Folder needed by the servlet container</dd>
    </dl>


    <h2>Installation on UNIX-like OSes (Mac OS, Linux, etc.)</h2>

    <p>Ensure that the JAVA_HOME environment variable has been set. Run the following command:</p>
    <pre><code>% echo $JAVA_HOME</code></pre>

    <p>If it does not print anything to the standard input but whitespaces, this means that JAVA_HOME has
    not been set. You can set JAVA_HOME using the following command:
    <pre><code>% export JAVA_HOME=/path/to/your/JDK/installation</code></pre>

    <p>Then open a terminal and go to the folder where you extracted VLMa. You can
    run VLMa daemon by running the following command:</p>
    <pre><code>% bin/vlmad start</code></pre>

    <p>To run the web UI, open a new terminal and run:</p>
    <pre><code>% bin/vlmaw start</code></pre>


    <h2>Installation on Windows</h2>

    <p>Ensure that the JAVA_HOME environment variable has been set and that it
    points to a valid JDK installation. To do this, have a look at:</p>
    <ul class="bullets">
      <li><a href="http://support.microsoft.com/kb/310519">http://support.microsoft.com/kb/310519</a> for Windows XP,</li>
      <li><a href="http://support.microsoft.com/kb/931715">http://support.microsoft.com/kb/931715</a> for Windows Vista.</li>
    </ul>

    <p>Then open a prompt and change directory to where you extracted VLMa. You can
    run VLMa daemon by running the following command:</p>
    <pre><code>% bin\vlmad start</code></pre>

    <p>To run the web UI, open a new prompt and run:</p>
    <pre><code>% bin\vlmaw start</code></pre>


    <h2>Access to the web interface</h2>

    <p>To finish with, go to http://localhost:8080/vlmaw, you should see VLMa
    dashboard which tells you which medias are currently streamed and the list of
    servers VLMa didn't manage to contact through their telnet interface.</p>

    <p>The use of the embedded servlet container is a convenience for testing. If
    you plan to use VLMa in production, we recommend you make a complete
    installation of a servlet container like Tomcat, Jetty or whichever other
    servlet container.</p>
</div>

<?php footer() ?>

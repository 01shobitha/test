<?php
   $title = "libVLC media player, Open Source video framework for every OS!";
   $lang = "en";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

<div>
    <h1 class="bigtitle">libVLC</h1>
<div class="projectDescription">
<p><b>libVLC</b> is the interface to the core of <a href="/vlc/">VLC media player</a> that allows
developers to create application using the <a href="/vlc/">VLC</a>
 <a href="/vlc/features.html">features</a>.</p>
</div>

<h2>Technical Diagram</h2>
<?php image( "libvlc_stack.png", "libVLC dev stack" ); ?>

</div>

<?php footer(); ?>


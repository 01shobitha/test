<?php
    $title = "libVLC media player, Open Source video framework for every OS!";
    $lang = "en";
    $new_design = true;
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
    require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

<div class="container">
    <h1 class="bigtitle">libVLC</h1>

    <p><b>libVLC</b> is the core engine and the interface to the multimedia framework
    on which <a href="/vlc/">VLC media player</a> is based.</p>
    <p>It allows developers to create a wide range of multimedia applications
    using the <a href="/vlc/">VLC</a> <a href="/vlc/features.html">features</a>.</p>

    <h2>Technical Diagram</h2>
    <a href="//images.videolan.org/images/libvlc_stack.png">
        <img style="max-width: 100%" src="//images.videolan.org/images/libvlc_stack.png" alt="libVLC dev stack" />
    </a>

</div>

<?php footer(); ?>


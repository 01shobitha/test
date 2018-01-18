<?php
    $title = "libdvdnav";
    $lang = "en";
    $new_design = true;
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">libdvdnav</h1>

    <p>
        <code>libdvdnav</code> is a library for developers of multimedia applications.
        It allows easy use of sophisticated DVD navigation features such as DVD menus,
        multiangle playback and even interactive DVD games. All this functionality is
        provided through a simple API which provides the DVD playback as a single
        logical stream of blocks, intermitted by special dvdnav events to report certain
        conditions. The main usage of libdvdnav is a loop regularly calling a function
        to get the next block, surrounded by additional calls to tell the library of
        user interaction. The whole DVD virtual machine and internal playback states
        are completely encapsulated.
    </p>

    <h2>Get libdvdnav</h2>
    <p>The latest version of <code>libdvdnav</code> is <b>6.0.0</b>.</p>

    <p><code>libdvdnav</code> is available through <a href="https://wiki.videolan.org/Git">Git</a> or by browsing the <a href="//download.videolan.org/pub/videolan/libdvdnav/">releases</a>.</p>

    <h3>Git checkout</h3>
    <pre><code>$ git clone http://code.videolan.org/videolan/libdvdnav.git</code></pre>
    <p>You can also access the code <a href="https://code.videolan.org/videolan/libdvdnav">online</a>.</p>

    <h2>Get libdvdread</h2>
    <p>The latest version of <code>libdvdread</code> is <b>6.0.0</b>.</p>

    <p><code>libdvdread</code> is available through <a href="https://wiki.videolan.org/Git">Git</a> or by browsing the <a href="//download.videolan.org/pub/videolan/libdvdread/">releases</a>.</p>

    <h3>Git checkout</h3>
    <pre><code>$ git clone http://code.videolan.org/videolan/libdvdread.git</code></pre>
    <p>You can also access the code <a href="https://code.videolan.org/videolan/libdvdread">online</a>.</p>

    <h2>Legal information</h2>
    <p>For legal information, see our <a href="/legal.html">legal page</a></p>
</div>
<?php footer('$Id$'); ?>

<?php
    $title = "libaacs";
    $lang = "en";
    $new_design = true;
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

    $libaacs_version = "0.9.0";
?>

<div class="container">
    <h1 class="bigtitle">libaacs</h1>

    <p><code>libaacs</code> is a <b>research project</b> to implement the Advanced Access Content System
    <a href="http://www.aacsla.com/specifications/">specification</a>.</p>
    <p>This <b>research</b> project provides, through an <b>open-source</b> library, a way to understand how
    the <a href="http://en.wikipedia.org/wiki/Advanced_Access_Content_System">AACS</a> works.</p>

    <p>This <b>research</b> project is mainly developed by an international team of
    developers from <a href="http://www.doom9.org/">Doom9</a>.</p>

    <p>Latest release is <b>libaacs <?php echo $libaacs_version; ?></b></p>

    <p><b>NB:</b> this project <b>doesn't offer any key or certificate</b> that could be used to decode
    encrypted copyrighted material.</p>

    <h2>Features</h2>
    <ul class="bullets">
        <li><b>Portability:</b> Currently supported platforms are GNU/Linux, Windows, MacOS X. The main dependency is libgcrypt for all cryptographic functions.</li>
        <li><b>Freedom:</b> <code>libaacs</code> is released under a Free Software license, ensuring it will stay free.</li>
        <li><b>Legal:</b> <code>libaacs</code> does not include any key or certificate and respects copyright.</li>
        <li><b>Fun:</b> <code>libaacs</code> is a fun project to hack on, because it is DRM and crypto-related.</li>
    </ul>

    <h2>Get libaacs</h2>
    <p>You can get <code>libaacs</code> latest release on our ftp:
        <a href="ftp://ftp.videolan.org/pub/videolan/libaacs/<?php echo "{$libaacs_version}/libaacs-{$libaacs_version}.tar.bz2" ?>">
            <?php echo "libaacs {$libaacs_version}" ?>
        </a>
    </p>

    <p><code>libaacs</code> is also available through <a href="https://wiki.videolan.org/Git">Git</a> at:</p>
    <pre><code>git clone https://git.videolan.org/git/libaacs.git</code></pre>
    <p>You can browse the source code at  <a href="http://git.videolan.org/?p=libaacs.git">git.videolan.org</a>.</p>

    <h2>Mailing list</h2>
    <p>You can discuss about libaacs on the <a href="https://mailman.videolan.org/listinfo/libaacs-devel">libaacs-devel mailing list</a>.</p>

    <h2>Legal</h2>
    <p><code>libaacs</code> does not infringe DRM's right or copyright. See more on our <a href="/legal.html">legal page</a>.</p>

    <h3>Legal Contact</h3>
    <p>Si vous avez le moindre problème légal (If you have ANY issue with the legal part): <a href="/contact.html">Contact</a></p>

    <!--<h2>Documentation</h2>-->
</div>

<?php footer(); ?>

<?php
    $title = "libbdplus";
    $lang = "en";
    $new_design = true;
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

    $libbdplus_version = "0.1.2";
?>

<div class="container">
    <h1 class="bigtitle">libbdplus</h1>

    <p><code>libbdplus</code> is a <b>research project</b> to implement the
    <a href="http://www.bdplusllc.com/">BD+ System Specifications</a>.</p>
    <p>This <b>research</b> project provides, through an <b>open-source</b> library, a way to understand how
    the <a href="http://en.wikipedia.org/wiki/BD+">BD+</a> works.</p>

     <p>Latest release is <b>libbdplus <?php echo $libbdplus_version; ?></b></p>

    <p><b>NB:</b> this project <b>doesn't offer any key, configuration file or certificate</b> that could be used to decode
    encrypted copyrighted material.</p>

    <h2>Features</h2>
    <ul class="bullets">
        <li><b>Portability:</b> Currently supported platforms are GNU/Linux, Windows, MacOS X. The main dependency is libgcrypt for all cryptographic functions.</li>
        <li><b>Freedom:</b> <code>libbdplus</code> is released under a Free Software license, ensuring it will stay free. </li>
        <li><b>Legal:</b> <code>libbdplus</code> does not include any key or certificate and respects copyright.</li>
        <li><b>Fun:</b> <code>libbdplus</code> is a fun project to hack on, because it is in its starting phase.</li>
    </ul>

    <h2>Get libbdplus</h2>
    <p>You can get <code>libbdplus</code> latest release on our ftp:
        <a href="ftp://ftp.videolan.org/pub/videolan/libbdplus/<?php echo "{$libbdplus_version}/libbdplus-{$libbdplus_version}.tar.bz2" ?>">
            <?php echo "libbdplus {$libbdplus_version}" ?>
        </a>
    </p>

    <p><code>libbdplus</code> is also available through <a href="https://wiki.videolan.org/Git">Git</a> at:</p>
    <pre><code>git clone http://git.videolan.org/git/libbdplus.git</code></pre>
    <p>You can browse the source code at  <a href="http://git.videolan.org/?p=libbdplus.git">git.videolan.org</a>.</p>

    <h2>Mailing list</h2>
    <p>You can discuss about libbdplus on the <a href="https://mailman.videolan.org/listinfo/libbdplus-devel">libbdplus-devel mailing list</a>.</p>

    <h2>Legal</h2>
    <p><code>libbdplus</code> does not infringe DRM's right or copyright. See more on our <a href="/legal.html">legal page</a>.</p>

    <h3>Legal Contact</h3>
    <p>Si vous avez le moindre problème légal (If you have ANY issue with the legal part): <a href="/contact.html">Contact</a></p>

    <!--<h2>Documentation</h2>-->
</div>

<?php footer(); ?>

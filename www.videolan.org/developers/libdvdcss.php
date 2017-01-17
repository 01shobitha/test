<?php
    $title = "libdvdcss";
    $lang = "en";
    $new_design = true;
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">libdvdcss</h1>

    <p>
        <code>libdvdcss</code> is a simple library designed for accessing DVDs like a block device without having to bother about the decryption.
    </p>

    <h2>Features</h2>
    <ul class="bullets">
        <li><b>Portability</b>. Currently supported platforms are GNU/Linux, FreeBSD, NetBSD, OpenBSD, Haiku, Mac OS X, Solaris, QNX, OS/2, and Windows NT 4.0 SP4 (with IE 5.0) or later.</li>
        <li><b> Simplicity</b>. A DVD player can be built around the <code>libdvdcss</code> API using no more than 4 or 5 library calls.</li>
        <li><b>Freedom</b>. <code>libdvdcss</code> is released under the General Public License, ensuring it will stay free, and used only for free software products.</li>
        <li><b>Just better</b>. Unlike most similar projects, <code>libdvdcss</code> does not require the region of your drive to be set. </li>
    </ul>

    <h2>Get libdvdcss</h2>
    <p>The latest version of <code>libdvdcss</code> is <b>1.4.0</b>.</p>

    <p>Our Debian/Ubuntu repository can be accessed by adding the following lines to /etc/apt/sources.list</p>
    <pre><code>deb http://download.videolan.org/pub/debian/stable/ /</code></pre>
    <pre><code>deb-src http://download.videolan.org/pub/debian/stable/ /</code></pre>
    <p>And by running</p>
    <pre><code>wget -O - http://download.videolan.org/pub/debian/videolan-apt.asc | sudo apt-key add -</code></pre>
    <p><code>libdvdcss</code> is available through <a href="https://wiki.videolan.org/Git">Git</a> or by browsing the <a href="//download.videolan.org/pub/libdvdcss/">releases</a>.</p>

    <h3>Git checkout</h3>
    <pre><code>$ git clone http://code.videolan.org/videolan/libdvdcss.git</code></pre>
    <p>You can also access the code <a href="https://code.videolan.org/videolan/libdvdcss">online</a>.</p>

    <h2>Changelog and Documentation</h2>
    <p>You can see the <a href="libdvdcss/NEWS">release notes</a> and the <a href="libdvdcss/ChangeLog">ChangeLog</a>.</p>

    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Document</th>
                <th>Status</th>
                <th>Download</th>
                <th>Maintainer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Libdvdcss API documentation</td>
                <td>Up-to-date</td>
                <td><a href="libdvdcss/doc/html/">HTML</a></td>
                <td>Generated by Doxygen</td>
            </tr>
        </tbody>
    </table>


    <h2>Additional Information</h2>

    <p>If you want to read more on this subject, we publish a <a
    href="libdvdcss.txt">non-technical description of libdvdcss</a>.</p>

    <h3>Legal information</h3>
    <p>For legal information, see our <a href="/legal.html">legal page</a></p>
</div>
<?php footer('$Id$'); ?>

<?php
    $title = "biTStream";
    $lang = "en";
    $new_design = true;
    $body_color = "red";
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">biTStream</h1>

    <p><code>biTStream</code> is a set of C headers allowing a simpler access to binary
    structures such as specified by MPEG, DVB, IETF, SMPTE, IEEE, SCTE, etc. </p>


    <h2>biTStream vs. libdvbpsi</h2>
    <p>libdvbpsi converts binary structures to C structures. Lists are implemented
    with chained lists of C structures.</p>

    <p>biTStream is lower level, and more efficient: fewer memory allocations,
    fewer memory copies. It also features a better separation between layers
    and specifications.</p>

    <h2>Current features</h2>
    <p><code>biTStream</code> currently implements the following specifications:</p>
    <ul class="bullets">
        <li>ISO/IEC 13818-1 (MPEG-2 systems)</li>
        <li>ISO/IEC 13818-2 (MPEG-2 video)</li>
        <li>ISO/IEC 13818-3 (MPEG-2 audio)</li>
        <li>ISO/IEC 14496-3 (MPEG-4 advanced audio coding)</li>
        <li>ISO/IEC 14496-10 (MPEG-4 advanced video coding)</li>
        <li>ITU-T H.265 (high efficiency video coding)</li>
        <li>ATSC A/52</li>
        <li>ETSI EN 300 468 (Service Information in DVB systems)</li>
        <li>ETSI EN 50 221 (Common Interface Specification)</li>
        <li>ETSI TS 103 194 (DVB Simulcrypt)</li>
        <li>IETF RFC 3550 (Real Time Protocol)</li>
        <li>IETF RFC 2250 (Real Time Protocol for MPEG-1/2 audio/video)</li>
        <li>SMPTE 2022-1 (Forward Error Correction)</li>
        <li>SMPTE 2022-6 (hbrmt)</li>
        <li>SMPTE 291 (Ancillary Data Packet and Space Formatting)</li>
        <li>SMPTE 337 (Non-PCM data in AES3)</li>
        <li>IEEE 802.3 (Ethernet frames)</li>
        <li>SCTE-35 (Splice Information Table)</li>
        <li>SCTE-104 (Automation to Compression Communications API)</li>
    </ul>

    <p>In particular it supports the following MPEG and DVB structures (parsers and writers):</p>
    <ul class="bullets">
        <li>Program Allocation Table (PAT)</li>
        <li>Conditional Access Table (CAT)</li>
        <li>Transport Stream Descriptor Table (TSDT)</li>
        <li>Program Map Table (PMT)</li>
        <li>Network Information Table (NIT)</li>
        <li>Bouquet Association Table (BAT)</li>
        <li>Service Definition Table (SDT)</li>
        <li>Event Information Table (EIT)</li>
        <li>Time and Date Table (TDT)</li>
        <li>Time Offset Table (TOT)</li>
        <li>Running Status Table (RST)</li>
        <li>Stuffing Table (ST)</li>
        <li>Discontinuity Information Table (DIT)</li>
        <li>Selection Information Table (SIT)</li>
        <li>MPEG descriptors 0x02 to 0x12 and 0x1b to 0x2c</li>
        <li>DVB descriptors 0x40 to 0x6e and 0x7a to 0x7c</li>
    </ul>

    <h2>Get biTStream</h2>
    <p>The latest <code>biTStream</code> release is <a href="https://get.videolan.org/bitstream/1.3/"><b>version 1.3</b></a>.</p>
    <p><code>biTStream</code> is available through <a href="https://wiki.videolan.org/git">git</a> at:</p>
    <pre><code>git clone https://code.videolan.org/videolan/bitstream.git</code></pre>

    <p>All releases can be found by browsing the <a href="https://get.videolan.org/bitstream/"><b>releases</b></a>.</p>
    <p>The source code can browsed at <a href="https://code.videolan.org/videolan/bitstream">code.videolan.org</a>.</p>


    <h2>Extending biTStream</h2>
    <p>A lot of MPEG and DVB tables and descriptors are not implemented yet, or are incomplete. Patches are very welcome.</p>

    <p>Though biTStream is originally targeted at video applications in general
    and MPEG-2 transport stream in particular, the same principle can be
    followed with other binary data types, and patches are welcome here too.
    Just try to follow a coherent directory naming.</p>

    <p>biTStream is released under the MIT license because since it is a
    direct application of standards, there is no added value. The MIT license
    doesn't require you to contribute back your changes, and you can use
    biTStream in proprietary applications. However, if you add new structures,
    or fix bugs in current structures, you'd be very nice to contribute them
    (again, there is no point in concealing this). Thanks.</p>

    <h2>Mailing list</h2>
    <p>There is a mailing-list dedicated to biTStream development. Patches can be sent there.
    Subscribe <a href="/developers/lists.html">here</a>.</p>
</div>
<?php footer(); ?>

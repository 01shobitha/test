<?php
    $title ="VideoLAN Manager";
    $lang = "en";
    $new_design = true;
    $menu = array( "vlma", "overview" );
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">VLMa <small>Overview</small></h1>

    <div class="alert alert-danger" role="alert">
        <strong>Note!</strong> This project is not actively maintained anymore.
    </div>

    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <h2>About VLMa</h2>
            <img style="border: 1px solid #bbb; padding: 1px" alt="VLMa logo" src="http://images.videolan.org/images/VLMa.png" />
            <p>VLMa is an application to manage broadcasts of TV channels, received through digital terrestrial or satellite ways. Its interface is provided as a web-site written in Java.<br />
            It is also capable of streaming audio and video files. VLMa consists of a deamon (called VLMad)
            and a web interface (called VLMaw).</p>
            <p>VLMa is released under the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU General Public License</a> like VLC media player.</p>
        </div>
        <div class="column col-xs-12 col-md-6">
            <h2>Features</h2>
            <ul class="bullets">
              <li>giving orders to VLM instances through VLC's telnet interface</li>
              <li>monitoring of current streams</li>
              <li>dynamic stream assignments (incl. fallback if a server is unavailable)</li>
              <li>monitoring the streamers' state using SNMP</li>
              <li>drawing of the streams stats as RRD graphs</li>
              <li>notifications by mail or IM (IRC and MSN)</li>
              <li>localized web interface in French and English</li>
            </ul>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <h2>Download and install</h2>

            <p>To download VLMa, go to the <a href="/vlma/download.html">download page</a>.<br />
            <a href="/vlma/doc/setup.html">Installation instructions</a> are available in <a href="/vlma/doc/">VLMa documentation</a>.</p>
        </div>
        <div class="column col-xs-12 col-md-6">
            <h2>Screenshot</h2>
            <a href="http://images.videolan.org/projects/vlma/screenshot/0.2.0/channellist.png">
              <img style="height: 200px; border: 1px solid #bbb;" alt="DTT channel list" src="http://images.videolan.org/projects/vlma/screenshot/0.2.0/channellist.png" />
            </a>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <h2>Support</h2>
            <p>For support information, have a look at <a href="/support/">our support page</a>.</p>
            <p>A <a href="http://mailman.videolan.org/listinfo/vlma">mailing-list</a> and a <a href="http://forum.videolan.org/viewforum.php?f=30">forum</a> are also available.</p>
        </div>
        <div class="column col-xs-12 col-md-6">
            <h2>People using VLMa</h2>
            <ul class="bullets">
              <li><a href="http://www.via.ecp.fr">VIA Centrale Réseaux</a> - to stream television on the campus.</li>
            </ul>
            <p>If you use VLMa in another institution or company, please let us know.</p>
        </div>
    </div>

</div>

<?php footer('') ?>

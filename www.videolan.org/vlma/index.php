<?php
   $title ="VideoLAN Manager";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">
<h1>VLMa - Overview</h1>

<h2>About VLMa</h2>

<p>VLMa is an application to manage broadcasts of TV channels, received through digital terrestrial or satellite ways. Its interface is provided as a web-site written in Java.
It is also capable of streaming audio and video files. VLMa consists of a deamon (called VLMad)
and a web interface (called VLMaw).</p>
<p>VLMa is released under the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU General Public License</a> like VLC media player.</p>

<h2>Features</h2>

<ul class="bullets">
  <li>giving orders to VLM instances through VLC's telnet interface</li>
  <li>monitoring of current streams</li>
  <li>dynamic stream assignments (incl. fallback if a server is unavailable)</li>
  <li>monitoring the streamers' state using SNMP</li>
  <li>drawing of the streams stats as RRD graphs</li>
  <li>localized web interface in French and English</li>
</ul>

<h2>Support</h2>

<p>For support information, have a look <a href="/support/">here</a>.</p>

<p>A <a href="http://mailman.videolan.org/listinfo/vlma">mailing-list</a> and a <a href="http://forum.videolan.org/viewforum.php?f=30">forum</a> are also available.</p>

<h2>People using VLMa</h2>

<p><a href="http://via.ecp.fr">Via Centrale Réseaux</a> - to stream television on the campus.</p>

<p>If you use VLMa in another institution or company, please let us know.</p>

</div>

<div id="right">

  <div class="panel-blue">
    <img style="border: 1px solid #bbb; padding: 1px" class="center" alt="VLMa logo" src="http://download.videolan.org/vlma/VLMa.png" />
  </div>

  <div class="panel-orange"> <!-- begin panel -->

    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
        <h1>Download</h1>

        <p>To download VLMa, go to the <a href="/vlma/download.html">download page</a>.</p>

      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

  <div class="panel-blue"> <!-- begin panel -->

    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">

          <h1>Screenshot (with French localization)</h1>
          <div>
            <img style="border: 1px solid #ccc;" class="center" alt="VLMa screenshot" src="http://download.videolan.org/vlma/screenshot/welcome.png" />
          </div>

      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

</div>

<?php footer('$Id$') ?>

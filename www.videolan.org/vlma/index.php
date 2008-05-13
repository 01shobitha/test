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

<p>VLMa is a program of management of the broadcasting of the channels of the digital terrestrial
television and the satellite under the interface of a Web site which is programmed in Java.
It is now capable of streaming files (audio, video). VLMa consists of a deamon (called VLMad)
and a web interface (called VLMaw).</p>
<p>VLMa is released under the GNU <a href="http://www.gnu.org/copyleft/gpl.html">General Public
License</a> like VLC Media Player.</p>

<h2>Features</h2>

<ul class="bullets">
  <li>gives orders to VLM instances through VLC telnet interface,</li>
  <li>monitors streaming,</li>
  <li>assigns streaming dynamically (fallback if a server is unavailable),</li>
  <li>monitors streamers' state using SNMP,</li>
  <li>draws RRD graphs of streamers' state,</li>
  <li>owns the web interface currently in french and english.</li>
</ul>

<h2>Support</h2>

<p>For support information, have a look <a href="/support/">here</a>.</p>

<p>A <a href="http://mailman.videolan.org/listinfo/vlma">mailing-list</a> is also available.</p>

<h2>People using VLMa</h2>

<p><a href="http://via.ecp.fr">Via Centrale Réseaux</a> - to stream television on the campus.</p>

<p>If you use VLMa in another institution or company, please let us know.</p>

</div>

<div id="right">
  <div class="panel-orange"> <!-- begin panel -->

    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
        <h1>Download</h1>

        <p>To download VLMa, go to the <a href="/vlma/download.html">VLMa download page</a>.</p>

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

          <h1>Screenshot (with french localization)</h1>
          <div align="center">
            <img style="border: 1px solid #ccc" src="http://download.videolan.org/vlma/screenshot/welcome.png" />
          </div>

      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

</div>

<?php footer('$Id$') ?>

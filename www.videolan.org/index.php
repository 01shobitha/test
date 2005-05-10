<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $date = "06 April 2002";
   $menu = array( "home", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php3");
?>

<table class="main" border="0" cellspacing="5">
  <tr>
    <td align="center" rowspan="2">
      <img alt="VideoLAN" src="/images/videolan-new5.png" 
        style="margin: 0px 50px;" width="300" height="167" />
    </td>
    <td class="news-title">
        Latest news <a href="http://www.videolan.org/videolan-news.rss"><img src="images/rss.png" alt="RSS 1.0" style="vertical-align: middle; border-width: 0px;"/></a>
    </td>
  </tr>
  <tr valign="top">
    <td class="news">
      <?php shownews("title",5); ?>
    </td>
  </tr>
</table>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width: 75%">

<h2>Free Software and Open Source video streaming solution for every OS!</h2>

  <p> The VideoLAN project targets multimedia streaming of <b>MPEG-1</b>,
  <b>MPEG-2</b>, <b>MPEG-4</b> and <b>DivX</b> files, <b>DVDs</b>, digital
  satellite channels, digital terrestial television channels and live
  videos on a high-bandwidth IPv4 or <b>IPv6</b> network in unicast or
  <b>multicast</b> under many OSes. VideoLAN also features a cross-platform
  multimedia player, <a href="/vlc/index.html">VLC media player</a>, which can be used
  to read the stream from the network or display video read locally on the
  computer under all GNU/Linux flavours, all BSD flavours, Windows, Mac OS X,
  BeOS, Solaris, QNX, Familiar Linux...</p>

  <p>VideoLAN is <a href="http://www.gnu.org/philosophy/free-sw.html">free
  software</a>, and is released under the GNU <a
  href="http://www.gnu.org/copyleft/gpl.html">General Public
  License</a>. It started as a student project at the French <a
  href="http://www.ecp.fr/">�cole Centrale Paris</a> but is now a worldwide
  project with <a href="/team/index.html">developers</a> from 20 countries.</p>

  <p> More information about the VideoLAN streaming solution be found in the
  <a href="/streaming/">streaming</a> section. </p>

  <p> For setup instructions, see the <a href="/doc/">documentation</a>
  section. If you have a problem that is not
  covered in the documentation, look at the <a
  href="/support/">support</a> section to know about the 
  <a href="http://forum.videolan.org">web forums</a>, the
  <a href="/support/lists.html">user mailing-lists</a> and the IRC channels
  users and developers usually hook on. </p>

<h2>Contribute!</h2>

  <p>VideoLAN welcomes all contributions to the project! You can contribute
  time (development, documentation, packaging, tests, user support, ...),
  material or even money. See the <a href="contribute.html">contribution
  page</a> for more information.</p>

<h2>News</h2>

  <?php shownews("full",5); ?>

</td>

<td style="width: 25%; white-space: nowrap; vertical-align: top;">

  <div style="text-align: center;">
    <a href="http://www.videolan.org/vlc" title="Get VLC media player - It plays, it streams, it kills WiMPs!!">
    <img src="http://download.videolan.org/images/buttons/GetVLC_120.png" alt="Get VLC media player" /></a>
  </div>

  <br />

  <div style="text-align:center;">
    <a href="http://forum.videolan.org">VideoLAN Forum</a>
  </div>

  <br />

  <div style="text-align: center;">
    <a href="http://www.opensource.org/osa/awards.php">
    <img width="135" height="135" src="/images/osamerit.png"
       style="vertical-align: middle; border-width: 0px;"
       alt="OSI Merit Award" /></a>
  </div>

  <br />

  <div style="text-align: center;">
    <a href="/events/20030204/team.jpg"><img width="149" height="112"
      src="/events/20030204/tn_team.jpg" style="vertical-align: middle;"
      alt="Part of the team at Linux Expo Paris 2003" /></a>
  </div>

  <br />

  <div style="text-align: center;">
    <a href="/images/cone-soppera10.png">
    <img
      src="/images/cone-soppera10-moyen.png"
      style="vertical-align: middle; border-width: 0px;"
      alt="The VideoLAN logo"
      width="77"
      height="100" /></a>
  </div>

</td>

  </tr>
</table>

<?php footer('$Id$'); ?>

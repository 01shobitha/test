<?php
   $title = "VideoLAN, Free streaming and multimedia solutions for all OS!";
   $lang = "en";
   $menu = array( "vlc", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

  <h1>VideoLAN - VLC media player</h1>

  <div id="left">
  <h2>About VideoLAN</h2>
  <p>VideoLAN is a <a href="/videolan/">project</a>, run by volunteers,
     backed-up by a <a href="/videolan/">non-profit organisation</a>,
     which produces <a href="http://www.gnu.org/philosophy/free-sw.html">free and open source software</a> for multimedia,
     released under the GNU <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">General Public License</a>.<br />
  Learn more about the <strong><a href="/videolan/">VideoLAN project and organisation</a></strong>.</p>
  <p>Our main software is the cross-platform <a href="/vlc/"><strong>VLC media player</strong></a>.</p>
  <p>We are also the home of <a href="/developers/x264.html"><strong>x264</strong></a> and many other
  <a href="/videolan/"> projects</a>, like <a href="/projects/dvblast.html">DVBlast</a>,
  <a href="/developers/libdvdcss.html">libDVDcss</a> or <a href="/projects/vlma/">VLMa</a>.</p>

  <h2>About VLC</h2>
  <p> <strong>VLC</strong> media player is a highly portable
  <strong>multimedia player</strong> supporting most audio and video
  formats (H.264, Ogg, DivX, MKV, TS, MPEG-2, mp3, MPEG-4, aac, ...)
  from files, physical media (<strong>DVD</strong>s, VCD, Audio-CD),
  TV <strong>capture cards</strong> and many network <strong>streaming</strong> protocols.<br />

  It can also <strong>convert</strong> files, transcode and act as a <a href="/vlc/streaming.html">streaming server</a>
  over unicast or <strong>multicast</strong> and IPv4 or <strong>IPv6</strong>.
  It doesn't need any external codec, program or codec pack to work.</p>


    <h2><a href="http://www.videolan.org/videolan-news.rss">
        <img src="http://images.videolan.org/images/icons/rss-feed.gif" alt="RSS 1.0" /></a>
        <a href="/news.html">VideoLAN News</a></h2>

    <a href="http://www.videolan.org/videolan-news.rss">Subscribe to newsfeed.</a>
    <a href="http://planet.videolan.org">Read developers' blogs and news.</a>
    <div>
      <?php shownews("full",5); ?>
    </div>

  </div> <?php /* Left */ ?>

  <div id="right">
    <?php panel_start( "blue" ); ?>
    <h1>VLC media player 1.0.1</h1>

    <div class="download">
      <div class="vlc-dl-logo"></div>
        <script type="text/javascript"><!--
            if ( <?php echo $is_win32; ?> ) { <?php DoDL("Win32"); ?> }
            else if( <?php echo $is_beos; ?> ) { <?php DoDL("BeOS"); ?> }
            else if( <?php echo $is_linux; ?> )
            {
              if( <?php echo $is_ubuntu; ?> ) { <?php DoDL("Ubuntu"); ?> }
              else if( <?php echo $is_fedora; ?> ) { <?php DoDL("Fedora"); ?>}
              else if( <?php echo $is_suse; ?> ) { <?php DoDL("Suse"); ?> }
              else if( <?php echo $is_debian; ?> ) { <?php DoDL("Debian"); ?> }
              else if( <?php echo $is_mandriva; ?> ) { <?php DoDL("Mandriva"); ?> }
              else if( <?php echo $is_redhat; ?> ) { <?php DoDL("RedHat"); ?> }
              else if( <?php echo $is_gentoo; ?> ) { <?php DoDL("Gentoo"); ?> }
              else { <?php DoDL("Linux"); ?> }
            }
            else if( <?php echo $is_freebsd; ?> ) { <?php DoDL("FreeBSD"); ?> }
            else if( <?php echo $is_osx; ?> )
            {
              if( <?php echo $is_ppc; ?> ) { <?php DoDL("OSX-PPC"); ?> }
              else if( <?php echo $is_mactel; ?> ) { <?php DoDL("OSX-Intel");?>}
                 else  { <?php DoDL("OSX-PPC"); DoDL("OSX-Intel"); ?> }
            }
            else if( navigator.platform.indexOf("Mac") != -1 )
            {
            document.writeln( "<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>'" );
            }
            else
            {
            <?php DoDL("Win32");DoDL("OSX-PPC"); DoDL("OSX-Intel"); ?>
            }
       --></script>
       <noscript>
          <?php DoDL("Win32",0);DoDL("OSX-PPC",0);DoDL("OSX-Intel",0); ?>
       </noscript>
      </div>
    <div class="more"><a  href="/vlc/">Other Operating Systems, learn more</a></div>

    <hr />

      <ul class="panel-blue-bullet">
        <li>Free and Open Source cross-platform media player</li>
        <li>Supports a <a href="/vlc/features.html">large number of multimedia formats</a>,
            without the need for additional codecs</li>
        <li>Features a complete streaming server, with extended 
            features (video on demand, on the fly transcoding, ...)</li>
        <li>Learn more about this release <a href="/release.html">now!</a></li>
      </ul>
    <p class="center">
      <script type="text/javascript"><!--
        if( <?php echo $is_win32; ?> ) 
        { <?php Screenshot( "Win32" ); ?> }
        else if( <?php echo $is_beos; ?> )
        { <?php Screenshot( "BeOS" ); ?> }
        else if( <?php echo $is_linux; ?> )
        { <?php Screenshot( "Linux" ); ?> }
        else if( <?php echo $is_osx; ?> )
        { <?php Screenshot( "OSX" ); ?> }
        else 
        { <?php Screenshot("Win32" ); ?> }
        --></script>
      <noscript>
       <p class="center">
         <img src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
       </p>
      </noscript>
    </p>

    <?php panel_end(); ?>


<?php panel_start( 'orange' ); ?>
      <h1>      Donate to VideoLAN:</h1>
      <div style="float: left;">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <p>
      <input name="cmd" value="_xclick" type="hidden"/>
      <input name="business" value="treasurer@videolan.org" type="hidden"/>
      <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
      <input name="no_note" value="0" type="hidden"/>
      <input name="currency_code" value="EUR" type="hidden"/>
      <input name="tax" value="0" type="hidden"/>
      <input src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/> <span style="font-size: 10pt; font-style: italic;">(euros)</span>
      </p></form>
      </div>
      <div>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><p>
      <input name="cmd" value="_xclick" type="hidden"/>
      <input name="business" value="treasurer@videolan.org" type="hidden"/>
      <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
      <input name="no_note" value="0" type="hidden"/>
      <input name="currency_code" value="USD" type="hidden"/>
      <input name="tax" value="0" type="hidden"/>
      <input src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/> <span style="font-size: 10pt; font-style: italic;">(dollars)</span>
      </p> </form>
      </div>
    <?php panel_end(); ?>

<?php panel_start( 'blue' ); ?>
<h1>Contribute!</h1>
  <p>VideoLAN welcomes all contributions to the project! You can contribute
  time (development, documentation, packaging, tests, user support, ...),
  material or even money. See the <a href="/contribute.html">contribution
  page</a> for more information.<br/>Developers can join us by undertaking one of the
  <a href="http://wiki.videolan.org/Mini_Projects">Mini Projects</a></p>
<?php panel_end(); ?>

<?php panel_start( 'orange' ); ?>
<h1>Help</h1>
  <p> For setup instructions, see the <a href="http://wiki.videolan.org/Documentation:Documentation">documentation</a>
  section.</p>
  <p>If you have a problem that is not
  covered in the documentation, look at the <a href="/support/">support page</a>, 
  <a href="http://forum.videolan.org">web forums</a>, the
  <a href="http://wiki.videolan.org">Wiki</a>, the
  <a href="/support/lists.html">user mailing-lists</a> and other support
  methods.</p>
<?php panel_end(); ?>

</div> <!-- RIGHT -->

<?php footer('$Id: index.php 4462 2008-02-23 13:20 altglass$'); ?>

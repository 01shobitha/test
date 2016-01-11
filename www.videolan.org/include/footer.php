<?php
/* Footer */
function footer($tag = "", $alternate_lang=array()) {
?>
    </div> <!-- BodyInner -->
    <div class="clearfix"></div>
    <div id='footer'>
        <div class="container">
            <div class="row">
                <a class="col-sm-12 col-md-3" href='/'>
                <?php image( 'logoGrey.png', 'Association VideoLAN', 'center-xs center-sm' ); ?></a>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VLC media player</div>
                    <ul>
                        <li><a href='//www.videolan.org/vlc/'>VLC</a></li>
                        <li><a href='//www.videolan.org/vlc/download-windows.html'>VLC for Windows</a></li>
                        <li><a href='//www.videolan.org/vlc/download-macosx.html'>VLC for Mac OS X</a></li>
                        <li><a href='//www.videolan.org/vlc/download-ubuntu.html'>VLC for Ubuntu</a></li>
                        <li><a href='//www.videolan.org/vlc/download-android.html'>VLC for Android</a></li>
                        <li><a href='//www.videolan.org/vlc/download-ios.html'>VLC for iOS</a></li>
                        <li><a href='//www.videolan.org/vlc/skins.html'><?php echo _("Skins"); ?></a></li>
                        <li><a href='http://addons.videolan.org/index.php?xcontentmode=903'><?php echo _("Extensions"); ?></a></li>
                        <li><a href='//www.videolan.org/vlc/features.html'><?php echo _("Features"); ?></a></li>
                        <li><a href='//www.videolan.org/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a></li>
                        <li><a href='//www.videolan.org/vlc/skineditor.html'>VLC Skin Editor</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'><?php echo _("All Projects"); ?></div>
                    <ul>
                        <li><a href='//www.videolan.org/vlmc/'>VideoLan Movie Creator</a></li>
                        <li><a href='//www.videolan.org/projects/dvblast.html'>DVBlast</a></li>
                        <li><a href='//www.videolan.org/developers/x264.html'>x264</a></li>
                        <li><a href='//www.videolan.org/developers/x262.html'>x262</a></li>
                        <li><a href='//www.videolan.org/developers/x265.html'>x265</a></li>
                        <li><a href='//www.videolan.org/projects/multicat.html'>multicat</a></li>
                        <li><a href='//www.videolan.org/projects/vlma/'>VLMa</a></li>
                        <li><a href='//www.videolan.org/developers/libdvdcss.html'>libdvdcss</a></li>
                        <li><a href='//www.videolan.org/developers/libbluray.html'>libbluray</a></li>
                        <li><a href='//www.videolan.org/developers/libdvbpsi.html'>libdvbpsi</a></li>
                        <li><a href='//www.videolan.org/developers/libaacs.html'>libaacs</a></li>
                        <li><a href='//www.videolan.org/developers/libdvbcsa.html'>libdvbcsa</a></li>
                        <li><a href='//www.videolan.org/developers/bitstream.html'>biTStream</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'><?php echo _("Community"); ?></div>
                    <ul>
                        <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
                        <li><a href='http://forum.videolan.org/'><?php echo _("Forums"); ?></a></li>
                        <li><a href='//www.videolan.org/support/lists.php'><?php echo _("Mailing-Lists"); ?></a></li>
                        <li><a href='//www.videolan.org/support/faq.html'><?php echo _("FAQ"); ?></a></li>
                        <li><a href='//www.videolan.org/contribute.html'><?php echo _("Donate money"); ?></a></li>
                        <li><a href='//www.videolan.org/contribute.html'><?php echo _("Donate time"); ?></a></li>
                        <li><a href='//www.videolan.org/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VideoLAN</div>
                    <ul>
                        <li><a href='//www.videolan.org/videolan/'><?php echo _("Project and Organization"); ?></a></li>
                        <li><a href='//www.videolan.org/videolan/team/'><?php echo _("Team"); ?></a></li>
                        <li><a href='//www.videolan.org/legal.html'><?php echo _("Legal"); ?></a></li>
                        <li><a href='//www.videolan.org/contact.html'><?php echo _("Contact us"); ?></a></li>
                        <li><a href='//www.videolan.org/videolan/partners.html'><?php echo _("Partners"); ?></a></li>
                        <li><a href='//www.videolan.org/videolan/mirrors.html'><?php echo _("Mirrors"); ?></a></li>
                        <li><a href='//www.videolan.org/press/'><?php echo _("Press center"); ?></a></li>
                        <li><a href='//www.videolan.org/videolan/events/'><?php echo _("Events"); ?></a></li>
                        <li><a href='//www.videolan.org/security/'><?php echo _("Security center"); ?></a></li>
                        <li><a href='//www.videolan.org/contribute.html'><?php echo _("Get Involved"); ?></a></li>
                        <li><a href='//www.videolan.org/news.html'><?php echo _("News");?></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id='translation' class="col-md-12" style="font-size: 9px;">
                <?php
                    if( isset($alternate_lang) && count($alternate_lang) > 0 ) {
                        echo "<div class='footerHeading'>Translations: ";
                        echo '<select ONCHANGE="location = this.options[this.selectedIndex].value;">';
                        $root_filename = explode('.', $_SERVER['SCRIPT_FILENAME'] );
                        echo  '<option value="/'.$root_filename[0].'.html"></option>'."\n";
                        foreach($alternate_lang as $lang) {
                            if( $lang == "en" )
                                echo  '<option value="/'.$root_filename[0].'.html">'.$lang.'</option>'."\n";
                            else
                                echo  '<option value="/'.$root_filename[0].'.'.$lang.'.html">'.$lang.'</option>'."\n";
                        }
                        echo "</select></div>";
                    }
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style='text-align: center; line-height: 14px; font-size: 9px; color: #999; direction: ltr;'>
                    <p>
                        <a href='/legal.html'><?php echo _("Legal"); ?></a> | <a href='/contact.html'>Report Trademark Abuse</a><br />
                        VideoLAN, VLC, VLC media player and x264 are trademarks internationally registered by the <a href="/videolan">VideoLAN non-profit organization.</a><br />
                        VideoLAN software is licensed under various open-source licenses: use and distribution are defined by each software license.</p>
                        <p>Design by <a href="http://www.madebyargon.com">Made By Argon</a>. Some icons are licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/us/">CC BY-SA 3.0+</a>. <br />
                        The VLC cone icon was designed by Richard Øiestad. Icons for VLMC, DVBlast and x264 designed by <a href='http://cuberto.com/'>Roman Khramov</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- plusone button -->
    <script type="text/javascript">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
    </body>
</html>
<?php
}

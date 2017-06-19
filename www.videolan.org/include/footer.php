<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/include/layout_helper.php");
/* Footer */
function footer($tag = "", $alternate_lang=array(), $additional_class = "") {
?>
    </div> <!-- BodyInner -->
    <div class="clearfix"></div>
    <div id='footer' class="<?= $additional_class ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <a href="<?php getLink('/'); ?>">
                        <?php image( 'logoGrey.png', 'Association VideoLAN', 'center-xs center-sm' ); ?>
                    </a>
                    <div class="social-box">
                        <a class="social" href="https://plus.google.com/+vlc">
                            <i class="icon-google-plus"></i>
                        </a>
                        <a class="social" href="http://www.facebook.com/vlc.media.player">
                            <i class="icon-facebook"></i>
                        </a>
                        <a class="social" href="http://www.twitter.com/videolan">
                            <i class="icon-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VLC media player</div>
                    <ul>
                        <li><a href="<?php getLink('/vlc/'); ?>">VLC</a></li>
                        <li><a href="<?php getLink('/vlc/download-windows.html'); ?>">VLC for Windows</a></li>
                        <li><a href="<?php getLink('/vlc/download-macosx.html'); ?>">VLC for Mac OS X</a></li>
                        <li><a href="<?php getLink('/vlc/download-ubuntu.html'); ?>">VLC for Ubuntu</a></li>
                        <li><a href="<?php getLink('/vlc/download-android.html'); ?>">VLC for Android</a></li>
                        <li><a href="<?php getLink('/vlc/download-ios.html'); ?>">VLC for iOS</a></li>
                        <li><a href="<?php getLink('/vlc/skins.html'); ?>"><?php echo _("Skins"); ?></a></li>
                        <li><a href='https://addons.videolan.org/browse/cat/323/ord/latest/'><?php echo _("Extensions"); ?></a></li>
                        <li><a href="<?php getLink('/vlc/features.html'); ?>"><?php echo _("Features"); ?></a></li>
                        <li><a href="<?php getLink('/vlc/screenshots.html'); ?>"><?php echo _("Screenshots"); ?></a></li>
                        <li><a href="<?php getLink('/vlc/skineditor.html'); ?>">VLC Skin Editor</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'><?php echo _("All Projects"); ?></div>
                    <ul>
                        <li><a href="<?php getLink('/vlmc/'); ?>">VideoLan Movie Creator</a></li>
                        <li><a href="<?php getLink('/projects/dvblast.html'); ?>">DVBlast</a></li>
                        <li><a href="<?php getLink('/developers/x264.html'); ?>">x264</a></li>
                        <li><a href="<?php getLink('/developers/x262.html'); ?>">x262</a></li>
                        <li><a href="<?php getLink('/developers/x265.html'); ?>">x265</a></li>
                        <li><a href="<?php getLink('/projects/multicat.html'); ?>">multicat</a></li>
                        <li><a href="<?php getLink('/projects/vlma/'); ?>">VLMa</a></li>
                        <li><a href="<?php getLink('/developers/libdvdcss.html'); ?>">libdvdcss</a></li>
                        <li><a href="<?php getLink('/developers/libdvdnav.html'); ?>">libdvdnav</a></li>
                        <li><a href="<?php getLink('/developers/libdvdnav.html'); ?>">libdvdread</a></li>
                        <li><a href="<?php getLink('/developers/libbluray.html'); ?>">libbluray</a></li>
                        <li><a href="<?php getLink('/developers/libdvbpsi.html'); ?>">libdvbpsi</a></li>
                        <li><a href="<?php getLink('/developers/libaacs.html'); ?>">libaacs</a></li>
                        <li><a href="<?php getLink('/developers/libdvbcsa.html'); ?>">libdvbcsa</a></li>
                        <li><a href="<?php getLink('/developers/bitstream.html'); ?>">biTStream</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'><?php echo _("Community"); ?></div>
                    <ul>
                        <li><a href='https://wiki.videolan.org/'>Wiki</a></li>
                        <li><a href='https://forum.videolan.org/'><?php echo _("Forums"); ?></a></li>
                        <li><a href="<?php getLink('/support/lists.php'); ?>"><?php echo _("Mailing-Lists"); ?></a></li>
                        <li><a href="<?php getLink('/support/faq.html'); ?>"><?php echo _("FAQ"); ?></a></li>
                        <li><a href="<?php getLink('/contribute.html#money'); ?>"><?php echo _("Donate money"); ?></a></li>
                        <li><a href="<?php getLink('/contribute.html'); ?>"><?php echo _("Donate time"); ?></a></li>
                        <li><a href="<?php getLink('/goodies.html'); ?>"><?php echo _("Get Goodies"); ?></a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VideoLAN</div>
                    <ul>
                        <li><a href="<?php getLink('/videolan/'); ?>"><?php echo _("Project and Organization"); ?></a></li>
                        <li><a href="<?php getLink('/videolan/team/'); ?>"><?php echo _("Team"); ?></a></li>
                        <li><a href="<?php getLink('/legal.html'); ?>"><?php echo _("Legal"); ?></a></li>
                        <li><a href="<?php getLink('/contact.html'); ?>"><?php echo _("Contact us"); ?></a></li>
                        <li><a href="<?php getLink('/videolan/partners.html'); ?>"><?php echo _("Partners"); ?></a></li>
                        <li><a href="<?php getLink('/videolan/mirrors.html'); ?>"><?php echo _("Mirrors"); ?></a></li>
                        <li><a href="<?php getLink('/press/'); ?>"><?php echo _("Press center"); ?></a></li>
                        <li><a href="<?php getLink('/videolan/events/'); ?>"><?php echo _("Events"); ?></a></li>
                        <li><a href="<?php getLink('/security/'); ?>"><?php echo _("Security center"); ?></a></li>
                        <li><a href="<?php getLink('/contribute.html'); ?>"><?php echo _("Get Involved"); ?></a></li>
                        <li><a href="<?php getLink('/news.html'); ?>"><?php echo _("News");?></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id='translation' class="col-md-12" style="font-size: 9px;">
                <?php
                    if( isset($alternate_lang) && count($alternate_lang) > 0 ) {
                        echo "<div class='footerHeading'>Translations: ";
                        echo '<select ONCHANGE="location = this.options[this.selectedIndex].value;">';
                        $root_filename = explode('.', $_SERVER['SCRIPT_NAME'] );
                        echo  '<option value="/'.$root_filename[0].'.html">&nbsp;</option>'."\n";
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
                <div class="col-md-12" style='text-align: center; line-height: 14px; font-size: 9px; color: #999;'>
                    <p>
                        <a href='/legal.html'><?php echo _("Legal"); ?></a>
                        <span dir="ltr" lang="en">
                            | <a href='/contact.html'>Report Trademark Abuse</a><br />

                            VideoLAN, VLC, VLC media player and x264 are trademarks internationally registered by the <a href="/videolan/">VideoLAN non-profit organization.</a><br />
                            VideoLAN software is licensed under various open-source licenses: use and distribution are defined by each software license.
                        </span>
                    </p>
                    <p>
                        <span dir="ltr" lang="en">
                            Design by <a href="http://www.madebyargon.com">Made By Argon</a>. Some icons are licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/us/">CC BY-SA 3.0+</a>. <br />
                            The VLC cone icon was designed by Richard Øiestad. Icons for VLMC, DVBlast and x264 designed by <a href='http://cuberto.com/'>Roman Khramov</a>.
                        </span>
                    </p>
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

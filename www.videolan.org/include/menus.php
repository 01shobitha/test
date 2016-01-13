<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/include/layout_helper.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/include/donate.php");

/* Menus */
function draw_menus( $nobanner, $alternate_lang, $imgSrc, $b_show_donate )
{
?>
<nav id="nav" class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php getLink('/'); ?>">
        <?php image( $imgSrc, "VideoLAN association"); ?>
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="main-navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown <?php echo isActive("/videolan/") ?>">
          <a href="<?php getLink('/videolan/'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VideoLAN <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php getLink('/videolan/'); ?>"><?php echo _("Team &amp; Organization"); ?></a></li>
            <li><a href="<?php getLink('/videolan/partners.html'); ?>"><?php echo _("Consulting Services &amp; Partners"); ?></a></li>
            <li><a href="<?php getLink('/videolan/events/'); ?>"><?php echo _("Events"); ?></a></li>
            <li><a href="<?php getLink('/legal.html'); ?>"><?php echo _("Legal"); ?></a></li>
            <li><a href="<?php getLink('/press/'); ?>"><?php echo _("Press center"); ?></a></li>
            <li><a href="<?php getLink('/contact.html'); ?>"><?php echo _("Contact us"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo isActive("/vlc/"); ?>">
          <a href="<?php getLink('/vlc/'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VLC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php getLink('/vlc/'); ?>"><?php echo _("Download"); ?></a></li>
            <li><a href="<?php getLink('/vlc/features.html'); ?>"><?php echo _("Features"); ?></a></li>
            <li><a href="<?php getLink('/vlc/skins.html'); ?>"><?php echo _("Customize"); ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php getLink('/goodies.html'); ?>"><?php echo _("Get Goodies"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo isActive("/projects/") ?>">
          <a href="<?php getLink('/projects/'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Projects"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php getLink('/projects/dvblast.html'); ?>">DVBlast</a></li>
            <li><a href="<?php getLink('/developers/x264.html'); ?>">x264</a></li>
            <li><a href="<?php getLink('/developers/x262.html'); ?>">x262</a></li>
            <li><a href="<?php getLink('/developers/x265.html'); ?>">x265</a></li>
            <li><a href="<?php getLink('/projects/multicat.html'); ?>">multicat</a></li>
            <li><a href="<?php getLink('/projects/vlma/'); ?>">VLMa</a></li>
            <li><a href="<?php getLink('/vlc/skineditor.html'); ?>">VLC Skin Editor</a></li>
            <li><a href="<?php getLink('/vlc/'); ?>">VLC media player</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php getLink('/developers/libdvdcss.html'); ?>">libdvdcss</a></li>
            <li><a href="<?php getLink('/developers/libbluray.html'); ?>">libbluray</a></li>
            <li><a href="<?php getLink('/developers/libdvbpsi.html'); ?>">libdvbpsi</a></li>
            <li><a href="<?php getLink('/developers/libaacs.html'); ?>">libaacs</a></li>
            <li><a href="<?php getLink('/developers/libdvbcsa.html'); ?>">libdvbcsa</a></li>
            <li><a href="<?php getLink('/developers/bitstream.html'); ?>">biTStream</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php getLink('/projects/'); ?>"><?php echo _("All Projects"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo isActive("/contribute") ?>">
          <a href="<?php getLink('/contribute.html'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Contribute"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php getLink('/contribute.html'); ?>"><?php echo _("Getting started"); ?></a></li>
            <li><a href="<?php getLink('/contribute.html#money'); ?>"><?php echo _("Donate"); ?></a></li>
            <li><a href="<?php getLink('/support/#bugs'); ?>"><?php echo _("Report a bug"); ?></a></li>
          </ul>
        </li>
        <li>
          <a href="<?php getLink('/support/'); ?>"><?php echo _("Support"); ?></a>
        </li>
      </ul>
       <?php if ($b_show_donate == true ) {  ?>
        <ul class="nav navbar-nav pull-right donate-box">
            <li class="hidden-sm">
                <?php echo draw_donate('EUR'); ?>
            </li>
            <li class="hidden-sm">
                <?php echo draw_donate('USD'); ?>
            </li>
            <li class="dropdown visible-sm donate2">
                <a href="<?php getLink('/contribute.html#money'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo _("Donate"); ?> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu donate-dropdown pull-right">
                    <li>
                        <?php echo draw_donate('EUR'); ?>
                    </li>
                    <li>
                        <?php echo draw_donate('USD'); ?>
                    </li>
                </ul>
            </li>
        </ul>
        <?php } ?>
    </div>
 </div>
</nav>

<!-- header -->

<?php
    /* Event banner */
    if ( !$nobanner )
        ;//echo '<center><a href="https://www.gandi.net/tshirts/"><img alt="Get a VLC T-shirt made by Gandi.net!" src="//images.videolan.org/images/partners/gandi_banner.png" /></a></center>';
    ?><?php
}

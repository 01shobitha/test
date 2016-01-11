<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/include/donate.php");

/* Menus */
function draw_menus( $nobanner, $alternate_lang, $imgSrc, $b_show_donate )
{
?>
<nav id="nav" class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="/#">
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
          <a href="//www.videolan.org/videolan/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VideoLAN <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/videolan/'><?php echo _("Team &amp; Organization"); ?></a></li>
             <li><a href='//www.videolan.org/videolan/partners.html'><?php echo _("Consulting Services &amp; Partners"); ?></a></li>
             <li><a href='//www.videolan.org/videolan/events/'><?php echo _("Events"); ?></a></li>
             <li><a href='//www.videolan.org/legal.html'><?php echo _("Legal"); ?></a></li>
             <li><a href='//www.videolan.org/press/'><?php echo _("Press center"); ?></a></li>
             <li><a href='//www.videolan.org/contact.html'><?php echo _("Contact us"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo isActive("/vlc/") ?>">
          <a href="//www.videolan.org/vlc/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VLC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/vlc/'><?php echo _("Download"); ?></a></li>
            <li><a href='//www.videolan.org/vlc/features.html'><?php echo _("Features"); ?></a></li>
            <li><a href='//www.videolan.org/vlc/skins.html'><?php echo _("Customize"); ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href='//www.videolan.org/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo isActive("/projects/") ?>">
          <a href="//www.videolan.org/projects/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Projects"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/projects/dvblast.html'>DVBlast</a></li>
            <li><a href='//www.videolan.org/developers/x264.html'>x264</a></li>
            <li><a href='//www.videolan.org/developers/x262.html'>x262</a></li>
            <li><a href='//www.videolan.org/developers/x265.html'>x265</a></li>
            <li><a href='//www.videolan.org/projects/multicat.html'>multicat</a></li>
            <li><a href='//www.videolan.org/projects/vlma/'>VLMa</a></li>
            <li><a href='//www.videolan.org/vlc/skineditor.html'>VLC Skin Editor</a></li>
            <li><a href='//www.videolan.org/vlc/'>VLC media player</a></li>
            <li role="separator" class="divider"></li>
            <li><a href='//www.videolan.org/developers/libdvdcss.html'>libdvdcss</a></li>
            <li><a href='//www.videolan.org/developers/libbluray.html'>libbluray</a></li>
            <li><a href='//www.videolan.org/developers/libdvbpsi.html'>libdvbpsi</a></li>
            <li><a href='//www.videolan.org/developers/libaacs.html'>libaacs</a></li>
            <li><a href='//www.videolan.org/developers/libdvbcsa.html'>libdvbcsa</a></li>
            <li><a href='//www.videolan.org/developers/bitstream.html'>biTStream</a></li>
            <li role="separator" class="divider"></li>
            <li><a href='//www.videolan.org/projects/'><?php echo _("All Projects"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo isActive("/contribute") ?>">
          <a href="//www.videolan.org/contribute.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Contribute"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/contribute.html'><?php echo _("Getting started"); ?></a></li>
            <li><a href='//www.videolan.org/contribute.html#money'><?php echo _("Donate"); ?></a></li>
            <li><a href='//www.videolan.org/support/#bugs'><?php echo _("Report a bug"); ?></a></li>
          </ul>
        </li>
        <li>
          <a href="//www.videolan.org/support/"><?php echo _("Support"); ?></a>
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
                <a href="//www.videolan.org/contribute.html#money" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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

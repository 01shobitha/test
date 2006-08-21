<?php

/*
*  starthtml: beginning of the page
*/

function StartHtml( $title, $enable_live = false ) {

global $HTTP_GET_VARS;
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
       "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="Generator" content="vim [GNU/Linux], GNU Emacs" />
   <meta name="Author" content="videolan@videolan.org (VideoLAN team)" />
   <meta name="Keywords" content="DVD, MPEG, MPEG2, MPEG4, DivX, VideoLAN,
     VLC, VLS, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, QNX,
     Familiar Linux, iPAQ, multicast, IPv6" />
   <meta name="Description" content="<?php echo $title; ?>" />
   <title><?php echo $title; ?></title>
   <link rel="alternate" type="application/rss+xml" title="RSS - News" href="/videolan-news.rss" />
   <link rel="stylesheet" type="text/css" href="/main.css" />
   <link rel="shortcut icon" type="image/x-icon"
         href="/images/icons/favicon.ico" />
   <?php if( $enable_live == true ) {?>
	<script src="/ffcounter.js" type="text/javascript"></script>
   <?php } ?>

</head>
<?php if( $enable_live == true ) { ?>
   <body onload="getCount();">
<?php } else { ?>
   <body>
<?php
   }
?>
  <div id="spacer"></div>
  <div id="pagecontainer" class="clearfix">
<?php
}

function DrawMenu( $file, $mod )
{
  if( $m = @fopen( "menu/$file", "r", 1 ) )
  {
    while( $l = fgets( $m, 300 ) )
    {
      $l = rtrim( $l );
      if( $l == "sep" )
      {
      }
      else
      {
        list( $name, $text, $link, $icon, $width, $height ) =
            split( "[\t;]+", $l );
        echo "<li><a href=\"$link\">$text</a></li>";
      }
    }
  }
}




function footer($tag) {
   global $language; ?>

	</div> <!-- MAINCONTENT -->
</div> <!-- PAGECONTAINER -->
<div id="footer">
  <p> <a href="/">VideoLAN</a> &nbsp;-&nbsp;
      See the
     <a href="http://www.videolan.org/stats">statistics</a>
     &nbsp;-&nbsp; <?php echo $tag; ?>
  </p>
  <p>
    <?php if($language=="fr") { } else { echo 'valid'; } ?>
    <a href="http://validator.w3.org/check/referer">XHTML 1.1</a>
    and 
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <?php if($language=="fr") { echo 'valides'; } else { } ?>
    - <a href="http://www.videolan.org/videolan-news.rss">RSS v1.0</a>
  </p>
</div>

</body>
</html>

<?php
}

function panel_start( $color )
{
?>
  <div class="panel-<?php echo $color; ?>"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
<?php
}

function panel_end( )
{
?>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
<?php
}


/*
 * the real code
 */

/* default language and date */
if( $language == "" ) { $language = "en"; }

/* render the page */

if( !isset( $enable_live ) )
{
    $enable_live = false;
}

// HTML header
StartHtml( ereg_replace( "<[^>]*>" , "" , $title ) , $enable_live) ;


?>
<div id="header">
  <div id="navmenucontainer">
	  <ul id="navmenu">
			<?php DrawMenu( "menu.txt", $menu[0] ); ?>
		</ul>
		<div id="mirror">
      <form action="#" method="get">
        <div>mirror: <select name="mirror"
               onchange="window.location='http://'+this.value+'/<?php
                 echo preg_replace('/\.php$/', '.html', $_SERVER['PHP_SELF']);
              ?>'">
          <?php
          $web_mirrors = array("videolan.org" => "Main site (free.fr)",
                               "fr.videolan.org" => "Mirror site (Zoy)");
          foreach($web_mirrors as $web_mirror_addr => $web_mirror_desc){
            echo '<option value="www.'.$web_mirror_addr.'" >'.$web_mirror_desc
              .'</option>';
          }
          ?>
        </select></div>
      </form>
    </div>
  </div>
	<div id="submenucontainer">
		<div class="videolan-logo">
			<a href="/"><img src="/images/videolan-logo.png" alt="VideoLAN" width="100" height="47"/></a>
		</div>
		<ul id="submenu">
			<?php DrawMenu( $menu[0].".menu.txt", $menu[1] ); ?>
		</ul>
	</div>
</div>

<div id="maincontent" class="clearfix">

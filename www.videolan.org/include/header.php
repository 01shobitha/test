<?php

function FormatSize($size) {
  $sizes = Array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
  $ext = $sizes[0];
  for ($i=1; (($i < count($sizes)) && ($size >= 1024)); $i++) {
    $size = $size / 1024;
    $ext  = $sizes[$i];
  }
  return round($size, 1).$ext;
}

/*
*  starthtml: beginning of the page
*/
function StartHtml( $title, $additional_css=array(), $additional_js=array(), $body_onload = "HideMirrors();", $body_onunload = "" ) {
global $HTTP_GET_VARS;
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
       "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="Generator" content="vim [GNU/Linux], GNU Emacs" />
   <meta name="Author" content="VideoLAN" />
   <meta name="Keywords" content="DVD, MPEG, MPEG2, MPEG4, H264, DivX, VideoLAN, MKV, m2ts,
     VLC, VLS, x264, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Streaming,
     video, video player, multimedia, multicast, IPv6, media player, media converter,
     open source, free software" />
   <meta name="Description" content="<?php echo $title; ?>" />
   <title>VideoLAN - <?php echo $title; ?></title>
   <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="/videolan-news.rss" />
   <link rel="alternate" type="application/rss+xml" title="RSS - Developers' Planet" href="http://planet.videolan.org/rss20.xml" />
   <link rel="stylesheet" type="text/css" href="http://images.videolan.org/main.css" />
   <?php if( isset($additional_css) ) {
           foreach($additional_css as $css) {
              echo  '<link rel="stylesheet" type="text/css" href="'.$css.'" />';
           }
         }  ?>
<!--[if lt IE 7]>
   <style type="text/css">
      @media screen{ body{behavior:url("/width.htc");} }
        /* PNG support for IE */
        img {  behavior: url("/png.htc");}
        .DXImageTransformed { display: inline-block; }
      </style>
<![endif]-->
   <link rel="shortcut icon" type="image/x-icon" href="http://images.videolan.org/images/icons/favicon.ico" />
  <?php
      if( isset($additional_js) ) {
        foreach($additional_js as $js) {
          echo '<script src="'.$js.'" type="text/javascript"></script>';
        }
      }
      ?>
<script type="text/javascript">
// <![CDATA[
function ShowMirrors( start, stop )
{
  var i;
  for( i = start; i < stop; i++ )
  {
    var e = document.getElementById('mirror_row_'+i);
    if( e ) e.style.display = '';
  }
  var e = document.getElementById('mirror_row_random_'+start);
  if( e ) e.style.display = 'none';
  e = document.getElementById('mirror_row_show_'+stop);
  if( e ) e.style.display = 'none';
}
function HideMirrors()
{
  var i = 0;
  while( true )
  {
    var e = document.getElementById('mirror_row_'+i);
    if( !e ) break;
    e.style.display = 'none';
    i++;
  }
}
var submenuShown = "";
function showSubMenu(cat) {
  if(document.getElementById("submenu-"+cat)==null) return;
  if(document.getElementById("submenu-"+submenuShown)!=null) document.getElementById("submenu-"+submenuShown).style.display="none";
  submenuShown = cat;
  if(document.getElementById("submenu-"+submenuShown)!=null) document.getElementById("submenu-"+submenuShown).style.display="block";
}

// ]]>
</script>

</head>
<body onload="<?php echo $body_onload;?>" onunload="<?php echo $body_onunload; ?>">
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
      if( $l == "sep" ){}
      else
      {
        list( $name, $text, $link ) =
            preg_split( "/[\t;]+/", $l );
        if( $mod == $name )
                echo '<li class="selected">';
        else
                echo '<li>';
        echo "<a href=\"$link\" onmouseover=\"showSubMenu('".$name."');\">$text</a></li>\n";
      }
    }
  }
  else
  {
    echo "<li>&nbsp;</li>";
  }
}

function DrawSubMenus( $selcat, $mod )
{
  $cats = array("developers", "doc", "fr", "project", "projects", "vlc", "vlma", "support");
  foreach($cats as $cat) {
    $file = $cat.".menu.txt";
    echo "<ul class=\"submenu\" id=\"submenu-".$cat."\"";
    if($cat!=$selcat) echo " style=\"display:none\"";
    echo ">";
    if( $m = @fopen( "menu/$file", "r", 1 ) )
    {
      while( $l = fgets( $m, 300 ) )
      {
        $l = rtrim( $l );
        if( $l == "sep" ){}
        else
        {
          list( $name, $text, $link ) =
              preg_split( "/[\t;]+/", $l );

          if( $mod == $name && $cat==$selcat)
                  echo '<li class="selected">';
          else
                  echo '<li>';
          echo "<a href=\"$link\">$text</a></li>\n";
        }
      }
    }
    else
    {
      echo "<li>&nbsp;</li>";
    }
    echo "</ul>";
  }
}

function footer($tag) {
   ?>

    </div> <!-- MAINCONTENT -->
</div> <!-- PAGECONTAINER -->
<div id="footer">
  <p> <a href="/">VideoLAN</a> &nbsp;-
  &nbsp;<a href="/map.html">Website Map</a>&nbsp;-
  &nbsp;<a href="/videolan/team/">Contact</a>&nbsp;-&nbsp;
      See the
     <a href="http://www.videolan.org/stats/downloads.html">statistics</a>
     &nbsp;-&nbsp; <?php echo $tag; ?>
  </p>
  <p>
  All rights reserved to the VideoLAN team. -&nbsp;
    valid
    <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a>
    and 
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    - <a href="http://www.videolan.org/videolan-news.rss">RSS v1.0</a>
  </p>
</div>

</body>
</html>
<?php
}

function panel_start( $color )
{ ?>
  <div class="panel-<?php echo $color; ?>"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
<?php }
function panel_end( )
{ ?>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
<?php }


/*
 * the real code
 */

/* default language and date */
if( $language == "" ) { $language = "en"; }

if(!isset($additional_css)) $additional_css = array();
if(!isset($additional_js)) $additional_js = array();
if(!isset($body_onload)) $body_onload = "HideMirrors();";
if(!isset($body_onunload)) $body_onunload = "";

/* render the page */

// HTML header
StartHtml( preg_replace( "/<[^>]*>/", "" , $title ), $additional_css, $additional_js, $body_onload, $body_onunload ) ;
?>
<div id="header">
   <div id="navmenucontainer">
      <ul id="navmenu">
          <?php DrawMenu( "menu.txt", $menu[0] ); ?>
      </ul>
   </div>
   <div id="submenucontainer">
      <div class="videolan-logo">
          <a href="/"><img src="http://images.videolan.org/images/videolan-logo.png" alt="VideoLAN" width="100" height="47"/></a>
      </div>
      <?php DrawSubMenus($menu[0], $menu[1]); ?>
      <script type="text/javascript">showSubMenu('<?php echo $menu[0]; ?>');</script>
   </div>
</div>

<div id="maincontent" onmouseover="showSubMenu('<?php echo $menu[0];?>')">

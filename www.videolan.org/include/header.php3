<?php

/*
*  starthtml: beginning of the page
*/

function StartHtml( $title ) {

global $HTTP_GET_VARS;
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\" ?>\n";

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
       "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <meta name="GENERATOR" content="vim [GNU/Linux], GNU Emacs" />
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
</head>
<body><?php

}


function DrawMenu( $file, $mod )
{
  echo '<table class="menu" cellspacing="3"><tr>';

  if( $m = fopen( "menu/$file", "r", 1 ) )
  {
    while( $l = fgets( $m, 300 ) )
    {
      $l = rtrim( $l );
      if( $l == "sep" )
      {
        echo '<td><div class="sep"></div></td>';
      }
      else
      {
        list( $name, $text, $link, $icon, $width, $height ) =
            split( "[\t;]+", $l );
        if( $name == $mod )
        {
          echo '<td class="button-down">';
        }
        else
        {
          echo '<td class="button" onmouseout="this.className=\'button\'"'.
               ' onmouseover="this.className=\'button-up\'"'.
	       ' onmousedown="this.className=\'button-down\'"'.
	       ' onclick="window.location=\''.htmlentities($link).
	       '\'; return true;">';
        }
	echo '<table cellpadding="1" cellspacing="0" style="margin: 0px;">'.
	     '<tr>';
        if( $icon != "" )
        {
          echo '<td><a href="'.htmlentities($link).'"><img '.
	       ' class="button" src="/images/menu/'.htmlentities($icon).'"'.
	       ' alt="'.htmlentities($name).'" width="'.$width.'"'.
	       ' height="'.$height.'" /></a></td>';
        }
        echo "<td class=\"button-text\"><a href=\"$link\">$text</a></td>";
	echo '</tr></table></td>';
      }
    }
  }
  echo '</tr></table>';
}




function footer($tag) {
   global $language; ?>

<table class="footer" cellspacing="3" cellpadding="2">
  <tr>
    <td align="left">
      <a href="/">VideoLAN</a> &nbsp;-&nbsp;
      See the
     <a href="http://www.videolan.org/stats">statistics</a>
     &nbsp;-&nbsp; <?php echo $tag; ?>
    </td>
    <td align="right" style="white-space: nowrap;">
    <?php if($language=="fr") { } else { echo 'valid'; } ?>
    <a href="http://validator.w3.org/check/referer">XHTML 1.1</a>
    and 
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <?php if($language=="fr") { echo 'valides'; } else { } ?>
    </td>
  </tr>
</table>

<?php

    /*
     * end of the body
     */
  echo '</body></html>';
}


/*
 * the real code
 */

$mirror = $_POST["mirror"];

if($mirror)
{
    header("Location: http://$mirror".$_SERVER['PHP_SELF']);
    die();
}

/* default language and date */
if( $lang == "" ) { $lang = "en"; }

/* render the page */

// HTML header
StartHtml( ereg_replace( "<[^>]*>" , "" , $title ) );


?><table class="menu-back" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td valign="top">
<?php
$file = "menu.txt";
foreach( $menu as $module )
{
  DrawMenu( $file, $module );
  $file = "$module.$file";
}
?>
    </td>
    <td valign="middle">
      <div>
      <form action="" method="post">
        <div><select name="mirror">
        <!-- current: $GLOBALS['HTTP_HOST'] -->
          <option value="www.videolan.org">Main site (VIA)</option>
          <option value="www.fr.videolan.org">Mirror site (Zoy)</option>
        </select></div>
        <div><input type="submit" value="Select Mirror" /></div>
      </form>
      </div>
    </td>

  </tr>
</table>

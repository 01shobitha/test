<?

   /*
    *  starthtml: beginning of the page
    */

function CSSButton( $event, $normal, $over, $down )
{
  ?>
  <td class="<? echo $normal; ?>" <?
  ?>onmouseout="this.className='<? echo $normal; ?>'" <?
  ?>onmouseover="this.className='<? echo $over; ?>'" <?
  ?>onmousedown="this.className='<? echo $down; ?>'" <?
  ?>onclick="<? echo $event; ?>">
  <?
}


function StartHtml( $title ) {

global $HTTP_GET_VARS;

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
   <meta name="Description" content="<? echo $title; ?>" />
   <title><? echo $title; ?></title>
   <link rel="stylesheet" type="text/css" href="/main.css" />
   <link rel="shortcut icon" type="image/x-icon"
         href="/images/icons/favicon.ico" />
</head>
<body><?

}


function DrawMenu( $file, $mod )
{
?>
<table class="menu" cellspacing="3">
  <tr>
<?

  if( $m = fopen( "menu/$file", "r", 1 ) )
  {
    while( $l = fgets( $m, 300 ) )
    {
      $l = rtrim( $l );
      if( $l == "sep" )
      {
        ?><td><div class="sep"></div></td>
        <?
      }
      else
      {
        list( $name, $text, $link, $icon, $width, $height ) =
            split( "[\t;]+", $l );
        if( $name == $mod )
        {
          ?><td class="button-down" onclick="document.location='<? 
          echo $link;
          ?>'">
          <?
        }
        else
        {
          ?><td class="button" <?     
          ?>onmouseout="this.className='button'" <?
          ?>onmouseover="this.className='button-up'" <?
          ?>onmousedown="this.className='button-down'" <?
          ?>onclick="document.location='<? echo $link ?>'">
          <?
        }
        ?><table cellpadding="1" cellspacing="0" style="margin: 0px;">
        <tr><?
        if( $icon != "" )
        {
          ?><td>
          <img class="button" src="/images/menu/<?
          echo $icon;
          ?>" alt="<?
          echo $name;
          ?>" width="<?
          echo $width;
          ?>" height="<?
          echo $height;
          ?>"/></td><?
        }
        ?><td class="button-text"><?
        echo $text;
        ?></td></tr></table></td><?

      }
    }
  }
?>
  </tr>
</table>
<?
}




function footer($tag) {
   global $language; ?>

<table class="footer" cellspacing="3" cellpadding="2">
  <tr>
    <td align="left">
      <a href="/">VideoLAN</a> &nbsp;-&nbsp;
      See the
     <a href="http://brahma.via.ecp.fr/videolan/">statistics</a>
     &nbsp;-&nbsp; <? echo $tag; ?>
    </td>
    <td align="right" style="white-space: nowrap;">
    <? if($language=="fr") { } else { ?>valid<? } ?>
    <a href="http://validator.w3.org/check/referer">XHTML 1.1</a>
    &amp;
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <? if($language=="fr") { ?>valides<? } else { } ?>
    </td>
  </tr>
</table>

<?

    /*
     * end of the body
     */

?></body></html><? }


/*
 * the real code
 */

if($mirror)
{
    /* FIXME: mirror code is broken */
    header("Location: http://$mirror".$GLOBALS['PHP_SELF']);
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
<?
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
<?


?>

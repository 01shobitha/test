<?
  $path="/var/www/developers";

  chdir( "$path/$dir" );
  if( file_exists( "$page.html" ) )
  {
    $fd = fopen( "$page.html", "r" );
    $line = fgets( $fd, 1023 );
    if( ereg( "<?", $line, $regs ) )
    {
      $line = fgets( $fd, 1023 );
      eval( $line ); // get $title
    }
    else
    {
      $title = "developers.videolan.org";
    }
  }
  else
  {
    $title = "developers.videolan.org";
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title><? echo $title ?></title>
  <link type="text/css" href="/include/main.css" rel="stylesheet">
</head>
<body bgcolor="#ffffff">
<table width="100%" cellspacing=0 cellpadding=10>
<tr><td rowspan=2 width=150 valign=top class=background>
<?
include( "$path/include/menu.inc" );
?>
</td>
<td height=50 class=background
align=center><h1>developers.videolan.org</h1></td></tr>
<tr>
<td valign=top>

<?
  if( file_exists( "$page.html" ) )
  {
    include( "$page.html" );
  }
  else if( $changelog )
  {
    $changelogfile = file( 'ChangeLog' );
    while( list( $line_number, $line ) = each( $changelogfile ) )
    {
      $line = htmlspecialchars( $line, ENT_QUOTES );
      echo "$line<br />";
    }
  }
  else
  {
    $listing = array();
    $handle = opendir( '.' );
    while( $file = htmlentities( readdir( $handle ) ) )
    {
      if( $file != "." && $file != "..")
      {
        $listing[]=$file;
      }
    }
    closedir( $handle );
    sort( $listing );
    reset( $listing );

    while( $file = current( $listing ) )
    {
      ?><li><code><a href="<? echo $file; ?>"><? echo $file; ?></a>
      </code></li><?
      next($listing);
    }
  }
?>

<br><br>

</td></tr>

<tr><td colspan=2>
<hr noshade align="left" width="100%">
<a href="http://validator.w3.org/check/referer"><img align=right
border="0" src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML
4.01!" height="31" width="88"></a>
<a href="http://jigsaw.w3.org/css-validator/"><img align=right border=0
width=88 height=31 src="http://jigsaw.w3.org/css-validator/images/vcss"
alt="Valid CSS!"></a>
</td></tr>

</table>

</body>
</html>


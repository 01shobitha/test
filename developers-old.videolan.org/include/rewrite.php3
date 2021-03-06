<?php
  $path = '/var/www/local/developers.videolan.org/';
  $dir = $_GET['dir'];
  $isindex = false;

  chdir ($path);

  if ($dir == null)
    $dir = '.';

  /* Directory traversal security fix -- Courmisch (20/10/2004) */
  if ((strstr($dir, "..") === FALSE)
   && (strstr($dir, "/.") === FALSE)
   && !preg_match("/[^a-zA-Z0-9\.\/\-]/", $dir))
  {
    $page = $_GET['page'];
    if (preg_match("/[^a-zA-Z0-9\.\-]/", $page))
      $page = '403';
    else
    {
      if ($page == 'index')
        $isindex = true;
      $page = "$dir/$page";
    }
  }
  else
    $page = '403';

  $title = "developers.videolan.org";

  if( file_exists( "$page.html" ) )
  {
    $fd = fopen( "$page.html", "r" );
    $line = fgets( $fd, 1023 );
    if( eregi( "<.*html", $line ) )
    {
      /* on laisse telles quelles les pages html toutes faites
         (e.g. les docs développeur) */
      fpassthru ($fd);
      exit;
    }
    else if( ereg( "<?php", $line, $regs ) )
    {
      $line = fgets( $fd, 1023 );
      eval( $line ); // get $title
    }
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title><?php echo $title; ?></title>
  <link type="text/css" href="/main.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
</head>
<body bgcolor="#ffffff">
<table width="100%" cellspacing=0 cellpadding=10>
<tr><td rowspan=2 width=150 valign=top class=background>
<?php
  include( 'include/menu.inc' );
?>
</td>
<td height=50 class=background><h1>developers.videolan.org</h1></td></tr>
<tr>
<td valign=top>

<?php
  if( file_exists( "$page.html" ) )
  {
    include( "$page.html" );
  }
  else if( $_GET['changelog'] )
  {
    echo "<p>Page moved... <a href='http://trac.videolan.org/vlc/browser/trunk/ChangeLog?format=txt'>http://trac.videolan.org/vlc/browser/trunk/ChangeLog?format=txt</a>.</p>";
    /*$changelogfile = file( 'ChangeLog' );
    while( list( $line_number, $line ) = each( $changelogfile ) )
    {
      $line = htmlspecialchars( $line, ENT_QUOTES );
      echo "$line<br />";
    }*/
  }
  else
  if( $isindex && $dir != "include" && is_dir( $dir ) )
  {
    $listing = array();
    $handle = opendir( $dir );
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
      echo '<li><code><a href="'.$file.'">'.$file.'</a></code></li>';
      next($listing);
    }
  }
  else
  {
    include( '404.html' );
    if( !strncmp( $dir, "pub", 3 ) )
    {
      echo "<p>Are you looking for <a href='http://downloads.videolan.org/$dir/'>http://downloads.videolan.org/$dir/</a> ?</p>";
    }
  }
?>

<br><br>

</td></tr>

<tr><td colspan=2>
<hr noshade align="left" width="100%">
<a href="http://validator.w3.org/check/referer"><img align="right"
border="0" src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML
4.01!" height="31" width="88"></a>
<a href="http://jigsaw.w3.org/css-validator/"><img align=right border=0
width=88 height=31 src="http://jigsaw.w3.org/css-validator/images/vcss"
alt="Valid CSS!"></a>
</td></tr>

</table>

</body>
</html>


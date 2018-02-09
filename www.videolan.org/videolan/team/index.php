<?php
   $title = "the team";
   $additional_js = array("http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAA4WikHyFOEHllsvHRH76zihTplTmqAEFCbK_xv5tRDy86xiE0jRSIeYAd6tv5hvmOt5X01c8BhPqAmg",
                          "map.js");
   $body_onunload = "GUnload();";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<script type='text/javascript'>
   $(document).ready(function () { load(); });
</script>

<div>
<h1> Team / Contact </h1>

<p> The VideoLAN team is made up of developers
from all over the world and former students of the <a
href="http://www.ecp.fr/">École Centrale Paris</a>:</p>

<div id="map" style="width: 100%; height: 500px" class="center"></div>

<h2>The developers</h2>

<p>There is a description of what they worked on, so that you can spot
cool dudes. Note that dudes with a SVN account are very cool dudes. If
you want to email a dude you will need to replace the '-replacewith@-'
part with '@'. </p>

<?php
   /* Return the next line */
   function nextline()
   {
      global $count, $file;
      if( $count >= count($file) ) return('');

      $line = ereg_replace("\n", '',$file[$count]);
      $count++;

      if( ereg('^[ #]+', $line) ) return('');

      return htmlspecialchars($line);
   }

   /* Return the next dude */
   function nextdude()
   {
      global $count, $file;

      /* Find a non-empty line */
      do {
         if( $count >= count($file) ) return('');
         $line = nextline();
      } while( $line == '' );

      /* Fill stuff until we find an empty line */
      do {

         $item = $line[0];
         $line = substr($line,3);

         switch( $item )
         {
            case 'N': $dude = $line; break;
            case 'E': $email = $line; break;
            case 'C': $cvs = $line; break;
            default: $job[] = $line; break;
         }

         if( $count >= count($file) ) break;
         $line = nextline();

      } while( $line != '' );

      /* Format stuff */
      if( !$dude ) return'';
      if( $email ) $email = str_replace("@","-replacewith@-",$email);
      if( $email ) $dude = '<a href="mailto:'.$email.'">'.$dude.'</a>';
      if( !$job ) return $dude;
      while (list ($key, $val) = each ($job)) {
         $dude .= "<br /> - $val";
      }

      return($dude);
   }

   /* Parse a dude list */
   function parselist($module) {
      global $count, $file;

      if(!file_exists('AUTHORS.'.$module)) return;

      echo "<h3>The $module team</h3>";
      $file = file('AUTHORS.'.$module);
      $count = 0;

      while($count < count($file))
      {
          ?><p><?php
          echo nextdude();
          ?></p><?php
      }
   }

   $handle=opendir('.'); 
   while (false!=($f = readdir($handle))) { 
      if(ereg("AUTHORS.vlc", $f)) {
        $file = file($f);
        foreach( $file as $line ) {
        ?><p><?php
        echo $line;
        ?></p><?php
        }
        }
      else if(ereg("AUTHORS",$f)) {
         parselist(substr($f,8));
      } 
   }
   closedir($handle); 

?>

<h2>Contacting us</h2>

<p>See the <a href="/contact.html">contact page</a>.</p>

</div>

<?php footer('$Id$'); ?>

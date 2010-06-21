<?php
   $title = "the VideoLAN team";
   $lang = "en";
   $menu = array( "project", "team" );
   $additional_js = array("http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAA4WikHyFOEHllsvHRH76zihTplTmqAEFCbK_xv5tRDy86xiE0jRSIeYAd6tv5hvmOt5X01c8BhPqAmg",
                          "map.js");
   $additional_css = array("/panels.css");
   $body_onload = "load();";
   $body_onunload = "GUnload();";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">
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
      if( $cvs ) $dude .= " (SVN login: <code>$cvs</code>)";
      if( !$job ) return $dude;
      while (list ($key, $val) = each ($job)) {
         $dude .= "<br /> - $val";
      }

      $dude .= $description;

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
      if(ereg("AUTHORS",$f)) {
         parselist(substr($f,8));
      } 
   }
   closedir($handle); 

?>

<h2>Legal contact</h2>

<p>Hosting for the VideoLAN project is provided by&nbsp;:</p>

<pre style="margin-left: 60px;">
VideoLAN
18, rue Charcot
75013 Paris
France
</pre>

</div>

<div id="right">

<?php panel_start("blue"); ?>
<h1>Contacting us</h1>

<p>For VLC media player user-related questions, 
please see our <a href="/support">Support
section</a> and the users <a href="/support/lists.html">Mailing-lists</a>.</p>
<p>Support questions for VLC media player should be mailed <a href="mailto:vlc@REMOVETHIS@videolan.org">vlc - at - videolan.org</a>.</p>
<p>If you want to contact the VideoLAN team, about partnerships, legal aspects or any non-support related questions , please write to 
<a href="mailto:videolan@REMOVETHIS@videolan.org">videolan - at - videolan.org</a> 
in French or English.</p>

<p> If you want to redistribute some VideoLAN software (VLC, VLS...)
in a magazine for example, you don't need to ask us the permission !
You can distribute an original or a modified version as long as you
comply with its license terms, i.e. the GNU General Public License
Version 2. The easiest way to conform to this licence is to accompany
the software with its sources. For example, if you plan to distribute a
binary version of VLC on a CD, you should also include on the same CD
all the files listed on the VLC source code page.</p>

<p>In case you write an article about VideoLAN, we would be very glad to
have a copy of it to add to our press book. You can send us the article
at the following address:</p>

<pre  style="margin-left: 60px;">
VideoLAN
18, rue Charcot
75013 Paris
France
</pre>
<?php panel_end(); ?>

</div>

<?php footer('$Id$'); ?>

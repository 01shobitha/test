<?php
   $title = "the VideoLAN team";
   $lang = "en";
   $date = "7 April 2002";
   $menu = array( "home", "team" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>


<h1> Team / Contact </h1>

<p> The VideoLAN team is made up of students of the <a
href="http://www.ecp.fr/">�cole Centrale Paris</a> and developers
from all over the world:</p>

<p class="center">
<a href="/images/developers-map.png">
  <img src="/images/developers-map.jpg" alt="VideoLAN developers map"
       width="300" height="225" />
</a></p>

<div class="others">
<div class="others1">
<h2>Contacting us</h2>

<p>For user-related questions, please see our <a href="/support">Support section</a></p>

<p>
If you want to contact the French team of the Ecole Centrale Paris, about partnerships for example, please write to <a href="mailto:videolan@videolan.org">videolan@videolan.org</a> in French or English.</p>

<p>
If you want to redistribute some VideoLAN software (VLC, VLS...) in a magazine for example, you don't need to ask us the permission ! You can distribute an original or a modified version as long as you comply with its license terms, i.e. the GNU General Public License Version 2. The easiest way to conform to this licence is to accompany the software with its sources. For example, if you plan to distribute a binary version of VLC on a CD, you should also include on the same CD all the files listed on the VLC source code page.
</p><p>
In case you write an article about VideoLAN, we would be very glad to have a copy of it to add to our press book. You can send us the article at the following address :
</p>
<pre  style="margin-left: 60px;">
VideoLAN
Club VIA Centrale R�seaux
R�sidence Ecole Centrale
2, avenue Sully Prudhomme
92 290 Ch�tenay Malabry
France
</pre>

</div>

<div class="others2">
<h2>The project leader</h2>
<p><a href="mailto:antoine.cellerier&#64;videolan.org">Antoine Cellerier</a></p>
<h2>The teachers</h2>

<p>Two teachers of the Ecole Centrale Paris supervise the project:</p>

<ul>

<li>Mr Jean-Philippe Rey, responsible for the Information Technologies
at the school,</li>

<li>Mr Dimitri Dagot, director of the <a
href="http://www.etudes.ecp.fr/option-it/">Computer-science and Telecom
option</a> of the school.</li>

</ul>
</div>
</div>
<div class="others">
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

      echo "<h3>the $module team</h3>";
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
</div>
<div class="others">

<div class="others1">
<h2>The law sector</h2>

<p><a href="mailto:Julien.Marx&#64;videolan.org">Julien Marx</a> and <a
href="mailto:PA.Rappenne&#64;videolan.org">Pierre-Antoine Rappenne</a> are
working on the law issues which VideoLAN is facing.</p>
</div>
<div class="others2">
<h2>Supreme counsellor and mascot of the project</h2>

<p><a href="mailto:ali@videolan.org">Ali�nor Salin</a>, alias <b>ali</b>.</p>
</div>

<div class="others">
<div class="others1">
<h2>The Treasurer</h2>

<p><a href="mailto:treasurer@videolan.org">Pierre-Antoine Rappenne</a></p>
</div>
<div class="others2">
<h2>ECP students</h2>

<p>Antoine Cellerier, R�mi Denis-Courmont, Yoann Peronneau, J�r�me Decoodt,
Julien Lafaix, Julien Marx and Pierre-Antoine Rappenne.
</p>
</div>
</div>
<?php footer('$Id$'); ?>

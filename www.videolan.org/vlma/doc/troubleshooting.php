<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Troubleshooting</h1>

<h2>VLC</h2>

<p>VLC is not a perfect software.</br>
Sometimes, as you may see on your RRD graph, VLC may start to leak memory. If you don't stop this process, the load on you server
may increase to reach huge values. In this case, the streaming will not work propertly. VLMa will detect this and will re-assing the
broadcasting commands. However, this is not efficient.<br/>
The only way to solve this situation is restarting VLC and waiting for VLMa to re-assign the commands.</p>

<h2>VLMa</h2>

<p>Please let us know if you find any bugs.</p>

</div>

<?php footer('$Id$') ?>

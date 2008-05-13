<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Troubleshooting</h1>

<h2>VLC</h2>

<p>VLC is not a perfect software.</br>
Sometimes, as you may see on your RRD graph, VLC starts to leak memory. If you don't stop this process, the load on you server
may increase to reach huge values. In this case, the streaming can not work propertly. The VLMa see that and regives the
broadcasting orders. But this is not efficient.<br/>
The only way to leave this process is to restart VLC and wait for VLMa to regive the orders.</p>

<h2>VLMa</h2>

<p>Please let us know if you find some bugs.</p>

</div>

<?php footer('$Id$') ?>

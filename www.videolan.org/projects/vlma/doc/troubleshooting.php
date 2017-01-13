<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $new_design = true;
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">VLMa <small>Troubleshooting</small></h1>

    <h2>VLC</h2>
    <p>VLC is not a perfect software.</p>
    <p>Sometimes, as you may see on your RRD graph, VLC may start to leak memory. If you don't stop this process, the load on you server
    may increase to reach huge values. In this case, the streaming will not work propertly. VLMa will detect this and will re-assing the
    broadcasting commands. However, this is not efficient.</p>
    <p>The only way to solve this situation is restarting VLC and waiting for VLMa to re-assign the commands.</p>

    <h2>VLMa</h2>
    <p>Please let us know if you find any bugs either by asking on the <a href="http://mailman.videolan.org/listinfo/vlma">mailing list</a> or by adding a ticket to the <a href="http://trac.videolan.org/vlma/">Trac</a>.</p>
</div>

<?php footer() ?>

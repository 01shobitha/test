<?php

/* Create a colored panel */
function panel_start( $color )
{ ?>
  <div class="panel-<?php echo $color; ?>"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
<?php }

/* Finishes it */
function panel_end( )
{ ?>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
<?php }

/* Format sizes for packages */
function FormatSize($size) {
    $sizes = Array('B', 'KiB', 'MiB', 'GiB', 'TiB');
    $ext = $sizes[0];
    for ($i=1; (($i < count($sizes)) && ($size >= 1024)); $i++) {
        $size = $size / 1024;
        $ext  = $sizes[$i];
    }
    return round($size, 1).$ext;
}

/* Image function to hit the start server */
function image( $src_img, $alt, $id = "", $width = "") {
    echo "<img src='//images.videolan.org/images/".$src_img."' alt='".$alt."'";
    if( !empty( $id ) ) echo " class='$id'";
    if( !empty( $width ) ) echo " width='$width'";
    echo " />\n";
}

?>

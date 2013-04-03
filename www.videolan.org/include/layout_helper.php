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
function image( $src_img, $alt, $id = "" ) {
    echo "<img src='//images.videolan.org/images/".$src_img."' alt='".$alt."'";
    if( !empty( $id ) ) echo " class='$id'";
    echo " />\n";
}

/*
 * the real code
 */

/* default language and date */
if(!isset($language) || $language == "" ) { $language = "en"; }

if(!isset($additional_css)) $additional_css = array();
if(!isset($additional_js)) $additional_js = array();
if(!isset($alternate_lang)) $alternate_lang = array();
if(!isset($body_onload)) $body_onload = "";
if(!isset($body_onunload)) $body_onunload = "";
if(!isset($body_color)) $body_color = "orange";
if(!isset($nobanner)) $nobanner = false;
/* render the page */

// HTML header
start_head( preg_replace( "/<[^>]*>/", "" , $title ), $body_color, $language,
           $additional_css, $additional_js, $alternate_lang, $body_onload, $body_onunload );
start_body( $body_color, $language );
draw_menus( $nobanner, $alternate_lang );
?>

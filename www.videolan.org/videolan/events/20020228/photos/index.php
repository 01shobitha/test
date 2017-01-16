<?php
    $title = "VideoLAN official presentation";
    $lang = "en";
    $new_design = true;
    $body_color = "green";
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function printImageThumb($filename) { ?>
    <div class="col-xs-6 col-md-3">
        <a href="<?= $filename ?>" class="thumbnail">
            <img src="thumbs/<?= pathinfo($filename, PATHINFO_FILENAME) ?>_thumb.jpg" alt="<?= $filename ?>">
        </a>
    </div>
<?php } ?>

<div class="container">
    <h1 class="bigtitle">VideoLAN official presentation <small>28 February 2002</small></h1>
    <div class="row">
        <?php
            $folder = realpath(dirname(__FILE__));
            $files = scandir($folder);

            foreach ($files as $file) {
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                if (strcasecmp($ext, "JPG") === 0 || strcasecmp($ext, "PNG") === 0) {
                    printImageThumb($file);
                }
            }
        ?>
    </div>
</div>

<?php footer(); ?>

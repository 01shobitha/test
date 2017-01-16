<?php
    $title = "Index of /home/jb/journeevia-20030321-presentVL";
    $lang = "en";
    $new_design = true;
    $body_color = "green";
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function printImageThumb($filename) { ?>
    <div class="col-xs-4 col-md-2">
        <a href="<?= $filename ?>" class="thumbnail">
            <img src="thumbs/tn_<?= $filename ?>.png" alt="<?= $filename ?>">
        </a>
    </div>
<?php } ?>

<div class="container">
    <h2>Index of /home/jb/journeevia-20030321-presentVL</h2>
    <div class="row">
        <?php
            $folder = realpath(dirname(__FILE__));
            $files = scandir($folder);

            foreach ($files as $file) {
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                if (strcasecmp($ext, "JPG") === 0) {
                    printImageThumb($file);
                }
            }
        ?>
    </div>
</div>

<?php footer(); ?>

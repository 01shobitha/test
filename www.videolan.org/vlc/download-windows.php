<?php
   $language = "";
   $title = "Download official VLC media player for Windows";
   $new_design = true;
   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   $dropdownItems = array(
       array(
           "name"       => "7zip package",
           "location"   => "vlc-$win32version-win32.7z",
       ),
       array(
           "name"       => "Zip package",
           "location"   => "vlc-$win32version-win32.zip",
       ),
       array(
           "name"       => "64 bits installer",
           "location"   => "vlc-$win32version-win64.exe",
       ),
       array(
           "name"       => "Source code",
           "location"   => "download-sources.html",
       )
   );
?>

<div class="container">
    <?php drawVLCdownloadSection("windows", $dropdownItems, false, "VLC for windows"); ?>
    <h2>Download VLC for Windows 95/98/Me</h1>
    <p><a href="http://sourceforge.net/projects/kernelex/">Please install KernelEx</a> or take an old
    version of VLC</p>
    <h2>Older versions</h2>
    <?php browse_old("vlc") ?>
    </div>
</div>
<?php footer('$Id$'); ?>

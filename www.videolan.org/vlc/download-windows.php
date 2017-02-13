<?php
   $language = "";
   $title = _("Download official VLC media player for Windows");
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
           "location"   => "$dlBase/$win32version/win32/vlc-$win32version-win32.7z",
       ),
       array(
           "name"       => "Zip package",
           "location"   => "$dlBase/$win32version/win32/vlc-$win32version-win32.zip",
       ),
       array(
           "name"       => "Installer for 64bit version",
           "location"   => "$dlBase/$win32version/win64/vlc-$win32version-win64.exe",
       ),
       array(
           "name"       => "Source code",
           "location"   => "download-sources.html",
       )
   );
?>

<div class="container">
  <?php drawVLCdownloadSection("windows", $dropdownItems, false, "VLC for Windows"); ?>
  <span dir="ltr" lang="en">
    <h2>Windows requirements</h2>
    <p>VLC runs on all versions of Windows, from Windows XP SP3 to the last version of Windows 10.</p>
    <h2>VLC for Windows 95/98/Me</h2>
    <p><a href="http://sourceforge.net/projects/kernelex/">Please install KernelEx</a> or take an old
    version of VLC</p>
    <h2>Older versions</h2>
    <?php browse_old("vlc") ?>
  </span>
</div>
<?php footer('$Id$'); ?>

<?php
   $title = "Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "projects", "projects" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

        <div>
            <?php image( 'VLMC-Icon.png', 'Large Orange VLMC Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>VLMC</h1>
                <div class='projectDescription'>
                    VideoLAN Movie Creator is a non-linear editing software for video creation based on libVLC and running on Windows, Linux and Mac OS X!
                    It is a free software distributed under the terms of the GPL v2.
                </div>
                <a class='extraInfoLink' href='#features'>Features</a>
                <a class='extraInfoLink' href='#screenshots'>Screenshots</a>
                <a class='extraInfoLink' href='#'>Other Systems and Versions</a>
                <div class="clearme"> </div>
                <h2>We are looking for contributors!</h2>
            </div>
        </div>
        <div style='clear: both; padding-top: 90px;'>
            <div style='float: left; width: 400px; color: #333333;'>
                <a name="features"></a>
                <h1 style='margin-bottom: 25px;' class='red'>Features</h1>
                Cross Platform program<br />
                <br />
                Based on VLC<br />
                <br />
                Read most file formats and can export to most formats<br />
                <br />
                Youtube upload integration<br />
                <br />
                Simple to use, yet powerful<br />
            </div>
<?php
function vlmcscreenshot($img,$thumb, $desc){
    echo"<div class='screenshot'><a href='http://images1.videolan.org/vlmc/screenshots/$img'><img
    src='http://images1.videolan.org/vlmc/screenshots/$thumb' alt='VLMC - $desc' /></a>
    </div>";
}
?>
            <div style='float: right; width: 450px; padding-left: 70px;'>
                <a name="screenshots"></a>
                <h1 style='padding-left: 5px; margin-bottom: 25px;'>Screenshots</h1>
<?php
                vlmcscreenshot('snapshot2.png', 'tm_snapshot2.png', "Screenshot" );
                vlmcscreenshot('snapshot10.png', 'tm_snapshot10.png', "Screenshot" );
                vlmcscreenshot('snapshot12.png', 'tm_snapshot12.png', "Screenshot" );
                vlmcscreenshot('snapshot2.png', 'tm_snapshot2.png', "Screenshot" );
?>
                <div style='clear: both;'></div>
                <a class='red' style='display: block; padding-top: 10px; padding-left: 5px; font-size: 12px;' href='/vlmc/screenshots.html'>view all screenshots</a>
            </div>
        </div>
<!--        <div class='tricolumn'>
            <div class="onecolumn">
                <h1>Heading One</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit.<br />
                <br />
                Donec tempor accumsan massa in iaculis. Donec volutpat rutrum ipsum nec volutpat. Nullam egestas dignissim lorem, eu euismod ante gravida vitae. Sed feugiat porta libero, nec sagittis felis pulvinar ut. Integer ut tristique ante. In hendrerit, risus quis iaculis posuere, ipsum sapien congue nulla, in tristique neque urna sed nibh.<br />
                <br />
                Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet. Donec euismod scelerisque diam, a egestas quam pretium non. Phasellus auctor elit non diam facilisis luctus. Sed id justo quis felis aliquam ullamcorper.<br />

            </div>
            <div class="onecolumn">
                <h1>Heading Two</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit.<br />
                <br />
                Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet. Donec euismod scelerisque diam, a egestas quam pretium non. Phasellus auctor elit non diam facilisis luctus. Sed id justo quis felis aliquam ullamcorper.<br />
                <br />Donec tempor accumsan massa in iaculis. Donec volutpat rutrum ipsum nec volutpat. Nunc ac urna a risus scelerisque commodo non in neque. Donec blandit eleifend placerat. Proin viverra semper nisi sit amet cursus. Suspendisse potenti. Nullam egestas dignissim lorem, eu euismod ante gravida vitae. Sed feugiat porta libero, nec sagittis felis pulvinar ut. Integer ut tristique ante. In hendrerit, risus quis iaculis posuere, ipsum sapien congue nulla, in tristique neque urna sed nibh.
            </div>
            <div class='lastcolumn'>
                <h1>Heading Three</h1>
                Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet. Donec euismod scelerisque diam, a egestas quam pretium non. Phasellus auctor elit non diam facilisis luctus. Sed id justo quis felis aliquam ullamcorper.<br />
                <br />Donec blandit eleifend placerat. Proin viverra semper nisi sit amet cursus. Suspendisse potenti. Nullam egestas dignissim lorem, eu euismod ante gravida vitae. Sed feugiat porta libero, nec sagittis felis pulvinar ut. Integer ut tristique ante. In hendrerit, risus quis iaculis posuere, ipsum sapien congue nulla, in tristique neque urna sed nibh.
            </div>
        </div>
-->
        <div style='clear: both;'></div>

<?php footer(); ?>

<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $new_design = true;
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">VLMa <small>Server</small></h1>

    <h2>General</h2>
    <p>VLMa allows you to manage multiple streaming servers with different input devices automatically. At present, VLMa can manage servers with DVB-S and DVB-T adapters compatible with Linux kernel drivers.<br />
    See <a href="http://www.linuxtv.org/">http://www.linuxtv.org/</a> for more details.</p>
    <p>Your streaming server can host a minimal Linux installation. You just need VLC media player. The version that comes within your distribution
    may be fine.</p>
    <p>Important: you must run VLC on the server with an enabled telnet Interface to allow VLMa to deliver its streaming commands.
    And we also recommend you to run VLC in a screen, for example by using the following command:</p>

    <pre><code>screen -r -d -S vlc-vlma vlc -I telnet -vvv --color</code></pre>

    <h2>Server list</h2>
    <p>If you click on the tab 'Servers', you will find the servers broadcasting the channels you have programed.</p>
    <p>Those machines control one or several DVB-T (to get digital terrestrial television channels) or DVB-S (to get satellite channels) input devices.</p>

    <h2>Adding a server</h2>
    <p>You just have to provide a name and its DNS or IP address.</p>

    <h2>Adding an input device</h2>
    <p>To be able to work, VLMa needs to know the input devices your server has access to (DVB-S, DVB-T).
    Linux udev gives a number to each adapter it detects once you start it. The first it finds is given the number 0 and for the following it increments this number by one.</p>
    <p>Click on "Add an adapter". After entering the adapter's udev number (0, 1, 2, ...), choose the adapter's type.
    Finally click on "Add" and it will appear in the list of the current server. If you are adding a DVB-S adapter you need also to select the satellite which the adapter is linked to.</p>

    <?php /* TODO: Add missing screenshot http://download.videolan.org/projects/vlma/screenshot/0.2.0/serveradd.png */ ?>
    <?php /* TODO: Add missing screenshot http://download.videolan.org/projects/vlma/screenshot/0.2.0/adapteradd.png */ ?>
</div>

<?php footer() ?>

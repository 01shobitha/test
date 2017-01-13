<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $new_design = true;
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">VLMa <small>Scheduling a channel</small></h1>

    <p>After having added a channel, you can check it out in the Media tab: if the
    channel is there, it is ready to be scheduled.</p>
    <p>To schedule a channel, you have to click on "Program" on the right side of the channel. Afterwards,  you choose its priority and hit "Program".</p>

    <?php /* TODO: Add missing screenshot http://download.videolan.org/projects/vlma/screenshot/0.2.0/schedule.png */ ?>

    <p>What does priority mean? The bigger priority is, the most likely it is to be streamed on the network.</p>

    <p>For example, let's imagine you set 2 channels to be streamed, one whose priority is 10 and the other one is 5.
    Once the daemon is started, it will try to stream the channel with a higher priority first.
    Thus, the channel with priority 10 will be streamed first. If the server is still able to stream another one, it will take a look at the channel with priority 5.</p>

    <p>In a few words: if you absolutely want channel A to be streamed, give it a very high priority.</p>

    <p>You have also to choose a name for the SAP announce that will appear in the user's player.</p>

    <p>It's done! VLMa assigns a multicast IP address of its pool to your channel and sends the streaming commands to the respective server.</p>
    <p>VLMa home page will show that the channel is ready to be streamed now, if the servers are not too busy.</p>
</div>

<?php footer() ?>

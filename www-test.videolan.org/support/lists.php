<?php
   $title = "Mailing-lists";
   $lang = "en";
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle"> User mailing-lists </h1>

<div>

<p>The VideoLAN user mailing-lists are dedicated to:</p>
<ul class="bullets">
<li>user support for VideoLAN software,</li>
<li>announces for VideoLAN releases and events.</li>
</ul>

<p>They are <b>English-speaking</b> <strong>public</strong> mailing-lists.</p>

<h2>Important mailing lists</h2>
<p>The most important mailing-lists are:</p>
<ul class="bullets">
<?php
 function deflist( $name, $desc ) {
     echo '<li><a href="http://mailman.videolan.org/listinfo/'.$name.'">Mailing list for '.$desc.'</a></li>';
 }
  deflist( "videolan-announce", "announces of new software releases");
  deflist( "vlc", "VLC users");
  deflist( "vlc-devel", "VLC development");
  deflist( "x264-devel", "x264 development");
  deflist( "vlmc-devel", "VLMC development");
?>
</ul>


<h2>Web interface for subscription, archives, ...</h2>
<p>You can use our <a href="http://mailman.videolan.org/">Mailing-lists management</a> to:</p>
<ul class="bullets">
<li>subscribe,</li>
<li>unsubscribe,</li>
<li>see online archives,</li>
<li>view the list of mailing-lists.</li>
</ul>

<h2>Nota Bene</h2>
<p>All the mailing-lists are in "closed-post" mode, which mean
that messages from people who are not subscribed to the list
need to go through a moderation process, which can take many
hours or days, but is a necessary evil to avoid spam.
 The exception is the <code><b>videolan-announce</b></code> list,
 which is fully moderated.</p>

<h2>Nota Bene 2</h2>
<p>All the mailing-lists are in <strong>PUBLICLY archived</strong>
which mean that your messages <strong>WILL be PUBLIC</strong>
and mirrored in a way that <strong>we CANNOT remove</strong> the posts.</p>
<p>If you want to stay anonymous, use <a href="http://forum.videolan.org">our forum</a> for user questions,
or <a href="/contact.html">contact us</a> for any other topic.</p>

</div>

<?php footer('$Id$'); ?>

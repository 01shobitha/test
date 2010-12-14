<?php
   $title = "VideoLAN - mailing-lists";
   $lang = "en";
   $menu = array( "support", "lists" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> User mailing-lists </h1>

<div id="fullwidth">

<p>The VideoLAN user mailing-lists are dedicated to:</p>
<ul>
<li>user support for VideoLAN software,</li>
<li>announces for VideoLAN releases and events.</li>
</ul>

<p>They are <b>English-speaking</b> mailing-lists.</p>

<p>Before posting in those mailing-lists, please see the <a
href="http://mailman.videolan.org/">online
archives</a>.</p>

<p>All the mailing-lists are in "closed-post" mode, which mean
that messages from people who are not subscribed to the list
need to go through a moderation process, which can take many
hours, but is a necessary evil to avoid spam. The exception is
the <code><b>videolan-announce</b></code> list, which is fully
moderated.</p>


<h2>Subscription / Unsubscription</h2>

<p>You can subscribe or unsubscribe from the web. Just enter your
e-mail address below. You will be sent an email-based confirmation
request a few minutes later. Reply to the email to confirm the
subscription or unsubscription.</p>

<form action="subscribe.php" method="post">

<p>Your email address: <input type="text" name="from" size="30" /></p>

      <p> Subscribe/Unsubscribe to/from the following lists: </p>

      <p>
      <input type="checkbox" name="videolanannounce" />
          <code><b>videolan-announce@videolan.org</b></code>
          (low-traffic and moderated announce list for VideoLAN releases and events)<br /><br />
      <input type="checkbox" name="vlc" />
          <code><b>vlc@videolan.org</b></code> (<b>users</b> discussions about VLC)<br /><br />
      <input type="checkbox" name="streaming" />
          <code><b>streaming@videolan.org</b></code> (<b>users</b> discussions about the streaming solution: VLC, VLS, mini-SAP-server, the network...)<br />
      </p>

      <p><input type="submit" name="subscribe" value="Subscribe" />
      <input type="submit" name="unsubscribe" value="Unsubscribe" /></p>

</form>

<p>In addition to these mailing-lists, users can also
subscribe to the <b>developers</b> mailing-lists: see the <a
href="/developers/lists.html">mailing-lists</a> page on
the developers Web site.</p>

<h2>Subscribe / Unsubscribe using e-mail</h2>

<p>Our mailing-list manager is called Mailman.
Experienced users can issue their commands to
<a href="mailto:mailman@videolan.org">mailman@videolan.org</a> or
browse <a href="http://mailman.videolan.org/">http://mailman.videolan.org</a>.</p>

</div>

<?php footer('$Id$'); ?>

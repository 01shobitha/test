<?php
   $title = "VideoLAN - mailing-lists";
   $lang = "en";
   $date = "14 February 2001";
   $menu = array( "support", "mail" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> User mailing-lists </h1>

<p>The VideoLAN user mailing-lists are dedicated to:</p>
<ul>
<li>user support for VideoLAN software,</li>
<li>announces for VideoLAN releases and events.</li>
</ul>

<p>They are <b>English-speaking</b> mailing-lists.</p>

<p>Before posting in those mailing-lists, please see the <a
href="http://www.via.ecp.fr/via/ml/videolan-en.html">online
archives</a> hosted at VIA.</p>

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

<form action="subscribe.html" method="post">

<p>Your email address: <input type="text" name="from" size="30" /></p>

      <p> Subscribe/Unsubscribe to/from the following lists: </p>

      <p>
      <input type="checkbox" name="videolanannounce" />
          <code><b>videolan-announce@videolan.org</b></code>
          (low-traffic and moderated announce list for VideoLAN releases and events)<br />
      <input type="checkbox" name="vlc" />
          <code><b>vlc@videolan.org</b></code> (user discussions about VLC)<br />
      <input type="checkbox" name="streaming" />
          <code><b>streaming@videolan.org</b></code> (user discussions about the streaming solution: VLS, mini-SAP-server, the network...)<br />
      </p>

      <p><input type="submit" name="subscribe" value="Subscribe" />
      <input type="submit" name="unsubscribe" value="Unsubscribe" /></p>

</form>

<p>In addition to these mailing-lists, users can also
subscribe to the developers mailing-lists: see the <a
href="http://developers.videolan.org/lists.html">mailing-lists</a> page on
the developers Web site.</p>

<h2>Subscribe / Unsubscribe using e-mail</h2>

<p>Our mailing-list manager is called Ecartis.
Experienced users can issue their commands to
<a href="mailto:ecartis@videolan.org">ecartis@videolan.org</a>.</p>

<?php footer('$Id$'); ?>

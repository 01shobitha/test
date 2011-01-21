<?php
   $title = "User support and help";
   $lang = "en";
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<h1 class="bigtitle">Support and Help center</h1>

<p>VideoLAN is free and open source software; and is not backed by any company.
Developers are mostly <strong>volunteers</strong>.<br />
Therefore, <strong>please remember</strong> that every user support
is provided by <strong>volunteers</strong> doing it in their free time.<br />
Noone owes you an answer to your question.</p>
<div class="clearme" style="margin-bottom: 30px;"></div>

<p><strong>You are here for:</strong><br />
<a class="normalButton" href="#documentation">Documentation</a>
<a class="normalButton" href="#help">Help and support</a>
<a class="normalButton" href="#bugs">Reporting a bug</a>
<a class="normalButton" href="/contact.html">Contacting VideoLAN</a>
</p>
<div class="clearme" style="margin-bottom: 30px;"></div>

<h1>Documentation</h1>
<a id="documentation"></a>

<h3>FAQ</h3>
<p>If you have any questions about VideoLAN, about VLC media player, you should
<strong>always start</strong> by reading the <a href="faq.html">Official FAQ</a>.</p>

<h3>Documentation</h3>
<p>You can access our
 <a href="http://wiki.videolan.org/Documentation:Documentation"> Documentation</a>,
about <a href="http://wiki.videolan.org/Documentation:Play_HowTo">VLC playback</a> and
<a href="http://wiki.videolan.org/Documentation:Streaming_HowTo">VLC Streaming</a>.</p>

<div style="margin: 40px;"></div>

<h1>Help and Support</h1>
<a id="help"></a>
<div class="onecolumn" style="margin-bottom: 30px;">
    <h3>You have a Usage Problem</h3>
    <p>If you have problems using our software, you should:</p>
    <ul class="bullets">
        <li>use the <a href="http://wiki.videolan.org/Common_Problems">troubleshouting guide</a>,</li>
        <li> <a href="http://forum.videolan.org/search.php">search</a> the official
        <a href="http://forum.videolan.org/">forum</a> for an answer,</li>
        <li>read the <a href="http://wiki.videolan.org">wiki</a>.</li>
    </ul>
</div>

<div>
    <h3>You want to ask a question</h3>
    <p>To ask a question, you <strong>need</strong> to prepare a <strong>correct report</strong>
     using the <a href="http://wiki.videolan.org/VLC_report">VLC report page</a>.</p>
    <p>Then ask your question, on:</p>
    <ul class="bullets">
        <li>our <a href="http://forum.videolan.org">Forum</a>, in the correct section;</li>
        <li>our <a href="lists.html">users mailing-lists</a>, especially <a href="mailto:vlc@REMOVETHIS@videolan.org">vlc - at - videolan.org</a>;</li>
        <li>our live-chat IRC channel on the <a href="http://www.freenode.net">freenode</a> Network (<em>irc.videolan.org, #videolan</em>), for live answers. Use the <a href="http://webchat.freenode.net/">Freenode Web</a> interface, if necessary.</li>
    </ul>
</div>

<div class="tricolumn" style="padding-top: 10px;">
    <div class="onecolumn">
        <h1>Reporting bugs</h1>
        <a id="bugs"></a>
        <p> Read and conform yourself to our <a href="http://wiki.videolan.org/Report_bugs">Reporting Bugs</a>
         policy and look on our <a href="http://trac.videolan.org">Bugtracking</a>.</p>
    </div>

    <div class="onecolumn">
        <h1>Consulting services</h1>

        <p>If you are a professionnal, and need services around our products,
        some companies provide professionnal support on VideoLAN. They are
        listed on the <a href="/vlc/partners.html">consultants</a> page.</p>
    </div>

    <div class="lastcolumn">
        <h1>Contacting the team</h1>
        For other matters, see the <a href="/contact.html">contact page</a>.
    </div>
</div>

</div>
<?php footer('$Id$'); ?>

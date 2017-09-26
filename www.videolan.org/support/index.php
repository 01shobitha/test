<?php
   $title = "User support and help";
   $lang = "en";
   $body_color = "red";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">

    <h1 class="bigtitle">Support and Help center</h1>

    <p>VideoLAN is free and open source software; and is not backed by any company.
    Developers are mostly <strong>volunteers</strong>.<br />
    Therefore, <strong>please remember</strong> that every user support
    is provided by <strong>volunteers</strong> doing it in their free time.<br />
    Noone owes you an answer to your question.</p>

    <h2 style="margin-top: 30px;">You are here for:</h2>
    <ul class="list-inline">
        <li style="margin-top: 1em;">
            <a class="btn btn-default btn-lg" href="#documentation">Documentation</a>
        </li>
        <li style="margin-top: 1em;">
            <a class="btn btn-default btn-lg" href="#help">Help and support</a>
        </li>
        <li style="margin-top: 1em;">
            <a class="btn btn-default btn-lg" href="#bugs">Reporting a bug</a>
        </li>
        <li style="margin-top: 1em;">
            <a class="btn btn-default btn-lg" href="/contact.html">Contacting VideoLAN</a>
        </li>
    </ul>

    <hr />
    <h1 id="documentation">Documentation</h1>

    <h3>FAQ</h3>
    <p>If you have any questions about VideoLAN or about VLC media player, you should
    <strong>always start</strong> by reading the <a href="faq.html">Official FAQ</a>.</p>

    <h3>Documentation</h3>
    <p>You can access our
     <a href="https://wiki.videolan.org/Documentation">Documentation</a>,
    especially <a href="https://wiki.videolan.org/Documentation:Play_HowTo">VLC playback documentation</a> and
    <a href="https://wiki.videolan.org/Documentation:Streaming_HowTo">VLC Streaming documentation</a>.</p>

    <hr />
    <h1 id="help">Help and Support</h1>
    <div class="row">
        <div class="col-md-6">
            <h3>You have a Usage Problem</h3>
            <p>If you have problems using our software, you should:</p>
            <ul class="bullets">
                <li>Use the <a href="https://wiki.videolan.org/Common_Problems">troubleshooting guide</a></li>
                <li>
                    <a href="https://forum.videolan.org/search.php">Search</a> the official
                    <a href="https://forum.videolan.org/">forum</a> for an answer
                </li>
                <li>Read the <a href="https://wiki.videolan.org">Wiki</a></li>
            </ul>
        </div>

        <div class="col-md-6">
            <h3>You want to ask a question</h3>
            <p>
                To ask a question, you <strong>need</strong> to prepare a <strong>correct report</strong> using the <a href="https://wiki.videolan.org/VLC_report">VLC report page</a>.
            </p>
            <p>Then ask your question, on:</p>
            <ul class="bullets">
                <li>Our <a href="https://forum.videolan.org">Forum</a>, in the correct section</li>
                <li>
                    Our live-chat IRC channel on the <a href="http://www.freenode.net">Freenode</a> Network:<br />
                    Server: <code>irc.freenode.org</code></br>
                    Channel: <code>#videolan</code></br>
                    Use the <a href="https://webchat.freenode.net/?channels=videolan">Freenode Web</a> interface, if you don't have an IRC client at hand.
                </li>
            </ul>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col-md-4">
            <h1 id="bugs">Reporting bugs <br/><small>and feature requests</small></h1>
            <p>Please read our <a href="https://wiki.videolan.org/Report_bugs">reporting bugs policy</a>.</p>

            <h3>VLC bug tracker</h3>
            <p>Go to the <a href="https://trac.videolan.org/vlc/"><b>VLC</b> bug reporting site</a>.</p>

            <h3>VLMC bug tracker</h3>
            <p>Go to the <a href="https://trac.videolan.org/vlmc/"><b>VLMC</b> bug reporting site</a>.</p>
        </div>

        <div class="col-md-4">
            <h1>Consulting services</h1>
            <p>
                If you are a professionnal, and need services around our products, some companies provide professionnal support. They are listed on the <a href="/vlc/partners.html">consultants</a> page.
            </p>
        </div>

        <div class="col-md-4">
            <h1>Contacting the team</h1>
            <p>For other matters, see the <a href="/contact.html">contact page</a>.</p>
        </div>
    </div>

</div>
<?php footer('$Id$'); ?>

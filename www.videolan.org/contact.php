<?php
   $title = "Contact";
   $body_color = "blue";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container" style="max-width: 1000px !important;">
    <h1 class="bigtitle">Contact</h1>
    <p>Before contacting us, please check the <a href="/support/faq.html">FAQ</a> first to be sure that you <b>actually</b> need to contact us!</p>

    <div class="row">
        <div class="col-md-6">
            <h2>VLC Support</h2>
            <p>
                For <a href="/vlc/">VLC media player</a> user-related questions, 
                please see our <a href="/support/">Support section</a>.<br />
                See also our <a href="https://wiki.videolan.org/">Wiki</a> and
                our <a href="https://forum.videolan.org/">Forum</a>.
            </p>
        </div>
        <div class="col-md-6">
            <h2>VLC Development</h2>
            <p>
                For <a href="/vlc/">VLC media player</a> developer questions,
                please see our <a href="https://wiki.videolan.org/Developers_Corner">Developer section</a>.
            </p>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-6">
            <h2>Press</h2>
            <p>
                If you are a journalist or a blogger and need answers to questions,
                please check the <a href="/press/">press center</a> and use <b>e-mail</b>.
            </p>
            <p>
                In case you write an article about VideoLAN, we would be very glad to
                have a copy of it to add to our press book. You can send us the article
                at the <b>postal address</b>.
            </p>
            <p>
                To contact us by e-mail, please write in French, German or English to the address shown below.
            </p>
        </div>
        <div class="col-md-6">
            <h2>Legal</h2>
            <p>
                If you have a question regarding the use of a product, please check
                the <a href="/legal.html">legal FAQ</a>.
            </p>
            <p>
                Any legal document must be sent to the <strong>postal address</strong>.<br />
                We do <strong>not</strong> accept email or fax for legal matters.
            </p>
        </div>
    </div>
    <hr />
    <h2>E-mail</h2>
    <p>
        To contact us by e-mail, please use <a href="mailto:videolan@REMOVETHIS@videolan.org">videolan@<span style="display:none">null</span>videolan.org</span></a> and write in French, German or English.
    </p>
    <!--<p>Any question about <strong>VLC usage</strong> and <strong>BUGS</strong> will <strong>not be</strong> answered.
    See the <a href="/support">Support center</a> for these matters.</p>-->
    <p>
        <strong>Remember</strong>, we are a <strong>volunteer non-profit organization</strong>, and we do not offer jobs and
        cannot sponsor third party events.
    </p>

    <h2>Postal Address</h2>

    <address>
        <strong>VideoLAN</strong><br>
        18, rue Charcot<br>
        75013 Paris<br>
        France
    </address>

    <h2>Phone</h2>
    <p>The phone will very rarely answer and is <b>strictly NOT</b> for user support:</p>
    <strong>+33 951 11 20 20</strong>
    <p>You can send faxes to us; except for legal issues, where faxes are not accepted:</p>
    <strong>+33 956 11 20 20</strong>

</div>

<?php footer(); ?>

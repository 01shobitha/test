<?php
$title = "Contribute to the project";
$lang = "en";
$menu = array( "project", "contribute" );
require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

    <h1> How to contribute to VideoLAN </h1>
    <table>

        <tr align="left">
            <th colspan="2" >
                <h2>Contribute time</h2>
            </th>
        </tr>

        <tr>
            <td>
                <img src="http://images.videolan.org/images/contribute-time.png" alt="" style="float: left; margin-right: 5px" />
            </td>

            <td>
                <div>
                    <p>If you have time, we welcome your help in various areas</p>
                    <ul>
                        <li><strong>Programmers</strong>, see the <a href="/developers/">developer documentation</a>,
                            subscribe to the <a href="/support/lists.html">mailing-lists</a>, have
                            a look at the <a href="http://trac.videolan.org/">bug-tracking system</a>,
                        join the <a href="/support/">IRC channel</a> to get help on how to start coding.</li>
                        <li><strong>Writers</strong>, to help improve the documentation</li>
                        <li><strong>Translators</strong>, to <a href="/developers/i18n/">translate</a> VLC</li>
                        <li><strong>Helpers</strong>, to answer on the <a href="http://forum.videolan.org">forums</a> and mailing lists</li>
                        <li><strong>Designers</strong>, for this website and VLC</li>
                    </ul>

                </div>
            </td>
        </tr>

        <tr align="left">
            <th colspan="2">
                <h2>Contribute materials</h2>
            </th>
        </tr>

        <tr>
            <td>
                <img src="http://images.videolan.org/images/contribute-materials.png" alt="" style="float: left; margin-right: 5px" />
            </td>

            <td>
                <p> Your particular DVD, VCD or SVCD does not work with VLC?<br />
                You have a satellite card or an MPEG encoding card that is not supported by some VideoLAN software? </p>
                <p> You can donate it to the developers and it may motivate them to work on your suggestion! In any case, you do not have any
                warranty that your wish will be taken into account. </p>
                <p> If you want to donate materials, please  <a href="/videolan/">contact us.</a></p>
            </td>
        </tr>

        <tr>
            <th colspan="2" align="left">
                <h2>Donate money</h2>
                <a id="money"></a>
            </th>
        </tr>

        <tr>
            <td>
                <img src="http://images.videolan.org/images/contribute-money.png" alt="" style="float: left; margin-right: 5px" />
            </td>

            <td>
                <h3>What is the legal structure of VideoLAN?</h3>

                <p> VideoLAN is a non-profit organisation, under French law.
                    VideoLAN has its own bank account and is responsible for running and maintaining the VideoLAN servers. </p>

                <h3>What are the financial needs of VideoLAN?</h3>

                <ul class="bullets">
                    <li>Buy hardware for developing and testing purposes (DVDs, satellite cards and antenna, MPEG encoding cards,...)</li>
                    <li>Maintain the servers and hardware to run VideoLAN services.</li>
                    <li>Promote the project by organising or participating in events (FOSDEM, Linux Expo Paris, ...)</li>
                </ul>

                <h3>Donate to VideoLAN via PayPal</h3>
                <a id="paypal"></a>

                <p> You can donate money to the project through VideoLAN's <a
                        href="http://www.paypal.com/">PayPal</a> account. There is no minimal amount
                for your donation. </p>

                <p> If you click on one of the buttons below, you will be taken to the secure
                    PayPal Web site. Enter the amount of the donation you want to make.<br />
                You don't need to have a paypal account in order to make a donation.</p>

                <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <p>

                            <span style="font-size: 10pt;">Euros:</span>
                            <input name="cmd" value="_xclick" type="hidden"/>
                            <input name="business" value="sponsor@videolan.org" type="hidden"/>
                            <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                            <input name="no_note" value="0" type="hidden"/>
                            <input name="currency_code" value="EUR" type="hidden"/>
                            <input name="tax" value="0" type="hidden"/>
                            <input src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/>
                    </p></form>

                </div>
                <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><p>
                            <span style="font-size: 10pt;">Dollars:</span>
                            <input name="cmd" value="_xclick" type="hidden"/>
                            <input name="business" value="sponsor@videolan.org" type="hidden"/>
                            <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                            <input name="no_note" value="0" type="hidden"/>
                            <input name="currency_code" value="USD" type="hidden"/>
                            <input name="tax" value="0" type="hidden"/>

                            <input src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/>
                    </p> </form>
                </div>

                <p> If you encounter problems or if you have questions, you
                    can write to VideoLAN's Treasurer (<a
                    href="mailto:treasurer -AT- videolan -DOT- org">treasurer -AT- videolan -DOT- org</a>). </p>

                <h3>Donate to VideoLAN via Bank account</h3>
                Please <a href="/videolan/team/">Contact us</a>.
                <h3>Remember VideoLAN is free software...</h3>

                <p> VideoLAN software is released under the <a
                        href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU General Public Licence</a>,
                    and can be used and distributed freely, according to the terms of this
                    licence.<br />
                    There is absolutely no requirement to donate money (this is not
                    shareware software). But if you want to help us move faster, we welcome
                donations. </p>

            </td>
        </tr>

    </table>
</div>

<?php footer('$Id$'); ?>
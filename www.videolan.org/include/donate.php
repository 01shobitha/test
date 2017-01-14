<?php
function draw_donate( $currency_code, $amount = null, $hosted_button_id = null, $item_tag = null ) {
    switch ($currency_code) {
        case 'EUR':
            $lc = 'GB';
            $class = 'euros';
            $amount = !is_null($amount) ? $amount : '4.00';
            break;
        case 'USD':
            $lc = 'US';
            $class = 'dollars';
            $amount = !is_null($amount) ? $amount : '5.00';
            break;
        default:
            return;
    }
?>
<form class="donate2" action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
    <fieldset>
        <input name="cmd" value="_xclick" type="hidden"/>
        <input name="business" value="sponsor@videolan.org" type="hidden"/>
        <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
        <input name="no_note" value="0" type="hidden"/>
        <input name="currency_code" value="<?php echo $currency_code ?>" type="hidden"/>
        <input name="tax" value="0" type="hidden"/>
        <input name="lc" value="<?php echo $lc ?>" type="hidden"/>
        <input name="no_shipping" value="1" type="hidden"/>
        <?php
        if (!is_null($hosted_button_id)) {
            echo '<input type="hidden" name="hosted_button_id" value="'. $hosted_button_id .'">';
        }
        if (!is_null($item_tag)) {
            echo '<input type="hidden" name="item_number" value="'. $item_tag .'">';
        }
        ?>
        <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
        <input class="<?php echo $class ?>" type='text' name="amount" value="<?php echo $amount ?>" />
        <button type='submit'><?php echo _("donate"); ?></button>
    </fieldset>
</form>
<?php
}
?>

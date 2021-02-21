<?php
    $basicMailChimp = get_theme_mod('basic-social-callout-mailchimp');
    $basicFacebook =    get_theme_mod('basic-social-callout-facebook');
    $basicInstagram =   get_theme_mod('basic-social-callout-instagram');
    $basicPinterest =   get_theme_mod('basic-social-callout-pinterest');
    $basicRSS =         get_theme_mod('basic-social-callout-rss');
    $basicSkype =       get_theme_mod('basic-social-callout-skype');
    $basicSnapchat =    get_theme_mod('basic-social-callout-snapchat');
    $basicTwitter =     get_theme_mod('basic-social-callout-twitter');
    $basicWeChat =      get_theme_mod('basic-social-callout-wechat');
    $basicWhatsApp =    get_theme_mod('basic-social-callout-whatsapp');
    $basicYouTube =     get_theme_mod('basic-social-callout-youtube');
    $basicEmail =       get_theme_mod('basic-social-callout-email');
    $socialDisplayed = 0;
    $arraySocialIcons = array();
   
 
    if($basicFacebook != "") {
        $arraySocialIcons[0] = "<li><a href='$basicFacebook' target='_blank'>
        <i class='fa fa-facebook'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicInstagram != "") {
        $arraySocialIcons[1] = "<li><a href='$basicInstagram' target='_blank'>
        <i class='fa fa-instagram'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicPinterest != "") {
        $arraySocialIcons[3] = "<li><a href='$basicPinterest' target='_blank'>
        <i class='fa fa-pinterest'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicRSS != "") {
        $arraySocialIcons[4] = "<li><a href='$basicRSS' target='_blank'>
        <i class='fa fa-rss'></i>
        </a></li>";
        $socialDisplayed++;
    }

    if($basicSkype != "") {
        $arraySocialIcons[5] = "<li><a href='skype:$basicSkype?chat' target='_blank'>
        <i class='fa fa-skype'></i>
        </a></li>";
        $socialDisplayed++;
    }

    if($basicSnapchat != "") {
        $arraySocialIcons[6] = "<li><a href='https://www.snapchat.com/add/$basicSnapchat' target='_blank'>
        <i class='fa fa-snapchat'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicTwitter != "") {
        $arraySocialIcons[7] = "<li><a href='$basicTwitter' target='_blank'>
        <i class='fa fa-twitter'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicWeChat != "") {
        $arraySocialIcons[8] = "<li><a href='https://msng.link/wc/$basicWeChat' target='_blank'>
        <i class='fa fa-wechat'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicWhatsApp != "") {
        $arraySocialIcons[9] = "<li><a href='https://api.whatsapp.com/send?phone=$basicWhatsApp' target='_blank'>
        <i class='fa fa-whatsapp'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicYouTube != "") {
        $arraySocialIcons[10] = "<li><a href='$basicYouTube' target='_blank'>
        <i class='fa fa-youtube-play'></i>
        </a></li>";
        $socialDisplayed++;
    }
    if($basicEmail != "") {
        $arraySocialIcons[11] = "<li><a href='mailto:$basicEmail' target='_blank'>
        <i class='fa fa-envelope-o'></i>
</a></li>";
        $socialDisplayed++;
    }

    if ($socialDisplayed > 5) {
        $colSize = "";
        $searchBoxTopPosition = "top: 159px;";
    }
    else {
        $colSize = "";
    }
?>

    <?php if (get_theme_mod('basic-social-callout-display') == 'Yes') { ?>
        <?php
        if($basicMailChimp != '') { ?>
            <?php
        }
    ?>
    <ul class="<?php echo $colSize;?> networks">
        <?php   
            foreach ($arraySocialIcons as $value) {
                echo "$value <br>";
            }
        ?>
<?php } ?>
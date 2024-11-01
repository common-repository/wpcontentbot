<?php $license = get_option('wpcb_license_key'); ?>

<header class="wpcb-header">
<?php $url = sanitize_url(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH).'?page='.$_GET['page']); ?>
    <div class="wpcb-logo">
        <a href="https://wpcontentbot.io/" target="_blank"><img src="<?php echo WPCB_DIR_URL.'assets/logo.svg'; ?>" alt="Logo"></a>
    </div>
    <nav class="wpcb-navigation">
        <?php if($license): ?>
            <li <?php if($license && ! isset($_GET['tab'])): ?>class="wpcb-active-tab"<?php endif; ?>><a href="<?php echo esc_url($url); ?>">Generate New Content</a></li>
            <li <?php if($license && isset($_GET['tab']) && $_GET['tab']== 'previous'): ?>class="wpcb-active-tab"<?php endif; ?>><a href="<?php echo esc_url($url); ?>&tab=previous">Previously Generated Content</a></li>
        <?php endif; ?>
            <li <?php if(! $license || isset($_GET['tab']) && $_GET['tab'] == 'account'): ?>class="wpcb-active-tab"<?php endif; ?>><a href="<?php echo esc_url($url); ?>&tab=account">Account</a></li>
    </nav>

</header>
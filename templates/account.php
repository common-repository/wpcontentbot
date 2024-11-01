<?php if(get_option('wpcb_license_key')): ?>

    <?php include WPCB_PATH.'templates/account/account-content.php'; ?>

<?php else: ?>

    <?php include WPCB_PATH.'templates/account/signup.php'; ?>

<?php endif; ?>
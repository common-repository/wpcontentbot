<div class="wpcb-container">
    <div class="wpcb-account">
        <div class="wpcb-license-overview">
            <div class="wpcb-title">License Details</div>
            <div class="wpcb-text">Account Email: <span class="wpcb-account-detail" data-cg="account_email"></span></div>
            <div class="wpcb-text">Email Authorised: <span class="wpcb-account-detail" data-cg="account_authorised"></span></div>
            <div class="wpcb-text">Plan: <span class="wpcb-account-detail" data-cg="plan"></span></div>
            <div class="wpcb-text">WPContentBot requests remaining: <span class="wpcb-account-detail" data-cg="requests_remaining"></span></div>
            <a href="https://wpcontentbot.io/my-account/subscriptions/" target="_blank" class="wpcb-text wpcb-account-detail">More license details</a>
        </div>

        <div class="wpcb-license-overview">
            <div class="wpcb-title">Account Actions</div>
            <div class="wpcb-text"><a href="https://wpcontentbot.io/my-account/lost-password/" target="_blank" class="wpcb-text wpcb-account-detail">Reset password</a></div>
            <div class="wpcb-text"><a href="https://wpcontentbot.io/my-account/subscriptions/" target="_blank" class="wpcb-text wpcb-account-detail">Cancel subscription</a></div>
            <a href="<?php echo esc_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>&remove_wpcb_license_key=true" class="wpcb-button wpcb-signout">Sign out</a>
        </div>
    </div>
</div>
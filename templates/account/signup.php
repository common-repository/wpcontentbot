<div class="wpcb-container">
    <div class="wpcb-signup">
        <div class="wpcb-large-title">Howdy-do!</div>
        <div class="wpcb-text">
            30 seconds of your time please.
            <strong>You'll make it up later.</strong>
        </div>
        <div class="wpcb-sign-up-relative <?php if(isset($_GET['signin'])): ?>wpcb-signin-instead<?php endif; ?>">
            <div class="wpcb-signup-viewport">
                <form class="wpcb-signup-form wpcb-signup-form-area" action="https://wpcontentbot.io/wp-json/wpcb_licensing/signup/" method="POST">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-static.svg'; ?>" class="wpcb-signup-bot">
                    
                    <?php if(! isset($_GET['signin']) && isset($_GET['wpcb_error'])): ?>
                        <div class="wpcb-signin-error">There was an error creating an account. Please ensure the email is not registered already.</div>
                    <?php endif; ?>

                    <div class="wpcb-title">Create An Account</div>
                    <div class="wpcb-input">
                        <label>Email address*</label>
                        <input type="email" name="email">
                    </div>
                    <input type="hidden" name="referrer" value="<?php echo esc_url(wpcb_clean_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])); ?>'">
                    <button type="submit" class="wpcb-button">Sign Up</button>
                    <div class="wpcb-signin-trigger">Or sign in</div>
                </form>

                <form class="wpcb-signup-form wpcb-signin" action="https://wpcontentbot.io/wp-json/wpcb_licensing/signin/ " method="POST">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-static.svg'; ?>" class="wpcb-signup-bot">
                    
                    <?php if(isset($_GET['signin']) && isset($_GET['wpcb_error'])): ?>
                        <div class="wpcb-signin-error">Email and password do not match an account</div>
                    <?php endif; ?>
                    
                    <div class="wpcb-title">Sign In</div>
                    <div class="wpcb-input">
                        <label>Email address*</label>
                        <input name="email" type="email">
                    </div>
                    <div class="wpcb-input">
                        <label>Password*</label>
                        <input name="password" type="password">
                    </div>
                    <input type="hidden" name="referrer" value="<?php echo esc_url(wpcb_clean_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])); ?>'">
                    <button type="submit" class="wpcb-button">Sign In</button>
                    <a href="https://wpcontentbot.io/my-account/lost-password/" target="_blank" class="wpcb-lost-password">Forgot password?</a>
                    <div class="wpcb-signup-trigger">Or Create An Account</div>
                </form>
                <div class="wpcb-privacy-notice">By creating an account with WPContentBot you agree to our <a href="https://wpcontentbot.io/privacy/" target="_blank">privacy policy</a>. </div>
            </div>
        </div>
    </div>
</div>
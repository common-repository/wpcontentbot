
<div class="wpcb-container">
    <div class="wpcb-generator">

        <div class="wpcb-generator-input-placeholder">
            Ask me anything:
        </div>
        <div class="wpcb-search-bar">
            <input type="text" class="wpcb-generator-input">
            <button class="wpcb-search-icon"><img src="<?php echo WPCB_DIR_URL.'assets/search.svg'; ?>"></button>
            <div class="wpcb-loading-search">Good prompt! I am working on it...</div>
        </div>
    </div>

    <div class="wpcb-generator-results-area">
        <div class="wpcb-generator-results">
            <div class="wpcb-result-wrapper">
            <div class="wpcb-result wpcb-introduction">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-static.svg'; ?>" class="wpcb-intro-bot">
                    <div class="wpcb-intro-title wpcb-large-title">A warm welcome<br> from WPContentBot</div>
                    To start generating content, it's easy;
                    <ol>
                        <li><strong>Insert your query above</strong> - This can be a question or statement</li>
                        <li><strong>Wait</strong> - Give the bot a second to generate the content.</li>
                        <li><strong>Optimize</strong> - Extract bits of the content you like and paste them into your posts/pages.</li>
                    </ol>
                    All query responses are saved under the "previously generated content" tab so you can easily access them when needed.
            </div>

            <div class="wpcb-loading-slide-1 wpcb-loading-slide">
                <div>
                    <img src="<?php echo WPCB_DIR_URL.'assets/loading.gif'; ?>" class="wpcb-slide-logo">
                    <div class="wpcb-slide-title">Hold on tight!</div>
                    <div class="wpcb-slide-description">Your content is being generated. It might take a minute or two.</div>
                </div>
            </div>

            <div class="wpcb-loading-slide-2 wpcb-loading-slide">
                <div>
                    <?php echo file_get_contents(WPCB_DIR_URL.'assets/wilo.svg'); ?>
                    <div class="wpcb-slide-title">The best way to manage<br> Internal Linking on WordPress</div>
                </div>
            </div>

            <div class="wpcb-upgrade-notice">
                <div>
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-static-red.svg'; ?>" class="wpcb-upgrade-bot">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-child.svg'; ?>" class="wpcb-bot-child bot-child-1">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-child.svg'; ?>" class="wpcb-bot-child bot-child-2">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-child.svg'; ?>" class="wpcb-bot-child bot-child-3">
                    <img src="<?php echo WPCB_DIR_URL.'assets/bot-child.svg'; ?>" class="wpcb-bot-child bot-child-4">
                    <div class="wpcb-large-title">I've got kids to feed.</div>
                    <div class="wpcb-text">
                        Unfortunately, you have a ran out of article requests<br> and I can't work for free forever.<br><br>
                    </div>
                    <a href="https://wpcontentbot.io/" target="_blank" class="wpcb-button">Find out about our packages</a>
                </div>
            </div>

            </div>
        </div>
    </div>

    <div class="wpcb-plans-advert">
        <div class="wpcb-large-title">Choose a WPContentBot Plan</div>
        <div class="wpcb-plans"></div>
    </div>

</div>
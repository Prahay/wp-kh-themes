<?php
if (!function_exists('newsphere_banner_featured_section')):
    /**
     * Ticker Slider
     *
     * @since Newsphere 1.0.0
     *
     */
    function newsphere_banner_featured_section()
    {

        $hide_on_blog = newsphere_get_option('disable_main_banner_on_blog_archive');
        if ($hide_on_blog) {
            if (is_front_page()) {
                $newsphere_enable_featured_news = newsphere_get_option('show_featured_news_section');
                if ($newsphere_enable_featured_news): ?>

                    <section class="aft-blocks">
                        <div class="container-wrapper">
                            <?php do_action('newsphere_action_banner_featured_posts'); ?>

                        </div>
                    </section>
                <?php endif;
            }

        } else {
            if (is_front_page() || is_home()) {
                $newsphere_enable_featured_news = newsphere_get_option('show_featured_news_section');
                if ($newsphere_enable_featured_news): ?>

                    <section class="aft-blocks">
                        <div class="container-wrapper">
                            <?php do_action('newsphere_action_banner_featured_posts'); ?>

                        </div>
                        <br><br>
                        <!-- banner event-->
                        <div class="container-wrapper">
                            <center>
                            <h4 class="header-after1 ">
                            	<span class="">
                            		EVENT
                            	</span>
                            </h4>
                            <a href="https://klikhukum.id/events/uii-law-fair-piala-moh-natsir-2020/">
                                <img src="https://klikhukum.id/wp-content/uploads/2020/01/banner-uii-event-law-fair-scaled.jpg" alt="" srcset="">
                            </a>
                            <hr>
                            <a href="https://klikhukum.id/kejujuran-dalam-air-kata-kata/">
                                <img src="https://klikhukum.id/wp-content/uploads/2020/01/desain-klik-hukum.jpg" alt="" srcset="">
                            </a>
                        </center>
                        </div>    
                    </section>
                <?php endif;
            }

        }

    }
endif;

add_action('newsphere_action_banner_featured_section', 'newsphere_banner_featured_section', 10);
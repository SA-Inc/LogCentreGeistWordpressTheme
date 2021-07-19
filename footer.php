   <!-- The footer at the very bottom of the screen -->
        <footer class="site-footer outer">
            <div class="site-footer-content inner">
                <section class="copyright"><a href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a> &copy; <?php echo esc_html( date("Y") ); ?></section>
                <nav class="site-footer-nav">
                    <a href="<?php echo esc_url( home_url() ); ?>"><?php printf( esc_html__( 'Latest Posts', 'geist' ) ); ?></a>
                    <?php if ( get_theme_mod( 'geist_social_facebook') ){ ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'geist_social_facebook') ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Facebook', 'geist' ); ?></a>
                    <?php } ?>
                    <?php if ( get_theme_mod( 'geist_social_twitter') ){ ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'geist_social_twitter') ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Twitter', 'geist' ); ?></a>
                    <?php } ?>
                    <?php if ( get_theme_mod( 'geist_social_instagram') ){ ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'geist_social_instagram') ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Instagram', 'geist' ); ?></a>
                    <?php } ?>
                    <?php if ( get_theme_mod( 'geist_social_youtube') ){ ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'geist_social_youtube') ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'YouTube', 'geist' ); ?></a>
                    <?php } ?>
                    <?php if ( get_theme_mod( 'geist_social_github') ){ ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'geist_social_github') ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'GitHub', 'geist' ); ?></a>
                    <?php } ?>
                    <?php if ( get_theme_mod( 'geist_social_linkedin') ){ ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'geist_social_linkedin') ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'LinkedIn', 'geist' ); ?></a>
                    <?php } ?>
                </nav>
            </div>



            <div class="site-footer-contacts">
                <div class="inner">
                    <section class="footer-contacts">
                        <p>Kazakh-German University</p>
                        <p>Dr. Zhandos Kegenbekov</p>
                        <p>Ул. Пушкина 111/113</p>
                        <p>050010 Алматы, Казахстан</p>
                        <p><a href="tel:+7-727-3550551">+7 727 3550551 (вн. 230)</a></p>
                        <p><a href="mailto:kegenbekov@dku.kz">kegenbekov@dku.kz</a></p>
                        <p><a href="https://www.dku.kz">www.dku.kz</a></p>
                    </section>

                    <section class="footer-contacts">
                        <p>Institute of Logistics and Material Handling Systems</p>
                        <p>of the Otto-von-Guericke-University Magdeburg (ILM OVGU)</p>
                        <p>Dr. Tobias Reggelin</p>
                        <p>Universitätsplatz 2</p>
                        <p>39106 Magdeburg, Germany</p>
                        <p><a href="tel:+49-391-4090259">+49 391 4090259</a></p>
                        <p><a href="mailto:tobias.reggelin@ovgu.de">tobias.reggelin@ovgu.de</a></p>
                        <p><a href="https://www.ilm.ovgu.de">www.ilm.ovgu.de</a></p>
                    </section>

                    <section class="footer-contacts">
                        <p>DKU`s representative for logistics</p>
                        <p>Professor Burghard Scheel</p>
                        <p><a href="mailto:burghard.scheel@t-online.de">burghard.scheel@t-online.de</a></p>
                    </section>
                </div>
            </div>
            
        </footer>

    </div>

    <div id="search" class="search-overlay">
        <button class="search-overlay-close" aria-label="close search overlay"></button>
        <div class="search-overlay-content">
            <?php get_search_form(); ?>
        </div>
    </div>

    <?php wp_footer(); ?>

</body>
</html>
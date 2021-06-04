<section id="td-products">

    <div class="product-tabs-container">

        <h2><?php _e('Products', 'top-dog'); ?></h2>

        <div class="product-tabs-wrapper">

            <div class="product-tabs-cta-wrapper">

                <div id="professional-use-line" class="product-tabs-cta product-tab-active">

                    <a href="#!">

                        <?php _e('Professional Use Line', 'top-dog'); ?>

                        <?php echo file_get_contents(get_template_directory() . './assets/images/slider-arrow-next.svg'); ?>

                    </a>

                </div>

                <div id="home-use-line" class="product-tabs-cta product-tab-inactive">

                    <a href="#!">

                        <?php _e('Home Use Line', 'top-dog'); ?>

                        <?php echo file_get_contents(get_template_directory() . './assets/images/slider-arrow-next.svg'); ?>

                    </a>

                </div>

            </div>

        </div>

        <div id="product-tabs-content-home" class="product-tabs-content" style="display: none;">

            <?php get_template_part('template-parts/products', 'tab-content-home-line'); ?>

        </div>

        <div id="product-tabs-content-professional" class="product-tabs-content">

            <?php get_template_part('template-parts/products', 'tab-content-professional-line'); ?>

        </div>




    </div>


</section>
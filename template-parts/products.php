<section id="td-products">

    <div class="product-tabs-container">

        <h2><?php _e('Products', 'top-dog'); ?></h2>

        <div class="product-tabs-wrapper">

            <div class="product-tabs-cta-wrapper">

                <div id="personal-use-line" class="product-tabs-cta product-tab-active">

                    <a href="#!">

                        <?php _e('Personal Use Line', 'top-dog'); ?>

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

        <div class="product-tabs-content">

            <?php get_template_part('template-parts/products', 'tab-content'); ?>

        </div>

    </div>


</section>
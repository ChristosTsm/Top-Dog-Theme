<section id="td-our-products">

    <div class="grid grid-col-1-3 items-center">

        <div class="text-wrapper">

            <h2><?php _e('Our Products', 'top-dog') ?></h2>

            <?php the_field('our_products_text'); ?>

        </div>

        <div class="our-products-images-container">

            <?php $images = get_field('our_products_images'); ?>

            <?php foreach ($images as $image) : ?>

                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">

            <?php endforeach; ?>

        </div>


    </div>

</section>
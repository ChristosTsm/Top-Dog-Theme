<section id="td-contact">

    <div class="contact-wrapper">

        <div class="contact-header-text">

            <h2><?php _e('Contact Us') ?></h2>

            <h3><?php _e('Request a quote') ?></h3>

            <?php the_field('contact_text_1'); ?>

        </div>

        <div class="contact-icons">

            <div class="contact-single">

                <span class="contact-icon"><?php echo file_get_contents(get_template_directory() . '/assets/images/phone.svg'); ?></span>

                <a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option') ?></a>

            </div>
            <div class="contact-single">

                <span class="contact-icon"><?php echo file_get_contents(get_template_directory() . '/assets/images/mail.svg'); ?></span>

                <a href="mailto:<?php echo esc_url(get_field('email', 'option')); ?>"><?php the_field('email', 'option') ?></a>

            </div>
            <div class="contact-single">

                <span class="contact-icon"><?php echo file_get_contents(get_template_directory() . '/assets/images/location.svg'); ?></span>

                <a target="_blank" rel="noopener" href="<?php echo esc_url(get_field('address_map_url', 'options')); ?>"><?php the_field('address', 'option') ?></a>

            </div>

        </div>

        <?php the_field('contact_text_2'); ?>

        <?php if (have_rows('social_media', 'option')) : ?>

            <div class="contact-social-icons">

                <?php while (have_rows('social_media', 'option')) : the_row(); ?>

                    <?php $icon_file = get_sub_field('icon'); ?>

                    <div class="contact-social-icon-single">

                        <a target="_blank" rel="noopener" href="<?php the_sub_field('url') ?>">

                            <?php echo file_get_contents($icon_file['url']); ?>

                        </a>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>

</section>
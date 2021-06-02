<section id="td-milestones">

    <h2><?php _e('Milestones', 'top-dog') ?></h2>

    <?php if (have_rows('milestones')) : ?>

        <div class="milestones-wrapper">

            <?php while (have_rows('milestones')) : the_row(); ?>

                <?php $layout = get_sub_field('layout'); ?>

                <?php
                if ($layout) {
                    $milestone_class = 'milestone-left';
                } else {
                    $milestone_class = 'milestone-right';
                }
                ?>

                <div class="milestones-single <?php echo $milestone_class; ?>">

                    <h3 class="milestones-single-header"><?php the_sub_field('year'); ?></h3>

                    <div class="milestones-single-content">

                        <?php the_sub_field('text'); ?>

                    </div>

                </div>

            <?php endwhile; ?>

            <div class="border"></div>

        </div>

    <?php endif; ?>

</section>
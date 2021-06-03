<?php if (have_rows('reasons')) : ?>

    <section id="td-reasons">

        <div class="grid grid-col-2 items-center reasons-text-wrapper">

            <div class="rs-col-l">

                <div class="reasons-text">

                    <h2>10 resons why you should partner with top dog</h2>
                    <h3>We work locally, we think globally</h3>

                </div>

            </div>



            <div class="reasons-list-wrapper">

                <ul class="reasons-list">

                    <?php while (have_rows('reasons')) : the_row(); ?>

                        <li class="reasons-list-item"><?php the_sub_field('title'); ?></li>

                    <?php endwhile; ?>

                </ul>

            </div>

        </div>

    </section>

<?php endif; ?>
<div class="section">
    <?php if (have_rows('hero_slider')): ?>
        <div class="carousel">
            <?php while (have_rows('hero_slider')): the_row(); ?>
                <div style="max-height: 700px">
                    <img src="<?php the_sub_field('hero_slider_image') ?>" style="width: 100%; object-fit: contain" alt="slide">
                    <div class="carousel__textbox">
                        <?php the_sub_field('hero_slider_headline') ?>
                        <?php the_sub_field('hero_slider_description') ?>
                    </div>
                    <div class="carousel__button">
                        <a class="scroll" href="#scroll"><img src="<?php the_sub_field('hero_slider_button') ?>" alt=""></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
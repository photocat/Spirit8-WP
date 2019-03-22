<div id="scroll" class="section_light">
    <div class="content">
        <div class="about__image">
            <img src="<?php the_field('about_section_image') ?>" alt="banner">
        </div>
        <div class="about__text">
            <p class="primary"><?php the_field('about_section_header') ?></p>
            <p class="secondary"><?php the_field('about_section_sub-header') ?></p>
            <?php if (have_rows('about_section_list')): ?>
                <ul class="list">
                    <?php while (have_rows('about_section_list')): the_row(); ?>
                        <li class="list__item">
                            <span class="item__main"><?php the_sub_field('about_section_list-item-name') ?></span><?php the_sub_field('about_section_list-item-description') ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <a class="button scroll" href="#preview">
                <p><?php the_field('about_section_button_text') ?></p>
            </a>
        </div>
    </div>
</div>
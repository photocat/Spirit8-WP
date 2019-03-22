<div class="section_light" id="preview">
    <div class="content">
        <div class="headline">
            <?php the_field('our_work_headline') ?>
            <div class="line_1"></div>
            <div class="line_2"></div>
        </div>
    </div>
    <div class="content">
        <div class="preview__text">
            <?php the_field('our_work_description') ?>
        </div>
    </div>
    <div class="content filter">
        <div class="filter__headline">Filter by type</div>
        <ul class="filter__type menu">
            <li class="type__name type__name_active"><a href='#'>All</a></li>
            <li class="type__name"><a href='#'>Web design</a></li>
            <li class="type__name"><a href='#'>Mobile design</a></li>
            <li class="type__name"><a href='#'>Photograpy</a></li>
        </ul>
    </div>
    <div class="content preview">
        <?php if (have_rows('our_work_preview')): ?>
            <?php while (have_rows('our_work_preview')): the_row(); ?>
                <div class="preview__box__cont">
                    <div class="preview__box">
                        <img src="<?php the_sub_field('our_work_preview_image') ?>" alt="preview-image">
                    </div>
                    <div class="preview__box_add">
                        <p class="preview__box__name">Trend and fashion</p>
                        <p class="preview__box__type">Website design</p>
                        <a href="#" class="preview__box__button">+</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
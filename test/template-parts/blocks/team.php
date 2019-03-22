<div class="section">
    <div class="content">
        <div class="headline">
            <?php the_field('our_team_headline')  ?>
            <div class="line_1"></div>
            <div class="line_2"></div>
        </div>
    </div>
    <div class="content">
        <?php if (have_rows('our_team_member')): ?>
            <?php while (have_rows('our_team_member')): the_row(); ?>
                <div class="box">
                    <div class="box__avatar"><img src="<?php the_sub_field('member_photo') ?> ?>" alt=""></div>
                    <p class="box__name"><?php the_sub_field('member_full_name') ?></p>
                    <p class="box__position"><?php the_sub_field('member_position') ?></p>
                    <p class="box__about"><?php the_sub_field('member_info') ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="content">
            <div class="dot__box">
                <div class="dot dot_active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
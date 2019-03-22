<div class="section">   
  <div class="content">
      <div class="headline">
            <?php the_field('account_headline')  ?>
            <div class="line_1"></div>
            <div class="line_2"></div>
        </div>
  </div>
<div class="content">
  <div class="account_types">

    <?php if (have_rows('account_tabs')): ?>
        <div class='progress'>
            <span class="progress_bar"></span>
            <span class="progress_bar_fill"></span>
        </div>
        <ul class="account_types_progress">
            <?php
            $count = 1;
            while (have_rows('account_tabs')): the_row();
                if ( $count != 1 ){
                ?>
                    <li class="progress_point" data='#<?php the_sub_field('tab_price') ?>'>
                        <span class="progress_number"><?php the_sub_field('tab_price') ?>€</span>
                    </li>
                <?php  } else { ?>
                    <li class="progress_point" data='#<?php the_sub_field('tab_price') ?>'>
                        <span class="progress_number"><?php the_sub_field('tab_price') ?>€</span>
                    </li>
                <?php  } 
                $count++;
                ?>  
            <?php endwhile; ?> 
        </ul>
      <?php endif; ?>  
      
    <?php if (have_rows('account_tabs')): ?>
        <div class="account_types_tabs">
            <?php
            $count = 1;
            while (have_rows('account_tabs')): the_row(); 
                if ( $count != 1 ){
                ?>    
                    <div class="account_types_tab" id='<?php the_sub_field('tab_price') ?>'>
                        <div class="account_types_tab_logo"></div>
                        <div class="account_types_tab_border"></div>
                        <div class="account_types_tab_text">
                            <h2><?php the_sub_field('tab_name') ?></h2>
                            <?php if (have_rows('tab_feateres')): ?>
                                <ul>
                                    <?php while (have_rows('tab_feateres')): the_row(); ?>
                                        <li><?php the_sub_field('features_item') ?></li>
                                    <?php endwhile; ?>    
                                </ul>    
                            <?php endif; ?>
                            <span></span>
                            <p><span><?php the_sub_field('tab_currency') ?></span><?php the_sub_field('tab_price') ?>+</p>
                        </div>
                    </div>
                <?php  } else { ?>
                    <div class="account_types_tab active" id='<?php the_sub_field('tab_price') ?>'>
                        <div class="account_types_tab_logo"></div>
                        <div class="account_types_tab_border"></div>
                        <div class="account_types_tab_text">
                            <h2><?php the_sub_field('tab_name') ?></h2>
                            <?php if (have_rows('tab_feateres')): ?>
                                <ul>
                                    <?php while (have_rows('tab_feateres')): the_row(); ?>
                                        <li><?php the_sub_field('features_item') ?></li>
                                    <?php endwhile; ?>    
                                </ul>    
                            <?php endif; ?>
                            <span></span>
                            <p><span><?php the_sub_field('tab_currency') ?></span><?php the_sub_field('tab_price') ?>+</p>
                        </div>
                    </div>
                <?php  } 
                $count++;
                ?>      
            <?php endwhile; ?> 
        </div>    
    <?php endif; ?>
    </div>
  </div>
</div>

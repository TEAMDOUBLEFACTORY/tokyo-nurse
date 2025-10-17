             <aside class="l-article-sidebox">

                 <div class="l-categories">
                     <span>カテゴリから探す</span>
                     <ul class="l-categories__list">
                         <li class="l-categories__item"><a href="<?php echo home_url("news"); ?>">全て</a>
                         </li>
                         <?php
        $args = array(
            'hide_empty' => true, // 投稿がないカテゴリを非表示
            'orderby'    => 'name',
            'order'      => 'ASC'
        );
        $categories = get_categories($args);

        foreach ($categories as $category) :
        ?>
                         <li class="l-categories__item">
                             <a href="<?php echo get_category_link($category->term_id); ?>">
                                 <?php echo esc_html($category->name); ?>
                             </a>
                         </li>
                         <?php endforeach; ?>
                     </ul>
                 </div>


                 <div class="l-years">
                     <span>学校からのお知らせ</span>
                     <ul class="l-years__list">
                         <?php
        $years = $wpdb->get_col("
            SELECT DISTINCT YEAR(post_date)
            FROM $wpdb->posts
            WHERE post_status = 'publish'
            AND post_type = 'post'
            ORDER BY post_date DESC
        ");

        foreach ($years as $year) {
            echo '<li class="l-years__item"><a href="' . get_year_link($year) . '">' . $year . '年度</a></li>';
        }
        ?>
                     </ul>
                 </div>

             </aside>
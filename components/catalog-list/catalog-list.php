<?php 
    global $query;
    
    $args = array(
        'cat'    => 32,
        'posts_per_page' => 9,
        'paged' => get_query_var('paged') ?: 1

    );

    $query  = new WP_Query ( $args );   

    
    if(count( count($query->have_posts()) )) :
        while ( $query->have_posts() ) :
            $query->the_post();
?>
            <div class="col-12 col-lg-6 col-xl-4">
                <?php 
                    global $card_template;
                    get_template_part('./components/card/card'); 
                    echo $card_template;
                ?>
            </div>

<?php
        endwhile;
        wp_reset_postdata();
    else :
?>
    <h2>Страница находится на стадии наполнения</h2>
<?php endif;?>
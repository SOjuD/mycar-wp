<?php


$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
 
// dumper( get_the_category() );
$cats = [];
foreach( get_the_category() as $cat) {
    $cats[] = $cat->term_id; 
}
?>

<section class="similarOffer single-offer">
    <div class="container">
        <div class="secTitle">Похожие автомобили</div>
        <?php 
        set_query_var( 'params', [
            'cat_id' => $cats,
            'posts_count' => 9,
        ] );
        get_template_part( './components/car-carousel/car-carousel' );
        wp_reset_query();
        ?>

        <a href="<?php echo get_page_link( 35 ); ?>" class="mainButton_large">Все авто в наличии</a>

    </div>
</section>
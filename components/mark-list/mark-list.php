<?php 

$categories = get_categories([
    'type'         => 'post',
    'parent'       => 4,
    'orderby'      => 'name',
]);


$mark_list = "";
$mark_slide = "";
 
foreach($categories as $category){

    $category_name = $category->name;
    $category_id = $category->term_id;
    $category_count = $category->count;
    $category_thumbnail_url = z_taxonomy_image_url($category_id);

    if($category_thumbnail_url){
        $mark_slide .= "
                        <div class='swiper-slide'>
                            <a class='link d-flex' href='". get_page_link( 35 ) ."/?mark=$category_id'>
                                <img class='link-img' src='$category_thumbnail_url' alt='$category_name'>
                                <div>
                                    <div class='link-name c1_semi'>$category_name</div>
                                    <div class='link-count c1'>$category_count</div>
                                </div>
                            </a>
                        </div>";
    }

    $mark_list .= "
                    <div class='col-6 col-md-3 col-lg-4 col-xl-2 c1'>
                        <a class='link' href='". get_page_link( 35 ) ."/?mark=$category_id'>
                            <span class='c1_semi link-name'>$category_name</span>
                            <span class='c1 link-count'>$category_count</span>
                        </a>
                    </div>";

}
?>



<section class="links">
    <div class="container">
        <div class="row">
            <?php if($mark_slide != "") : ?>
                <div class="col-12">
                    <div class="swiper-wrap">
                        <div class="swiper-container swiper-links">
                            <div class="swiper-wrapper">
                                <?php echo $mark_slide; ?>
                            </div>
                            
                        </div>
                        <div class="swiper-button-prev"><?php get_template_part( './icons/left' ) ?></div>
                        <div class="swiper-button-next"><?php get_template_part( './icons/left' ) ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php echo $mark_list; ?>
        </div>
    </div>
</section>

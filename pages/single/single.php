<?php get_header(); ?>
<main>
    <section class="single">
        <div class="container">
            <div class="row">
                
                <?php get_template_part( './components/single-title/single-title' ); ?>
                
                <?php get_template_part( './components/single-gallery/single-gallery' ); ?>

                <?php get_template_part( './components/single-params/single-params' ); ?>

            </div>

            <?php get_template_part( './components/single-kit-and-description/single-kit-and-description' ); ?>

        </div>
    </section>
    
    <?php get_template_part( './components/single-map/single-map' ); ?>
    <?php get_template_part( './components/similar-offer/similar-offer' ); ?>
    <?php get_template_part( './components/buy-from-us/buy-from-us' ); ?>
    <?php get_template_part( './components/our-customers/our-customers' ); ?>
    <?php get_template_part( './components/our-instagram/our-instagram' ); ?>
</main>
<?php get_footer(); ?>
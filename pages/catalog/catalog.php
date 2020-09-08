<?php get_header(); ?>
<main>
    <div id="catalogAnchor"></div>
    <section class="catalog">
        <form id="filter" class="container">
            <div class="secTitle">Каталог автомобилей с пробегом</div>
            <div class="row">
                <div class="col-12 col-xl-3">
                    <?php get_template_part( './components/filters/filter/filter' ) ?>
                </div>
                <div class="col-12 col-xl-9 catalog-wrap d-flex flex-column">
                    <div class="row justify-content-between catalog-sort">
                        <?php get_template_part( './components/catalog-sort/catalog-sort' ) ?>
                    </div>
                    <div id="catalog" class="row">
                        <div class="t1">Loading...</div>
                    </div>
                    <?php get_template_part( './components/preloader/preloader' ); ?>
                    <?php get_template_part( './components/catalog-pagination/catalog-pagination' ) ?>
                </div>
            </div>
        </form>
    </section>
    <?php get_template_part( './components/buy-from-us/buy-from-us' ); ?>
    <?php get_template_part( './components/our-customers/our-customers' ); ?>
    <?php get_template_part( './components/our-instagram/our-instagram' ); ?>

</main>
<?php get_footer(); ?>
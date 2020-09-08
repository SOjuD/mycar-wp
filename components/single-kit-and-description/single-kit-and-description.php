<div class="row single-space">
    <div class="col-12 col-md-6 col-lg-7">
        <div class="secTitle t1">Комплектация</div>
        <div class="single-kit">
            <?php the_field('kit'); ?>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-5">
        <div class="secTitle t1">Описание</div>
        <div class="p1 single-description">
            <?php echo $post->post_content; ?>
        </div>
    </div>
</div>
<?php 
    get_header();
    global $theme_path;
?>
<main>
    <section class="pageBanner">
        <div class="container">
            <h1 class="h1">Обмен автомобиля</h1>
            <h2 class="t1">Огромный ассортимент автомобилей в наличии</h2>
            <h2 class="t1">Разницу стоимости можно оформить в кредит или лизинг</h2>
            <h2 class="t1">Оцениваем автомобиль по рыночной цене</h2>
            <button class="mainButton modal-trigger" data-target="modalForm" data-description="Обменять автомобиль">Обменять автомобиль</button>
        </div>
    </section>
    <section class="simpleStep">
        <div class="container">
            <div class="secTitle">Чтобы обменять автомобиль вам достаточно сделать <br>ТРИ ПРОСТЫХ ШАГА:</div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="arrowBlock d-flex">
                        <div class="arrowBlock-content">
                            <div class="arrowBlock-num">1</div>
                            <div class="arrowBlock-text c1_semi">Выбрать автомобиль</div>
                        </div>
                        <div class="arrowBlock-img">
                            <img src="<?php echo $theme_path."assets/img/change/1.jpg" ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="arrowBlock d-flex">
                        <div class="arrowBlock-content">
                            <div class="arrowBlock-num">2</div>
                            <div class="arrowBlock-text c1_semi">Оценить стоимость вашего автомобиля</div>
                        </div>
                        <div class="arrowBlock-img">
                            <img src="<?php echo $theme_path."assets/img/change/2.jpg" ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="arrowBlock d-flex">
                        <div class="arrowBlock-content">
                            <div class="arrowBlock-num">3</div>
                            <div class="arrowBlock-text c1_semi">Оформление документов</div>
                        </div>
                        <div class="arrowBlock-img">
                            <img src="<?php echo $theme_path."assets/img/change/3.jpg" ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
<?php
    global $credit_percent, $rate, $theme_path;

    $categories = get_categories([
        'type'         => 'post',
        'parent'       => 4,
        'orderby'      => 'name',
    ]);
?>

<section class="kreditCalc">
    <form class="container" id="kreditForm" data-percent="<?php echo $credit_percent ?>" data-rate="<?php echo $rate ?>">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 kreditCalc-col">
                <select name="mark">
                    <option selected disabled value="">Марка автомобиля</option>
                    <?php
                    if ($categories) {
                        foreach ($categories as $cat) echo "<option value='$cat->cat_ID'>$cat->name</option>";
                    }
                    ?>
                </select>
                <select name="model">
                    <option selected disabled value="">Модель автомобиля</option>
                </select>
                <select name="car">
                    <option selected disabled value="">Автомобиль</option>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-4 kreditCalc-col">
                <div class="t2">
                    Цена авто:
                    <span class="priceUsd autoPrice t2">0$</span>
                    <span class="priceByn autoPrice t2">0р.</span>
                </div>
                <div class="creditTime rangeWrapper">
                    <div class="d-flex justify-content-between flex-wrap">
                        <span class="p1_semi">Срок кредитования (месяцев)</span>
                        <span class="p1_semi creditTime-val rangeVal">1</span>
                        <input type="range" id="creditTime-range" class="browser-default" min="1" max="60" value=1>
                    </div>
                </div>
                <div class="aanbetaling rangeWrapper">
                    <div class="d-flex justify-content-between flex-wrap">
                        <span class="p1_semi">Первоначальный взнос (руб)</span>
                        <span class="p1_semi aanbetaling-val rangeVal">0</span>
                        <input type="range" id="aanbetaling-range" class="browser-default" min=0  value=0>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 kreditCalc-col">
                <div class="kreditCalc-img">
                    <img id="kreditCalc-img" src="<?php echo $theme_path."assets/img/car.jpg"; ?>" alt="car">
                </div>
            </div>
            <div class="col-12">
                <div class="kreditCalc-price t2">Ежемесячный платеж: <span id="creditCalc-price" class="t1">0 р.</span></div>
                <div class="t2 kreditCalc-subtitle">Заполните форму, мы перезвоним и расскажем обо всех условиях кредитования</div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <input type="text" name="name" placeholder="Имя">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <input type="tel" name="phone" placeholder="Телефон" required>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <button class="mainButton_large">Получить консультацию</button>
            </div>
        </div>
    </form>
</section>
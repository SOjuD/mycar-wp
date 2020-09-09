<?php
    $categories = get_categories([
        'type'         => 'post',
        'parent'       => 4,
        'orderby'      => 'name',
    ]);
?>
<section class="changeForm">
    <div class="container">
        <div class="secTitle">Предлагайте свой автомобиль в зачет или обменивайте</div>
        <form class="row justify-content-center" id="leasingCars">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="changeForm-subtitle p1_semi">Вариант обмена</div>
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
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="changeForm-subtitle p1_semi">Ваш атомобиль</div>
                <input type="text" name="yourself_mark" placeholder="Марка автомобиля">
                <input type="text" name="yourself_model" placeholder="Модель автомобиля">
                <input type="number" name="yourself_year" placeholder="Год выпуска">
            </div>
        </form>
        <form class="row justify-content-center" id="leasingForm">
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="changeForm-subtitle p1_semi">Ваши данные для связи</div>
                <input type="hidden" name="mycar_auto">
                <input type="hidden" name="customer_auto">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="tel" name="phone" placeholder="Телефон" required>
                <button class="mainButton">Отправить заявку</button>
            </div>
        </form>
    </div>
</section>
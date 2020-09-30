<?php
$now = date('Y');
$old_year = 1990;

$select_options = '';

for ($year = $now; $year >= $old_year; $year--) {
    $select_options .= "<option value='$year' >$year</option>";
}


$categories = get_categories([
    'type'         => 'post',
    'parent'       => 4,
    'orderby'      => 'name',
]);

?>


<section class="toFilter">
    <form class="container d-flex flex-wrap justify-content-sm-start justify-content-between" id="toFilter" data-location="<?php echo get_page_link( 35 ); ?>" >
        <div class="secTitle">Подобрать автомобиль</div>
        <label class="select">
            <select name="mark" class="c1_semi">
                <option selected disabled>Марки</option>
                <?php
                if ($categories) {
                    foreach ($categories as $cat) echo "<option value='$cat->cat_ID'>$cat->name</option>";
                }
                ?>
            </select>
        </label>
        <label class="select">
            <select name="model" class="c1_semi">
                <option selected disabled>Модели</option>
            </select>
        </label>
        <label class="select">
            <select name="year_from" class="c1_semi">
                <option selected disabled>Год от</option>
                <?php echo $select_options ?>
            </select>
        </label>
        <label class="select">
            <select name="year_to" class="c1_semi">
                <option selected disabled>Год до</option>
                <?php echo $select_options ?>
            </select>
        </label>
        <label class="select">
            <select name="price_from" class="c1_semi">
                <option selected disabled>Цена от</option>
                <option value="0">0</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
                <option value="3000">3000</option>
                <option value="4000">4000</option>
                <option value="5000">5000</option>
                <option value="6000">6000</option>
                <option value="7000">7000</option>
                <option value="8000">8000</option>
                <option value="9000">9000</option>
                <option value="10000">10 000</option>
                <option value="12000">12 000</option>
                <option value="15000">15 000</option>
                <option value="17000">17 000</option>
                <option value="20000">20 000</option>
                <option value="25000">25 000</option>
                <option value="30000">30 000</option>
                <option value="40000">40 000</option>
                <option value="50000">50 000</option>
                <option value="100000">100 000</option>
            </select>
        </label>
        <label class="select">
            <select name="price_to" class="c1_semi">
                <option selected disabled>Цена до</option>
                <option value="0">0</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
                <option value="3000">3000</option>
                <option value="4000">4000</option>
                <option value="5000">5000</option>
                <option value="6000">6000</option>
                <option value="7000">7000</option>
                <option value="8000">8000</option>
                <option value="9000">9000</option>
                <option value="10000">10 000</option>
                <option value="12000">12 000</option>
                <option value="15000">15 000</option>
                <option value="17000">17 000</option>
                <option value="20000">20 000</option>
                <option value="25000">25 000</option>
                <option value="30000">30 000</option>
                <option value="40000">40 000</option>
                <option value="50000">50 000</option>
                <option value="100000">100 000</option>
            </select>
        </label>
        <button class="mainButton">Подобрать</button>
    </form>
</section>
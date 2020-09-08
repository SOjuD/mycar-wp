<?php  

global $wpdb;
$fields = Array("body_type", "gearbox", "drive", "fuel", "color");
$fields_obj = Array();


foreach($fields as $name) {
    $sql = $wpdb->prepare( "select post_id from " . $wpdb->prefix . "postmeta where meta_key = %s limit 0,1 ", $name);
    $post = $wpdb->get_results( $sql );
    
    $fields_obj[$name] = get_field_object( $name, $post[0]->post_id );
}

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
<div class="mainButton d-flex d-xl-none sidenav-trigger" data-target="slide-out-filter">
    <?php get_template_part( './icons/params' ) ?>
     Подбор автомобиля
</div>

<div class="filter" id="slide-out-filter">
    <div class="t2 filter-title">Параметры автомобиля</div>
    <select name="mark">
        <option selected disabled>Марки</option>
        <?php
        if ($categories) {
            foreach ($categories as $cat) echo "<option value='$cat->cat_ID'>$cat->name</option>";
        }
        ?>
    </select>
    <select name="model">
        <option selected disabled>Модели</option>
    </select>
    <div class="filter-subwrap d-flex justify-content-between flex-wrap">
        <div class="filter-subtitle c1_semi">Год выпуска</div>
        <select name="year_from">
            <option selected disabled>от</option>
            <?php echo $select_options ?>
        </select>
        <select name="year_to">
            <option selected disabled>до</option>
            <?php echo $select_options ?>
        </select>
    </div>
    <div class="filter-subwrap d-flex justify-content-between flex-wrap">
        <div class="filter-subtitle c1_semi">Цена,$</div>
        <select name="price_from">
            <option selected disabled>от</option>
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
        <select name="price_to">
            <option selected disabled>до</option>
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
    </div>
    <div class="filter-subwrap d-flex justify-content-between flex-wrap">
        <div class="filter-subtitle c1_semi">Пробег, км</div>
        <input type="number" placeholder="от" name="mileage_from">
        <input type="number" placeholder="до" name="mileage_to">
    </div>

    <?php foreach( $fields_obj as $field ) : ?>
        <select name="<?php echo $field['name'] ?>">
            <option selected disabled><?php echo $field['label'] ?></option>
            <?php
                foreach($field['choices'] as $val) {
                    echo "<option value='$val' >$val</option>";
                }
            ?>
        </select>
    <?php endforeach; ?>

    <button class="mainButton">Подобрать</button>
    <div class="d-flex justify-content-center">
        <button type="reset">Очистить фильтр</button>
    </div>

</div>
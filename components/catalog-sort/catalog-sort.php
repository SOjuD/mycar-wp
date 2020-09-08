<div class="col-12 col-md-6">
    <div class="sort c1_semi">
        Сортировать:
        <select name="sort">
            <option value="" selected>По умолчанию</option>
            <option value="price_down">По цене ↓</option>
            <option value="price_up">По цене ↑</option>
            <option value="year_down">По году ↓</option>
            <option value="year_up">По году ↑</option>
        </select>
    </div>
</div>
<div class="col-12 col-md-6 d-none d-md-flex c1_semi justify-content-end selectView">
    Вид:
        <label>
            <input type="radio" class="d-none" name="view" value="card" checked>
            <?php get_template_part( './icons/card-icon' ) ?>
        </label>
        <label>
            <input type="radio" class="d-none" name="view" value="row">
            <?php get_template_part( './icons/row-icon' ) ?>
        </label>
</div>
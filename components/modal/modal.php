<?php global $customizer_params; ?>
<div id="modalForm" class="modal">
    <form class="modal-content feedback">
      <h4 class="modal-title t1">Оствить заявку</h4>
      <input type="hidden" name="info">
      <input type="text" class="browser-default" name="name" placeholder="Имя">
      <input type="tel" class="browser-default" name="phone" placeholder="Номер телефона" require>
      <div class="modal-auto d-none">
        <input type="text" class="browser-default" name="auto_mark" placeholder="Марка автомобиля">
        <input type="text" class="browser-default" name="auto_model" placeholder="Модель автомобиля">
      </div>
      <button class="mainButton">Отправить</button>
      <div class="modal-close">
        <?php get_template_part('./icons/close') ?>
      </div>
    </form>

    <div class="modal-message_success">
      <div class="modal-title t1">Спасибо за заявку!</div>
      <div class="modal-description p1">Мы очень скоро перезвоним вам</div>
    </div>

    <div class="modal-message_error">
      <div class="modal-title t1">Что-то пошло не так!</div>
      <div class="modal-description p1">Вы можете связаться с нами <br>по любому из указанных номеров:</div>
      <div class="modal-phones">
        <a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone t2"><?php echo $customizer_params['phone-a1'] ?></a>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone t2"><?php echo $customizer_params['phone-mts'] ?></a>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone t2"><?php echo $customizer_params['phone-life'] ?></a>
      </div>
    </div>

  </div>
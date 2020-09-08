<?php global $customizer_params; ?>
<div id="modalForm" class="modal">
    <form class="modal-content feedback">
      <h4 class="modal-title t1_up">Оствить заявку</h4>
      <p class="modal-description p1">Оставьте ваш номер телефона, мы перезвоним <br>и проконсультируем вас</p>
      <input type="hidden" name="info">
      <input type="text" class="browser-default" name="name" placeholder="Имя">
      <input type="tel" class="browser-default" name="phone" placeholder="Номер телефона" require>
      <textarea name="review" id="reviewArea" class="d-none" placeholder="Отзыв"></textarea>
      <button class="mainButton">Отправить</button>
      <div class="modal-close">
        <?php get_template_part('./icons/close') ?>
      </div>
    </form>

    <div class="modal-message_success">
      <div class="modal-title t1_up">Спасибо за заявку!</div>
      <div class="modal-description p1">Мы очень скоро перезвоним вам</div>
    </div>

    <div class="modal-message_error">
      <div class="modal-title t1_up">Что-то пошло не так!</div>
      <div class="modal-description p1">Вы можете связаться с нами <br>по любому из указанных номеров:</div>
      <div class="modal-phones">
        <a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-a1'] ?></a>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-mts'] ?></a>
        <a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-life'] ?></a>
      </div>
    </div>

  </div>
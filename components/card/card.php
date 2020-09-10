<?php 
    global $rate, $credit_percent, $leasing_percent, $card_template;

    $card = $post ? $post : $params['post'];

    $price = get_field('price', $card->ID);

    $priceBYN = round( get_field('price', $card->ID) * $rate );

    $min_pay_credit = round( ($priceBYN * 0.6) * (($credit_percent * pow(( 1 + $credit_percent ), 36)) / (pow(( 1 + $credit_percent ), 36) - 1) ) );
    
    $min_pay_leasing = round( ($priceBYN * 0.6) * (($leasing_percent * pow((1 + $leasing_percent ), 60)) / (pow(( 1 +$leasing_percent ), 60) - 1) ) );



$card_template = "
    <a class='card d-flex flex-column' href='". get_the_permalink($card->ID) ."'>
        <img class='card-img' src='". get_the_post_thumbnail_url($card->ID, 'large') ."' alt='". $card->post_title ."'>
        <div class='card-description flex-grow-1'>
            <div class='card-title t2'>". $card->post_title ."</div>
            <div class='card-params d-flex justify-content-between align-items-end'>
                <div class='card-param c2_semi'>
                    <svg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M23.5 29.5L23.5 3C23.5 3 23.5 0.5 21 0.5C18.5 0.5 11 0.499999 11 0.499999C11 0.499999 8.5 0.499999 8.5 3L8.5 29.5' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M12 12.75L20.25 12.75C20.8 12.75 21.25 12.3 21.25 11.75L21.25 6.75C21.25 6.2 20.8 5.75 20.25 5.75L12 5.75C11.45 5.75 11 6.2 11 6.75L11 11.75C11 12.3 11.45 12.75 12 12.75Z' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M8.5 4.44995L5.225 7.72495' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M4.25 7.75L6.25 7.75L6.25 12L4.25 12L4.25 7.75Z' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M5.25 12.25L5.25 21.5C5.25 21.5 5.25 24 7.75 24L8.5 24' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M19 8.25L13 8.25' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M19 10.25L13 10.25' stroke='#595959' stroke-miterlimit='10' stroke-linejoin='round'/>
                        <path d='M6.25 29.5L25.75 29.5L25.75 31.5L6.25 31.5L6.25 29.5Z' stroke='#595959' stroke-miterlimit='10'/>
                    </svg>". get_field('fuel', $card->ID) ."</div>
                <div class='card-param c2_semi'>
                    <svg width='43' height='36' viewBox='0 0 43 36' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M37.66 17.2862V12.3733C37.66 11.9208 38.251 11.6 38.6999 11.6C41.0406 11.6 40.882 13.5405 40.8499 15.9V24.5C40.8499 26.8595 41.0406 28.2625 38.6999 28.2625C38.251 28.2625 37.66 27.64 37.66 27.1875V22.5224M37.66 17.2862H35.2231M37.66 17.2862V22.5224M35.2231 17.2862V13.1814C35.2231 12.7289 34.8704 12.3733 34.4215 12.3733H30.6379M35.2231 17.2862L35.191 22.5224M30.6379 12.3733L29.9325 10.0138C29.8363 9.6583 29.5157 9.43204 29.163 9.43204H23.3915M30.6379 12.3733V32.025M23.3915 9.43204V7.36345M23.3915 9.43204H18.9666M23.3915 7.36345H27.0147C27.4636 7.36345 27.8163 7.00791 27.8163 6.5554V3.80805C27.8163 3.35554 27.4636 3 27.0147 3H15.3434C14.8945 3 14.5418 3.35554 14.5418 3.80805V6.5554C14.5418 7.00791 14.8945 7.36345 15.3434 7.36345H18.9666M23.3915 7.36345H18.9666M18.9666 7.36345V9.43204M18.9666 9.43204H10.5658C10.2773 9.43204 9.98869 9.59365 9.86043 9.85223L8.51374 12.3733H5.3394C4.89051 12.3733 4.5378 12.7289 4.5378 13.1814V17.2862M4.5378 17.2862H2.1499M4.5378 17.2862L4.50574 22.5224M2.1499 17.2862V11.6299M2.1499 17.2862V22.5224M2.1499 28.211V22.5224M2.1499 22.5224H4.50574M4.50574 22.5224V26.8535C4.50574 27.306 4.85844 27.6616 5.30734 27.6616H5.3394H12.0729L15.1831 31.7018C15.3434 31.8957 15.5678 32.025 15.8243 32.025H30.6379M35.191 22.5224V31.217C35.191 31.6695 34.8383 32.025 34.3894 32.025H30.6379M35.191 22.5224H37.66' stroke='#595959' stroke-linecap='round'/>
                    </svg>
                    ". get_field('engine_val', $card->ID) ." см3 </div>
                <div class='card-param c2_semi'>
                    <svg width='33' height='32' viewBox='0 0 33 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <circle cx='10.4387' cy='9.82786' r='1.45481' stroke='#595959'/>
                        <circle cx='16.3034' cy='9.82786' r='1.45481' stroke='#595959'/>
                        <circle cx='22.1677' cy='9.82786' r='1.45481' stroke='#595959'/>
                        <circle cx='16.3034' cy='22.1721' r='1.45481' stroke='#595959'/>
                        <circle cx='22.1677' cy='22.1721' r='1.45481' stroke='#595959'/>
                        <line x1='16.1357' y1='20.6262' x2='16.1357' y2='11.1131' stroke='#595959'/>
                        <line x1='10.1196' y1='15.5486' x2='22.4961' y2='15.5486' stroke='#595959'/>
                        <line x1='10.2476' y1='16.0486' x2='10.2476' y2='11.2707' stroke='#595959'/>
                        <line x1='21.9956' y1='20.6262' x2='21.9956' y2='11.1131' stroke='#595959'/>
                        <circle cx='16.303' cy='16' r='13.7009' stroke='#595959'/>
                        <circle cx='16.3032' cy='16' r='15.5' stroke='#595959'/>
                    </svg>". get_field('gearbox', $card->ID)."</div>
            </div>
            <ul class='card-params'>
                <li class='card-param d-flex justify-content-between'>
                    <div class='card-param-name c1_semi'>Год выпуска</div>
                    <div class='card-param-value c1_semi'>". get_field('year', $card->ID) ."</div>
                </li>
                <li class='card-param d-flex justify-content-between'>
                    <div class='card-param-name c1_semi'>Пробег, км</div>
                    <div class='card-param-value c1_semi'>". get_field('mileage', $card->ID) ."</div>
                </li>
            </ul>
            <ul class='card-price'>
                <li class='card-price-item d-flex justify-content-between card-price-item'>
                    <div class='card-price-name c1_semi'>Цена:</div>
                    <div class='d-flex justify-content-end align-items-baseline'>
                        <div class='card-price-value c1'>$price $</div>
                        <div class='card-price-value c1_semi'>$priceBYN р.</div>
                    </div>
                </li>
                <li class='card-price-item d-flex justify-content-between card-price-item'>
                    <div class='card-price-name c1_semi'>В кредит:</div>
                    <div class='d-flex justify-content-end align-items-baseline'>
                        <div class='card-price-value c1'>от $min_pay_leasing р/мес</div>
                        <div class='card-price-value c1_semi'>$priceBYN р.</div>
                    </div>
                </li>
                <li class='card-price-item d-flex justify-content-between card-price-item'>
                    <div class='card-price-name c1_semi'>В лизинг:</div>
                    <div class='d-flex justify-content-end align-items-baseline'>
                        <div class='card-price-value c1'>от $min_pay_credit р/мес</div>
                        <div class='card-price-value c1_semi'> $priceBYN р.</div>
                    </div>
                </li>
            </ul>
        </div>
    </a>";
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<main class="main-page" style="margin-bottom: -30px;">
    <div class="hero-section main">

        <div class="hero-wrapper">
            <div class="hero-image main"></div>

            <div class="hero-text main">
                <h1>Запустіть власний магазин секонд-хенду</h1>

                <p>
                    або збільште прибуток існуючого,
                    на товарі якості “домашня збірка”
                </p>

                <button class="connect-manager">
                    <img class="call-img" src="<?= SERVER_URL ?>assets/images/icons/call.svg" alt="call">
                    <img class="call-img-red" src="<?= SERVER_URL ?>assets/images/icons/call-red.svg" alt="call-red">
                    Зв'язатись з менеджером
                </button>
            </div>

        </div>

    </div>

    <div class="container talk-section">
        <div class="talk-block">
            <h4>Щоденно ми спілкуємось з діючими та новими клієнтами, а також з тими, хто хоче створити власний бізнес на продажі секонд-хенду.
                І зазвичай чуємо як мінімум одне з списку нижче:</h4>
            <ul>
                <li>“купили товар, а там 40% “сміття” і неліквіду”</li>
                <li>“розраховували на якісну сортовку, а отримали мотлох”</li>
                <li>“не співпала вага товару”</li>
                <li>“доставка “золота”, ще й з завдатком - повернули назад і втратили на авансі</li>
                <li>“не надали сертифікати, маємо проблеми” <br>
                    і ще близько десятка пунктів
                </li>
            </ul>
            <h2>“</h2>
            <hr class="thin">
            <hr class="fat">
        </div>
        <div class="image-block">
            <div class="black-square"></div>
            <img src="<?= SERVER_URL ?>assets/images/main/hero-1.png" alt="hero-1">
        </div>
    </div>

    <div class="container reputation-section">
        <div class="margin-wrap grid-2">
            <div class="image-block">
                <div class="black-square"></div>
                <img src="<?= SERVER_URL ?>assets/images/main/hero-2.png" alt="hero-2">
            </div>

            <div class="reputation-block">
                <h2>Наші товари = наша репутація</h2>
                <p>Поставивши зручність клієнта та вирішення його проблем пріоритетом № 1, ми щодня вдосконалюємо якість товару та сервісу задля вашого результату.</p>
                <button class="catalog">
                    <span>КАТАЛОГ</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="11" viewBox="0 0 53 11" fill="none">
                        <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" stroke="#F1AE2C"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <?php require "@commons/viber-section.php"; ?>

    <div class="container">
        <div class="cooperation-section">
            <div class="top-block">
                <h2>Оберіть необхідний вам варіант співпраці</h2>
                <img class="left-corner-img" src="<?= SERVER_URL ?>assets/images/icons/left-corner.svg" alt="left-corner">
            </div>
            <div class="original-block">
                <div class="box box1">

                    <hr class="vert black">

                    <h2 class="code">1</h2>
                    <h3>Оригінал</h3>

                    <hr class="silver first">

                    <div class="logos-wrap">
                        <img src="<?= SERVER_URL ?>assets/images/icons/nike.svg" alt="nike">
                        <img src="<?= SERVER_URL ?>assets/images/icons/puma.svg" alt="puma">
                        <img src="<?= SERVER_URL ?>assets/images/icons/adidas.svg" alt="adidas">
                        <img src="<?= SERVER_URL ?>assets/images/icons/reebok.svg" alt="reebok">
                    </div>

                    <hr class="silver second">

                    <p>Збирається за схемою С4С (Cash4Clothes, "магазинна збірка") або D2D (“домашня збірка на благочинність”). Перед купівлею компанії-партнери здійснюють ретельну перевірку товару на цілісність та якість - ймовірність браку зведено до мінімуму. Зазвичай товар включає багато нового одягу з етикетками.</p>

                    <ul>
                        <li><span>Країни-постачальники оригіналу: </span><br>Великобританія, Шотландія</li>
                        <li><span>Мінімальна партія: </span><br><span class="thin">від 150 кг в залежності від пакування</span></li>
                    </ul>

                    <button class="more">
                        <span>Дізнатися більше</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="9" viewBox="0 0 61 9" fill="none">
                            <path d="M0.231934 4.33977H59.5113M59.5113 4.33977L53.756 0.483643M59.5113 4.33977L53.756 8.19591" stroke="white"/>
                        </svg>
                    </button>

                </div>
                <div class="box box2">

                    <hr class="vert yellow">

                    <h2 class="code">2</h2>
                    <h3>Сортовка</h3>
                    <hr class="silver first">

                    <div class="logos-wrap">
                        <img src="<?= SERVER_URL ?>assets/images/icons/nike.svg" alt="nike">
                        <img src="<?= SERVER_URL ?>assets/images/icons/puma.svg" alt="puma">
                        <img src="<?= SERVER_URL ?>assets/images/icons/adidas.svg" alt="adidas">
                        <img src="<?= SERVER_URL ?>assets/images/icons/reebok.svg" alt="reebok">
                    </div>

                    <hr class="silver second">

                    <p>Підійде клієнтам спеціалізованих магазинів (наприклад робочого чи дитячого одягу), або тим, хто хоче урізноманітнити асортимент конкретними позиціями товарів. Викупаємо лише після ретельної перевірки якост, надаємо можливість оглянути видео розпаковки та продаємо за ціною секонд-хенда.</p>

                    <ul>
                        <li><span>Країни-постачальники оригіналу: </span><br>Шотландія, Італія, Бельгія, Нідерланди</li>
                        <li><span>Мінімальна партія: </span><br><span class="thin">15-100 кг в залежності від пакування</span></li>
                    </ul>

                    <button class="more yellow">
                        <span>Дізнатися більше</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="9" viewBox="0 0 61 9" fill="none">
                            <path d="M0.109863 4.33977H59.3892M59.3892 4.33977L53.6339 0.483643M59.3892 4.33977L53.6339 8.19591" stroke="#D6FF00"/>
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="choose-section">
            <h2 class="choose-text">Перейти до вибору товару</h2>

            <div class="hero-choose">
                <div class="square-season winter">
                    <div class="text">ЗИМА</div>
                    <div class="blur-square"></div>
                </div>
                <div class="square-season spring">
                    <div class="text">ВЕСНА</div>
                    <div class="blur-square"></div>
                </div>
                <div class="square-season summer">
                    <div class="text">ЛІТО</div>
                    <div class="blur-square"></div>
                </div>
                <div class="square-season autumn">
                    <div class="text">ОСІНЬ</div>
                    <div class="blur-square"></div>
                </div>
            </div>

            <div class="support-block">

                <img class="hero-flag" src="<?= SERVER_URL ?>assets/images/main/hero-flag.png" alt="hero-flag">

                <div class="support-line">
                    <img class="support-img" src="<?= SERVER_URL ?>assets/images/icons/support.svg" alt="support">
                    <img class="support-white-img" src="<?= SERVER_URL ?>assets/images/icons/support-white.svg" alt="support-white">
                    <h2>Нова послуга BritishSecond - клієнтський супровід</h2>
                </div>

                <div class="bottom-line">

                    <hr class="white">

                    <p>Ми зацікавлені в успішності та прибутковості своїх клієнтів, тому розробили послугу допомоги вашому магазину. В неї включено все необхідне: від рекомендацій зі створення нового магазину (вибір району, площі приміщення та найму персоналу) до створення бренду, сайту, SMM (просування в соцмережах), скриптів для роботи менеджерів з клієнтами.</p>

                    <button class="know-more">
                        <span>Дізнатися більше</span>
                        <svg class="desktop" xmlns="http://www.w3.org/2000/svg" width="53" height="12" viewBox="0 0 53 12" fill="none">
                            <path d="M0 6H51.5M51.5 6L46.5 1M51.5 6L46.5 11" stroke="black"/>
                        </svg>
                        <svg class="mobile" xmlns="http://www.w3.org/2000/svg" width="53" height="12" viewBox="0 0 53 12" fill="none">
                            <path d="M0 6H51.5M51.5 6L46.5 1M51.5 6L46.5 11" stroke="#F1AE2C"/>
                        </svg>
                    </button>
                </div>

            </div>


        </div>
    </div>

    <div class="container">

        <div class="numbers-section">

            <h2>BritishSecond в цифрах</h2>

            <div class="numbers-box">

                <div class="number one">
                    <h3>6</h3>
                    <hr class="brown">
                    <p>років <br> на ринку</p>
                </div>

                <div class="number two">
                    <h3>241</h3>
                    <hr class="brown">
                    <p>діючий <br> постійний клієнт</p>
                </div>

                <div class="number three">
                    <h3>812</h3>
                    <hr class="brown">
                    <p>магазинів працювало <br> з нами за 6 років</p>
                </div>

                <div class="number four">
                    <h3>114</h3>
                    <hr class="brown">
                    <p>міст України, в яких є <br> наші клієнти</p>
                </div>

                <div class="number five">
                    <h3>24</h3>
                    <hr class="brown">
                    <p>області, в яких <br> ми працюємо</p>
                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="advantages-section">

            <h2>ТОП-6 переваг</h2>
            <h5>співпраці з BritishSecond</h5>

            <div class="adv-container">

                <div class="adv-block one">

                    <div class="text-part">

                        <h3 class="code">1</h3>
                        <h4>Прямий імпорт з Європи</h4>

                        <hr class="blackline">

                        <p>Ми не займаємось перекупкою, а імпортуємо секонд-хенд напряму</p>
                        <p class="bold">Продаж винятково гуртом</p>

                    </div>

                    <div class="image-part">
                        <img src="<?= SERVER_URL ?>assets/images/main/top-1.png" alt="top-1">
                    </div>

                </div>

                <div class="adv-block two">

                    <div class="text-part">

                        <h3 class="code">2</h3>
                        <h4>Відсутність власних магазинів</h4>

                        <hr class="blackline">

                        <div class="line-num">
                            <div class="block-number">1</div>
                            <p>Отже ви можете бути впевнені, що товар, який приїхав на склад, і товар, який ви купили, - ідентичні.</p>
                        </div>

                        <div class="line-num">
                            <div class="block-number">2</div>
                            <p>Для більшої впевненості ми найняли окремого працівника, який робить відеоогляди і наполягаємо, щоб ви завітали до нас, як мінімум при першій покупці</p>
                        </div>

                    </div>

                    <div class="image-part">
                        <img src="<?= SERVER_URL ?>assets/images/main/top-2.png" alt="top-2">
                    </div>

                </div>

                <div class="adv-block three">

                    <div class="text-part">

                        <h3 class="code">3</h3>
                        <h4>Повна відсутність передплати</h4>

                        <hr class="blackline">

                        <div class="line-block">
                            <hr class="black">
                            <p>Ми - єдина компанія в Україні, яка не вимагає жодного авансового платежу, незалежно від розміру партії та способу доставки.</p>
                        </div>

                        <p>Тим самим ви страхуєте себе від неякісного товару та можете оглянути його безпосередньо на місці. Ми зацікавлені, щоб товар підійшов вам, тому працюємо лише з перевіреними фабриками та ретельно перевіряємо якість</p>

                    </div>

                    <div class="image-part">
                        <img src="<?= SERVER_URL ?>assets/images/main/top-3.png" alt="top-3">
                    </div>

                </div>

                <div class="adv-block four">

                    <div class="text-part">

                        <h3 class="code">4</h3>
                        <h4>2 варіанти доставки на ваш вибір</h4>

                        <hr class="blackline">

                        <div class="line-num">
                            <div class="block-number">1</div>
                            <p>Обраним вами поштовим перевізником накладним платежем</p>
                        </div>

                        <div class="line-num">
                            <div class="block-number">2</div>
                            <p>Нашим власним транспортом під двері магазину (діє в межах Західної та Центральної України, Східна, Північна, Південна Україна по індивідуальній замовленості)</p>
                        </div>

                    </div>

                    <div class="image-part">
                        <img src="<?= SERVER_URL ?>assets/images/main/top-4.png" alt="top-4">
                    </div>

                </div>

                <div class="label-block">
                    <h4>Порівняння цін на доставку:</h4>

                    <div class="comparison-block">

                        <div class="product">
                            <img src="<?= SERVER_URL ?>assets/images/main/comparison-1.png" alt="comparison-1">
                            <p>British Second</p>
                            <h3 class="white">~ <span>1.5</span> грн/км</h3>
                        </div>

                        <hr class="grey">

                        <div class="product">
                            <img src="<?= SERVER_URL ?>assets/images/main/comparison-2.png" alt="comparison-2">
                            <p>Meest Express</p>
                            <h3>~ <span>4</span> грн/км</h3>
                        </div>

                        <hr class="grey">

                        <div class="product">
                            <img src="<?= SERVER_URL ?>assets/images/main/comparison-3.png" alt="comparison-3">
                            <p>Нова Пошта</p>
                            <h3>~ <span>6</span> грн/км</h3>
                        </div>

                    </div>

                </div>

                <div class="adv-block five">

                    <div class="text-part">

                        <h3 class="code">5</h3>
                        <h4>Офіційне розмитнення та договір</h4>

                        <hr class="blackline">

                        <div class="line-block">
                            <hr class="black">
                            <p>Розуміючи всі ваші нюанси у спілкуванні з клієнтами та державними службами, ми надаємо все необхідне.</p>
                        </div>

                        <p>З кожною партією, ви отримуєте всі необхідні сертифікати якості, офіційне розмитнення та заключення офіційного договору постачання за потреби</p>

                    </div>

                    <div class="image-part">
                        <img src="<?= SERVER_URL ?>assets/images/main/top-5.png" alt="top-5">
                    </div>


                </div>

                <div class="adv-block six">

                    <div class="text-part">

                        <h3 class="code">6</h3>
                        <h4>Завжди приємні ціни і висока якість</h4>

                        <hr class="blackline">

                        <div class="line-check">
                            <div class="check">✓</div>
                            <p>Якщо ви проведете аналіз ринку секонд-хенду, то помітите, що на Львівщині 1 кг сорту “екстра” буде дешевший ніж той же 1 кг, наприклад, в Києві. Важко пояснити, чому це відбувається, але ви  можете переконатись в цифрах самостійно.</p>
                        </div>

                        <div class="line-check">
                            <div class="check">✓</div>
                            <p>Для більшої впевненості ми найняли окремого працівника, який робить відеоогляди і наполягаємо, щоб ви завітали до нас, як мінімум при першій покупці</p>
                        </div>

                        <div class="line-check">
                            <div class="check">✓</div>
                            <p>Ми працюємо з “домашньою збіркою” - це одяг та взуття, які віддають на благочинність, часто випрані, в ідеальному стані або нові з бірками. Враховуючи локації збору, в нашій домашній збірці багато брендового якісного товару.</p>
                        </div>

                        <h2 class="code one">$</h2>
                        <h2 class="code two">$</h2>
                        <h2 class="code three">$</h2>

                    </div>

                </div>

            </div>





        </div>

    </div>

    <div class="container">

        <div class="geography-section">

            <h2>Географія наших клієнтів</h2>

            <div class="map-block">

                <div class="grid-map">

                    <img src="<?= SERVER_URL ?>assets/images/main/map.png" alt="map">

                    <div class="text-block">
                        <h4>міста України:</h4>

                        <ul class="cities">
                            <li>Київ</li>
                            <li>Харків</li>
                            <li>Одеса</li>
                            <li>Дніпро</li>
                            <li>Донецьк</li>
                            <li>Запоріжжя</li>
                            <li>Львів</li>
                            <li>Кривий Ріг</li>
                            <li>Миколаїв</li>
                            <li>Маріуполь</li>
                            <li>Вінниця</li>
                            <li>Херсон</li>
                            <li>Полтава</li>
                            <li>Чернігів</li>
                            <li>Черкаси</li>
                            <li>Житомир</li>
                            <li>Суми</li>
                            <li>Хмельницький</li>
                            <li>Чернівці</li>
                            <li>Тернопіль</li>
                            <li>Рівне</li>
                            <li>Луцьк</li>
                            <li>Ужгород</li>
                            <li>Івано-Франківськ</li>
                            <li>Кам'янське</li>
                            <li>Мелітополь</li>
                            <li>Нікополь</li>
                            <li>Біла Церква</li>
                            <li>Кременчук</li>
                        </ul>
                    </div>

                </div>

                <div class="text-box">
                    <hr class="orange">

                    <p>Наші клієнти є в 114 містах України</p>
                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="team-section">

            <h2>Наша команда</h2>

            <?php require "@commons/swiper-team.php"; ?>

        </div>

    </div>

    <div class="hero-section main final">

        <div class="hero-wrapper">
            <div class="hero-image main"></div>

            <div class="hero-text main">

                <div class="left-part">
                    <h2>Запустіть власний магазин секонд-хенду</h2>

                    <p>
                        або збільште прибуток існуючого,
                        на товарі якості “домашня збірка”
                    </p>

                    <button class="connect-manager">
                        <img class="call-img" src="<?= SERVER_URL ?>assets/images/icons/call.svg" alt="call">
                        <img class="call-img-red" src="<?= SERVER_URL ?>assets/images/icons/call-red.svg" alt="call-red">
                        Зв'язатись з менеджером
                    </button>
                </div>
                <div class="right-part">
                    <div class="flag-wrap">
                        <img src="<?= SERVER_URL ?>assets/images/icons/flag-1.svg" alt="flag-1">
                        <img src="<?= SERVER_URL ?>assets/images/icons/flag-2.svg" alt="flag-2">
                        <img src="<?= SERVER_URL ?>assets/images/icons/flag-3.svg" alt="flag-3">
                        <img src="<?= SERVER_URL ?>assets/images/icons/flag-4.svg" alt="flag-4">
                        <img src="<?= SERVER_URL ?>assets/images/icons/flag-5.svg" alt="flag-5">
                    </div>
                </div>

            </div>

        </div>

    </div>

</main>
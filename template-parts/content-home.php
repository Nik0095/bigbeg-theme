<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<section id="hero" class="hero">
    <div class="hero__background">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7v184m.webp" alt="Big-bag">
    </div>

    <div class="hero__content">
        <h1 class="hero__title">Купити Біг-Бег в Україні</h1>
        <h2 class="hero__subtitle">
            Офіційний представник в Україні <br>
            <span class="coral">Hope International</span>
        </h2>
    </div>
</section>

<main class="main">
    <div id="product" class="content_header">
        <div class="content__availability">Завжди в наявності</div>
        <h2 class="content__title coral">Біг-бег з верхнім фартухом</h2>

        <div class="content__description">
            <p>Біг-бег з верхнім фартухом, вміщує<span class="coral"> 1000 – 1200 кг</span>, залежить від завантаженого продукта</p>
        </div>
    </div>

    <section  class="product">
        <div class="product__background"></div>

        <div class="product__container">
            <header class="product__header">
                <h2 class="product__title">Біг-Бег</h2>
                <p class="product__specs">
                    РР 140 г/м², розмір 90х90х200 см, верхній фартух, глухе дно, 4 стропи по 35см.
                </p>
                <p class="product__availability">Завжди в наявності на складі у Дніпрі</p>
            </header>

            <div class="product__description">
                <p>
                    Для фасування таких продуктів як: шрот соняшнику, шрот ріпаку, ріпак,
                    соєвий шрот, макуха, дерев’яна пелета, пелети з лушпиння соняшника,
                    кукурудза, рис, соя, насіння гірчиці, крупи (манна, перлова, вівсяна),
                    ячмінь, сочевиця, комбікорм, добрива.
                </p>
            </div>
        </div>
    </section>

    <!-- Відео-презентація -->
    <section class="product-info">
        <div class="product-info__container">
            <div class="product-info__video">
                <video controls poster="<?php echo get_template_directory_uri(); ?>/assets/img/video-poster.webp">
    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/WhatsApp-Video-2023-05-23-at-15.12.57.mp4" type="video/mp4">
    Ваш браузер не підтримує відео.
</video>
            </div>
            <div class="product-info__content">
                <h2 class="product-info__title">Відео-презентація Біг-Бег</h2>
                <hr class="divider">
                <p class="product-info__text">
                    Біг-Бег є зручним засобом для регулювання дозування матеріалу. Він може бути обладнаний спеціальними
                    клапанами або механізмами, що дозволяють контролювати вигрузку продукту з контейнера. Це особливо важливо
                    при використанні сипучих матеріалів, де точне дозування може бути критичним.
                </p>
                <button class="order-button"
                    style="background-color: #ff6666; color: white; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; margin-top: 10px; font-size: 1rem;"
                    onclick="window.location.href=''">замовити рахунок</button>
            </div>
        </div>
    </section>

    <!-- Ціни -->
    <section id="price" class="price">
        <div class="price__background"></div> <!-- фон -->

        <div class="price__container">
            <div class="price__info wrapper">
                <div class="price__header">
                    <h2 class="price__title coral">Спеціальна Пропозиція</h2>
                </div>

                <div class="price__description">
                    <p>Знижки на Біг-Бег будуть розраховані залежно від обсягу вашого замовлення. Чим більше Біг-Бег ви
                        замовляєте, тим більша знижка застосовується до загальної суми. Ми гарантуємо, що наші ціни залишаться
                        конкурентоспроможними і <span class="coral">ви отримаєте якісні Біг-бег</span> за вигідними умовами.</p>
                </div>
            </div>
            <div class="price__table-wrapper">
                <h3 class="price__subtitle">Гнучка система знижок</h3>
                <table class="price__table">
                    <thead>
                        <tr>
                            <th class="coral">Кількість</th>
                            <th class="coral">Ціна за одиницю</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>До 50 шт.</td><td>235 грн.</td></tr>
                        <tr><td>50–100 шт.</td><td>230 грн.</td></tr>
                        <tr><td>100 до 200 шт.</td><td>225 грн.</td></tr>
                        <tr><td>200–500 шт.</td><td>220 грн.</td></tr>
                        <tr><td class="coral">від 500 шт.</td><td class="coral">ціна за домовленістю</td></tr>
                    </tbody>
                </table>
                <button class="order-button" onclick="window.location.href=''">замовити рахунок</button>
            </div>
        </div>
    </section>

    <!-- Блоки із зображеннями -->
    <section class="section flex-section">
        <div class="image-col slide-in-fwd-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20230614_134352-768x576-2.webp" alt="Зображення 1" loading="lazy">
        </div>
        <div class="text-col">
            <h3 class="coral">1. Застосування:</h3>
            <p>
                <span class="coral">Біг-бег 90х90х200 см вміщує 1000 – 1200 кг.</span> при фасуванні таких продуктів як :
                шрот соняшнику, шрот ріпаку, ріпак, соєвий шрот, макуха, дерев’яна пелета, пелети з лушпиння сонячника,
                кукурудза, рис, соя, насіння гірчиці, крупи (манна, перлова, вівсяна), ячмінь, сочевиця, комбікорм, добрива.
            </p>
        </div>
    </section>

    <section class="section flex-section reverse">
        <div class="text-col">
            <h3 class="coral">2. Гнучкість в застосуванні:</h3>
            <p>Біг-Бег пристосовані для різноманітних використань. Вони можуть бути використані для перевезення сипучих
                матеріалів, піску, цементу, каміння, вугілля, зерна, хімічних речовин та інших матеріалів. Ви можете
                замовити big-bagи зі спеціальними характеристиками, включаючи водонепроникність або антистатичні властивості.</p>
        </div>
        <div class="image-col slide-in-fwd-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20230614_134401-768x576.jpg-2.webp" alt="Зображення 2" loading="lazy">
        </div>
    </section>

    <section class="section flex-section">
        <div class="image-col slide-in-fwd-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20230614_134258-scaled-e1687174996961-1024x768-2.webp" alt="Зображення 3" loading="lazy">
        </div>
        <div class="text-col">
            <h3 class="coral">3. Висока міцність- 140г/м3:</h3>
            <p>Наші Біг-Бег виготовляються з якісних та міцних матеріалів, що забезпечує їх довговічність та витривалість.
                Вони можуть витримати великі навантаження та забезпечують надійний захист вашого товару.</p>
        </div>
    </section>

    <section class="delivery">
        <h2>Доставка по Україні за 48 годин</h2>
        <div class="delivery__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images-2-removebg-preview.png" alt="Доставка" loading="lazy">
        </div>
        <p>Доставка будь яким перевізником по замовленню покупця</p>
    </section>

    <section class="section flex-section">
        <div class="image-col">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imgonline-com-ua-Compressed-oAKs83OGnrM4lMg-2.webp" alt="Зображення 1" class="img-main" loading="lazy">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images.jpeg.webp" alt="Зображення 2" class="img-small" loading="lazy">
        </div>
        <div class="text-col">
            <h2>Біг Бег</h2>
            <hr class="divider">
            <p>
                Біг-Бег, також відомий як контейнер з гнучкими стінками, є універсальним засобом для зберігання і
                транспортування різноманітних матеріалів. Використання big-bag стає все більш поширеним у різних галузях
                промисловості та сільського господарства, завдяки своїй високій ефективності і зручності.
            </p>
        </div>
    </section>

    <section class="partners">
        <h2>Ми постачаємо для:</h2>
        <hr class="divider">
        <div class="partners__list">
            <span>Королівський смак</span>
            <span>Потоки</span>
            <span>Добра Олія</span>
            <span>Укролія</span>
        </div>
    </section>

    <section class="section">
        <?php
        while ( have_posts() ) : the_post();
            echo '<div class="page-content">';
            the_content();  
            echo '</div>';
        endwhile;
        ?>
    </section>
</main>

<?php
get_footer();

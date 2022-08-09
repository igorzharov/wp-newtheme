<?php get_header(); ?>

    <section class="s-main">

        <div class="container">

            <div class="headline">

                <div class="headline__text h2">Товары</div>

                <a class="headline__button button button--icon button--icon-right" href="#"><span>Смотреть все</span><img class="icon icon--accent" src="/wp-content/uploads/icons/chevron-right.svg"
                                                                                                           alt="icon"></a>

            </div>

            // Остановился здесь. Пока не ппонля как категории получить

            <?php $query = new WP_Query([
                'post_type' => 'product',
                'post_per_page' => 25
            ]);

            echo $query->post_count;

            echo '<pre>';
            var_dump(wc_get_product_category_list());
            echo '</pre>';

            ?>



            <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>

                </div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>

<?php
get_footer();

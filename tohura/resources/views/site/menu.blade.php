@extends('site.layout') 

@section('content')
    <!-- # main content
            ================================================== -->
    <article class="s-content">

        <!-- ## pageheader -->
        <section class="s-pageheader pageheader"
            style="background-image:url(images/pageheader/pageheader-menu-bg-3000.jpg)">
            <div class="row">
                <div class="column xl-12 s-pageheader__content">
                    <h1 class="page-title">
                        Discover Our Menu
                    </h1>
                </div>
            </div>
        </section>

        <!-- ## pagecontent -->
        <section class="s-pagecontent pagecontent">

            <div class="row width-narrower pageintro text-center">
                <div class="column xl-12">
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint
                        nostrum fugit aperiam
                        inventore optio itaque molestias corporis, ipsa tenetur eligendi nihil iste porro, natus culpa
                        consequuntur? Maxime,
                        corporis tempore. Sed tenetur veritatis velit recusandae eum.
                    </p>
                </div>
            </div> <!-- end pageintro -->

            <div class="row width-narrower content-block">
                <div class="column xl-12">

                    <div class="menu-block">

                        <div class="menu-block__group">
                            <h2 class="h6 menu-block__cat-name">Starter</h2>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Garlic Bread</h4>
                                        <p>
                                            Slices of freshly baked bread, brushed with garlic butter and parsley.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>4.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Quesadilla</h4>
                                        <p>
                                            Flour tortilla filled with cheese, sautéed onions, and bell peppers. Served with
                                            sour cream and salsa.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>7.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Caprese Skewers</h4>
                                        <p>
                                            Cherry tomatoes, fresh mozzarella, and basil skewered on a stick and drizzled
                                            with balsamic glaze.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>6.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Spinach and Artichoke Dip</h4>
                                        <p>
                                            Creamy dip made with spinach, artichoke hearts, and a blend of cheeses, served
                                            with tortilla chips
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>7.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Bruschetta</h4>
                                        <p>
                                            Toasted bread topped with fresh tomatoes, basil, and balsamic glaze.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>5.99
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->
                        </div> <!-- end menu-block__group -->

                        <div class="menu-block__group">
                            <h2 class="h6 menu-block__cat-name">Mains</h2>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Grilled Salmon</h4>
                                        <p>
                                            Fresh salmon fillet served with roasted vegetables and garlic mashed potatoes.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>18.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Grilled Filet Mignon</h4>
                                        <p>
                                            Tender and juicy filet mignon seasoned with herbs, grilled to your preference,
                                            and served with roasted vegetables.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>28.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Pesto Chicken Pasta</h4>
                                        <p>
                                            Grilled chicken breast tossed with linguine in a basil pesto cream sauce,
                                            garnished with sun-dried tomatoes and parmesan cheese.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>18.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Vegetable Stir-Fry</h4>
                                        <p>
                                            A medley of colorful vegetables stir-fried in a savory soy-ginger sauce, served
                                            with steamed jasmine rice.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>15.00
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Portobello Mushroom Burger</h4>
                                        <p>
                                            Grilled portobello mushroom cap served on a brioche bun with melted Swiss
                                            cheese, caramelized onions, and garlic aioli.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>14.00
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->
                        </div> <!-- end menu-block__group -->

                        <div class="menu-block__group">
                            <h2 class="h6 menu-block__cat-name">Desserts</h2>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Vanilla Ice Cream</h4>
                                        <p>
                                            Creamy vanilla ice cream served with a choice of toppings: chocolate sauce,
                                            caramel, or fresh berries.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>4.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Yogurt and Strawberry Delight</h4>
                                        <p>
                                            Greek yogurt topped with fresh strawberries, honey, and a sprinkle of granola.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>5.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Chocolate Lava Cake</h4>
                                        <p>
                                            Warm, gooey chocolate cake with a molten center, served with a scoop of vanilla
                                            ice cream.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>8.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Classic Tiramisu</h4>
                                        <p>
                                            Layers of coffee-soaked ladyfingers and mascarpone cheese, dusted with cocoa
                                            powder and topped with chocolate shavings.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>7.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Decadent Chocolate Fondue</h4>
                                        <p>
                                            Rich and velvety chocolate fondue served with an assortment of fresh fruits and
                                            marshmallows for dipping.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>11.99
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->
                        </div> <!-- end menu-block__group -->

                        <div class="menu-block__group">
                            <h2 class="h6 menu-block__cat-name">Drinks</h2>

                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Signature Mojito</h4>
                                        <p>
                                            A refreshing blend of white rum, fresh mint leaves, lime juice, simple syrup,
                                            and soda water.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>8.99
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Berry Burst Smoothie</h4>
                                        <p>
                                            A delicious blend of mixed berries, banana, yogurt, and a touch of honey for
                                            natural sweetness.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>6.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Cucumber Lime Sparkler</h4>
                                        <p>
                                            A refreshing drink made with cucumber, lime juice, soda water, and a hint of
                                            mint.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>4.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Iced Caramel Macchiato</h4>
                                        <p>
                                            Chilled espresso with milk and caramel syrup over ice.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>5.50
                                    </div>
                                </li>
                                <li class="menu-list__item">
                                    <div class="menu-list__item-desc">
                                        <h4>Fresh Squeezed Lemonade</h4>
                                        <p>
                                            Classic lemonade made with fresh lemon juice and a touch of sweetness.
                                        </p>
                                    </div>
                                    <div class="menu-list__item-price">
                                        <span>$</span>3.99
                                    </div>
                                </li>
                            </ul> <!-- end menu-list -->
                        </div> <!-- end menu-block__group -->

                    </div> <!-- end menu-block -->

                </div>
            </div> <!-- end content-block -->

            <div class="row width-narrower row-x-center content-block content-block--grey cta-block">
                <div class="column xl-10 mob-12">
                    <h3>Feast on a Flavorful and Unique Moment</h3>
                    <p class="attention-getter">
                        Eaque temporibus culpa perferendis expedita assumenda mollitia magnam. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit
                        facilis quaerat maxime perferendis expedita sunt odi.
                    </p>
                    <a href="reservations.html" class="btn btn--primary u-fullwidth">Book a Table Now</a>
                </div>
            </div> <!-- end content-block -->

        </section> <!-- pagecontent -->

    </article> <!-- end main content -->


    <!-- # gallery
            ================================================== -->
    <section id="gallery" class="s-gallery">
        <div class="row s-gallery__inner">
            <div class="column xl-12">

                <div class="gallery-items grid-list-items">
                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-01.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-01.jpg" srcset="images/gallery/gallery-01.jpg 1x, 
                                                images/gallery/gallery-01@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item-->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-02.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-02.jpg" srcset="images/gallery/gallery-02.jpg 1x, 
                                                images/gallery/gallery-02@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-03.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-03.jpg" srcset="images/gallery/gallery-03.jpg 1x, 
                                                images/gallery/gallery-03@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-04.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-04.jpg" srcset="images/gallery/gallery-04.jpg 1x, 
                                                images/gallery/gallery-04@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-05.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-05.jpg" srcset="images/gallery/gallery-05.jpg 1x, 
                                                images/gallery/gallery-05@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-06.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-06.jpg" srcset="images/gallery/gallery-06.jpg 1x, 
                                                images/gallery/gallery-06@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-07.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-07.jpg" srcset="images/gallery/gallery-07.jpg 1x, 
                                                images/gallery/gallery-07@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-08.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-08.jpg" srcset="images/gallery/gallery-08.jpg 1x, 
                                                images/gallery/gallery-08@2x.jpg 2x" alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->
                </div> <!-- end grid-list-items -->

            </div>
        </div> <!-- end s-gallery__inner -->
    </section> <!-- end s-gallery -->
@endsection
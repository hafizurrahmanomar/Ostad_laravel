@extends('site.layout')

@section('content')
    <!-- # main content
            ================================================== -->
    <article class="s-content">

        <!-- ## pageheader -->
        <section class="s-pageheader pageheader"
            style="background-image:url(images/pageheader/pageheader-generic-bg-3000.jpg)">
            <div class="row">
                <div class="column xl-12 s-pageheader__content">
                    <h1 class="page-title">
                        Generic Page
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
                        consequuntur.
                    </p>
                </div>
            </div> <!-- end pageintro -->

            <div class="row width-narrow content-block content-block--media-right">
                <div class="column content-block__text">
                    <h3>Corporis Accusamus Commodi</h3>
                    <p>
                        Eaque temporibus culpa perferendis expedita assumenda mollitia magnam. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit
                        facilis voluptates voluptatum animi numquam quas ea praesentium quaerat maxime sunt odit inventore
                        itaque est et autem sequi nulla.
                        Distinctio obcaecati nesciunt asperiores dolorum tenetur voluptates, nemo alias doloremque.
                    </p>
                </div>
                <div class="column content-block__media">
                    <figure>
                        <img src="images/about/about-img-02.jpg"
                            srcset="images/about/about-img-02.jpg 1x, images/about/about-img-02@2x.jpg 2x" alt="">
                    </figure>
                </div>
            </div> <!-- end content-block-->

            <div class="row width-narrow content-block">
                <div class="column xl-12">
                    <h3>Nostrum In Facilis</h3>
                    <p>
                        Eaque temporibus culpa perferendis expedita assumenda mollitia magnam. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit
                        facilis voluptates voluptatum animi numquam quas ea praesentium quaerat maxime sunt odit inventore
                        itaque est et autem sequi nulla.
                        Distinctio obcaecati nesciunt asperiores dolorum tenetur voluptates, nemo alias doloremque. Quos
                        cumque ipsum laudantium odio vero
                        aut odit nostrum aliquam? Nostrum in facilis, minus fuga quasi voluptas explicabo possimus incidunt,
                        expedita tempora eius rem nobis sequi.
                        Doloribus esse sint suscipit quam nisi blanditiis voluptate explicabo.
                    </p>

                    <h3>Eaque Temporibus Tulpa</h3>
                    <p>
                        Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores sit
                        mollitia. Rem neque et voluptatem
                        eos quia sed eligendi et. Eaque velit eligendi ut magnam. Cumque ducimus laborum doloribus facere
                        maxime vel earum quidem enim suscipit.
                        Numquam, corporis accusamus commodi saepe nostrum nesciunt nisi rem necessitatibus unde laboriosam
                        molestias, quam ipsa voluptatum sed
                        ex cumque facilis assumenda maiores tempore reiciendis enim accusantium.
                    </p>

                    <h3>Mollitia Accusamus Consectetur</h3>

                    <div class="grid-list-items list-items">
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">Delectus</h6>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia accusamus consectetur
                                adipisicing elit excepturi corrupti
                                nam quae exercitationem cupiditate, provident ipsa delectus vero possimus reprehenderit quas
                                ut officiis tempora voluptatum
                                .
                            </p>
                        </div>
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">Excepturi</h6>
                            </div>
                            <p>
                                Molestias, autem impedit culpa dolores excepturi, quidem unde ducimus, rerum commodi
                                deserunt earum, minus voluptatum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe doloremque provident quas.
                            </p>
                        </div>
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">Consectetur</h6>
                            </div>
                            <p>
                                Mollitia accusamus consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Adipisicing elit excepturi corrupti
                                nam quae exercitationem cupiditate, provident ipsa delectus vero possimus reprehenderit quas
                                ut officiis tempora voluptatum.

                            </p>
                        </div>
                    </div>
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

  @endsection  <!-- # main content --> 
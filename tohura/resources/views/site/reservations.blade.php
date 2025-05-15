@extends('site.layout')
@section('content')
    <!-- # main content
            ================================================== -->
    <article class="s-content">

        <!-- ## pageheader -->
        <section class="s-pageheader pageheader"
            style="background-image:url(images/pageheader/pageheader-reservations-bg-3000.jpg)">
            <div class="row">
                <div class="column xl-12 s-pageheader__content">
                    <h1 class="page-title">
                        Reservations
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

            <div class="row width-narrower content-block">
                <div class="column xl-12">

                    <form name="rform" id="rform" class="reservation-form" method="post" action="" autocomplete="off">
                        <fieldset class="row">

                            <div class="column xl-6 tab-12">
                                <label for="rname">Name: </label>
                                <input type="text" name="rame" id="rname" class="u-fullwidth" placeholder="Enter Your Name"
                                    value="">
                            </div>

                            <div class="column xl-6 tab-12">
                                <label for="rphone">Contact Number: </label>
                                <input type="tel" name="rphone" id="rphone" class="u-fullwidth"
                                    placeholder="Enter Your Contact No." value="">
                            </div>

                            <div class="column xl-6 tab-12">
                                <label for="rdate">Date: </label>
                                <input type="text" name="rdate" id="rdate" class="u-fullwidth" placeholder="eg: 8/01/2023"
                                    value="">
                            </div>

                            <div class="column xl-6 tab-12">
                                <label for="rparty-size">Party Size (approx):</label>
                                <input type="number" name="rparty-size" id="rparty-size" class="u-fullwidth"
                                    placeholder="eg: 4" value="">
                            </div>

                            <div class="column xl-12 message u-add-bottom">
                                <label for="radd-info">Additional Information: </label>
                                <textarea name="radd-info" id="radd-info" class="u-fullwidth"
                                    placeholder="Type your additional info here"></textarea>
                            </div>

                            <div class="rform__bottom column xl-12">
                                <div class="row">
                                    <div class="column xl-6 tab-12">
                                        <label class="rcheckbox u-add-bottom">
                                            <input type="checkbox">
                                            <span class="label-text">Add any kind of mandatory acknowledgement that
                                                customers are required to agree to here.</span>
                                        </label>
                                    </div>

                                    <div class="column xl-6 tab-12">
                                        <input name="submit" id="submit"
                                            class="btn btn--primary btn-wide btn--large u-fullwidth"
                                            value="Submit Reservation" type="submit">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div> <!-- end content-block -->

            <div class="row width-narrower row-x-center content-block content-block--grey cta-block">
                <div class="column xl-10 mob-12">
                    <h3>Book with OpenTable</h3>
                    <p class="attention-getter">
                        For a quick and convenient way to make a reservation, you can also book through <a
                            href="https://www.opentable.com/" target="_blank">OpenTable</a>.
                        Simply click the button below to secure your table in just a few easy steps.
                    </p>
                    <a href="https://www.opentable.com/" target="_blank" class="btn btn--primary u-fullwidth">Book a
                        Table</a>
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
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
                        Style Guide
                    </h1>
                </div>
            </div>
        </section>

        <!-- ## pagecontent -->
        <section class="s-pagecontent s-styles pagecontent">

            <div class="row row-x-center text-center">

                <div class="column xl-9 md-12 intro">

                    <p class="lead">Lorem ipsum Officia elit ad tempor dolore est ex incididunt incididunt occaecat culpa
                        deserunt
                        sunt labore in cillum ullamco magna in Excepteur consequat in reprehenderit proident mollit
                        incididunt officia commodo.
                        Duis ea officia sed dolor pariatur enim dolore dolore quis incididunt nulla exercitation commodo
                        veniam et ea incididunt.
                    </p>

                    <hr>
                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column xl-6 md-12">

                    <h3>Paragraph and Image</h3>

                    <p><a href="#"><img width="120" height="120" class="u-pull-left" alt="sample-image"
                                src="images/sample-image.jpg"></a>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.Cras id
                        urna. Morbi
                        tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.
                        Donec mattis,
                        purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla
                        magna.
                        Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit
                        magna id
                        neque posuere nunc justo tempus leo. </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras
                        id urna.
                        Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus
                        leo.
                        Donec mattis, purus nec placerat bibendum, dui pede condimentumodio, ac blandit ante orci ut diam.
                    </p>

                    <p>A <a href="#">link</a>,
                        <abbr title="this really isn't a very good description">abbrebation</abbr>,
                        <strong>strong text</strong>,
                        <em>em text</em>,
                        <del>deleted text</del>, and
                        <mark>this is a mark text.</mark>
                        <code>.code</code>
                    </p>

                </div>

                <div class="column xl-6 md-12">

                    <h3>Drop Caps</h3>

                    <p class="drop-cap">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean. A small river named Duden flows by their place and supplies it
                        with the
                        necessary regelialia. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem,
                        euposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum
                        odio,
                        ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum,
                        lorem tellus eleifend magna, eget fringilla velit magna id neque.
                    </p>

                    <h3>Small Print</h3>

                    <p><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero.</small></p>

                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column xl-6 md-12">

                    <h3 class="u-add-bottom">Pull Quotes</h3>

                    <p>
                        Perspiciatis nemo unde et nobis modi consequatur officia amet. Ut enim
                        tenetur provident maiores. Perspiciatis asperiores incidunt sequi
                        quisquam. Enim aut.
                    </p>

                    <figure class="pull-quote">
                        <blockquote>
                            <p>
                                When you look in the eyes of grace, when you meet grace,
                                when you embrace grace, when you see the nail prints in
                                grace’s hands and the fire in his eyes, when you feel his
                                relentless love for you - it will not motivate you to sin.
                                It will motivate you to righteousness.
                            </p>

                            <footer>
                                <cite>Judah Smith</cite>
                            </footer>
                        </blockquote>
                    </figure>


                </div>

                <div class="column xl-6 md-12">

                    <h3 class="h-add-bottom">Block Quotes</h3>

                    <blockquote cite="http://where-i-got-my-info-from.com">
                        <p>
                            For God so loved the world, that he gave his only Son, that whoever believes in
                            him should not perish but have eternal life. For God did not send his Son into
                            the world to condemn the world, but in order that the world might be
                            saved through him.
                        </p>

                        <footer>
                            <cite>
                                <a href="#0">John 3:16-17 ESV</a>
                            </cite>
                        </footer>

                    </blockquote>

                    <blockquote>
                        <p>There is a God-shaped vacuum in the heart of each man which cannot be satisfied
                            by any created thing but only by God the Creator.</p>

                        <footer>
                            <cite>Blaise Pascal</cite>
                        </footer>

                    </blockquote>

                </div>

            </div> <!-- end row -->

            <div class="row u-add-half-bottom">

                <div class="column xl-6 md-12">

                    <h3>Example Lists</h3>

                    <ol>
                        <li>Here is an example</li>
                        <li>of an ordered list.</li>
                        <li>A parent list item.
                            <ul>
                                <li>one</li>
                                <li>two</li>
                                <li>three</li>
                            </ul>
                        </li>
                        <li>A list item.</li>
                    </ol>

                    <ul class="disc">
                        <li>Here is an example</li>
                        <li>of an unordered list.</li>
                    </ul>

                    <h3>Definition Lists</h3>

                    <h5>a) Multi-line Definitions (default) </h5>

                    <dl class="dictionary-style">
                        <dt><strong>This is a term</strong></dt>
                        <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
                        <dt><strong>Another Term</strong></dt>
                        <dd>And it gets a definition too, which is this line</dd>
                        <dd>This is a 2<sup>nd</sup> definition for a single term. A <code>dt</code> may be followed by
                            multiple <code>dd</code>s.</dd>
                    </dl>

                    <h3 class="u-add-bottom">Skill Bars</h3>

                    <ul class="skill-bars">
                        <li>
                            <div class="progress percent90"><span>90%</span></div>
                            <strong>HTML</strong>
                        </li>
                        <li>
                            <div class="progress percent85"><span>85%</span></div>
                            <strong>CSS</strong>
                        </li>
                        <li>
                            <div class="progress percent70"><span>70%</span></div>
                            <strong>Javascript</strong>
                        </li>
                        <li>
                            <div class="progress percent95"><span>95%</span></div>
                            <strong>PHP</strong>
                        </li>
                        <li>
                            <div class="progress percent75"><span>75%</span></div>
                            <strong>Illustrator</strong>
                        </li>
                        <li>
                            <div class="progress percent90"><span>90%</span></div>
                            <strong>Figma</strong>
                        </li>
                    </ul>

                </div>

                <div class="column xl-6 md-12">

                    <h3 class="u-add-bottom">Buttons</h3>

                    <p>
                        <a class="btn btn--primary u-fullwidth" href="#0">Primary Button</a>
                        <a class="btn u-fullwidth" href="#0">Default Button</a>
                        <a class="btn btn--stroke u-fullwidth" href="#0">Stroke Button</a>
                    </p>

                    <h3>Stats Tabs</h3>

                    <ul class="stats-tabs">
                        <li><a href="#0">1,234 <em>Peter</em></a></li>
                        <li><a href="#0">567 <em>James</em></a></li>
                        <li><a href="#0">23,456 <em>John</em></a></li>
                        <li><a href="#0">3,456 <em>Andrew</em></a></li>
                        <li><a href="#0">456 <em>Philip</em></a></li>
                        <li><a href="#0">26 <em>Matthew</em></a></li>
                    </ul>

                    <h3 class="u-add-bottom">Code</h3>

                    <pre><code class="language-css">
    code {
    font-size: 1.4rem;
    margin: 0 .2rem;
    padding: .2rem .6rem;
    white-space: nowrap;
    background: #F1F1F1;
    border: 1px solid #E1E1E1;
    border-radius: 3px;
    }
</code></pre>

                </div>

            </div> <!-- end row -->

            <div class="row u-add-half-bottom">

                <div class="column xl-6 md-12">

                    <h1>H1 Heading Doloremque dolor voluptas est sequi omnis.</h1>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                        Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis
                        excepturi aut qui accusamus praesentium.</p>

                    <h2>H2 Heading Doloremque dolor voluptas est sequi omnis.</h2>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                        Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis
                        excepturi aut qui accusamus praesentium.</p>

                    <h3>H3 Heading Doloremque dolor voluptas est sequi omnis.</h3>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                        Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis
                        excepturi aut qui accusamus praesentium.</p>


                </div>

                <div class="column xl-6 md-12">
                    <h4>H4 Heading Doloremque dolor voluptas est sequi omnis.</h4>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                        Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis
                        excepturi aut qui accusamus praesentium.</p>

                    <h5>H5 Heading Doloremque dolor voluptas est sequi omnis.</h5>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                        Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis
                        excepturi aut qui accusamus praesentium.</p>

                    <h6>H6 Heading Doloremque dolor voluptas est sequi omnis.</h6>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                        Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis
                        excepturi aut qui accusamus praesentium.</p>


                </div>

            </div> <!-- end row -->

            <div class="row u-add-half-bottom">

                <div class="column xl-6 md-12">

                    <h3 class="u-add-bottom">Responsive Image</h3>

                    <figure>
                        <img src="images/wheel-500.jpg"
                            srcset="images/wheel-1000.jpg 1000w,
                            images/wheel-500.jpg 500w"
                            sizes="(max-width: 1000px) 100vw, 1000px" alt="">

                        <figcaption>
                            Here is some random picture.
                        </figcaption>
                    </figure>

                </div>

                <div class="column xl-6 md-12">

                    <h3 class="u-add-bottom">Responsive video</h3>

                    <div class="video-container">
                        <iframe src="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0"
                            width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen></iframe>
                    </div>

                </div>

            </div> <!-- end row -->

            <div class="row u-add-bottom">

                <div class="column xl-12">

                    <h3>Tables</h3>
                    <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and
                        <code>&lt;tbody&gt;</code> when building a <code>table</code>.
                    </p>

                    <div class="table-responsive">

                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>William J. Seymour</td>
                                    <td>34</td>
                                    <td>Male</td>
                                    <td>Azusa Street</td>
                                </tr>
                                <tr>
                                    <td>Jennie Evans Moore</td>
                                    <td>30</td>
                                    <td>Female</td>
                                    <td>Azusa Street</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column xl-12">
                    <h3>Pagination</h3>

                    <nav class="pgn">
                        <ul>
                            <li>
                                <a class="pgn__prev" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z" />
                                    </svg>
                                </a>
                            </li>
                            <li><a class="pgn__num" href="#0">1</a></li>
                            <li><span class="pgn__num current">2</span></li>
                            <li><a class="pgn__num" href="#0">3</a></li>
                            <li><a class="pgn__num" href="#0">4</a></li>
                            <li><a class="pgn__num" href="#0">5</a></li>
                            <li><span class="pgn__num dots">…</span></li>
                            <li><a class="pgn__num" href="#0">8</a></li>
                            <li>
                                <a class="pgn__next" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column xl-6 md-12">

                    <h3 class="u-add-bottom">Form Styles</h3>

                    <form>
                        <div>
                            <label for="sampleInput">Your email</label>
                            <input class="u-fullwidth" type="email" placeholder="test@mailbox.com" id="sampleInput">
                        </div>
                        <div>
                            <label for="sampleRecipientInput">Reason for contacting</label>
                            <div class="ss-custom-select">
                                <select class="u-fullwidth" id="sampleRecipientInput">
                                    <option value="Option 1">Questions</option>
                                    <option value="Option 2">Report</option>
                                    <option value="Option 3">Others</option>
                                </select>
                            </div>
                        </div>

                        <label for="exampleMessage">Message</label>
                        <textarea class="u-fullwidth" placeholder="Your message" id="exampleMessage"></textarea>

                        <label class="u-add-bottom">
                            <input type="checkbox">
                            <span class="label-text">Send a copy to yourself</span>
                        </label>

                        <input class="btn--primary u-fullwidth" type="submit" value="Submit">
                    </form>

                </div>

                <div class="column xl-6 md-12">

                    <h3>Alert Boxes</h3>

                    <br>

                    <div class="alert-box alert-box--error">
                        <p>Error Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end error -->

                    <div class="alert-box alert-box--success">
                        <p>Success Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end success -->

                    <div class="alert-box alert-box--info">
                        <p>Info Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end info -->

                    <div class="alert-box alert-box--notice">
                        <p>Notice Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end notice -->

                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="xl-12 column">
                    <h3 class="half-bottom">Grid Columns</h3>
                </div>

            </div> <!-- Row End-->

            <!--<h4>1/3 Columns</h4>  -->

            <div class="row">

                <div class="xl-4 md-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-4 md-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-4 md-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

            </div>

            <!--<h4>1/4 Columns</h4>  -->

            <div class="row">

                <div class="xl-3 md-6 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-3 md-6 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-3 md-6 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-3 md-6 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

            </div>

            <!--<h4>1/2 Columns</h4>  -->

            <div class="row">

                <div class="xl-6 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-6 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

            </div>

            <!--<h4>2/3 Columns</h4>  -->

            <div class="row">

                <div class="xl-8 md-7 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor. Integer faucibus, eros ac molestie placerat, enim
                        tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

                <div class="xl-4 md-5 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

            </div>

            <!--<h4>3/4 Columns</h4>  -->

            <div class="row">

                <div class="xl-3 md-5 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at.
                    </p>
                </div>

                <div class="xl-9 md-7 tab-12 column">
                    <p>
                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.Integer faucibus, eros ac molestie placerat, enim
                        tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor. Integer faucibus, eros ac molestie placerat, enim
                        tellus varius lacus,
                        nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                        faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>

            </div>

            <hr class="fancy">

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
                            <img src="images/gallery/gallery-01.jpg"
                                srcset="images/gallery/gallery-01.jpg 1x,
                                            images/gallery/gallery-01@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item-->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-02.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-02.jpg"
                                srcset="images/gallery/gallery-02.jpg 1x,
                                            images/gallery/gallery-02@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-03.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-03.jpg"
                                srcset="images/gallery/gallery-03.jpg 1x,
                                            images/gallery/gallery-03@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-04.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-04.jpg"
                                srcset="images/gallery/gallery-04.jpg 1x,
                                            images/gallery/gallery-04@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-05.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-05.jpg"
                                srcset="images/gallery/gallery-05.jpg 1x,
                                            images/gallery/gallery-05@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-06.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-06.jpg"
                                srcset="images/gallery/gallery-06.jpg 1x,
                                            images/gallery/gallery-06@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-07.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-07.jpg"
                                srcset="images/gallery/gallery-07.jpg 1x,
                                            images/gallery/gallery-07@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-08.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-08.jpg"
                                srcset="images/gallery/gallery-08.jpg 1x,
                                            images/gallery/gallery-08@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->
                </div> <!-- end grid-list-items -->

            </div>
        </div> <!-- end s-gallery__inner -->
    </section> <!-- end s-gallery -->


    <!-- # footer
                ================================================== -->
    <footer id="footer" class="s-footer">

        <div class="row s-footer__top row-x-center">
            <div class="column xl-4 lg-6 tab-8 mob-12">
                <a href="reservations.html" class="btn btn--primary btn--large u-fullwidth">Book a Table</a>
            </div>
        </div>

        <div class="row s-footer__main-content">

            <div class="column xl-6 md-12 s-footer__block s-footer__about">
                <div class="s-footer__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas illum quasi facere libero,
                    fugiat laboriosam possimus amet consectetur adipisicing elit reprehenderit eveniet tempore quisquam ipsa
                    id esse. Facere ratione dignissimos.
                </p>
            </div> <!-- end s-footer__about -->

            <div class="column xl-6 md-12 s-footer__block s-footer__info">
                <div class="row">
                    <div class="column xl-6 lg-12">
                        <h5>Location</h5>
                        <p>
                            456 Elm Street, Los Angeles <br>
                            CA 90001
                        </p>
                    </div>
                    <div class="column xl-6 lg-12">
                        <h5>Contacts</h5>
                        <ul class="link-list">
                            <li><a href="mailto:#0">contact@maillard.com</a></li>
                            <li><a href="tel:+2135551212">(213) 555-1234</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h5>Opening Hours</h5>
                        <ul class="opening-hours">
                            <li><span class="opening-hours__days">Weekdays</span><span class="opening-hours__time">10:00am
                                    - 9:00pm</span></li>
                            <li><span class="opening-hours__days">Weekends</span><span class="opening-hours__time">9:00am
                                    - 10:00pm</span></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end s-footer__info -->

        </div> <!-- end  s-footer__main-content -->

        <div class="row s-footer__bottom">

            <div class="column xl-6 lg-12">
                <ul class="s-footer__social social-list">
                    <li>
                        <a href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                <path
                                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                </path>
                            </svg>
                            <span class="u-screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                <path
                                    d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                </path>
                            </svg>
                            <span class="u-screen-reader-text">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                <path
                                    d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                </path>
                                <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                <path
                                    d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                </path>
                            </svg>
                            <span class="u-screen-reader-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M8.31 10.28a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zm0 3.8a1.31 1.31 0 1 1 0-2.61 1.31 1.31 0 1 1 0 2.61zm7.38-3.8a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zM17 12.77a1.31 1.31 0 1 1-1.31-1.3 1.31 1.31 0 0 1 1.31 1.3z">
                                </path>
                                <path
                                    d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm7.38 10.77a3.69 3.69 0 0 1-6.2 2.71L12 16.77l-1.18-1.29a3.69 3.69 0 1 1-5-5.44l-1.2-1.3H7.3a8.33 8.33 0 0 1 9.41 0h2.67l-1.2 1.31a3.71 3.71 0 0 1 1.2 2.72z">
                                </path>
                                <path
                                    d="M14.77 9.05a7.19 7.19 0 0 0-5.54 0A4.06 4.06 0 0 1 12 12.7a4.08 4.08 0 0 1 2.77-3.65z">
                                </path>
                            </svg>
                            <span class="u-screen-reader-text">Tripadvisor</span>
                        </a>
                    </li>
                </ul>
            </div> <!-- end section-footer__social -->

            <div class="column xl-6 lg-12">
                <p class="ss-copyright">
                    <span>© Copyright Maillard 2023</span>
                    <span>Design by <a href="https://styleshout.com/">StyleShout</a></span>
                </p>
            </div>

        </div> <!-- end section-footer__bottom -->

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z"
                        fill-rule="nonzero" />
                </svg>
            </a>
            <span>Back To Top</span>
        </div> <!-- end ss-go-top -->

    </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->




    </div>

    </div> <!-- end row -->

    <div class="row u-add-half-bottom">

        <div class="column xl-6 md-12">

            <h1>H1 Heading Doloremque dolor voluptas est sequi omnis.</h1>
            <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi
                aut qui accusamus praesentium.</p>

            <h2>H2 Heading Doloremque dolor voluptas est sequi omnis.</h2>
            <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi
                aut qui accusamus praesentium.</p>

            <h3>H3 Heading Doloremque dolor voluptas est sequi omnis.</h3>
            <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi
                aut qui accusamus praesentium.</p>


        </div>

        <div class="column xl-6 md-12">
            <h4>H4 Heading Doloremque dolor voluptas est sequi omnis.</h4>
            <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi
                aut qui accusamus praesentium.</p>

            <h5>H5 Heading Doloremque dolor voluptas est sequi omnis.</h5>
            <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi
                aut qui accusamus praesentium.</p>

            <h6>H6 Heading Doloremque dolor voluptas est sequi omnis.</h6>
            <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel.
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi
                aut qui accusamus praesentium.</p>


        </div>

    </div> <!-- end row -->

    <div class="row u-add-half-bottom">

        <div class="column xl-6 md-12">

            <h3 class="u-add-bottom">Responsive Image</h3>

            <figure>
                <img src="images/wheel-500.jpg"
                    srcset="images/wheel-1000.jpg 1000w,
                            images/wheel-500.jpg 500w"
                    sizes="(max-width: 1000px) 100vw, 1000px" alt="">

                <figcaption>
                    Here is some random picture.
                </figcaption>
            </figure>

        </div>

        <div class="column xl-6 md-12">

            <h3 class="u-add-bottom">Responsive video</h3>

            <div class="video-container">
                <iframe src="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0"
                    width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen
                    allowfullscreen></iframe>
            </div>

        </div>

    </div> <!-- end row -->

    <div class="row u-add-bottom">

        <div class="column xl-12">

            <h3>Tables</h3>
            <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code>
                when building a <code>table</code>.</p>

            <div class="table-responsive">

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>William J. Seymour</td>
                            <td>34</td>
                            <td>Male</td>
                            <td>Azusa Street</td>
                        </tr>
                        <tr>
                            <td>Jennie Evans Moore</td>
                            <td>30</td>
                            <td>Female</td>
                            <td>Azusa Street</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div> <!-- end row -->

    <div class="row">

        <div class="column xl-12">
            <h3>Pagination</h3>

            <nav class="pgn">
                <ul>
                    <li>
                        <a class="pgn__prev" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z" />
                            </svg>
                        </a>
                    </li>
                    <li><a class="pgn__num" href="#0">1</a></li>
                    <li><span class="pgn__num current">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li>
                        <a class="pgn__next" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div> <!-- end row -->

    <div class="row">

        <div class="column xl-6 md-12">

            <h3 class="u-add-bottom">Form Styles</h3>

            <form>
                <div>
                    <label for="sampleInput">Your email</label>
                    <input class="u-fullwidth" type="email" placeholder="test@mailbox.com" id="sampleInput">
                </div>
                <div>
                    <label for="sampleRecipientInput">Reason for contacting</label>
                    <div class="ss-custom-select">
                        <select class="u-fullwidth" id="sampleRecipientInput">
                            <option value="Option 1">Questions</option>
                            <option value="Option 2">Report</option>
                            <option value="Option 3">Others</option>
                        </select>
                    </div>
                </div>

                <label for="exampleMessage">Message</label>
                <textarea class="u-fullwidth" placeholder="Your message" id="exampleMessage"></textarea>

                <label class="u-add-bottom">
                    <input type="checkbox">
                    <span class="label-text">Send a copy to yourself</span>
                </label>

                <input class="btn--primary u-fullwidth" type="submit" value="Submit">
            </form>

        </div>

        <div class="column xl-6 md-12">

            <h3>Alert Boxes</h3>

            <br>

            <div class="alert-box alert-box--error">
                <p>Error Message. Your Message Goes Here.</p>
                <span class="alert-box__close"></span>
            </div><!-- end error -->

            <div class="alert-box alert-box--success">
                <p>Success Message. Your Message Goes Here.</p>
                <span class="alert-box__close"></span>
            </div><!-- end success -->

            <div class="alert-box alert-box--info">
                <p>Info Message. Your Message Goes Here.</p>
                <span class="alert-box__close"></span>
            </div><!-- end info -->

            <div class="alert-box alert-box--notice">
                <p>Notice Message. Your Message Goes Here.</p>
                <span class="alert-box__close"></span>
            </div><!-- end notice -->

        </div>

    </div> <!-- end row -->

    <div class="row">

        <div class="xl-12 column">
            <h3 class="half-bottom">Grid Columns</h3>
        </div>

    </div> <!-- Row End-->

    <!--<h4>1/3 Columns</h4>  -->

    <div class="row">

        <div class="xl-4 md-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-4 md-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-4 md-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

    </div>

    <!--<h4>1/4 Columns</h4>  -->

    <div class="row">

        <div class="xl-3 md-6 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-3 md-6 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-3 md-6 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-3 md-6 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

    </div>

    <!--<h4>1/2 Columns</h4>  -->

    <div class="row">

        <div class="xl-6 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-6 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

    </div>

    <!--<h4>2/3 Columns</h4>  -->

    <div class="row">

        <div class="xl-8 md-7 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor. Integer faucibus, eros ac molestie placerat, enim tellus
                varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

        <div class="xl-4 md-5 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

    </div>

    <!--<h4>3/4 Columns</h4>  -->

    <div class="row">

        <div class="xl-3 md-5 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at.
            </p>
        </div>

        <div class="xl-9 md-7 tab-12 column">
            <p>
                Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.Integer faucibus, eros ac molestie placerat, enim tellus
                varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor. Integer faucibus, eros ac molestie placerat, enim tellus
                varius lacus,
                nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                faucibus at, tincidunt eget, porttitor non, dolor.
            </p>
        </div>

    </div>

    <hr class="fancy">

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
                            <img src="images/gallery/gallery-01.jpg"
                                srcset="images/gallery/gallery-01.jpg 1x,
                                            images/gallery/gallery-01@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item-->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-02.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-02.jpg"
                                srcset="images/gallery/gallery-02.jpg 1x,
                                            images/gallery/gallery-02@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-03.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-03.jpg"
                                srcset="images/gallery/gallery-03.jpg 1x,
                                            images/gallery/gallery-03@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-04.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-04.jpg"
                                srcset="images/gallery/gallery-04.jpg 1x,
                                            images/gallery/gallery-04@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-05.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-05.jpg"
                                srcset="images/gallery/gallery-05.jpg 1x,
                                            images/gallery/gallery-05@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-06.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-06.jpg"
                                srcset="images/gallery/gallery-06.jpg 1x,
                                            images/gallery/gallery-06@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-07.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-07.jpg"
                                srcset="images/gallery/gallery-07.jpg 1x,
                                            images/gallery/gallery-07@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->

                    <div class="gallery-items__item grid-list-items__item">
                        <a href="images/gallery/large/l-gallery-08.jpg" class="gallery-items__item-thumb glightbox">
                            <img src="images/gallery/gallery-08.jpg"
                                srcset="images/gallery/gallery-08.jpg 1x,
                                            images/gallery/gallery-08@2x.jpg 2x"
                                alt="">
                        </a>
                    </div> <!-- end gallery-items__item -->
                </div> <!-- end grid-list-items -->

            </div>
        </div> <!-- end s-gallery__inner -->
    </section> <!-- end s-gallery -->


  @endsection

<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('') }}assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}assets/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="96x96" href=".t/img/favicon.png">
    <meta name="author" content="Holger Koenemann">
    <meta name="generator" content="Eleventy v2.0.0">
    <meta name="HandheldFriendly" content="true">
    <title>Stride HTML Template - Frontpage one</title>
    <link rel="stylesheet" href="{{ asset('') }}assets/css/theme.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
        <div class="container">
            <a class="navbar-brand pe-4 fs-4" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-layers-half" viewbox="0 0 16 16">
                    <path
                        d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                </svg>
                <span class="ms-1 fw-bolder">Stride</span>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  @foreach ($menuos as $menu)
                  <li class="nav-item">
                    <a class="nav-link" href="#{{$menu['name']}}" aria-label="Brings you to the frontpage">
                        {{$menu['name']}}
                    </a>
                </li>
                  @endforeach
                  
                   

                </ul>
                <a href="https://templatedeck.com/stride-html-template.html" data-splitbee-event="Click Download"
                    aria-label="Download this template" class="link-dark pb-1 link-fancy me-2">
                    Download this Template <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-download ms-1" viewBox="0 0 16 16">
                        <path
                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>
    <main>
        <div class="w-100 overflow-hidden bg-gray-100" id="Home">
            <div class="container position-relative">
              @if ($home != null)
                <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
                    style="background-image: url({{ $home['photo'] }});">
                </div>

                <div class="row">

                      <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
                          <h1 class="display-1 fw-bold mt-5">{{ $home['title'] ?? 'Saqlanmagan' }}</h1>
                          <p class="lead">{{ $home['text'] ?? 'Saqlanmagan' }}</p>
                          <a href="#" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5">{{ $home['link'] ?? 'Saqlanmagan' }}</a>
                      </div>

                </div>
            </div>
            @endif

        </div>

        <div class="py-vh-5 w-100 overflow-hidden" id="Services">
            <div class="container">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-8" data-aos="fade-down">
                        <h2 class="display-6">Okay, there are three really good reasons for us. There are no more than
                            three, but we think three is a reasonable good number of good stuff.</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <span class="h5 fw-lighter">01.</span>
                        <h3 class="py-5 border-top border-dark">We rented this fancy startup office in an old factory
                            building.</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus culpa, voluptatibus ex
                            itaque, sapiente a consequatur inventore beatae, ipsam debitis omnis consequuntur iste
                            asperiores. Similique quisquam debitis corrupti deserunt, dolor.</p>
                        <a href="#" class="link-fancy">Learn more
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 py-vh-4 pb-0" data-aos="fade-up" data-aos-delay="400">
                        <span class="h5 fw-lighter">02.</span>
                        <h3 class="py-5 border-top border-dark">We don´t know exactly what we are doing. But thats good
                            because we can´t break something intentionally.</h3>
                        <p>Lorem, ipsum dolor sit adipisicing elit. Minus culpa, voluptatibus ex itaque, sapiente a
                            consequatur inventore beatae, ipsam debitis omnis consequuntur iste asperiores. Similique
                            quisquam debitis corrupti deserunt, dolor.</p>
                        <a href="#" class="link-fancy">Learn more
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-4 py-vh-6 pb-0" data-aos="fade-up" data-aos-delay="600">
                        <span class="h5 fw-lighter">03.</span>
                        <h3 class="py-5 border-top border-dark">There is no real number three reason. So please read
                            again number one and two.</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus culpa, voluptatibus ex
                            itaque, sapiente a consequatur inventore beatae, ipsam debitis omnis consequuntur iste
                            asperiores. Similique quisquam debitis corrupti deserunt, dolor.</p>
                        <a href="#" class="link-fancy">Learn more
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="Aboutus">
            <div class="container">

                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="row gx-5 d-flex">
                            <div class="col-md-11">
                                <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end"
                                    data-aos="fade-right"
                                    style="background-image: url({{ asset('') }}assets/img/webp/people15.webp);--bs-aspect-ratio: 50%;">
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end"
                                    data-aos="fade-up"
                                    style="background-image: url({{ asset('') }}assets/img/webp/interior42.webp);">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left"
                                    style="background-image: url({{ asset('') }}assets/img/webp/people4.webp);--bs-aspect-ratio: 150%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="py-5 border-top border-dark" data-aos="fade-left">We did some interesting stuff in
                            our field of work. For example we collect a lot of these free photos and use them on our
                            website.</h3>
                        <p data-aos="fade-left" data-aos-delay="200">Donec id elit non mi porta gravida at eget metus.
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.
                        </p>
                        <p>
                            <a href="#" class="link-fancy link-dark" data-aos="fade-left"
                                data-aos-delay="400">Learn more
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-vh-5 w-100 overflow-hidden" id="Numbers">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h3 class="py-5 border-top border-dark" data-aos="fade-right">Our magic numbers</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="display-6 mb-5" data-aos="fade-down">There are some important numbers for
                                    us. They are just numbers without any meaning, but we just love them.</h2>
                            </div>
                            <div class="col-lg-6" data-aos="fade-up">
                                <div class="display-1 fw-bold py-4">42%</div>
                                <p class="text-black-50">Donec id elit non mi porta gravida at eget metus. Fusce
                                    dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec
                                    sed odio dui.</p>
                            </div>
                            <div class="col-lg-6" data-aos="fade-up">
                                <div class="display-1 fw-bold py-4">+300</div>
                                <p class="text-black-50">Donec id elit non mi porta gravida at eget metus. Fusce
                                    dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec
                                    sed odio dui.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="position-relative overflow-hidden w-100 bg-light" id="Gallery">
            <div class="container-fluid">
                <div class="row overflow-scroll">
                    <div class="col-12">
                        <div class="row vw-100 px-0 py-vh-5 d-flex align-items-center scrollx">
                            <div class="col-md-2" data-aos="fade-up">
                                <img src="{{ asset('') }}assets/img/webp/interior37.webp"
                                    class="rounded shadow img-fluid" alt="nice gallery image" width="512"
                                    height="341">
                            </div>

                            <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('') }}assets/img/webp/people1.webp"
                                    class="img-fluid rounded shadow" alt="nice gallery image" width="1164"
                                    height="776">
                            </div>

                            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                                <img src="{{ asset('') }}assets/img/webp/people2.webp"
                                    class="img-fluid rounded shadow" alt="nice gallery image" width="844"
                                    height="1054">
                            </div>

                            <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                                <img src="{{ asset('') }}assets/img/webp/interior29.webp"
                                    class="img-fluid rounded shadow" alt="nice gallery image" width="844"
                                    height="562">
                            </div>

                            <div class="col-md-2" data-aos="fade-up" data-aos-delay="800">
                                <img src="{{ asset('') }}assets/img/webp/people23.webp"
                                    class="rounded shadow img-fluid" alt="nice gallery image" width="512"
                                    height="341">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container py-vh-4 w-100 overflow-hidden">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h3 class="py-5 border-top border-dark" data-aos="fade-right">What our clients say</h3>
                </div>
                <div class="col-md-7" data-aos="fade-left">
                    <blockquote>
                        <div class="fs-4 my-3 fw-light pt-4 border-bottom pb-3">“I´am the CEO of this company. So maybe
                            you think "he will tell us something super awesome about it only". But no. Its a really
                            strange place to work with creepy people all around.
                            They do some computer stuff I don´t understand. But I wear expensive Glasses and a Patagonia
                            Hoodie. So I´am fine with it.”</div>
                        <img src="{{ asset('') }}assets/img/webp/person11.webp" width="64" height="64"
                            class="img-fluid rounded-circle me-3" alt="" data-aos="fade">
                        <span><span class="fw-bold">John Doe,</span>
                            CEO of Stride Ltd.</span>
                    </blockquote>
                </div>

            </div>
        </div>

        <div class="py-vh-6 bg-gray-900 text-light w-100 overflow-hidden" id="Work">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8 text-center" data-aos="fade">
                            <p class="text-secondary lead">Let´s start a project together!</p>
                            <h2 class="display-6 mb-5">Hell no! This button is linked to a none working contact form. A
                                none working form without any user feedback. So you might think you done something
                                wrong. But in reality we just don´t want to start anything with you or anyone else.</h2>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-warning btn-xl shadow me-3 mt-4"
                                data-aos="fade-down">Get in contact</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-light w-100 overflow-hidden" id="Testimonials">
            <div class="container py-vh-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 text-center">
                        <h2 class="display-6">Loved by people all around the globe</h2>
                        <p class="lead">Our spaces and offices are soooooo lovely, no one would give us a negative
                            rating! And look at these trustworthy avatar pictures! Trust us!</p>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row row-cols-1 row-cols-md-2 g-5 d-flex align-items-center">

                            <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                                <div class="card p-4 mt-3 border-0">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"That service is really really good. And I don´t say that because they
                                                pay me a lot of money. I say that because they don´t pay me more money
                                                anymore if I don´t say it..."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <div>
                                                <span class="h6 fw-5">Jane Doemunsky</span><br>
                                                <small class="text-muted">COO, The Boo Corp.</small>
                                            </div>
                                            <img src="{{ asset('') }}assets/img/webp/person9.webp" width="48"
                                                height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 shadow mt-3 border-0" data-aos="fade-down">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"I really don´t get what they do. Something with Crypto, NFT´s, SaaS and
                                                Cyber Security. Maybe an App for Kids...? But they have this nice
                                                website...so who cares what they do as long as they are good at it."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Jenny Matrix</span><br>
                                                <small class="text-muted">Daughter of Col. John Matrix,
                                                    Commando.</small>
                                            </p>
                                            <img src="{{ asset('') }}assets/img/webp/person3.webp" width="48"
                                                height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 mt-3 border-0" data-aos="fade-left">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"I don´t know if they are good at what they do. But they have nice coffee
                                                and a shiny brand new startup office with bikes on the wall and all that
                                                stuff."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Rustin Cohle</span><br>
                                                <small class="text-muted">Detective, Somewhere in the swamps</small>
                                            </p>
                                            <img src="{{ asset('') }}assets/img/webp/person8.webp" width="48"
                                                height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 mt-3 border-0" data-aos="fade-right">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"Its not good at all but I give it five stars because I killed
                                                (accidentally) the CEO´s cat with a lawnmover."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Richard Thornburg</span><br>
                                                <small class="text-muted">News Reporter, KFLW-TV</small>
                                            </p>
                                            <img src="{{ asset('') }}assets/img/webp/person14.webp"
                                                width="48" height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 mt-3 border-0" data-aos="fade-up">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                            </svg>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"I´am just a guy who uploads his picture to unsplash.com so that others
                                                can use me as placeholder for stupid sample avatars. I don´t even know
                                                that my face is on this website."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Harry Walters</span><br>
                                                <small class="text-muted">Gangster, In Bruges</small>
                                            </p>
                                            <img src="{{ asset('') }}assets/img/webp/person13.webp"
                                                width="48" height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-4">
                                <div class="card p-4 shadow mt-3 border-0" data-aos="fade-left">
                                    <div class="card-body">
                                        <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                        </div>
                                        <blockquote class="blockquote">
                                            <p>"Okay, okay, I give it five stars. But do you know what: There is a
                                                infinit number of stars out there. So five means nothing."</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <p class="card-text">
                                                <span class="h6 fw-5">Lizzie Stark</span><br>
                                                <small class="text-muted">Head of Security, Brummagem Boys</small>
                                            </p>
                                            <img src="{{ asset('') }}assets/img/webp/person18.webp"
                                                width="48" height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="small py-vh-3 w-100 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up">
                        <div class="d-flex">
                            <div class="col-md-3 flex-fill pt-3 pe-3 pe-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                    fill="currentColor" class="bi bi-box-seam" viewbox="0 0 16 16">
                                    <path
                                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                </svg>
                            </div>
                            <div class="col-md-9 flex-fill">
                                <h3 class="h5 my-2">Delivery Service</h3>
                                <p>If we had any physical goods we would deliver them to your door steps. Of course in
                                    time and to the right adress. But we have no products...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up" data-aos-delay="200">
                        <div class="d-flex">
                            <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                    fill="currentColor" class="bi bi-card-checklist" viewbox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </div>
                            <div class="col-md-9 flex-fill">
                                <h3 class="h5 my-2">Independently Checked</h3>
                                <p>Maybe we would do something to ensure that you get what you ordered. But you can´t
                                    order anything here, so we can give you a 100% gurantee that anything would be
                                    great!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="d-flex">
                            <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                    fill="currentColor" class="bi bi-window-sidebar" viewbox="0 0 16 16">
                                    <path
                                        d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    <path
                                        d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
                                </svg>
                            </div>
                            <div class="col-md-9 flex-fill">
                                <h3 class="h5 my-2">Online Support</h3>
                                <p>Okay, we have this crazy online support form. Fill it out and the content will be
                                    mailed to you as PDF. Print it out. Than send it via Fax to our super duper hidden
                                    Fax number.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-vh-3 border-top" data-aos="fade" data-aos-delay="200">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <h3 class="fs-2 fw-light">Stay in touch with our<span class="fw-bold">
                            monthly and free</span>
                        newsletter!
                    </h3>
                </div>
                <div class="col-12 col-lg-8 text-center">
                    <div class="row">
                        <div class="grouped-inputs border bg-light p-2">
                            <div class="row">
                                <div class="col">
                                    <form class="form-floating">
                                        <input type="email" class="form-control p-3" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </form>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-dark py-3 px-5">Subscribe</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="container small border-top">
            <div class="row py-5 d-flex justify-content-between">

                <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-layers-half" viewbox="0 0 16 16">
                        <path
                            d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                    </svg>
                    <address class="text-secondary mt-3">
                        <strong>Stride, Inc.</strong><br>
                        1355 Market St, Suite 900<br>
                        San Francisco, CA 94103<br>
                        <abbr title="Phone">P:</abbr>
                        (123) 456-7890
                    </address>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
                    <h3 class="h6 mb-3">Company</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" aria-current="page" href="#">Lorem
                                ipsum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Dolor sitam est</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Sed odio cras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Commodo tortor ac</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-end p-5">
                    <h3 class="h6 mb-3">Products</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" aria-current="page" href="#">Fusce dapibus
                                est</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Donec sed dui</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Tortor mauris</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Ut fermentum massa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" href="#">Magna mollis</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 p-5">
                    <h3 class="h6 mb-3">Subpages</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link link-secondary ps-0" aria-current="page" href="404.html">404 System
                                Page</a>
                            <a class="nav-link link-secondary ps-0" aria-current="page" href="register.html">Register
                                System Page</a>
                            <a class="nav-link link-secondary ps-0" aria-current="page" href="content.html">Simple
                                Text Content Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container text-center py-3 small">Made by <a href="https://templatedeck.com" class="link-fancy"
                target="_blank">templatedeck.com</a>
        </div>
    </footer>

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
        });
    </script>

    <script>
        let scrollpos = window.scrollY
        const header = document.querySelector(".navbar")
        const header_height = header.offsetHeight

        const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
        const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

        window.addEventListener('scroll', function() {
            scrollpos = window.scrollY;

            if (scrollpos >= header_height) {
                add_class_on_scroll()
            } else {
                remove_class_on_scroll()
            }

            console.log(scrollpos)
        })
    </script>

</body>

</html>

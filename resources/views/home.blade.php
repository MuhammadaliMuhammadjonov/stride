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
              @if ($service != null)

              <!-- {{$service}} -->

                  <!-- {{$service_items}} -->
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-8" data-aos="fade-down">
                        <h2 class="display-6">{{$service['title'] ?? 'Saqlanmagan'}}.</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    @foreach ($service_items as $item)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">

                        <span class="h5 fw-lighter">{{$item->id}}</span>
                        <h3 class="py-5 border-top border-dark">{{$item->title}}</h3>
                        <p>{{$item->text}}</p>
                        <a href="#" class="link-fancy">{{$item->link}}
                        </a>
                    </div>

                  @endforeach

                    <!-- <div class="col-md-6 col-lg-4 py-vh-4 pb-0" data-aos="fade-up" data-aos-delay="400">
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
                    </div> -->
                </div>
                @endif
            </div>
        </div>

        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="Aboutus">
            <div class="container">

                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="row gx-5 d-flex">
                            <div class="col-md-11">
                            <!-- {{$aboutus['photo']}} -->
                        @if(isset($aboutus_image))

                        @if(isset($aboutus_image) && isset($aboutus_image[0]))
    <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end"
        data-aos="fade-right"
        style="background-image: url({{ asset('') . 'storage/' . $aboutus_image[0] }});--bs-aspect-ratio: 50%;">
    </div>
@endif

@if(isset($aboutus_image) && isset($aboutus_image[1]))
    <div class="col-md-5 offset-md-1">
        <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end"
            data-aos="fade-up"
            style="background-image: url({{ asset('') . 'storage/' . $aboutus_image[1] }});">
        </div>
    </div>
@endif

@if(isset($aboutus_image) && isset($aboutus_image[2]))
    <div class="col-md-6">
        <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left"
            style="background-image: url({{ asset('') . 'storage/' . $aboutus_image[2] }});--bs-aspect-ratio: 100%;">
        </div>
    </div>
@endif

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="py-5 border-top border-dark" data-aos="fade-left">{{$aboutus->title ?? 'Saqlanmagan'}}</h3>
                        <p data-aos="fade-left" data-aos-delay="200">{{$aboutus->text ?? 'Saqlanmagan'}}
                        </p>
                        <p>
                            <a href="#" class="link-fancy link-dark" data-aos="fade-left"
                                data-aos-delay="400">{{$aboutus->link ?? 'Saqlanmagan'}}
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
                                <h2 class="display-6 mb-5" data-aos="fade-down">{{$numbers->title ?? 'Saqlanmagan'}}</h2>
                            </div>
                    @foreach ($number_items as $item)
                            <div class="col-lg-6" data-aos="fade-up">
                                <div style='font-size:34px;' class="display-1 fw-bold py-2">{{$item->title}}</div>
                                <p class="text-black-50">{{$item->text}}</p>
                                <!-- <p class='text-black-50'>{{$item->description}}</p> -->
                            </div>
                            @endforeach
                            <!-- <div class="col-lg-6" data-aos="fade-up">
                                <div class="display-1 fw-bold py-4">+300</div>
                                <p class="text-black-50">Donec id elit non mi porta gravida at eget metus. Fusce
                                    dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec
                                    sed odio dui.</p>
                            </div> -->
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
                        @if(isset($gallery_image))

        @if(isset($gallery_image) && isset($gallery_image[0]))
    <div class="col-md-2" data-aos="fade-up">
        <img src="{{asset('').'storage/'.$gallery_image[0]}}"
            class="rounded shadow img-fluid" alt="nice gallery image" width="512" height="341">
    </div>
    @endif

    @if(isset($gallery_image) && isset($gallery_image[1]))
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
        <img src="{{asset('').'storage/'.$gallery_image[1]}}"
            class="img-fluid rounded shadow" alt="nice gallery image" width="1164" height="776">
    </div>
    @endif

    @if(isset($gallery_image) && isset($gallery_image[2]))

    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
        <img src="{{asset('').'storage/'.$gallery_image[2]}}"
            class="img-fluid rounded shadow" alt="nice gallery image" width="844" height="1054">
    </div>

    @endif

    @if(isset($gallery_image) && isset($gallery_image[3]))

    <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
        <img src="{{asset('').'storage/'.$gallery_image[3]}}"
            class="img-fluid rounded shadow" alt="nice gallery image" width="844" height="562">
    </div>
    @endif
    @if(isset($gallery_image) && isset($gallery_image[4]))
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="800">
        <img src="{{ asset('') . 'storage/' . $gallery_image[4] }}"
            class="rounded shadow img-fluid" alt="nice gallery image" width="512" height="341">
    </div>
@endif

@else
    <div class="col-md-12 text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd7Lt6V-hg4IZ3WJcf0-VHwp9-SCzZ3u-PNw&s"
            class="img-fluid rounded shadow" alt="default gallery image">
    </div>
@endif

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
                        <div class="fs-4 my-3 fw-light pt-4 border-bottom pb-3">“I´am the CEO of this company. So maybe you think "he will tell us something super awesome about it only". But no. Its a really strange place to work with creepy people all around. They do some computer stuff I don´t understand. But I wear expensive Glasses and a Patagonia Hoodie. So I´am fine with it.”</div>
    @if(isset($work['image']))
                        <img src="{{$work['photo']}}" width="64" height="64"
                            class="img-fluid rounded-circle me-3" alt="" data-aos="fade">
    
                            @else
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd7Lt6V-hg4IZ3WJcf0-VHwp9-SCzZ3u-PNw&s" width="64" height="64"
                            class="img-fluid rounded-circle me-3" alt="" data-aos="fade">
                            @endif
                        <span><span class="fw-bold">John Doe</span>
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
                            <p class="text-secondary lead">{{$work->title ?? 'Saqlanmagan'}}</p>
                            <h2 class="display-6 mb-5">{{$work->text ?? 'Saqlanmagan'}}</h2>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-warning btn-xl shadow me-3 mt-4"
                                data-aos="fade-down">{{$work->link ?? 'Saqlanmagan'}}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-light w-100 overflow-hidden" id="Testimonials">
            <div class="container py-vh-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 text-center">
                        <h2 class="display-6">{{$testimonials->title}}</h2>
                        <p class="lead">{{$testimonials->text}}</p>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row row-cols-1 row-cols-md-2 g-5 d-flex align-items-center">
                            <!-- {{$testimonials_items}} -->
                    @foreach ($testimonials_items as $item)
{{$item['image'][0]}}
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
                                            <p>{{$item->description}}</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-between border-top pt-3">
                                            <div>
                                                <span class="h6 fw-5">{{$item->title}}</span><br>
                                                <small class="text-muted">{{$item->text}}</small>
                                            </div>
                                
                                            <img src="{{ asset('').'storage/'.str_replace('\/', '/', $item['image'][0]) }}" width="48"
                                                height="48" class="rounded-circle" alt=""
                                                data-aos="fade">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


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

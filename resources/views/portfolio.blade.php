@extends('layouts.master')
@section('content')
    <nav id="ht-main-nav">
        <a href="#" class="ht-nav-toggle">
            <i class="bi bi-x-lg"></i>
        </a>
        <a class="navbar-brand logo" href="index.html">
            <img class="img-fluid" src="{{ asset('assets/portal/images/miracle-logo.png') }}" alt="" />
        </a>
        <p class="mt-3">
            مرحبًا بكم في شركة ميراكل، حيث يلتقي الابتكار بالتميز. نحن ملتزمون
            بتقديم مجموعة شاملة من الخدمات المصممة لرفع مستوى علامتك التجارية
            وزيادة إمكانات عملك. شغفنا يكمن في تحويل رؤيتك إلى واقع من خلال خبرتنا
            في مختلف المجالات الابداعية و الأستراتيجية.
        </p>
        <div class="form-info">
            <h4 class="mb-4">تفاصيل التواصل</h4>
            <div class="contact-link">
                <ul class="contact-info list-unstyled">
                    <li>
                        <i class="flaticon flaticon-gps-1"></i>
                        <span>العنوان</span>
                        <p>اسوان شارع المطار امام مطعم المصري</p>
                    </li>
                    <li>
                        <i class="flaticon flaticon-email"></i>
                        <span>البريد الألكتروني:</span>
                        <a href="mailto:themeht23@gmail.com">miraclecompany@gmail.com</a>
                    </li>
                    <li>
                        <i class="flaticon flaticon-mobile"></i>
                        <span>الهاتف:</span>
                        <a href="tel:01273061019​">01273061019​</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="social-icons mt-5">
            <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="flaticon-facebook-app-symbol"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-twitter-2"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-linkedin-1"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>



    <section class="page-title">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h1>معرض الأعمال</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="bi bi-house-door me-1"></i>الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">الصفحات</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                معرض الأعمال
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-wave">
            <img src="{{ asset('assets/portal/images/page-bg.svg') }}" alt="" />
        </div>
    </section>


    <div class="page-content">
        <!--portfolio start-->

        <section>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="theme-title">
                            <h6>معرض الأعمال</h6>
                            <h2>هيا بنا نلقي نظرة عل معرض الأعمال</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-lg-end">
                        <div class="portfolio-filter">
                            <button data-filter="" class="is-checked">الكل</button>
                            <button data-filter=".cat1">التصميم</button>
                            <button data-filter=".cat2">الرسوم المتحركة</button>
                            <button data-filter=".cat3">المونتاج</button>
                            <button data-filter=".cat4">المواقع</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="light-bg position-relative z-index-1">
            <div class="container">
                <div class="row mt-n15">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid columns-3 row popup-gallery">
                            <div class="grid-sizer"></div>
                            <div class="grid-item cat3">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('assets/portal/images/portfolio/01.jpg') }}" alt="" />
                                        <a class="portfolio-btn" href="{{ route('feasability') }}">
                                            <i class="bi bi-arrow-down-right"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <span>دراسة الجدوة</span>
                                        <h4>
                                            <a href="{{ route('feasability') }}">دراسات الجدوة</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat3">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('assets/portal/images/portfolio/02.jpg') }}" alt="" />
                                        <a class="portfolio-btn" href="{{ route('paid-ads') }}">
                                            <i class="bi bi-arrow-down-right"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <span>الدعاية</span>
                                        <h4>
                                            <a href="{{ route('paid-ads') }}">الدعاية والاعلان</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat4">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('assets/portal/images/portfolio/03.jpg') }}" alt="" />
                                        <a class="portfolio-btn" href="{{ route('web-development') }}">
                                            <i class="bi bi-arrow-down-right"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <span>البرمجة</span>
                                        <h4>
                                            <a href="{{ route('web-development') }}">تصميم المواقع</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat2">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('assets/portal/images/portfolio/04.jpg') }}" alt="" />
                                        <a class="portfolio-btn" href="{{ route('animations') }}">
                                            <i class="bi bi-arrow-down-right"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <span>الرسوم المتحركة</span>
                                        <h4>
                                            <a href="{{ route('animations') }}"> الرسوم المتحركة</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat2">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('assets/portal/images/portfolio/05.jpg') }}" alt="" />
                                        <a class="portfolio-btn" href="{{ route('products-photograhping') }}">
                                            <i class="bi bi-arrow-down-right"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <span>التصوير</span>
                                        <h4>
                                            <a href="{{ route('products-photograhping') }}">تصوير المنتجات</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item cat1">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('assets/portal/images/portfolio/06.jpg') }}" alt="" />
                                        <a class="portfolio-btn" href="{{ route('web-development') }}">
                                            <i class="bi bi-arrow-down-right"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-title">
                                        <span>التصميم</span>
                                        <h4>
                                            <a href="{{ route('web-development') }}">تصميمات المواقع</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-shape top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1"
                        d="M0,224L24,197.3C48,171,96,117,144,106.7C192,96,240,128,288,160C336,192,384,224,432,208C480,192,528,128,576,122.7C624,117,672,171,720,186.7C768,203,816,181,864,154.7C912,128,960,96,1008,69.3C1056,43,1104,21,1152,21.3C1200,21,1248,43,1296,74.7C1344,107,1392,149,1416,170.7L1440,192L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
                    </path>
                </svg>
            </div>
        </section>

        <!--portfolio end-->
    </div>
@endsection

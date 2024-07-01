@extends('layouts.master')
@section('content')

<nav id="ht-main-nav">
    <a href="#" class="ht-nav-toggle">
        <i class="bi bi-x-lg"></i>
    </a>
    <a class="navbar-brand logo" href="index.html">
        <img class="img-fluid" src="{{ asset('assets/portal/images/miracle-logo.png')}}" alt="" />
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



<section class="banner overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-lg-1 ps-lg-8">
                <div class="banner-img animate__animated animate__fadeInLeft animate__slow">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/banner/01.png')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-10 mt-lg-0">
                <div class="animate__animated animate__shakeX animate__slow">
                    <h6>
                        مرحبا في <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </h6>
                </div>
                <h1 class="mb-4 animate__animated animate__shakeX animate__slow">
                    ميراكل <br /><span>للدعاية </span>
                </h1>
                <p class="lead mb-5 animate__animated animate__zoomIn animate__slow">
                    مرحبًا بكم في شركة ميراكل، حيث يلتقي الابتكار بالتميز. نحن
                    ملتزمون بتقديم مجموعة شاملة من الخدمات المصممة لرفع مستوى علامتك
                    التجارية وزيادة إمكانات عملك. شغفنا يكمن في تحويل رؤيتك إلى واقع
                    من خلال خبرتنا في مختلف المجالات الابداعية و الأستراتيجية.
                </p>
                <div class="d-sm-flex align-items-center animate__animated animate__fadeInUp animate__slow">
                    <a class="themeht-btn primary-btn" href="services.html">
                        <span>ابدأ الأن</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
            <linearGradient id="bannerwave" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop class="stop-color1" offset="0%" stop-opacity="1" />
                <stop class="stop-color2" offset="100%" stop-opacity="1" />
            </linearGradient>
            <path fill="url(#bannerwave)">
                <animate repeatCount="indefinite" attributeName="d" dur="10s"
                    values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
        c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
        c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
        c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;

        M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
        c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
        c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
        C48.9,198.6,57.8,191,51,171.3z;

        M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
        c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
        c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
        c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  " />
            </path>
        </svg>
    </div>
</section>



<div class="page-content">

    <section class="pt-0">
        <div class="rocket-shade">
            <img class="img-fluid" src="{{ asset('assets/portal/images/shape-small-1.png')}}" alt="" />
        </div>
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item style-1 text-center">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/feature/01.png')}}" alt="" />
                        </div>
                        <div class="featured-title">
                            <h4>المونتاج</h4>
                        </div>
                        <div class="featured-desc">
                            <p>نوفر خدمات تحرير فيديو مثالية لتعزيز منتجك الأعلامي</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
                    <div class="featured-item style-1 featured-active text-center">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/feature/02.png')}}" alt="" />
                        </div>
                        <div class="featured-title">
                            <h4>التصميم الجرافيكي</h4>
                        </div>
                        <div class="featured-desc">
                            <p>
                                تركز خدمات التصميم الجرافيكي لدينا على إنشاء صور مذهلة
                                ومتسقة مع علامتك التجارية والتي تأسر جمهورك.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
                    <div class="featured-item style-1 text-center">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/feature/03.png')}}" alt="" />
                        </div>
                        <div class="featured-title">
                            <h4>تصوير المنتجات</h4>
                        </div>
                        <div class="featured-desc">
                            <p>
                                يمكن أن تؤثر الصور عالية الجوده علي قابلية تسويق منتجك
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--feature end-->

    <!--about start-->

    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="shape-img-bg">
                        <img class="mask-img" src="{{ asset('assets/portal/images/about/01.jpg')}}" alt="" />
                        <div class="img-bg-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                                <linearGradient id="imagewave" x1="70.711%" x2="0%" y1="70.711%"
                                    y2="0%">
                                    <stop class="stop-color2" offset="0%" stop-opacity="1" />
                                    <stop class="stop-color1" offset="100%" stop-opacity="1" />
                                </linearGradient>
                                <path fill="url(#imagewave)">
                                    <animate repeatCount="indefinite" attributeName="d" dur="5s"
                                        values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
  c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
  c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
  c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;

  M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
  c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
  c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
  C48.9,198.6,57.8,191,51,171.3z;

  M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
  c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
  c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
  c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  " />
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
                    <div class="theme-title mb-4">
                        <h6>عن ميراكل</h6>
                        <h2>حل ذكي مع <span> فرصة</span> رائعة.</h2>
                        <p>
                            نحن شركة تقدم حلاً ذكيًا لتصوير المنتجات وتحرير الفيديو بشكل
                            احترافي ومبتكر. نهدف إلى تلبية احتياجات عملائنا بأفضل الطرق
                            الممكنة من خلال استخدام أحدث التقنيات والأدوات. نفخر بتقديم
                            فرصة رائعة لعملائنا لتسويق منتجاتهم بطريقة مبتكرة ومؤثرة.
                            سواء كنت تبحث عن تصوير احترافي لمنتجاتك أو تحرير فيديو مميز
                            لتسليط الضوء على علامتك التجارية،
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <ul class="list-unstyled list-icon style-1">
                                <li>
                                    <i class="flaticon flaticon-check-mark"></i>تواصل رائع
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <ul class="list-unstyled list-icon style-1">
                                <li>
                                    <i class="flaticon flaticon-check-mark"></i> احسن
                                    التصميمات الجديدة
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <ul class="list-unstyled list-icon style-1">
                                <li>
                                    <i class="flaticon flaticon-check-mark"></i> احصل علي
                                    افضل جودة
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled list-icon style-1">
                                <li>
                                    <i class="flaticon flaticon-check-mark"></i> عناصر
                                    الخبرة
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="themeht-btn secondary-btn mt-5" href="services.html">
                        <span>اكتشف المزيد</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--about end-->

    <!--marquee start-->

    <section class="overflow-hidden p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col">
                    <div class="marquee-wrap">
                        <div class="marquee-text">
                            <span>فيديوهات ترويجية</span>
                            <i class="bi bi-square-fill"></i>
                            <span>الرسوم المتحركة</span>
                            <i class="bi bi-square-fill"></i>
                            <span>التصميم الجرافيكي</span>
                            <i class="bi bi-square-fill"></i>
                            <span>الإعلانات المدفوعة </span>
                            <i class="bi bi-square-fill"></i>
                            <span>تصوير المنتجات</span>
                            <i class="bi bi-square-fill"></i>
                            <span>تحرير الفيديو</span>
                            <i class="bi bi-square-fill"></i>
                            <span>تصميم المواقع</span>
                            <i class="bi bi-square-fill"></i>
                            <span>دراسات جدوى</span>
                            <i class="bi bi-square-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--marquee end-->

    <!--service start-->

    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="theme-title">
                        <h6>خدماتنا</h6>
                        <h2>مميزات منصتنا​</h2>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/portal/images/about/02.png')}}" alt="" />
                </div>
                <div class="col-lg-7 ps-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item style-1">
                                <div class="service-item-inner">
                                    <div class="service-icon">
                                        <i class="flaticon flaticon-seo-3"></i>
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>مقاطع فيديو ترويجية</h4>
                                        </div>
                                        <p>
                                            فريق الإنتاج لدينا متخصص في إنشاء مقاطع فيديو
                                            ترويجية احترافية
                                        </p>
                                        <a class="arrow-btn" href="promo-videos.html">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-6">
                            <div class="service-item style-1 service-active">
                                <div class="service-item-inner">
                                    <div class="service-icon">
                                        <i class="flaticon flaticon-content-marketing"></i>
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>الرسوم المتحركة</h4>
                                        </div>
                                        <p>
                                            تعمل خدمات الرسوم المتحركة لدينا على تحويل أفكارك
                                            إلى رسوم متحركة جذابة ومقنعة بصريًا.
                                        </p>
                                        <a class="arrow-btn" href="animations.html">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-6 mt-md-0">
                            <div class="service-item style-1">
                                <div class="service-item-inner">
                                    <div class="service-icon">
                                        <i class="flaticon flaticon-digital-marketing"></i>
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>تحرير الفيديو</h4>
                                        </div>
                                        <p>
                                            توفر خدمات تحرير الفيديو لدينا تحريرًا دقيقًا لتعزيز
                                            تواجدك الإعلامي.
                                        </p>
                                        <a class="arrow-btn" href="editing.html">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-6">
                            <div class="service-item style-1">
                                <div class="service-item-inner">
                                    <div class="service-icon">
                                        <i class="flaticon flaticon-email-2"></i>
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>التصميم الجرافيكي</h4>
                                        </div>
                                        <p>
                                            تركز خدمات التصميم الجرافيكي لدينا على إنشاء صور
                                            مذهلة ومتسقة مع علامتك التجارية والتي تأسر جمهورك.
                                        </p>
                                        <a class="arrow-btn" href="graphic-design.html">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--service end-->

    <!--about start-->

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-1">
                    <div class="shape-img-bg">
                        <img class="mask-img" src="{{ asset('assets/portal/images/about/03.jpg')}}" alt="" />
                        <div class="img-bg-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                                <linearGradient id="imagewave2" x1="70.711%" x2="0%" y1="70.711%"
                                    y2="0%">
                                    <stop class="stop-color2" offset="0%" stop-opacity="1" />
                                    <stop class="stop-color1" offset="100%" stop-opacity="1" />
                                </linearGradient>
                                <path fill="url(#imagewave2)">
                                    <animate repeatCount="indefinite" attributeName="d" dur="5s"
                                        values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
                c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
                c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
                c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;

                M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
                c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
                c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
                C48.9,198.6,57.8,191,51,171.3z;

                M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
                c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
                c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
                c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  " />
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 pe-lg-10">
                    <div class="theme-title mb-4">
                        <h6>حان دورك الأن</h6>
                        <h2>ينضم الآلاف من الأشخاص إلى شركتنا كل يوم​</h2>
                        <p>
                            في شركة ميراكل، نحن فخورون بالترحيب بالآلاف من الأعضاء الجدد
                            في مجتمعنا كل يوم. إن التزامنا بالتميز والابتكار ورضا
                            العملاء يدفعنا إلى تقديم خدمات رفيعة المستوى تلبي جميع
                            احتياجاتك. سواء كان ذلك من خلال حلولنا الإعلانية المتطورة،
                            أو تصميماتنا الجرافيكية الإبداعية، أو استراتيجيات العمل
                            الشاملة، فإننا نضمن أن يتمتع كل عميل بنمو ونجاح لا مثيل
                            لهما. انضم إلينا اليوم وكن جزءًا من شبكة مزدهرة تشكل مستقبل
                            الأعمال.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--about end-->

    <!--step start-->

    <section class="step-process-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="step-item style-1 text-white">
                        <div class="step-icon">
                            <i class="flaticon flaticon-search-analysis"></i>
                        </div>
                        <h4>الخبرة الشاملة</h4>
                        <p class="mb-0">
                            تضمن مجموعة خدماتنا المتنوعة تلبية كافة احتياجات أعمالك تحت
                            سقف واحد. بدءًا من الإعلانات المدفوعة وحتى دراسات الجدوى،
                            نقدم نهجًا شاملاً لرفع مستوى العلامة التجارية.
                        </p>
                        <span>1st Step</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-6 mt-md-0">
                    <div class="step-item style-1 text-white step-bg">
                        <div class="step-icon">
                            <i class="flaticon flaticon-market-analysis"></i>
                        </div>
                        <h4>التميز الإبداعي</h4>
                        <p class="mb-0">
                            في شركة ميراكل، الإبداع هو جوهر كل ما نقوم به. يقوم فريقنا
                            الموهوب من المصممين ورسامي الرسوم المتحركة والمنتجين بإحضار
                            أفكار مبتكرة إلى الحياة، مما يضمن أن تكون علامتك التجارية
                            جذابة بصريًا ولا تُنسى.
                        </p>
                        <span>2nd Step</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-6 mt-lg-0">
                    <div class="step-item style-1 text-white">
                        <div class="step-icon">
                            <i class="flaticon flaticon-target"></i>
                        </div>
                        <h4>حلول مخصصة</h4>
                        <p class="mb-0">
                            نحن لا نبتكر فحسب؛ نحن نخطط. يتم دعم خدماتنا من خلال تحليل
                            شامل للسوق والتخطيط الاستراتيجي، مما يضمن توافق كل مشروع مع
                            أهداف عملك وتحقيق نتائج قابلة للقياس.
                        </p>
                        <span>3rd Step</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-6 mt-lg-0">
                    <div class="step-item style-1 text-white step-bg">
                        <div class="step-icon">
                            <i class="flaticon flaticon-results"></i>
                        </div>
                        <h4>نتائج مثبتة</h4>
                        <p class="mb-0">
                            سجلنا يتحدث عن نفسه. لقد نجحنا في مساعدة العديد من العملاء
                            على تحقيق أهداف أعمالهم من خلال الإعلانات المستهدفة
                            والتصميمات المذهلة واستراتيجيات التسويق الفعالة.
                        </p>
                        <span>4th Step</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-bg ht-bg-move"></div>
    </section>

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
                                    <img class="img-fluid w-100" src="{{ asset('assets/portal/images/portfolio/01.jpg')}}" alt="" />
                                    <a class="portfolio-btn" href="feasability-studies.html">
                                        <i class="bi bi-arrow-down-right"></i>
                                    </a>
                                </div>
                                <div class="portfolio-title">
                                    <span>دراسة الجدوة</span>
                                    <h4>
                                        <a href="feasability-studies.html">دراسات الجدوة</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item cat3">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="{{ asset('assets/portal/images/portfolio/02.jpg')}}" alt="" />
                                    <a class="portfolio-btn" href="paid-ads.html">
                                        <i class="bi bi-arrow-down-right"></i>
                                    </a>
                                </div>
                                <div class="portfolio-title">
                                    <span>الدعاية</span>
                                    <h4>
                                        <a href="paid-ads.html">الدعاية والاعلان</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item cat4">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="{{ asset('assets/portal/images/portfolio/03.jpg')}}" alt="" />
                                    <a class="portfolio-btn" href="web-development.html">
                                        <i class="bi bi-arrow-down-right"></i>
                                    </a>
                                </div>
                                <div class="portfolio-title">
                                    <span>البرمجة</span>
                                    <h4>
                                        <a href="web-development.html">تصميم المواقع</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item cat2">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="{{ asset('assets/portal/images/portfolio/04.jpg')}}" alt="" />
                                    <a class="portfolio-btn" href="animations.html">
                                        <i class="bi bi-arrow-down-right"></i>
                                    </a>
                                </div>
                                <div class="portfolio-title">
                                    <span>الرسوم المتحركة</span>
                                    <h4>
                                        <a href="animations.html"> الرسوم المتحركة</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item cat2">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="{{ asset('assets/portal/images/portfolio/05.jpg')}}" alt="" />
                                    <a class="portfolio-btn" href="products-photograhping.html">
                                        <i class="bi bi-arrow-down-right"></i>
                                    </a>
                                </div>
                                <div class="portfolio-title">
                                    <span>التصوير</span>
                                    <h4>
                                        <a href="products-photograhping.html">تصوير المنتجات</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item cat1">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="{{ asset('assets/portal/images/portfolio/06.jpg')}}" alt="" />
                                    <a class="portfolio-btn" href="web-development.html">
                                        <i class="bi bi-arrow-down-right"></i>
                                    </a>
                                </div>
                                <div class="portfolio-title">
                                    <span>التصميم</span>
                                    <h4>
                                        <a href="web-development.html">تصميمات المواقع</a>
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

    <!--testimonial start-->

    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div class="theme-title">
                        <h6>شهادات</h6>
                        <h2>راجع التعليقات لماذا يحب العملاء العمل معنا</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-lg-10">
            <div id="testimonial" class="testimonial-carousel carousel slide z-index-1" data-bs-ride="carousel"
                data-bs-interval="4000">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="testimonial-box">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/01.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "تعاملنا مع ميراكل لإدارة حملاتنا الإعلانية
                                                الممولة على وسائل التواصل الاجتماعي. النتائج كانت
                                                مذهلة! نسبة التفاعل مع الإعلانات زادت بشكل ملحوظ،
                                                وتمكنا من الوصول إلى جمهور أوسع بكثير مما كنا
                                                نتوقع. الدعم الفني كان دائمًا موجودًا لحل أي مشكلة
                                                بسرعة."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>سارة</h5>
                                                <label> مسؤولة تسويق </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/02.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                لقد كانت تجربة رائعة العمل مع شركة ميراكل. قدموا
                                                لنا دراسة جدوى شاملة ومفصلة لمشروعنا الجديد.
                                                الفريق كان محترفًا جدًا واستجاب لاحتياجاتنا بسرعة.
                                                بفضل دراستهم، استطعنا تأكيد جدوى المشروع والمضي
                                                قدمًا بثقة."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>أحمد</h5>
                                                <label> مدير مشروع</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/03.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "تعاملنا مع ميراكل لإنتاج فيديوهات ترويجية
                                                لمنتجاتنا. الفريق كان مذهلًا، فهموا تمامًا رؤيتنا
                                                ونفذوا الفيديوهات بطريقة احترافية وجذابة.
                                                الفيديوهات كانت مفيدة جدًا في تعزيز علامتنا
                                                التجارية وزيادة مبيعاتنا."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>ليلى</h5>
                                                <label>منتجة فيديوهات</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/04.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "شركة ميراكل ساعدتنا في تصميم شعار جديد وهوية
                                                بصرية مميزة لشركتنا. كانت العملية سلسة جدًا،
                                                والفريق أظهر إبداعًا واحترافية عالية. النتائج كانت
                                                تفوق توقعاتنا، والعميل تلقى ردود فعل إيجابية جدًا
                                                على التصميمات الجديدة."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>خالد</h5>
                                                <label> صاحب شركة ناشئة</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/05.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "كانت تجربتي مع شركة ميراكل ممتازة بكل المقاييس.
                                                الفريق كان متعاونًا ومحترفًا للغاية. قدموا لنا
                                                دراسة جدوى دقيقة ومفصلة لمشروعنا، مما ساعدنا في
                                                اتخاذ قرارات مدروسة. استجابوا لاحتياجاتنا بسرعة
                                                وكفاءة، وأنا ممتنة لجهودهم الكبيرة. بفضلهم، نحن
                                                الآن واثقون من نجاح مشروعنا."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>نورا</h5>
                                                <label> مديرة تطوير الأعمال </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/06.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "لقد كانت تجربتي مع شركة ميراكل تجربة متميزة.
                                                الفريق كان محترفًا للغاية واستجاب لاحتياجاتنا بشكل
                                                سريع وفعال. قدموا لنا دراسة جدوى شاملة ومفصلة، مما
                                                ساعدنا على فهم كل جوانب المشروع واتخاذ قرارات
                                                استراتيجية صائبة. بفضل دراستهم، نحن الآن متأكدون
                                                من جدوى مشروعنا ومستعدون للانطلاق به بثقة."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>يوسف</h5>
                                                <label>مدير مشروع</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/07.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "أنا سعيدة جدًا بتعاملنا مع شركة ميراكل. من اللحظة
                                                الأولى، أظهر الفريق مستوى عالٍ من الاحترافية
                                                والتفاني. قدموا لنا دراسة جدوى شاملة تضمنت جميع
                                                الجوانب المالية والتسويقية والفنية. بفضل
                                                توجيهاتهم، استطعنا تجاوز العقبات والمضي قدمًا في
                                                مشروعنا بثقة. أنصح بشدة بالتعامل معهم."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>مريم</h5>
                                                <label>رئيسة قسم التسويق</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/08.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-desc">
                                            <p>
                                                "تعاملي مع شركة ميراكل كان رائعًا. الفريق أبدى
                                                احترافية كبيرة وفهمًا عميقًا لاحتياجات مشروعنا.
                                                قدموا لنا دراسة جدوى متكاملة وواسعة النطاق، مما
                                                مكننا من تقييم جميع الجوانب بدقة. كانوا سريعين في
                                                الاستجابة لاستفساراتنا وتقديم النصائح القيمة. بفضل
                                                دعمهم، نحن على استعداد كامل للبدء في مشروعنا
                                                بثقة."
                                            </p>
                                            <div class="testimonial-caption">
                                                <h5>سامي</h5>
                                                <label>المدير التنفيذي</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <ul class="nav justify-content-center ms-0">
                        <li class="active" aria-current="true" data-bs-target="#testimonial" data-bs-slide-to="0">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/01.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="1">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/02.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="2">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/03.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="3">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/04.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="4">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/05.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="5">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/06.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="6">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/07.jpg')}}" alt="" />
                        </li>
                        <li data-bs-target="#testimonial" data-bs-slide-to="7">
                            <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/08.jpg')}}" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--testimonial end-->

    <!--blog start-->

    <section class="pt-0">
        <div class="container">
            <div class="row align-items-end mb-8">
                <div class="col-lg-6 col-md-12">
                    <div class="theme-title mb-0">
                        <h6>المدونة</h6>
                        <h2>أحدث الأخبار</h2>
                        <p>
                            شركة ميراكل بدأت تعتمد على توجهات جديدة في التصميم
                            الجرافيكي، حيث يتم دمج العناصر اليدوية والرسوم التوضيحية
                            لتعزيز الهوية البصرية للعلامات التجارية. هذا الاتجاه يأتي
                            كرد فعل على الاعتماد المتزايد على الذكاء الاصطناعي في
                            التصميم، مما يزيد من الرغبة في لمسة بشرية وأصالة في العمل
                            الإبداعي
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <a class="themeht-btn primary-btn" href="blog-single.html">
                        <span>مشاهدة الكل</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="post-card">
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><i class="bi bi-person"></i> مارك</li>
                                <li class="list-inline-item">
                                    <i class="bi bi-tag"></i> الدعاية
                                </li>
                            </ul>
                        </div>
                        <div class="post-image">
                            <img class="img-fluid w-100" src="{{ asset('assets/portal/images/blog/01.jpg')}}" alt="" />
                            <a class="post-btn" href="blog-single.html">
                                <i class="bi bi-arrow-down-right"></i>
                            </a>
                        </div>
                        <div class="post-desc">
                            <div class="post-title">
                                <h4>
                                    <a href="blog-single.html">ما هي شركة ميراكل</a>
                                </h4>
                            </div>
                            <p>
                                شركة ميراكل هي شركة متخصصة في الدعاية والإعلان، التصميم
                                الجرافيكي، والمونتاج. تقدم الشركة خدمات شاملة تتضمن تصميم
                                الهوية البصرية، إنشاء الحملات الإعلانية، إنتاج الفيديوهات
                                الترويجية، والمزيد. تعمل ميراكل على تقديم حلول إبداعية
                                تساعد الشركات على تحسين حضورها الرقمي والتسويقي
                            </p>
                            <div class="post-date">04 Mar, 2024</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-6 mt-lg-0">
                    <div class="post-card">
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><i class="bi bi-person"></i> مارك</li>
                                <li class="list-inline-item">
                                    <i class="bi bi-tag"></i> دعاية
                                </li>
                            </ul>
                        </div>
                        <div class="post-image">
                            <img class="img-fluid w-100" src="{{ asset('assets/portal/images/blog/02.jpg')}}" alt="" />
                            <a class="post-btn" href="blog-single.html">
                                <i class="bi bi-arrow-down-right"></i>
                            </a>
                        </div>
                        <div class="post-desc">
                            <div class="post-title">
                                <h4>
                                    <a href="blog-single.html">كيفية الوصول الي شركة ميراكل</a>
                                </h4>
                            </div>
                            <p>
                                اكتب في محرك البحث مثل جوجل: "شركة ميراكل للدعاية والإعلان
                                + المدينة" للحصول على تفاصيل الاتصال والعنوان. إذا كنت
                                بحاجة إلى مساعدة في البحث عن معلومات محددة أو إذا كنت
                                تحتاج إلى العنوان أو رقم الهاتف، يمكنك تزويدي بمزيد من
                                التفاصيل حول موقع الشركة أو المدينة التي تبحث فيها.
                            </p>
                            <div class="post-date">04 Mar, 2024</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-6 mt-lg-0">
                    <div class="post-card">
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><i class="bi bi-person"></i> مارك</li>
                                <li class="list-inline-item">
                                    <i class="bi bi-tag"></i> اراء العملاء
                                </li>
                            </ul>
                        </div>
                        <div class="post-image">
                            <img class="img-fluid w-100" src="{{ asset('assets/portal/images/blog/03.jpg')}}" alt="" />
                            <a class="post-btn" href="blog-single.html">
                                <i class="bi bi-arrow-down-right"></i>
                            </a>
                        </div>
                        <div class="post-desc">
                            <div class="post-title">
                                <h4>
                                    <a href="blog-single.html">كيف يري العملاء شركة ميراكل</a>
                                </h4>
                            </div>
                            <p>
                                آراء العملاء حول شركة ميراكل للدعاية والإعلان والتصميم
                                الجرافيكي والمونتاج تكون غالبًا إيجابية، حيث يعبر العديد
                                من العملاء عن رضاهم عن مستوى الاحترافية والخدمات المقدمة.
                                فيما يلي بعض النقاط التي يتم تقديرها عادةً من قبل العملاء
                                العملاء يثنون على احترافية فريق العمل في ميراكل، وقدرتهم
                                على تقديم حلول إبداعية ومبتكرة
                            </p>
                            <div class="post-date">04 Mar, 2024</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blog end-->
</div>

@endsection

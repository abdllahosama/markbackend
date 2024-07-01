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
                    <h1>أحدث الأخبار</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="bi bi-house-door me-1"></i>الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">الصفحات</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                أحدث الأخبار
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
        <!--blog single start-->

        <section class="post-single-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="post-card">
                            <div class="post-image">
                                <img class="img-fluid" src="{{ asset('assets/portal/images/blog/large/01.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="post-desc">
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="bi bi-person"></i> مارك
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="bi bi-calendar3"></i>January 04, 2024
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="bi bi-chat-right-text"></i>3 Comments
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="bi bi-tag"></i> Marketing
                                        </li>
                                    </ul>
                                </div>
                                <p class="">
                                    شركة ميراكل هي شركة متخصصة في الدعاية والإعلان، التصميم
                                    الجرافيكي، والمونتاج. تقدم الشركة خدمات شاملة تتضمن تصميم
                                    الهوية البصرية، إنشاء الحملات الإعلانية، إنتاج الفيديوهات
                                    الترويجية، والمزيد. تعمل ميراكل على تقديم حلول إبداعية
                                    تساعد الشركات على تحسين حضورها الرقمي والتسويقي
                                </p>
                                <p class="mb-0">
                                    شركة ميراكل هي شركة متخصصة في الدعاية والإعلان، التصميم
                                    الجرافيكي، والمونتاج. تقدم الشركة خدمات شاملة تتضمن تصميم
                                    الهوية البصرية، إنشاء الحملات الإعلانية، إنتاج الفيديوهات
                                    الترويجية، والمزيد. تعمل ميراكل على تقديم حلول إبداعية
                                    تساعد الشركات على تحسين حضورها الرقمي والتسويقي
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="post-comment">
                        <h2 class="comments-title mb-7">ردود علي ماهي شركة ميراكل</h2>
                        <ul class="list-unstyled">
                            <li>
                                <div class="author-img">
                                    <img class="img-fluid rounded box-shadow" alt="image"
                                        src="{{ asset('assets/portal/images/thumbnail/01.jpg') }}" />
                                </div>
                                <div class="comments-body">
                                    <h5 class="author-title mb-1">سارة</h5>
                                    <div class="comment-date">March 04, 2024</div>
                                    <p class="mb-0 mt-3">
                                        تعاملنا مع ميراكل لإدارة حملاتنا الإعلانية الممولة على
                                        وسائل التواصل الاجتماعي. النتائج كانت مذهلة! نسبة
                                        التفاعل مع الإعلانات زادت بشكل ملحوظ، وتمكنا من الوصول
                                        إلى جمهور أوسع بكثير مما كنا نتوقع. الدعم الفني كان
                                        دائمًا موجودًا لحل أي مشكلة بسرعة
                                    </p>
                                    <div class="comment-reply">
                                        <a href="#"> <i class="bi bi-reply"></i>رد </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="author-img">
                                    <img class="img-fluid rounded box-shadow" alt="image"
                                        src="{{ asset('assets/portal/images/thumbnail/02.jpg') }}" />
                                </div>
                                <div class="comments-body">
                                    <h5 class="author-title mb-1">أحمد</h5>
                                    <div class="comment-date">March 04, 2024</div>
                                    <p class="mb-0 mt-3">
                                        لقد كانت تجربة رائعة العمل مع شركة ميراكل. قدموا لنا
                                        دراسة جدوى شاملة ومفصلة لمشروعنا الجديد. الفريق كان
                                        محترفًا جدًا واستجاب لاحتياجاتنا بسرعة. بفضل دراستهم،
                                        استطعنا تأكيد جدوى المشروع والمضي قدمًا بثقة..
                                    </p>
                                    <div class="comment-reply">
                                        <a href="#"> <i class="bi bi-reply"></i>رد </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="author-img">
                                    <img class="img-fluid rounded box-shadow" alt="image"
                                        src="{{ asset('assets/portal/images/thumbnail/03.jpg') }}" />
                                </div>
                                <div class="comments-body">
                                    <h5 class="author-title mb-1">ليلي</h5>
                                    <div class="comment-date">March 04, 2024</div>
                                    <p class="mb-0 mt-3">
                                        تعاملنا مع ميراكل لإنتاج فيديوهات ترويجية لمنتجاتنا.
                                        الفريق كان مذهلًا، فهموا تمامًا رؤيتنا ونفذوا
                                        الفيديوهات بطريقة احترافية وجذابة. الفيديوهات كانت
                                        مفيدة جدًا في تعزيز علامتنا التجارية وزيادة مبيعاتنا
                                    </p>
                                    <div class="comment-reply">
                                        <a href="#"> <i class="bi bi-reply"></i>رد </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="post-comments mt-10 box-shadow white-bg p-5 rounded">
                        <h3 id="reply-title" class="comment-reply-title">
                            اترك رسالة
                        </h3>
                        <form id="contact-form" method="post" action="contact.php">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>الأسم *</label>
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="الأسم" required="required" data-error="Name is required." />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>البريد الألكتروني *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="البريد الألكتروني" required="required"
                                            data-error="Valid email is required." />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label>الرد *</label>
                                <textarea id="form_message" name="message" class="form-control h-100" placeholder="الرد" rows="4"
                                    required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button class="themeht-btn primary-btn mt-5">
                                <span>ارسال الرد</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-7 mt-lg-0 ps-lg-10">
                    <div class="themeht-sidebar">
                        <div class="widget">
                            <div class="widget-search">
                                <form>
                                    <div class="widget-searchbox">
                                        <input type="text" placeholder="Search Here..." class="form-control" />
                                        <button type="submit" class="search-btn">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title">الأخبار الحالية</h5>
                            <div class="recent-post">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <div class="recent-post-thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/portal/images/blog/blog-thumb/01.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="recent-post-desc">
                                            <a href="blog-single.html">ما هي شركة ميراكل؟</a>
                                            <div class="post-date-small">March 04, 2024</div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="recent-post-thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/portal/images/blog/blog-thumb/02.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="recent-post-desc">
                                            <a href="blog-single.html">كيف يتواصل العملاء مع شركة ميراكل؟</a>
                                            <div class="post-date-small">March 04, 2024</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="recent-post-thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/portal/images/blog/blog-thumb/03.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="recent-post-desc">
                                            <a href="blog-single.html">اراء العملاء عن شركة ميراكل</a>
                                            <div class="post-date-small">March 04, 2024</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!--blog single end-->
    </div>
@endsection

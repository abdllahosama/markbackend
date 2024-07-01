


@extends('layouts.master')
@section('content')
      <nav id="ht-main-nav">
        <a href="#" class="ht-nav-toggle">
          <i class="bi bi-x-lg"></i>
        </a>
        <a class="navbar-brand logo" href="index.html">
          <img class="img-fluid" src="{{ asset('assets/portal/images/miracle-logo.png')}}')}}" alt="" />
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
                <a href="mailto:themeht23@gmail.com"
                  >miraclecompany@gmail.com</a
                >
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

      <!--header end-->

      <!--page title start-->

      <section class="page-title">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-10">
              <h1>عن ميراكل</h1>
              <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">
                      <i class="bi bi-house-door me-1"></i>الرئيسية</a
                    >
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">الصفحات</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    عن ميراكل
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <div class="page-title-wave">
          <img src="{{ asset('assets/portal/images/page-bg.svg')}}" alt="" />
        </div>
      </section>

      <!--page title end-->

      <!--body content start-->

      <div class="page-content">
        <!--step start-->

        <section class="pb-0">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-8 col-md-12">
                <div class="theme-title">
                  <h6>كيف نقوم بالعمل</h6>
                  <h2>مساعدة الأخرين للوصول للنجاح</h2>
                </div>
              </div>
            </div>
            <div class="row gx-lg-5">
              <div class="col-lg-3 col-md-6">
                <div class="step-item style-2">
                  <div class="step-icon">
                    <i class="flaticon flaticon-search-analysis"></i>
                    <div class="step-number">01</div>
                    <div
                      class="step-icon-bg"
                      data-bg-img="{{ asset('assets/portal/images/step-icon-bg1.png')}}"
                    ></div>
                  </div>
                  <h4>الخبرة الشاملة</h4>
                  <p class="mb-0">
                    تضمن مجموعة خدماتنا المتنوعة تلبية كافة احتياجات أعمالك تحت
                    سقف واحد. بدءًا من الإعلانات المدفوعة وحتى دراسات الجدوى،
                    نقدم نهجًا شاملاً لرفع مستوى العلامة التجارية.
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-6 mt-md-0">
                <div class="step-item style-2 step-bg">
                  <div class="step-icon">
                    <i class="flaticon flaticon-market-analysis"></i>
                    <div class="step-number">02</div>
                    <div
                      class="step-icon-bg"
                      data-bg-img="{{ asset('assets/portal/images/step-icon-bg1.png')}}"
                    ></div>
                  </div>
                  <h4>التميز الإبداعي</h4>
                  <p class="mb-0">
                    في شركة ميراكل، الإبداع هو جوهر كل ما نقوم به. يقوم فريقنا
                    الموهوب من المصممين ورسامي الرسوم المتحركة والمنتجين بإحضار
                    أفكار مبتكرة إلى الحياة، مما يضمن أن تكون علامتك التجارية
                    جذابة بصريًا ولا تُنسى.
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-6 mt-lg-0">
                <div class="step-item style-2">
                  <div class="step-icon">
                    <i class="flaticon flaticon-target"></i>
                    <div class="step-number">03</div>
                    <div
                      class="step-icon-bg"
                      data-bg-img="{{ asset('assets/portal/images/step-icon-bg1.png')}}"
                    ></div>
                  </div>
                  <h4>حلول مخصصة</h4>
                  <p class="mb-0">
                    نحن لا نبتكر فحسب؛ نحن نخطط. يتم دعم خدماتنا من خلال تحليل
                    شامل للسوق والتخطيط الاستراتيجي، مما يضمن توافق كل مشروع مع
                    أهداف عملك وتحقيق نتائج قابلة للقياس.
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-6 mt-lg-0">
                <div class="step-item style-2 step-bg">
                  <div class="step-icon">
                    <i class="flaticon flaticon-results"></i>
                    <div class="step-number">04</div>
                    <div
                      class="step-icon-bg"
                      data-bg-img="{{ asset('assets/portal/images/step-icon-bg1.png')}}"
                    ></div>
                  </div>
                  <h4>نتائج مثبتة</h4>
                  <p class="mb-0">
                    سجلنا يتحدث عن نفسه. لقد نجحنا في مساعدة العديد من العملاء
                    على تحقيق أهداف أعمالهم من خلال الإعلانات المستهدفة
                    والتصميمات المذهلة واستراتيجيات التسويق الفعالة.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--step end-->

        <!--about start-->

        <section>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-12">
                <div class="shape-img-bg">
                  <img class="mask-img" src="{{ asset('assets/portal/images/about/01.jpg')}}" alt="" />
                  <div class="img-bg-shape">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      x="0px"
                      y="0px"
                      viewBox="0 0 288 288"
                    >
                      <linearGradient
                        id="imagewave2"
                        x1="70.711%"
                        x2="0%"
                        y1="70.711%"
                        y2="0%"
                      >
                        <stop
                          class="stop-color2"
                          offset="0%"
                          stop-opacity="1"
                        />
                        <stop
                          class="stop-color1"
                          offset="100%"
                          stop-opacity="1"
                        />
                      </linearGradient>
                      <path fill="url(#imagewave2)">
                        <animate
                          repeatCount="indefinite"
                          attributeName="d"
                          dur="5s"
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
                c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  "
                        />
                      </path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
                <div class="theme-title mb-4">
                  <h6>About Us</h6>
                  <h2>حل ذكي مع <span>فرصة</span> رائعة.</h2>
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
              </div>
            </div>
          </div>
        </section>

        <!--about end-->

        <!--marquee start-->

        <section class="py-8">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col">
                <div class="marquee-wrap style-2 grediant-bg3">
                  <div class="marquee-text">
                    <span>فيديوهات ترويجية</span>
                    <i class="bi bi-square-fill"></i>
                    <span>الرسوم المتحركة</span>
                    <i class="bi bi-square-fill"></i>
                    <span>التصميم الجرافيكي</span>
                    <i class="bi bi-square-fill"></i>
                    <span>الإعلانات المدفوعة</span>
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

        <section>
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-8 col-md-12">
                <div class="theme-title">
                  <h6>خدماتنا</h6>
                  <h2>مميزات منصتنا​</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/01.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>فيديوهات ترويجية</h4>
                    </div>
                    <p>
                      يتخصص فريق الإنتاج لدينا في إنشاء مقاطع فيديو ترويجية
                      احترافية تسلط الضوء على نقاط قوة علامتك التجارية .
                    </p>
                  </div>
                  <a class="arrow-btn" href="promo-videos.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
                <div class="service-item style-2 service-active">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/02.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>الرسوم المتحركة</h4>
                    </div>
                    <p>
                      تعمل خدمات الرسوم المتحركة لدينا على تحويل أفكارك إلى رسوم
                      متحركة جذابة ومقنعة بصريًا.
                    </p>
                    <br />
                  </div>
                  <a class="arrow-btn" href="animations.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/03.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>التصميم الجرافيكي</h4>
                    </div>
                    <p>
                      تركز حدمات التصميم الجرافيكي لدينا علي انشاء صور مذهلة و
                      متسقة مع علامتك التجارية والتي تأسر جمهورك
                    </p>
                  </div>
                  <a class="arrow-btn" href="graphic-design.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-6">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/04.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>الإعلانات المدفوعة</h4>
                    </div>
                    <p>
                      يقوم فريق الخبراء لدينا بتصميم حملات إعلانية مدفوعة مؤثرة
                      ومصممة خصيصًا للوصول إلى جمهورك المحدد، مما يضمن أقصى قدر
                      من التفاعل والتحويل.
                    </p>
                  </div>
                  <a class="arrow-btn" href="paid-ads.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-6">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/05.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>تصوير المنتجات</h4>
                    </div>
                    <p>
                      يلتقط المصورون الخبراء لدينا منتجاتك في أفضل حالاتها،
                      ويعرضون ميزاتها وفوائدها بطرق جذابة بصريًا.
                    </p>
                    <br />
                  </div>
                  <a class="arrow-btn" href="products-photograhping.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-6">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/06.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>تحرير الفيديو</h4>
                    </div>
                    <p>
                      توفر خدمات تحرير الفيديو ليدنا تحريرا دقيقا لتعزيز تواجدك
                      الأعلامي
                    </p>
                    <br />
                    <br />
                  </div>
                  <a class="arrow-btn" href="editing.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-6">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/06.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>تصميم المواقع</h4>
                    </div>
                    <p>
                      يوجد لدينا تصميم المواقع بأعلي جزدة وتنسيق للوصول
                      للمستخدمين بسهولة
                    </p>
                    <br />
                    <br />
                  </div>
                  <a class="arrow-btn" href="web-development.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-6">
                <div class="service-item style-2">
                  <div class="service-icon">
                    <img class="img-fluid" src="{{ asset('assets/portal/images/service/06.png')}}" alt="" />
                  </div>
                  <div class="service-desc">
                    <div class="service-title">
                      <h4>دراسات جدوى</h4>
                    </div>
                    <p>
                      توفر دراسات الجدوى لدينا تحليلاً شاملاً للسوق ورؤى
                      استراتيجية لضمان أن مشاريعك التجارية 
                    </p>
                    <br />
                  </div>
                  <a class="arrow-btn" href="feasability-studies.html">
                    <i class="bi bi-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--service end-->

        <!--tab start-->

        <section>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="tab style-2">
                  <!-- Nav tabs -->
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a
                        class="nav-item nav-link active"
                        id="nav-tab1"
                        data-bs-toggle="tab"
                        href="#tab1-1"
                        role="tab"
                        aria-selected="true"
                        >الاستراتيجية</a
                      >
                      <a
                        class="nav-item nav-link"
                        id="nav-tab2"
                        data-bs-toggle="tab"
                        href="#tab1-2"
                        role="tab"
                        aria-selected="false"
                        >التحليل</a
                      >
                      <a
                        class="nav-item nav-link"
                        id="nav-tab3"
                        data-bs-toggle="tab"
                        href="#tab1-3"
                        role="tab"
                        aria-selected="false"
                        >التخطيط</a
                      >
                      <a
                        class="nav-item nav-link"
                        id="nav-tab4"
                        data-bs-toggle="tab"
                        href="#tab1-4"
                        role="tab"
                        aria-selected="false"
                        >التسويق</a
                      >
                    </div>
                  </nav>
                  <!-- Tab panes -->
                  <div class="tab-content" id="nav-tabContent">
                    <div
                      role="tabpanel"
                      class="tab-pane fade show active"
                      id="tab1-1"
                    >
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                          <img
                            class="img-fluid"
                            src="{{ asset('assets/portal/images/tab/01.png')}}"
                            alt=""
                          />
                        </div>
                        <div class="col-lg-6 col-md-12 ps-lg-8 mt-5 mt-lg-0">
                          <p class="mb-3">
                            شركة ميراكل للدعاية والإعلان تبدأ مشاريعها عادةً
                            بوضع استراتيجية قوية ومتكاملة. العملية الاستراتيجية
                            تلعب دورًا حاسمًا في نجاح الحملات الإعلانية
                            والمشاريع التصميمية، وهي تشمل عدة مراحل رئيسية: 1.
                            البحث والتحليل تحليل السوق: تقوم الشركة بتحليل شامل
                            للسوق المستهدف لفهم الاتجاهات الحالية واحتياجات
                            الجمهور. تحليل المنافسين: دراسة المنافسين لفهم نقاط
                            القوة والضعف لديهم واستكشاف الفرص المتاحة. 2. تحديد
                            الأهداف تحديد الأهداف الرئيسية: سواء كانت زيادة
                            الوعي بالعلامة التجارية، تحسين المبيعات، أو إطلاق
                            منتج جديد. تحديد الجمهور المستهدف: فهم دقيق للجمهور
                            الذي سيتم استهدافه بالحملات الإعلانية. 3. تطوير
                            الاستراتيجية وضع خطة عمل: تشمل الاستراتيجية تطوير
                            خطة عمل مفصلة تحدد الخطوات التنفيذية لتحقيق الأهداف.
                            تحديد القنوات: اختيار القنوات الأنسب للوصول إلى
                            الجمهور المستهدف، مثل وسائل التواصل الاجتماعي،
                            التلفزيون، الإعلانات الرقمية، وغيرها.
                          </p>

                          <a class="themeht-btn primary-btn" href="#">
                            <span>اكتشف اكثر </span>
                            <i class="bi bi-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                          <img
                            class="img-fluid"
                            src="{{ asset('assets/portal/images/tab/02.png')}}"
                            alt=""
                          />
                        </div>
                        <div class="col-lg-6 col-md-12 ps-lg-8 mt-5 mt-lg-0">
                          <p class="mb-3">
                            شركة ميراكل للدعاية والإعلان تولي اهتمامًا كبيرًا
                            لمرحلة التحليل في استراتيجياتها، وتتضمن هذه المرحلة
                            عدة جوانب مهمة: تحليل السوق: تقوم بتحليل شامل للسوق
                            المستهدف، بما في ذلك فهم الاتجاهات الحالية واحتياجات
                            الجمهور المحتمل. تحليل المنافسين: تدرس الشركة
                            منافسيها بعناية لفهم نقاط قوتهم وضعفهم، واستكشاف
                            الفرص والتحديات التي قد تنشأ من هذه الأنشطة
                            التنافسية. تحديد الأهداف: تحديد أهداف محددة وقابلة
                            للقياس كزيادة الوعي بالعلامة التجارية، تحسين
                            المبيعات، أو إطلاق منتج جديد. تحديد الجمهور
                            المستهدف: فهم دقيق للمستهلكين والجمهور المستهدف، بما
                            يتيح لها تخصيص الحملات الإعلانية بشكل أفضل. تتبع هذه
                            العمليات في شركة ميراكل للدعاية والإعلان تسهيل عملية
                            تطوير استراتيجيات فعالة ومتكاملة تساهم في نجاح
                            حملاتها الإعلانية ومشاريع التصميم.
                          </p>

                          <a class="themeht-btn primary-btn" href="#">
                            <span>اكتشف اكثر</span>
                            <i class="bi bi-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                          <img
                            class="img-fluid"
                            src="{{ asset('assets/portal/images/tab/03.png')}}"
                            alt=""
                          />
                        </div>
                        <div class="col-lg-6 col-md-12 ps-lg-8 mt-5 mt-lg-0">
                          <p class="mb-3">
                            في شركة ميراكل للدعاية والإعلان، يُعطى التخطيط أهمية
                            كبيرة كجزء من عملياتها الاستراتيجية. عملية التخطيط
                            تشمل عدة مراحل وتفاصيل مهمة لضمان تنفيذ فعّال
                            للمشاريع والحملات الإعلانية. هذه بعض النقاط الرئيسية
                            لعملية التخطيط في الشركة: وضع الهدف والرؤية: يبدأ
                            التخطيط بوضع أهداف محددة وواضحة تتوافق مع رؤية
                            الشركة وأهدافها الاستراتيجية العامة. تحليل البيئة
                            الداخلية والخارجية: يتم تقييم القدرات والموارد
                            الداخلية للشركة، بالإضافة إلى دراسة العوامل الخارجية
                            التي قد تؤثر على تنفيذ الخطط كالسياسات الحكومية
                            والظروف الاقتصادية. تحديد الاستراتيجيات والتكتيكات:
                            يتم وضع استراتيجيات رئيسية تحقق الأهداف المحددة، مع
                            تطوير تكتيكات وخطط تفصيلية لتنفيذ هذه الاستراتيجيات
                            بكفاءة. تخصيص الموارد والميزانية: يتم تخصيص الموارد
                            المالية والبشرية اللازمة لتنفيذ الخطط التكتيكية
                            بنجاح، مع وضع ميزانية محكمة تتناسب مع أهداف المشروع.
                            متابعة وتقييم: يتم متابعة تنفيذ الخطط وتقييم أدائها
                            بانتظام لضمان تحقيق النتائج المرجوة، مع إجراء
                            التعديلات اللازمة حسب الحاجة. بهذه الطريقة، تساهم
                            عملية التخطيط في شركة ميراكل في تنظيم العمل وضمان
                            تنفيذ الحملات الإعلانية والمشاريع بشكل متكامل
                            وفعّال.
                          </p>

                          <a class="themeht-btn primary-btn" href="#">
                            <span>اكتشف اكثر</span>
                            <i class="bi bi-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab1-4">
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                          <img
                            class="img-fluid"
                            src="{{ asset('assets/portal/images/tab/04.png')}}"
                            alt=""
                          />
                        </div>
                        <div class="col-lg-6 col-md-12 ps-lg-8 mt-5 mt-lg-0">
                          <p class="mb-3">
                            في شركة ميراكل للدعاية والإعلان، تُعتبر عمليات
                            التسويق جزءاً أساسياً من استراتيجياتها لتحقيق
                            أهدافها ونجاح مشاريعها. هنا بعض النقاط الرئيسية التي
                            تميز عملية التسويق في الشركة: فهم السوق والجمهور
                            المستهدف: تبدأ عملية التسويق بتحليل متعمق للسوق
                            المستهدف، مما يشمل فهم احتياجات العملاء المحتملين
                            وسلوكهم. تطوير استراتيجيات متكاملة: تقوم ميراكل بوضع
                            استراتيجيات مبتكرة تتضمن اختيار القنوات المناسبة مثل
                            وسائل التواصل الاجتماعي، الإعلانات التلفزيونية،
                            والحملات الرقمية للوصول إلى الجمهور المستهدف
                            بفعالية. الإبداع والتصميم: تسعى الشركة لتقديم حلول
                            إبداعية وتصاميم مبتكرة تلبي احتياجات العملاء وتعزز
                            هويتهم وعلاماتهم التجارية. قياس الأداء والتحسين
                            المستمر: يتم متابعة أداء الحملات التسويقية باستمرار
                            وتقييم نتائجها بناءً على معايير محددة، مما يساعد في
                            تحسين الاستراتيجيات المستقبلية وزيادة العائد على
                            الاستثمار. الابتكار والتكنولوجيا: تعتمد الشركة على
                            التكنولوجيا الحديثة والابتكار في تنفيذ حملات
                            التسويق، مما يساعدها على التفاعل بفعالية مع الجمهور
                            وتحقيق نتائج ملموسة. بهذه الطريقة، تُعتبر عملية
                            التسويق في شركة ميراكل نهجاً شاملاً يدمج بين الإبداع
                            والتكنولوجيا لتحقيق أهداف العملاء وتعزيز مكانتهم في
                            السوق.
                          </p>

                          <a class="themeht-btn primary-btn" href="#">
                            <span>اكتشف أكثر</span>
                            <i class="bi bi-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="light-bg ht-bg-move"></div>
        </section>

        <!--tab end-->

        <!--timeline start-->

        <!-- <section class="overflow-hidden">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="main-timeline position-relative">
                  <div class="timeline_item">
                    <div class="date-content timeline-order-1b">
                      <div class="date">2021</div>
                    </div>
                    <div class="timeline-icon timeline-order-2b">
                      <i class="flaticon flaticon-checked"></i>
                    </div>
                    <div class="timeline-content timeline-order-3b col-md">
                      <h4>SEO Specialist</h4>
                      <p>
                        A seamless UI experience: Lorem Ipsum is simply of the
                        printing typesetting has been the industry’s standard
                        dummy text. Employ global development standards: Lorem
                        ipsum dolorcon sectetur adipiscing elitut.
                      </p>
                    </div>
                  </div>
                  <div class="timeline_item">
                    <div class="date-content timeline-order-1">
                      <div class="date">2022</div>
                    </div>
                    <div class="timeline-icon timeline-order-2">
                      <i class="flaticon flaticon-checked"></i>
                    </div>
                    <div class="timeline-content timeline-order-3 col-md">
                      <h4>Unique Features</h4>
                      <p>
                        A seamless UI experience: Lorem Ipsum is simply of the
                        printing typesetting has been the industry’s standard
                        dummy text. Employ global development standards: Lorem
                        ipsum dolorcon sectetur adipiscing elitut.
                      </p>
                    </div>
                  </div>
                  <div class="timeline_item">
                    <div class="date-content timeline-order-1b">
                      <div class="date">2023</div>
                    </div>
                    <div class="timeline-icon timeline-order-2b">
                      <i class="flaticon flaticon-checked"></i>
                    </div>
                    <div class="timeline-content timeline-order-3b col-md">
                      <h4>Layout Option</h4>
                      <p>
                        A seamless UI experience: Lorem Ipsum is simply of the
                        printing typesetting has been the industry’s standard
                        dummy text. Employ global development standards: Lorem
                        ipsum dolorcon sectetur adipiscing elitut.
                      </p>
                    </div>
                  </div>
                  <div class="timeline_item">
                    <div class="date-content timeline-order-1">
                      <div class="date">2024</div>
                    </div>
                    <div class="timeline-icon timeline-order-2">
                      <i class="flaticon flaticon-checked"></i>
                    </div>
                    <div class="timeline-content timeline-order-3 col-md">
                      <h4>Fully Responsive</h4>
                      <p>
                        A seamless UI experience: Lorem Ipsum is simply of the
                        printing typesetting has been the industry’s standard
                        dummy text. Employ global development standards: Lorem
                        ipsum dolorcon sectetur adipiscing elitut.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!--timeline end-->
      </div>
      @endsection



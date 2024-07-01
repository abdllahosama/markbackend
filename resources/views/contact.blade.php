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
                          <h1>تواصل معنا</h1>
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
                                      تواصل معنا
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
              <!--contact start-->

              <section class="pb-lg-0 z-index-1">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-7 col-md-12 ps-lg-10 order-lg-1">
                              <div class="theme-title">
                                  <h6>تواصل معنا</h6>
                                  <h2>أكتب رسالتك!</h2>
                              </div>
                              <form id="contact-form" method="post" action="php/contact.php">
                                  <div class="messages"></div>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <input id="form_name" type="text" name="name" class="form-control"
                                                  placeholder="الأسم" required="required"
                                                  data-error="Firstname is required." />
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <input id="form_email" type="email" name="email" class="form-control"
                                                  placeholder="البريد الألكتروني" required="required"
                                                  data-error="Valid email is required." />
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <input id="form_phone" type="tel" name="phone" class="form-control"
                                                  placeholder="الهاتف" required="required" data-error="Phone is required" />
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <textarea id="form_message" name="message" class="form-control" placeholder="أكتب رسالتك" rows="4"
                                          required="required" data-error="Please,leave us a message."></textarea>
                                      <div class="help-block with-errors"></div>
                                  </div>
                                  <button class="themeht-btn primary-btn mt-4">
                                      <span>ارسل رسالة</span>
                                      <i class="bi bi-arrow-right"></i>
                                  </button>
                              </form>
                          </div>
                          <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
                              <div class="contact-box">
                                  <div class="theme-title">
                                      <h6>تفاصيل التواصل</h6>
                                      <h2>المكتب الرئيسي</h2>
                                      <p>
                                          نحن في شركة ميراكل للدعاية والإعلان نرحب باتصالكم بنا. نحن
                                          ملتزمون بتقديم أفضل الخدمات والدعم لعملائنا الكرام.
                                      </p>
                                  </div>
                                  <ul class="contact-info list-unstyled">
                                      <li>
                                          <i class="flaticon flaticon-gps-1"></i>
                                          <span>زور موقعنا</span>
                                          <p>اسوان شارع المطار امام مطعم المصري</p>
                                      </li>
                                      <li>
                                          <i class="flaticon flaticon-email"></i>
                                          <span>راسلنا علي البريد الألكتروني</span>
                                          <a href="mailto:themeht23@gmail.com">miraclecompany@gmail.com</a>
                                      </li>
                                      <li>
                                          <i class="flaticon flaticon-mobile"></i>
                                          <span>الهاتف</span>
                                          <a href="tel:01273061019​">01273061019​</a>
                                      </li>
                                  </ul>
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
                              </div>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="overflow-hidden pt-0 mt-lg-n10">
                  <div class="container-fluid px-lg-10">
                      <div class="row align-items-center">
                          <div class="col-md-12">
                              <div class="map iframe-h">
                                  <iframe
                                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921"
                                      allowfullscreen=""></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>

              <!--contact end-->
          </div>
      @endsection

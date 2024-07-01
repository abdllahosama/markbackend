     @extends('layouts.master')
     @section('content')
         <nav id="ht-main-nav">
             <a href="#" class="ht-nav-toggle">
                 <i class="bi bi-x-lg"></i>
             </a>
             <a class="navbar-brand logo" href="index.html">
                 <img class="img-fluid" src="{{ asset('assets/portal/images/miracle-logo.')}}" alt="" />
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
                         <h1>الخدمات</h1>
                         <nav aria-label="breadcrumb" class="page-breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                     <a href="index.html">
                                         <i class="bi bi-house-door me-1"></i>الرئيسية</a>
                                 </li>
                                 <li class="breadcrumb-item">
                                     <a href="services.html">الصفحات</a>
                                 </li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                     الخدمات
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

         <div class="page-content">
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
                             <div class="service-item style-1">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-seo-3"></i>
                                 </div>
                                 <div class="service-desc">
                                     <div class="service-title">
                                         <h4>فيديوهات ترويجية</h4>
                                     </div>
                                     <p>
                                         يتخصص فريق الإنتاج لدينا في إنشاء مقاطع فيديو ترويجية
                                         احترافية تسلط الضوء على نقاط قوة علامتك التجارية وتحكي
                                         قصتك بطريقة آسرة.
                                     </p>
                                 </div>
                                 <a class="arrow-btn" href="promo-videos.html">
                                     <i class="bi bi-arrow-up-right"></i>
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
                             <div class="service-item style-1 service-active">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-content-marketing"></i>
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
                             <div class="service-item style-1">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-digital-marketing"></i>
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
                             <div class="service-item style-1">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-email-2"></i>
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
                             <div class="service-item style-1">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-email-2"></i>
                                 </div>
                                 <div class="service-desc">
                                     <div class="service-title">
                                         <h4>تصوير المنتجات</h4>
                                     </div>
                                     <br />
                                     <p>
                                         يلتقط المصورون الخبراء لدينا منتجاتك في أفضل حالاتها،
                                         ويعرضون ميزاتها وفوائدها بطرق جذابة بصريًا.
                                     </p>
                                 </div>
                                 <a class="arrow-btn" href="products-photograhping.html">
                                     <i class="bi bi-arrow-up-right"></i>
                                 </a>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 mt-6">
                             <div class="service-item style-1">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-email-2"></i>
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
                         <div class="col-lg-6 col-md-6 mt-6 mt-md-0">
                             <div class="service-item style-1 service-active">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-content-marketing"></i>
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
                         <div class="col-lg-6 col-md-6 mt-6 mt-md-0">
                             <div class="service-item style-1 service-active">
                                 <div class="service-icon">
                                     <i class="flaticon flaticon-content-marketing"></i>
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
                                         <a class="nav-item nav-link active" id="nav-tab1" data-bs-toggle="tab"
                                             href="#tab1-1" role="tab" aria-selected="true">الاستراتيجية</a>
                                         <a class="nav-item nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab1-2"
                                             role="tab" aria-selected="false">التحليل</a>
                                         <a class="nav-item nav-link" id="nav-tab3" data-bs-toggle="tab" href="#tab1-3"
                                             role="tab" aria-selected="false">التخطيط</a>
                                         <a class="nav-item nav-link" id="nav-tab4" data-bs-toggle="tab" href="#tab1-4"
                                             role="tab" aria-selected="false">التسويق</a>
                                     </div>
                                 </nav>
                                 <!-- Tab panes -->
                                 <div class="tab-content" id="nav-tabContent">
                                     <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                                         <div class="row align-items-center">
                                             <div class="col-lg-6 col-md-12">
                                                 <img class="img-fluid" src="{{ asset('assets/portal/images/tab/01.')}}" alt="" />
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
                                                 <img class="img-fluid" src="{{ asset('assets/portal/images/tab/02.')}}" alt="" />
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
                                                 <img class="img-fluid" src="{{ asset('assets/portal/images/tab/03.')}}" alt="" />
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
                                                 <img class="img-fluid" src="{{ asset('assets/portal/images/tab/04.')}}" alt="" />
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
                                                     <span>اكتشف المزيد</span>
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/01.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/02.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/03.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/04.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/05.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/06.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/07.')}}"
                                                         alt="" />
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
                                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/08.')}}"
                                                         alt="" />
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
                                 <li class="active" aria-current="true" data-bs-target="#testimonial"
                                     data-bs-slide-to="0">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/01.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="1">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/02.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="2">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/03.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="3">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/04.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="4">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/05.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="5">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/06.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="6">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/07.')}}" alt="" />
                                 </li>
                                 <li data-bs-target="#testimonial" data-bs-slide-to="7">
                                     <img class="img-fluid" src="{{ asset('assets/portal/images/testimonial/08.')}}" alt="" />
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </section>

             <!--testimonial end-->
         </div>
     @endsection

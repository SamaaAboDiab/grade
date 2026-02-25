<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- link CDN Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- File CSS  -->
    <link rel="stylesheet" href="style.css" />
    <!-- image icon  -->
    <link rel="icon" href="images/icons/shopping-cart_head.png">
    <title>travelerStore - متجر مستلزمات السفر</title>
</head>

<body>
    <!---------------------HEADER--------------------->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav_box">
                <div class="nav_btns">
                    <div class="nav_toggle" id="nav-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <div class="login_toggle">
                        <a href="signin.php" class="login_link">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </div>

                    <div class="nav_shop" id="cart-shop">
                        <img src="image.png" alt="">
                        <span class="cart_count">0</span>
                    </div>
                </div>

                <div class="nav_menu" id="nav-menu">
                    <i class="fa-solid fa-xmark nav_menu_close" id="menu-close"></i>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav_link active">الرئيسية</a>
                        </li>

                        <li class="nav-item">
                            <a href="products.html" class="nav_link">المنتجات</a>
                        </li>

                        <li class="nav-item">
                            <a href="#services" class="nav_link">الخدمات</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact_us.html" class="nav_link">اتصل بنا</a>
                        </li>

                    </ul>
                </div>
            </div>

            <img src="images/logos/image- (3).png" alt="Logo" class="nav_logo" />
        </nav>
    </header>

    <!---------------------CART--------------------->
    <div class="cart">
        <h2 class="cart_title">عربة التسوق</h2>
        <div class="cart_content"></div>

        <div class="total">
            <div class="total_title">الاجمالي</div>
            <div class="total_price">. جنية</div>
        </div>

        <a href="products.html" class="btn_buy">شراء</a>

        <div class="cart_empty">
            <div><img src="images/Cart-img.png"></div>
            <p>عربة التسوق فارغة</p>
            <a href="products.html" class="btn_shopping">إستكشف المنتجات</a>
        </div>

        <i class="fa-solid fa-xmark" id="cart-close"></i>
    </div>

    <!----------------------MAIN CONTENT---------------------->
    <main class="main">
        <!----------------home ---------------->
        <section class="home">
            <div class="home_box home_box_mobile"  style="text-align: center;">
                <h1 class="home_title">
                    الحق رحلتك واطلب دلوقتي
                </h1>

                <p class="home_description" style="font-size: 20px;">
                   
                    كل حاجة لرحلتك هتلاقيها في مكان واحد وبافضل سعر
                    <br><br>
                رفيقك المثالي في كل رحلة
                </p>
                       <br>
                       <br>
                <a href="products.html" class="home_btn">→ تسوق الان</a>
            </div>

            <div class="home_box">
                <img src="images/Banner.png" alt="" class="home-img" style="width: 120%;"/>
            </div>
        </section>

        <!----------------categories---------------->
        <section class="categories container">
            <div class="category_item">
                <img src="images/Category1.png" alt="" class="category_img" />
            </div>

            <div class="category_item">
                <img src="images/category2.jpeg" alt="" class="category_img" />
            </div>
                <div class="category_item">
                    <img src="images/Category3.jpg" alt="" class="category_img"/>
                </div>
            </div>
        </section>

        <!----------------features products---------------->
        <section class="featured_products container" id="features">
            <h2 class="main_title">أساسيات السفر المميزة</h2>

            <div class="cards grid_content">
                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-1.png" alt="حقيبة ظهر للسفر" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">حقيبة ظهر للسفر مقاومة للماء 40 لتر</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke fa-flip-horizontal"></i>
                        </div>

                        <p class="card_price">1250.<small>00</small> <span>جنيه</span></p>

                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-2.png" alt="شنطة أدوات النظافة" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">طقم شنط أدوات نظافة للسفر (3 قطع)</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>450.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-3.png" alt="وسادة سفر قابلة للنفخ" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">وسادة سفر قابلة للنفخ مع غطاء من المايكروفايبر</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>320.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-4.png" alt="باور بانك" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">باور بانك 20000mAh شحن سريع (يدخل معه بالطائرة)</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>890.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!----------------latest products---------------->
        <section class="latest_products container" id="latest">
            <h2 class="main_title">أحدث مستلزمات الرحلات</h2>

            <div class="cards grid_content">
                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-5.png" alt="عدسة للهاتف" class="card_image" style="width: 120px;" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">عدسة واسعة Macro للهاتف لتصوير المناظر الطبيعية</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>550.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-7.png" alt="منظمة أمتعة" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">

                            منظم لأمتعة السفر مكون من، مجموعة مكعبات للتعبئة،
                            شنطة قابلة للغسل </h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke fa-flip-horizontal"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>680.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-6.png" alt="بوصلة" class="card_image" style="width: 120px;"/>
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">بوصلة رقمية متعددة الوظائف + كشاف ومقياس حرارة</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>430.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-8.png" alt="حقيبة ظهر للسفر" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">حقيبة ظهر عملية 20 لتر (للرحلات اليومية)</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>750.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-9.png" alt="ساعة يدوية" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">ساعة أنالوج بعقارب مضيئة مقاومة للماء</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>1100.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-10.png" alt="زجاجة ماء قابلة للطي" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">زجاجة ماء قابلة للطي (سيليكون) 750 مل</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke fa-flip-horizontal"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>220.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-11.png" alt="منشفة سريعة الجفاف" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">منشفة سفر سريعة الجفاف بحجم كبير</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>360.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="box_img">
                        <img src="images/products/F-product-12.png" alt="حافظة جواز سفر" class="card_image" />
                    </div>
                    <div class="card_details">
                        <h4 class="card_title">حافظة جواز سفر وتذاكر (جلد) متعددة الجيوب</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>290.<small>00</small> <span>جنيه</span></p>
                        <button class="card_btn" id="add_to_card">
                            أضافة إلي العربة
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <!----------------offer---------------->
        <section class="offer">
            <div class="offer_items container">
                <div class="offer_item ">
                    <span>متوفر حصرياً علي Traveler Store</span>
                    <h2 class="offer_title">طقم السفر الأساسي</h2>
                    <p class="offer_description">شنطة سفر صغيرة
                        / شاحن بطارية / باور بنك
                        / محفظة
                        / سماعات رأس
                        / وسادة رقبة للسفر
                        / شنطة شفافة لأدوات العناية الشخصية
                        / شواحن ومحوّل كهرباء
                        / شنطة أدوات شخصية
                        / قناع نوم
                        / شبشب مريح
                        / زجاجة مياه ستانلس

                    </p>
                    <a href="products.html" class="btn">→ اشترى الاّن</a>
                </div>

                <div class="offer_item offer_item_mobile">
                    <img src="images/Banner2.png" class="offer-img">
                </div>

            </div>
        </section>

        <!----------------services---------------->
        <section class="services container" id="services">
            <h2 class="main_title">الخدمات</h2>
            <div class="ser-container grid_content">

                <div class="service">
                    <img src="images/services/service-1.png" alt="" class="service_img">
                    <h3 class="service_title">توصيل سريع ومجانى</h3>
                    <p class="service_p">شحن مجاني لجميع الطلبات التى تزيد عن 500 جنية</p>
                </div>

                <div class="service">
                    <img src="images/services/service-2.png" alt="" class="service_img">
                    <h3 class="service_title">خدمة العملاء على مدار 24 / 7</h3>
                    <p class="service_p">خدمة العملاء ودية على مدار 24 الساعة طوال ايام الأسبوع</p>
                </div>

                <div class="service">
                    <img src="images/services/service-3.png" alt="" class="service_img">
                    <h3 class="service_title">ضمان أستعادة الأموال</h3>
                    <p class="service_p">نقوم بإسترجاع الأموال خلال 30 يوم</p>
                </div>
            </div>

        </section>

        <!----------------testimonial---------------->
        <section class="testimonial container">
            <h2 class="main_title">التعليقات</h2>
            <div class="testimonial_boxs grid_content">
                <div class="testimonial_box">
                    <i class="fa-solid fa-quote-left quote_icon"></i>
                    <p>شنط التنظيم رائعة، وفرتلي مساحة كبيرة في شنطة السفر. أنصح بها.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <img src="images/users/user-1.png">
                    <h3>دانيه أحمد</h3>
                </div>

                <div class="testimonial_box">
                    <i class="fa-solid fa-quote-left quote_icon"></i>
                    <p>
                        حقيبة الظهر ممتازة وخامة قوية. الشحن كان سريع جدًا، وصلت في 3 أيام. تجربة شراء ممتازة.
                    </p>

                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <img src="images/users/user-2.png">
                    <h3>علي السيد</h3>
                </div>

                <div class="testimonial_box">
                    <i class="fa-solid fa-quote-left quote_icon"></i>
                    <p>
                        الباور بانك شحن سريع وخفيف. سعره مناسب جدًا مقارنة بالجودة. شكراً لكم.
                    </p>

                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <img src="images/users/user-3.png">
                    <h3>ريتاج أشرف</h3>
                </div>
            </div>
        </section>

        <!----------------brands---------------->
        <div class="brands container">
            <div class="brand">
                <img src="images/brands/Adidas.png" alt="">
            </div>

            <div class="brand">
                <img src="images/brands/Puma.png" alt="">
            </div>

            <div class="brand">
                <img src="images/brands/Samsung.png" alt="">
            </div>

            <div class="brand">
                <img src="images/brands/huawei.png" alt="">
            </div>

        </div>
    </main>

    <!----------------------FOOTER---------------------->
    <footer class="footer">
        <div class="footer_container container grid_content">

            <div class="footer_item">
                <h3 class="footer_title">معلومات عنا</h3>
                <p class="footer_p">نحن متجر على الإنترنت نقدم أفضل مستلزمات السفر والرحلات ذات الجودة العالية والتسليم
                    السريع</p>
                <img src="images/logos/image(2).jpeg" alt="" class="footer_img">
            </div>

            <div class="footer_item">
                <h3 class="footer_title">الحساب</h3>

                <ul class="footer_list">
                    <li class="footer_li">
                        <a href="signin.php" class="footer_link">تسجيل الدخول</a>
                    </li>
                    <li class="footer_li">
                        <a href="sginup.php" class="footer_link">إنشاء حساب</a>
                    </li>
                    <li class="footer_li">
                        <a href="#" class="footer_link"></a>
                    </li>
                    <li class="footer_li">
                        <a href="products.html" class="footer_link">المنتجات</a>
                    </li>
                </ul>
            </div>

            <div class="footer_item">
                <h3 class="footer_title">الروابط</h3>

                <ul class="footer_list">
                    <li class="footer_li">
                        <a href="#services" class="footer_link">الخدمات</a>
                    </li>
                    <li class="footer_li">
                        <a href="#features" class="footer_link">أساسيات السفر </a>
                    </li>
                    <li class="footer_li">
                        <a href="#latest" class="footer_link">أحدث المستلزمات</a>
                    </li>
                    <li class="footer_li">
                        <a href="contact_us.html" class="footer_link">اتصل بنا</a>
                    </li>
                </ul>
            </div>

            <div class="footer_item">
                <h3 class="footer_title">اتصل بنا</h3>

                <ul class="footer_list">
                    <li class="footer_li">
                        <i class="fa-solid fa-phone footer-icon"></i>
                        <span>1235654399+</span>
                    </li>
                    <li class="footer_li">
                        <i class="fa-solid fa-phone footer-icon"></i>
                        <span>1028753974+</span>
                    </li>
                    <li class="footer_li">
                        <i class="fa-solid fa-envelope footer-icon"></i>
                        <span>travelerStore2025@gamil.com</span>
                    </li>
                    <li class="footer_li">
                        <i class="fa-solid fa-location-dot footer-icon"></i>
                        <span>كفر الشيخ - مصر</span>
                    </li>
                </ul>
            </div>
        </div>

        <p class="copyright container">جميع الحقوق محفوظة Traveler Store &copy; 2025 - 2026</p>
    </footer>



    <!-- File JS App -->
    <script src="Js/app.js"></script>
    <!-- File Js Scroll Header  -->
    <script src="Js/scroll.js"></script>

</body>

</html>
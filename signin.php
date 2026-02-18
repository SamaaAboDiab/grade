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
    <!-- Title  -->
    <title> تسجيل / تسجيل الدخول</title>
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
                            <i class="fa-regular fa-user active_icon"></i>
                        </a>
                    </div>

                </div>

                <div class="nav_menu" id="nav-menu">
                    <i class="fa-solid fa-xmark nav_menu_close" id="menu-close"></i>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav_link ">الرئيسية</a>
                        </li>

                        <li class="nav-item">
                            <a href="products.html" class="nav_link">المنتجات</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php#services" class="nav_link">الخدمات</a>
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

    <!---------------------ACCOUNT--------------------->
    <div class="form_account">
        <div class="form-container container">
            <div class="form-title">تسجيل الدخول</div>

            <div class="social-form">
                <button class="social-btn">
                    Google
                    <img src="images/logos/google.svg" alt="google" class="social-icon">
                </button>

                <button class="social-btn">
                    Apple
                    <img src="images//logos/apple.svg" alt="Apple" class="social-icon">
                </button>
            </div>

            <p class="separator"><span>أو</span></p>

            <form action="#" class="form" ">
            <div class=" input-wrapper">
                <input type="email" placeholder="عنوان البريد الألكتروني" required class=" input input-mail">
                <i class="fa-solid fa-envelope icon_form"></i>
        </div>

        <div class="input-wrapper m-none">
            <input type="password" placeholder="كلمة المرور" required class="input input-mail">
            <i class="fa-regular fa-eye-slash icon_form showPss"></i>
        </div>

        <a href="#" class="forgot-pass-link">هل نسيت كلمة المرور؟</a>
        <input type="submit" class="btn-submit" value="تسجيل الدخول">
        <p class="signup-text">
            ليس لديك حساب؟
            <a href="sginup.php">إنشاء حساب</a>
        </p>
        </form>

    </div>
    </div>
    <!----------------------FOOTER---------------------->
    <footer class="footer">
        <div class="footer_container container grid_content">

            <div class="footer_item">
                <h3 class="footer_title">معلومات عنا</h3>
                <p class="footer_p">نحن متجر على الإنترنت نقدم أفضل المنتجات ذات الجودة العالية والتسليم السريع</p>
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
                        <a href="index.php#services" class="footer_link">الخدمات</a>
                    </li>
                    <li class="footer_li">
                        <a href="index.php#features" class="footer_link">المنتجات المميزة </a>
                    </li>
                    <li class="footer_li">
                        <a href="index.php#latest" class="footer_link">أحدث المنتجات</a>
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
                        <span>travelerstore2025@gamil.com</span>
                    </li>
                    <li class="footer_li">
                        <i class="fa-solid fa-location-dot footer-icon"></i>
                        <span>كفر الشيخ - مصر</span>
                    </li>
                </ul>
            </div>
        </div>

        <p class="copyright container">جميع الحقوق محفوظة.Traveler Store &copy; 2025 - 2026</p>
    </footer>
    <!-- File Js Scroll Header  -->
    <script src="Js/scroll.js"></script>

    <!-- File Account Js  -->
    <script src="Js/account.js"></script>
</body>

</html>
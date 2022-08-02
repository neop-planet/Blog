@extends('website.layout.app')
@section('title',__('main.home'))
@section('content')
<!--Full width header Start-->
<div class="full-width-header ">
   <!--Mobile-screen-->
   <div class="mobile menu-area menu-sticky ">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-4 my-0">
               <div class="rs-header-top">
                  <div class="header-social--contact">
                     <ul>
                        <li>
                           <!-- Notification button -->
                           <div class="top-head-dropdown">
                              <button type="button" class="dropdown-toggle" id="dropdownMenuButton1"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="assets/images/header/noti.svg" alt="Noti-Icon" />
                              </button>
                              <!-- Dropdown -->
                              <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                 <div class="ul-div">
                                    <!--item-->
                                    <li class="p-relative hover">
                                       <div class="row">
                                          <div class="col-1 col">
                                             <div class="bull-div">
                                                <img src="assets/images/header/bull-noti.svg" alt="Icon" />
                                             </div>
                                          </div>
                                          <div class="col-9">
                                             <div href="#" class="top-text-block">
                                                <p>هذا النص يمكن استبداله بنص اخر بديل من معجم اللغة العربية</p>
                                                <span class="top-text-light">7 أكتوبر 2022</span>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="delete-noti">
                                                <a href="#"><img src="assets/images/header/dismiss.svg" /></a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <!--item-->
                                    <li class="p-relative hover">
                                       <div class="row">
                                          <div class="col-1 col">
                                             <div class="bull-div">
                                                <img src="assets/images/header/bull-noti.svg" alt="Icon" />
                                             </div>
                                          </div>
                                          <div class="col-9">
                                             <div href="#" class="top-text-block">
                                                <p>هذا النص يمكن استبداله بنص اخر بديل من معجم اللغة العربية</p>
                                                <span class="top-text-light">7 أكتوبر 2022</span>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="delete-noti">
                                                <a href="#"><img src="assets/images/header/dismiss.svg" /></a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <!--item-->
                                    <li class="p-relative hover">
                                       <div class="row">
                                          <div class="col-1 col">
                                             <div class="bull-div">
                                                <img src="assets/images/header/bull-noti.svg" alt="Icon" />
                                             </div>
                                          </div>
                                          <div class="col-9">
                                             <div href="#" class="top-text-block">
                                                <p>هذا النص يمكن استبداله بنص اخر بديل من معجم اللغة العربية</p>
                                                <span class="top-text-light">7 أكتوبر 2022</span>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="delete-noti">
                                                <a href="#"><img src="assets/images/header/dismiss.svg" /></a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>

                                 </div>

                              </ul>
                           </div>
                        </li>
                        <li><a href="#"><img src="assets/images/header/bag.svg" alt="Header-Icon" /></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-4 my-0">
               <div class="logo-area text-center">
                  <a href="index.html"><img src="assets/images/logo/logo.svg" alt="logo" /></a>
               </div>
            </div>
            <div class="col-4 my-0">
               <div class="hamburger-menu">
                  <input id="menu__toggle" type="checkbox" />
                  <label class="menu__btn" for="menu__toggle">
                     <span class="middle-span"></span>
                  </label>

                  <ul class="menu__box">
                     <li>
                        <form>
                           <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon1"><img
                                       src="assets/images/header/search-form.svg" alt="Search-Icon"></span>
                              </div>
                              <input type="text" class="form-control" placeholder="ابحث عن منتج , مقال" aria-label=""
                                 aria-describedby="basic-addon1">
                              <div class="input-group-prepend">
                                 <button class="btn btn-outline-secondary hover" type="button">ابحث</button>
                              </div>
                           </div>
                        </form>
                     </li>
                     <li><a class="menu__item active" href="index.html">الرئيسية</a></li>
                     <li><a class="menu__item" href="about.html">عن محاصيل</a></li>
                     <li><a class="menu__item" href="#">المتجر</a></li>
                     <li><a class="menu__item" href="projects.html">المشاريع</a></li>
                     <li><a class="menu__item" href="#">المعرض</a></li>
                     <li><a class="menu__item" href="article.html">المقالات</a></li>
                     <li>
                        <hr>
                        <ul>
                           <li><a class="menu__item" href="#"><img src="assets/images/header/user.svg"> حسابي</a>
                           </li>
                           <li><a class="menu__item" href="#"><img src="assets/images/header/fav.svg"> المفضلات</a>
                           </li>
                           <li><a class="menu__item" href="#"><span>اللغة:</span> English</a></li>
                        </ul>
                     </li>
                     <li>
                        <div class="header-social--contact pt-100">
                           <ul>
                              <li><a href="#"><img src="assets/images/header/f-m.svg" alt="Header-Icon"></a></li>
                              <li><a href="#"><img src="assets/images/header/twitter-m.svg" alt="Header-Icon"></a>
                              </li>
                              <li><a href="#"><img src="assets/images/header/insta-m.svg" alt="Header-Icon"></a></li>
                              <li><a href="#"><img src="assets/images/header/m-in.svg" alt="Header-Icon"></a></li>
                           </ul>
                        </div>
                     </li>
                  </ul>

               </div>
            </div>
         </div>
      </div>
   </div>


   <!--Header Start-->
   <header id="rs-header" class="rs-header Desktop">
      <!-- Header Top Start -->
      <div class="rs-header-top">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 col-md-4 col-sm-12 my-0">
                  <div class="header-social--contact">
                     <ul>
                        <li><a href="#"><img src="assets/images/header/fb.svg" alt="Header-Icon" /></a></li>
                        <li><a href="#"><img src="assets/images/header/twitter.svg" alt="Header-Icon" /></a></li>
                        <li><a href="#"><img src="assets/images/header/insta.svg" alt="Header-Icon" /></a></li>
                        <li><a href="#"><img src="assets/images/header/linked.svg" alt="Header-Icon" /></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12  my-0">
                  <div class="logo-area text-center">
                     <a href="index.html"><img src="assets/images/logo/logo.svg" alt="logo" /></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 my-0">
                  <div class="header-social--contact text-left">
                     <ul>
                        <li>
                           <!-- Notification button -->
                           <div class="top-head-dropdown">
                              <button type="button" class="dropdown-toggle" id="dropdownMenuButton1"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="assets/images/header/noti.svg" alt="Noti-Icon" />
                              </button>
                              <!-- Dropdown -->
                              <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                 <div class="ul-div">
                                    <!--item-->
                                    <li class="p-relative hover">
                                       <div class="row">
                                          <div class="col-1 col">
                                             <div class="bull-div">
                                                <img src="assets/images/header/bull-noti.svg" alt="Icon" />
                                             </div>
                                          </div>
                                          <div class="col-9">
                                             <div href="#" class="top-text-block">
                                                <p>هذا النص يمكن استبداله بنص اخر بديل من معجم اللغة العربية</p>
                                                <span class="top-text-light">7 أكتوبر 2022</span>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="delete-noti">
                                                <a href="#"><img src="assets/images/header/dismiss.svg" /></a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <!--item-->
                                    <li class="p-relative hover">
                                       <div class="row">
                                          <div class="col-1 col">
                                             <div class="bull-div">
                                                <img src="assets/images/header/bull-noti.svg" alt="Icon" />
                                             </div>
                                          </div>
                                          <div class="col-9">
                                             <div href="#" class="top-text-block">
                                                <p>هذا النص يمكن استبداله بنص اخر بديل من معجم اللغة العربية</p>
                                                <span class="top-text-light">7 أكتوبر 2022</span>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="delete-noti">
                                                <a href="#"><img src="assets/images/header/dismiss.svg" /></a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <!--item-->
                                    <li class="p-relative hover">
                                       <div class="row">
                                          <div class="col-1 col">
                                             <div class="bull-div">
                                                <img src="assets/images/header/bull-noti.svg" alt="Icon" />
                                             </div>
                                          </div>
                                          <div class="col-9">
                                             <div href="#" class="top-text-block">
                                                <p>هذا النص يمكن استبداله بنص اخر بديل من معجم اللغة العربية</p>
                                                <span class="top-text-light">7 أكتوبر 2022</span>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="delete-noti">
                                                <a href="#"><img src="assets/images/header/dismiss.svg" /></a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>

                                 </div>

                              </ul>
                           </div>
                        </li>
                        <li><a href="#"><img src="assets/images/header/fav.svg" alt="Header-Icon" /></a></li>
                        <li><a href="#"><img src="assets/images/header/bag.svg" alt="Header-Icon" /></a></li>
                        <li>
                           <!-- Login User button -->
                           <div class="user-login">
                              <button type="button" class="dropdown-toggle" id="dropdownMenuButton1"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="assets/images/header/user.svg" alt="Noti-Icon" />
                              </button>
                              <!-- Dropdown -->
                              <ul class="dropdown-menu user-padding" aria-labelledby="dropdownMenuButton1">
                                 <li class="hover"><a href="#"><img src="assets/images/header/login.svg" alt="Icon" />
                                       تسجيل دخول</a></li>
                                 <li class="hover"><a href="#"><img src="assets/images/header/register.svg"
                                          alt="Icon" /> إنشاء حساب جديد</a></li>
                                 <li class="hover "><a class="logout" href="#"><img
                                          src="assets/images/header/logout.svg" alt="Icon" /> تسجيل خروج</a></li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Header Top End -->
      <!-- Menu Start -->
      <div class="menu-area menu-sticky">
         <div class="container">
            <div class="main-menu">
               <div class="row align-items-center">
                  <div class="col-lg-12 col-md-12 col-sm-12 my-0">
                     <nav class="navbar navbar-expand-lg">
                        <div class="search">
                           <button type="button" class="dropdown-toggle" id="dropdownMenuButton1"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="assets/images/header/search.svg" alt="Icon" />
                           </button>
                           <!-- Dropdown -->
                           <ul class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuButton1">
                              <li>
                                 <form>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><img
                                                src="assets/images/header/search-form.svg" alt="Search-Icon" /></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="ابحث عن منتج , مقال"
                                          aria-label="" aria-describedby="basic-addon1">
                                       <div class="input-group-prepend">
                                          <button class="btn btn-outline-secondary hover" type="button">ابحث</button>
                                       </div>
                                    </div>
                                 </form>
                              </li>
                           </ul>
                        </div>

                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link " href="index.html">الرئيسية</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link " href="about.html">عن محاصيل</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">المتجر</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="projects.html">المشاريع</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">المعرض</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link active" href="article.html">المقالات</a>
                              </li>
                           </ul>
                        </div>
                        <div class="language"><a href="#">En</a></div>

                     </nav>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- Menu End -->
   </header>
   <!--Header End-->

</div>

<!--Full width header End-->
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg-article breadcrumbs-overlay">
   <div class="breadcrumbs-inner">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1 class="page-title">المقالات</h1>
               <ul>
                  <li>
                     <a class="active" href="index.html"><img src="assets/images/breadcrumbs/home.svg"
                           alt="Home-Icon"></a>
                  </li>
                  <li>المقالات</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Breadcrumbs End -->
<!--Article Start-->
<div class="article-page">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="item-article">
               <span>بواسطة أدمن / 13فبراير 2021</span>
               <h4><a href="article-details.html">الملوحي جريدة الرياض</a></h4>
               <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                  يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                  التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                  النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
               <div class="img-article">
                  <a href="article-details.html"> <img src="assets/images/article/article-details-1.png" alt="img"></a>
               </div>
            </div>
            <div class="item-article">
               <span>بواسطة أدمن / 13فبراير 2021</span>
               <h4><a href="article-details.html">الملوحي جريدة الرياض</a></h4>
               <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                  يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                  التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                  النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
               <div class="img-article">
                  <a href="article-details.html"> <img src="assets/images/article/article-details2.png" alt="img"></a>
               </div>
            </div>
            <div class="item-article">
               <span>بواسطة أدمن / 13فبراير 2021</span>
               <h4><a href="article-details.html">الملوحي جريدة الرياض</a></h4>
               <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                  يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                  التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                  النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
               <div class="img-article">
                  <a href="article-details.html"> <img src="assets/images/article/artcle-deatls3.png" alt="img"></a>
               </div>
            </div>
         </div>
      </div>
      <img class="icon-article" src="assets/images/article/article-icon.svg">
      <img class="icon-article-left" src="assets/images/article/article-icon.svg">
   </div>
</div>
<!--Article End-->
<!--Full width Footer Start-->
<footer class="full-width-Footer">
   <div class="footer-top">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="follow-us">
                  <ul class="footer-contact-social">
                     <li><span>تابعنا على</span></li>
                     <li><a href="#"><img src="assets/images/footer/fb.svg" alt="Icon"></a></li>
                     <li><a href="#"><img src="assets/images/footer/tw.svg" alt="Icon"></a></li>
                     <li><a href="#"><img src="assets/images/footer/insta.svg" alt="Icon"></a></li>
                     <li><a href="#"><img src="assets/images/footer/linked.svg" alt="Icon"></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-xl-4 xol-lg-4 col-md-6 col-sm-6 col-xs-12">
               <div class="first-part">
                  <div class="logo-footer">
                     <a href="index.html"><img src="assets/images/footer/footer-logo.svg" alt="Footer-logo" /></a>
                  </div>
                  <div class="text-part">
                     <p>نحن مؤسسة استثمار زراعي رائدة في قطاعات الزراعة واألغذية، نوفر كل احتياجات المملكة بالكامل من
                        المحاصيل الزراعية المتنوعة القائمة على الزراعات العضوية والزراعات المائية الحديثة</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 xol-lg-4 col-md-6 col-sm-6 col-xs-12">
               <div class="second-part-links">
                  <div class="title">
                     <h4>روابط سريعة</h4>
                     <div class="list">
                        <ul>
                           <li><a href="#">عن محاصيل</a></li>
                           <li><a href="#">المتجر</a></li>
                           <li><a href="#">المشاريع</a></li>
                           <li><a href="article.html">المقالات</a></li>
                        </ul>
                        <ul>
                           <li><a href="#">شركاء النجاح </a></li>
                           <li><a href="#">تواصل معنا</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 xol-lg-4 col-md-6 col-sm-6 col-xs-12">
               <div class="third-part-contact">
                  <div class="title">
                     <h4>تواصل معنا</h4>
                  </div>
                  <div class="content d-flex">
                     <img src="assets/images/footer/location.svg" alt="Icon">
                     <p>1600 Amphitheatre Parkway, Mountain View, CA 94043</p>
                  </div>
                  <div class="content d-flex">
                     <img src="assets/images/footer/phone.svg" alt="Icon">
                     <p>+1 234 567 8901</p>
                  </div>
                  <div class="content d-flex">
                     <img src="assets/images/footer/mail.svg" alt="Icon">
                     <p>hello@rental.com</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
@endsection
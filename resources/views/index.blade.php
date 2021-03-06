<!doctype html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title>{{config('app.name') ?? 'LARAVEL'}}</title>
        <link rel="shortcut icon" href="{{asset('front/img/favicon.png')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('front/styles.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('front/css/animate.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
            type="text/css">

        <link rel="stylesheet" href="{{asset('front/css/menu.css')}}" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/default.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/vticker.css')}}" type="text/css" media="screen">
        <link href="{{asset('front/css/css_news.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('front/css/responsive-accordion.css')}}" rel="stylesheet" type="text/css"
            media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.fancybox.css')}}" media="screen" />
        <link rel="stylesheet" href="{{asset('front/css/jquery.css')}}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{asset('front/css/web-buttons.css')}}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{asset('front/css/web-buttons_002.css')}}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{asset('front/css/social-colors.css')}}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{asset('front/css/color-variations.css')}}" type="text/css" media="screen">

    </head>

    <body>
        <div id="body_wrapper">
            <!-- Begin : body_wrapper -->
            <div id="header">
                <!-- Begin : header -->
                <div class="header_inner">
                    <div class="logo">
                        <!-- Begin : logo -->
                        <h1><a href="index.php"><img src="{{asset('front/img/logo.png')}}" class="img-responsive"
                                    alt="Logo"></a></h1>
                    </div>
                    <!-- End : logo -->
                </div>
            </div>
            <!-- End : header -->
            <div id="menu">
                <!-- Begin : menu -->
                <div id='cssmenu'>
                    <ul>
                        <li class='active'><a href=''><span>প্রথম পাতা</span></a></li>
                        <li class="has-sub "><a href='#'><span>প্রতিষ্ঠানের তথ্য</span></a>
                            <ul>
                                <li><a href="">প্রতিষ্ঠানের ইতিহাস</a></li>
                                <li><a href="">প্রতিষ্ঠানের ভৌত অবকাঠামো </a></li>
                                <li><a href="">প্রতিষ্ঠানের লক্ষ্য ও অর্জন</a></li>

                            </ul>
                        </li>
                        <li class="has-sub "><a href='#'><span>শিক্ষকমন্ডলীর তথ্য</span></a>
                            <ul>
                                <li><a href=''>বর্তমান শিক্ষকমন্ডলী</a></li>
                                <li><a href="">উপস্থিতি/অনুপস্থিতির তালিকা</a></li>
                            </ul>
                        </li>

                        <li class="has-sub "><a href='#'><span>শিক্ষার্থী তথ্য</span></a>
                            <ul>
                                <li><a href="">বর্তমান শিক্ষার্থী তথ্য</a></li>
                                <li><a href="">উপস্থিতি/অনুপস্থিতির তালিকা</a></li>

                            </ul>
                        </li>
                        <li class='has-sub '><a href='#'><span>একাডেমিক</span></a>
                            <ul>

                                <li><a href="" target="_blank">একাডেমিক ক্যালেন্ডার</a></li>
                                <li><a href="">ক্লাস রুটিন</a></li>
                                <li><a href="">মাল্টিমিডিয়া ক্লাস তথ্য</a></li>
                            </ul>
                        </li>
                        <li><a href=''><span>নোটিশ বোর্ড</span></a> </li>
                        <li><a href=''><span>ফলাফল</span></a></li>
                        <li class='has-sub '><a href='#'><span>সুবিধাসমূহ</span></a>
                            <ul>
                                <li><a href="">কম্পিউটার ল্যাব</a></li>
                                <li><a href="">সাংস্কৃতিক কার্যক্রম</a></li>
                                <li><a href="">লাইব্রেরি</a></li>
                            </ul>
                        </li>
                        <li><a href=''><span>ছবি ঘর</span></a></li>
                        <li class='last '><a href=''><span>যোগাযোগ</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- End : menu -->
            <div id="banner">
                <!-- Begin : banner -->
                <div class="slider-wrapper default">
                </div>
            </div>
            <!-- End : banner -->
            <div id="news">
                <!-- Begin : news -->
                <div class="news_head">
                    <h6 class="news_h6_span">নিউজ আপডেট</h6>
                </div>
                <div class="news_main">
                    <div id="news_ticker">
                        <marquee onmouseover="this.stop();" onmouseout="this.start();">
                            <a href="#">
                                <p class="news_h6">বার্ষিক পরীক্ষা -২০১৮ জন্য (মাসিক পরীক্ষা) ১ম পর্ব ২৯ আগষ্ট আরম্ভ ১১ সেপ্টেম্বর শেষ হবে</p>
                            </a>
                        </marquee>
                    </div>
                </div>
            </div>
            <!-- End : news -->
            <div id="main_page">
                <!-- Begin : main_page -->
                <div class="content">
                    <!-- Begin : content -->
                    <div class="topQuote" style="min-height:215px; margin-bottom:25px">
                        <div id="slider">
                            <a href="#"><img src="{{asset('front/img/Slider-001.jpg')}}" alt="..."/></a>
                            <a href="#"><img src="{{asset('front/img/Slider-006.jpg')}}" alt="..."/></a>
                            <a href="#"><img src="{{asset('front/img/Slider-004.jpg')}}" alt="..."/></a>
                            <a href="#"><img src="{{asset('front/img/Slider-005.jpg')}}" alt="..."/></a>
                        </div>
                    </div>
                    <div class="topQuote" style="min-height:215px; margin-bottom:25px">
                        <h3 class="head_yellow">সভাপতির বাণী</h3>
                        <div class="paragraph">
                            <img src="{{asset('front/img/Adm-000001.jpg')}}" alt="Photo" height="181" style="margin:0px 15px 7px 0px;float: left;">
                            <p>
                            দক্ষিণবঙ্গের অন্যতম শ্রেষ্ঠ বিদ্যাপীঠ Jessore Polytechnic Institute। ১৯৩৫ সাল থেকে বিদ্যাপীঠটি নারী শিক্ষার ক্ষেত্রে অগ্রণি ভূমিকা পালন করে আসছে। ইতিমধ্যে এই বিদ্যাপীঠে পিএসসি, জেএসসি ও এসএসসি পরীক্ষায় সেরা সাফল্য অর্জন করেছে। বাংলাদেশের প্রথম ডিজিটাল জেলা যশোর-এর শ্রেষ্ঠ এ বিদ্যাপীঠটিতে মাল্টিমিডিয়ার মাধ্যমে শিক্ষাদান কার্যক্রম অব্যাহত রয়েছে। সম্প্রতি ডিজিটাল উদ্ভাবনী মেলা-২০১৬-এ বিভাগীয় পর্যায়ে বিদ্যালয়টি শ্রেষ্ঠ শিক্ষাপ্রতিষ্ঠানের মর্যাদা লাভ করেছে।  শিক্ষার পাশাপাশি সহপাঠক্রমিক কার্যাবলিতে বিদ্যালয়টি অনুসরণীয় দৃষ্টান্ত স্থাপন  করেছে। বিদ্যালয়ের ওয়েবসাইটটিতে শিক্ষক শিক্ষার্থী ও অভিভাবকদের কার্যক্রমে গুরুত্বপূর্ণ ভূমিকা পালন করবে বলে আমি দৃঢ়ভাবে বিশ্বাস করি। আমি এ বিদ্যালয়ের.....</p>
                            <div class="read_more">
                                <h6 class="btn_read"><a href="">আরো পড়ুন</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="topQuote" style="min-height:215px">
                        <h3 class="head_green">প্রধান শিক্ষক এর বাণী</h3>
                        <div class="paragraph">
                            <img src="{{asset('front/img/Note-00002.jpg')}}" alt="Photo" height="181" style="margin:0px 15px 7px 0px;float: left;">
                            <p>নারী শিক্ষার প্রসারে ১৯৩৫ সালে তৎকালীন জেলা ম্যাজিষ্ট্রেট জনাব মোঃ আব্দুল মোমিন সাহেবের
                                ঐকান্তিক প্রয়াস মোমিন গার্লস স্কুল। ১৯৬২ সালে বিদ্যালয়টি সরকারি করণ করা হয়। সরকারি
                                নথিপত্র
                                অনুযায়ী বিদ্যালয়টি Jessore Polytechnic Institute নামে পরিচিত হলেও আজও জন মানুষের কাছে
                                মোমিন
                                গার্লস স্কুল নামে পরিচিত। শিক্ষা বিস্তারে ঐতিহ্যের স্মারক হিসাবে এ প্রতিষ্ঠানটি
                                পাঠ্যক্রমিক
                                ও সহ পাঠ্যক্রমিক কার্যাবলিতে অনুকরণ যোগ্য। গতানুগোতিক শিক্ষা পদ্ধতির স্থলে নতুন নতুন
                                শিক্ষা
                                পদ্ধতি,বিজ্ঞান ও তথ্য প্রযুক্তির ব্যবহার নিশ্চিত করার জন্য এ প্রতিষ্ঠানে মাল্টিমিডিয়ার
                                ব্যবহার শুরু করা হয়েছে। এ বিদ্যালয়টির সমাপনী, জে.এস.সি, এস.এস.সি পরীক্ষায় বিগত কয়েক বছর
                                যাবৎ
                                ঈর্ষনীয় ফলাফল এবং জাতীয় পর্যায়ে শ্রেষ্ঠ মাধ্যমিক শিক্ষা..... </p>
                            <div class="read_more">
                                <h6 class="btn_read"><a href="">আরো পড়ুন</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="page_box">
                        <!-- Begin : page_box -->
                        <div class="page_lft">
                            <!-- Begin : page_lft -->
                            <h3 class="head_red">শিক্ষার্থী তথ্য</h3>
                            <div class="page_lft_inner">
                                <div class="p_lft_bg"></div>
                                <div class="p_lft_txt">
                                    <ul>
                                        <li><a href="">বর্তমান শিক্ষার্থী তথ্য</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End : page_lft -->
                        <div class="page_mid">
                            <!-- Begin : page_lft -->
                            <h3 class="head_green">ভর্তি সংক্রান্ত তথ্য</h3>
                            <div class="page_mid_inner">
                                <div class="p_mid_bg"></div>
                                <div class="p_lft_txt">
                                    <ul>
                                        <li><a href="">ভর্তি সংক্রান্ত তথ্য</a></li>
                                        <li><a href="">ভর্তি ফলাফল </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End : page_lft -->
                        <!-- End : page_rgt -->
                    </div>
                    <!-- End : page_box -->
                    <div class="page_box">
                        <!-- Begin : page_box -->
                        <div class="page_b_lft">
                            <!-- Begin : page_lft -->
                            <h3 class="head_yellow">ডাউনলোড</h3>
                            <div class="page_b_lft_inner">
                                <div class="p_b_lft_bg"></div>
                                <div class="p_b_mid_txt">
                                    <ul>
                                        <li><a href="#" target="_blank"> শ্রেণিতে অধ্যয়নের প্রত্যয়নপত্র </a></li>
                                        <li><a href="" target="_blank">মাসিক পরীক্ষার রুটিন </a></li>
                                        <li><a href="" target="_blank"> অর্ধবার্ষিক পরীক্ষার রুটিন </a></li>
                                        <li><a href="" target="_blank"> বার্ষিক পরীক্ষার রুটিন </a></li>
                                        <li><a href="" target="_blank"> শিক্ষাবোর্ড পরীক্ষার ফলাফল </a></li>
                                        <li><a href="" target="_blank">স্কুল পরীক্ষার ফলাফল </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End : page_lft -->
                        <div class="page_b_mid">
                            <!-- Begin : page_lft -->
                            <h3 class="head_sky">একাডেমিক তথ্য</h3>
                            <div class="page_b_mid_inner">
                                <div class="p_b_mid_bg"></div>
                                <div class="p_b_mid_txt">
                                    <ul>
                                        <li><a href="" target="_blank">একাডেমিক ক্যালেন্ডার</a></li>
                                        <li><a href="">ক্লাস রুটিন</a></li>
                                        <li><a href="">প্রয়োজনীয় নথিপত্র</a></li>
                                        <li><a href="">পাঠ্যপুস্তক সহায়ক ই-কন্টেন্ট</a></li>
                                        <li><a href="">মাল্টিমিডিয়া ক্লাস তথ্য</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End : page_lft -->
                        <!-- End : page_rgt -->
                    </div>
                    <!-- End : page_box -->
                </div>
                <!-- End : content -->
                <!-- Begin : inner_sidebar -->
                <div id="inner_sidebar">
                    <div class="page_b_rgt_button" style="margin-top:-15px;margin-bottom:10px;">
                        <!-- Begin : page_rgt -->
                        <div class="p_rgt_txt ">
                            <a href="" target="_blank" class="rcw-button-6 rcw-medium rcw-grow red">eEducation System
                                Login
                                <span class="icon-bg"><i class="fa fa-user"></i></span>
                                <span class="button-icon icon-users"></span>
                            </a>
                            <a href="{{ route('login') }}" target="_blank" class="rcw-button-6 rcw-medium rcw-grow android">Admin Login
                                <span class="icon-bg"><i class="fa fa-user"></i></span>
                                <span class="button-icon icon-calendar2"></span>
                            </a>
                            <a href="" target="_blank" class="rcw-button-6 rcw-medium rcw-grow wetasphalt">ই-অফিস
                                ম্যানেজমেন্ট
                                <span class="icon-bg"><i class="fa fa-calendar"></i></span>
                                <span class="button-icon icon-task"></span>
                            </a>
                            <a href="" target="_blank" class="rcw-button-6 rcw-large rcw-grow stackoverflow">Web-Mail
                                <span class="icon-bg"><i class="fa fa-envelope-o"></i></span>
                                <span class="button-icon icon-envelop"></span>
                            </a>
                        </div>
                    </div>
                    <!-- End : page_rgt -->
                    <div class="sidebar">
                        <!-- Begin : sidebar -->
                        <h3 class="rcw-small stackoverflow">নোটিশ বোর্ড</h3>
                        <div class="news_box">
                            <div id="demo2" class="scroll-text" style="height: 182px !important;">
                                <ul>
                                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                                        <li>
                                            <a href="">
                                                <div class="news_box_inner">
                                                    <!-- Begin : news_box -->
                                                    <p class="news_box_p">বার্ষিক পরীক্ষার ১০ মার্কের মাসিক পরীক্ষা (১ম
                                                        পর্ব) আগামী ২৯/০৮/২০১৮ তারিখ থেকে অনুষ্ঠিত হবে। </p>
                                                </div>
                                                <!-- Begin : news_box -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="news_box_inner">
                                                    <!-- Begin : news_box -->
                                                    <p class="news_box_p">১৫ আগস্টের দিনে ইউনিফর্ম পরিধান করে সকাল ৭.১৫
                                                        মিনিটে বিদ্যালযে উপস্থিত হতে হবে।</p>
                                                </div>
                                                <!-- Begin : news_box -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="news_box_inner">
                                                    <!-- Begin : news_box -->
                                                    <p class="news_box_p">অর্ধবার্ষিক পরীক্ষার ফলাফল-২০১৮</p>
                                                </div>
                                                <!-- Begin : news_box -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="news_box_inner">
                                                    <!-- Begin : news_box -->
                                                    <p class="news_box_p">দূর্গাপূজা, প্রবারণা পূর্মিমা, শ্রী শ্রী
                                                        লক্ষ্মী
                                                        পূজা উপলক্ষে বিদ্যালয় বন্ধ</p>
                                                </div>
                                                <!-- Begin : news_box -->
                                            </a>
                                        </li>
                                    </marquee>
                                </ul>
                            </div>
                        </div>
                        <!-- End : news_box -->
                    </div>
                    <!-- End : sidebar -->
                    <div class="page_b_rgt" style="margin-top:17px;">
                        <!-- Begin : page_rgt -->
                        <h3 class="rcw-small stackoverflow">গুরত্বপূর্ণ লিংক</h3>
                        <div class="p_rgt_txt">
                            <ul>
                                <li><a href="http://result.sib.gov.bd/">বিদ্যালয়ের অভ্যন্তরীণ পরীক্ষার ফলাফল</a></li>
                                <li><a href="http://www.gsa.teletalk.com.bd/app/" target="_blank">ভর্তির আবেদন ফরম</a>
                                </li>
                                <li><a href="http://www.jessore.gov.bd/" target="_blank">যশোর জেলা</a></li>
                                <li><a href="http://www.jessoreboard.gov.bd/">যশোর শিক্ষা বোর্ড</a></li>
                                <li><a href="http://www.bangladesh.gov.bd/">জাতীয় ওয়েব পোর্টাল</a></li>
                                <li><a href="http://www.nctb.gov.bd/">এনসিটিবি</a></li>
                                <li><a href="http://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a></li>
                                <li><a href="http://www.dshe.gov.bd/">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>
                                <li><a href="https://school.surecashbd.com/proedu/">শিওরক্যাশ</a></li>
                                <li><a href="http://automation.sib.gov.bd/">মাউশি কেন্দ্রিয় ডাটাবেজ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End : page_rgt -->
                    <div class="page_rgt" style="margin-top:17px;">
                        <!-- Begin : page_rgt -->
                    </div>
                    <!-- End : page_rgt -->
                    <div class="page_b_rgt" style="margin-top:17px;">
                        <!-- Begin : page_rgt -->
                        <h3 class="rcw-small stackoverflow">দর্শক সংখ্যা</h3>
                        <div class="p_rgt_txt">
                            <script type='text/javascript'
                                src='https://www.freevisitorcounters.com/auth.php?id=5357146fd0f59298eb7b1fe9f4d8a6a8abd51ee5'>
                            </script>
                            <script type="text/javascript"
                                src="https://www.freevisitorcounters.com/en/home/counter/620267/t/9"></script>
                        </div>
                    </div>
                    <!-- End : page_rgt -->
                </div>
                <!-- End : sidebar -->
            </div>
            <!-- End : main_page -->
        </div>
        <!-- End : body_wrapper -->
        <div id="footer">
            <!-- Begin : footer -->
            <footer class="foot-1">
                <section class="wrapper">
                    <div>
                        <ul class="foot-ul-1">
                            <li><a href="">Teachers Login</a></li>
                            <li><a href="">Students Login</a></li>
                            <li><a href="">Parents Login</a></li>
                            <li><a href="">Office Staff</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="foot-ul-4">
                            <li>Jessore Polytechnic Institute</li>
                            <li>টি এন্ড টি ০৪২১-৬৫৭৮৬ মোবাইল নং-০১৭৮১৯৫২৫৩০</li>
                            <li>//////</li>
                        </ul>
                    </div>
                </section>
            </footer>
            <section class="foot-2">
                <div class="copyright">
                    <p id="copytxt">&copy; Jessore Polytechnic Institute</p>
                </div>
                <div class="developer">
                    <p id="developtxt">Developed by : <a target="_blank" href="#">Manoar</a> </p>
                </div>
            </section>
        </div>
        <!-- End : footer_inner -->
        </div>
        <!-- End : footer -->
        <div class="new_div1">
            <!-- Begin : new_div -->
        </div>
        <!-- End : new_div -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{asset('front/js/jquery-latest.min.js')}}"></script>
        {{-- <script src="{{asset('front/js/smoothscroll.min.js')}}"></script> --}}
        <script src="{{asset('front/js/script.js')}}"></script>
        <script src="{{asset('front/js/mostslider.js')}}"></script>
        <script>
            $(document).ready(function () {
            var slider = $("#slider").mostSlider();
        });
        </script>
        <script src="{{asset('front/js/jquery.scrollbox.js')}}"></script>
        <script>
            $(function () {
            $('#demo2').scrollbox({
                linear: true,
                step: 1,
                delay: 0,
                speed: 50
            });
        });
        </script>
        <script src="{{asset('front/js/jquery.fancybox.js')}}"></script>
        <script>
            $(document).ready(function () {
            $('.fancybox').fancybox();
        });
        </script>
    </body>

</html>

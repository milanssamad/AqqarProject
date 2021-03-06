<!doctype html >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ar" dir="rtl"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Soft-Tect Free Landing Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- bootsrap Rtl -->
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/roboto-webfont.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- Css Price Slider -->
        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="css/main.css">
        <!-- offers css -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css"> -->
        <link rel="stylesheet" href="css/gallery/thumbnail-gallery.css">
        <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook"></i></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+06 65 57 67 67</a>
                                <a href="#"><i class="fa fa-envelope"></i>contact@aqqar.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php"><i class="fas fa-home"></i>الرئيسية</a></li>
                        <li><a href="register.php"><i class="fas fa-plus"></i>اضف اعلان</a></li>
                        <li><a href="#service"><i class="fas fa-hands-helping"></i>مساعدة</a></li>                       
                        <li><a href="contact.php"><i class="fas fa-envelope-square"></i>اتصل بنا</a></li>
                        <!-- <li><a href="#price"><i class="fas fa-chevron-circle-down"></i>حول الموقع</a></li> -->
                        <li class="login" data-toggle="modal" data-target="#exampleModal"><a href="#" data-dismiss="modal">تسجيل الدخول</a></li>
                        <li class="login"><a href="register.php">انشاء حساب</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
         <!-- model login -->



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تسجيل الدخول</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <section id="login">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-wrap">
                        <p style="text-align: center;">المرجو إدخال البريد الالكتروني او رقم الهاتف مع كلمةالدخول</p>
                            <form role="form" action="profile.php" method="post" id="login-form" autocomplete="off">
                                <div class="form-group">
                                    <label for="email" class="sr-only">البريد الالكتروني او رقم الهاتف</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="البريد الالكتروني او رقم الهاتف">
                                </div>
                                <div class="form-group">
                                    <label for="key" class="sr-only">كلمةالدخول</label>
                                    <input type="password" name="key" id="key" class="form-control" placeholder="كلمةالدخول">
                                </div>
                                <div class="checkbox">
                                    <span class="character-checkbox" onclick="showPassword()"></span>
                                    <span class="label">إضهار كلمة الدخوال</span>
                                </div>
                                <div class="modal-footer">
                                <input type="submit" id="btn-login"    data-dismiss="modal" class="btn btn-custom btn-lg btn-block" value="تسجيل الدخول">
                                </div>
                            </form>
                            <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal"> هل نسيت كلمة الدخول؟؟</a>
                            <hr>
                        </div>
                    </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
        </section>
      </div>
    </div>
  </div>
</div>

        <!-- Contact -->
        <section>
            <div class="container">
                <div class="row show-offer-background">
                <div class="col-md-6 derection">
                  <!-- map  -->
                  <label for="map" >موقع العقار</label>
                    <input id="pac-input" class="controls" type="text" placeholder="ابحت عن مكان عقارك">
                    <div id="map"></div>
                </div>
                <div class="col-md-6">
                  <div class="details">
                       <div class="col-md-12 details-pos">
                            <div class="price-area">
                                <p class="h3 price-right derection">السعر</p>
                                <span class="badge badge-success derection"><h3><b>100099.98 درهم</b></h3></span>
                            </div>
                        </div>
                        <div class="col-md-12 details-pos">
                            <div class="price-area">
                                <p class="h3 price-right derection">الطابق</p>
                                <span class="badge badge-success derection"><h3>2</h3></span>
                            </div>
                        </div>
                        <div class="col-md-12 details-pos">
                            <div class="price-area">
                                <p class="h3 price-right derection">المساحة</p>
                                <span class="badge badge-success derection"><h3>100 M</h3></span>
                            </div>
                        </div> <!-- end details -->
                  </div>
                </div>
               </div> 
               </div>
        </div><!-- end container -->
       </section> <!-- end section contact -->
       <section>
            <div class="container">
                <div class="row show-offer-background">
                 <div class="col-md-12">
                          <p class="h3 derection">الوصف التفصيلي</p><hr>
                          <p class="derection">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على 
                             الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                               ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام
                             هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقرو</p> <hr>     
                  </div>
                </div>
            </div>
      </section>
<!-- gallery -->
    <section >
    <div  class="container gallery-container">
    <p class="page-description text-center">صور للعقار</p>
    <div dir="ltr" class="tz-gallery" >
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="../images/park.jpg">
                    <img src="../images/park.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="../images/bridge.jpg">
                    <img src="../images/bridge.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="lightbox" href="../images/tunnel.jpg">
                    <img src="../images/tunnel.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="../images/coast.jpg">
                    <img src="../images/coast.jpg" alt="Coast">
                </a>
            </div>
        </div>

    </div>

</div>
    </section>
<!-- endgalery -->
 <!--  end details offer -->
 <hr>
 <section>
              <div class="container">
                  <div class="row show-offer-background main-style-offer">
                      <div class="contant">
                        <div class="col-md-4 main-style-offer">
                        <p></p><p></p>
                        </div>
                        <div class="col-md-4 main-style-offer">
                        <p class="main-style-text"><b>تواصل مع المعلن</b></p>
                        <p class="text-style"><b>0645678676</b><i style="margin-left: 10px;"; class="fas fa-phone-square"></i> </p>
                        </div>
                        <div class="col-md-4 main-style-offer">
                        <p class="main-style-text"><b>رقم الاعلان</b></p>
                        <p class="text-style"><b>567890</b></p>
                        </div>
                         <!-- <table class="table">
                             <thead >
                             <th class="table-align">
                                
                                 </th>
                                 <th class="table-align">
                               
                                 </th>
                             </thead>
                             <tbody>
                                 <tr>
                                 <td class="table-align"><p class="h3"><b>564567</b> </p></td>
                                     <td class="table-align"><p class="h3"><b>0656453454</b></p></td>
                                     
                                 </tr>
                             </tbody>
                         </table> -->
                      </div>
                  </div>
              </div>
      </section><!-- details -->
      <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>القائمة</h5>
                                    <ul>
                                    <li><a href="#price">حول الموقع</a><a href="#business">اتصل بنا</a><a href="#home">الرئيسية</a></li>
                                    <li><a href="#service">مساعدة</a><a href="#features">اضف اعلان</a></li>                       
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>نص تجريبي</h5>
                                    <ul>
                                        <li>نص تجريبي & نص تجريبي</li>
                                        <li>نص تجريبي نص تجريبي نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>نص تجريبي</h5>
                                    <ul>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي نص تجريبي</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">
                                    <h5>نص تجريبي</h5>
                                    <ul>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي</li>
                                        <li>نص تجريبي نص تجريبي</li>
                                    </ul>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="images/logo.png" alt="logo" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Made with by <a target="_blank" href="http://abdessamadBoutament.me"> MilanDev </a>2018. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
        <!-- JavaScript & jquery -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/main.js"></script>
        <!-- pagination script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script src="js/script.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script> -->
        <!-- jQuery Price Slider -->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
        <!-- <script>
        $( function() {
            $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 10000000,
            values: [ 0, 0 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
        </script> -->
        <script>
            function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password'); 
        
    }
    
}
        </script>
<script src="js/gallery/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script defer src="js/fontawesome-all.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtQIdGGu4w5Eb3b1-xFqesQGcgwaMef7E&libraries=places&callback=initAutocomplete"
         async defer></script>  
    </body
</body>
</html>
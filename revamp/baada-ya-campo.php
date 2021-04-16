<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whether saving for your child’s education, a new car or your retirement, Jubilee Life has the perfect plan. A life saving plan.">
    <meta name="keywords" content="Jubilee Leadership">
    <title>Baada ya Campo</title>
   <link rel="stylesheet" href="https://jubileeinsurance.com/ke/wp-content/themes/digital/assets/css/bootstrap.min.css"> 
   <!-- <script src="https://jubileeinsurance.com/ke/wp-includes/js/jquery/jquery.js"></script>  -->
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   
   <!-- <script src="https://jubileeinsurance.com/ke/wp-content/themes/digital/assets/js/bootstrap.bundle.min.js" defer=""></script> -->
   
   <!-- TO BE REOMOVED-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <!-- TO BE REMOVED -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    

    <!-- <link rel="icon" type="image/png" href="images/logo.png"/> -->

    </head>
    

<body>
    <div id="life-insurance-page" class="fullwidth">
        <div class="row top-most small-body-margin" id="top">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <a href="index.php"><img src="images/logo.png" alt="" class="img-responsive logo"></a>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 top-right">
                <span class="user-icon-span" data-toggle="modal" data-target="#selfServiceModal"><img src="images/user-icon.png" alt="" class="user-icon img-responsive"> Self Service</span>
                <span class="country-label dropbtn"><span id="active-country"> Kenya</span> <i class="fa fa-chevron-down" id="countries-chevron"></i> </span>
                
                <div class="dropdown-content" id="myDropdown">
                    <!-- <a href="index.php">Kenya</a> -->
                    <a href="https://jubileeinsurance.com/tz/general">Tanzania</a>
                    <a href="https://jubileeinsurance.com/ug/">Uganda</a>
                    <a href="https://jubileeinsurance.com/bu/personal/">Burundi</a>
                    <!-- <a href="http://">Mauritius</a> -->
                  </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light main-nav small-body-margin">
            <button class="navbar-toggler ml-auto float-xs-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="life_insurance.php">Life Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="health-insurance.php">Health Insurance</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="general-insurance.php">General Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="financial-services.php">Jubilee Financial Services</a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav">
                    <li class="nav-item search-li">
                        <a class="nav-link" href="#">Search &nbsp; <img src="images/search-icon.png" alt=""> </a>
                    </li>
                    
                </ul> -->
            </div>
        </nav>
        <?php
            include 'includes/self-service-modal.php'
        ?>
       
    </div>  <!-- end life-insurance-page-->
    <div class="bg-gray row plan-top" id="top"> 
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 plan-top-left">
                <div class="plan-intro">
                        <div class="plan-intro-in">
                            <h1>Baada ya Campo</h1>
                            <p>This is a life insurance policy tailored to enable
a University or College student to build a fund
over a period of 4 to 6 years depending on the
duration of the course.</p>                        
                        </div>
                </div>
                <div class="plan-top-buttons">
                    <button class="get-quote-btn"><a href="">GET QUOTE</a></button>
                    <span class="plan-top-learn-more">  <a href="#what-we-offer">
                     <img src="images/arrow-right-circle.png" alt="" class="plans-arrow-right img-responsive">
                            <span class="read-more">Lean More</span></a>
                    </span>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 plan-top-right">
                <img src="images/baada-ya-campo-banner.png" alt="" class="plan-banner img-responsive">
            </div>
    </div>
    <!-- career life -->
        <div class="container-fluid finance-philosophy" id="what-we-offer" style="padding-top:0px; margin-top:0px">
           
           <img src="images/baada-ya-campo-center.png" alt="" class="img-responsive phil-img"> 
           
            <div class="phil-right row" style="">
               
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                       <img src="images/red-dots-few.png" alt="" class="red-dots-phil img-responsive">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 phil-right-right">
                       <p class="finance-sub-title">What we offer </p>
                       <p class="phil-info">
                       Start your hustle with the right footing
after campus life. The fund is intended
to help the fresh graduates settle into life
out of college by providing cash for immediate
needs such as daily living expenses, tarmacking,
or even setting up business ventures for
those enterprising fresh graduates.
<br>
This plan, in addition to providing a savings
opportunity, also ensures that the student enjoys
a life assurance cover equivalent to 75% of the
sum assured in the event of untimely and
premature death of the student during the years
of study (or the term of the savings plan).
       
                       </p>
                       
                       <a href="#benefits" class="finance-obj-learn-more-link">
                           <img src="images/icon-feather-arrow-right-circle-gray.png" alt="" class="finance-objectives-arrow-right img-responsive">
                           <span class="finance-obj-learn-more">Benefits</span>
                       </a>
                    </div>
                </div>                 
        </div>
        <!-- end career life -->
        <div class="row plan-benefits-container" id="benefits">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                </div>
                <div class="plan-benefits col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="benefits-title-div">
                        <img src="images/red-dots-few.png" alt="" class="benefits-red-dots img-responsive">
                        <p class="plan-sub-title">Benefits at a glance </p>
                    </div>

                    <div class="benefits-wrapper row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 benefits-item active">
                            <img src="images/benefits/lumpsum.png" alt="" class="benefit-img img-responsive">
                            <div class="benefit-details">
                                <img src="images/benefitpointer.png" alt="" class="img-responsive benefit-pointer">
                                <div class="benefit-title-wrapper">
                                    <p class="benefit-title">Helps in <br>developing <br>a savings <br>culture</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 benefits-item">
                            <img src="images/benefits/lumpsum.png" alt="" class="benefit-img img-responsive">
                            <div class="benefit-details">
                                <img src="images/benefitpointer.png" alt="" class="img-responsive benefit-pointer">
                                <div class="benefit-title-wrapper">
                                    <p class="benefit-title">Provides financial <br>independence <br>after campus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 benefits-item">
                            <img src="images/benefits/lumpsum.png" alt="" class="benefit-img img-responsive">
                            <div class="benefit-details">
                                <img src="images/benefitpointer.png" alt="" class="img-responsive benefit-pointer">
                                <div class="benefit-title-wrapper">
                                    <p class="benefit-title">Provides a<br>life assurance <br>cover</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 benefits-item">
                            <img src="images/benefits/lumpsum.png" alt="" class="benefit-img img-responsive">
                            <div class="benefit-details">
                                <img src="images/benefitpointer.png" alt="" class="img-responsive benefit-pointer">
                                <div class="benefit-title-wrapper">
                                    <p class="benefit-title">Flexible<br>savings<br>plan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>    
        </div>

       <div class="floating-buttons">
           <div class="float-contents row">
                <div class="floating-left floating-divs">
                    <a href="">
                        <img src="images/download-float-white.png" alt="" class="img-responsive">
                        <p>DOWNLOADS</p>
                    </a>
                </div>
                <div class="floating-right floating-divs">
                    <a href="">
                        <img src="images/help-float-white.png" alt="" class="img-responsive">
                        <p>NEED ASSISTANCE</p>
                    </a>
                </div>               
           </div>

       </div>


   </div>

    <?php
            include 'includes/callback-modal.php';
            include 'includes/footer-life.php';
        ?>
   
   	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script> -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
       <script src="scripts.js"></script>
   <script type="text/javascript">

    document.getElementById("year").innerHTML = new Date().getFullYear();
     </script>
   
</body>
</html>
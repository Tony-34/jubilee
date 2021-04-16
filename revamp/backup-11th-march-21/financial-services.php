<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jubilee Financial Services Ltd (JFSL) focuses on providing fund management and investment advisory products.">
  <meta name="keywords" content="Jubilee Financial Services Ltd">
    <title>Jubilee Financial Services</title>
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
    <div id="finance-services-page " class="fullwidth">
        <div class="row top-most small-body-margin" id="top">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- <img src="images/logo.png" alt="" class="img-responsive logo"> -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="life_insurance.php">Life Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="health-insurance.php">Health Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="general-insurance.php">General Insurance</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Jubilee Financial Services</a>
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
        <div class="gray-container fullwidth">
            <div class="life-insurance-div row small-body-margin">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 life-intro">
                    <div class="life-intro-in">
                        <h1>Financial Services</h1>
                        <p>Jubilee Financial Services Ltd (JFSL) focuses on providing fund
                            management and investment advisory  products.</p>                          
                    </div>

                </div>
                <!-- <div class="deails-div col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="deals-wrapper" >
                        <p class="deals-label"> </p>
                        <div class="deals"  >
                            <a href="https://jubileeinsurance.com/ke/individual-family-health-cover/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/j-care-banner.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/corporate-health-cover/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/corporate-insurance-patient.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/jbiz-sme-health-cover/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/jbiz-patient.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/whole-life/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/Anticipated-Endowment-Plan-banner.png" alt="" class="img-responsive"></div></span></a>
                        </div>
                      <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <span class="slider__label sr-only">
                      </div>
                    </div>
                    
                </div> -->
                <div class="life-center-big">
                    <img src="images/finance-big.png" alt="" class="img-responsive life-big-img" >
                    <div class="life-center-buttons-div row fin-center-btn-div">
                        <button class="fin-life-center-buttons persons-button"><a href="#company-objectives" class="row"><img src="images/dart.png" alt="" class="fin-life-center-icons person-icon" /> <span>Company<br>Objectives</span></a></button>
                        <button class="fin-life-center-buttons business-button"><a href="#philosophy" class="row"><img src="images/headbulb.png" alt="" class="fin-life-center-icons business-icon" /> <span>Investment<br>Philosophy</span></a></button>
                        <!--<button class="fin-life-center-buttons invest-sol-button"><a href="#investment-solutions" class="row"><img src="images/bulb.png" alt="" class="fin-life-center-icons investment-sol-icon" /><span>Investment<br>Solutions</span></a></button>-->
                         </div>
                </div>

            </div>            
        </div>
        <div class="finance-life-personal-div" id="personal">
            <div class="personal-intro-div row">
                <div class="jfsl-intro" >
                   <p class="finance-sub-title">Jubilee Financial Services Ltd (JFSL)</p> 
                </div>
                <div class="jsfl-brief">
                    <p class="personal-brief">
                        Jubilee Financial Services Ltd (JFSL) focuses on providing fund management 
                        and investment advisory products and services to institutional and retail 
                        clients. It is a wholly owned subsidiary of Jubilee Holdings Ltd, East Africa's 
                        largest insurance group and is licensed and regulated by the Capital Markets Authority (CMA).
                    </p> 
                    <!-- <p>
                        <br> -->
                        <!--<a href="" class="finance-obj-learn-more-link">-->
                        <!--    <img src="images/icon-feather-arrow-right-circle-gray.png" alt="" class="finance-objectives-arrow-right img-responsive">-->
                        <!--    <span class="finance-obj-learn-more">Read More</span>-->
                        <!--</a>-->
                    <!-- </p> -->
                 </div>
            </div>
            
        </div>

        <div class="container-fluid business bg-gray finance-objectives" id="company-objectives">
            <div class="row " >
                    <div class="objectives-left">
                        <p class="finance-sub-title">Company <br> Objectives </p> 
                        <img src="images/red-dots.png" alt="" class="img-responsive red-dots">
                    </div>
                    
                    <div class="objectives-right">
                        <p class="personal-brief" >
                            JFSL is a specialist Investment Manager, providing access to major asset classes,
                             across the East Africa Region. JFSL provides its clients with customised solutions 
                             to their investment needs with a long-term view of giving them value for money.  
                             JFSL seeks to leverage on the team’s experience to deliver superior returns to 
                             its customers.

                        </p>
                        <!--<p>-->
                        <!--    <a href="" class="finance-obj-learn-more-link">-->
                        <!--        <img src="images/icon-feather-arrow-right-circle-gray.png" alt="" class="finance-objectives-arrow-right img-responsive">-->
                        <!--        <span class="finance-obj-learn-more">Read More</span>-->
                        <!--    </a>-->
                        <!--</p>-->
                    </div>                
            </div>
       
        </div>
        <div class="container-fluid finance-philosophy" id="philosophy">
           
                <img src="images/philosophybg.png" alt="" class="img-responsive phil-img"> 
                
                 <div class="phil-right row">
                    
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <img src="images/red-dots-few.png" alt="" class="red-dots-phil img-responsive">
                         </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 phil-right-right">
                            <p class="finance-sub-title">Investment <br>Philosophy </p>
                            <p class="phil-info">
                                JFSL adopts a top-down approach to investment management, 
                                that seeks to use fundamental, quantitative and qualitative 
                                research processes to support a framework that allows us to 
                                identify and maximise value. We believe a balance between risk 
                                and return parameters is critical in enhancing and safeguarding 
                                value for our clients. We believe that long term sustainable performance
                                can be achieved through strategic asset allocation that is aligned to 
                                specific stringent risk controls that will result in growth of the portfolio 
                                over the long run.
            
                            </p>
                            
                            <!-- <a href="" class="finance-obj-learn-more-link">
                                <img src="images/icon-feather-arrow-right-circle-gray.png" alt="" class="finance-objectives-arrow-right img-responsive">
                                <span class="finance-obj-learn-more">Benefits</span>
                            </a> -->
                         </div>
                   
                </div>                 
            </div>

            
        </div>


       
<!--            <div class="container-fluid business bg-gray" id="investment-solutions">-->
<!--                <div class="business-container" id="business" >-->

<!--                    <div class="personal-intro-div row ">-->
<!--                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">-->
<!--                        <p class="finance-sub-title">Investment <br> Solutions Offered</p> -->
<!--                        </div>-->
<!--                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">-->
<!--                            <p class="personal-brief">-->
<!--                                JFSL offers a variety of segregated products as listed below which can <br> be discretionary or non-discretionary. -->
<!--                            </p> -->
<!--                        </div>-->
<!--                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bs-bar-wrap">-->
<!--                                <div class="bs_progress" role="bs_progressbar" aria-valuemin="0" aria-valuemax="100">-->
<!--                                    <span class="bs_slider__label sr-only">-->
<!--                                </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                    <div class="life-business-plans-wrapper" >-->
<!--                        <div class="business-plans-slider">-->
<!--                            <div class="business-plan-item">-->
<!--                                <div class="business-plan-content">-->
<!--                                    <div class="bs-plan-slider-img-wrapper">-->
<!--                                        <img src="images/plans/insurance-funds-management.jpg" alt="" class="img-responsive bs-plan-slider-img">-->
<!--                                    </div>-->
<!--                                    <div class="bs-plan-info">-->
<!--                                        <p class="bs-plan-title">Insurance Funds Management</p>-->
<!--                                        <p class="bs-plan-description">-->
<!--                                            This involves managing life, general and health insurance funds. -->
<!--This is undertaken through investment solutions as guided by various regulations ...-->

<!--                                        </p>-->
<!--                                        <a href="https://jubileeinsurance.com/ke/group-last-expense-cover/" class="bs-plans-link"> -->
<!--                                            <img src="images/arrow-right-circle.png"  data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png"  alt="" class="bs-plans-arrow-right img-responsive" alt="" class="bs-plans-arrow-right img-responsive">-->
<!--                                            <span class="bs-plan-learn-more">Learn More</span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="business-plan-item">-->
<!--                                <div class="business-plan-content">-->
<!--                                    <div class="bs-plan-slider-img-wrapper">-->
<!--                                    <img src="images/plans/wealth-fund.jpg" alt="" class="img-responsive bs-plan-slider-img">-->
<!--                                    </div>-->
<!--                                    <div class="bs-plan-info">-->
<!--                                        <p class="bs-plan-title">JFSL Wealth Fund</p>-->
<!--                                        <p class="bs-plan-description">-->
                                            
<!--A product suited for investors who aim to invest their funds for a specific period with a target return on investments. -->
<!--Investment management follows guidelines specified...</p>-->
<!--                                        <a href="https://jubileeinsurance.com/ke/group-life-policy/" class="bs-plans-link"> -->
<!--                                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" class="bs-plans-arrow-right img-responsive" alt="" class="bs-plans-arrow-right img-responsive">-->
<!--                                            <span class="bs-plan-learn-more">Learn More</span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="business-plan-item">-->
<!--                                <div class="business-plan-content">-->
<!--                                    <div class="bs-plan-slider-img-wrapper">-->
<!--                                        <img src="images/plans/treasury-management.jpg" alt="" class="img-responsive bs-plan-slider-img">-->
<!--                                    </div>-->
<!--                                    <div class="bs-plan-info">-->
<!--                                        <p class="bs-plan-title">Treasury Management</p>-->
<!--                                        <p class="bs-plan-description">-->
<!--                                            This is a tailor-made treasury management service product targeted at corporates, trusts and individuals.-->
<!--                                            It aims to provide cashflow management and investment solutions.</p>-->
<!--                                        <a href="https://jubileeinsurance.com/ke/group-mortgage-protection-cover/" class="bs-plans-link"> -->
<!--                                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" class="bs-plans-arrow-right img-responsive" alt="" class="bs-plans-arrow-right img-responsive">-->
<!--                                            <span class="bs-plan-learn-more">Learn More</span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="business-plan-item">-->
<!--                                <div class="business-plan-content">-->
<!--                                    <div class="bs-plan-slider-img-wrapper">-->
<!--                                    <img src="images/plans/poension-fund-management.jpg" alt="" class="img-responsive bs-plan-slider-img"> -->
<!--                                    </div>-->
<!--                                    <div class="bs-plan-info">-->
<!--                                        <p class="bs-plan-title">Pension Fund Management</p>-->
<!--                                        <p class="bs-plan-description">This is a fund management solution to pension schemes which follows RBA investment guidelines and a scheme’s Investment Policy statement.</p>-->
<!--                                        <a href="https://jubileeinsurance.com/ke/occupational-retirement-benefit-scheme/" class="bs-plans-link"> -->
<!--                                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png"  class="bs-plans-arrow-right img-responsive" alt="" class="bs-plans-arrow-right img-responsive">-->
<!--                                            <span class="bs-plan-learn-more">Learn More</span></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        
                        

<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->

          <div class="company-board-div bg-gray">
            <div class="board-header">
                <img src="images/red-dots-few.png" alt="" class="red-dots img-responsive">
                <button class="board-tabs directors-tab active">Board of DIRECTORS</button>
                <button class="board-tabs management-tab">Management</button>
            </div>
            <div class="directors-row row" >

                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>

                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>
                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>
                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>
                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>
                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>
                <div class="director-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="director-content">
                       <div class="director-img-wrapper">
                            <img src="images/directors/director.png" alt="" class="img-responsive">
                       </div>
                       <div class="director-brief">
                        <p class="director-title">Nazir Juma</p>
                        <p class="director-role">Chairman</p>
                        <br>
                        <a href="#" class="directors-link"> 
                            <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-red.png" alt="" class="circled-arrow img-responsive">
                            <span class="director-learn-more">Read More</span></a>
                       </div>
                    </div>
                </div>
            
            </div>  <!-- End directors row -->

            <!-- End Business Container Fluid-->
        </div> 
    </div>
    <?php
            include 'includes/callback-modal.php'
        ?>
    <div class="container-fluid footer">
        <footer>
            <div class="row footer-top-separator small-body-margin">
                
                <a href="#top"><div class="back-to-top">
                    <img src="images/up-arrow.png" alt="" class="to-top-arrow img-responsive"><br>
                        <span>Back To Top</span>
                    </div></a>
               
            </div>
            
            <div class="small-body-margin footer-container">
                <div class="footer-top-wrap row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-left">
                        <p class="have-question">Have a Question?</p>
                        <p class="call"> <img src="images/call.png" alt="" class="img-responsive"> 
                            <span class="phone-number"> +254 709 949 000</span> </p>
                        <button class="callback btn btn-danger" data-toggle="modal" data-target="#callbackModal">
                            Request A CallBack <img src="images/arrow-right-callback.png" alt="" class="img-responsive call-arrow">
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 row footer-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-center-left">
                            <p class="footer-subhead">Company</p>
                            <ul class="footer-list">
                                <li><a href="https://jubileeinsurance.com/ke/about-us/"> About Us</a></li>
                                <li><a href="leadership.php"> Leadership</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/about-us/corporate-governance/">Governance</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/jubilee-careers/">Careers</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/blog/">Blog</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/contact-us/">Contact Us</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/wp-content/uploads/2020/12/Appendix-2_Jubilee-Insurance-Service-Excellence-Charter.pdf" target="_blank">Service Charter</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-center-center">
                            <p class="footer-subhead">Resources</p>
                            <ul class="footer-list">
                                <li><a href="https://jubileeinsurance.com/ke/faqs/">FAQs</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/media-centre/annual-report/">Annual Reports</a></li>
                                <!-- <li>News & Updates</li> -->
                                <li><a href="https://jubileeinsurance.com/ke/shareholder-information/">Shareholder Information</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/media-centre/financial-reports/">Financial Reports</a> </li>
                                <li><a href="https://jubileeinsurance.com/ke/media-centre/press-release/">Press Release</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/media-centre/downloads/">Downloads</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/media-centre/policy-documents/">Policy Documents</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 footer-center-right">
                            <p class="footer-subhead">Our Initiatives</p>
                            <ul class="footer-list">
                                <li><a href="https://jubileeinsurance.com/ke/about-us/csr/">Corporate Social Responsibility</a></li>
                                <li><a href="https://jubileeinsurance.com/ke/wellness/">Maisha Fiti</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-right">
                        <p class="footer-subhead">Head Office</p>
                        <p class="footer-contact">
                            Jubilee Insurance Centre, Wabera Street <br>
                            P. O. Box 30376 - 00100 Nairobi, Kenya <br>
                            Telephone: +254 (0) 20 328 1000 <br>
                            Fax: +254 (0) 20 328 1150 <br>
                            info@jubileekenya.com
                        </p>
                    </div>                    
                </div>
                <div class="row footer-bottom">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <ul class="footer-bottom-list">
                            <li>Regulated by the Insurance Regulatory Authority</li>
                            <li>Powered by Jubilee ICT</li>
                            <li>Terms of Service </li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 socials-div">
                        <ul class="socials">
                            <li> <a href="https://www.facebook.com/JubileeInsurance/" target="_blank"> <span class="fab fa-facebook-f"></span></a> </li>
                            <li><a href="https://twitter.com/JubileeInsKE" target="_blank"> <span class="fab fa-twitter"></span></a> </li>
                            <li><a href="https://www.linkedin.com/company/jubileeinsurance" target="_blank"> <span class="fab fa-linkedin"></span></a> </li>
                            <li><a href="https://www.youtube.com/channel/UC_DfdHN15CKzHW1uXGKCfEA/videos" target="_blank"> <span class="fab fa-youtube"></span></a> </li>
                            <li><a href="https://www.instagram.com/jubileeinsurance_ke/" target="_blank"> <span class="fab fa-instagram"></span></a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <p class="copyright">
                            © <span id="year"></span> All Rights Reserved
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>
   	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script> -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
       <script src="scripts.js"></script>
   <script type="text/javascript">

        $(document).ready(function(){

            $('.business-plans-slider').slick({
             dots: false,
             infinite: true,
             slidesToShow: 3,
             slidesToScroll: 1,
             variableWidth: true,
             centerMode: false,
             autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
             responsive: [
               {
                 breakpoint: 1024,
                 settings: {
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true,
                   dots: false,
                   variableWidth: true,
                   centerMode: false,
                 }
               },
               {
                 breakpoint: 800,
                 settings: {
                    slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true,
                   dots: false,
                   variableWidth: true,
                   centerMode: false,
                 }
               },
               {
                 breakpoint: 600,
                 settings: {
                    slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true,
                   dots: false,
                   variableWidth: true,
                   centerMode: false,
                 }
               },
               {
                 breakpoint: 480,
                 settings: {
                    slidesToShow: 2,
                   slidesToScroll: 1,
                   infinite: true,
                   dots: false,
                   variableWidth: true,
                   centerMode: false,
                 }
               }
             ],
            
        }).slick('slickFilter', '.business-plan-item');
          
        $('.deals').slick({
             dots: false,
             infinite: true,
             slidesToShow: 3,
             slidesToScroll: 1,
             variableWidth: true,
             centerMode: false,
             autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
             responsive: [
               {
                 breakpoint: 1024,
                 settings: {
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true,
                   dots: false,
                   variableWidth: true,
                   centerMode: false,
                 }
               },
               {
                 breakpoint: 800,
                 settings: {
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   variableWidth: true,
                   centerMode: true,
                 }
               },
               {
                 breakpoint: 600,
                 settings: {
                   slidesToShow: 2,
                   slidesToScroll: 1,
                   variableWidth: true,
                   centerMode: true,
                 }
               },
               {
                 breakpoint: 480,
                 settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   variableWidth: true,
                   centerMode: true,
                 }
               }
             ],
            
        });

        var $slider = $('.deals');
        var $progressBar = $('.progress');
        var $progressBarLabel = $( '.slider__label' );
        
        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
            var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
            
            $progressBar
            .css('background-size', calc + '% 100%')
            .attr('aria-valuenow', calc );
            
            $progressBarLabel.text( calc + '% completed' );
        });
        
        $slider.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 400
        }); 

    });

    $(".business-plan-content").mouseover(function () {
            // alert("hey");
                $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').attr('src', $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').data("hover"));

                }).mouseout(function () {
                 $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').attr('src', $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').data("src"));
            });

    document.getElementById("year").innerHTML = new Date().getFullYear();
     </script>
</body>
</html>
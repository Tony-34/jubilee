<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Peace of mind comes from knowing you and your family are covered and protected by the best health insurance cover.">
    <meta name="keywords" content="Jubilee Health Insurance">
 
    <title>Health Insurance</title>
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
    <div id="health-insurance-page" class="fullwidth">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="health-insurance.php">Health Insurance</a>
                    </li>
                    <li class="nav-item">
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

        <div class="gray-container fullwidth" id="top">
            <div class="life-insurance-div row small-body-margin">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 life-intro">
                    <div class="life-intro-in">
                        <h1>Health Insurance</h1>
                        <p>Peace of mind comes from knowing you
                            and your family are covered and protected
                            by the best health insurance cover.</p>                          
                    </div>

                </div>
                <!-- <div class="deails-div col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="deals-wrapper" >
                        <p class="deals-label">   </p>
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
                    <img src="images/health-big.png" alt="" class="img-responsive life-big-img" >
                    <div class="life-center-buttons-div">
                        <button class="life-center-buttons persons-button"><a href="#individual"><img src="images/icon-personal.png" alt="" class="life-center-icons person-icon"> <span>Individual</span></a></button>
                        <button class="life-center-buttons business-button"><a href="#corporate"><img src="images/icon-busness.png" alt="" class="life-center-icons business-icon"> <span>Corporate</span></a></button>
                        <button class="life-center-buttons business-button"><a href="https://jubileeinsurance.com/ke/wellness/"><img src="images/icon-busness.png" alt="" class="life-center-icons business-icon"> <span>Maisha Fiti</span></a></button>
                   
                    </div>
                </div>

            </div>            
        </div>
        <div class=" life-personal-div" id="individual">
           
            <div class="personal-intro-div row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                   <p class="sub-title">Individual</p> 
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <p class="personal-brief">Your family’s health and safety means the world to you. We understand that and want to help you protect your loved ones from situations beyond your control.</p> 
                 </div>
            </div>
            <div class="health-plans row">
                <div class="health-plan col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="health-plan-content">
                        <img src="images/plans/jiiunue.png" alt="" class="img-responsive health-plan-icon jiinue-icon">
                        <p class="health-plan-title">J-Care</p>
                        <p class="health-plan-description">
                            J-Care is an all-inclusive, affordable
                            medical insurance product for
                            individuals and families
                            that is available online.
                        </p>
                        <a href="https://digital.jubileeinsurance.com/jcare-johari" class="health-plans-link"> <img src="images/arrow-right-circle-red.png" alt="" class="health-plans-arrow-right img-responsive">
                            <span class="health-plan-learn-more">Read More</span></a>
                    </div>
                </div>
                <div class="health-plan col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="health-plan-content">
                        <img src="images/plans/jcare.png" alt="" class="img-responsive health-plan-icon jcare-icon">
                        <p class="health-plan-title">Johari</p>
                        <p class="health-plan-description">
                            Johari is an all-inclusive, affordable 
                            medical insurance product for individuals 
                            and families that is available online. 
                        </p>
                        <a href="https://digital.jubileeinsurance.com/jcare-johari" class="health-plans-link"> <img src="images/arrow-right-circle-red.png" alt="" class="health-plans-arrow-right img-responsive">
                            <span class="health-plan-learn-more">Read More</span></a>
                    </div>
                </div>
                
            

            </div>
        </div>

        <div class="container-fluid business bg-gray">
            <div class="health-business-container" id="corporate" >

                <div class="personal-intro-div row ">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
                       <p class="sub-title">Corporate</p> 
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <p class="personal-brief">As an employer, you can provide your staff with a cover that provides a holistic approach to their health needs.</p> 
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bs-bar-wrap">
                            <div class="bs_progress" role="bs_progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="bs_slider__label sr-only">
                            </div>
                      </div>

                </div>
                <div class="health-plans-wrapper" style="margin-right: 0px !important;">
                    <div class="health-bs-plans row">
                        <div class="health-plan-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="health-bs-plan-content">
                                <div class="health-bs-plan-slider-img-wrapper">
                                    <img src="images/plans/corporate-health.png" alt="" class="img-responsive health-bs-plan-img">
                                </div>
                                <div class="health-bs-plan-info">
                                    <p class="health-bs-plan-title">JBiz SME Health Cover</p>
                                    <p class="health-bs-plan-description">As an employer, you can provide your staff with a cover that provides a holistic approach to their health needs ranging of great benefits from doctors consultations, physiotherapy, operating theatre fees, diagnostic fees...</p>
                                    <a href="https://jubileeinsurance.com/ke/jbiz-sme-health-cover/" class="health-bs-plans-link"> <img src="images/arrow-right-circle-red.png" alt="" class="health-bs-plans-arrow-right img-responsive">
                                        <span class="health-bs-plan-learn-more">Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="health-plan-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="health-bs-plan-content">
                                <div class="health-bs-plan-slider-img-wrapper">
                                  <img src="images/plans/jbizsme.png" alt="" class="img-responsive health-bs-plan-img">
                                </div>
                                <div class="health-bs-plan-info">
                                    <p class="health-bs-plan-title">Corporate Health Cover</p>
                                    <p class="health-bs-plan-description">When your employees are working hard for you, choosing the right Health cover is essential as it provides: Peace of mind; Protection and Support. The group cover ensures you cater for the overall employee well-being.</p>
                                    <a href="https://jubileeinsurance.com/ke/corporate-health-cover/" class="health-bs-plans-link"> <img src="images/arrow-right-circle-red.png" alt="" class="health-bs-plans-arrow-right img-responsive">
                                        <span class="health-bs-plan-learn-more">Read More</span></a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>

            </div>

       
        </div>
        <!-- End Business Container Fluid-->
        <div class="row bg-white bs-insurance-tips-div small-body-margin">
            <div class="bs-life-tips-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="bs-tips row">
                    <p class="sub-title">Health Tips</p>
                    <p class="personal-brief">
                        Whether saving for your child’s education, a new car
                        or your retirement, Jubilee Life has the perfect plan. A life saving plan.
                    </p> 
                    <div class="bs-tip col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="bs-tip-content">
                            <img src="images/plans/jcare.png" alt="Education Policy" class="img-responsive tip-icon education-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">Telemedicine<br> &nbsp; </p>  
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon"> 
                                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjQnNqy7c3uAhVhoXEKHVZvAHEQFjABegQIARAC&url=https%3A%2F%2Fjubileeinsurance.com%2Fke%2Fwp-content%2Fuploads%2F2020%2F06%2FJUBILEE-HEALTH-PROVIDER-PANEL.pdf&usg=AOvVaw2ZuRvu0BNSd1gq8o-1A1Ey" target="blank"><span class="watch-now">Read More</span></a> 
                                <span class="now-playing">Now Playing</span>
                            </div>                          
                        </div>
                    </div>
                    <div class="bs-tip col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="bs-tip-content">
                            <img src="images/plans/jiiunue.png" alt="Travel Cover" class="img-responsive tip-icon travel-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">Blog<br> &nbsp; </p>
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon">
                                <a href="https://jubileeinsurance.com/ke/blog/"><span class="watch-now">Read More</span></a> 
                                <span class="now-playing">Now Playing</span>
                            </div> 
                        </div>
                    </div>
                    <!-- <div class="bs-tip col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="bs-tip-content">
                            <img src="images/tips/motor.png" alt="Motor Insurance" class="img-responsive tip-icon motor-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">Motor<br>Insurance</p>
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon">
                                <span class="watch-now">Watch Now</span>
                                <span class="now-playing">Now Playing</span>
                            </div> 
                        </div>

                    </div> -->
                </div>
            </div>
              <!-- end tips left-->
            <div class="tips-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
   
                  <iframe width="100%" height="400" src="https://www.youtube.com/embed/N0m8t2Xrrao" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
            </div>
            <!-- End Insurance Tips-->
        </div> 
        
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
                            Jubilee Insurance Centre, Wabera Street, <br>

                            P.O. Box 6694 - 00100 GPO, Nairobi, Kenya <br>

                            Telephone: +254 20 328 1000 <br>

                            Call Centre: +254 709 949 000 <br>

                            Talk2UsHealth@jubileekenya.com
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

    document.getElementById("year").innerHTML = new Date().getFullYear();
     </script>
</body>
</html>
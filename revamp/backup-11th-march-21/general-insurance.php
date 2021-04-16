<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="At Jubilee General we cover … well, everything. And we cover everything. From watches to warehouses, we have a policy perfect for you.">
  <meta name="keywords" content="Jubilee General Insurance">
    <title>General Insurance</title>
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
    <div id="general-insurance-page" class="fullwidth">
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
                    <li class="nav-item active">
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
                        <h1>General Insurance</h1>
                        <p>
                            At Jubilee General we cover … well, everything. And we cover
                                everything. From watches to warehouses, 
                                we have a policy perfect for you.
                        </p>                        
                    </div>

                </div>
                <!-- <div class="deails-div col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="deals-wrapper" >
                        <p class="deals-label"> </p>
                        <div class="deals"  >
                            <a href="https://digital.jubileeinsurance.com/motor"><span class="deals-item"><div><img src="https://digital.jubileeinsurance.com/img/motor/offers.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/personal-accident/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/personal-accident-inner.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/fidelity-guarantee/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/fidelity-giarantee-inner-01.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/marine-hull-cargo-insurance/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/cargo-insurance-inner.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/all-risk-insurance/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/All-risk-inner.png" alt="" class="img-responsive"></div></span></a>
                            <a href="https://jubileeinsurance.com/ke/professional-indemnity/"><span class="deals-item"><div><img src="https://jubileeinsurance.com/ke/wp-content/uploads/2020/07/professional-indemnity-inner.png" alt="" class="img-responsive"></div></span></a>      
                      </div>
                      <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <span class="slider__label sr-only">
                      </div>
                    </div>
                    
                </div> -->
                <div class="life-center-big">
                    <img src="images/general-big.jpg" alt="" class="img-responsive life-big-img" >
                    <div class="life-center-buttons-div">
                        <button class="life-center-buttons persons-button"><a href="#individual"><img src="images/icon-personal.png" alt="" class="life-center-icons person-icon"> <span>Individual</span></a></button>
                        <button class="life-center-buttons business-button"><a href="#corporate"><img src="images/icon-busness.png" alt="" class="life-center-icons business-icon"> <span>Corporate</span></a></button>
                    </div>
                </div>

            </div>            
        </div>
        <div class="life-personal-div" id="individual">
           
            <div class="personal-intro-div row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                   <p class="sub-title">Individual</p> 
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <p class="personal-brief">Let’s cover what you love and what you have worked hard to build.</p> 
                 </div>
            </div>
            <div class="plans row">
                <div class="plan col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="plan-content">
                        <img src="images/plans/personal-accident.png" data-src="images/plans/personal-accident.png" data-hover="images/plans/personal-accident-white.png" alt="" class="img-responsive plan-icon">
                        <p class="plan-title">Personal Accident</p>
                        <p class="plan-description">
                            This is an annual policy which provides compensation 
                            in the event of injuries, disability or death caused 
                            solely by violent, accidental, external and visible events.
                        </p>
                        <a href="personal-accident.php"> <img src="images/arrow-right-circle.png" alt="" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" class="plans-arrow-right img-responsive">
                            <span class="read-more">Read more</span>
                        </a>
                    </div>
                </div>
                <div class="plan col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="plan-content">
                        <img src="images/plans/motor.png" data-src="images/plans/motor.png" data-hover="images/plans/motor-white.png" alt="" class="img-responsive plan-icon">
                        <p class="plan-title">Motor Insurance</p>
                        <p class="plan-description">
                            This is insurance for a motor vehicle such as a car, 
                            which provides protection against loss in the event 
                            of an accident, theft, etc. <br> <br>
                        </p>
                        <a href="https://digital.jubileeinsurance.com/motor"> <img src="images/arrow-right-circle.png" alt="" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" class="plans-arrow-right img-responsive">
                            <span class="read-more">Read more</span>
                        </a>
                    </div>
                </div>
                <div class="plan col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="plan-content">
                        <img src="images/plans/home.png" data-src="images/plans/home.png" data-hover="images/plans/home-white.png" alt="" class="img-responsive plan-icon">
                        <p class="plan-title">Home Insurance</p>
                        <p class="plan-description">
                            Home Insurance also known as Domestic package 
                            provides protection to house plus 
                            possessions (building, electronics, 
                            furniture, clothes, mobile phones etc.) 
                            if stolen or...
                        </p>
                        <a href="https://jubileeinsurance.com/ke/home-insurance/"> <img src="images/arrow-right-circle.png" alt="" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" class="plans-arrow-right img-responsive">
                            <span class="read-more">Read more</span>
                        </a>
                    </div>
                </div>
                <div class="plan col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="plan-content">
                        <img src="images/plans/travel.png" data-src="images/plans/travel.png" data-hover="images/plans/travel-white.png" alt="" class="img-responsive plan-icon">
                        <p class="plan-title">Travel Insurance</p>
                        <p class="plan-description">
                            Whether you are reuniting with family and friends 
                            in faraway places outside of Kenya, or embarking 
                            on solo adventure to explore the unknown, make the
                             most of your trip covered with Jubilee Travel Insurance.

                        </p>
                        <a href="https://digital.jubileeinsurance.com/travel"> <img src="images/arrow-right-circle.png" alt="" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" class="plans-arrow-right img-responsive">
                            <span class="read-more">Read more</span>
                        </a>

                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid business bg-gray" style="margin-right: 0px !important; padding-right: 0px;">
            <div class="business-container" id="corporate" >

                <div class="personal-intro-div row ">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                       <p class="sub-title">Corporate</p> 
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <p class="personal-brief"> </p> 
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 bs-bar-wrap">
                            <div class="bs_progress" role="bs_progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="bs_slider__label sr-only">
                            </div>
                      </div>

                </div>
                <div class="life-business-plans-wrapper" style="margin-right: 0px !important;">
                    <div class="business-plans-slider">
                        <div class="business-plan-item">
                            <div class="business-plan-content">
                                <div class="bs-plan-slider-img-wrapper">
                                    <img src="images/plans/group-last-expense.jpg" alt="" class="img-responsive bs-plan-slider-img">
                                </div>
                                <div class="bs-plan-info">
                                    <p class="bs-plan-title">Group Personal Accident</p>
                                    <p class="bs-plan-description">This insurance provides compensation to your employees in the event of injuries, disability or death caused solely by accidental, external and visible events.</p>
                                    <a href="https://jubileeinsurance.com/ke/group-personal-accident/" class="bs-plans-link"> <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" alt="" class="bs-plans-arrow-right img-responsive">
                                        <span class="bs-plan-learn-more">Learn More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="business-plan-item">
                            <div class="business-plan-content">
                                <div class="bs-plan-slider-img-wrapper">
                                  <img src="images/plans/fidelity-guarantee.jpg" alt="" class="img-responsive bs-plan-slider-img">
                                </div>
                                <div class="bs-plan-info">
                                    <p class="bs-plan-title">Fidelity Guarantee</p>
                                    <p class="bs-plan-description">A policy to protect business from financial losses in the event of a breach of trust by an employee.</p>
                                    <br>
                                    <a href="https://jubileeinsurance.com/ke/fidelity-guarantee/" class="bs-plans-link"> 
                                        <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" alt="" class="bs-plans-arrow-right img-responsive">
                                        <span class="bs-plan-learn-more">Learn More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="business-plan-item">
                            <div class="business-plan-content">
                                <div class="bs-plan-slider-img-wrapper">
                                    <img src="images/plans/professional-indemnity.jpg" alt="" class="img-responsive bs-plan-slider-img">
                                </div>
                                <div class="bs-plan-info">
                                    <p class="bs-plan-title">Professional Indemnity</p>
                                    <p class="bs-plan-description">Professional Indemnity insurance is designed for professionals who provide advice or a service to their customers.</p>
                                    <br>
                                    <a href="https://jubileeinsurance.com/ke/professional-indemnity/" class="bs-plans-link"> 
                                        <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png" alt="" class="bs-plans-arrow-right img-responsive">
                                        <span class="bs-plan-learn-more">Learn More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="business-plan-item">
                            <div class="business-plan-content">
                                <div class="bs-plan-slider-img-wrapper">
                                   <img src="images/plans/wiba.jpg" alt="" class="img-responsive bs-plan-slider-img"> 
                                </div>
                                <div class="bs-plan-info">
                                    <p class="bs-plan-title">WIBA</p>
                                    <p class="bs-plan-description">This is a combination of the workmen injury benefit act (WIBA) and Group Personal Accident (GPA) covers. It addresses workplace risks as well as off-duty risks.</p>
                                    <a href="https://jubileeinsurance.com/ke/wiba/" class="bs-plans-link"> 
                                        <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png"  alt="" class="bs-plans-arrow-right img-responsive">
                                        <span class="bs-plan-learn-more">Learn More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="business-plan-item">
                            <div class="business-plan-content">
                                <div class="bs-plan-slider-img-wrapper">
                                    <img src="images/plans/jubilee-umbrella.png" alt="" class="img-responsive bs-plan-slider-img">
                                </div>
                                <div class="bs-plan-info">
                                    <p class="bs-plan-title">All Risk Insurance</p>
                                    <p class="bs-plan-description">All risk insurance is a type of property or casualty insurance policy that covers any peril, as long as the contract does not specifically exclude it from coverage.</p>
                                    <a href="https://jubileeinsurance.com/ke/all-risk-insurance/" class="bs-plans-link"> 
                                        <img src="images/arrow-right-circle.png" data-src="images/arrow-right-circle.png" data-hover="images/arrow-right-circle-white.png"  alt="" class="bs-plans-arrow-right img-responsive">
                                    <span class="bs-plan-learn-more">Learn More</span></a>
                                    
                                   
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
                    <p class="sub-title">General Tips</p>
                    <p class="personal-brief">
                        We offer simplicity, flexibility with affordable payment options.
                        We cover... well everything and we do it well.
                    </p>
                    <div class="bs-tip col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="bs-tip-content">
                            <img src="images/tips/travel.png" alt="Travel Cover" class="img-responsive tip-icon travel-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">Travel<br>Cover</p>
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon">
                                 <a href="https://digital.jubileeinsurance.com/travel"><span class="watch-now">Read More</span></a>
                                <span class="now-playing">Now Playing</span>
                            </div> 
                        </div>
                    </div> 
                    <!-- <div class="bs-tip col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="bs-tip-content active">
                            <img src="images/tips/education.png" alt="Education Policy" class="img-responsive tip-icon education-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">Education<br>Policy</p>  
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon"> 
                                <span class="watch-now">Watch Now</span>
                                <span class="now-playing">Now Playing</span>
                            </div>                          
                        </div>
                    </div>
                    <div class="bs-tip col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="bs-tip-content">
                            <img src="images/tips/travel.png" alt="Travel Cover" class="img-responsive tip-icon travel-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">One Stop<br>Pharmacy</p>
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon">
                                <span class="watch-now">Watch Now</span>
                                <span class="now-playing">Now Playing</span>
                            </div> 
                        </div>
                    </div> -->
                    <div class="bs-tip col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="bs-tip-content">
                            <img src="images/tips/motor.png" alt="Motor Insurance" class="img-responsive tip-icon motor-tip-img" onclick="myFunction(this);">
                            <p class="tip-title">Motor<br>Insurance</p>
                            <div class="video-links">
                                <img src="images/video-play-circle.png" alt="" class="img-responsive bs-tip-play-icon">
                                <a href="https://digital.jubileeinsurance.com/motor"><span class="watch-now">Read More</span></a>
                                <span class="now-playing">Now Playing</span>
                            </div> 
                        </div>

                    </div>
                </div>
            </div>
              <!-- end tips left-->
            <div class="tips-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <!-- <iframe width="100%" height="400" src="https://www.youtube.com/embed/2ctzfeff99o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <iframe width="100%" height="400" src="https://www.youtube.com/embed/2ctzfeff99o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <li><a href="https://jubileeinsurance.com/ke/about-us/leadership/"> Leadership</a></li>
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
                            Jubilee Insurance Centre, <br>

                            Wabera Street, Nairobi <br>

                            P.O. Box 6685 - 00100 GPO, Nairobi, Kenya <br>

                            Telephone: +254 20 328 1000 <br>

                            Call Centre: +254 709 949 000 <br>

                            Talk2usgeneral@jubileekenya.com 
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
            $(".plan-content").mouseover(function () {
            // alert("hey");
                $(this).children('.plan-icon').attr('src', $(this).children('.plan-icon').data("hover"));
                $(this).children('a').find('.plans-arrow-right').attr('src', $(this).children('a').find('.plans-arrow-right').data("hover"));
                
                }).mouseout(function () {
                $(this).children('.plan-icon').attr('src', $(this).children('.plan-icon').data("src"));
                $(this).children('a').find('.plans-arrow-right').attr('src', $(this).children('a').find('.plans-arrow-right').data("src"));
                 });
          $(".business-plan-content").mouseover(function () {
            // alert("hey");
                $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').attr('src', $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').data("hover"));

                }).mouseout(function () {
                 $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').attr('src', $(this).children('.bs-plan-info').children('a').find('.bs-plans-arrow-right').data("src"));
            });
         $('.business-plans-slider').slick({
             dots: false,
             infinite: true,
             slidesToShow: 4,
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
                   slidesToShow: 4,
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
                    slidesToShow: 4,
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
                    slidesToShow: 4,
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
                   slidesToShow: 2,
                   slidesToScroll: 1,
                   variableWidth: true,
                   centerMode: true,
                 }
               },
               {
                 breakpoint: 600,
                 settings: {
                   slidesToShow: 1,
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


        /*
        var $bs_slider = $('.business-plans-slider');
        var $bs_progressBar = $('.bs_progressbar');
        var $bs_progressBarLabel = $( '.bs_slider__label' );
        
        $bs_slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
            var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
            
            $bs_progressBar
            .css('background-size', calc + '% 100%')
            .attr('aria-valuenow', calc );
            
            $bs_progressBarLabel.text( calc + '% completed' );
        });
        $bs_slider.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 2000
        }); 
        */

    });
    document.getElementById("year").innerHTML = new Date().getFullYear();
     </script>
</body>
</html>
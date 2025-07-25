<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Afnan Portfolio</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/new-fav.png" type="image/x-icon">
</head>
<body data-spy="scroll" data-target=".fixed-top">

  <?php echo 'Hello PHP'; ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img src="images/new-logo-2.png" alt="alternative"></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#projects">Projects</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="https://www.linkedin.com/in/afnan88" target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab bi bi-linkedin fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://github.com/Afunan" target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab bi bi-github fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> 
        </div> 
    </nav>

    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">I'm a Frontend Developer turning ideas into interactive digital realities</h1>
                        <a class="btn-solid-lg page-scroll" href="#about">Discover</a>
                        <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contact Me</a>
                    </div> 
                </div> 
            </div>
        </div> 
    </header> 


    <!-- About-->
    <div id="about" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container first">
                        <h2>Hi, I'm Afnan!</h2>
                        <p>I create websites that are functional, user-friendly, and visually appealing. I enjoy working with clients to bring their ideas to life, from planning to launch.</p>
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="text-container second">
                        <h5>Education</h5>
                        <div class="time">SEP-2023 - MAR-2024</div>
                        <h6>Trainning</h6>
                        <p>Full Stack Java Developer</p>
                        <div class="time">2020 - 2023</div>
                        <h6>Graduation</h6>
                        <p>BCA- Bachelor Computer Application</p>
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="text-container third">
                        <h5>Expereince</h5>
<!-- 			    1 -->
			<div class="time">3 MONTHS</div>
                        <h6>Web Developer</h6>
                        <p>Internship</p>
<!-- 			    2 -->
                        <div class="time">AUG-2024 - PRESENT</div>
                        <h6>Jr. Web Developer</h6>
                       <div class="boopin">
                        <p><a class="exp-at-boopin text-decoration-none" href="https://boopin.in" target="_blank">@Boopin</a></p>
                        <p><a href="https://www.linkedin.com/company/boopin/" target="_blank"><i class="fab fa-linkedin "></i></a></p>
                       </div>
                        
                    </div> 
                </div> 
            </div>
        </div> 
    </div> 


    <!-- Services -->
    <div id="services" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Offered services</h2>
                    <p class="p-heading">I specialize in web development, creating tailored, efficient, and visually striking websites that help startups and businesses establish a strong online presence.</p>
                </div> 
            </div>
            <div class="row">
                <!-- <div class="col-lg-4">
                    <div class="text-box">
                        <i class="far fa-gem"></i>
                        <h4>DESIGN</h4>
                        <p>Successful online projects start with good design. It establishes a solid foundation for future development and allows for long term growth</p>
                    </div> 
                </div>  -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas bi bi-stack"></i>
                        <h5>Full&nbsp;Stack&nbsp;Web&nbsp;Development</h5>
                        <p>Develops both front-end and back-end of websites, combining user interface design, server-side logic, and database management for complete web solutions.</p>
                    </div> 
                </div>
		<div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas bi bi-file-earmark-code-fill"></i>
                        <h5>Landing Pages</h5>
                        <p>Creates high-converting landing pages focused on visual appeal, speed, and clear calls to action to effectively generate leads and drive engagement.</p>
                    </div> 
                </div>
		<div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas bi bi-wordpress"></i>
                        <h5>WordPress Devlopment</h5>
                        <p>Builds custom websites using WordPress, including theme development, plugin integration, and content management tailored to business needs and user experience.</p>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas bi bi-bag-fill"></i>
                        <h5>Shopify Devlopment</h5>
                        <p>Designs and customizes Shopify eCommerce stores with tailored themes, third-party apps, and secure checkout systems for seamless online shopping experiences.</p>
                    </div> 
                </div> 
            </div>
        </div> 
    </div> <!-- end of basic-2 -->
    <!-- end of services -->


    <!-- Details -->
	<div class="split">
		<div class="area-1">
		</div><div class="area-2 bg-gray">
            <div class="container">    
                <div class="row">
                    <div class="col-lg-12">     
                        
                        <!-- Text Container -->
                        <div class="text-container">
                            <h2>Why Work With Me</h2>
                            <p>I am a great communicator and love to invest the necessary time to understand the customer's problem very well</p>
                            <h5>DEVELOPMENT SKILLS</h5>
                            <p>I am familiar and work on a daily basis with HTML, CSS, JavaScript, Bootstrap and other modern frameworks</p>
                            
                            <div class="icons-container">
                                <img src="images/wordpress.png" alt="alternative">
                                <img src="images/shopify.png" alt="alternative">
                                <img src="images/details-icon-html.png" alt="alternative">
                                <img src="images/details-icon-css.png" alt="alternative">
                                <img src="images/details-icon-bootstrap.png" alt="alternative">
                                <img src="images/details-icon-javascript.png" alt="alternative">
                            </div> 
                        </div> 
                        

                    </div> 
                </div>
            </div> 
		</div>
    </div>
    


    <!-- Projects -->
    <div id="projects" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Delivered projects</h2>
                    <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development.</p>
                </div> 
            </div>
        </div> 
    </div>


    <!-- Works -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://sarvesheroline.com/" target="_blank">
                                <img class="img-fluid" src="images/work-1.png" alt="alternative">
                            </a>
                        </div>
                        <h5 class="text-center">Eroline <p>(Wordpress)</p></h5>
                        </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://nagarjunarestaurants.com/nirvana" target="_blank">
                                <img class="img-fluid" src="images/work-2.png" alt="alternative">
                            </a>
                        </div>
                        <h5 class="text-center">Nirvana <p>(Static)</p></h5>
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="https://proxelera.com" target="_blank">
                                <img class="img-fluid" src="images/work-3.png" alt="alternative">
                            </a>
                        </div>
                        <h5 class="text-center">Proxelera <p>(Wordpress)</p></h5>
                    </div> 
                </div> 
            </div>
        </div> 
    </div> 

    <!-- Section Divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr class="section-divider">
            </div> 
        </div>
    </div> 
   


    <!-- Questions -->
    <div class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Frequent questions</h2>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How can I contact you and quickly get a quote for my online project?
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    You can contact me via the contact form on my portfolio, email me at <a class="blue no-line" href="mailto:afnanjobs46@gmail.com">afnanjobs46@gmail.com</a>, or reach out on LinkedIn, Reddit, Quora, or X (formerly Twitter) for a quick quote!
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Will I receive any included maintenance or warranty after project delivery?
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   Yes, I offer free maintenance and support for a limited period after delivery to ensure everything runs smoothly and as expected.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    If something goes wrong with the project can I have my money back?
                                </button>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    I offer a satisfaction guarantee—if something goes wrong due to my work and can't be resolved, a refund may be considered.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What's your preferred method of payment and do you need an advance?
                                </button>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    I accept global payments via PayPal, and in India via UPI and bank transfer. A small advance is usually required.
                                </div>
                            </div>
                        </div>
                    </div> 

                </div> 
            </div>
        </div> 
    </div> 
    


    <!-- Contact -->
    <div id="contact" class="form-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact details</h2>
                    <p class="p-heading">For any type of online project please don't hesitate to get in touch with me. The fastest way is to send me your message using the following email <a class="blue no-line" href="mailto:afnanjobs46@gmail.com">afnanjobs46@gmail.com</a></p>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Project details</label>
                        </div>
                         <div class="form-group">
                            <button type="submit" class="form-control-submit-button">
                                <span id="buttonText">Submit</span>
                                <span id="loader" style="display:none;"> Submiting...</span>
                            </button>
                        </div>
                        <div id="alert-msg" class="my-3" style="color:#a05e26"></div>
                    </form>
            

                </div> 
            </div>
        </div> 
    </div> 



    <!-- Footer -->
    <div class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/afnan88" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab bi bi-linkedin fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://x.com/Afunan88?t=arFwggp8LWHj0m03-fY_Vw&s=09" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab bi bi-twitter-x fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://in.pinterest.com/afnanjobs46/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.quora.com/profile/Afnan-490" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab bi bi-quora fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.reddit.com/user/Afunan_88/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab bi bi-reddit fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> 
            </div>
        </div> 
    </div>   
    


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">© 2025 Copyright Afnan</p>
                </div> 
            </div> 
        </div> 
        
    </div> 
   
    
    
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>

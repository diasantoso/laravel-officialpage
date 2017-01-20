<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Manchester City Official Fanspage </title>
    <link href='{{ URL::asset('assets/img/logo.png') }}' rel='shortcut icon'>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	{{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- Custom CSS -->
    <!--<link href="css/agency.css" rel="stylesheet">-->
	{{ HTML::style('assets/css/agency.css') }}

    <!-- Custom Fonts -->

	{{ HTML::style('assets/css/font-awesome.min.css') }}
  {{ HTML::style('assets-login/font-awesome/css/font-awesome.min.css') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Kaushan+Script') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') }}
	{{ HTML::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') }}
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Manchester City F.C</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Profile</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="{{ URL::to('news') }}">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Join Us</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#team">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    @if(Auth::check())
                    <li>
                            <a class="page-scroll" href="{{ URL::to('auth/logoutuser') }}">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text" >
                <div class="intro-lead-in">Welcome To Official Page of Manchester City!</div>
                <div class="intro-heading">FORZA CITIZENT</div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" style="background-color: #041C2E; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <p align="center"><img src="{{ URL::asset('assets/img/logo.png') }}" class="img-responsive img-circle" alt=""></p>
                    <h3 class="section-heading">Profile Club</h3>
                </div>
            </div>
            <div class="row text-center">
                Manchester City Football Club is a football club in Manchester, England. Founded in 1880 as St. Mark's (West Gorton), they became Ardwick Association Football Club in 1887 and Manchester City in 1894. The club moved to the City of Manchester Stadium in 2003, having played at Maine Road since 1923.
            </div>
			<br>
			<div class="row text-center">
				The club's most successful period was in the late 1960s and early 1970s when they won the League Championship, FA Cup, League Cup and European Cup Winners' Cup under the management team of Joe Mercer and Malcolm Allison. After losing the 1981 FA Cup Final, the club went through a period of decline, culminating in relegation to the third tier of English football for the only time in their history in 1998. Having regained their Premier League status in the early 2000s, the club was purchased in 2008 by Abu Dhabi United Group and has become one of the wealthiest in the world. Since 2011 the club have won six major honours, including the Premier League in 2012 and 2014.
			</div>
		</div>
    </section>

    <!-- About Section -->
    <section id="about" style="background-color: #041C2E; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">More Info Or You Interesting ? </h3>
                </div>
            </div>
            <div class="row">
            	<p align="center" style="margin-top:150px; margin-bottom:150px;">
            	<a href="{{ URL::to('join_us') }}"><button class="btn btn-primary btnpad"> Join Us For More Information </button></a></p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" style="background-color: #041C2E; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading" style="margin-bottom:50px;">Gallery</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('assets/img/news1.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('assets/img/news2.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('assets/img/news3.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('assets/img/news4.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('assets/img/news5.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('assets/img/news6.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Contact Us</h3>
                    <h3 class="section-subheading text-muted">More Information, Just Contact Us </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" enctype="multipart/form-data" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name *" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="telp" class="form-control" placeholder="Your Phone *" id="phone" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan" placeholder="Your Message *" id="message" required="required"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" name="submit" value="Send Message" class="btn btn-xl">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Manchester City F.C</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


	<!-- jQuery -->
	{{ HTML::script('assets/js/jquery.js') }}

    <!-- Bootstrap Core JavaScript -->
	{{ HTML::script('assets/js/bootstrap.min.js') }}

    <!-- Plugin JavaScript -->
	{{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}
	{{ HTML::script('assets/js/classie.js') }}
	{{ HTML::script('assets/js/cbpAnimatedHeader.js') }}

    <!-- Contact Form JavaScript -->
	{{ HTML::script('assets/js/jqBootstrapValidation.js"') }}
	{{ HTML::script('assets/js/contact_me.js') }}

    <!-- Custom Theme JavaScript -->
	{{ HTML::script('assets/js/agency.js') }}
  {{ HTML::script('assets/js/agency.min.js') }}
</body>

</html>

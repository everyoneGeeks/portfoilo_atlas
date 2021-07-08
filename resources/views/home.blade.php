<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Atlas</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- font-awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    
    <!-- AOS -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                    @foreach($headline as $text)

@if($text->name == 'logo')
<img src="{{asset($text->value)}}" alt="logo">

@endif

@endforeach 
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="#" class="text-white lead">Get Early Access</a>
                    </div>
                </div>
            </header>
         
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            @foreach($headline as $text)

                @if($text->name == 'welcom')
                {{$text->value}} 
                @endif

            @endforeach    
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
            @foreach($headline as $text)
            
                @if($text->name == 'welcom_subtitle')
                {{$text->value}} 
                @endif

            @endforeach 
            </p>
            <a href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Started</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">
        
        @foreach($headline as $text)
            
            @if($text->name == 'about_us_title')
            {{$text->value}} 
            @endif

        @endforeach         
        </h2>
        <div class="row">
        @foreach($aboutUsBox as $aboutUs)
            

 
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset($aboutUs->image)}}" alt="Anti-spam" class="mx-auto">
                <h4>{{$aboutUs->name}}</h4>
                <p>{{$aboutUs->description}}</p>
            </div>

        @endforeach     
           
        </div>
    </div>
    <!-- feature (skew background) -->
@foreach($services as $service)

@if($loop->first)
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">{{$service->name}}</h2>
                    <p class="my-4">{{$service->description}}</p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="{{asset($service->image)}}" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
   @endif

   @if($loop->last) 
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">{{$service->name}}</h2>
                    <p class="my-4">
                    {{$service->description}}
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="{{asset($service->image)}}" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
@endif    




@endforeach
    <!-- price table -->
    <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Check our pricing</h2>
        <div class="row">

            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">{{$pricing1->name}}</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">{{$pricing1->price}}</span> / MO.</p>
                <ul class="list-unstyled">
                @foreach(explode(',', $pricing1->list) as $list) 
                <li>{{$list}}</li>
            @endforeach

                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 rounded" id="price-table__premium">
                <h4 class="my-4">{{$pricing2->name}}</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">{{$pricing2->price}}</span> / MO.</p>
                <ul class="list-unstyled">
                @foreach(explode(',', $pricing2->list) as $list) 
                <li>{{$list}}</li>
            @endforeach
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Free</a>
            </div>

            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">{{$pricing3->name}}</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">{{$pricing3->price}}</span> / MO.</p>
                <ul class="list-unstyled">
                @foreach(explode(',', $pricing3->list) as $list) 
                <li>{{$list}}</li>
            @endforeach
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>


        </div>
    </div>
    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row" style="
    justify-content: center;
" >
            @foreach($client as $img)
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset($img->image)}}" class="mx-auto d-block">
                </div>
            @endforeach
                
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                    @foreach($headline as $text)
            
            @if($text->name == 'contact')
            {{$text->value}} 
            @endif

        @endforeach 

                    </p>
                    <ul class="list-unstyled">
                        <li>Email :        @foreach($headline as $text)      @if($text->name == "email")
            {{$text->value}} 
            @endif

        @endforeach </li>
                        <li>Phone : @foreach($headline as $text)      @if($text->name == "phone")
            {{$text->value}} 
            @endif

        @endforeach </li>
                        <li>Address : @foreach($headline as $text)      @if($text->name == "Address")
            {{$text->value}} 
            @endif

        @endforeach </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="/email/send" method="post">
                    @csrf
                    	<div class="row">
                    
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="name" class="form-control" id="name" name='name'>
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" class="form-control" id="Email" name="email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2021 dotech
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                @foreach($headline as $text)   
                   @if($text->name == "facebook")
                   <a href="{{$text->value}}" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
 
            @endif
        @endforeach


        @foreach($headline as $text)   
                   @if($text->name == "twitter")
                   <a href="{{$text->value}}" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
 
            @endif
        @endforeach


        @foreach($headline as $text)   
                   @if($text->name == "linkedin")

                   <a href="{{$text->value}}" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
 
            @endif
        @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="{{asset('js/aos.js')}}"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>
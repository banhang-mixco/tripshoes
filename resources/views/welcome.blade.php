<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">       
        
    </head>
    <body>
        <div id="header">
            <div class="container">
                <div class="pull-left">
                    <a href="#">{{ trans('frontend.home.trips') }}</a>
                    <a href="#">{{ trans('frontend.home.blog') }}</a>
                </div>
            
                <div class="pull-right">
                    <a href="#">{{ trans('frontend.home.sign_in') }}</a>
                    <a href="#"><i class="fa fa-cart"></i>{{ trans('frontend.home.cart') }}</a>
                </div>

                <div class="text-center">
                    <a href="#"><img src=""></a>
                    trip<span>{{ trans('frontend.home.shoes') }}</span>
                </div>

            </div>
        </div> <!-- end header -->
        <div class="col-lg-12" id="content" >
            <h1 class="text-center" >{{ trans('frontend.home.send_us_email') }}</h1>
            <h3 class="text-center col-lg-offset-3 col-lg-6" >{{ trans('frontend.home.text') }}</h3>
            <div class="col-lg-12">
                <div class="col-lg-offset-2 col-lg-8" align="center">
                    <form class="form-inline">
                        <div class="form-group col-lg-12">
                            <input type="text" class="input-lg form-control" name="youname" placeholder="Youname" style="padding: 10px 22px;">
                            <input type="email" class="input-lg form-control" name="email" placeholder="E-mail" style="padding: 10px 22px;">                           
                        </div>
                        <div class="form-group col-lg-offset-1 col-lg-10">
                            <textarea rows="3" resize="false" class="form-control" cols="70" name="message" placeholder="{{ trans('frontend.home.mess') }}"></textarea>
                        </div>
                        <button class="btn btn-lg btn-success" style="padding: 20px 220px;">{{ trans('frontend.home.get_in_touch') }}</button>
                    </form>
                    <div class="text-center col-lg-12"> {{ trans('frontend.home.or_email') }}</div>
                    <div class="text-center col-lg-12">{{ trans('frontend.home.email') }}m</div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <div class="pull-left">
                    <a href="#"><img src=""></a>
                    trip<span>{{ trans('frontend.home.shoes') }}</span>
                </div>
                 <div class="pull-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="text-center">
                    <ul>
                        <li><a href="#">{{ trans('frontend.home.about') }}</a></li>
                        <li><a href="#">{{ trans('frontend.home.contact') }}</a></li>
                        <li><a href="#">{{ trans('frontend.home.support') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <strong>{{ trans('frontend.home.coppy') }}
            </div>
        </div> <!-- end footer -->
        <script type="text/javascript" src="{{ asset('frontend/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script>
        
    </body>
</html>

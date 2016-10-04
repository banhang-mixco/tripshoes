@extends('frontend.layout.master')
	
@section('content')
<div class="container">
<div class="row">
	<div class="col-lg-12">
        <h1 class="text-center">{{ trans('lang_user.send_us.header') }}</h1>
        <div class="col-lg-offset-3 col-lg-6 text-center">
        	<h3>{{ trans('lang_user.send_us.content_1') }}</h3>
    	</div>
        <div class="col-lg-12">
            <div class="col-lg-12 text-center form_send">
	        <div class="col-lg-offset-2 col-lg-8 text-center">
	            <form class="form_access" method="POST" action="{{ url('/postSendCode') }}">
                
                {{ csrf_field() }}
                 <div class="row">
                  <div class="col-lg-6">
                  
                    <div class="form-group {{ $errors->has('yourname') ? ' has-error' : '' }}">
                    @if( $errors->has('yourname') )
                          <span class="help-block mb-0">
                            {{ $errors->first('yourname') }}
                          </span>
                        @endif
                        <input type="text" name="yourname" class="form-control form_padding input-lg" placeholder="Youname" width="100%" value="{{ old('yourname') }}">
                        
                    </div>
                  </div>
                  <div class="col-lg-6">                  
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                      @if( $errors->has('email') )
                          <span class="help-block mb-0">
                            {{ $errors->first('email') }}
                          </span>
                        @endif
                        <input type="email" class="form-control form_padding input-lg" name="email" placeholder="E-mail" width="100%" value="{{ old('email') }}" required>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                   <div class="col-lg-12">
                   
                    <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                    @if( $errors->has('message') )
                          <span class="help-block mb-0">
                            {{ $errors->first('message') }}
                          </span>
                        @endif
                        <textarea cols="70" rows="5" resize="false" class="form-control form_padding" name="message" placeholder="Message">{{ old('message') }}</textarea>
                        
                    </div>
                   </div>
                  </div>
                  <button type="submit" class="btn btn-lg btn_login col-lg-12 form_padding">{{ trans('lang_user.send_us.content_2') }}</button>
                </form>
                <div class="text-center col-lg-12 just_email"> {{ trans('lang_user.send_us.content_3') }}</div>
                <div class="text-center col-lg-12 info"><u>{{ trans('lang_user.send_us.info') }}</u></div>
	        </div>
	    </div>
        </div>
    </div>
</div>
</div>
@endsection
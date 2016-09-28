@extends('frontend.layout.master')
	
@section('content')
<div class="container">
<div class="row">
	<div class="col-lg-12">
        <h1 class="text-center">Send us a message</h1>
        <div class="col-lg-offset-3 col-lg-6 text-center">
        	<h3>Fell free to send us a an email with any question you might have</h3>
    	</div>
        <div class="col-lg-12">
            <div class="col-lg-12 text-center form_send">
	        <div class="col-lg-offset-2 col-lg-8 text-center">
	            <form class="form_access" method="POST" action="{{ url('/postSendCode') }}">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_Field() }}
                 <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="yourname" class="form-control form_padding input-lg" placeholder="Youname" width="100%">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <input type="email" class="form-control form_padding input-lg" name="email" placeholder="E-mail" width="100%">
                    </div>
                   </div>
                  </div>
                  <div class="row">
                   <div class="col-lg-12">
                    <div class="form-group">
                        <textarea cols="70" rows="5" resize="false" class="form-control form_padding" name="message" placeholder="Message"></textarea>
                    </div>
                   </div>
                  </div>
                  <button type="submit" class="btn btn-lg btn_login col-lg-12 form_padding">Get in touch</button>
                </form>
                <div class="text-center col-lg-12 just_email"> Or just email on</div>
                <div class="text-center col-lg-12 info"><u>info@tripshoes.com</u></div>
	        </div>
	    </div>
        </div>
    </div>
</div>
</div>
@endsection
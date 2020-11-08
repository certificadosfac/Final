<x-guest-layout>
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Certificados</h1> 
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<div class="col-md-6"><h3>Ingrese </div><div class="col-md-6"><img src="images/logoF.png" width="100%" height="80%"></h3></div>
                                            <form method="POST" action="{{ route('login')}}" id="formulario-login">
                                                {{  csrf_field() }}
                                                <div class="row form-group"> 		
                                                <div class="row form-group {{ $errors->has('email')? 'has-error' : ''}}">
                                                    <div class="col-md-12">
                                                        <label for="usuario">Usuario</label>
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su email">
                                                        {!! $errors->first('email','<span class="help-block">:message</span> ')!!} 
                                                    </div>
                                                </div>
                                                <div class="row form-group {{ $errors->has('password')? 'has-error' : ''}}">
                                                    <div class="col-md-12">
                                                        <label for="password">Contraseña</label>
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese Clave">
                                                    </div>
                                                    {!! $errors->first('password','<span class="help-block">:message</span> ')!!} 
                                                </div>
                                                <label for="captcha">Captcha</label>
                                                    {!! NoCaptcha::renderJs() !!}
                                                    {!! NoCaptcha::display() !!}
                                                    @if ($errors->has('g-recaptcha-response'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                        </span>
                                                    @endif
                                                <br>
                                                <button class="btn btn-primary btn-block">Acceder</button>
											</form>	
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
</header>
</x-guest-layout>

<x-guest-layout>
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg);height: 969px;">
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
											<div class="col-md-6"><h3>Ingrese </div><div class="col-md-6"><img src="{{ url('images/logoF.png')}}" width="100%" height="80%"></h3></div>
                                            
                                            <form onsubmit="return enviarMensaje()" method="POST" action="{{ route('login')}}" id="formulario-login">
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
                                                    <div class="g-recaptcha" data-sitekey="6LesS_EZAAAAAJz6io-lt1-TbHxkL4KqcMPCe8_u"></div>
                                                <br>
												<button class="btn btn-primary btn-block" type="submit">Acceder</button>
												<a class="btn btn-primary btn-block" href="{{ url('validate')}}" style="color:white">Validar</a>
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

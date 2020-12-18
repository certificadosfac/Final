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
											<div class="col-md-6"><h3>Recuperar Contraseña </div><div class="col-md-6"><img src="{{ url('images/logoF.png')}}" width="100%" height="80%"></h3></div>
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="row form-group"> 		
                                                <div class="row form-group {{ $errors->has('email')? 'has-error' : ''}}">
                                                    <div class="col-md-12">
                                                        <label  for="email" value="{{ __('Email') }}">Correo</label>
                                                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                                        {!! $errors->first('email','<span class="help-block">:message</span> ')!!} 
														@if (session('status'))
														<div class="help-block">
															{{ session('status') }}
														</div>
                                            			@endif
							
                                                    </div>
                                                </div>
						
												<button class="btn btn-primary btn-block" type="submit">Restablecer Contraseña</button>
                                                <br>
                                                 

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

<x-guest-layout>
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg);height: 969px;">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Certificados</h1>
							@error('title')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<div class="col-md-6"><h3>Registre </div><div class="col-md-6"><img src="{{ url('images/logoF.png')}}" width="100%" height="80%"></h3></div>
                                            
											<form onsubmit="return enviarMensaje()" method="POST" action="{{ route('email') }}" >
										
                                                {{  csrf_field() }}
                                                <div class="row form-group"> 		
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="usuario">Digite su numero de Cedula</label>
                                                        <input type="number" id="cedula" name="cedula" class="form-control" placeholder="Ingrese su Cedula">
                                        
                                                    </div>
                                                </div>
                                                <!-- <label for="captcha">Captcha</label>
                                                    <div class="g-recaptcha" data-sitekey="6LesS_EZAAAAAJz6io-lt1-TbHxkL4KqcMPCe8_u"></div>
                                                <br> -->
                                                <button class="btn btn-primary btn-block" type="submit">Enviar Correo</button>
                                            </form>	
                                            <a class="btn btn-primary btn-block" href="{{ url('login')}}" style="color:white">Ingresar</a>
											<a class="btn btn-primary btn-block" href="{{ url('search')}}" style="color:white">Validar Autenticidad</a>
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

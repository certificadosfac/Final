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
											<div class="col-md-6"><h3>Buscar</div><div class="col-md-6"><img src="{{ url('images/logoF.png')}}" width="100%" height="80%"></h3></div>
                                              <div class="row form-group"> 		
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="usuario">Consultar documento</label>
                                                        <input onkeyup="onKeyUp(event)" type="text" id="search" name="search" class="form-control input-sm chat-input" placeholder="Buscar" focus/>
                                        
                                                    </div>
                                                </div>
                                            
                                            <a class="btn btn-primary btn-block" href="{{ url('login')}}" style="color:white">Ingresar</a>
											
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
@section('scriptsFotter')

<script type="text/javascript">
	if({{$errors->any()}}){
		swal("{{$errors->first('title')}}", "{{$errors->first('text')}}", "{{$errors->first('button')}}");
	}
</script>
@endsection
</x-guest-layout>


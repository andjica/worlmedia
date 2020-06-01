
<form action="{{route('freelancers')}}" method="get" id="form-search"> 
	<div class="container sickness deskic nekaproba">
	<h1 class="hah">FIND CREWMEMBERS</h1>
	<h4 class="hah nemega">Find your crewmembers worldwide with the perfect skills and professional equipment.</h4>

	  <div class="row no-gutters new-res">
	
				        <div class="col-md mr-md-2">
				            <div class="form-group">
				              	<div class="form-field">
					              	<div class="select-wrap">
							            <div class="icon"><span class="ion-ios-arrow-down "></span></div>
												  <select class="sizing js-example-basic-single form-control new-block search-slt border-warning bg-light sm-select2" name="categorysearch" id="categorys">
													<option value="">Category</option>
														@foreach($categories as $category)
															<option value="{{$category->id}}">{{$category->name}}</option>
														@endforeach
													</select>
												</div>
												<p class="text-danger" id="er-category"></p>
									        </div>
								      </div>
				          </div>
						<div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              				<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down "></span></div>
												  <select class=" sizing js-example-basic-single2 form-control search-slt border-warning bg-light new-block sm-select2 profi" name="citysearch" id="citys">
													<option value="">City</option>
														@foreach($cities as $city)
															<option value="{{$city->id}}">{{$city->name}}, {{$city->country->name_country}}</option>
														@endforeach
													</select>
												</div>
												<p class="text-danger" id="er-city"></p>
									        </div>
								        </div>
				              </div>
				              	<div class="col-md">
				              		<div class="form-group">
				              			<div class="form-field">
								    <input type="submit" class="form-control btn btn-warning new-cs " value="Search">
								</div>
							</div>
						</div>
				
		</div>
</div>
</form>
  
<style>
.nekaproba{
	text-align: center;
	padding-top: 70px;
	color:white;
}

@media screen and (min-width:968px){
	.nekaproba{
		background-color: #95b9ec42;
    padding-top: 76px;
    padding: 76px;
    border-radius: 22px;
    margin-top: 60px;
    text-align: center;
	}
}
</style>
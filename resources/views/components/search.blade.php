<div class="s01">
      <div class="row no-gutters">
				        <div class="col-md mr-md-4">
				            <div class="form-group">
				              	<div class="form-field">
					              	<div class="select-wrap">
							            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
												  <select class="js-example-basic-single form-control search-slt border-warning bg-light sm-select2" name="categorysearch" id="categorys">
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
									  <div class="col-md mr-md-4">
				              				<div class="form-group">
				              					<div class="form-field">
					              				<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
												  <select class="js-example-basic-single2 form-control search-slt border-warning bg-light sm-select2" name="citysearch" id="citys">
													<option value="">City</option>
														@foreach($cities as $city)
															<option value="{{$city->id}}">{{$city->name}}</option>
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
								                	<input type="submit" class="form-control btn btn-primary" value="Search">
									              </div>
								              </div>
				              			</div>
				              		</div>
    </div>
  
<div class="container shadow">
<div class="row">
    <h2 class="mx-auto text-dark mt-5 text-serif">User images</h2>
</div>
<div class="row mt-5">

            @foreach($images as $img)
			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="{{asset('/image-resume/'.$img->url)}}" alt="{{$img->alt}}">
				</div>
			</div>
			@endforeach

		</div>
  </div>

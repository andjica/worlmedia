<div class="container shadow">
<div class="row">
    <h2 class="mx-auto text-dark mt-5 text-serif">User images</h2>
</div>
<div class="row mt-5">

            @foreach($images as $img)
			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail" >
					<img src="{{asset('/image-resume/'.$img->url)}}" alt="{{$img->alt}}" style=" z-index: 1000;
    position: relative; transition: transform 1.0s ease-in;
  cursor: zoom-in;   height: 300px;
    width: 100%; ">
				</div>
			</div>
			@endforeach

		</div>
  </div>

<style>

img:active {
	 -webkit-transform: scale(2);
  transform: scale(2);
  cursor: zoom-out;
  
}
</style>

<div class="container shadow">
    <div class="row">
        <h2 class="mx-auto text-dark mt-5 text-serif">My Portfolio</h2>
    </div>
      <div class="row mt-5">

                  @foreach($images as $img)
            <div class="col-lg-4 col-sm-6">
            <figure class="col-md-12">
              <a href="{{asset('/image-resume/'.$img->url)}}" data-size="1600x1067">
              <img src="{{asset('/image-resume/'.$img->url)}}" class="img-fluid">
              </a>
            </figure>
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

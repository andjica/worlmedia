<form action="{{route('add-image')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="image">Choose image for your resume</label>
    <input type="file" class="form-control" id="image2" name="image2" aria-describedby="emailHelp" name="image" placeholder="Image">
  </div>
  <div class="form-group">
    <label for="image">Give a image description</label>
    <input type="text" class="form-control" id="imagedesc" name="imagedesc"  name="image" placeholder="Image for website..">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<div class="row mt-5">  
    @foreach($images as $img)
    <div class="col-lg-2">
        <img src="{{asset('/image-resume/'.$img->url)}}" class="img-fluid">
    </div>
    @endforeach
</div>
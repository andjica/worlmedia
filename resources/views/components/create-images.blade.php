<form action="{{route('add-image')}}" method="POST" enctype="multipart/form-data">
@csrf
<h3>Insert your image</h3>
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
    <div class="col-lg-2 ml-3 mt-2 shadow">
      <a href="{{asset('/delete-image/'.$img->id)}}" data-toggle="tooltip" data-placement="top" title="Delete this image">
      <i class="fa fa-minus-circle text-danger fa-2x float-right"></i>
        <img src="{{asset('/image-resume/'.$img->url)}}" class="img-fluid">
        </a>
        <a href="" data-toggle="tooltip" data-placement="top" title="Pu another image instead this">
        <i class="fa fa-edit text-info fa-2x float-right"></i>
        </a>
    </div>

    @endforeach
</div>
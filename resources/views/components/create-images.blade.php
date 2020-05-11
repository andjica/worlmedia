<form action="{{route('add-image')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="image">Choose image for your resume</label>
    <input type="file" class="form-control" id="image2" name="image2" aria-describedby="emailHelp" name="image" placeholder="Image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
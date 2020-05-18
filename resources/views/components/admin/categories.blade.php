<a href="{{route('add-category')}}" class="btn btn-md btn-warning text-white mt-2 mb-2"><i class="fa text-white fa-plus"></i>Add new Category</a>
<table class="table" id="#cities">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name of category</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($categories as $cat)
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->name}}</td>
      <td><a href="{{asset('/edit-category/'.$cat->id)}}">Edit &nbsp;<i class="fa fa-edit text-info"></i></a></td>
   </tr>
    @endforeach
  </tbody>
</table>
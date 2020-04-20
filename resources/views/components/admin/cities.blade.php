<a href="{{route('add-city')}}" class="btn btn-md btn-warning text-white mt-2 mb-2"><i class="fa text-white fa-plus"></i>Add new City</a>
<table class="table" id="#cities">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name of city</th>
      <th scope="col">Country of city</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($cities as $city)
      <th scope="row">{{$city->id}}</th>
      <td>{{$city->name}}</td>
      <td>{{$city->country->name_country}}</td>
      <td><a href="{{asset('/edit-city/'.$city->id)}}">Edit &nbsp;<i class="fa fa-edit text-info"></i></a></td>
      <td><a href="{{asset('/delete-city/'.$city->id)}}">Delete  &nbsp;<i class="fa fa-minus-square text-danger"></i></a></td>
   </tr>
    @endforeach
  </tbody>
</table>
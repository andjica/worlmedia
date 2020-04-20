<a href="{{route('add-country')}}" class="btn btn-md btn-warning text-white mt-2 mb-2"><i class="fa text-white fa-plus"></i>Add new Country</a>
<table class="table" id="#cities">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name of country</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($countries as $country)
      <th scope="row">{{$country->id}}</th>
      <td>{{$country->name_country}}</td>
      <td><a href="{{asset('/edit-country/'.$country->id)}}">Edit &nbsp;<i class="fa fa-edit text-info"></i></a></td>
      <td><a href="{{asset('/delete-country/'.$country->id)}}">Delete  &nbsp;<i class="fa fa-minus-square text-danger"></i></a></td>
   </tr>
    @endforeach
  </tbody>
</table>
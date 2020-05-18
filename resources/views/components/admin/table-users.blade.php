<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Current Account</th>
      <th scope="col">View invoices</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->account->accounttype->name}}</td>
      <td><a href="{{asset('/invoice/'.$user->id)}}">view</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>
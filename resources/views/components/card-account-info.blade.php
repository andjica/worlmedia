@isset($checkingaccount)
<div class="card-body bg-light shadow-lg">
    <h5 class="card-title bg-white p-2 text-dark">Your current account:</h5>
    <h4 class="card-subtitle mb-2 text-warning p-2 border rounded"> {{$checkingaccount->accounttype->name}}</h4>
    <p class="card-text">Created at: <br>{{$checkingaccount->updated_at}}</p>
    <p class="card-text">Valid untill: <br>{{$checkingaccount->valid_until}}</p>
    <img src="{{asset('/')}}images/logo1.png" alt="Image" class="img-fluid jebemga">
  </div>
</div>
@endisset
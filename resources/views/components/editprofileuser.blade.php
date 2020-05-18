

<div class="container">
  
<div class="row db87">

<div class="card col-lg-4">
  <img src="{{asset('/')}}images/pa.png" class="card-img-top" alt="...">
  <div class="card-body">
      <h3 class="card-title"> Create Your future here!<br>Pro Account</h3><br>
    <h5 class="card-title">$5,99- <small>/p.month</small> </h5>
    <p class="card-text">The biggest platform on the planet for media crew members, for only 1,- a month you can create a perfect user-profile and start promoting yourself! </p>
    <form action="{{route('active-pro')}}" method="POST">
        @csrf
        <input type="submit" class="btn btn-primary xdb" value="Activate Pro"></a>
    </form>
  </div>
</div> 
<div class="card col-lg-4" >
  <img src="{{asset('/')}}images/pa.png" class="card-img-top" alt="...">
  <div class="card-body">
      <h3 class="card-title"> Create Your future here!<Br>SuperPro Account</h3><br>
    <h5 class="card-title">$59,99- <small>One year(12 months)</small> </h5>
    <p class="card-text">The biggest platform on the planet for media crew members, for only 12,- a month you can create a perfect user-profile and start promoting yourself! </p>
    <form action="{{route('active-super-pro')}}" method="POST">
        @csrf
        <input type="submit" class="btn btn-primary xdb" value="Activate SuperPro"></a>
    </form>
  </div>
</div>
<div class="card col-lg-4" >
  <img src="./images/logo1.png" class="card-img-top swa" alt="...">
  <div class="card-body">
    <h5 class="card-title">World media crew oppertunity's for only $5,99,- a month!</h5>
    <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Create Perfect user profile</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Show your skills in front of milions of interessted people!</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Easy promoting!</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Direct contact with media crew members!</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited oppertunity's</li>
              <li ><span class="fa-li"><i class="fa fa-check"></i></span>No provision! and easy to use</li>
              <li ><span class="fa-li"><i class="fa fa-check"></i></span>1 year account usage</li>
              <li ><span class="fa-li"><i class="fa fa-check"></i></span>Contacting people all around the world!</li>
              <li ><span class="fa-li"><i class="fa fa-check"></i></span>24/7 Support</li>
              <li ><span class="fa-li"><i class="fa fa-check"></i></span>Cheap and handy promotion options!</li>

            </ul>
   
  </div>
</div>
</div></div>

<style>

    .swa{
        width: 80%;
    margin-top: 32px;
    }

    .db87{
        margin-top: 120px;
    }
</style>
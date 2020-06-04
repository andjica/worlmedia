

<div class="container">
  
<div class="row db87">

<div class="card col-lg-4">
  <img src="{{asset('/')}}images/pa.png" class="card-img-top" alt="...">
  <div class="card-body">
      <h3 class="card-title"> Create Your future here!<br>Pro Account</h3><br>
    <h5 class="card-title">$5,99- <small>/p.month</small> </h5>
    <p class="card-text">The biggest platform on the planet for media crew members, for only $5,99 a month you can create a perfect user-profile and start promoting yourself! </p>
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
    <p class="card-text">The biggest platform on the planet for media crew members, for only $4,99,- a month you can create a perfect user-profile and start promoting yourself! </p>
    <form action="{{route('active-super-pro')}}" method="POST">
        @csrf
        <input type="submit" class="btn btn-primary xdb" value="Activate SuperPro"></a>
    </form>
  </div>
</div>
<div class="card col-lg-4" >
  <img src="./images/logo1.png" class="card-img-top swa" alt="...">
  <div class="card-body">
    <h5 class="card-title">World media crew oppertunity's for only $4,99,- a month!</h5>
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

<div class="site-section" style="margin-top:150px;">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6">
          <h2 class="heading-92913 text-black">Our promise to you</h2>
<p>We promise to ensure quality in every aspect on our platform so we can serve you with
creating the possibility of connecting you with people from around the world with a decent
level of knowledge and skills necessary in the world of media. Therefore we charge our
users a small amount of money of 5,99- dollars per month to ensure the quality of this
platform and to make sure we can keep developing this platform in a valuable way for you
according to your needs.
</p>            
          
            <p><a href="{{asset ('/allmembers')}}" class="btn btn-primary py-3 px-4">Explore oppertunities</a></p>
          </div>
          <div class="col-md-6">
            <img src="images/20474.jpg" alt="Image" class="img-fluid" style="border-top-left-radius: 120px;
    border-bottom-right-radius: 120px;">
          </div>
        </div>
      </div>
    </div>

</div>

</div>

<style>

    .swa{
        width: 80%;
    margin-top: 32px;
    }

    .db87{
        margin-top: 120px;
    }
</style>
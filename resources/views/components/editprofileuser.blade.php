

<div class="container">
<div class="row db87">

<div class="card col-lg-4" >
  <img src="./images/pa.png" class="card-img-top" alt="...">
  <div class="card-body">
      <h3 class="card-title"> Create Your future here!</h3>
    <h5 class="card-title">$5,99- <small>/p.month</small> </h5>
    <p class="card-text">The biggest platform on the planet for media crew members, for only 6,- a month you can create a perfect user-profile and start promoting yourself! </p>
    <form action="{{route('active-pro')}}" method="POST">
        @csrf
        <input type="submit" class="btn btn-primary xdb" value="Activate account"></a>
    </form>
  </div>
</div> 

<div class="card col-lg-8" >
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
</div>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Welcome new member</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="button" class="btn succes" onclick="closeForm()">Send </button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</div>

<style>

    .swa{
        width: 80%;
    margin-top: 32px;
    }

    .db87{
        margin-top: 120px;
    }

    .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
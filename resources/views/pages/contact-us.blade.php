@include('components.head')
@include('components.nav')

<div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 ml-auto text-center" data-aos="fade-up">
              <h1>World Media Crew Member - Contact </h1>
              <p>On our platform you will find the right media crew member you need!, Register quick and search for the right crew member.</p>
              <p><a href="{{asset ('/about')}}" class="btn btn-primary py-3 px-5" style="background:orange;" title="About World Media Crew Members">Read More about</a></p>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="container p-5">
<div class="row">
<div class="col-lg-12">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
        @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
    <div class="row p-5 shadow">
    
        <!--Grid column-->
        <div class="col-md-8 mb-md-0 mb-5 mt-5">
            <form id="contact-fs" name="contact-form" action="{{route('contact')}}" method="POST">
            @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">            
                       
                            <input type="text" id="val1" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                            <p class="text-danger" id="erval1"></p>

                       
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                       
                            <input type="text" id="val2" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                            <p class="text-danger" id="erval2"></p>

                       
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="val3" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                            <p class="text-danger" id="erval3"></p>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="val4" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                            <p class="text-danger" id="erval4"></p>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                <input type="submit" class="btn btn-primary text-white" value="Send">
            </div>
            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 text-center">
            <ul class="list-unstyled mb-0">
            <li><i class="fa fa-map-marker-alt fa-2x text-orange"></i>
                    <p>World Media Crew Members</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x text-orange"></i>
                    <p>+31 6 42213877 </p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x text-orange"></i>
                    <p>info@worldmediacrew.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</div>

</div>

</div>
@include('components.footer')
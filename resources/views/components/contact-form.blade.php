<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form-an" name="contact-form" action="{{route('contact')}}" method="POST">
            @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        @if(isset($user))
                        <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                        @else
                        <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        @endif
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        @if(isset($user))
                        <label for="email" class="">Your email</label>

                            <input type="text" id="email" name="email" value="{{$user->email}}" class="form-control">
                        @else
                        <label for="email" class="">Your email</label>

                            <input type="text" id="email" name="email" class="form-control">
                        @endif
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>

                            <input type="text" id="subject" name="subject" class="form-control">
                            <p class="text-danger" id="er-subject"></p>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Your message</label>

                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <p class="text-danger" id="er-message"></p>
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
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker-alt fa-2x text-orange"></i>
                    <p>World Media Crew Members</p>
                </li>

                <li><i class="fa fa-whatsapp mt-4 fa-2x text-orange"></i>
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
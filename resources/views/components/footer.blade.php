
    <div class="footer bg-light">
      <div class="container" style="text-align: center">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo1.png" alt="Image" class="img-fluid"></p>
            <p>The number #1 place to hire and find your right media crew member in the world!</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>World media crew</span></h3>
            <ul class="list-unstyled">
                <li><a href="{{asset ('/')}}">Home</a></li>
                <li><a href="{{asset ('/services')}}">Services</a></li>
                <li><a href="{{asset ('/freelancers')}}">Crew-Members</a></li>
                <li><a href="{{asset ('/aboutus')}}">About US</a></li>
                <li><a href="{{asset ('/blog')}}">Blog</a></li>
                <li><a href="{{asset ('/contact')}}">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{asset ('/register')}}">Make an account</a></li>
                  <li><a href="{{asset ('/login')}}">Login with account</a></li>
                  <li><a href="{{asset ('/services')}}">Services</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{asset ('/contact')}}">Contact</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Partners</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- loader -->
  <div id="loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"></circle></svg></div>
  <script src="{{asset('/')}}jquery-1.9.1.min.js"></script>
 
 <!-- Include js plugin -->
  <script src="{{asset('/')}}owl-carousel/owl.carousel.js"></script>
  <script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('/')}}js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('/')}}js/jquery-ui.js"></script>
  <script src="{{asset('/')}}js/popper.min.js"></script>
  <script src="{{asset('/')}}js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}js/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}js/jquery.stellar.min.js"></script>
  <script src="{{asset('/')}}js/jquery.countdown.min.js"></script>
  <script src="{{asset('/')}}js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('/')}}js/jquery.easing.1.3.js"></script>
  <script src="{{asset('/')}}js/aos.js"></script>
  <script src="{{asset('/')}}js/jquery.fancybox.min.js"></script>
  <script src="{{asset('/')}}js/jquery.sticky.js"></script>
  <script src="{{asset('/')}}js/jquery.mb.YTPlayer.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


  <script src="{{asset('/')}}js/main.js"></script>

  <script src="{{asset('/')}}js/form-upgrade.js"></script>
  <script src="{{aset('/')}}js/contact-form.js"></script>

  <script>
  (function($) {
    $.fn.countTo = function(options) {
      options = options || {};
  
      return $(this).each(function() {
        // set options for current element
        var settings = $.extend(
          {},
          $.fn.countTo.defaults,
          {
            from: $(this).data("from"),
            to: $(this).data("to"),
            speed: $(this).data("speed"),
            refreshInterval: $(this).data("refresh-interval"),
            decimals: $(this).data("decimals")
          },
          options
        );
  
        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(settings.speed / settings.refreshInterval),
          increment = (settings.to - settings.from) / loops;
  
        // references & variables that will change with each update
        var self = this,
          $self = $(this),
          loopCount = 0,
          value = settings.from,
          data = $self.data("countTo") || {};
  
        $self.data("countTo", data);
  
        // if an existing interval can be found, clear it first
        if (data.interval) {
          clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);
  
        // initialize the element with the starting value
        render(value);
  
        function updateTimer() {
          value += increment;
          loopCount++;
  
          render(value);
  
          if (typeof settings.onUpdate == "function") {
            settings.onUpdate.call(self, value);
          }
  
          if (loopCount >= loops) {
            // remove the interval
            $self.removeData("countTo");
            clearInterval(data.interval);
            value = settings.to;
  
            if (typeof settings.onComplete == "function") {
              settings.onComplete.call(self, value);
            }
          }
        }
  
        function render(value) {
          var formattedValue = settings.formatter.call(self, value, settings);
          $self.html(formattedValue);
        }
      });
    };
  
    $.fn.countTo.defaults = {
      from: 0, // the number the element should start at
      to: 0, // the number the element should end at
      speed: 1000, // how long it should take to count between the target numbers
      refreshInterval: 100, // how often the element should be updated
      decimals: 0, // the number of decimal places to show
      formatter: formatter, // handler for formatting the value before rendering
      onUpdate: null, // callback method for every time the element is updated
      onComplete: null // callback method for when the element finishes updating
    };
  
    function formatter(value, settings) {
      return value.toFixed(settings.decimals);
    }
  })(jQuery);
  
  jQuery(function($) {
    // custom formatting example
    $(".count-number").data("countToOptions", {
      formatter: function(value, options) {
        return value
          .toFixed(options.decimals)
          .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
      }
    });
  
    // start all the timers
    $(".timer").each(count);
  
    function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data("countToOptions") || {});
      $this.countTo(options);
    }
  });
  </script>
  <script>
    function goBack() {
    window.history.back();
  }
  </script>
  <script>
     // select2 
 $('.js-example-basic-single').select2({
    placeholder: "Category",
    allowClear: true,
    
  });
  // select2
  $('.js-example-basic-single2').select2({
    placeholder: "City",
    allowClear: true
  });

  $('.js-example-basic-single3').select2({
    placeholder: "Salary",
    allowClear: true
  });
 
    </script>
</body>
@isset($skill)
     <div class="row m-5">
     <h1 class="text-dark text-serif text-center mx-auto">Skills</h1>

    </div>
      <div class="row mt-5">
      
           @if($skill->skill_one == null || $skill->percent_one == null)

           @else
          <div class="col-md-6 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h4 class="text-dark">{{$skill->skill_one}}</h4>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_one}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_one}}%">
            <span>{{$skill->percent_one}}</span>
            </div>
            </div>
            </div>
          </div>
          @endif

          @if($skill->skill_two == null || $skill->percent_two == null)

          @else
            <div class="col-md-6 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h4 class="text-dark">{{$skill->skill_two}}</h4>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_two}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_two}}%">
            <span>{{$skill->percent_two}}</span>
            </div>
            </div>
            </div>
            </div>
          @endif
           
          @if($skill->skill_three == null || $skill->percent_three == null)
        
          @else
          <div class="col-md-6 animate-box">
          <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
          <h4 class="text-dark">{{$skill->skill_three}}</h4>
          <div class="progress">
          <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_three}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_three}}%">
          <span>{{$skill->percent_three}}</span>
          </div>
          </div>
          </div>
          </div>
          @endif

          @if($skill->skill_four == null || $skill->percent_four == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_four}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_four}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_four}}%">
        <span>{{$skill->percent_four}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_five == null || $skill->percent_five == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_five}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_five}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_five}}%">
        <span>{{$skill->percent_five}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_six == null || $skill->percent_six == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_six}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_six}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_six}}%">
        <span>{{$skill->percent_six}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_seven == null || $skill->percent_seven == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_seven}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_seven}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_seven}}%">
        <span>{{$skill->percent_seven}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_eight == null || $skill->percent_eight == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_eight}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_eight}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_eight}}%">
        <span>{{$skill->percent_eight}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_nine == null || $skill->percent_nine == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_nine}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_nine}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_nine}}%">
        <span>{{$skill->percent_nine}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_ten == null || $skill->percent_ten == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h4 class="text-dark">{{$skill->skill_ten}}</h4>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_ten}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_ten}}%">
        <span>{{$skill->percent_ten}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif
        
           
          
      </div>
    </div>
    <div class="col-lg-6 mx-auto">
      <div class="row">
   
           
        </div>
        @endisset
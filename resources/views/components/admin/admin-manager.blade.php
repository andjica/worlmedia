<div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                Status of purchases
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Special purchases</h5>
                <div class="counter col_fourth end">
                <i class="fa fa-shopping-cart fa-3x text-orange"></i>
                @if($countpurchases == null)
                    0
                @else
                <h2 class="timer count-title count-number" data-to="{{$countpurchases}}" data-speed="1500"></h2>
                @endif
                <p class="count-text ">Total number of Purchase</p>
             </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
            Status of your earnings
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Your users</h5>
                <div class="counter col_fourth end">
                <i class="fa fa-cc-paypal fa-3x text-orange"></i>
                @if($totalearn == null)
                    0
                @else
                <h2 class="timer count-title count-number" data-to="{{$totalearn}}" data-speed="1500"></h2>
                @endif
                <p class="count-text "> Value of total payed accounts</p>
             </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                Registered users
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Special purchases</h5>
                <div class="counter col_fourth end">
                <i class="fa fa-user fa-3x text-orange"></i>
                @if($countuser == null)
                    0
                @else
                <h2 class="timer count-title count-number" data-to="{{$countuser}}" data-speed="1500"></h2>
                @endif
                <p class="count-text "> Number of your users</p>
             </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Rates</h5>
                <div class="counter col_fourth end">
                <i class="fa fa-trophy fa-3x text-orange"></i>
                @if($totalearn == null)
                    0
                @else
                <a href=""> <h2 class="">View more</h2></a>
                @endif
                <p class="count-text ">Best ranked users</p>
             </div>
            </div>
            </div>
        </div>
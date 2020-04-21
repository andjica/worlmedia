@include('components.head')
@include('components.nav')
<div class="s01 tt">
      <form>
        <fieldset>
          <legend>Discover here the right Crew Member</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="What are you looking for?">
          </div>
          <div class="input-field second-wrap">
            <input id="location" type="text" placeholder="location">
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="button">Search</button>
          </div>
        </div>
      </form>
    </div>
  
<section id="freelancers">
  <div class="container" style="  margin-top: 20px;">
        <div class="row" style="display:flex; margin-top:60px;">
   
        <div class="col-lg-9">
            <div class="row">
                @include('components.freelancers')
                @include('components.filter')
            </div>
        </div>
    </div>
</div>
</section>

<style>
    .tw34{
        font-family: Futura, "Trebuchet MS", Arial, sans-serif !important;
    }
</style>
@include('components.footer')



@isset($user)

<!------ Include the above in your HEAD tag ---------->
<section class="db12">
<div class="night">
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
</div>


        <div class="" style="height: 420px; width: 100%;  padding-top: 88px;">
            <div class="row">
                <div class="col-lg-4 xvs">
                    <hr/>
                        </div>
                            <div class="col-lg-4 ggg" style="color: white;">

                                <center>
                                <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                                </div>
                                <h1 class="media-heading">{{$user->name}}</h1>
                                <small>{{$user->city->name}}, {{$user->city->country->name_country}}</small><br>
                                </center>
                        </div>
                    <div class="col-lg-4 xvb">
                <hr/>
            </div>
        </div>
</div>
    </section>
    
 
              
    

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
  <div class="container">
    <div class="row d-flex">
   
          <div class="col-lg-6">
          <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
        
          <h2 class="mb-4">About {{$user->name}}, </h2><small>{{$user->city->name}}, {{$user->city->country->name_country}}</small><br>

          <ul class="about-info mt-4 px-md-0 px-2">
          <li class="d-flex"><span>Name:</span> <span>{{$user->name}}</span></li>
          <li class="d-flex"><span>Country:</span> <span>{{$user->city->country->name_country}}</span></li>
          <li class="d-flex"><span>City:</span> <span>{{$user->city->name}}</span></li>
          <li class="d-flex"><span>Available:</span> <span>yes</span></li>
          <li class="d-flex"><span>Email:</span> <span>{{$user->email}}</span></li>
          <li class="d-flex"><span>Phone: </span> <span>{{$user->mobile}}</span></li>
          </ul>
          </div>
          </div>
          <div class="counter-wrap ftco-animate d-flex mt-md-3 fadeInUp ftco-animated">
          <div class="text">
          <p class="mb-4">
          <p>{{$user->desc_one}}</p><br>
                                      <p>{{$user->desc_two}}</p>
          </p>
          </div>
        </div>
      
          </div>

          <div class="col-lg-6">
          <div class="container">
            <div class="row justify-content-center pb-5">
              <div class="col-md-10 heading-section text-center ftco-animate fadeInUp ftco-animated">
                
                <h2 class="mb-4">Equipment</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="resume-wrap ftco-animate fadeInUp ftco-animated">
                <h2>Full-hd Camera</h2>
                </div>
                </div>
                <div class="col-md-6">
                <div class="resume-wrap ftco-animate fadeInUp ftco-animated">
                <h2>Full-hd Camera</h2>
                </div>
                </div>
                <div class="col-md-6">
                <div class="resume-wrap ftco-animate fadeInUp ftco-animated">
                <h2>Full-hd Camera</h2>
                </div>
                </div>
                <div class="col-md-6">
                <div class="resume-wrap ftco-animate fadeInUp ftco-animated">
                <h2>Full-hd Camera</h2>
                </div>
                </div>
</div>



              </div>
              </div>

            </div>
          </div>
    </div>
  </div>
</section>



<section class="ftco-section ftco-no-pb" id="resume-section">

</section>


<section class="ftco-section" id="skills-section">
<div class="container">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
<h2 class="mb-4">My Skills</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-8">
            <div class="col-md-6 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3>Photoshop</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
            <span>90%</span>
            </div>
            </div>
            </div>
            </div>
                <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
                <h3>jQuery</h3>
                <div class="progress">
                <div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                <span>85%</span>
                </div>
                </div>
                </div>
                </div>
                    <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
                    <h3>HTML5</h3>
                    <div class="progress">
                    <div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                    <span>95%</span>
                    </div>
                    </div>
                    </div>
                    </div>
                        <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
                        <h3>CSS3</h3>
                        <div class="progress">
                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        <span>90%</span>
                        </div>
                        </div>
                        </div>
                        </div>
                            <div class="col-md-6 animate-box">
                            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
                            <h3>WordPress</h3>
                            <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span>70%</span>
                            </div>
                            </div>
                            </div>
                                                    </div>
                        <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
                        <h3>SEO</h3>
                        <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        <span>80%</span>
                        </div>
                        </div>
                        </div>
                        </div>
</div>
<center>
<div class="col-lg-4">
                      @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                         @include('components.rate')
                    </div>  
</center>  
                
</div>
</div>
</section>
<button type="button" class="btn btn-default mt-5"  onclick="goBack()"><i class="fa fa-arrow-left text-info"></i> &nbsp;I've heard enough about {{$user->name}}</button>

@endisset



<style>

    /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #2d6dda;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }



body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color:white; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  text-decoration-skip-ink: none; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #0056b3;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg {
  overflow: hidden;
  vertical-align: middle; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

select {
  word-wrap: normal; }

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }





.img-thumbnail {
  padding: 0.25rem;
  background-color: #2d6dda;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6c757d; }

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #2d6dda;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: 100%; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.33333%;
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.66667%;
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.33333%;
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.66667%;
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.33333%;
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.66667%;
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.33333%;
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.66667%;
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1; }

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13; }

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0; }

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1; }

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2; }

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3; }

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4; }

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5; }

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6; }

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7; }

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8; }

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9; }

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10; }

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11; }

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6; }
  .table tbody + tbody {
    border-top: 2px solid #dee2e6; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #dee2e6; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff; }

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #7abaff; }

.table-hover .table-primary:hover {
  background-color: #9fcdff; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #9fcdff; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db; }

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b7bb; }

.table-hover .table-secondary:hover {
  background-color: #c8cbcf; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb; }

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8fd19e; }

.table-hover .table-success:hover {
  background-color: #b1dfbb; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #b1dfbb; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb; }

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #86cfda; }

.table-hover .table-info:hover {
  background-color: #abdde5; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #abdde5; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba; }

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffdf7e; }

.table-hover .table-warning:hover {
  background-color: #ffe8a1; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffe8a1; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb; }

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e; }

.table-hover .table-danger:hover {
  background-color: #f1b0b7; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #f1b0b7; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca; }

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #95999c; }

.table-hover .table-dark:hover {
  background-color: #b9bbbe; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9bbbe; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th {
  color: #2d6dda;
  background-color: #343a40;
  border-color: #454d55; }

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6; }

.table-dark {
  color: #2d6dda;
  background-color: #343a40; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #454d55; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    color: #2d6dda;
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #2d6dda;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .form-control {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus {
    color: #495057;
    background-color: #2d6dda;
    border-color: #80bdff;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #2d6dda; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control[size], select.form-control[multiple] {
  height: auto; }

textarea.form-control {
  height: auto; }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #6c757d; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #2d6dda;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem; }

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #28a745;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #2d6dda no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
    border-color: #28a745;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
  .was-validated .custom-select:valid ~ .valid-feedback,
  .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #28a745; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745; }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #2d6dda;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem; }

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #2d6dda no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
  .was-validated .custom-select:invalid ~ .invalid-feedback,
  .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #dc3545; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545; }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

.form-inline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .btn:hover {
    color: #212529;
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #2d6dda;
  background-color: #007bff;
  border-color: #007bff; }
  .btn-primary:hover {
    color: #2d6dda;
    background-color: #0069d9;
    border-color: #0062cc; }
  .btn-primary:focus, .btn-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #2d6dda;
    background-color: #007bff;
    border-color: #007bff; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #2d6dda;
    background-color: #0062cc;
    border-color: #005cbf; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5); }

.btn-secondary {
  color: #2d6dda;
  background-color: #6c757d;
  border-color: #6c757d; }
  .btn-secondary:hover {
    color: #2d6dda;
    background-color: #5a6268;
    border-color: #545b62; }
  .btn-secondary:focus, .btn-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #2d6dda;
    background-color: #6c757d;
    border-color: #6c757d; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #2d6dda;
    background-color: #545b62;
    border-color: #4e555b; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5); }

.btn-success {
  color: #2d6dda;
  background-color: #28a745;
  border-color: #28a745; }
  .btn-success:hover {
    color: #2d6dda;
    background-color: #218838;
    border-color: #1e7e34; }
  .btn-success:focus, .btn-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #2d6dda;
    background-color: #28a745;
    border-color: #28a745; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #2d6dda;
    background-color: #1e7e34;
    border-color: #1c7430; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5); }

.btn-info {
  color: #2d6dda;
  background-color: #17a2b8;
  border-color: #17a2b8; }
  .btn-info:hover {
    color: #2d6dda;
    background-color: #138496;
    border-color: #117a8b; }
  .btn-info:focus, .btn-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #2d6dda;
    background-color: #17a2b8;
    border-color: #17a2b8; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #2d6dda;
    background-color: #117a8b;
    border-color: #10707f; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107; }
  .btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00; }
  .btn-warning:focus, .btn-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5); }

.btn-danger {
  color: #2d6dda;
  background-color: #dc3545;
  border-color: #dc3545; }
  .btn-danger:hover {
    color: #2d6dda;
    background-color: #c82333;
    border-color: #bd2130; }
  .btn-danger:focus, .btn-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #2d6dda;
    background-color: #dc3545;
    border-color: #dc3545; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #2d6dda;
    background-color: #bd2130;
    border-color: #b21f2d; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }

.btn-dark {
  color: #2d6dda;
  background-color: #343a40;
  border-color: #343a40; }
  .btn-dark:hover {
    color: #2d6dda;
    background-color: #23272b;
    border-color: #1d2124; }
  .btn-dark:focus, .btn-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #2d6dda;
    background-color: #343a40;
    border-color: #343a40; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #2d6dda;
    background-color: #1d2124;
    border-color: #171a1d; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5); }

.btn-outline-primary {
  color: #007bff;
  border-color: #007bff; }
  .btn-outline-primary:hover {
    color: #2d6dda;
    background-color: #007bff;
    border-color: #007bff; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #2d6dda;
    background-color: #007bff;
    border-color: #007bff; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }

.btn-outline-secondary {
  color: #6c757d;
  border-color: #6c757d; }
  .btn-outline-secondary:hover {
    color: #2d6dda;
    background-color: #6c757d;
    border-color: #6c757d; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #2d6dda;
    background-color: #6c757d;
    border-color: #6c757d; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.btn-outline-success {
  color: #28a745;
  border-color: #28a745; }
  .btn-outline-success:hover {
    color: #2d6dda;
    background-color: #28a745;
    border-color: #28a745; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #2d6dda;
    background-color: #28a745;
    border-color: #28a745; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

.btn-outline-info {
  color: #17a2b8;
  border-color: #17a2b8; }
  .btn-outline-info:hover {
    color: #2d6dda;
    background-color: #17a2b8;
    border-color: #17a2b8; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #2d6dda;
    background-color: #17a2b8;
    border-color: #17a2b8; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545; }
  .btn-outline-danger:hover {
    color: #2d6dda;
    background-color: #dc3545;
    border-color: #dc3545; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #2d6dda;
    background-color: #dc3545;
    border-color: #dc3545; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #343a40;
  border-color: #343a40; }
  .btn-outline-dark:hover {
    color: #2d6dda;
    background-color: #343a40;
    border-color: #343a40; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #2d6dda;
    background-color: #343a40;
    border-color: #343a40; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none; }
  .btn-link:hover {
    color: #0056b3;
    text-decoration: underline; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    -webkit-box-shadow: none;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6c757d;
    pointer-events: none; }

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative; }

.dropdown-toggle {
  white-space: nowrap; }
  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent; }
  .dropdown-toggle:empty::after {
    margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #2d6dda;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }

.dropdown-menu-left {
  right: auto;
  left: 0; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0; }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto; } }

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0; }
  .dropdown-menu-md-right {
    right: 0;
    left: auto; } }

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0; }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto; } }

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0; }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto; } }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #2d6dda;
    text-decoration: none;
    background-color: #007bff; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 1; }

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropleft .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  .btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .form-control-plaintext,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:focus,
  .input-group > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3; }
  .input-group > .custom-file .custom-file-input:focus {
    z-index: 4; }
  .input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2; }
    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
      z-index: 3; }
  .input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px); }

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px); }

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem; }

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #2d6dda;
    border-color: #007bff;
    background-color: #007bff; }
  .custom-control-input:focus ~ .custom-control-label::before {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #80bdff; }
  .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #2d6dda;
    background-color: #b3d7ff;
    border-color: #b3d7ff; }
  .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top; }
  .custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #2d6dda;
    border: #adb5bd solid 1px; }
  .custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5); }

.custom-switch {
  padding-left: 2.25rem; }
  .custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem; }
  .custom-switch .custom-control-label::after {
    top: calc(0.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .custom-switch .custom-control-label::after {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #2d6dda;
    -webkit-transform: translateX(0.75rem);
    -ms-transform: translateX(0.75rem);
    transform: translateX(0.75rem); }
  .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  background-color: #2d6dda;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: #2d6dda; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    display: none; }

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem; }

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-label {
    border-color: #80bdff;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }
  .custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse); }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #2d6dda;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0; }

.custom-range {
  width: 100%;
  height: calc(1rem + 0.4rem);
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-range:focus {
    outline: none; }
    .custom-range:focus::-webkit-slider-thumb {
      -webkit-box-shadow: 0 0 0 1px #2d6dda, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
      box-shadow: 0 0 0 1px #2d6dda, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #2d6dda, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range:focus::-ms-thumb {
      box-shadow: 0 0 0 1px #2d6dda, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .custom-range::-moz-focus-outer {
    border: 0; }
  .custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-webkit-slider-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .custom-range::-webkit-slider-thumb:active {
      background-color: #b3d7ff; }
  .custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-moz-range-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .custom-range::-moz-range-thumb:active {
      background-color: #b3d7ff; }
  .custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-ms-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .custom-range::-ms-thumb:active {
      background-color: #b3d7ff; }
  .custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem; }
  .custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default; }
  .custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-moz-range-track {
    cursor: default; }
  .custom-range:disabled::-ms-thumb {
    background-color: #adb5bd; }

.custom-control-label::before,
.custom-file-label,
.custom-select {
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }



.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }


.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #2d6dda;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }


.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap; }
      .card-group > .card {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:not(:last-child) {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:not(:last-child) .card-img-top,
          .card-group > .card:not(:last-child) .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:not(:last-child) .card-img-bottom,
          .card-group > .card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:not(:first-child) {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:not(:first-child) .card-img-top,
          .card-group > .card:not(:first-child) .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:not(:first-child) .card-img-bottom,
          .card-group > .card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion > .card {
  overflow: hidden; }
  .accordion > .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0; }
  .accordion > .card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0; }
  .accordion > .card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .accordion > .card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
  .accordion > .card .card-header {
    margin-bottom: -1px; }

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #6c757d; }

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #2d6dda;
  border: 1px solid #dee2e6; }
  .page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 2;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link {
  z-index: 1;
  color: #2d6dda;
  background-color: #007bff;
  border-color: #007bff; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #2d6dda;
  border-color: #dee2e6; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .badge {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  a.badge:hover, a.badge:focus {
    text-decoration: none; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #2d6dda;
  background-color: #007bff; }
  a.badge-primary:hover, a.badge-primary:focus {
    color: #2d6dda;
    background-color: #0062cc; }
  a.badge-primary:focus, a.badge-primary.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }

.badge-secondary {
  color: #2d6dda;
  background-color: #6c757d; }
  a.badge-secondary:hover, a.badge-secondary:focus {
    color: #2d6dda;
    background-color: #545b62; }
  a.badge-secondary:focus, a.badge-secondary.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

.badge-success {
  color: #2d6dda;
  background-color: #28a745; }
  a.badge-success:hover, a.badge-success:focus {
    color: #2d6dda;
    background-color: #1e7e34; }
  a.badge-success:focus, a.badge-success.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

.badge-info {
  color: #2d6dda;
  background-color: #17a2b8; }
  a.badge-info:hover, a.badge-info:focus {
    color: #2d6dda;
    background-color: #117a8b; }
  a.badge-info:focus, a.badge-info.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

.badge-warning {
  color: #212529;
  background-color: #ffc107; }
  a.badge-warning:hover, a.badge-warning:focus {
    color: #212529;
    background-color: #d39e00; }
  a.badge-warning:focus, a.badge-warning.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

.badge-danger {
  color: #2d6dda;
  background-color: #dc3545; }
  a.badge-danger:hover, a.badge-danger:focus {
    color: #2d6dda;
    background-color: #bd2130; }
  a.badge-danger:focus, a.badge-danger.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

.badge-light {
  color: #212529;
  background-color: #f8f9fa; }
  a.badge-light:hover, a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5; }
  a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.badge-dark {
  color: #2d6dda;
  background-color: #343a40; }
  a.badge-dark:hover, a.badge-dark:focus {
    color: #2d6dda;
    background-color: #1d2124; }
  a.badge-dark:focus, a.badge-dark.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff; }
  .alert-primary hr {
    border-top-color: #9fcdff; }
  .alert-primary .alert-link {
    color: #002752; }

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db; }
  .alert-secondary hr {
    border-top-color: #c8cbcf; }
  .alert-secondary .alert-link {
    color: #202326; }

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb; }
  .alert-success hr {
    border-top-color: #b1dfbb; }
  .alert-success .alert-link {
    color: #0b2e13; }

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb; }
  .alert-info hr {
    border-top-color: #abdde5; }
  .alert-info .alert-link {
    color: #062c33; }

.alert-warning {
  color: #856404;
  background-color: #2d6dda3cd;
  border-color: #ffeeba; }
  .alert-warning hr {
    border-top-color: #ffe8a1; }
  .alert-warning .alert-link {
    color: #533f03; }

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb; }
  .alert-danger hr {
    border-top-color: #f1b0b7; }
  .alert-danger .alert-link {
    color: #491217; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca; }
  .alert-dark hr {
    border-top-color: #b9bbbe; }
  .alert-dark .alert-link {
    color: #040505; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #2d6dda;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
      -webkit-animation: none;
      animation: none; } }

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1; }

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #2d6dda;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #2d6dda; }
  .list-group-item.active {
    z-index: 2;
    color: #2d6dda;
    background-color: #007bff;
    border-color: #007bff; }

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row; }
  .list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0; }
    .list-group-horizontal .list-group-item:first-child {
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal .list-group-item:last-child {
      margin-right: 0;
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-sm .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-md .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-lg .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-xl .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }
  .list-group-flush .list-group-item:last-child {
    margin-bottom: -1px; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom: 0; }

.list-group-item-primary {
  color: #004085;
  background-color: #b8daff; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #004085;
    background-color: #9fcdff; }
  .list-group-item-primary.list-group-item-action.active {
    color: #2d6dda;
    background-color: #004085;
    border-color: #004085; }

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #2d6dda;
    background-color: #383d41;
    border-color: #383d41; }

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #155724;
    background-color: #b1dfbb; }
  .list-group-item-success.list-group-item-action.active {
    color: #2d6dda;
    background-color: #155724;
    border-color: #155724; }

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #0c5460;
    background-color: #abdde5; }
  .list-group-item-info.list-group-item-action.active {
    color: #2d6dda;
    background-color: #0c5460;
    border-color: #0c5460; }

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #856404;
    background-color: #ffe8a1; }
  .list-group-item-warning.list-group-item-action.active {
    color: #2d6dda;
    background-color: #856404;
    border-color: #856404; }

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #721c24;
    background-color: #f1b0b7; }
  .list-group-item-danger.list-group-item-action.active {
    color: #2d6dda;
    background-color: #721c24;
    border-color: #721c24; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #2d6dda;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe; }
  .list-group-item-dark.list-group-item-action.active {
    color: #2d6dda;
    background-color: #1b1e21;
    border-color: #1b1e21; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #2d6dda;
  opacity: .5; }
  .close:hover {
    color: #000;
    text-decoration: none; }
  .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
    opacity: .75; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }

a.close.disabled {
  pointer-events: none; }

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem; }
  .toast:not(:last-child) {
    margin-bottom: 0.75rem; }
  .toast.showing {
    opacity: 1; }
  .toast.show {
    display: block;
    opacity: 1; }
  .toast.hide {
    display: none; }

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05); }

.toast-body {
  padding: 0.75rem; }

.modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    -o-transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -50px);
    -ms-transform: translate(0, -50px);
    transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none; }

.modal-dialog-scrollable {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem); }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden; }
  .modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    -ms-flex-negative: 0;
    flex-shrink: 0; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: ""; }
  .modal-dialog-centered.modal-dialog-scrollable {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%; }
    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
      max-height: none; }
    .modal-dialog-centered.modal-dialog-scrollable::before {
      content: none; }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #2d6dda;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem; }



.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem); }
    .modal-dialog-scrollable .modal-content {
      max-height: calc(100vh - 3.5rem); }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem); }
    .modal-dialog-centered::before {
      height: calc(100vh - 3.5rem); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #2d6dda;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #2d6dda;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc((0.5rem + 1px) * -1); }
    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
      bottom: 0;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
      bottom: 1px;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: #2d6dda; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
      left: 0;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
      left: 1px;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: #2d6dda; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc((0.5rem + 1px) * -1); }
    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
      top: 0;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
      top: 1px;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: #2d6dda; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
      right: 0;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
      right: 1px;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: #2d6dda; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }
  .carousel-inner::after {
    display: block;
    clear: both;
    content: ""; }

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  -o-transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-item {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%); }

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%); }

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  -webkit-transition: 0s 0.6s opacity;
  -o-transition: 0s 0.6s opacity;
  transition: 0s 0.6s opacity; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #2d6dda;
  text-align: center;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  -o-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #2d6dda;
    text-decoration: none;
    outline: 0;
    opacity: 0.9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #2d6dda;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    -webkit-transition: opacity 0.6s ease;
    -o-transition: opacity 0.6s ease;
    transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators li {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .carousel-indicators .active {
    opacity: 1; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #2d6dda;
  text-align: center; }

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border .75s linear infinite;
  animation: spinner-border .75s linear infinite; }

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em; }

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1; } }

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1; } }

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow .75s linear infinite;
  animation: spinner-grow .75s linear infinite; }

.spinner-grow-sm {
  width: 1rem;
  height: 1rem; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #007bff !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important; }

.bg-secondary {
  background-color: #6c757d !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important; }

.bg-success {
  background-color: #28a745 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important; }

.bg-info {
  background-color: #17a2b8 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important; }

.bg-warning {
  background-color: #ffc107 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important; }

.bg-danger {
  background-color: #dc3545 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #343a40 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important; }

.bg-white {
  background-color: #2d6dda !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #dee2e6 !important; }

.border-top {
  border-top: 1px solid #dee2e6 !important; }

.border-right {
  border-right: 1px solid #dee2e6 !important; }

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important; }

.border-left {
  border-left: 1px solid #dee2e6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #007bff !important; }

.border-secondary {
  border-color: #6c757d !important; }

.border-success {
  border-color: #28a745 !important; }

.border-info {
  border-color: #17a2b8 !important; }

.border-warning {
  border-color: #ffc107 !important; }

.border-danger {
  border-color: #dc3545 !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #343a40 !important; }

.border-white {
  border-color: #2d6dda !important; }

.rounded-sm {
  border-radius: 0.2rem !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-lg {
  border-radius: 0.3rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-pill {
  border-radius: 50rem !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  -ms-grid-row-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  -ms-grid-row-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  -ms-grid-row-align: stretch !important;
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.overflow-auto {
  overflow: auto !important; }

.overflow-hidden {
  overflow: hidden !important; }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.min-vw-100 {
  min-width: 100vw !important; }

.min-vh-100 {
  min-height: 100vh !important; }

.vw-100 {
  width: 100vw !important; }

.vh-100 {
  height: 100vh !important; }

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0); }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-n1 {
  margin: -0.25rem !important; }

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important; }

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important; }

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important; }

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important; }

.m-n2 {
  margin: -0.5rem !important; }

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important; }

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important; }

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important; }

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important; }

.m-n3 {
  margin: -1rem !important; }

.mt-n3,
.my-n3 {
  margin-top: -1rem !important; }

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important; }

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important; }

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important; }

.m-n4 {
  margin: -1.5rem !important; }

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important; }

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important; }

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important; }

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important; }

.m-n5 {
  margin: -3rem !important; }

.mt-n5,
.my-n5 {
  margin-top: -3rem !important; }

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important; }

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important; }

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-n1 {
    margin: -0.25rem !important; }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important; }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important; }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important; }
  .m-sm-n2 {
    margin: -0.5rem !important; }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important; }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important; }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important; }
  .m-sm-n3 {
    margin: -1rem !important; }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important; }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important; }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important; }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important; }
  .m-sm-n4 {
    margin: -1.5rem !important; }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important; }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important; }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important; }
  .m-sm-n5 {
    margin: -3rem !important; }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important; }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important; }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important; }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-n1 {
    margin: -0.25rem !important; }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important; }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important; }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important; }
  .m-md-n2 {
    margin: -0.5rem !important; }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important; }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important; }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important; }
  .m-md-n3 {
    margin: -1rem !important; }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important; }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important; }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important; }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important; }
  .m-md-n4 {
    margin: -1.5rem !important; }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important; }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important; }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important; }
  .m-md-n5 {
    margin: -3rem !important; }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important; }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important; }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important; }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
    }
  .m-lg-n1 {
    margin: -0.25rem !important; }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important; }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important; }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important; }
  .m-lg-n2 {
    margin: -0.5rem !important; }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important; }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important; }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important; }
  .m-lg-n3 {
    margin: -1rem !important; }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important; }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important; }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important; }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important; }
  .m-lg-n4 {
    margin: -1.5rem !important; }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important; }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important; }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important; }
  .m-lg-n5 {
    margin: -3rem !important; }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important; }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important; }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important; }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-n1 {
    margin: -0.25rem !important; }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important; }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important; }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important; }
  .m-xl-n2 {
    margin: -0.5rem !important; }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important; }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important; }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important; }
  .m-xl-n3 {
    margin: -1rem !important; }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important; }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important; }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important; }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important; }
  .m-xl-n4 {
    margin: -1.5rem !important; }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important; }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important; }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important; }
  .m-xl-n5 {
    margin: -3rem !important; }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important; }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important; }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important; }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important; }

.text-justify {
  text-align: justify !important; }

.text-wrap {
  white-space: normal !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-lighter {
  font-weight: lighter !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-weight-bolder {
  font-weight: bolder !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #2d6dda !important; }

.text-primary {
  color: #007bff !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #0056b3 !important; }

.text-secondary {
  color: #6c757d !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #494f54 !important; }

.text-success {
  color: #28a745 !important; }

a.text-success:hover, a.text-success:focus {
  color: #19692c !important; }

.text-info {
  color: #17a2b8 !important; }

a.text-info:hover, a.text-info:focus {
  color: #0f6674 !important; }

.text-warning {
  color: #ffc107 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ba8b00 !important; }

.text-danger {
  color: #dc3545 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #a71d2a !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important; }

.text-dark {
  color: #343a40 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #121416 !important; }

.text-body {
  color: #212529 !important; }

.text-muted {
  color: #6c757d !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.text-decoration-none {
  text-decoration: none !important; }

.text-break {
  word-break: break-word !important;
  overflow-wrap: break-word !important; }

.text-reset {
  color: inherit !important; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #2d6dda !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important; }
  .table-dark {
    color: inherit; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #dee2e6; }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6; } }

body {
  font-family: "Poppins", Arial, sans-serif;
  background: #fff;
  font-size: 16px;
  line-height: 1.8;
  font-weight: 400;
  color: #999999; }
  body.menu-show {
    overflow: hidden;
    position: fixed;
    height: 100%;
    width: 100%; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #ffbd39; }
  a:hover, a:focus {
    text-decoration: none;
    color: #ffbd39;
    outline: none !important; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  line-height: 1.5;
  color: white;
  font-weight: 400; }

.text-primary {
  color: #ffbd39 !important; }


.hero h3.vr {
  -webkit-writing-mode: vertical-lr;
  -ms-writing-mode: tb-lr;
  writing-mode: vertical-lr;
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
  text-orientation: sideways;
  text-align: center;
  text-orientation: sideways;
  margin: 0rem;
  position: absolute;
  top: 0;
  left: 4em;
  height: 100%;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 5px;
  font-size: 16px;
  z-index: 1;
  color: rgba(0, 0, 0, 0.3); }
  @media (max-width: 1199.98px) {
    .hero h3.vr {
      opacity: 0;
      display: none; } }

.owl-carousel {
  position: relative; }
  .owl-carousel .owl-item {
    opacity: .4; }
    .owl-carousel .owl-item.active {
      opacity: 1; }
  .owl-carousel .owl-dots {
    text-align: center; }
    .owl-carousel .owl-dots .owl-dot {
      width: 10px;
      height: 10px;
      margin: 5px;
      border-radius: 50%;
      background: #e6e6e6;
      position: relative; }
      .owl-carousel .owl-dots .owl-dot:after {
        position: absolute;
        top: -2px;
        left: -2px;
        right: 0;
        bottom: 0;
        width: 14px;
        height: 14px;
        content: '';
        border: 1px solid rgba(255, 255, 255, 0.3);
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%; }
      .owl-carousel .owl-dots .owl-dot:hover, .owl-carousel .owl-dots .owl-dot:focus {
        outline: none !important; }
      .owl-carousel .owl-dots .owl-dot.active {
        background: #b3b3b3; }
  .owl-carousel.home-slider {
    position: relative;
    height: 750px;
    z-index: 0; }
    .owl-carousel.home-slider .slider-item {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      height: 750px;
      position: relative;
      z-index: 0; }
      @media (max-width: 1199.98px) {
        .owl-carousel.home-slider .slider-item {
          background-position: center center !important; } }
      .owl-carousel.home-slider .slider-item .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #000000;
        opacity: 0; }
      .owl-carousel.home-slider .slider-item .slider-text {
        height: 750px;
        z-index: 0; }
        @media (max-width: 991.98px) {
          .owl-carousel.home-slider .slider-item .slider-text {
            text-align: center; } }
        .owl-carousel.home-slider .slider-item .slider-text .one-third {
          width: 60%;
          position: relative;
          z-index: -1; }
          .owl-carousel.home-slider .slider-item .slider-text .one-third .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #000000;
            opacity: 0; }
          @media (max-width: 1199.98px) {
            .owl-carousel.home-slider .slider-item .slider-text .one-third {
              width: 85%; } }
          @media (max-width: 991.98px) {
            .owl-carousel.home-slider .slider-item .slider-text .one-third {
              width: 100%;
              z-index: 0; }
              .owl-carousel.home-slider .slider-item .slider-text .one-third .overlay {
                opacity: .3; }
              .owl-carousel.home-slider .slider-item .slider-text .one-third:after {
                opacity: 0; } }
        .owl-carousel.home-slider .slider-item .slider-text .one-forth {
          width: 50%;
          position: relative; }
          @media (min-width: 768px) {
            .owl-carousel.home-slider .slider-item .slider-text .one-forth {
              position: absolute;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
              width: 1200px;
              margin: 0 auto; } }
          @media (max-width: 991.98px) {
            .owl-carousel.home-slider .slider-item .slider-text .one-forth {
              width: 100%;
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              z-index: 1;
              padding: 1em; } }
          .owl-carousel.home-slider .slider-item .slider-text .one-forth .text {
            width: 100%; }
            @media (min-width: 992px) {
              .owl-carousel.home-slider .slider-item .slider-text .one-forth .text {
                position: absolute;
                top: 50%;
                left: 0;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                right: 0;
                max-width: 50%;
                padding-left: 45px;
                padding-right: 3em; } }
        .owl-carousel.home-slider .slider-item .slider-text .subheading {
          color: #000000;
          font-weight: 600;
          font-size: 14px;
          letter-spacing: 3px;
          text-transform: uppercase;
          color: #ffbd39; }
        .owl-carousel.home-slider .slider-item .slider-text .text {
          position: relative;
          z-index: 1; }
        .owl-carousel.home-slider .slider-item .slider-text h1 {
          font-size: 60px;
          color: #2d6dda;
          line-height: 1.2;
          font-weight: 800; }
          .owl-carousel.home-slider .slider-item .slider-text h1 span {
            font-weight: 800;
            color: #ffbd39; }
          @media (max-width: 991.98px) {
            .owl-carousel.home-slider .slider-item .slider-text h1 {
              color: #2d6dda;
              font-size: 50px; } }
          @media (max-width: 767.98px) {
            .owl-carousel.home-slider .slider-item .slider-text h1 {
              font-size: 40px; } }
        .owl-carousel.home-slider .slider-item .slider-text h2 {
          font-size: 30px;
          font-weight: 400; }
          @media (max-width: 991.98px) {
            .owl-carousel.home-slider .slider-item .slider-text h2 {
              color: #2d6dda; } }
        .owl-carousel.home-slider .slider-item .slider-text p {
          color: rgba(0, 0, 0, 0.8);
          font-weight: 400; }
          @media (max-width: 991.98px) {
            .owl-carousel.home-slider .slider-item .slider-text p {
              color: rgba(255, 255, 255, 0.7);
              font-size: 23px; } }
        .owl-carousel.home-slider .slider-item .slider-text .btn-custom {
          bordeR: 1px solid #ffbd39;
          padding: 5px 20px;
          text-transform: uppercase;
          font-size: 12px;
          letter-spacing: 3px; }
   
    .owl-carousel.home-slider .owl-dots {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 40px;
      width: 100%; }
      @media (max-width: 767.98px) {
        .owl-carousel.home-slider .owl-dots {
          bottom: 5px; } }
      .owl-carousel.home-slider .owl-dots .owl-dot {
        width: 10px;
        height: 10px;
        margin: 5px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.4); }
        .owl-carousel.home-slider .owl-dots .owl-dot.active {
          background: #2d6dda; }

.hero-wrap {
  width: 100%;
  height: 100%;
  position: inherit;
  background-size: cover;
  background-repeat: no-repeat; }
  .hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: 0;
    background: #000000; }

.slider-text h1 {
  font-size: 48px;
  color: #2d6dda;
  line-height: 1.2;
  font-weight: 400; }
  @media (max-width: 991.98px) {
    .slider-text h1 {
      font-size: 40px; } }

.slider-text p {
  font-size: 20px;
  line-height: 1.5;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.8); }
  .slider-text p strong {
    font-weight: 700; }
    .slider-text p strong a {
      color: #000000; }

.slider-text .breadcrumbs {
  font-size: 12px;
  margin-bottom: 20px;
  z-index: 99;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600; }
  .slider-text .breadcrumbs span {
    color: rgba(255, 255, 255, 0.8); }
    .slider-text .breadcrumbs span i {
      color: rgba(255, 255, 255, 0.8); }
    .slider-text .breadcrumbs span a {
      color: rgba(255, 255, 255, 0.8); }
      .slider-text .breadcrumbs span a:hover, .slider-text .breadcrumbs span a:focus {
        color: #ffbd39; }
        .slider-text .breadcrumbs span a:hover i, .slider-text .breadcrumbs span a:focus i {
          color: #ffbd39; }

.slider-text .bread {
  font-weight: 700;
  color: #2d6dda;
  font-size: 7vw; }

.bg-light {
  background: #f8f9fa !important; }

.bg-dark {
  background: #191919 !important; }

.bg-primary {
  background: #ffbd39; }

.btn {
  cursor: pointer;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  -ms-border-radius: 40px;
  border-radius: 40px;
  -webkit-box-shadow: 0px 24px 36px -11px rgba(0, 0, 0, 0.09);
  -moz-box-shadow: 0px 24px 36px -11px rgba(0, 0, 0, 0.09);
  box-shadow: 0px 24px 36px -11px rgba(0, 0, 0, 0.09);
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600; }
  .btn:hover, .btn:active, .btn:focus {
    outline: none; }
  .btn.btn-primary {
    background: #ffbd39;
    border: 1px solid #ffbd39 !important;
    color: #000000 !important; }
    .btn.btn-primary:hover {
      border: 1px solid #ffbd39 !important;
      background: #ffbd39 !important;
      color: #000000 !important; }
    .btn.btn-primary.btn-outline-primary {
      border: 2px solid #ffbd39 !important;
      background: transparent !important;
      color: #ffbd39 !important; }
      .btn.btn-primary.btn-outline-primary:hover {
        border: 2px solid transparent !important;
        background: #ffbd39 !important;
        color: #2d6dda !important; }
  .btn.btn-secondary {
    background: #a0f669 !important;
    border: 1px solid #a0f669 !important;
    color: #2d6dda !important; }
    .btn.btn-secondary:hover {
      border: 1px solid #a0f669 !important;
      background: transparent !important;
      color: #a0f669 !important; }
    .btn.btn-secondary.btn-outline-primary {
      border: 1px solid #a0f669;
      background: transparent;
      color: #a0f669; }
      .btn.btn-secondary.btn-outline-primary:hover {
        border: 1px solid transparent;
        background: #a0f669;
        color: #2d6dda; }
  .btn.btn-white {
    background: #2d6dda !important;
    border: 1px solid #2d6dda !important;
    color: #000000 !important; }
    .btn.btn-white:hover {
      border: 1px solid #000000;
      background: #2d6dda !important;
      color: #2d6dda; }
    .btn.btn-white.btn-outline-white {
      border: 1px solid rgba(255, 255, 255, 0.5) !important;
      background: transparent !important;
      color: #2d6dda !important; }
      .btn.btn-white.btn-outline-white:hover {
        border: 1px solid transparent;
        background: #ffbd39;
        color: #2d6dda; }

.ftco-about .img-about {
  width: 100%;
  z-index: 0;
  position: relative; }
  .ftco-about .img-about .img {
    display: block;
    width: 100%;
    position: relative;
    z-index: 1; }

.ftco-about ul.about-info {
  display: inline-block;
  padding: 0;
  margin: 0;
  width: 100%; }
  .ftco-about ul.about-info li {
    list-style: none;
    margin-bottom: 10px; }
    .ftco-about ul.about-info li span {
      width: calc(100% - 130px); }
      .ftco-about ul.about-info li span:first-child {
        font-weight: 600;
        color: #2d6dda;
        width: 130px; }

.ftco-about .counter-wrap .text p {
  font-size: 20px; }
  .ftco-about .counter-wrap .text p span {
    font-weight: 400;
    color: #2d6dda; }
  .ftco-about .counter-wrap .text p span.number {
    font-weight: 600;
    color: #ffbd39; }

    .resume-wrap {
    padding-left: 10px;
    width: 100%;
    margin-bottom: 30px;
    background: #8eb1ed !important;
    padding: 7px;
    text-align: center;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
}
  .resume-wrap .date {
    font-weight: 900;
    font-size: 26px;
    color: #ffbd39; }
  .resume-wrap h2 {
    font-size: 26px; }
  .resume-wrap .position {
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase; }

.services-1 {
  margin-bottom: 40px;
  padding: 2em;
  background: rgba(255, 255, 255, 0.1);
  width: 100%;
  -webkit-box-shadow: 0px 20px 69px -27px rgba(0, 0, 0, 0.17);
  -moz-box-shadow: 0px 20px 69px -27px rgba(0, 0, 0, 0.17);
  box-shadow: 0px 20px 69px -27px rgba(0, 0, 0, 0.17); }
  .services-1 .icon {
    display: block;
    margin-bottom: 30px; }
    .services-1 .icon i {
      font-size: 60px;
      line-height: 1.0;
      color: #ffbd39; }
  .services-1 .desc h3 {
    line-height: 1.3;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    position: relative;
    color: #2d6dda; }
    .services-1 .desc h3:after {
      position: absolute;
      bottom: -15px;
      left: 0;
      right: 0;
      content: '';
      width: 30px;
      height: 1px;
      background: #ffbd39;
      margin: 0 auto; }
    .services-1 .desc h3 a {
      color: #2d6dda; }
  .services-1 .desc h4 {
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 18px; }
  .services-1 .desc span {
    display: block;
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 10px;
    color: #ffbd39; }
  .services-1:hover {
    background: #ffbd39; }
    .services-1:hover .icon i {
      color: #2d6dda; }
    .services-1:hover h3 {
      color: #000000; }
      .services-1:hover h3:after {
        background: #000000; }

.progress-wrap {
  width: 100%;
  margin-bottom: 30px; }
  .progress-wrap h3 {
    font-size: 20px;
    margin-bottom: 10px;
    font-weight: 500; }

.progress {
  height: 10px;
  -webkit-box-shadow: none;
  box-shadow: none;
  background: #1a1a1a;
  overflow: visible; }

.progress-bar {
  background: #ffbd39;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 12px;
  line-height: 1.2;
  color: #000000;
  font-weight: 600;
  position: relative;
  overflow: visible;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px; }
  .progress-bar:after {
    position: absolute;
    top: -2px;
    right: 0;
    width: 34px;
    height: 34px;
    content: '';
    background: #ffbd39;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
    opacity: 0; }
  .progress-bar span {
    position: absolute;
    top: -38px;
    right: 0;
    font-size: 20px;
    font-weight: 400;
    color: #2d6dda; }

.ftco-hireme {
  background: #ffbd39;
  z-index: -1; }
  .ftco-hireme h2 {
    color: #2d6dda;
    font-size: 40px;
    font-weight: 900; }
    .ftco-hireme h2 span {
      color: #ffbd39; }

@media (min-width: 992px) {
  .margin-top {
    margin-top: -70px;
    padding-top: 10em !important; } }

.project {
  width: 100%;
  height: 285px;
  margin-bottom: 30px;
  position: relative;
  z-index: 0; }
  .project.img-2 {
    height: 600px; }
    @media (max-width: 767.98px) {
      .project.img-2 {
        height: 285px; } }
    .project.img-2 .text {
      max-width: 45%;
      z-index: 1; }
      .project.img-2 .text h3 {
        font-size: 22px; }
        .project.img-2 .text h3 a {
          color: #2d6dda; }
      .project.img-2 .text span {
        color: rgba(255, 255, 255, 0.8);
        text-transform: uppercase;
        letter-spacing: 2px; }
      @media (max-width: 767.98px) {
        .project.img-2 .text {
          max-width: 100%;
          opacity: 1; }
          .project.img-2 .text span {
            color: rgba(255, 255, 255, 0.8); } }
  .project .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: 0;
    background: #ffbd39;
    z-index: -1;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    @media (max-width: 767.98px) {
      .project .overlay {
        opacity: .2; } }
  .project .text {
    max-width: 80%;
    z-index: 1;
    opacity: 0;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    .project .text h3 {
      font-size: 20px; }
      .project .text h3 a {
        color: #2d6dda; }
    .project .text span {
      color: rgba(255, 255, 255, 0.8);
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 12px;
      font-weight: 600; }
    @media (max-width: 767.98px) {
      .project .text {
        opacity: 1; }
        .project .text span {
          color: rgba(255, 255, 255, 0.8); } }
  .project:hover .overlay, .project:focus .overlay {
    opacity: .9; }
  .project:hover .text, .project:focus .text {
    opacity: 1; }

.aside-stretch {
  background: #ffce6c; }
  .aside-stretch:after {
    position: absolute;
    top: 0;
    right: 100%;
    bottom: 0;
    content: '';
    width: 360%;
    background: #ffce6c; }
  @media (max-width: 767.98px) {
    .aside-stretch {
      background: transparent; }
      .aside-stretch:after {
        background: transparent;
        display: none; } }

.form-control {
  height: 52px !important;
  background: #2d6dda !important;
  color: #000000 !important;
  font-size: 18px;
  border-radius: 5px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  .form-control:focus, .form-control:active {
    border-color: #000000; }

textarea.form-control {
  height: inherit !important; }

.ftco-vh-100 {
  height: 100vh; }
  @media (max-width: 1199.98px) {
    .ftco-vh-100 {
      height: inherit;
      padding-top: 5em;
      padding-bottom: 5em; } }

.ftco-animate {
  opacity: 0;
  visibility: hidden; }

.bg-primary {
  background: #ffbd39 !important; }

.about-author {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px; }
  .about-author .desc h3 {
    font-size: 24px; }

.ftco-section {
  padding: 7em 0;
  position: relative; }
  @media (max-width: 767.98px) {
    .ftco-section {
      padding: 6em 0; } }

.ftco-no-pt {
  padding-top: 0 !important; }

.ftco-no-pb {
  padding-bottom: 0 !important; }

.ftco-bg-dark {
  background: #3c312e; }


      

.media .ftco-icon {
  width: 100px; }
  .media .ftco-icon span {
    color: #ffbd39; }

#map {
  width: 100%; }
  @media (max-width: 767.98px) {
    #map {
      height: 300px; } }

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 189, 57, 0.4); }
  70% {
    -webkit-box-shadow: 0 0 0 30px rgba(255, 189, 57, 0); }
  100% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 189, 57, 0); } }

@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(255, 189, 57, 0.4);
    -webkit-box-shadow: 0 0 0 0 rgba(255, 189, 57, 0.4);
    box-shadow: 0 0 0 0 rgba(255, 189, 57, 0.4); }
  70% {
    -moz-box-shadow: 0 0 0 30px rgba(255, 189, 57, 0);
    -webkit-box-shadow: 0 0 0 30px rgba(255, 189, 57, 0);
    box-shadow: 0 0 0 30px rgba(255, 189, 57, 0); }
  100% {
    -moz-box-shadow: 0 0 0 0 rgba(255, 189, 57, 0);
    -webkit-box-shadow: 0 0 0 0 rgba(255, 189, 57, 0);
    box-shadow: 0 0 0 0 rgba(255, 189, 57, 0); } }

.heading-section {
  position: relative; }
  .heading-section .subheading {
    font-size: 13px;
    font-weight: 500;
    display: block;
    margin-bottom: 5px;
    text-transform: uppercase;
    color: black;
    letter-spacing: 3px; }
  .heading-section h1.big {
    position: absolute;
    top: 0px;
    left: 0;
    font-size: 7vw;
    color: #2d6dda;
    z-index: -1;
    font-weight: 900; }
    .heading-section h1.big.big-2 {
      right: 0; }
  .heading-section h2 {
    font-size: 50px;
    font-weight: 700;
  color: #2d6dda !important; }
    .heading-section h2 span {
      font-weight: 400; }
    @media (max-width: 767.98px) {
      .heading-section h2 {
        font-size: 38px; } }
  .heading-section.heading-section-white .subheading {
    color: #2d6dda !important; }
  .heading-section.heading-section-white h2 {
    color: #2d6dda; }
  .heading-section.heading-section-white p {
    color: #2d6dda; }

.img,
.blog-img,
.user-img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

.image-popup {
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out; }

.mfp-with-zoom.mfp-ready .mfp-container {
  opacity: 1; }

.mfp-with-zoom.mfp-ready.mfp-bg {
  opacity: 0.8; }

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0; }

#section-counter {
  position: relative;
  z-index: 0; }

@media (max-width: 1199.98px) {
  .ftco-counter {
    background-position: center center !important; } }

.ftco-counter .block-18 {
  display: block;
  width: 100%;
  text-align: center;
  background: #191919;
  padding: 30px 20px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px; }

.ftco-counter .text strong.number {
  font-weight: 700;
  font-size: 30px;
  color: #ffbd39;
  display: block; }

.ftco-counter .text span {
  display: block;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.8); }

@media (max-width: 767.98px) {
  .ftco-counter .counter-wrap {
    margin-bottom: 20px; } }

.ftco-counter .ftco-number {
  display: block;
  font-size: 72px;
  font-weight: bold;
  color: #ffbd39; }

.ftco-counter .ftco-label {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: .1em; }

.block-20 {
  overflow: hidden;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  position: relative;
  display: block;
  width: 100%;
  height: 350px; }

.blog-entry {
  position: relative; }
  @media (min-width: 768px) {
    .blog-entry {
      margin-bottom: 30px; } }
  @media (max-width: 767.98px) {
    .blog-entry {
      margin-bottom: 30px; } }
  .blog-entry .text {
    width: 100%;
    margin: 0 auto; }
    .blog-entry .text .heading {
      font-size: 20px;
      margin-bottom: 16px;
      font-weight: 500; }
      .blog-entry .text .heading a {
        color: #2d6dda; }
        .blog-entry .text .heading a:hover, .blog-entry .text .heading a:focus, .blog-entry .text .heading a:active {
          color: #ffbd39; }
  .blog-entry .meta {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 0;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px; }
    .blog-entry .meta span {
      color: #ffbd39; }
    .blog-entry .meta a {
      color: #ffbd39; }
      .blog-entry .meta a:hover {
        color: #ffbd39; }

.block-23 ul {
  padding: 0; }
  .block-23 ul li, .block-23 ul li > a {
    display: table;
    line-height: 1.5;
    margin-bottom: 15px; }
  .block-23 ul li span {
    color: rgba(255, 255, 255, 0.7); }
  .block-23 ul li .icon, .block-23 ul li .text {
    display: table-cell;
    vertical-align: top; }
  .block-23 ul li .icon {
    width: 40px;
    font-size: 18px;
    padding-top: 2px;
    color: white; }

.block-6 {
  margin-bottom: 40px; }
  .block-6 .media-body p {
    font-size: 16px; }

.block-27 ul {
  padding: 0;
  margin: 0; }
  .block-27 ul li {
    display: inline-block;
    margin-bottom: 4px;
    font-weight: 400; }
    .block-27 ul li a, .block-27 ul li span {
      color: #a0f669;
      text-align: center;
      display: inline-block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border-radius: 50%;
      border: 1px solid #cccccc; }
    .block-27 ul li.active a, .block-27 ul li.active span {
      background: #a0f669;
      color: #2d6dda;
      border: 1px solid transparent; }

.contact-section .contact-info p a {
  color: #1a1a1a; }

.contact-section .box {
  width: 100%;
  display: block;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px; }
  @media (max-width: 991.98px) {
    .contact-section .box {
      margin-bottom: 30px; } }
  .contact-section .box .icon {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.1);
    margin: 0 auto;
    margin-bottom: 2em;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
    .contact-section .box .icon span {
      color: #ffbd39;
      font-size: 30px; }
  .contact-section .box h3 {
    font-size: 17px;
    font-weight: 500;
    text-transform: uppercase; }

.contact-section .contact-form {
  width: 100%; }

.contact-section .img {
  width: 100%;
  background-position: top center; }
  @media (max-width: 991.98px) {
    .contact-section .img {
      height: 500px; } }

.contact-section .contact-info p a {
  color: #2d6dda; }

.contact-section .contact-form {
  width: 100%; }
  @media (max-width: 767.98px) {
    .contact-section .contact-form .btn-primary {
      display: block;
      width: 100%; } }

.block-9 .form-control {
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  font-size: 15px; }

.block-21 .blog-img {
  display: block;
  height: 80px;
  width: 80px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%; }

.block-21 .text {
  width: calc(100% - 100px); }
  .block-21 .text .heading {
    font-size: 18px;
    font-weight: 300; }
    .block-21 .text .heading a {
      color: #2d6dda; }
      .block-21 .text .heading a:hover, .block-21 .text .heading a:active, .block-21 .text .heading a:focus {
        color: #ffbd39; }
  .block-21 .text .meta > div {
    display: inline-block;
    margin-right: 5px; }
    .block-21 .text .meta > div a {
      color: #4d4d4d;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 600; }

/* Blog*/
.post-info {
  font-size: 12px;
  text-transform: uppercase;
  font-weight: bold;
  color: #2d6dda;
  letter-spacing: .1em; }
  .post-info > div {
    display: inline-block; }
    .post-info > div .seperator {
      display: inline-block;
      margin: 0 10px;
      opacity: .5; }

.tagcloud a {
  text-transform: uppercase;
  display: inline-block;
  padding: 4px 10px;
  margin-bottom: 7px;
  margin-right: 4px;
  border-radius: 4px;
  color: #2d6dda;
  border: 1px solid rgba(255, 255, 255, 0.2);
  font-size: 11px; }
  .tagcloud a:hover {
    border: 1px solid #000; }

.comment-form-wrap {
  clear: both; }

.comment-list {
  padding: 0;
  margin: 0; }
  .comment-list .children {
    padding: 50px 0 0 40px;
    margin: 0;
    float: left;
    width: 100%; }
  .comment-list li {
    padding: 0;
    margin: 0 0 30px 0;
    float: left;
    width: 100%;
    clear: both;
    list-style: none; }
    .comment-list li .vcard {
      width: 80px;
      float: left; }
      .comment-list li .vcard img {
        width: 50px;
        border-radius: 50%; }
    .comment-list li .comment-body {
      float: right;
      width: calc(100% - 80px); }
      .comment-list li .comment-body h3 {
        font-size: 20px; }
      .comment-list li .comment-body .meta {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: .1em;
        color: rgba(255, 255, 255, 0.3);
        color: #ffbd39;
        font-weight: 600;
        margin-bottom: 20px; }
      .comment-list li .comment-body .reply {
        padding: 5px 10px;
        background: rgba(255, 255, 255, 0.1);
        color: #2d6dda;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: .1em;
        font-weight: 600;
        border-radius: 4px; }
        .comment-list li .comment-body .reply:hover {
          color: #2d6dda;
          background: black; }

.search-form .form-group {
  position: relative;
  margin-bottom: 0; }
  .search-form .form-group input {
    padding-right: 50px;
    font-size: 14px; }

.search-form .icon {
  position: absolute;
  top: 50%;
  right: 20px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%); }

.sidebar-box {
  margin-bottom: 30px;
  padding: 25px;
  font-size: 15px;
  width: 100%; }
  .sidebar-box h3 {
    font-size: 18px;
    margin-bottom: 15px; }
  .sidebar-box .heading-sidebar {
    font-weight: 600;
    margin-bottom: 20px;
    font-size: 20px; }

.categories, .sidelink {
  padding: 0;
  margin: 0; }
  .categories li, .sidelink li {
    position: relative;
    margin-bottom: 10px;
    padding-bottom: 10px;
    list-style: none; }
    .categories li:last-child, .sidelink li:last-child {
      margin-bottom: 0;
      border-bottom: none;
      padding-bottom: 0; }
    .categories li a, .sidelink li a {
      display: block;
      color: #2d6dda; }
      .categories li a span, .sidelink li a span {
        position: absolute;
        right: 0;
        top: 0;
        color: #ccc; }
      .categories li a:hover, .categories li a:focus, .sidelink li a:hover, .sidelink li a:focus {
        color: #ffbd39; }
    .categories li.active a, .sidelink li.active a {
      color: #000000;
      font-style: italic; }

#ftco-loader {
  position: fixed;
  width: 96px;
  height: 96px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  border-radius: 16px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity .2s ease-out, visibility 0s linear .2s;
  -o-transition: opacity .2s ease-out, visibility 0s linear .2s;
  transition: opacity .2s ease-out, visibility 0s linear .2s;
  z-index: 1000; }

#ftco-loader.fullscreen {
  padding: 0;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  background-color: #2d6dda;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none; }

#ftco-loader.show {
  -webkit-transition: opacity .4s ease-out, visibility 0s linear 0s;
  -o-transition: opacity .4s ease-out, visibility 0s linear 0s;
  transition: opacity .4s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1; }

#ftco-loader .circular {
  -webkit-animation: loader-rotate 2s linear infinite;
  animation: loader-rotate 2s linear infinite;
  position: absolute;
  left: calc(50% - 24px);
  top: calc(50% - 24px);
  display: block;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg); }

#ftco-loader .path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: loader-dash 1.5s ease-in-out infinite;
  animation: loader-dash 1.5s ease-in-out infinite;
  stroke-linecap: round; }

@-webkit-keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

@keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

.andjica-l
{
    white-space: normal !important;
}
.sig
{
  margin-top:20px;
  margin-bottom:20px;
}
.sticky-wrapper{
    top:0;
}

hr{
    background: white;
    margin-top: 120px;
}

li{
    list-style:none;
}

.xvs{
    margin-left: 120px;
    margin-right: -120px;
}

.xvb{
    margin-left: -120px;
    margin-right: 120px;
}

.db12{
  background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgb(204, 165, 106) 100%);
      background-size: cover;
    background-position: right; 
    
}

@media screen and (max-width:468px){
.zatel{
  margin-top: -88px;
}
.xvs{
  display:none;

}
.ggg{
  
}
}

.night {
  position: relative;
  width: 100%;
  height: 50px;
    -webkit-transform: rotateZ(45deg);
          transform: rotateZ(45deg);
}

.shooting_star {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 2px;
  background: linear-gradient(-45deg, #5f91ff, rgba(0, 0, 255, 0));
  border-radius: 999px;
  -webkit-filter: drop-shadow(0 0 6px #699bff);
          filter: drop-shadow(0 0 6px #699bff);
  -webkit-animation: tail 3000ms ease-in-out infinite, shooting 3000ms ease-in-out infinite;
          animation: tail 3000ms ease-in-out infinite, shooting 3000ms ease-in-out infinite;
}
.shooting_star::before, .shooting_star::after {
  content: '';
  position: absolute;
  top: calc(50% - 1px);
  right: 0;
  height: 2px;
  background: linear-gradient(-45deg, rgba(0, 0, 255, 0), #5f91ff, rgba(0, 0, 255, 0));
  -webkit-transform: translateX(50%) rotateZ(45deg);
          transform: translateX(50%) rotateZ(45deg);
  border-radius: 100%;
  -webkit-animation: shining 3000ms ease-in-out infinite;
          animation: shining 3000ms ease-in-out infinite;
}
.shooting_star::after {
  -webkit-transform: translateX(50%) rotateZ(-45deg);
          transform: translateX(50%) rotateZ(-45deg);
}
.shooting_star:nth-child(1) {
  top: calc(50% - 45px);
  left: calc(50% - 209px);
  -webkit-animation-delay: 5725ms;
          animation-delay: 5725ms;
}
.shooting_star:nth-child(1)::before, .shooting_star:nth-child(1)::after, .shooting_star:nth-child(1)::after {
  -webkit-animation-delay: 5725ms;
          animation-delay: 5725ms;
}
.shooting_star:nth-child(2) {
  top: calc(50% - -3px);
  left: calc(50% - 63px);
  -webkit-animation-delay: 3864ms;
          animation-delay: 3864ms;
}
.shooting_star:nth-child(2)::before, .shooting_star:nth-child(2)::after, .shooting_star:nth-child(2)::after {
  -webkit-animation-delay: 3864ms;
          animation-delay: 3864ms;
}
.shooting_star:nth-child(3) {
  top: calc(50% - -185px);
  left: calc(50% - 154px);
  -webkit-animation-delay: 7817ms;
          animation-delay: 7817ms;
}
.shooting_star:nth-child(3)::before, .shooting_star:nth-child(3)::after, .shooting_star:nth-child(3)::after {
  -webkit-animation-delay: 7817ms;
          animation-delay: 7817ms;
}
.shooting_star:nth-child(4) {
  top: calc(50% - -123px);
  left: calc(50% - 97px);
  -webkit-animation-delay: 4809ms;
          animation-delay: 4809ms;
}
.shooting_star:nth-child(4)::before, .shooting_star:nth-child(4)::after, .shooting_star:nth-child(4)::after {
  -webkit-animation-delay: 4809ms;
          animation-delay: 4809ms;
}
.shooting_star:nth-child(5) {
  top: calc(50% - 161px);
  left: calc(50% - 219px);
  -webkit-animation-delay: 3610ms;
          animation-delay: 3610ms;
}
.shooting_star:nth-child(5)::before, .shooting_star:nth-child(5)::after, .shooting_star:nth-child(5)::after {
  -webkit-animation-delay: 3610ms;
          animation-delay: 3610ms;
}
.shooting_star:nth-child(6) {
  top: calc(50% - -55px);
  left: calc(50% - 6px);
  -webkit-animation-delay: 3444ms;
          animation-delay: 3444ms;
}
.shooting_star:nth-child(6)::before, .shooting_star:nth-child(6)::after, .shooting_star:nth-child(6)::after {
  -webkit-animation-delay: 3444ms;
          animation-delay: 3444ms;
}
.shooting_star:nth-child(7) {
  top: calc(50% - -49px);
  left: calc(50% - 281px);
  -webkit-animation-delay: 789ms;
          animation-delay: 789ms;
}
.shooting_star:nth-child(7)::before, .shooting_star:nth-child(7)::after, .shooting_star:nth-child(7)::after {
  -webkit-animation-delay: 789ms;
          animation-delay: 789ms;
}
.shooting_star:nth-child(8) {
  top: calc(50% - 3px);
  left: calc(50% - 45px);
  -webkit-animation-delay: 6954ms;
          animation-delay: 6954ms;
}
.shooting_star:nth-child(8)::before, .shooting_star:nth-child(8)::after, .shooting_star:nth-child(8)::after {
  -webkit-animation-delay: 6954ms;
          animation-delay: 6954ms;
}
.shooting_star:nth-child(9) {
  top: calc(50% - -22px);
  left: calc(50% - 127px);
  -webkit-animation-delay: 3609ms;
          animation-delay: 3609ms;
}
.shooting_star:nth-child(9)::before, .shooting_star:nth-child(9)::after, .shooting_star:nth-child(9)::after {
  -webkit-animation-delay: 3609ms;
          animation-delay: 3609ms;
}
.shooting_star:nth-child(10) {
  top: calc(50% - 69px);
  left: calc(50% - 174px);
  -webkit-animation-delay: 2240ms;
          animation-delay: 2240ms;
}
.shooting_star:nth-child(10)::before, .shooting_star:nth-child(10)::after, .shooting_star:nth-child(10)::after {
  -webkit-animation-delay: 2240ms;
          animation-delay: 2240ms;
}
.shooting_star:nth-child(11) {
  top: calc(50% - -140px);
  left: calc(50% - 290px);
  -webkit-animation-delay: 5488ms;
          animation-delay: 5488ms;
}
.shooting_star:nth-child(11)::before, .shooting_star:nth-child(11)::after, .shooting_star:nth-child(11)::after {
  -webkit-animation-delay: 5488ms;
          animation-delay: 5488ms;
}
.shooting_star:nth-child(12) {
  top: calc(50% - -154px);
  left: calc(50% - 175px);
  -webkit-animation-delay: 3217ms;
          animation-delay: 3217ms;
}
.shooting_star:nth-child(12)::before, .shooting_star:nth-child(12)::after, .shooting_star:nth-child(12)::after {
  -webkit-animation-delay: 3217ms;
          animation-delay: 3217ms;
}
.shooting_star:nth-child(13) {
  top: calc(50% - -166px);
  left: calc(50% - 184px);
  -webkit-animation-delay: 4492ms;
          animation-delay: 4492ms;
}
.shooting_star:nth-child(13)::before, .shooting_star:nth-child(13)::after, .shooting_star:nth-child(13)::after {
  -webkit-animation-delay: 4492ms;
          animation-delay: 4492ms;
}
.shooting_star:nth-child(14) {
  top: calc(50% - 191px);
  left: calc(50% - 143px);
  -webkit-animation-delay: 1169ms;
          animation-delay: 1169ms;
}
.shooting_star:nth-child(14)::before, .shooting_star:nth-child(14)::after, .shooting_star:nth-child(14)::after {
  -webkit-animation-delay: 1169ms;
          animation-delay: 1169ms;
}
.shooting_star:nth-child(15) {
  top: calc(50% - -106px);
  left: calc(50% - 128px);
  -webkit-animation-delay: 5968ms;
          animation-delay: 5968ms;
}
.shooting_star:nth-child(15)::before, .shooting_star:nth-child(15)::after, .shooting_star:nth-child(15)::after {
  -webkit-animation-delay: 5968ms;
          animation-delay: 5968ms;
}
.shooting_star:nth-child(16) {
  top: calc(50% - 34px);
  left: calc(50% - 214px);
  -webkit-animation-delay: 4684ms;
          animation-delay: 4684ms;
}
.shooting_star:nth-child(16)::before, .shooting_star:nth-child(16)::after, .shooting_star:nth-child(16)::after {
  -webkit-animation-delay: 4684ms;
          animation-delay: 4684ms;
}
.shooting_star:nth-child(17) {
  top: calc(50% - -162px);
  left: calc(50% - 116px);
  -webkit-animation-delay: 9355ms;
          animation-delay: 9355ms;
}
.shooting_star:nth-child(17)::before, .shooting_star:nth-child(17)::after, .shooting_star:nth-child(17)::after {
  -webkit-animation-delay: 9355ms;
          animation-delay: 9355ms;
}
.shooting_star:nth-child(18) {
  top: calc(50% - 73px);
  left: calc(50% - 135px);
  -webkit-animation-delay: 9659ms;
          animation-delay: 9659ms;
}
.shooting_star:nth-child(18)::before, .shooting_star:nth-child(18)::after, .shooting_star:nth-child(18)::after {
  -webkit-animation-delay: 9659ms;
          animation-delay: 9659ms;
}
.shooting_star:nth-child(19) {
  top: calc(50% - -39px);
  left: calc(50% - 91px);
  -webkit-animation-delay: 4459ms;
          animation-delay: 4459ms;
}
.shooting_star:nth-child(19)::before, .shooting_star:nth-child(19)::after, .shooting_star:nth-child(19)::after {
  -webkit-animation-delay: 4459ms;
          animation-delay: 4459ms;
}
.shooting_star:nth-child(20) {
  top: calc(50% - 57px);
  left: calc(50% - 133px);
  -webkit-animation-delay: 3082ms;
          animation-delay: 3082ms;
}
.shooting_star:nth-child(20)::before, .shooting_star:nth-child(20)::after, .shooting_star:nth-child(20)::after {
  -webkit-animation-delay: 3082ms;
          animation-delay: 3082ms;
}

@-webkit-keyframes tail {
  0% {
    width: 0;
  }
  30% {
    width: 100px;
  }
  100% {
    width: 0;
  }
}

@keyframes tail {
  0% {
    width: 0;
  }
  30% {
    width: 100px;
  }
  100% {
    width: 0;
  }
}
@-webkit-keyframes shining {
  0% {
    width: 0;
  }
  50% {
    width: 30px;
  }
  100% {
    width: 0;
  }
}
@keyframes shining {
  0% {
    width: 0;
  }
  50% {
    width: 30px;
  }
  100% {
    width: 0;
  }
}
@-webkit-keyframes shooting {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(300px);
            transform: translateX(300px);
  }
}
@keyframes shooting {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(300px);
            transform: translateX(300px);
  }
}
@-webkit-keyframes sky {
  0% {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
  }
  100% {
    -webkit-transform: rotate(405deg);
            transform: rotate(405deg);
  }
}
@keyframes sky {
  0% {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
  }
  100% {
    -webkit-transform: rotate(405deg);
            transform: rotate(405deg);
  }
}


.ftco-about .img-about .img {
    display: block;
    width: 100%;
    position: relative;
    z-index: 1;
}
.ftco-no-pb {
    padding-bottom: 0 !important;
}
.ftco-section {
    padding: 7em 0;
    position: relative;
}


</style>
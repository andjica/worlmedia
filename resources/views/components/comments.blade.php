@foreach($comments as $cm)
<div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>{{$cm->comment}}</p>
                <div class="text">
                  <strong class="d-block">{{$cm->user->name}}, {{$cm->user->email}}</strong>
                  <span></span>
                </div>
              </blockquote>
            </div>
          </div>
@endforeach
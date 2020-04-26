<button type="button" class="btn btn-primary m-5" data-toggle="modal" data-target="#andjica">
Rate this crew member
                        </button>

                        <!-- Modal -->
                        <div class="modal "  id="andjica" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background-color: white">
                              <div class="modal-header">
                                <div class="row">
                                  <div class="col-lg-4"> 
                                <div class="rounded-circle  image-background3"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                                </div></div>
                                  <div class="col-lg-8">
                                    <h5 class="modal-title text-secondary" id="exampleModalCenterTitle">Give rate to user: {{$user->name}}<br>
                                    Profession: {{$user->category->name}}<br>
                                  From: {{$user->city->name}}, {{$user->city->country->name_country}}</h5>
                                  </div>
                                </div>
                               
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="{{route('give-rate')}}"  id="form-rate" method="post">
                                @csrf
                              <div class="modal-body text-center">
                                <select name="rate" class="form-control"  style="background:white !important;">
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                                <input type="hidden" value="{{$user->id}}" name="userid">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary">
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      @isset($rate)
                     
                      <div class="card-body text-center  text-black m-5 rounded">
                        <h5 class="card-title text-black ">Clients gave a rateing for user</h5>
                        <div class="counter col_fourth end">
                        <i class="fa fa-trophy fa-3x text-orange"></i>
                      
                        <h2 class="timer count-title count-number text-black" data-to="{{$rate}}" data-speed="1500"></h2>
                      
                        <p class="count-text ">Avarage rateing of user {{$user->name}}</p>
                      </div>
                    </div>
                   
                    @endisset
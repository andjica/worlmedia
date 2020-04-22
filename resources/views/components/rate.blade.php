<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#andjica">
                          Give rate to this user
                        </button>

                        <!-- Modal -->
                        <div class="modal " id="andjica" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
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
                              <form action="" id="form-rate" method="post">
                              <div class="modal-body text-center">
                                <select name="rate" class="form-control">
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary">
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
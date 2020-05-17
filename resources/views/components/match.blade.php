

<!-- Modal -->
<div class="modal fadeInU" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-light">
          <h2 class="text-serif text-dark text-center">Match {{$user->name}}</h2>
        <form action="{{route('give-match')}}" method="post" id="form-match">
            @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Your email address</label>
            <input type="email" class="form-control"  id="email-match" value="{{auth()->user()->email}}" name="userauth">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <p id="er-ems"></p>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Your message</label>
            <textarea class="form-control" id="message-match" name="message"></textarea>
            <p id="er-msg"></p>
        </div>
        <div class="form-group form-check">
            <input type="hidden" class="form-check-input" id="" value="{{$user->id}}" name="userid">
            <input type="hidden" class="form-check-input" id="" value="{{$user->email}}" name="useremail">
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="match-apply">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
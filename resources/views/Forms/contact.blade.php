<form class="needs-validation" action="{{ route('contact')}}" method="post">                
  <input type="hidden"  name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="text">Message</label>
    <textarea class="form-control" id="text" name="text" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
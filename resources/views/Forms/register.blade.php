<div class="col-sm-12 col-md-6 sign-up row ">
  <div class="col-sm-0 col-md-4 "></div>
  <div class="col-sm-12 col-md-8 ">
    <fieldset >
      <legend><h1>Register</h1></legend>
      <form class="needs-validation p-3" action="{{ route('contact')}}" method="post">                
        <input type="hidden"  name="_token" value="{{ csrf_token() }}">              
        <div class="form-group">
          <label for="name">Full name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Fuul name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="cpwd">Confirm</label>
          <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Password" required>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="terms" name="terms">
          <label class="form-check-label" for="terms">Accepet <a href="">Terms</a> of service</label>
        </div>
        <button type="submit" class="btn submit">submit</button>
      </form>
    </fieldset>
  </div>    
</div>
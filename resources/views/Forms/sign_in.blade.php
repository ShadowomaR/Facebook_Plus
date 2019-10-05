<div class="col-sm-12 col-md-6 sign-up row ">
        <div class="col-sm-0 col-md-4 "></div>
        <div class="col-sm-12 col-md-8 ">
          <fieldset >
            <legend><h1>Sign up</h1></legend>
            <form class="needs-validation p-3" action="{{ route('contact')}}" method="post">                
                <input type="hidden"  name="_token" value="{{ csrf_token() }}">             
                <div class="form-group">
                    <label for="formGroupExampleInput">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="keep" name="keep">
                    <label class="form-check-label" for="keep">Remember me</label>
                </div>
                <button type="submit" class="btn submit">submit</button>
            </form>
          </fieldset>
        </div>    
      </div>
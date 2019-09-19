<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3" >
          <h5>About The Organization</h5>
            <p>Our mission and vision is to provide leadership and encourage partnership in caring for the environment by inspiring, informing, and enabling nations and peoples to improve their quality of life without compromising that of future generations.</p>
        </div>
        <div class="col-sm-6 col-md-3">
          <h5>OUR ADDRESS</h5>
          <p>Catholic Church<br>
            121 King Street, Melbourne<br>
            Victoria 3000 Australia<br><br>
            Phone: +61 3 8376 6284<br>
            Email: <a href="#"><span class="__c f_email__" data-cfemail="2449454d48644745504c4b484d47534146574d50410a474b49">[email&#160;protected]</span></a>
          </p>
        </div>
        <div class="col-sm-6 col-md-3">
          <h5>CONNECT</h5>
          <div class="social-icons">
            <a href="https://www.facebook.com/nfoyc/?modal=admin_todo_tour" target="_blank"><img src="{{ asset('image/fb-icon.png') }}" alt="social"></a>
            <a href="#"><img src="{{ asset('image/tw-icon.png') }}" alt="social"></a>
            <a href="#"><img src="{{ asset('image/in-icon.png') }}" alt="social"></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <h5>Subscribe</h5>
          <div class="social-icons">
            <form method="POST" action="/">
              <div class="form-group">
                @csrf
                <label for="emailField">Email address</label>
                <input type="email" class="form-control input-lg" placeholder="Enter email" name="emailField" id="address" data-validate="validate(required, email)" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <p class="text-center">Copyright © 2019 All rights reserved</p>
      </div>
    </div>
  </footer>

  
@extends('header')
@section('content')
<!-- start works of free lance -->
<div class="fields">
    <div class = "container">
        <h1> Choose Your Feild </h1>
        <div class = "row">
            <div class = "col-lg-4 col-md-4 col-sm-12">
                <div class="free-cat">
                    <img src="assets/Digital.jpg" />
                </div>
                <div class = "text-cat">
                    <a href="#">healthy</a>
                </div>
            </div>
            <div class = "col-lg-4 col-md-4 col-sm-12">
                <div class="free-cat">
                    <img src="assets/Digital.jpg" />
                </div>
                <div class = "text-cat">
                    <a href="#">educ</a>
                </div>
            </div>
            <div class = "col-lg-4 col-md-4 col-sm-12">
                <div class="free-cat">
                    <img src="assets/Digital.jpg" />
                </div>
                <div class = "text-cat">
                    <a href="#">design location</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start works of free lance -->
<!-- free lancers work -->
<div class = "work-free">
    <div class="container">
        <h1>free lancres work</h1>
        <div class="my-free">
        <div class = "row">
            <div class = "col-lg-6 col-md-12">
                <div class="last-free">
                    <img src = "assets/Digital.jpg" />
                </div>
                <div class="free-job">
                    <a href="#">contact app</a>
                </div>
            </div>
            <div class = "col-lg-6 col-md-12">
                <div class="last-free">
                    <img src = "assets/Digital.jpg" />
                </div>
                <div class="free-job">
                    <a href="#">contact app</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- free lancers work -->
<div class = "my-form">
              <div class="container">
                  <div class="form-me">
                      <h1>if you want to work let your personal information</h1>
                      <form class="form-group forms" method="POST">
                          <label>Name :</label>
                          <input class="form-control welcome" type="text" name="username"  placeholder="Your Name"/>
                          <label>Email :</label>
                          <input class="form-control welcome" type="email" name="email"  placeholder="Your Email"/>
                          <label>Phone :</label>
                          <input class="form-control welcome" type="text" name="phone"  placeholder="Your Phone"/>
                          <label>Your C.V :</label>
                          <input class="form-control welcome" type="file" name="cv"  placeholder="Your c.v"/>
                          <label>Your experts</label>
                          <select class="form-control">
                              <option value="web">web app</option>
                              <option value="desktop">desktop app</option>
                              <option value="android">android app</option>
                          </select>
                          <label>message</label>
                          <textarea class = "form-control welcome" placeholder="send your message"></textarea>
                          <button class="my-btn">submit</button>
                      </form>
                  </div>
              </div>
          </div>
 @endsection
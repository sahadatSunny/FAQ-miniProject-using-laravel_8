{{-- nav bar section will be connected to master blade --}}



<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="nav-finder">
    <a class="navbar-brand" href="{{url('/')}}"><img src="https://cdn140.picsart.com/318338795602211.png?type=webp&to=min&r=640" width="60px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link nav-button-odd" href="{{url('/signup')}}">SIGN UP</a>
          </li>
          <li class="nav-item">
             <!-- Button trigger modal to make login form popup -->
            <a class="nav-link nav-button-even" href="#"><div data-toggle="modal" data-target="#adminLoginModal">ADMIN LOGIN</div></a>
          </li>
      </ul>
    </div>
  </nav>


{{-- admin login modal --}}




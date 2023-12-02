<nav class="navbar navbar-expand-lg transparent-navbar fixed-top">
  <div class="container">
    <div class="navbar-brand">
      <img src="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" alt="Bootstrap" width="30%" height="30%">
    </div>
        <ul class="navbar-nav ml-auto style">
          <li class="nav-item mx-2">
              <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
              <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item mx-2">
              <a class="nav-link" href="#staticBackdrop"  data-bs-toggle="modal">Contact</a>
          </li>
          <li class="nav-item mx-2">
              <a class="nav-link" href="#">Buy Now</a>
          </li> 
          @if(auth()->check())
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                  <img src="https://c.animaapp.com/OU2pd5a9/img/user@2x.png" alt="Bootstrap" width="25%" height="50%"/>
              </a>
              <ul class="dropdown-menu">
                  <li>
                      <a class="dropdown-item" href="#">
                          @if(auth()->user()->is_admin == 1)
                          <span class="authe">
                              Admin
                            </span>
                            <br>
                            @else
                            <span class="authe">
                                Customer
                            </span>
                            <br>
                            @endif
                            <span class="username">
                                Hey, {{ auth()->user()->username }}
                            </span>
                      </a>
                  </li>
                  @if(auth()->user()->is_admin == 1)
                  <li>
                    <a class="dropdown-item" href="/dashoverview"><i class="bi bi-clipboard2-data me-2"></i>Dashboard</a>
                  </li>
                  @else
                  <li>
                    <a class="dropdown-item" href="/customerorder"><i class="bi bi-box2 me-2"></i>Order</i></a>
                  </li>
                  <li>
                    @endif
                      <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item">
                              <img class="logout-icon me-2" src="https://i.ibb.co/VQp2hM5/logout-Copy.png" alt="logout-Copy">
                              Logout
                          </button>
                      </form>
                  </li>
              </ul>
          </li>
      @else
          <li class="nav-item">
              <a class="nav-link" href="/login">
                  <i class="bi bi-box-arrow-in-right me-2"></i>Login
              </a>
          </li>
      @endif
      

          </li>
      </ul>
      

  </div>
</nav>
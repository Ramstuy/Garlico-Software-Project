<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>
  <link rel="stylesheet" href="{{ asset('css/dash.css') }}" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" alt="">
          <span class="nav-item">Garlico</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Overview</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Orders</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Shipment</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Client</span>
        </a></li>
        
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Overview</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Total orders</h3>
          <p>0</p>
          
        </div>
        <div class="card">
          <i class="fab fa-shipment"></i>
          <h3>Total shipment</h3>
          <p>0</p>
          
        </div>
        <div class="card">
          <i class="fas fa-customers"></i>
          <h3>Total customers</h3>
          <p>0</p>    
        </div>
        
      </div>
      
      <section class="main-course">
        <div class="course-box">
          <ul>
            <li class="active">Order activity</li>
            <li>Client Activity</li>
            <li>Client Activity</li> 
          </ul>     
        </div>
      </section>
    </section>
  </div>
</body>
</html>
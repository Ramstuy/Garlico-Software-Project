<style>
    /* This will change the background color on hover */
a {
    background-color: transparent !important;
    border-color: transparent !important;
}
a.active {
    font-weight: bold;
}
a:hover {
    background-color: rgba(239, 234, 216, 0.1) !important;
}
.white-image {
    filter: brightness(0) invert(1);
}
@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }

  .white-image {
    filter: brightness(0) invert(1);
  }

  .logout-icon {
    vertical-align: middle;
    filter: brightness(0) invert(1);
  }
}
</style>
<div class="h-100 d-flex flex-column justify-content-between" style="background-color: #1B262C; font-family: 'Poppins', sans-serif;">
    <!-- Sidebar Content -->
    <div>
        <div class="sidebar-heading ps-3 py-3 primary-text fs-3 fw-bold border-bottom text-start">
            <img src="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" width="65" class="me-3" alt="Deskripsi gambar">
            <span style="color: #ACACAC;">Garlico</span>
        </div>

        <div class="list-group list-group-flush my-3 ">
            <a href="/dashoverview" class="list-group-item text-white mt-2 {{ Route::is('dashoverview') ? 'active' : '' }}">
                <img src="https://i.ibb.co/qyGCP5v/dashboard-Copy.png" width="30" style="margin-right: 30px" class="white-image">
                Overview
            </a>
            <a href="/dashorders" class="list-group-item text-white mt-2 {{ Route::is('dashorders') ? 'active' : '' }}">
                <img src="https://i.ibb.co/YWYRLz1/clipboard-Copy.png" width="30" style="margin-right: 30px" class="white-image">
                Orders
            </a>
            <a href="/dashshipment" class="list-group-item text-white mt-2 {{ Route::is('dashshipment') ? 'active' : '' }}">
                <img src="https://i.ibb.co/562hzDZ/delivery-Copy.png" width="30" style="margin-right: 30px" class="white-image">
                Shipment
            </a>
            <a href="/dashclient" class="list-group-item text-white mt-2 {{ Route::is('dashclient') ? 'active' : '' }}">
                <img src="https://i.ibb.co/9pCprZf/teamwork-Copy.png" width="30" style="margin-right: 30px" class="white-image">
                Client
            </a>
        </div>
        <div class="sidebar-heading text-center py-3 primary-text fs-3 fw-bold text-uppercase border-bottom" style="text-align: left;"></div> 
    </div>

    <!-- Back to Home Link at the bottom -->
    <div class="pb-3">
        <a href="/" class="list-group-item text-white mt-2 ">Back to Home</a>
    </div>
</div>
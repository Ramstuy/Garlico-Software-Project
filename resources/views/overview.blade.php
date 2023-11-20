<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/overview.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
<div class="bg-black" id="sidebar-wrapper" style="display: flex; flex-direction: column; height: 100%;">
    <div class="sidebar-heading text-center py-3 primary-text fs-3 fw-bold border-bottom" style="text-align: left;">
        <img src="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" width="65" alt="Deskripsi gambar" style="margin-right: 22px"><div style="color: #ACACAC; display: flex;"><p style="margin-bottom: 0; margin-top: 18px">Garlico</p></div>
    </div> 

    <div class="list-group list-group-flush my-3">
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
            <img src="https://i.ibb.co/qyGCP5v/dashboard-Copy.png" width="30" style="margin-right: 30px">Overview
        </a>
        <a href="/dashorders" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <img src="https://i.ibb.co/YWYRLz1/clipboard-Copy.png" width="30" style="margin-right: 30px">Orders
        </a>
        <a href="/dashshipment" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <img src="https://i.ibb.co/562hzDZ/delivery-Copy.png" width="30" style="margin-right: 30px">Shipment
        </a>
        <a href="/dashclient" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <img src="https://i.ibb.co/9pCprZf/teamwork-Copy.png" width="30" style="margin-right: 30px">Client
        </a>
    </div>

    <div class="sidebar-heading text-center py-3 primary-text fs-3 fw-bold text-uppercase border-bottom" style="text-align: left;"></div> 

    <div class="logout mt-auto">
        <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
            <i class="fas fa-power-off me-2"></i>Logout
        </a>
    </div>
</div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    
                    <h2 class="fs-2 m-0">Overview</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            
            </nav>

            <div class="page-content-wrapper">
                <div class="container-fluid px-4">
                    <div class="row g-3 my-2 justify-content-between">
                        <div class="col-md-4">
                            <div class="p-3 bg-white shadow-sm d-flex align-items-center radius">
                                <img src="https://i.ibb.co/YWYRLz1/clipboard-Copy.png" width="28" style="vertical-align: middle;">
                                <div class="ms-3">
                                    <p class="fs-5 mb-0">Total Orders</p>
                                    <p class="fs-2">
                                        {{ $totalQuantityOrdered }}
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                
                        <div class="col-md-4">
                            <div class="p-3 bg-white shadow-sm d-flex align-items-center radius">
                                <img src="https://i.ibb.co/562hzDZ/delivery-Copy.png" width="28" style="vertical-align: middle;">
                                <div class="ms-3">
                                    <p class="fs-5 mb-0">Total Shipment</p>
                                    <p class="fs-2">0</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-4">
                            <div class="p-3 bg-white shadow-sm d-flex align-items-center radius">
                                <img src="https://i.ibb.co/9pCprZf/teamwork-Copy.png" width="28" style="vertical-align: middle;">
                                <div class="ms-3">
                                    <p class="fs-5 mb-0">Total Customers</p>
                                    <p class="fs-2">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                

                <div class="my-5">
                    <div class="table-extend radius bg-white mx-auto">
                        <table class="table radius bg-white shadow-sm table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <th>{{ $customer->id }}</th>
                                    <td>{{ $customer->customer_name }}</td>
                                    <td>{{ $customer->customer_email }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
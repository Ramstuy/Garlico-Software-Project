<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/shipment.css" />
    <title>garlic</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-black" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-3 primary-text fs-3 fw-bold text-uppercase border-bottom" style="text-align: left;">
        <img src="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" width="35" alt="Deskripsi gambar">Garlico
    </div>

            <div class="list-group list-group-flush my-3">
                <a href="/dashoverview" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <img src="https://i.ibb.co/qyGCP5v/dashboard-Copy.png" width="30">Overview
                  </a>
                <a href="/dashorders" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><img src="https://i.ibb.co/YWYRLz1/clipboard-Copy.png" width="30">Orders</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><img src="https://i.ibb.co/562hzDZ/delivery-Copy.png" width="30">Shipment</a>
                <a href="/dashclient" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><img src="https://i.ibb.co/9pCprZf/teamwork-Copy.png" width="30">Client</a>
                
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    
                    <h2 class="fs-2 m-0">Shipment</h2>
                </div>
                
            </nav>

            <div class="container-fluid px-5 container-full">
               

                <div class="row my-8">
                    
                    <div class="table-responsive">
                        <div class="table-extend bg-white">
                        <table class="table bg-white rounded shadow-sm  table-hover mx-auto text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <th>{{ $customer->id }}</th>
                                        <td>{{ $customer->customer_name }}</td>
                                            @foreach($customer->orders as $order)
                                                <td>{{ $order->quantity_ordered }}</td>
                                                <td>{{ $order->is_paid ? 'Paid' : 'Not Paid' }}</td>
                                            @endforeach
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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
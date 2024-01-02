<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Garlico</title>
    <link rel="icon" href="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="/css/overview.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row" style="background-color: #EFEAD8;">
            <div class="col-2 p-0">
                @include('partials.sidebar')
            </div>
            <div class="col-10 p-0">
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center">
    
                            <h2 class="fs-2 m-0">Overview</h2>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
    
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-3 bg-white shadow-sm radius">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="shadow-sm radius text-center">
                                                    <img src="https://i.ibb.co/YWYRLz1/clipboard-Copy.png" class="img-fluid w-75">
                                                </div>
                                            </div>
                                            <div class="m-0 p-0 col-10 text-start">
                                                <p class="fs-4 text-start">Total Orders</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-center">
                                                <p class="fs-2">
                                                    {{ $totalOrders }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-3 bg-white shadow-sm radius">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="shadow-sm radius text-center">
                                                    <img src="https://i.ibb.co/562hzDZ/delivery-Copy.png" class="img-fluid w-75">
                                                </div>
                                            </div>
                                            <div class="m-0 p-0 col-10 text-start">
                                                <p class="fs-4 text-start">Success Orders</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-center">
                                                <p class="fs-2">
                                                    {{ $successOrders }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-3 bg-white shadow-sm radius">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="shadow-sm radius text-center">
                                                    <img src="https://i.ibb.co/9pCprZf/teamwork-Copy.png" class="img-fluid w-75">
                                                </div>
                                            </div>
                                            <div class="m-0 p-0 col-10 text-start">
                                                <p class="fs-4 text-start">Total Users</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 p-0 text-center">
                                                <p class="fs-2">
                                                    {{ $totalUsers }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="my-3 p-3 radius bg-white" style="overflow-y: scroll; height: 71.1vh;">
                                        <table class="table table-hover text-center" >
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="90">No.</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">User ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->customer->customer_name ?? '-' }}</td>
                                                    <td>{{ $user->id }}</td>
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
            </div>
        </div>
    </div>

        <!-- Page Content -->

    <!-- /#page-content-wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>
</body>

</html>
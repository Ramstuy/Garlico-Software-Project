<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Garlico</title>
    <link rel="icon" href="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    {{-- <link rel="stylesheet" href="/css/shipment.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>garlic</title>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row" style="background-color: #EFEAD8;">
            <div class="col-2 p-0">
                @include('partials.sidebar')
            </div>
            <div class="col-10 p-0">
                <div id="page-content-wrapper">
                    @if (session()->has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center">
                            <h2 class="fs-2 m-0">Client</h2>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="my-3 p-3 radius bg-white" style="overflow-y: scroll; height: 87vh;">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="90">No.</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customers as $customer)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $customer->customer_name }}</td>
                                                <td>{{ $customer->customer_address }}</td>
                                                @foreach($customer->orders as $order)
                                                    @foreach($order->shipments as $shipment)
                                                        <td>{{ $shipment->order->is_cancelled ? 'Pesanan Dibatalkan' : $shipment->status }}</td>
                                                        <td><div class="d-grid gap-2 d-md-block">
                                                            @if($shipment->order->is_cancelled == true)
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-warning disabled" aria-disabled="true">Shipped</a>
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-success disabled" aria-disabled="true">Success</a>
                                                            @elseif($shipment->getRawOriginal('status') == 'pending')
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-warning">Shipped</a>
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-success disabled" aria-disabled="true">Success</a>
                                                            @elseif($shipment->getRawOriginal('status') == 'shipped')
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-warning disabled" aria-disabled="true">Shipped</a>
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-success">Success</a>
                                                            @else
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-warning disabled" aria-disabled="true">Shipped</a>
                                                            <a href="{{ route('shipstatus', ['id'=>$shipment->id]) }}" type="button" class="btn btn-success disabled" aria-disabled="true">Success</a>
                                                            @endif
                                                        </div></td>
                                                    @endforeach
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
        </div>
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
@extends('layouts.customer')

@section('container')
    <section class="formbg vh-100 bg-image" style="background-image: url('https://i.ibb.co/PYR5WBX/userbg.jpg'); background-size: cover; background-position: center center;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="kards3" >
                            <div class="card-body p-5">
                                
                                <h2 class="text-uppercase text-center" style="color: white;">Ringkasan Order</h2>
                                <hr style="color: white;">
                                <p class="text-start orderfont">Nama: {{ $test['customer']->customer_name }}</p>
                                <p class="text-start orderfont">Jumlah: {{ $test['order']->quantity_ordered }}</p>
                                <p class="text-start orderfont">Alamat: {{ $test['customer']->customer_address }}</p>
                                <p class="text-start orderfont"><strong>Total Harga: Rp. {{ $test['price'] }}</strong></p>                               
                                <h2 class="text-uppercase text-center mt-3" style="color: white;">Status</h2>
                                <hr style="color: white;">
                                <h4 class="text-center" style="color: white;">{{ $test['status'] }}</h4>
                                <br>
                                <div class="mb-3 d-flex flex-column">
                                    @if($test['status'] == 'Belum Dibayar')
                                    <div class="d-flex flex-row">
                                        <a class="btn btn-light btn-lg text-body buttonfont flex-grow-1 me-2" onclick="return confirm('Are you sure?')" href="{{ route('deletecustomer', ['id'=>$test['customer']->id]) }}">Cancel</a>
                                        <button type="button" class="btn btn-outline-light buttonfont btn-whatsapp">
                                            <a href="https://api.whatsapp.com/send?phone=6281342480393" class="whatsapp-link" target="_blank">Proceed to Whatsapp</a>
                                        </button>
                                    </div>
                                    <a class="btn btn-success btn-lg gradient-custom-4 text-body buttonfont mt-3" href="{{ route('home') }}" style="background-color: #2E2E2E; flex: 1; margin-left: 4px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #000; color: white !important">Back to Home</a>
                                    @else
                                    <div class="d-flex flex-row">
                                        <a class="btn btn-success btn-lg gradient-custom-4 text-body buttonfont flex-grow-1 me-2" href="{{ route('home') }}" style="background-color: #2E2E2E; flex: 1; margin-left: 4px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #000; color: white !important">Close</a>
                                        <button type="button" class="btn btn-outline-light buttonfont btn-whatsapp">
                                            <a href="https://api.whatsapp.com/send?phone=6281342480393" class="whatsapp-link" target="_blank">Proceed to Whatsapp</a>
                                        </button>
                                    </div>  
                                    @endif
                                </div>  

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script>
            function myFunction() {
              alert("Hello! I am an alert box!");
            }
            </script> --}}
    </section>
    
@endsection


@extends('layouts.customer')

@section('container')
    <section class="formbg vh-100 bg-image" style="background-image: url('https://i.ibb.co/PYR5WBX/userbg.jpg'); background-size: cover; background-position: center center;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="kards3" >
                            <div class="card-body p-5">
                                
                                <form action="{{ route('orderdetails') }}" method="post" class="text-white">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label for="form3Example1cg"style="display: block; text-align: left;">Full Name</label>
                                        <input name="name" type="string" id="form3Example1cg" class="form-control form-control-lg @error('name') is-invalid @enderror" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" placeholder="Full Name" required/>
                                    </div>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                
                                    <div class="form-group mb-4">
                                        <label for="form3Example3cg"style="display: block; text-align: left;">Phone Number</label>
                                        <input name="phone_number" type="string" id="form3Example3cg" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" placeholder="Phone Number" required/>
                                    </div>
                                    @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                
                                    <div class="form-group mb-4">
                                        <label for="form3Example4cg"style="display: block; text-align: left;">Email</label>
                                        <input name="email" type="email" id="form3Example4cg" class="form-control form-control-lg @error('email') is-invalid @enderror" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" placeholder="Email" required/>
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                
                                    <div class="form-group mb-4">
                                        <label for="form3Example4cdg"style="display: block; text-align: left;">Address</label>
                                        <input name="address" type="text" id="form3Example4cdg" class="form-control form-control-lg @error('address') is-invalid @enderror" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" placeholder="Address" required/>
                                    </div>
                                    @error('text')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group mb-4">
                                        <label for="form3Example4cdg"style="display: block; text-align: left;">Quantity</label>
                                        <input name="quantity" type="number" id="form3Example4cdg" class="form-control form-control-lg @error('quantity') is-invalid @enderror" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" placeholder="Quantity" required/>
                                    </div>
                                    @error('quantity')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-4" style="margin-bottom: 10px;">
                                        <div class="d-flex flex-row">
                                            <a class="btn btn-success btn-lg gradient-custom-4 text-body" href="{{ route('home') }}" role="button" style="background-color: #2E2E2E; flex: 1; margin-left: 4px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #000; color: white !important">Close</a>
                                            <button type="submit" class="btn btn-success btn-lg gradient-custom-4 text-body" style="background-color: #2E2E2E; flex: 1; margin-left: 4px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #000; color: white !important;">Submit</button>
                                        </div>
                                    </div>
                                    
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


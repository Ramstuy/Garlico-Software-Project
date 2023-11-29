@extends('layouts.form')

@section('container')
    <section class="formbg vh-100 bg-image" style="background-image: url('https://i.ibb.co/PYR5WBX/userbg.jpg'); background-size: cover; background-position: center center;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="kards" >
                                <div class="card-body p-5">
                                    <form class="text-white"> 
                                
                                    <div class="form-group mb-4">
                                        <label for="form3Example3cg" style="display: block; text-align: left;">Username</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" />
                                    </div>
                                
                                    <div class="form-group mb-4">
                                        <label for="form3Example4cg"style="display: block; text-align: left;">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" />
                                    </div>

                                <div class="d-flex justify-content-center mb-4">
                                    <button type="submit" class="btn btn-success btn-lg gradient-custom-4 text-body" style="background-color: #2E2E2E; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #000; color: white !important;">Login</button>
                              
                                  </div>
                            
                              
                                <p class="text-center text-muted mt-3 mb-0" style="color: white !important;">Don't have an account? <a href="#!" class="fw-bold text-body" style="color: white !important;"><u>Sign Up</u></a></p>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


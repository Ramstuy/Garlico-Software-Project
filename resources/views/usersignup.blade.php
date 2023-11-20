@extends('layouts.form')

@section('container')
    <section class="formbg vh-100 bg-image" style="background-image: url('https://s3-alpha-sig.figma.com/img/c6a9/2de4/b1999b931f9f5b1c7ae7e4b251076cf0?Expires=1700438400&Signature=LN4qhdIOANvJVbfyj5pNCIyDR5xDVCNra7TrhDQ9y0CzVzmPpg7xfpgQb~ixTlxMbMuR4tZ9AKHdASXpk1FwcChqpNDZOhj-5E4FSlD4CI9VYyS2fa4qYZ4~chk0QcuKtDEnGXsfVmLWo90alZXALakD4LUP9QrKJsPZzJ4fwh7kCT9nPLE980nk5qVbW-FYamu9H95g8ErboJ9bPQ4HVzU-9M5pCac~w68zpz60QWMrm1pd7LH5DCQE3izsygw2qeji7usFchuLGcP~~U9NPpb9icy~IHG-cBnU09q-0c5oLHzjNGzwkwvPY4Yxp0mTpaOSvg6sydC8A~Ezbam7CA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4'); background-size: cover; background-position: center center;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="kards2" >
                            <div class="card-body p-5">
                                <form class="text-white">
                                    <div class="form-group mb-4">
                                        <label for="form3Example1cg">Email</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="form3Example3cg">Username</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="form3Example4cdg">Confirm password</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" style="background-color: rgba(255, 255, 255, 0.2);  color: white; border: none;" />
                                    </div>

                                    <div class="d-flex justify-content-center mb-4">
                                      <button type="button" class="btn btn-success btn-lg gradient-custom-4 text-body" style="background-color: #2E2E2E; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #000; color: white !important;">Sign Up</button>

                                    </div>

                                    <p class="text-center text-muted mt-3 mb-0" style="color: white !important;">Already have an account? <a href="#!" class="fw-bold text-body" style="color: white !important;"><u>Login in</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
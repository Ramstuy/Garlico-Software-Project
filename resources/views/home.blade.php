@extends('layouts.main')


@section('container')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-top position-relative">
    <div class="modal-content bg-glass">
      <div class="modal-body my-4 mx-4 pb-5"> <!-- Adjusted padding-bottom -->
        <p>This will direct you to seller contact<br>Are you sure you want to proceed?</p>
      </div>
      <div class="modal-footer border-0 d-flex justify-content-end position-absolute bottom-0 end-0 p-3">
        <button type="button" class="btn btn-dark me-3" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-outline-light"><a href="https://api.whatsapp.com/send?phone=6281342480393" class="whatsapp-link" target="_blank">Yes</a></button>
      </div>      
    </div>
  </div>
</div>

    <section class="firstbg">
        <img src="https://c.animaapp.com/OU2pd5a9/img/rectangle-34.png" alt="garlicofirstbg">
        <div class="h-100 container-xxl position-relative">
            <div class="d-flex h-100 align-items-center">
                <div class="text-white">
                    <h1 class="firstle">DISCOVER OUR PRODUCT</h1>
                    <p class="firstpar">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor /n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
                    <a href="#" class="firstbtn mt-2 btn btn-light p-3" role="button">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        
    </section>
@endsection
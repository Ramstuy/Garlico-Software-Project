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

    <section class="secondbg">
        <img src="https://c.animaapp.com/OU2pd5a9/img/image-desc@2x.png" alt="garlicosecbg">
        <div class="h-100 container-xxl position-relative">
            <div class="d-flex h-100 align-items-center">
            <div class="text-black">
                <h1 class="secondle">FERMENTED BLACK GARLIC</h1>
                <p class="secondpar">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam obcaecati mollitia pariatur quidem, explicabo iure. Repudiandae ea laborum illum eveniet non perspiciatis beatae aperiam a maxime quibusdam animi iste sed, ipsa ratione similique officiis cumque obcaecati doloremque voluptate, sapiente, cum consequuntur! Ut illum sequi consectetur aliquam omnis nihil ducimus dolores magni rerum dolore est laudantium possimus vero enim earum quo, tenetur facere vitae! Tenetur suscipit necessitatibus atque odio, molestias vel pariatur labore aperiam tutor goldlane.</p>
            </div>
    </section>

    <section class="cards">
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="https://c.animaapp.com/OU2pd5a9/img/the-16-best-things-we-added-to-our-pantry-this-year@2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Studies have shown that black garlic may help regulate blood sugar levels, reduce the risk of gestational diabetes, and even prevent damage from uncontrolled diabetesr.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://c.animaapp.com/OU2pd5a9/img/black-garlic-north-america----cooking-with-black-garlic@2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Black garlic may help reduce certain markers of heart disease, like triglycerides and LDL (bad) cholesterol. It may also increase HDL (good) cholesterol for some people..</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://c.animaapp.com/OU2pd5a9/img/black-garlic-whole-buds---1-lb--1-@2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">The antioxidant and anti-inflammatory qualities of black garlic can repair damaged cells in the body.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://c.animaapp.com/OU2pd5a9/img/dude--dat-is-a-black-garlic-@2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"> Black garlic is believed to strengthen the immune system and prevent several common bacterial and viral diseases. It also improves the health of the digestive and respiratory systems
                        .</p>
                </div>
            </div>
        </div>
    </section>
    <section class="thirdbg">
        <div class="container-fluid">
            <div class="row content-container">
              <div class="col-md-6 image-container">
                <img src="https://c.animaapp.com/OU2pd5a9/img/image-bottom.png" alt="Your Image">
              </div>
              <div class="col-md-6 text-container">
                <h1 class="thirdle">WHY SHOULD OUR PRODUCTS</h1>
                <p class="thirdpar">Black garlic is a type of garlic that has been fermented under controlled high-temperature, high-humidity conditions for several weeks. The process of making black garlic is called the Maillard reaction, which involves aging regular garlic bulbs over the course of weeks or months</p>
                <a href="#" class="firstbtn mt-2 btn btn-light p-3" role="button">Pre Order</a>
              </div>
            </div>
          </div>
    </section>  
    <section class="adfwafaf">
        <footer class="footer">
            <div class="footer-left col-md-4 col-sm-6">
              <p class="footerimage d-flex align-items-center"> <!-- Added 'd-flex align-items-center' for vertical alignment -->
                <img src="https://c.animaapp.com/OU2pd5a9/img/bawang-ireng-lanang-1@2x.png" alt="Your Image" height="150">
                <span class="name0 ms-2">GARLICO</span> <!-- Added 'ms-2' for margin start (left margin) -->
              </p>
              <p class="name"> Desain with Raven © Garlico 2023</p>
            </div>      
            <div class="footer-center col-md-4 col-sm-6">
              <div>
                <p><span></span> </p>
              </div>
              <div>      
                <p></p>
              </div>
              <div>         
                <p></a></p>
              </div>
            </div>
            <div class="footer-right col-md-4 col-sm-6">
                <div>
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9C5 5.13 8.13 2 12 2C15.87 2 19 5.13 19 9C19 13.17 14.58 18.92 12.77 21.11C12.37 21.59 11.64 21.59 11.24 21.11C9.42 18.92 5 13.17 5 9ZM9.5 9C9.5 10.38 10.62 11.5 12 11.5C13.38 11.5 14.5 10.38 14.5 9C14.5 7.62 13.38 6.5 12 6.5C10.62 6.5 9.5 7.62 9.5 9Z" fill="white"/>
                        </svg>
                    </div>
                    <p class="name2"> Jl. Anggur 2 No.3 Kec Boyaoge Kel Tatanga. Palu Sulawesi Tenga</p>
                </div>
                <div>
                    <div class="icon-container2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.23 15.26L16.69 14.97C16.08 14.9 15.48 15.11 15.05 15.54L13.21 17.38C10.38 15.94 8.05999 13.63 6.61999 10.79L8.47 8.94001C8.89999 8.51001 9.10999 7.91001 9.03999 7.30001L8.74999 4.78001C8.62999 3.77001 7.77999 3.01001 6.75999 3.01001H5.02999C3.89999 3.01001 2.95999 3.95001 3.02999 5.08001C3.55999 13.62 10.39 20.44 18.92 20.97C20.05 21.04 20.99 20.1 20.99 18.97V17.24C21 16.23 20.24 15.38 19.23 15.26Z" fill="white"/>
                        </svg>
                    </div>
                    <p class="name3"> (+62) 21-9598-1166</p>
                </div>
                <div class="row">
                    <div class="col-md-6"> <!-- Adjust the column size as needed -->
                      <p class="name4">Social Media</p>
                    </div>
                    <div class="col-md-6">
                      <div class="icons-footer "> <!-- Use 'justify-content-start' to align icons to the start (left) -->
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12.6144 21H3.99346C3.44463 21 3 20.5551 3 20.0065V3.99345C3 3.44469 3.4447 3 3.99346 3H20.0066C20.5552 3 21 3.44469 21 3.99345V20.0065C21 20.5552 20.5552 21 20.0066 21H15.4197V14.0294H17.7594L18.1098 11.3128H15.4197V9.57849C15.4197 8.79198 15.6381 8.256 16.766 8.256L18.2045 8.25537V5.82566C17.9557 5.79255 17.1018 5.71859 16.1083 5.71859C14.0343 5.71859 12.6144 6.98457 12.6144 9.30945V11.3128H10.2687V14.0294H12.6144V21Z" fill="white"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C9.55575 3 9.24926 3.01036 8.28931 3.05416C7.33137 3.09785 6.67712 3.25001 6.10466 3.47251C5.51283 3.70247 5.01092 4.01021 4.51055 4.51055C4.01021 5.01092 3.70247 5.51283 3.47251 6.10466C3.25001 6.67712 3.09785 7.33137 3.05416 8.28931C3.01036 9.24926 3 9.55575 3 12C3 14.4443 3.01036 14.7507 3.05416 15.7107C3.09785 16.6686 3.25001 17.3229 3.47251 17.8953C3.70247 18.4872 4.01021 18.9891 4.51055 19.4895C5.01092 19.9898 5.51283 20.2975 6.10466 20.5275C6.67712 20.75 7.33137 20.9021 8.28931 20.9458C9.24926 20.9896 9.55575 21 12 21C14.4443 21 14.7507 20.9896 15.7107 20.9458C16.6686 20.9021 17.3229 20.75 17.8953 20.5275C18.4872 20.2975 18.9891 19.9898 19.4895 19.4895C19.9898 18.9891 20.2975 18.4872 20.5275 17.8953C20.75 17.3229 20.9021 16.6686 20.9458 15.7107C20.9896 14.7507 21 14.4443 21 12C21 9.55575 20.9896 9.24926 20.9458 8.28931C20.9021 7.33137 20.75 6.67712 20.5275 6.10466C20.2975 5.51283 19.9898 5.01092 19.4895 4.51055C18.9891 4.01021 18.4872 3.70247 17.8953 3.47251C17.3229 3.25001 16.6686 3.09785 15.7107 3.05416C14.7507 3.01036 14.4443 3 12 3ZM12 4.62162C14.4031 4.62162 14.6878 4.6308 15.6368 4.6741C16.5143 4.71411 16.9908 4.86073 17.3079 4.98398C17.728 5.14725 18.0278 5.34227 18.3428 5.65723C18.6577 5.97215 18.8528 6.27196 19.016 6.69206C19.1393 7.00919 19.2859 7.48574 19.3259 8.36323C19.3692 9.31224 19.3784 9.5969 19.3784 12C19.3784 14.4031 19.3692 14.6878 19.3259 15.6368C19.2859 16.5143 19.1393 16.9908 19.016 17.3079C18.8528 17.728 18.6577 18.0278 18.3428 18.3428C18.0278 18.6577 17.728 18.8528 17.3079 19.016C16.9908 19.1393 16.5143 19.2859 15.6368 19.3259C14.6879 19.3692 14.4033 19.3784 12 19.3784C9.59672 19.3784 9.31213 19.3692 8.36323 19.3259C7.48574 19.2859 7.00919 19.1393 6.69206 19.016C6.27196 18.8528 5.97215 18.6577 5.65723 18.3428C5.34231 18.0278 5.14725 17.728 4.98398 17.3079C4.86073 16.9908 4.71411 16.5143 4.6741 15.6368C4.6308 14.6878 4.62162 14.4031 4.62162 12C4.62162 9.5969 4.6308 9.31224 4.6741 8.36323C4.71411 7.48574 4.86073 7.00919 4.98398 6.69206C5.14725 6.27196 5.34227 5.97215 5.65723 5.65723C5.97215 5.34227 6.27196 5.14725 6.69206 4.98398C7.00919 4.86073 7.48574 4.71411 8.36323 4.6741C9.31224 4.6308 9.5969 4.62162 12 4.62162ZM7.37838 12C7.37838 9.44753 9.44753 7.37838 12 7.37838C14.5525 7.37838 16.6216 9.44753 16.6216 12C16.6216 14.5525 14.5525 16.6216 12 16.6216C9.44753 16.6216 7.37838 14.5525 7.37838 12ZM12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12C15 13.6569 13.6569 15 12 15ZM16.8042 8.27577C17.4007 8.27577 17.8842 7.79226 17.8842 7.19579C17.8842 6.59931 17.4007 6.11577 16.8042 6.11577C16.2078 6.11577 15.7242 6.59931 15.7242 7.19579C15.7242 7.79226 16.2078 8.27577 16.8042 8.27577Z" fill="white"/>
                            </svg>
                    </div>
                </div>
              
          </footer>
   
      </section>
      
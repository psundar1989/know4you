<!-- modal start -->
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content pt-4 pb-4 ps-4 pe-4">
            <!-- Modal Header -->
            <div class="modal-header border-0">
              <h5 class="modal-title text-center" id="myModalLabel">Join our newsletter to recceive the latest updates promotions.</h5>
              <button type="button" class="btn-close cus_closebtn  " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              {{-- <form>
                <div class="input-group">
                  <input type="text" class="cus_form-control form-control" placeholder="Your Email">
                  <button class="btn btn-danger btn-default">Subscribe </span>
                </div>
              </form> --}}
              <div id="message-container" style="display:none;"></div> <!-- For success/error messages -->
              <form id="subscribe-form">
                  @csrf <!-- Include CSRF token for security -->
                  <div class="input-group">
                      <input type="email" class="cus_form-control form-control" name="email" placeholder="Your Email" required>
                      <button type="submit" class="btn btn-danger btn-default">Subscribe</button>
                  </div>
              </form>
                    
            @if(session('success'))
               <p>{{ session('success') }}</p>
            @endif  
            
            </div>
          </div>
        </div>
      </div>
      <!-- modal end -->
      <!-- Footer Start -->
      <footer class="main-footer bg-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <!-- About Footer Start -->
              <div class="about-footer">
                <img class="logos mb-3" src="{{ asset('assets/images/logo/logo.png') }}"  alt="Logo" />
                <!-- Section Title Start -->
                <div class="section-title d-flex">
                  <h2>We develop & create <span>successful future</span>
                  </h2>
                </div>
                <!-- Section Title End -->
              </div>
              <!-- About Footer End -->
            </div>
            <div class="col-lg-3 col-md-3">
              <!-- Footer Contact Information Start -->
              <div class="footer-contact-info">
                <h3>address</h3>
                <p>Germany-785 15h Street, Office 478 Berlin, De 81566</p>
              </div>
              <!-- Footer Contact Information End -->
              <!-- Footer Social Link Start -->
              <div class="footer-social-links">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-x-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Footer Social Link End -->
            </div>
            <div class="col-lg-4 col-md-3">
              <!-- Footer Contact Information Start -->
              <div class="footer-contact-info">
                <h3>say hello</h3>
                <p>info@Know4you.com</p>
                <p>
                  <span>+41792883385</span>
                </p>
              </div>
              <form class="mt-3" id="subscribe-form2">
                <div class="input-group">
                  <input type="text" class="cus_form-control form-control" name="email2" placeholder="Your Email">
                  <button class="btn btn-danger btn-default">Subscribe </span>
                </div>
              </form>
              <!-- Footer Contact Information End -->
            </div>
          </div>
          <!-- Footer Copyright Section Start -->
          <div class="footer-copyright">
            <div class="row align-items-center">
              <div class="col-md-6">
                <!-- Footer Menu Start -->
                <div class="footer-menu">
                  <ul>
                    <li>
                      <a href="#">Start</a>
                    </li>
                    <li>
                      <a href="#"> Willkommen</a>
                    </li>
                    <!-- <li><a href="#">Vertrautes aus dem Leben</a></li> -->
                    <li>
                      <a href="{{ url('/success-story')}}">Erfolge </a>
                    </li>
                    <li>
                      <a href="{{ url('/contact-us')}}"> Kontakt</a>
                    </li>
                  </ul>
                </div>
                <!-- Footer Menu End -->
              </div>
              <div class="col-md-6">
                <!-- Footer Copyright Start -->
                <div class="footer-copyright-text">
                  <p>Copyright © {{ date('Y') }} KNOW4YOU. All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->
              </div>
            </div>
          </div>
          <!-- Footer Copyright Section End -->
        </div>
      </footer>
      <!-- Footer End -->

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script>
          $(document).ready(function () {
              $('form#subscribe-form').on('submit', function (e) {
                  e.preventDefault(); 
                  const formData = {
                      email: $('input[name="email"]').val(),
                      _token: $('input[name="_token"]').val(),
                  };
      
                  $.ajax({
                      url: "{{ route('subscribe') }}",
                      type: "POST",
                      data: formData,
                      success: function (response) {
                          // Hide the form
                          $('#subscribe-form').hide();
      
                          // Show success message
                          const successMessage = `<div class="alert alert-success" role="alert">${response.message}</div>`;
                          $('#message-container').html(successMessage).show();
                      },
                      error: function (xhr) {
                          if (xhr.status === 422) {
                              const errors = xhr.responseJSON.errors;
                              const errorMessage = `<div class="alert alert-danger" role="alert">${errors.email[0]}</div>`;
                              $('#message-container').html(errorMessage).show();
                          } else {
                              const generalError = `<div class="alert alert-danger" role="alert">An error occurred. Please try again.</div>`;
                              $('#message-container').html(generalError).show();
                          }
                      }
                  });
              });
              // form2
              $('form#subscribe-form2').on('submit', function (e) {
                  e.preventDefault(); 
                  const formData = {
                      email: $('input[name="email2"]').val(),
                      _token: $('input[name="_token"]').val(),
                  };
      
                  $.ajax({
                      url: "{{ route('subscribe') }}",
                      type: "POST",
                      data: formData,
                      success: function (response) {
                        alert('test');
                      },
                      error: function (xhr) {
                          if (xhr.status === 422) {
                              const errors = xhr.responseJSON.errors;
                              const errorMessage = `<div class="alert alert-danger" role="alert">${errors.email[0]}</div>`;
                              $('#message-container').html(errorMessage).show();
                          } else {
                              const generalError = `<div class="alert alert-danger" role="alert">An error occurred. Please try again.</div>`;
                              $('#message-container').html(generalError).show();
                          }
                      }
                  });
              });
          });
      </script>
      
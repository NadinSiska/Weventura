  @extends('layouts.auth')

  @section('title', 'Login')

  @section('content')

      <section class="contact-us__area section pt-100 section-space-bottom overflow-hidden">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-6">
                      <div class="contact-us__widget mb-30" data-tilt>
                          <img src="auth/imgs/concact/contact-left-img.png" alt="img not found">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="contact-us__title-wrapper">
                          <div class="section__title-wrapper mb-40">
                              <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Login
                              </h2>
                          </div>

                          <div class="contact-us__form-wrapper">
                              <form class="contact-us__form" method="POST" action="{{ route('register') }}">
                                  @csrf
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".6s">
                                              <span>Name</span>
                                              <input name="name" id="name" type="text" placeholder="Name"
                                                  aria-label="Email" required>
                                              @error('name')
                                                  <span class="text-danger">{{ $message }}</span>
                                              @enderror
                                              <div class="icon">
                                                  <i class="fa-solid fa-paper-plane"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-12">
                                          <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".6s">
                                              <span>Email</span>
                                              <input name="email" id="email" type="email" placeholder="Email"
                                                  aria-label="Email" required>
                                              @error('email')
                                                  <span class="text-danger">{{ $message }}</span>
                                              @enderror
                                              <div class="icon">
                                                  <i class="fa-solid fa-paper-plane"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-12">
                                          <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".6s">
                                              <span>Password</span>
                                              <input name="password" id="password" type="password" placeholder="Password"
                                                  aria-label="Password" required>
                                              @error('password')
                                                  <span class="text-danger">{{ $message }}</span>
                                              @enderror
                                              <div class="icon">
                                                  <i class="fa-solid fa-eye"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-12">
                                          <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".6s">
                                              <span>Confirm Password</span>
                                              <input name="password_confirmation" id="password_confirmation"
                                                  type="password" placeholder="Password" aria-label="Password"
                                                  required>
                                              @error('password_confirmation')
                                                  <span class="text-danger">{{ $message }}</span>
                                              @enderror
                                              <div class="icon">
                                                  <i class="fa-solid fa-eye"></i>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                          <button type="submit" class="contact-btn mt-30 wow fadeInLeft animated"
                                              data-wow-delay=".8s">Login</button>
                                      </div>
                                      <div class="col-12 mt-20">
                                          <p class="text-center">Don't have an account? <a
                                                  href="{{ route('register') }}">Register here</a></p>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection

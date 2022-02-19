@extends('layouts.auth')

@section('content')
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #fcebe0">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .content-3-5 .btn:focus,
    .content-3-5 .btn:active {
      outline: none !important;
    }

    .content-3-5 .width-left {
      width: 0%;
    }

    .content-3-5 .width-right {
      width: 100%;
      height: 100%;
      padding: 8rem 2rem;
      background-color: #fcfdff;
    }

    .content-3-5 .centered {
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .content-3-5 .right {
      width: 100%;
    }

    .content-3-5 .title-text {
      font: 600 1.875rem/2.25rem Poppins, sans-serif;
      margin-bottom: 0.75rem;
    }

    .content-3-5 .caption-text {
      font: 400 0.875rem/1.75rem Poppins, sans-serif;
      color: #a8adb7;
    }

    .content-3-5 .input-label {
      font: 500 1.125rem/1.75rem Poppins, sans-serif;
      color: #39465b;
    }

    .content-3-5 .div-input {
      font: 300 1rem/1.5rem Poppins, sans-serif;
      padding: 1rem 1.25rem;
      margin-top: 0.75rem;
      border-radius: 0.75rem;
      border: 1px solid #cacbce;
      color: #2a3240;
      transition: 0.3s;
    }

    .content-3-5 .div-input:focus-within {
      border: 1px solid #2ec49c;
      color: #2a3240;
      transition: 0.3s;
    }

    .content-3-5 .div-input input::placeholder {
      color: #cacbce;
      transition: 0.3s;
    }

    .content-3-5 .div-input:focus-within input::placeholder {
      color: #2a3240;
      outline: none;
      transition: 0.3s;
    }

    .content-3-5 .div-input .icon-toggle-empty-3-5 path,
    .content-3-5 .div-input:focus-within .icon path {
      transition: 0.3;
      fill: #2e95c4;
      transition: 0.3s;
    }

    .content-3-5 .input-field {
      font: 300 1rem/1.5rem Poppins, sans-serif;
      width: 100%;
      background-color: #fcfdff;
      transition: 0.3s;
    }

    .content-3-5 .input-field:focus {
      outline: none;
      transition: 0.3s;
    }

    .content-3-5 .forgot-password {
      font: 400 0.875rem/1.25rem Poppins, sans-serif;
      color: #cacbce;
      transition: 0.3s;
      text-decoration: none;
    }

    .content-3-5 .forgot-password:hover {
      color: #2a3240;
    }

    .content-3-5 .btn-fill {
      font: 500 1.25rem/1.75rem Poppins, sans-serif;
      background-image: linear-gradient(rgb(91, 139, 203),
          rgb(39, 62, 194));
      padding: 0.75rem 1rem;
      margin-top: 2.25rem;
      border-radius: 0.75rem;
      transition: 0.5s;
    }

    .content-3-5 .btn-fill:hover {
      background-image: linear-gradient(#2e7cc4, #382ec4);
      transition: 0.5s;
    }

    .content-3-5 .bottom-caption {
      font: 400 0.875rem/1.25rem Poppins, sans-serif;
      margin-top: 2rem;
      color: #2a3240;
    }

    .content-3-5 .green-bottom-caption {
      color: #2e3dc4;
      font-weight: 500;
    }

    .content-3-5 .green-bottom-caption:hover {
      color: #2e63c4;
      cursor: pointer;
      text-decoration: underline;
    }

    @media (min-width: 576px) {
      .content-3-5 .width-right {
        padding: 8rem 4rem;
      }

      .content-3-5 .right {
        width: 58.333333%;
      }
    }

    @media (min-width: 768px) {
      .content-3-5 .right {
        width: 66.666667%;
      }
    }

    @media (min-width: 992px) {
      .content-3-5 .width-left {
        width: 48%;
      }

      .content-3-5 .width-right {
        width: 52%;
      }

      .content-3-5 .right {
        width: 75%;
      }
    }

    @media (min-width: 1200px) {
      .content-3-5 .right {
        width: 58.333333%;
      }
    }
  </style>
  <div class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row"
    style="font-family: 'Poppins', sans-serif" id="register">
    <div class="position-relative d-none d-lg-block h-100 width-left">
      <div class="text-center">
        <div id="storeCarousel"class="carousel slide"data-ride="carousel">         
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="images/product-login.png"
                class="d-inline w-75"
                alt="Carousel Image"
              />
            </div>
            <div class="carousel-item">
              <img
                src="images/product-login.png"
                class="d-inline w-75"
                alt="Carousel Image"
              />
            </div>
            <div class="carousel-item">
              <img
                src="images/product-login.png"
                class=" w-75"
                alt="Carousel Image"
              />
            </div> 
          </div>
          
          
          <ol class="carousel-indicators text-right" style="margin-top: 50px;">  
                  
            <li
              data-target="#storeCarousel"
              data-slide-to="0"
              class="active mt-5 li-active"
              style=" width: 28px; background: #ffffff;
              box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
              border-radius: 13px;"
            ></li>
            <li 
              data-target="#storeCarousel" data-slide-to="1" class="mt-5"
              style="width: 28px; background: #ffffff;
              box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
              border-radius: 13px;"
            ></li>
            <li 
              data-target="#storeCarousel" data-slide-to="2" class="mt-5"
              style="width: 28px; background: #ffffff;
              box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
              border-radius: 13px;"></li>
          </ol>
        </div>
      </div>
    </div>
    <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
      <div class="right mx-lg-0 mx-auto">
        <div class="align-items-center justify-content-center d-lg-none d-flex">

          <div id="storeCarousel"class="carousel slide"data-ride="carousel">      
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/product-login.png"
                  class="d-inline w-100"
                  alt="Carousel Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/product-login.png"
                  class="d-inline w-100"
                  alt="Carousel Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/product-login.png"
                  class=" w-100"
                  alt="Carousel Image"
                />
              </div> 
            </div>

            <ol class="carousel-indicators text-right" style="margin-top: 50px;">  
                  
              <li
                data-target="#storeCarousel"
                data-slide-to="0"
                class="active mt-5 li-active"
                style=" width: 28px; background: #F4DFD0;
                box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 13px;"
              ></li>
              <li 
                data-target="#storeCarousel" data-slide-to="1" class="mt-5"
                style="width: 28px; background: #F4DFD0;
                box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 13px;"
              ></li>
              <li 
                data-target="#storeCarousel" data-slide-to="2" class="mt-5"
                style="width: 28px; background: #F4DFD0;
                box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 13px;"></li>
            </ol>
          </div>

        </div>
        <h3 class="title-text">Register</h3>
        <p class="caption-text">
          Welcome to  Shopaint
        </p>
        <form style="margin-top: 1.5rem" method="POST" action="{{ route('register') }}">
          @csrf
          <div style="margin-bottom: 1.75rem">
            <label for="" class="d-block input-label">Full name</label>
            <div class="d-flex w-100 div-input">
              <svg class="icon" style="margin-right: 1rem" width="24" height="24"  viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5002 4.0835C13.4323 4.0835 4.0835 13.4323 4.0835 24.5002C4.0835 35.568 13.4323 44.9168 24.5002 44.9168C35.568 44.9168 44.9168 35.568 44.9168 24.5002C44.9168 13.4323 35.568 4.0835 24.5002 4.0835ZM24.5002 14.2918C28.0261 14.2918 30.6252 16.8888 30.6252 20.4168C30.6252 23.9448 28.0261 26.5418 24.5002 26.5418C20.9762 26.5418 18.3752 23.9448 18.3752 20.4168C18.3752 16.8888 20.9762 14.2918 24.5002 14.2918ZM14.0754 34.243C15.9068 31.548 18.9611 29.7513 22.4585 29.7513H26.5418C30.0412 29.7513 33.0935 31.548 34.9249 34.243C32.3157 37.036 28.6141 38.7918 24.5002 38.7918C20.3862 38.7918 16.6847 37.036 14.0754 34.243Z" fill="#CACBCE"/>
              </svg>

              <input 
                class=" input-field border-0 @error('name') is-invalid @enderror" 
                v-model="name"
                id="name" 
                type="text" 
                name="name" 
                value="{{ old('name') }}" 
                required 
                autocomplete="name" 
                autofocus
              />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          
            <label for="" class="d-block input-label">Email Address</label>
            <div class="d-flex w-100 div-input">
              <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                  fill="#CACBCE" />
              </svg>

              <input 
                v-model="email"
                @change="checkForEmailAvailability()"
                id="email" 
                type="email" 
                class=" input-field border-0 @error('email') is-invalid @enderror" 
                :class="{ 'is-invalid': this.email_unavailable }"
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
              />

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>
          
            <label for="" class="d-block input-label">Password</label>
            <div class="d-flex w-100 div-input">
              <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z"
                  fill="#CACBCE" />
              </svg>

              <input 
                id="password-content-3-5" 
                type="password" 
                class=" input-field border-0 @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="new-password"
              />
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              <div onclick="togglePassword()">
                <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                    fill="#CACBCE" />
                </svg>
              </div>
            </div>
            <label for="" class="d-block input-label">Confirm Password</label>
            <div class="d-flex w-100 div-input">
              <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z"
                  fill="#CACBCE" />
              </svg>

              <input
                id="password-content-3-6" 
                type="password" 
                class=" input-field border-0" 
                name="password_confirmation" 
                required 
                autocomplete="new-password" 
              />

              <div onclick="togglePassword1()">
                <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="icon-toggle1" fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                    fill="#CACBCE" />
                </svg>
              </div>
            </div>
          
          
          <button class="btn btn-fill text-white d-block w-100" type="submit">
            Daftar Akun Baru
          </button>
        </form>
        <p class="text-center bottom-caption">
          Sudah punya akun?
          <a href="{{ route('login') }}"><span class="green-bottom-caption">Masuk disini</span></a>
        </p>
      </div>
    </div>
  </div>

</section>
@endsection

@push('addon-script')
  <script src="vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    function togglePassword() {
      var x = document.getElementById("password-content-3-5");
      if (x.type === "password") {
        x.type = "text";
        document
          .getElementById("icon-toggle")
          .setAttribute("fill", "#2ec49c");
      } else {
        x.type = "password";
        document
          .getElementById("icon-toggle")
          .setAttribute("fill", "#CACBCE");
      }
    }
    function togglePassword1() {
      var x = document.getElementById("password-content-3-6");
      if (x.type === "password") {
        x.type = "text";
        document
          .getElementById("icon-toggle1")
          .setAttribute("fill", "#2ec49c");
      } else {
        x.type = "password";
        document
          .getElementById("icon-toggle1")
          .setAttribute("fill", "#CACBCE");
      }
    }
  </script>
  <script>
    Vue.use(Toasted);

    var register = new Vue({
      el: "#register",
      mounted() {
        AOS.init();
     
      },
      methods: {
        checkForEmailAvailability: function () {
          var self = this;
          axios.get('{{ route('api-register-check') }}', {
            params: {
                email: this.email
            }
          })
          .then(function (response) {
            if(response.data == 'Available') {
              self.$toasted.show(
                  "Email anda tersedia! Silahkan lanjut langkah selanjutnya!", {
                      position: "top-center",
                      className: "rounded",
                      duration: 1000,
                  }
              );
              self.email_unavailable = false;
            }else {
              self.$toasted.error(
                  "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
                      position: "top-center",
                      className: "rounded",
                      duration: 1000,
                  }
              );
              self.email_unavailable = true;
            }
            // handle success
            console.log(response.data);
          })
        }
      },
      data() {
          return {
              name: "",
              email: "",
              email_unavailable: false
          }
      },
    });
  </script>
@endpush

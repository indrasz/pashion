@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Cart
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table
                class="table table-borderless table-cart"
                aria-describedby="Cart"
              >
                <thead>
                  <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>  
                  @php $totalPrice = 0 @endphp
                  @foreach ($carts as $cart)
                  
                  <tr>
                    <td style="width: 20%;">
                      @if($cart->product->galleries)
                        <img
                          src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                          alt=""
                          class="cart-image"
                        />
                      @endif
                    </td>
                    <td style="width: 20%;">
                      <div class="product-subtitle" style="color: black;">{{ $cart->product->name }}</div>
                      <div class="product-subtitle">
                        {{--  <svg width="25" height="25" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M24.5002 4.0835C13.4323 4.0835 4.0835 13.4323 4.0835 24.5002C4.0835 35.568 13.4323 44.9168 24.5002 44.9168C35.568 44.9168 44.9168 35.568 44.9168 24.5002C44.9168 13.4323 35.568 4.0835 24.5002 4.0835ZM24.5002 14.2918C28.0261 14.2918 30.6252 16.8888 30.6252 20.4168C30.6252 23.9448 28.0261 26.5418 24.5002 26.5418C20.9762 26.5418 18.3752 23.9448 18.3752 20.4168C18.3752 16.8888 20.9762 14.2918 24.5002 14.2918ZM14.0754 34.243C15.9068 31.548 18.9611 29.7513 22.4585 29.7513H26.5418C30.0412 29.7513 33.0935 31.548 34.9249 34.243C32.3157 37.036 28.6141 38.7918 24.5002 38.7918C20.3862 38.7918 16.6847 37.036 14.0754 34.243Z" fill="black"/>
                        </svg>
                         --}}
                      </div>                 
                     
                    </td>
                    <td style="width: 20%;" >
                     
                      <div class="product-subtitle" style="color: black;">Ukuran : {{ $cart->attribute->size }} </div>  
                      <div class="product-subtitle" style="color: black;">Warna : {{ $cart->component->color }} </div>          
                    </td>
                    <td style="width: 15%;"  >
                      <div class="product-title">1</div>
                    </td>
                    <td style="width: 20%;">
                      <div class="product-title">RP. {{ number_format($cart->product->price) }}</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    
                    <td style="width: 5%;">
                      <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                                                  
                        @method('DELETE')
                        @csrf  
                        <button class="btn btn-remove-cart" type="submit">
                          X
                        </button>
                      </form>
                     
                    </td>
                  </tr>
                
                @php $totalPrice += $cart->product->price @endphp
                @endforeach
                       
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Detail Pengiriman</h2>
            </div>
          </div>
          <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="total_price" value="{{ $totalPrice }}">
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200" id="locations">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address_one">Alamat</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address_one"
                    aria-describedby="emailHelp"
                    name="address_one"
                    value="Setra Duta Cemara"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address_two">Detail alamat</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address_two"
                    aria-describedby="emailHelp"
                    name="address_two"
                    value="Blok B2 No. 34"
                  />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="provinces_id">Provinsi</label> 
                  <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                    <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                  </select>
                  <select v-else class="form-control"></select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="regencies_id">Kota</label>
                  <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                    <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                  </select>
                  <select v-else class="form-control"></select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="zip_code">Kode Pos</label>
                  <input
                    type="text"
                    class="form-control"
                    id="zip_code"
                    name="zip_code"
                    value="40512"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Negara</label>
                  <input
                    type="text"
                    class="form-control"
                    id="country"
                    name="country"
                    value="Indonesia"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone_number">No. Handphone</label>
                  <input
                    type="text"
                    class="form-control"
                    id="phone_number"
                    name="phone_number"
                    value="+628 2020 11111"
                  />
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2>Informasi Pembayaran</h2>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-4 col-md-2">
                <div class="product-title">0</div>
                <div class="product-subtitle">Ship to Jakarta</div>
              </div>
              
              <div class="col-4 col-md-2">
                <div class="product-title">0</div>
                <div class="product-subtitle">Ship to Jakarta</div>
              </div>
              <hr>
              <div class="col-4 col-md-2">
                <div class="product-title text-primary">IDR {{ number_format($totalPrice ?? 0) }}</div>
                <div class="product-subtitle">Total</div>
              </div>
              <div class="col-8 col-md-3">
                <button
                  type="submit"
                  class="btn btn-primary mt-4 px-4 btn-block"
                >
                  Checkout Now
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>

    
    {{-- Footer --}}
    @include('includes.footer-dummy')
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
              .then(function (response) {
                  self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function (response) {
                  self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush
@extends('layouts.admin')

@section('title')
  Store Settings
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Transaction</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->user->name }}" Transaction
        </p>
    </div>
    {{--  <div class="dashboard-content" id="transactionDetails">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                 
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Customer Name</div>
                      <div class="product-subtitle">{{ $item->user->name }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Product Name</div>
                      <div class="product-subtitle">
                        
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Date of Transaction
                      </div>
                      <div class="product-subtitle">
                        {{ $item->created_at }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Payment Status</div>
                      <div class="product-subtitle text-danger">
                        {{ $item->transaction_status }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Total Amount
                      </div>
                      <div class="product-subtitle">
                        ${{ number_format($item->total_price) }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Mobile
                      </div>
                      <div class="product-subtitle">
                        {{ $item->user->phone_number }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <form action="{{ route('transaction.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-12 mt-4">
                    <h5>Shipping Information</h5>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="product-title">Address I</div>
                        <div class="product-subtitle">
                          {{ $item->user->address_one }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Address II</div>
                        <div class="product-subtitle">
                          {{ $item->user->address_two }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Province</div>
                        <div class="product-subtitle">
                          {{ App\Models\Province::find($item->user->provinces_id)->name}}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">City</div>
                        <div class="product-subtitle">
                          {{ App\Models\Regency::find($item->user->regencies_id)->name }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Postal Code</div>
                        <div class="product-subtitle">{{ $item->user->zip_code }}</div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Country</div>
                        <div class="product-subtitle">{{ $item->user->country }}</div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Shipping Status</div>
                        <select
                          name="shipping_status"
                          id="status"
                          class="form-control"
                          v-model="status"
                        >
                          <option value="PENDING">Pending</option>
                          <option value="SHIPPING">Shipping</option>
                          <option value="SUCCESS">Success</option>
                        </select>
                      </div>
                      <template v-if="status == 'SHIPPING'">
                        <div class="col-md-3">
                          <div class="product-title">Input Resi</div>
                          <input
                            type="text"
                            class="form-control"
                            name="resi"
                            v-model="resi"
                          />
                        </div>
                        
                      </template>
                      <div class="col-12 mt-4">
                        <div class="form-group">
                          <label >Transaction Status</label>
                          <select name="transaction_status" class="form-control">
                            <option value="{{ $item->transaction_status }}">{{ $item->transaction_status }}</option>
                            <option value="" disabled>----------------</option>
                            <option value="PENDING">PENDING</option>
                            <option value="SHIPPING">SHIPPING</option>
                            <option value="SUCCESS">SUCCESS</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-lg mt-4"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  --}}

    <div class="dashboard-content" id="transactionDetails">
      {{--  <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img
                    src="{{ Storage::url($item->product->galleries->first()->photos ?? '') }}"
                    class="w-100 mb-3"
                    alt=""
                  />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Customer Name</div>
                      <div class="product-subtitle">{{ $item->transaction->user->name }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Product Name</div>
                      <div class="product-subtitle">
                        {{ $item->product->name }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Date of Transaction
                      </div>
                      <div class="product-subtitle">
                        {{ $item->created_at }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Payment Status</div>
                      <div class="product-subtitle text-danger">
                        {{ $item->transaction->transaction_status }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Total Amount
                      </div>
                      <div class="product-subtitle">
                        ${{ number_format($item->transaction->total_price) }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Mobile
                      </div>
                      <div class="product-subtitle">
                        {{ $item->transaction->user->phone_number }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <form action="{{ route('transaction.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-12 mt-4">
                    <h5>Shipping Information</h5>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="product-title">Address I</div>
                        <div class="product-subtitle">
                          {{ $item->transaction->user->address_one }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Address II</div>
                        <div class="product-subtitle">
                          {{ $item->transaction->user->address_two }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Province</div>
                        <div class="product-subtitle">
                          {{ App\Models\Province::find($item->transaction->user->provinces_id)->name}}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">City</div>
                        <div class="product-subtitle">
                          {{ App\Models\Regency::find($item->transaction->user->regencies_id)->name }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Postal Code</div>
                        <div class="product-subtitle">{{ $item->transaction->user->zip_code }}</div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Country</div>
                        <div class="product-subtitle">{{ $item->transaction->user->country }}</div>
                      </div>

                      <div class="col-12 col-md-6">
                        <div class="product-title">Shipping Status</div>
                        <select
                          name="shipping_status"
                          id="status"
                          class="form-control"
                          v-model="status"
                        >
                          <option value="PENDING">Pending</option>
                          <option value="SHIPPING">Shipping</option>
                          <option value="SUCCESS">Success</option>
                        </select>
                      </div>
                      <template v-if="status == 'SHIPPING'">
                        <div class="col-md-3">
                          <div class="product-title">Input Resi</div>
                          <input
                            type="text"
                            class="form-control"
                            name="resi"
                            v-model="resi"
                          />
                        </div>
                        
                      </template>

                      <div class="col-12 mt-4">
                        <div class="form-group">
                          <label >Transaction Status</label>
                          <select name="transaction_status" class="form-control">
                            <option value="{{ $item->transaction->transaction_status }}">{{ $item->transaction->transaction_status }}</option>
                            <option value="" disabled>----------------</option>
                            <option value="PENDING">PENDING</option>
                            <option value="SHIPPING">SHIPPING</option>
                            <option value="SUCCESS">SUCCESS</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-lg mt-4"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>  --}}

      <div class="row">
        <div class="col-12">
          
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
   
            <div class="card">
              <form action="{{ route('transaction.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
              <div class="card-body">
                {{--  <div class="col-12 col-md-4">
                  <img
                    src="{{ Storage::url($item->product->galleries->first()->photos ?? '') }}"
                    class="w-100 mb-3"
                    alt=""
                  />
                </div>  --}}
                
                {{--  <table class="table-auto w-100">
                  <tbody>
                      
                      <tr>
                          <th class="border px-4 py-2">Nama Customer</th>
                          <td class="border px-4 py-2">{{ $item->transaction->user->name }}</td>
                          
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Nama Produk </th>
                          <td class="border px-4 py-2">{{ $item->product->name }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Ukuran</th>
                          <td class="border px-4 py-2">{{ $item->size }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Warba</th>
                        <td class="border px-4 py-2">{{ $item->color }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Waktu Transaksi</th>
                        <td class="border px-4 py-2">{{ $item->created_at }}</td>
                     </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Status Transaksi</th>
                          @if ($item->transaction->transaction_status == 'PENDING')
                          <td class="border px-4 py-2 text-danger">{{ $item->transaction->transaction_status }}</td>                       
                          @elseif ($item->transaction->transaction_status == 'SHIPPING')
                          <td class="border px-4 py-2 text-primary">{{ $item->transaction->transaction_status }}</td>
                          @else
                          <td class="border px-4 py-2 text-success">{{ $item->transaction->transaction_status }}</td>
                          @endif
                      </tr>

                      <tr>
                        <th class="border px-4 py-2 ">Status Pengiriman</th>
                        @if ($item->transaction->shipping_status == 'PENDING')
                        <td class="border px-4 py-2 text-danger">{{ $item->transaction->shipping_status }}</td>                       
                        @elseif ($item->transaction->shipping_status == 'SHIPPING')
                        <td class="border px-4 py-2 text-primary">{{ $item->transaction->shipping_status }}</td>
                        @else
                        <td class="border px-4 py-2 text-success">{{ $item->transaction->shipping_status }}</td>
                        @endif
                      </tr>
                      
                      <tr>
                          <th class="border px-4 py-2 ">Total Pembayaran</th>
                          <td class="border px-4 py-2">IDR{{ number_format($item->transaction->total_price) }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Kode Transaksi</th>
                        <td class="border px-4 py-2">{{ $item->transaction->code }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Resi</th>
                        <td class="border px-4 py-2">{{ $item->transaction->resi }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">No Handphone</th>
                          <td class="border px-4 py-2">{{ $item->transaction->user->phone_number }}</td>
                      </tr>
                  </tbody>
  
                 
                  <tbody>
                   
                      <tr>
                          <th class="border px-4 py-2 ">Alamat</th>
                          <td class="border px-4 py-2">{{ $item->transaction->user->address_one }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Detail Alamat</th>
                          <td class="border px-4 py-2">{{ $item->transaction->user->address_two }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Provinsi</th>
                          <td class="border px-4 py-2">{{ App\Models\Province::find($item->transaction->user->provinces_id)->name}}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Kota</th>
                        <td class="border px-4 py-2">{{ App\Models\Regency::find($item->transaction->user->regencies_id)->name }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Kode Pos</th>
                          <td class="border px-4 py-2">{{ $item->transaction->user->zip_code }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Negara</th>
                        <td class="border px-4 py-2">{{ $item->transaction->user->country }}</td>
                        
                      </tr>
           
                  </tbody>
               
                </table>    --}}
               <div class="row mt-3">
                <div class="col-md-12 ">
                  <div class="form-group">
                    <label >Transaction Status</label>
                    <select name="transaction_status" class="form-control">
                      <option value="{{ $item->transaction_status }}">{{ $item->transaction_status }}</option>
                      <option value="" disabled>----------------</option>
                      <option value="PENDING">PENDING</option>
                      <option value="SHIPPING">SHIPPING</option>
                      <option value="SUCCESS">SUCCESS</option>
                    </select>
                  </div>
                </div>
                <div class=" col-md-6">
                  <div class="product-title">Shipping Status</div>
                  <select
                    name="shipping_status"
                    id="status"
                    class="form-control"
                    v-model="status"
                  >
                    <option value="PENDING">Pending</option>
                    <option value="SHIPPING">Shipping</option>
                    <option value="SUCCESS">Success</option>
                  </select>
                </div>
                <template v-if="status == 'SHIPPING'">
                  <div class="col-md-6">
                    <div class="product-title">Input Resi</div>
                    <input
                      type="text"
                      class="form-control"
                      name="resi"
                      v-model="resi"
                    />
                  </div>
                  
                </template>
                
               </div>
                
                <div class="row mt-4">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-lg mt-4"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
              

            </form>

            </div>
         
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection


@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "{{ $item->shipping_status }}",
        resi: "{{ $item->resi }}",
      },
    });
  </script>
@endpush
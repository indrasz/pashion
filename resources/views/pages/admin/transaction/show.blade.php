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
            Edit "{{ $transaction->user->name }}" Transaction
        </p>
    </div>

    <div class="dashboard-content" id="transactionDetails">
     
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
                <table class="table-auto w-100">
                  <tbody>
                      
                      <tr>
                          <th class="border px-4 py-2">Nama Customer</th>
                          <td class="border px-4 py-2">{{ $transaction->user->name }}</td>
                          
                      </tr>
                      
                      <tr>
                        <th class="border px-4 py-2 ">Waktu Transaksi</th>
                        <td class="border px-4 py-2">{{ $transaction->created_at }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Status Transaksi</th>
                          @if ($transaction->transaction_status == 'PENDING')
                          <td class="border px-4 py-2 text-danger">{{ $transaction->transaction_status }}</td>                       
                          @elseif ($transaction->transaction_status == 'SHIPPING')
                          <td class="border px-4 py-2 text-primary">{{ $transaction->transaction_status }}</td>
                          @else
                          <td class="border px-4 py-2 text-success">{{ $transaction->transaction_status }}</td>
                          @endif
                      </tr>

                      <tr>
                        <th class="border px-4 py-2 ">Status Pengiriman</th>
                        @if ($transaction->shipping_status == 'PENDING')
                        <td class="border px-4 py-2 text-danger">{{ $transaction->shipping_status }}</td>                       
                        @elseif ($transaction->shipping_status == 'SHIPPING')
                        <td class="border px-4 py-2 text-primary">{{ $transaction->shipping_status }}</td>
                        @else
                        <td class="border px-4 py-2 text-success">{{ $transaction->shipping_status }}</td>
                        @endif
                      </tr>
                      
                      <tr>
                          <th class="border px-4 py-2 ">Total Pembayaran</th>
                          <td class="border px-4 py-2">IDR {{ number_format($transaction->total_price) }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Kode Transaksi</th>
                        <td class="border px-4 py-2">{{ $transaction->code }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Resi</th>
                        <td class="border px-4 py-2">{{ $transaction->resi }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">No Handphone</th>
                          <td class="border px-4 py-2">{{ $transaction->user->phone_number }}</td>
                      </tr>
                  </tbody>
  
                 
                  <tbody>
                   
                      <tr>
                          <th class="border px-4 py-2 ">Alamat</th>
                          <td class="border px-4 py-2">{{ $transaction->user->address_one }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Detail Alamat</th>
                          <td class="border px-4 py-2">{{ $transaction->user->address_two }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Provinsi</th>
                          <td class="border px-4 py-2">{{ App\Models\Province::find($transaction->user->provinces_id)->name}}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Kota</th>
                        <td class="border px-4 py-2">{{ App\Models\Regency::find($transaction->user->regencies_id)->name }}</td>
                      </tr>
                      <tr>
                          <th class="border px-4 py-2 ">Kode Pos</th>
                          <td class="border px-4 py-2">{{ $transaction->user->zip_code }}</td>
                      </tr>
                      <tr>
                        <th class="border px-4 py-2 ">Negara</th>
                        <td class="border px-4 py-2">{{ $transaction->user->country }}</td>
                        
                      </tr>
           
                  </tbody>
               
                </table> 
                
                <h2 class="font-semibold text-lg leading-tight mt-4 mb-3">Transaction Items</h2>
                <div class="table-responsive">
                  <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Produk</th>      
                        <th>Ukuran</th>
                        <th>Warna</th>
                        <th>Harga</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>

              </div>
            </div>
         
        </div>
      </div>
      
    </div>
    
  </div>
</div>
@endsection


@push('addon-script')
  
  
  <script>
    // AJAX DataTablenn
    var datatable = $('#crudTable').DataTable({
       
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'product.name', name: 'product.name' },
            { data: 'size', name: 'size' },
            { data: 'color', name: 'color' },
            { data: 'price', name: 'price' },
            
        ]
    });
  </script>
@endpush
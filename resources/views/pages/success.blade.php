@extends('layouts.success')

@section('title')
    Store Success Page
@endsection

@section('content')
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #FFFAFA">

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .empty-4-1{
          padding: 1.25rem 2rem 5rem;
      }
      .empty-4-1 .img{
          width: 83.333333%;
          margin-bottom: 0.625rem;
          object-fit: cover;
          object-position: center;
      }
      .empty-4-1 .title-text{
          font: 600 1.875rem/2.25rem Poppins, sans-serif;            
          color: #000000;
          letter-spacing: 0.025em;
          margin-bottom: 0.75rem;
      }
      .empty-4-1 .caption-text{
          margin-bottom: 3rem;
          color: #9C9C9C;
          font-size: 1rem;
          letter-spacing: 0.025em;
          line-height: 1.75rem;
      }
      .empty-4-1 .btn-view{
          font: 600 1.125rem/1.75rem Poppins, sans-serif;            
          padding: 1rem 2rem;
          border-radius: 0.75rem;
          background-color: #FF7C57;
          transition: 0.3s;
      }
      .empty-4-1 .btn-view:hover{
          background-color: #FF9779;
          transition: 0.3s;
      }
      @media (min-width: 576px) {
          .empty-4-1{
              padding: 1.25rem 2rem 8rem;
          }
          .empty-4-1 .img{
              width: auto;
          }
      }
  </style>

  <div class="empty-4-1" style="font-family: 'Poppins', sans-serif;">    
      <div class="mx-auto d-flex align-items-center justify-content-center flex-column">
          <img class="img" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-7.png" alt="">                       
          <div class="text-center w-100">
              <h1 class="title-text">
                  Checkout Successful
              </h1>
              <p class="caption-text">
                  We've sent the receipt to your email<br class="d-sm-block d-none"> address is example@gmail.com
              </p>
              <div class="d-flex justify-content-center">
                  <button class="btn btn-view d-inline-flex text-white">
                      Lihat orderan saya
                  </button>
                  
              </div>
              <div class="d-flex justify-content-center mt-2">
                <a href="{{ route('home') }}" class="btn btn-view d-inline-flex text-white" style="background-color: rgb(58, 189, 58);">
                    Kembali ke halaman Utama
                </a>
                
            </div>
          </div>
      </div>
  </div>
</section> 
@endsection
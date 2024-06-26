@extends('layout.main')

@section('content')
<x-navbar></x-navbar>
<div class="bg">
  <div class="bg-wak d-flex justify-content-center align-items-center text-white text-center text-wrap">
      <div class="container-sm d-flex justify-content-center">
        <div class="testing">
          <p class="fw-bold fs-1">Cari Pesananmu</p>
          <p class="fs-3" >Dengan menggunakan fitur ini anda dapat mengetahui status pesananmu tanpa datang ketempat</p>
          <div class="d-flex justify-content-center mt-5 search-pesanan" style="width: 100%; height: 3rem;">
            <div class="d-flex ps-4 search-pesanan" style="background-color: white; border-radius: 20px; width: 100% ">
              <div style="height: 100%; width: 100%" class="d-flex align-items-center">
                <input type="text" id="kodePesananForm" placeholder="Cari Nama..."  class="input-cari">
              </div>
              <div class="tombol-cari">
                <button onclick="cariPesanan( )" style=" border: none; background: transparent; width: 100%; height: 100%;">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<script>
  function cariPesanan(){
    var parameter = document.getElementById('kodePesananForm').value;
    var url = "{{ route('search.pesanan', ':parameter') }}";
    url = url.replace(':parameter', parameter);
    window.location.href = url;
  }
</script>
@endsection
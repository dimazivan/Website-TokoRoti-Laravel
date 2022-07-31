@extends('masteradmin')
@section('titleadmin')
Form Produk
@endsection
@section('kontenadmin')

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Form Produk</h3>
    </header>

    <div class="form">
      <form action="{{ route('store.produk') }}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <div class="form-group">
          <label for="id_produk">Id Produk :</label>
          <input type="text" name="id_produk" class="form-control" id="id_produk" placeholder="Id Produk" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="nama_produk">Nama Bahan :</label>
          <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk" data-rule="minlen:1" data-msg="Masukkan Nama Produk" />
        </div>
        <div class="form-group">
          <label for="harga_produk">Harga Bahan :</label>
          <input type="number" class="form-control" name="harga_produk" id="harga_produk" placeholder="Harga Produk" data-rule="minlen:1" data-msg="Masukkan Harga Produk" />
        </div>
        <div class="form-group">
          <label for="jumlah_produk">Jumlah Stock :</label>
          <input type="number" class="form-control" name="jumlah_produk" id="jumlah_produk" placeholder="Jumlah Produk" data-rule="minlen:8" data-msg="Masukkan Jumlah Stock Produk" />
        </div>
        <div class="form-group">
          <label for="deskripsi_produk">Deskripsi : </label>
          <input type="text-area" class="form-control" name="deskripsi_produk" id="deskripsi_produk" placeholder="Deksripsi Produk" />
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Tambah</button>
          <button type="button" class="btn btn-danger" onclick="clearform();">Batal</button>
        </div>
      </form>
    </div>
    <!-- Script -->
    <script>
      function clearform() {
        document.getElementById("id_produk").value = "";
        document.getElementById("nama_produk").value = "";
        document.getElementById("harga_produk").value = "";
        document.getElementById("jumlah_produk").value = "";
      }
    </script>
  </div>
</section>
@endsection
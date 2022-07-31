@extends('masteradmin')
@section('titleadmin')
Form Bahan
@endsection
@section('kontenadmin')

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Form Bahan</h3>
    </header>

    <div class="form">
      <form action="{{ route('store.bahan') }}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <div class="form-group">
          <label for="id_bahan">Id Bahan :</label>
          <input type="text" name="id_bahan" class="form-control" id="id_bahan" placeholder="Id Bahan" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="nama_bahan">Nama Bahan :</label>
          <input type="text" class="form-control" name="nama_bahan" id="nama_bahan" placeholder="Nama Bahan" data-rule="minlen:1" data-msg="Masukkan Nama Bahan" />
        </div>
        <div class="form-group">
          <label for="harga_bahan">Harga Bahan :</label>
          <input type="number" class="form-control" name="harga_bahan" id="harga_bahan" placeholder="Harga Bahan" data-rule="minlen:1" data-msg="Masukkan Harga Bahan" />
        </div>
        <div class="form-group">
          <label for="jumlah_bahan">Jumlah Stock :</label>
          <input type="number" class="form-control" name="jumlah_bahan" id="jumlah_bahan" placeholder="Jumlah Bahan" data-rule="minlen:8" data-msg="Masukkan Jumlah Bahan" />
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
        document.getElementById("id_bahan").value = "";
        document.getElementById("nama_bahan").value = "";
        document.getElementById("harga_bahan").value = "";
        document.getElementById("jumlah_bahan").value = "";
      }
    </script>
  </div>
</section>
@endsection
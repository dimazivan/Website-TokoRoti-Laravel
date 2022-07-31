@extends('masteradmin')
@section('titleadmin')
Form Supplier
@endsection
@section('kontenadmin')

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Form Supplier</h3>
    </header>

    <div class="form">
      <form action="{{ route('store.supplier') }}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <div class="form-group">
          <label for="id_supplier">Id Supplier :</label>
          <input type="text" name="id_supplier" class="form-control" id="id_supplier" placeholder="Id Supplier" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="nama_supplier">Nama Supplier :</label>
          <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" placeholder="Nama Supplier" data-rule="minlen:1" data-msg="Masukkan Nama Supplier" />
        </div>
        <div class="form-group">
          <label for="alamat_supplier">Alamat Supplier :</label>
          <input type="text" class="form-control" name="alamat_supplier" id="alamat_supplier" placeholder="Alamat Supplier" data-rule="minlen:1" data-msg="Masukkan Alamat Supplier" />
        </div>
        <div class="form-group">
          <label for="no_telp_supplier">No Telp Supplier :</label>
          <input type="number" class="form-control" name="no_telp_supplier" id="no_telp_supplier" placeholder="No Telp Supplier" data-rule="minlen:11" data-rule="maxlen:13" data-msg="Masukkan No Telp Supplier" />
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
        document.getElementById("id_supplier").value = "";
        document.getElementById("nama_supplier").value = "";
        document.getElementById("alamat_supplier").value = "";
        document.getElementById("no_telp_supplier").value = "";
      }
    </script>
  </div>
</section>
@endsection
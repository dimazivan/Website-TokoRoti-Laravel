@extends('masteradmin')
@section('titleadmin')
Form Beli Bahan
@endsection
@section('kontenadmin')

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Form Pembelian Bahan</h3>
    </header>

    <div class="form">
    @foreach($bahan as $DB)
      <form action="/formbahan/storebahan/{id_bahan}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <!-- <div class="form-row"> -->
        <div class="form-group">
          <label for="Id_Transaksi_Pembelian">Id Transaksi :</label>
          <input type="text" name="Id_Transaksi_Pembelian" class="form-control" id="Id_Transaksi_Pembelian" placeholder="Id Transaksi" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="Nama_Supplier">Nama_Supplier</label>
          <select name="CBNama_Supplier" id="CBNama_Supplier">
            <option selected>Pilih Supplier</option>
            @foreach($supplier as $supp)
            <option value="{{$supp->nama_supplier}}">{{$supp->nama_supplier}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="Id_Bahan">Id Bahan</label>
          <input type="text" class="form-control" name="Id_Bahan" value="{{ $DB->id_bahan }}" id="Id_Bahan" readonly/>
        </div>
        <div class="form-group">
          <label for="Nama_Bahan">Nama Bahan</label>
          <input type="text" class="form-control" name="Nama_Bahan" value="{{ $DB->nama_bahan }}" id="Nama_Bahan" readonly/>
        </div>
        <div class="form-group">
          <label for="Harga_Bahan">Harga Bahan</label>
          <input type="number" class="form-control" name="Harga_Bahan" value="{{ $DB->harga_bahan }}" id="Harga_Bahan" onkeyup="totalharga();" placeholder="Rp." readonly/>
        </div>
        <div class="form-group">
          <label for="Jumlah_Bahan">Stok Sekarang</label>
          <input type="number" class="form-control" name="Jumlah_Bahan" id="Jumlah_Bahan" value="{{ $DB->jumlah_bahan }}" readonly/>
        </div>
        <div class="form-group">
          <label for="Jumlah_Beli">Jumlah Beli</label>
          <input type="number" class="form-control" name="Jumlah_Beli" id="Jumlah_Beli" onkeyup="stock();" placeholder="Masukkan Jumlah Bahan yang Anda Beli" data-rule="minlen:1" data-msg="Masukkan Jumlah Bahan yang Beli" />
        </div>
        <div class="form-group">
          <label for="Jumlah_Akhir">Jumlah Stock Setelah Beli</label>
          <input type="number" class="form-control" name="Jumlah_Akhir" id="Jumlah_Akhir" readonly/>
        </div>
        <div class="form-group">
          <label for="Total_Harga">Total Harga</label>
          <input type="number" class="form-control" name="Total_Harga_Beli" id="Total_Harga" placeholder="Rp." readonly required />
        </div>
        <div class="form-group">
          <label for="Bayar">Bayar</label>
          <input type="number" class="form-control" name="Bayar_Bahan" id="Bayar" onkeyup="totalharga();" placeholder="Rp." />
        </div>
        <div class="form-group">
          <label for="Kembalian">Kembalian</label>
          <input type="number" class="form-control" name="Kembalian" id="Kembalian" placeholder="Rp." readonly required />
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="sent-message">Thank you!, Your Order will be showed in Transaction</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Purchase Now !</button>
          <button type="button" class="btn btn-danger" onclick="clearform();">Batal</button>
        </div>
      </form>
      @endforeach

    </div>
    <!-- Script -->
    <script>
      function totalharga() {
        var jmlbeli = document.getElementById('Jumlah_Beli').value;
        var harga = document.getElementById('Harga_Bahan').value;
        // var jenis = document.getElementById('CBJenisBayar').value;
        var result = parseInt(jmlbeli) * parseInt(harga);
        var byr = document.getElementById('Bayar').value;
        var kembalian = parseInt(byr) - parseInt(result);
        document.getElementById('Total_Harga').value = result;
        document.getElementById('Kembalian').value = kembalian;
      }

      function stock() {
        var jmlbeli = document.getElementById('Jumlah_Beli').value;
        var stocksekarang = document.getElementById('Jumlah_Bahan').value;
        var result = parseInt(jmlbeli) + parseInt(stocksekarang);
        document.getElementById('Jumlah_Akhir').value = result;
      }

      function clearform() {
        document.getElementById("Id_Transaksi_Pembelian").value = "";
        document.getElementById("Nama_Supplier").value = "";
        document.getElementById("Nama_Bahan").value = "";
        document.getElementById("Harga_Bahan").value = "";
        document.getElementById("Jumlah_Beli").value = "";
        document.getElementById("Total_Harga_beli").value = "";
        document.getElementById("Bayar_Bahan").value = "";
        document.getElementById("Kembalian").value = "";
      }
    </script>
  </div>
</section>
@endsection
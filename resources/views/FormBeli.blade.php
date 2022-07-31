@extends('masterlogin')
@section('titlelogin')
Silahkan Order...
@endsection
@section('kontenlogin')

<script type="text/javascript">
  window.onload = function() {
    $("#CBNama_Kue").change(function() {
      var ambilid = $("#produk-" + this.value).data('idproduk');
      var ambilharga = $("#produk-" + this.value).data('harga');
      var ambilstock = $("#produk-" + this.value).data('stock');
      $("#Id_Produk").val(ambilid);
      $("#Harga_Produk").val(ambilharga);
      $("#Stock_Produk").val(ambilstock);
    });
  }
</script>

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Order Form</h3>
    </header>

    <div class="form">
      <form action="{{ route('store.order') }}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <!-- <div class="form-row"> -->
        <div class="form-group">
          <label for="Id_Transaksi">Id Transaksi :</label>
          <input type="text" name="Id_Transaksi_Penjualan" class="form-control" id="Id_Transaksi" placeholder="Id Transaksi" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="Nama_Pembeli">Nama :</label>
          <input type="text" class="form-control" name="Nama_Pembeli" id="Nama_Pembeli" placeholder="Nama Anda" data-rule="minlen:1" data-msg="Masukkan Nama Anda" />
        </div>
        <div class="form-group">
          <label for="Id_Produk">Id Kue :</label>
          <input type="text" class="form-control" name="Id_Produk" id="Id_Produk" placeholder="Id Kue" readonly />
        </div>
        <div class="form-group">
          <label for="Nama_Kue">Nama Kue</label>
          <select name="CBNama_Kue" id="CBNama_Kue">
            <option selected>Pilih Kue</option>
            @foreach($produk as $np)
            <option value="{{$np->id_produk}}" id="produk-{{$np->id_produk}}" data-idproduk="{{$np->id_produk}}" data-harga="{{$np->harga_produk}}" data-stock="{{$np->jumlah_produk}}">{{$np->nama_produk}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="Harga_Kue">Harga Kue</label>
          <input type="number" class="form-control" name="Harga_Produk" id="Harga_Produk" placeholder="Rp." readonly />
        </div>
        <div class="form-group">
          <!-- <label for="Stock_Produk">Stock Produk</label> -->
          <input type="number" class="form-control" name="Stock_Produk" id="Stock_Produk" placeholder="Rp." hidden readonly />
        </div>
        <div class="form-group">
          <!-- <label for="Jumlah_Akhir">Stock Produk Akhir</label> -->
          <input type="number" class="form-control" name="Jumlah_Akhir" id="Jumlah_Akhir" placeholder="Rp." hidden readonly />
        </div>
        <div class="form-group">
          <label for="Jumlah_Order">Jumlah Beli</label>
          <input type="number" class="form-control" name="Jumlah_Order" id="Jumlah_Order" onkeyup="stock();" placeholder="Masukkan Jumlah Kue yang Anda Beli" data-rule="minlen:1" data-msg="Masukkan Jumlah Kue yang Beli" />
        </div>
        <div class="form-group">
          <label for="Total_Harga">Total Harga</label>
          <input type="number" class="form-control" name="Total_Harga_Order" id="Total_Harga" placeholder="Rp." readonly required />
        </div>
        <div class="form-group">
          <label for="Pesan">Pesan :</label>
          <textarea class="form-control" id="Catatan_Pembeli" name="Catatan_Pembeli" rows="5" placeholder="Catatan Pembeli"></textarea>
        </div>
        <div class="form-group">
          <label for="Bayar">Bayar</label>
          <input type="number" class="form-control" name="Bayar_Produk" id="Bayar" placeholder="Rp." />
        </div>
        <div class="form-group">
          <label for="Jenis_Pembayaran">Jenis Pembayaran</label>
          <select name="CBJenisBayar" id="CBJenisBayar" onchange="totalharga();">
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
            <option value="Ovo">Ovo</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Biaya_Admin">Biaya Admin</label>
          <input type="number" class="form-control" name="Biaya_Admin" id="Biaya_Admin" placeholder="Rp." readonly required />
        </div>
        <div class="form-group">
          <label for="Total_Harga_Akhir">Total Harga AKhir</label>
          <input type="number" class="form-control" name="Total_Harga_Akhir" id="Total_Harga_Akhir" placeholder="Rp." readonly required />
        </div>
        <div class="form-group">
          <label for="Kembalian">Kembalian</label>
          <input type="number" class="form-control" name="Kembalian" id="Kembalian" placeholder="Rp." readonly required />
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success" onclick="clearberhasil();">Purchase Now !</button>
          <button type="button" class="btn btn-danger" onclick="clearform();">Batal</button>
        </div>
      </form>
    </div>
    <!-- Script -->
    <script>
      // function totalharga() {
      //   var jmlbeli = document.getElementById('Jumlah_Order').value;
      //   var harga = document.getElementById('Harga_Produk').value;
      //   // var jenis = document.getElementById('CBJenisBayar').value;
      //   var result = parseInt(jmlbeli) * parseInt(harga);
      //   var byr = document.getElementById('Bayar').value;
      //   var kembalian = parseInt(byr) - parseInt(result);
      //   document.getElementById('Total_Harga').value = result;
      //   document.getElementById('Kembalian').value = kembalian;
      // }

      function totalharga() {
        var cbjenis = document.getElementById("CBJenisBayar").value;
        if (cbjenis == "Tunai") {
          var jmlbeli = document.getElementById('Jumlah_Order').value;
          var harga = document.getElementById('Harga_Produk').value;
          var byr = document.getElementById('Bayar').value;
          var result = parseInt(jmlbeli) * parseInt(harga);
          var kembalian = parseInt(byr) - parseInt(result);
          document.getElementById('Total_Harga').value = result;
          document.getElementById('Total_Harga_Akhir').value = result;
          document.getElementById('Kembalian').value = kembalian;
          document.getElementById('Biaya_Admin').value = 0;
        } else if (cbjenis == "Transfer") {
          var jmlbeli = document.getElementById('Jumlah_Order').value;
          var harga = document.getElementById('Harga_Produk').value;
          var byr = document.getElementById('Bayar').value;
          var total = parseInt(jmlbeli) * parseInt(harga);
          var admin = parseInt(jmlbeli) * parseInt(harga) * 0.1;
          var result = total + admin;
          var kembalian = parseInt(byr) - parseInt(result);
          document.getElementById('Total_Harga').value = total;
          document.getElementById('Total_Harga_Akhir').value = result;
          document.getElementById('Kembalian').value = kembalian;
          document.getElementById('Biaya_Admin').value = admin;
        } else {
          var jmlbeli = document.getElementById('Jumlah_Order').value;
          var harga = document.getElementById('Harga_Produk').value;
          var byr = document.getElementById('Bayar').value;
          var total = parseInt(jmlbeli) * parseInt(harga);
          var result = parseInt(jmlbeli) * parseInt(harga) + 10000;
          var kembalian = parseInt(byr) - parseInt(result);
          document.getElementById('Total_Harga').value = total;
          document.getElementById('Total_Harga_Akhir').value = result;
          document.getElementById('Kembalian').value = kembalian;
          document.getElementById('Biaya_Admin').value = 10000;
        }
      }

      function stock() {
        var jmlbeli = document.getElementById('Jumlah_Order').value;
        var stock = document.getElementById('Stock_Produk').value;
        var result = parseInt(stock) - parseInt(jmlbeli);
        document.getElementById('Jumlah_Akhir').value = result;
      }

      function clearform() {
        document.getElementById("Id_Transaksi").value = "";
        document.getElementById("Nama_Pelanggan").value = "";
        document.getElementById("Nama_Kue").value = "";
        document.getElementById("Harga_Kue").value = "";
        document.getElementById("Jumlah_Order").value = "";
        document.getElementById("Total_Harga").value = "";
        document.getElementById("Catatan_Pembeli").value = "";
        document.getElementById("Bayar").value = "";
        document.getElementById("Kembalian").value = "";
      }

      function clearberhasil() {
        alert("Transaksi Sedang Di Proses");
        alert("Laman Otomatis Menuju Daftar Transaksi Untuk Melihat Update");
        location.href = "/daftartransaksi";
      }
    </script>
  </div>
</section>
@endsection
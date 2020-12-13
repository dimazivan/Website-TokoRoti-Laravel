@extends('master')
@section('title')
Silahkan Order...
@endsection
@section('konten')

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
          <input type="text" name="Id_Transaksi_Penjualan" class="form-control" id="Id_Transaksi" placeholder="Id Transaksi" data-msg="Please enter at least 4 chars" />
        </div>
        <!-- <div class="form">
            <div class="form-group">
              <label for="List_Order">Keranjang Anda :</label>
              <textarea class="form-control" id="List_Order" name="List_Order" rows="30" placeholder="Keranjang Anda..." disabled></textarea>
            </div>
          </div> -->
        <!-- </div> -->
        <div class="form-group">
          <label for="Nama_Pembeli">Nama :</label>
          <input type="text" class="form-control" name="Nama_Pembeli" id="Nama_Pembeli" placeholder="Nama Anda" data-rule="minlen:1" data-msg="Masukkan Nama Anda" />
        </div>
        <div class="form-group">
          <label for="Id_Produk">Id Kue :</label>
          <input type="text" class="form-control" name="Id_Produk" id="Id_Produk" placeholder="Id Kue" data-msg="Masukkan Id Kue" />
        </div>
        <div class="form-group">
          <label for="Nama_Produk">Nama Kue</label>
          <input type="text" class="form-control" name="Nama_Produk" id="Nama_Produk" placeholder="Masukkan Nama Kue yang Anda Beli" data-rule="minlen:1" data-msg="Masukkan Nama Kue yang Beli" />
        </div>
        <div class="form-group">
          <label for="Harga_Kue">Harga Kue</label>
          <input type="number" class="form-control" name="Harga_Produk" id="Harga_Kue" onkeyup="totalharga();" placeholder="Rp." />
          <!-- jangan lupa disable -->
        </div>
        <div class="form-group">
          <label for="Jumlah_Order">Jumlah Beli</label>
          <input type="number" class="form-control" name="Jumlah_Order" id="Jumlah_Order" onkeyup="totalharga();" placeholder="Masukkan Jumlah Kue yang Anda Beli" data-rule="minlen:1" data-msg="Masukkan Jumlah Kue yang Beli" />
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
          <input type="number" class="form-control" name="Bayar_Produk" id="Bayar" onkeyup="totalharga();" placeholder="Rp." />
        </div>
        <!-- <div class="form-group">
          <label for="Jenis_Pembayaran">Jenis Pembayaran</label>
          <select name="CBJenisBayar" id="CBJenisBayar">
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
            <option value="Virtual">Virtual</option>
          </select>
        </div> -->
        <div class="form-group">
          <label for="Kembalian">Kembalian</label>
          <input type="number" class="form-control" name="Kembalian" id="Kembalian" placeholder="Rp." readonly required />
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Thank you!, Your Order will be showed in Transaction</div>
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-primary">Tambah</button>
          <button type="submit" class="btn btn-success">Purchase Now !</button>
          <button type="button" class="btn btn-danger" onclick="clearform();">Batal</button>
        </div>
      </form>
    </div>
    <!-- Script -->
    <script>
      function totalharga() {
        var jmlbeli = document.getElementById('Jumlah_Order').value;
        var harga = document.getElementById('Harga_Kue').value;
        // var jenis = document.getElementById('CBJenisBayar').value;
        var result = parseInt(jmlbeli) * parseInt(harga);
        var byr = document.getElementById('Bayar').value;
        var kembalian = parseInt(byr) - parseInt(result);
        document.getElementById('Total_Harga').value = result;
        document.getElementById('Kembalian').value = kembalian;
        // if (!isNaN(result)) {
        //   if (jenis == "Transfer") {
        //     if (result > 200000) {
        //       document.getElementById('Total_Harga').value = result;
        //       document.getElementById('Kembalian').value = kembalian;
        //     } else {
        //       var result = parseInt(jmlbeli) * parseInt(harga);
        //       var tambah = parseInt(jmlbeli) * parseInt(harga) * 0.1;
        //       var kembalian = parseInt(byr) - parseInt(result) + parseInt(tambah);
        //       document.getElementById('Total_Harga').value = (result + tambah);
        //       document.getElementById('Kembalian').value = kembalian;
        //     }
        //   } else if (jenis == "Virtual") {
        //     document.getElementById('Total_Harga').value = result;
        //     document.getElementById('Kembalian').value = kembalian;
        //   } else {
        //     var kembalian = parseInt(byr) - parseInt(result) + 10000;
        //     document.getElementById('Total_Harga').value = result + 10000;
        //     document.getElementById('Kembalian').value = kembalian;
        //   }

        // } else {
        //   document.getElementById('Total_Harga').value = result;
        //   document.getElementById('Kembalian').value = kembalian;
        // }
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
    </script>
  </div>
</section>
@endsection
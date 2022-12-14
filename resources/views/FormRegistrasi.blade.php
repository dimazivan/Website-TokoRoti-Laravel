@extends('master')
@section('title')
Daftar Disini
@endsection
@section('konten')

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Register Form</h3>
    </header>

    <div class="form">
      <form action="{{ route('store.daftar') }}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <div class="form-group">
          <label for="id_user">Id User :</label>
          <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Id User" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="nama_user">Nama User :</label>
          <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Anda" data-rule="minlen:1" data-msg="Masukkan Nama Anda" />
        </div>
        <div class="form-group">
          <label for="username">Username :</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Username Anda" data-rule="minlen:1" data-msg="Masukkan Username Anda" />
        </div>
        <div class="form-group">
          <label for="kata_sandi">Password :</label>
          <input type="password" class="form-control" name="kata_sandi" id="kata_sandi" placeholder="Masukkan Password Anda" data-rule="minlen:8" data-msg="Password Minimal 8 Karakter" />
        </div>
        <div class="form-group">
          <label for="cek_password">Re-Type Password :</label>
          <input type="password" class="form-control" name="cek_password" id="cek_password" placeholder="Masukkan Password Anda" data-rule="minlen:8" data-msg="Password Minimal 8 Karakter" />
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success" onclick="validatePassword();">Register</button>
        </div>
      </form>
    </div>
    <!-- Script -->
    <script>
        function validatePassword(){
        document.getElementById("kata_sandi").onchange = validatePassword;
        document.getElementById("cekpassword").onchange = validatePassword;
        var pass2=document.getElementById("cekpassword").value;
        var pass1=document.getElementById("kata_sandi").value;
        if(pass1!=pass2)
            document.getElementById("cekpassword").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
        else
            document.getElementById("cekpassword").setCustomValidity('');
        }
    </script>
  </div>
</section>
@endsection
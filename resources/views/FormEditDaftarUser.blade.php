@extends('masteradmin')
@section('titleadmin')
Daftar User
@endsection
@section('kontenadmin')

<section id="contact" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Daftar Edit User Login</h3>
    </header>

    <div class="form">
    @foreach($data_user as $DU)
      <form action="/formuser/updateuser/{id_user}" method="post" class="php-email-form">
        @csrf
        <!-- {{ csrf_field() }} -->
        <div class="form-group">
          <label for="id_user">Id User :</label>
          <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Id User" value="{{ $DU->id_user }}" data-msg="Please enter at least 5 chars" />
        </div>
        <div class="form-group">
          <label for="nama_user">Nama User :</label>
          <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Anda" value="{{ $DU->nama_user }}" data-rule="minlen:1" data-msg="Masukkan Nama Anda" />
        </div>
        <div class="form-group">
          <label for="username">Username :</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Username Anda" data-rule="minlen:1" value="{{ $DU->username }}" data-msg="Masukkan Username Anda" />
        </div>
        <div class="form-group">
          <label for="kata_sandi">Password :</label>
          <input type="password" class="form-control" name="kata_sandi" id="kata_sandi" placeholder="Masukkan Password Anda" value="{{ $DU->kata_sandi }}" data-rule="minlen:8" data-msg="Password Minimal 8 Karakter" />
        </div>
        <div class="form-group">
          <label for="level_user">Level User</label>
          <select name="CBLevel_User" id="CBLevel_User">
            <option value="0">Admin</option>
            <option value="1">User</option>
          </select>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Ubah</button>
          <button type="button" class="btn btn-danger" onclick="clearform();">Batal</button>
        </div>
      </form>
      @endforeach
    </div>
    <!-- Script -->
    <script>
        function clearform() {
        document.getElementById("id_user").value = "";
        document.getElementById("nama_user").value = "";
        document.getElementById("username").value = "";
        document.getElementById("kata_sandi").value = "";
        $('#CBLevel_User')[0].selectedIndex = 0;
      }
    </script>
  </div>
</section>
@endsection
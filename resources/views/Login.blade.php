@extends('master')
@section('title')
Login Page
@endsection
@section('konten')

<section id="loginvw" class="section-bg" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3 class="section-title">Login</h3>
    </header>

    <div class="form">
      <form action="" method="post" class="php-email-form">
        <div class="form-group">
          <label for="username">Username :</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="Username" data-msg="Please enter at least 8 chars" data-msg="Masukkan Username Anda"/>
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Masukkan Password Anda" />
          <div class="validate"></div>
        </div>
        <p>Dont Have Any Account ? Register <a href="/registrasi">Here</a></p>
        <div class="text-center"><button type="submit" class="btn btn-primary">Login</button></div>
      </form>
    </div>
  </div>
</section>
@endsection
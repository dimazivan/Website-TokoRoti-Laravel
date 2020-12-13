@extends('master')
@section('title')
Register Page
@endsection
@section('konten')

<section id="loginvw" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h3 class="section-title">Form Registrasi</h3>
        </header>

        <div class="form">
            <form action="" method="post" class="php-email-form">
                @csrf
                <div class="form-group">
                    <label for="namauser">Name :</label>
                    <input type="text" name="namauser" class="form-control" id="namauser" placeholder="Username" data-msg="Please enter at least 8 chars" data-msg="Masukkan Username Anda" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" data-msg="Please enter at least 8 chars" data-msg="Masukkan Username Anda" />
                    <div class="validate"></div>
                </div>
                <!-- <div class="form-row"> -->
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Minimal Password 8 Karakter" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="cekpassword">Re Type Password :</label>
                    <input type="password" class="form-control" name="cekpassword" id="cekpassword" placeholder="Re Type Your Password" data-rule="minlen:8" data-msg="Minimal Password 8 Karakter" />
                    <div class="validate"></div>
                </div>
                <!-- </div> -->
                <div class="text-center"><button type="submit" class="btn btn-primary">Register</button></div>
            </form>
        </div>
    </div>
</section>
@endsection
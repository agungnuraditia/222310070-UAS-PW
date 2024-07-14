<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <style>
    .custom-title {
        font-family: 'Verdana', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #333333;
        text-align: center
    }
    .custom-button {
            background-color: #5BB9A2; /* Warna latar belakang */
            font-family: 'Verdana', sans-serif;
            color: white; /* Warna teks */
            padding: 10px 32px; /* Padding */
            text-align: center; /* Rata tengah teks */
            text-decoration: none; /* Hilangkan garis bawah */
            display: inline-block; /* Tampilkan sebagai elemen inline-block */
            font-size: 20px; /* Ukuran font */
            margin: 6px 4px; /* Margin */
            cursor: pointer; /* Ubah kursor saat hover */
            border: none; /* Hilangkan border */
            border-radius: 8px; /* Sudut melengkung */
        }

        .custom-button:hover {
            background-color: #010e02; /* Warna latar belakang saat hover */
    </style>
        <section class="vh-100" style="background-color: #5BB9A2;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-left">
                        <h2 class="custom-title">
                            <img src="{{asset('assets/css/ibik.png')}}" alt="" width="30" height="34" class="d-inline-block align-text-center">
                            IBIK Helpdesk
                        </h2>
                    <form action="{{ route('postLogin') }}" method="post">
                        {{ csrf_field() }}
                      <div data-mdb-input-init  class="form-outline mb-4">
                        <label class="form-label" for="typeEmailX-2">Email</label>
                        <input type="email" id="typeEmailX-2"name="email" class="form-control form-control-lg" />
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="typePasswordX-2">Password</label>
                        <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
                      </div>
                      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="custom-button" type="submit">Login</button>

                      <hr class="my-4">

                    </div>
                  </div>
                </div>
              </div>
            </div>
       </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

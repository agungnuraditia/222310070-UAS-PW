<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <style>
        .custom-font {
            font-family: 'Verdana', sans-serif;
            font-size: 16px;
            font-weight: bold;
            color: #333333;
        }
        .custom-font1 {
            font-family: 'Verdana', sans-serif;
            font-size: 22px;
            font-weight: bold;
            color: #333333;
        }
        .custom-title {
            font-family: 'Verdana', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }
    </style>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <h2 class="custom-title" font-size: 20px; class="navbar-brand" href="#">
            <img src="{{asset('assets/css/ibik.png')}}" alt="" width="60" height="54">
            IBIK Helpdesk
          </h2>
        </div>
      </nav>
      <section class="vh-100" style="background-color: #5BB9A2;">
        <div class="container py-5 h-100">

          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-12 col-xl-12">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                    <h2 class="text-left">
                            <h1 class="custom-font1">New Ticket</h1>
                            <div style="text-align: right;">
                            <a href="{{'riwayat'}}" class="btn btn-outline-dark" type="submit">Return Ticket List</a>
                            </div>
                            <br>
        <form action="{{ route('ticket.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="custom-font" for="exampleFormControlInput1">Subject</label>
            <input type="text   " name="subject" class="form-control" id="exampleFormControlInput1">
          </div>
        <div class="form-group">
          <label class="custom-font" for="exampleFormControlSelect1">Departement</label>
          <select name="department" class="form-control" id="exampleFormControlSelect1">
            <option>IT</option>
            <option>BAAK</option>
            <option>Cleaning Service</option>
          </select>
        </div>
        <div class="form-group">
            <label class="custom-font" for="exampleFormControlInput1">Lokasi Ruangan</label>
            <input type="text" name="lokasi_ruangan" class="form-control" id="exampleFormControlInput1" placeholder="Gedung A 301">
          </div>
        <div class="form-group">
          <label class="custom-font" for="exampleFormControlSelect2">Jenis Masalah</label>
          <select name="jenis_masalah"class="form-control" id="exampleFormControlSelect2">
            <option>Masalah Teknologi dan Perangkat IT</option>
            <option>Masalah Listrik dan Elektrikal</option>
            <option>Masalah Bangunan dan Fasilitas</option>
            <option>Masalah Keamanan</option>
            <option>Masalah Peralatan Lab dan Workshop</option>
          </select>
        </div>
        <div class="form-group">
          <label class="custom-font" for="exampleFormControlTextarea1">Deskripsi Masalah</label>
          <textarea name="deskripsi_masalah" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-secondary btn-lg">Create Ticket</button>
      </form>
    </div></div></div></div></div>
</section>

    </div>
</body>
</html>


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
            font-size: 16px;
            font-weight: normal;
            color: #333333;
        }
        .custom-title {
            font-family: 'Verdana', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }
        .custom-font2 {
            font-family: 'Verdana', sans-serif;
            font-size: 22px;
            font-weight: bold;
            color: #333333;
        }
        .blue-button {
            background-color: #12dfc4; /* Warna biru */
            color: white; /* Warna teks putih */
            padding: 10px 20px; /* Padding */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung */
            cursor: pointer; /* Cursor berubah menjadi pointer */
            font-size: 16px; /* Ukuran font */
        }

        .blue-button:hover {
            background-color: #02080e; /* Warna biru lebih gelap saat di-hover */
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
          <div class="row d-flex justify-content-center align-items-center h-20">
            <div class="col-12 col-md-8 col-lg-12 col-xl-12">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                    <h2 class="text-left">

<div class="container py-0 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-xl-12 col-xl-12">
        <h1 class="custom-font2">Riwayat Ticket</h1>
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-left">
            <table class="table">
                <thead class="thead-dark">
                  <tr class="custom-font">
                    <th scope="col">No</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Department</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Jenis Masalah</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $ticket as $key => $item )
                    <tr class="custom-font1">
                        <th scope="row" class="custom-font1">{{$key+1}}</th>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->department}}</td>
                        <td>{{$item->lokasi_ruangan}}</td>
                        <td>{{$item->jenis_masalah}}</td>
                        <td>
                        <a href="{{ route('detail_ticket',[$item->id]) }}" type="button" class="btn btn" style="background-color: #0ab293">
                            View
                          </button>
                        </td>
                        <a href="/delete/{{$item->id}}">
                      </tr>


                    @endforeach
                </body>
              </table>
              <div style="text-align: right;">
                <a href="{{ route('logout') }}" class="btn btn-outline-dark" type="submit">Log Out</a>
                </div>
          </div>
        </div>
    </div>
    </div>
</body>
</html>

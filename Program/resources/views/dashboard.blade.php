<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- <p>Selamat Datang, {{$isi_session}}</p> --}}
    {{-- <button id="btn_logout">Logout</button> --}}
    <!-- kode js -->
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siakad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: rgb(254 215 170);
            color: black;
            padding: 1em;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        nav {
            background-color: #eee;
            padding: 1em;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-right: 1em;
        }

        main {
            padding: 2em;
        }

        h2 {
            color: #333;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1em;
            margin-bottom: 1em;
        }

        footer {
            background-color: rgb(254 215 170);
            color: black;
            padding: 1em;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .center-container img {
            margin: auto; 
            display: block; 
        }
    </style>

<body>

    <header>
        <h1>PERPUSTAKAAN KITA</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Data Siswa</a></li>
            <li><a href="#">Nama Buku</a></li>
            <li><a href="#">Jadwal Peminjaman</a></li>
            <!-- Tambahkan menu lain sesuai kebutuhan -->
        </ul>
    </nav>

    <main>
        <h2>Selamat datang di PERPUSTAKAAN KITA</h2>
        <div class="center-container">
            <img src="dashboard.png" alt="dashboard">
        </div>
        <div class="card">
            <h3>Data Peminjaman</h3>
            <!-- Tambahkan konten data mahasiswa di sini -->
        </div>

        <div class="card">
            <h3>Jadwal Pengembalian</h3>
            <!-- Tambahkan konten jadwal kuliah di sini -->
        </div>

        <div class="card">
            <h3>Nama Buku</h3>
            <!-- Tambahkan konten nilai mahasiswa di sini -->
        </div>
        <div>
        <button id="btn_logout">Logout</button>
        </div>
    </main>
    <script>
        // deklarasi variabel komponen
        let btn_logout = document.querySelector("#btn_logout");
        // event untuk "btn_logout"
        btn_logout.addEventListener("click", function(){
            // alihkan ke halaman logout
            location.href = "{{url('logout')}}";
        });
    </script>

    <footer>
        <p>&copy; 2024 PERPUSTAKAAN KITA</p>
    </footer>

</body>
</html>
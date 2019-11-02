<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="./css/main.css">
    <style>
        body{
            margin: 20px;
        }
    </style>
</head>
<body>
    <div>
        <!-- Form Add -->
        <?php include('form.php') ?>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Table Mahasiswa</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Photo</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Tempat, Tgl Lahir</th>
                            <th>Alamat</th>
                            <th>Semester</th>
                            <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include('./koneksi.php');
                        $result = $koneksi->query("SELECT * FROM mahasiswa ORDER BY nama ASC");
                        $i = 0;
                        while ($data = $result->fetch()) {
                            $i++;
                            echo "<tr>";
                            echo "<td> $i </td>";
                            echo "<td><img src='./images/".$data['foto']."' width='auto' height='100'</td>";
                            // echo "<td><img src='./images/01112019182844sakhi.jpg' width='100' height='100'</td>";
                            echo "<td>".$data['nama']."</td>";
                            echo "<td>".$data['nim']."</td>";
                            echo "<td>".$data['ttl']."</td>";
                            echo "<td>".$data['alamat']."</td>";
                            echo "<td>".$data['semester']."</td>";
                            echo "<td>".$data['prodi']."</td>";
                            echo "</tr>";
                        }
                        $koneksi = null;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<!-- memanggil model.php
untuk mengakses fungsi showRecord()-->
<?php
require '../models/model.php';
$aksesModel = new Model();
$index = 1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏠Home</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- google material icons -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/styling.css">
    <!--  -->
    <style>
        .wrapper {
            position: fixed;
            width: 500px;
            max-width: 80%;
            transform: translate(-50%, -50%);
            background: white;
            z-index: 10;
            top: 50%;
            left: 50%;
            display: none;
            border: 1px solid black;
            border-radius: 8px;
        }



        .wrapper .confirm-box {
            padding: 10px 15px;
            width: 350px;
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .wrapper .confirm-header {
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .confirm-header .header-title {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .confirm-header .close-button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-size: 1.1rem;
            font-weight: bold;
        }

        #overlay {
            position: fixed;
            opacity: 0;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }

        #overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        .wrapper.open {
            display: flex;
        }
    </style>
    <script>
        function toggleModal() {
            const modal = document.getElementById('modal-wrapper');
            modal.classList.toggle('open')
        }

        function ok() {
            const element = document.querySelector('.id');
            const id = element.id;
            location.href = "http://localhost:9000/controller/controls.php?id=" + id;
        }
    </script>
</head>

<body>
    <!-- 
        menampilkan dialog box ketika user
        ingin menghapus record
     -->

    <div class="wrapper" id="modal-wrapper">

        <!-- modal header -->
        <div class="confirm-header">
            <div class="header-title">Menghapus Data</div>
            <button class="close-button">&times;</button>
        </div>

        <!-- modal body -->
        <div class="confirm-box">
            <p>Yakin ingin menghapus data?</p>
            <div class="buttons">
                <button class="yes" onclick="ok()">Ya</button>
                <button class="no" onclick="toggleModal()">Batal</button>
            </div>
        </div>

        <!-- overlay(menampilkan warna agak hitam) -->
        <div id="overlay">
        </div>
    </div>
    <h3>Daftar Sekolah di Semarang</h3>
    <a href="../models/add.php" class="custom-button">✍️Masukkan data baru</a>
    <div class="table-wrapper">
        <table class="custom-table">
            <thead>
                <tr>
                    <th>
                        <span class="material-icons-outlined number-list">
                            format_list_numbered
                        </span>
                        Nomer
                    </th>
                    <th>
                        <span class="material-icons-outlined home">
                            school
                        </span>
                        Nama Sekolah
                    </th>
                    <th>
                        <span class="material-icons-outlined place">
                            place
                        </span>
                        Alamat Sekolah
                    </th>
                    <th>
                        <span class="material-icons-outlined settings">
                            settings
                        </span>
                        Aksi
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $hasil = $aksesModel->showRecord();
                if (!empty($hasil)) {
                    foreach ($hasil as $data) : ?>


                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->alamat  ?></td>
                            <td>

                                <a href="../models/edit.php?id=<?= $data->id_sekolah ?>" name="edit" id="edit" class="edit-button">
                                    <span class="material-icons-outlined edit">
                                        edit
                                    </span>Edit</a>


                                <!-- <a href="../controller/controls.php?id=<?= $data->id_sekolah ?>" name="hapus" id="hapus" class="hapus-button">
                                    <span class="material-icons-outlined trash">
                                        delete
                                    </span>Hapus</a> -->
                                <button name="hapus" id="hapus" class="hapus-button" onclick="toggleModal()">
                                    <span class="material-icons-outlined trash id" id="<?= $data->id_sekolah ?>">
                                        delete
                                    </span>Hapus</button>

                            </td>
                        </tr>
                    <?php endforeach;
                } else {
                    ?>
                    <tr>
                        <td>belum ada data tersebut pada tabel
                            'sekolah_terdekat'</td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
    <!-- Co-authored-by: ardhayudhatama <devardha@users.noreply.github.com> -->
</body>

</html>
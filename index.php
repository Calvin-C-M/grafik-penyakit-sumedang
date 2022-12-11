<?php include "./assets/php/fetch_data.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teuing</title>

        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
        <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>

        <script src="assets/js/process_data.js"></script>
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <?php $data = fetch_data("data/data_penyakit_sumedang.csv"); ?>




            <!-- <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dataset</th>
                        <th scope="col">Produsen Data</th>
                        <th scope="col">Tanggal Pembuatan</th>
                        <th scope="col">Tanggal Update</th>
                        <th scope="col">Link API</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                        foreach($data as $d) : ?>
                        <tr>
                            <td><?= $d["no"] ?></td>
                            <td><?= $d["nama_dataset"] ?></td>
                            <td><?= $d["produsen_data"] ?></td>
                            <td><?= $d["tanggal_pembuatan"] ?></td>
                            <td><?= $d["tanggal_update"] ?></td>
                            <td>
                                <a href=""><?= $d["api"] ?></a>
                            </td>
                        </tr>
                    <?php 
                        endforeach; ?>
                </tbody>
            </table> -->
        </main>
    </body>
</html>
<?php
$fullname = $_POST['fullname'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$class = $_POST['class'];
$jk = "";

if ($sex == "L") {
    $jk = "Laki-laki";
} else {
    $jk = "Perempuan";
}
?>
<html>
    <head>
        <title>Result</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
    <body>
        <main class="container" role="main">
            <div class="container md-8">
                <table class="mt-5 table table-striped">
                    <tbody>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td><?php echo $fullname; ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo $jk; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo $address; ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><?php echo $class; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    <body>
</html>
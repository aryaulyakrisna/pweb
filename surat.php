<!-- Untuk Method POST  -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pernyataan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            line-height: 1.6;
            color: #333;
        }
        .signature {
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Surat Pernyataan</h2>
        <p>Yang bertanda tangan di bawah ini:</p>
        <p>Nama: <?php echo htmlspecialchars($_POST['nama']); ?></p>
        <p>Tempat/Tanggal Lahir: <?php echo htmlspecialchars($_POST['ttl']); ?></p>
        <p>Pekerjaan: <?php echo htmlspecialchars($_POST['pekerjaan']); ?></p>
        <p>Agama: <?php echo htmlspecialchars($_POST['agama']); ?></p>
        <p>Jenis Kelamin: <?php echo htmlspecialchars($_POST['jenis_kelamin']); ?></p>
        <p>Alamat: <?php echo htmlspecialchars($_POST['alamat']); ?></p>
        <p>Tahun Mulai Tinggal: <?php echo htmlspecialchars($_POST['tahun_tinggal']); ?></p>

        <p>
            Dengan ini menyatakan bahwa data tersebut adalah benar adanya dan saya
            bersedia bertanggung jawab atas kebenaran informasi yang diberikan.
        </p>

        <div class="signature">
            <p>Hormat Saya,</p>
            <p>(<?php echo htmlspecialchars($_POST['nama']); ?>)</p>
        </div>
    </div>
</body>
</html>

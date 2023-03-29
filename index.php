<!DOCTYPE html>
<html>

<head>
  <title>Kalkulator Rekomendasi Kesehatan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <style>
    /* Style untuk form input */
    input[type="text"],
    select {
      padding: 10px;
      border-radius: 5px;
      border: grey;
      margin-bottom: 10px;
      font-size: 16px;
      width: 80%;
    }

    /* Style untuk tombol hitung */
    input[type="submit"] {
      background-color: mediumblue;
      color: white;
      border-radius: 5px;
      border: none;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="reset"] {
      background-color: firebrick;
      color: white;
      border-radius: 5px;
      border: none;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Style untuk hasil perhitungan */
    .result {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
    }

    /* Style untuk judul halaman */
    h2 {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 30px;
    }

    /* Style untuk wrapper */
    .wrapper {
      max-width: 600px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Style untuk form label */
    label {
      font-size: 16px;
      margin-right: 10px;
    }

    /* Style untuk radio button */
    input[type="radio"] {
      margin-right: 10px;
    }

    /* Style untuk pilihan aktivitas */
    select {
      margin-bottom: 20px;
    }

    /* Style untuk hasil perhitungan */
    .result p {
      font-size: 18px;
      margin: 0;
    }

    /* Style untuk hasil perhitungan kalori */
    .result .calories {
      font-weight: bold;
      color: #4caf50;
      font-size: 24px;
      margin-bottom: 10px;
    }

    /* Style untuk hasil perhitungan olahraga */
    .result .exercise {
      margin-top: 10px;
      font-size: 18px;
      font-style: italic;
    }
  </style>
</head>

<body class="bg-success">
  <div class="wrapper">
    <h3>KALKULATOR REKOMENDASI KESEHATAN</h3>
    <form method="post" action="main.php" class="m-3">
      <label>Jenis Kelamin :</label><br />
      <input type="radio" name="gender" value="male" />Laki-laki <br />
      <input type="radio" name="gender" value="female" />Perempuan<br />
      <input type="number" name="age" placeholder="Usia(Tahun)" class="my-2" /><br />
      <input type="number" name="weight" placeholder="Berat Badan (Kg)" class="my-2" /><br />
      <input type="number" name="height" placeholder="Tinggi Badan (Cm)" class="my-2" /><br />
      <label>Aktivitas :</label>
      <select name="activity">
        <option value="1.2">Sangat Sedikit (Tidak pernah berolahraga)</option>
        <option value="1.375">Sedikit (Berolahraga 1-3 hari/minggu)</option>
        <option value="1.55">Normal (Berolahraga 3-5 hari/minggu)</option>
        <option value="1.725">Aktif (Berolahraga 6-7 hari/minggu)</option>
        <option value="1.9">
          Sangat Aktif (Olahraga berat setiap hari)
        </option>
      </select><br /><br />
      <input type="submit" name="submit" value="Hitung" />
      <input type="reset" name="submit" value="Reset" />
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>Challenge Form</title>
    <style>
        body {
            background-image: url(https://th.bing.com/th/id/OIP.cI1C4rf1BrZzr6NrYg1iYwHaD3?w=294&h=180&c=7&r=0&o=5&pid=1.7);
            background-size: cover;
            background-repeat: no-repeat;
            color: #f8f8ff;
        }
    </style>
</head>
<body>
    <h1>Menghitung Skor</h1>
    <form action="soal1.php" method="POST">
        <label for="nama_lumba-lumba">Lumba-lumba:</label>
        <input type="text" id="nama_lumba-lumba" name="nama_lumba-lumba"><br>
        <label for="data1_lumba_1">Data 1 Lumba-lumba:</label>
        <input type="number" id="data1_lumba_1" name="data1_lumba_1"><br>
        <label for="databonus1_lumba_2">Data Bonus 1 Lumba-lumba:</label>
        <input type="number" id="databonus1_lumba_2" name="databonus1_lumba_2"><br>
        <label for="databonus2_lumba_3">Data Bonus 2 Lumba-lumba:</label>
        <input type="number" id="databonus2_lumba_3" name="databonus2_lumba_3"><br>

        <label for="nama_koala">Koala:</label>
        <input type="text" id="nama_koala" name="nama_koala"><br>
        <label for="data1_koala_1">Data 1 Koala:</label>
        <input type="number" id="data1_koala_1" name="data1_koala_1"><br>
        <label for="databonus1_koala_2">Data Bonus 1 Koala:</label>
        <input type="number" id="databonus1_koala_2" name="databonus1_koala_2"><br>
        <label for="databonus2_koala_3">Data Bonus 2 Koala:</label>
        <input type="number" id="databonus2_koala_3" name="databonus2_koala_3"><br>

        <input type="submit" value="Hitung">
    </form>
</body>
<body>
<h1>Kalkulator Body Mass Index (BMI)</h1>
    <form action="soal2.php" method="post">
        <label for="nama1">Nama Orang 1:</label>
        <input type="text" id="nama1" name="nama1" required><br>
        <label for="berat1">Berat (kg):</label>
        <input type="number" id="berat1" name="berat1" required><br>
        <label for="tinggi1">Tinggi (m):</label>
        <input type="number" id="tinggi1" name="tinggi1" step="0.01" required><br>

        <label for="nama2">Nama Orang 2:</label>
        <input type="text" id="nama2" name="nama2" required><br>
        <label for="berat2">Berat (kg):</label>
        <input type="number" id="berat2" name="berat2" required><br>
        <label for="tinggi2">Tinggi (m):</label>
        <input type="number" id="tinggi2" name="tinggi2" step="0.01" required><br>

        <input type="submit" value="Hitung">
    </form>
    </form>
</body>
</html>

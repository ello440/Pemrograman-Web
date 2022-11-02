<body>
    <link rel="stylesheet" href="style.css">
    <h1>DATA PESERTA DIDIK</h1>
    <div class="kotakform">
        <form action="form.php" method="POST">
            <label for="nis">Nis</label>
            <input type="text" name="id" id="nis" placeholder="Nis Anda">
            <label for="name">NamaLengkap</label>
            <input type="text" name="nama" id="name" placeholder="Nama Lengkap Anda">
            <label for="addr">Alamat</label>
            <input type="text" name="alamat" id="addr" placeholder="Alamat Anda">
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option value="11">XI</option>
                <option value="12">XII</option>
            </select>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option value="MM">Multimedia</option>
                <option value="RPL">RPL</option>
                <option value="BKP">BKP</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>


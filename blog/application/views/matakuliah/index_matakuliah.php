<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<h3 class="col md-12">Data Mata Kuliah</h3>
<div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Dosen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td><?php echo $matkul -> dosen ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/matakuliah/detail_matakuliah/$matkul->id")?>" 
                        class="btn btn-outline-info">Detail <br></a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/edit_matakuliah/$matkul->id") ?> 
                        class="btn btn-outline-warning" >Edit <br>
                    </a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete_matakuliah/$matkul->id") ?>
                        class="btn btn-outline-danger"
                        onclick="return hapusMatakuliah('Anda yakin ingin menghapus Nama Mata Kuliah <?php echo $matkul->nama ?>?')">Hapus <br>
                    </a>
                </td>
            </tr>
            <?php
                $nomor++;
                }
            ?>            
        </tbody>
    </table>
        <a href= <?php echo base_url("index.php/matakuliah/form_matakuliah") ?> class="btn btn-outline-primary" >Tambah
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </a>
</div>
</body>
</html>
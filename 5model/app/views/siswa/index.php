<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>
        </div>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($data['siswa'] as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jurusan'] ?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach?>
    </table>
</div>
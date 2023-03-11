<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>
        </div>
    </div>
    <ul class="list-group" style="width: 400px">
        <?php foreach ($data['siswa'] as $row) : ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $row['nama'] ?>
                <a href="<?= BASEURL ?>siswa/detail/<?= $row['id'] ?>" class="badge text-bg-primary">Detail</a>
            </li>
        <?php endforeach ?>
    </ul>
    </table>
</div>
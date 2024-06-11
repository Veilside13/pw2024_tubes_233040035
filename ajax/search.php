<?php
require('../functions.php');

$keyword = $_GET['keyword'];
$user = live_search('user', $keyword, 'username');
?>


<table class="table caption-top text-white">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Image</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id = 1;
        foreach ($user as $u) { ?>

            <tr>
                <th scope="row"><?= $id++ ?></th>
                <td><?= $u['username'] ?></td>
                <td><img src="../img/<?= $u['gambar'] ?>" alt="" width="50" height="50"></td>
                <td><?= $u['password'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><a href="edit_user.php?id=<?= $u['id'] ?>" class="btn btn-primary me-2">edit</a><a href="hapus_user.php?id=<?= $u['id'] ?>" class="btn btn-danger">delete</a></td>
            </tr>

        <?php } ?>

    </tbody>
</table>
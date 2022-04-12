<div class="pull-right">
    <a href="" class="btn btn-success">TAMBAH DATA</a>
</div>
<h2 style="margin-top: 0;margin-bottom: 0;">Pengguna</h2>
<div class="clearfix"></div>
<hr />
<div class="container">
        <h2>Data User</h2>
        <p>Anda dapat mengelola data user</p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Role</th>
                </tr>
                <?php 
                print_r($user)
                $no = 1;
                foreach($user as $u){ 
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->username ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->role ?></td>
                    <td>
                        <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                        <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
                    </td>
                </tr>
                <?php } ?>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
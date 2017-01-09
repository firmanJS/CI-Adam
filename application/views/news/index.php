<html>
    <title></title>
    <base href="<?php echo site_url('');?>">
    <link rel="stylesheet" href="<?php echo site_url('aset/css/sb-admin-2.min.css'); ?>">
    <body>
        <a href="news/add" class="btn btn-primary">Tambah</a>
        <table class="table table-hover">
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    No Telephone
                </th>
                <th>
                    aksi
                </th>

            </tr>
             <?php
            $no=1;
            foreach ($people as $key) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $key->nama; ?></td>
                <td><?php echo $key->alamat; ?></td>
                <td><?php echo $key->hp; ?></td>
                <td>
                    <a href="news/show/<?php echo $key->id_people; ?>">lihat</a>
                </td>
            </tr>
            <?php $no++; } ?>
            
        </table>
            
        </div>
    </body>
</html>
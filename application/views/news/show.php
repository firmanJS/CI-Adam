<html>
    <title></title>
    <base href="<?php echo site_url('');?>">
    <link rel="stylesheet" href="<?php echo site_url('aset/css/sb-admin-2.min.css'); ?>">
    <body>
        <?php
        foreach ($people as $detail_people) { ?>
        <form class="form-horizontal" action="news/update/<?php echo $detail_people->id_people; ?>" method="post">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $detail_people->nama; ?>">
        <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $detail_people->alamat; ?>">
        <label for="">No Telephone</label>
        <input type="text" class="form-control" name="hp" value="<?php echo $detail_people->hp; ?>">
        <button type="submit" class="btn btn-primary">simpan</button>              
        </form>
        <?php } ?>
    </body>
</html>
<html>
    <title></title>
    <base href="<?php echo site_url('');?>">
    <link rel="stylesheet" href="<?php echo site_url('aset/css/sb-admin-2.min.css'); ?>">
    <body>
        <form class="form-horizontal" action="news/save" method="post">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama">
        <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat">
        <label for="">No Telephone</label>
        <input type="text" class="form-control" name="hp">
        <button type="submit" class="btn btn-primary">simpan</button>
                    
        </form>

    </body>
</html>
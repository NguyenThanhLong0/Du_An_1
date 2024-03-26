<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_SESSION['taikhoan'])) 
            extract($_SESSION['taikhoan']);?>
                Xin chào<span style="color: red"><?= '<b>' . $taikhoan . ' </b>' ?></span>
                
               <?php if ($vaitro == 1)  ?>
                    <a href="../admin/index.php">Đăng nhập Admin</a>
                <?php  ?>
                <a href="index.php?act=thoat">Thoát</a>
            <?php
        
        ?>
</body>
</html>

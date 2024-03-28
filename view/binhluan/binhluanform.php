<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$iduser = $_SESSION['taikhoan']['ma_nguoidung'];
$dsbl = loadall_binhluan($idpro);
$tenbl = load_ten_binhluan($iduser);
?>

<!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> -->
<div class="row">
    <div class="col-lg-6">
        <div class="comment_list">
            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                echo '<div class="review_item">
                                <div class="media">
                                    <div class="media-body">
                                        <h4>' . $tenbl . '</h4>
                                        <h5>' . $ngaybinhluan . '</h5>
                                    </div>
                                </div>
                                <p>' . $noidung . '</p>
                    </div>  ';
            }
            ?>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="review_box">
            <h4>Gửi bình luận</h4>
            <form class="row contact_form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="contactForm" novalidate="novalidate">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="idpro" value="<?= $idpro ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" name="noidung" id="message" rows="10" placeholder="Nhập nội dung muốn viết"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" name="guibinhluan" class="btn primary-btn">Gửi bình luận</button>
                </div>
            </form><?php
    if (isset($_POST['guibinhluan']) && ($_POST['noidung'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['taikhoan']['ma_nguoidung'];
        $ngaybinhluan = date('Y-m-d h:i:s');
        load_ten_binhluan($iduser);
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        echo '<script>window.location = "' . $_SERVER['HTTP_REFERER']. '";</script>';
    }
    ?>
        </div>
    </div>
    




</div>
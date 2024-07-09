<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 frmtitle mb-3">
                <h1>Danh sách sản phẩm</h1>
            </div>
        </div>

        <form action="index.php?act=listsp" method="post" class="mb-3">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <input type="text" name="kyw" id="" class="form-control" placeholder="Từ khóa...">
                </div>
                <div class="col-md-3 mb-3">
                    <select name="iddm" class="form-select">
                        <option value="0" selected>Tất cả</option>
                        <?php foreach ($listdanhmuc as $danhmuc) : ?>
                            <?php extract($danhmuc); ?>
                            <option value="<?= $id ?>"><?= $name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <input type="submit" name="listok" value="GO" class="btn btn-primary form-control">
                </div>
            </div>
        </form>

        <div class="row fromcontent">
            <div class="col-md-12 mb-3 frmdsloai table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Danh mục</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Giá Giảm</th>
                            <th>Hình </th>
                            <th>Mô tả</th>
                            <th>Số lượng theo size</th>
                            <th>Lượt xem</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listsanpham as $sanpham) : ?>
                            <?php extract($sanpham);
                            $size = loadsize_sanpham($id);
                            extract($size);
                            $suasp = "index.php?act=suasp&id=" . $id;
$xoasp = "index.php?act=xoasp&id=" . $id;
                            $hinhpath = "../upload/" . $img;
                            if ($iddm == 1) {
                                $dm = "Giày NIKE";
                            } else if ($iddm == 2) {
                                $dm = "Giày ADIDAS";
                            } else if ($iddm == 3) {
                                $dm = "Giày MIZUNO";
                            } else {
                                $dm = "Giày PUMA";
                            }
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' height='80px'>";
                            } else {
                                $hinh = "no photo";
                            }
                            ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $id ?></td>
                                <td><?= $dm ?></td>
                                <td><?= $name ?></td>
                                <td><?= $price ?></td>
                                <td><?= $sale ?>%</td>
                                <td><?= $hinh ?></td>
                                <td><?= $mota ?></td>
                                <td>Size 38: <?= $size38 ?> Size 39: <?= $size39 ?> Size 40: <?= $size40 ?> Size 41: <?= $size41 ?> Size 42: <?= $size42 ?></td>
                                <td><?= $luotxem ?></td>
                                <td>
                                    <a href="<?= $suasp ?>" class="btn btn-primary btn-sm">Sửa</a>
                                    <a href="<?= $xoasp ?>" class="btn btn-danger btn-sm">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary">Bỏ chọn tất cả</button>
                <button type="button" class="btn btn-danger">Xóa các mục đã chọn</button>
                <a href="index.php?act=addsp" class="btn btn-success">Nhập thêm</a>
            </div>
        </div>
    </div>
</body>
</html>
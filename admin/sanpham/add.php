<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm mới sản phẩm</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Thêm mới sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="iddm" class="form-label">Danh mục</label>
                        <select name="iddm" id="iddm" class="form-select">
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tensp" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="tensp" id="tensp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="giasp" class="form-label">Giá sản phẩm</label>
                        <input type="text" name="giasp" id="giasp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hinh" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" name="hinh" id="hinh" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hinhmota" class="form-label">Ảnh mô tả</label>
                        <input type="file" name="hinhmota[]" id="hinhmota" class="form-control" multiple="multiple">
                    </div>
                    <div class="mb-3">
                        <label for="giagiam" class="form-label">Giá Giảm</label>
                        <input type="text" name="giagiam" id="giagiam" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="size38" class="form-label">Nhập số lượng theo size</label><br>
                        Size 38 <input type="text" name="size38" id="size38" class="form-control mb-2">
                        Size 39 <input type="text" name="size39" id="size39" class="form-control mb-2">
                        Size 40 <input type="text" name="size40" id="size40" class="form-control mb-2">
                        Size 41 <input type="text" name="size41" id="size41" class="form-control mb-2">
                        Size 42 <input type="text" name="size42" id="size42" class="form-control mb-2">
                    </div>
                    <div class="mb-3">
                        <label for="motasp" class="form-label">Mô tả</label>
                        <textarea name="motasp" id="motasp" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="themmoi" class="btn btn-primary">Thêm mới</button>
                        <button type="reset" class="btn btn-secondary">Nhập lại</button>
                        <a href="index.php?act=listsp" class="btn btn-info">Danh sách</a>
                    </div>
                    <?php 
                    if(isset($thongbao) && ($thongbao != "")) {
                        echo '<div class="alert alert-info">'.$thongbao.'</div>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<section class="section-padding">
      <div class="container">
        <div class="text-center pb-3">
          <h3 class="mb-0 h3 fw-bold">Featured Products</h3>
          <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
        </div>
        <div class="product-thumbs">

        <?php
        foreach ($spnb as $sp) {
          extract($sp);
          $hinh = $avatar_path.$img;
          $link = "index.php?act=chitietsp&id=".$id;
        echo '
        <div class="card">
            <div class="position-relative overflow-hidden">
              <div
                class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                <a href=""><i class="bi bi-heart"></i></a>
                <a href=""><i class="bi bi-basket3"></i></a>
                <a href="index.php?act=chitietsp&id='.$id.'" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
                    class="bi bi-zoom-in"></i></a>
              </div>
              <a href="'.$link.'">
                <img src="'.$hinh.'" class="card-img-top" alt="...">
              </a>
            </div>
            <div class="card-body">
              <div class="product-info text-center">
                <h6 class="mb-1 fw-bold product-name">'.$name.'</h6>
                <div class="ratings mb-1 h6">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="mb-0 h6 fw-bold product-price">'.$price.'</p>
              </div>
            </div>
          </div>
        ';
        }
        ?>




        </div>
      </div>
    </section>

<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="section-padding">
    <div class="container">
      <div class="d-flex align-items-center px-3 py-2 border mb-4">
        <div class="text-start">
          <h4 class="mb-0 h4 fw-bold">Account - Addresses</h4>
       </div>
      </div>
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
       <div class="row">
       <?php
        include "view/boxleft.php";
        ?>


          <div class="col-12 col-xl-9">
            <div class="card rounded-0">
              <div class="card-header bg-light">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <h5 class="fw-bold mb-0">Saved Address</h5>
                    </div>
                    <div class="">
                      <button type="button" class="btn btn-ecomm" data-bs-toggle="modal" data-bs-target="#NewAddress"><i class="bi bi-plus-lg me-2"></i><a href="index.php?act=bills" style="color: black;" >Add New Address</a></button> 
                    </div>
                  </div>
              </div>
              <div class="card-body">
                <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Default Address</h6>
                <div class="card rounded-0 mb-3">
                <?php
			  extract($tk);
        echo '
        <div class="card-body">
			    <div class="d-flex flex-column flex-xl-row gap-3">
            <div class="address-info form-check flex-grow-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value = "'.$address.'" id="flexRadioDefault1" checked>
              <input type="hiden" name ="name" value="'.$user.'" hidden>
              <label class="form-check-label" for="flexRadioDefault1">
                <span class="fw-bold mb-0 h5">'.$user.'</span><br>
                '.$address.'<br>
                Mobile: <span class="text-dark fw-bold">'.$tel.'</span>
             </label>
            </div>
           <div class="d-none d-xl-block vr"></div>
           <div class="d-grid gap-2 align-self-start align-self-xl-center">
              <button type="button" class="btn btn-outline-dark px-5 btn-ecomm">Remove</button>
              <button type="button" class="btn btn-outline-dark px-5 btn-ecomm" data-bs-toggle="modal" data-bs-target="#EditAddress">Edit</button> 
           </div>
			  	</div>
			  </div>';
        ?>
                </div> 
    
                <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Other Address</h6>
                <?php
			  if($check ==[]){
 
        } else {
          foreach ($check as $ck) {
            extract($ck);
        echo '
        <div class="card rounded-0 mb-3">
        <div class="card-body">
			    <div class="d-flex flex-column flex-xl-row gap-3">
            <div class="address-info form-check flex-grow-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" value = "'.$addressother.'" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                <span class="fw-bold mb-0 h5">'.$name.'</span><br>
                '.$addressother.'<br>
                Mobile: <span class="text-dark fw-bold">'.$tel.'</span>
             </label>
            </div>
           <div class="d-none d-xl-block vr"></div>
           <div class="d-grid gap-2 align-self-start align-self-xl-center">
              <a href="index.php?act=deladdress&idadr='.$id.'"><button type="button" class="btn btn-outline-dark px-5 btn-ecomm">Remove</button></a>
              <button type="button" class="btn btn-outline-dark px-5 btn-ecomm" data-bs-toggle="modal" data-bs-target="#EditAddress">Edit</button> 
           </div>
			  	</div>
			  </div>
        </div> ';
          }
        }
        ?>
    
                <div class="card rounded-0">
                  <div class="card-body">
                  <button type="button" class="btn btn-outline-dark btn-ecomm" data-bs-toggle="modal" data-bs-target="#NewAddress"><a href="index.php?act=bills" style="color: black;" >Add New Address</a></button> 
                  </div>
                </div> 
              </div>
            </div>

    
         </div>
       </div><!--end row-->
    </div>
  </section>
   <!--start product details-->


   <!-- filter Modal -->
    <div class="modal" id="FilterOrders" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">Filter Orders</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <h6 class="mb-3 fw-bold">Status</h6>
              <div class="status-radio d-flex flex-column gap-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    All 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    On the way
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                  <label class="form-check-label" for="flexRadioDefault3">
                    Delivered
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                  <label class="form-check-label" for="flexRadioDefault4">
                    Cancelled
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                  <label class="form-check-label" for="flexRadioDefault5">
                    Returned
                  </label>
                </div>
              </div>
              <hr>
              <h6 class="mb-3 fw-bold">Time</h6>
              <div class="status-radio d-flex flex-column gap-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault6" checked>
                  <label class="form-check-label" for="flexRadioDefault6">
                    Anytime 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault7">
                  <label class="form-check-label" for="flexRadioDefault7">
                    Last 30 days
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault8">
                  <label class="form-check-label" for="flexRadioDefault8">
                    Last 6 months
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault9">
                  <label class="form-check-label" for="flexRadioDefault9">
                    Last year
                  </label>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center gap-3 w-100">
              <button type="button" class="btn btn-outline-dark btn-ecomm w-50">Clear Filters</button>
              <button type="button" class="btn btn-dark btn-ecomm w-50">Apply</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Filters Modal -->


 </div>
  <!--end page content-->

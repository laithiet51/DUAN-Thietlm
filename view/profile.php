
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
          <h4 class="mb-0 h4 fw-bold">Account - Profile</h4>
       </div>
      </div>
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
       <div class="row">
        <?php
        include "view/boxleft.php";
        ?>

          <div class="col-12 col-xl-9">
            <div class="card rounded-0">
              <div class="card-body p-lg-5">
                  <h5 class="mb-0 fw-bold">Profile Details</h5>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <?php
                          extract($tk);
                          echo '
                          <td>Full Name</td>
                          <td>'.$user.'</td>
                        </tr>
                        <tr>
                          <td>Mobile Number</td>
                          <td>'.$tel.'</td>
                        </tr>
                        <tr>
                          <td>Email ID</td>
                          <td>'.$email.'</td>
                        </tr>
                        <tr>
                          <td>Location</td>
                          <td>'.$address.'</td>
                        </tr>';
                          ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="">
                      <button type="button" class="btn btn-outline-dark btn-ecomm px-5"><i class="bi bi-pencil me-2"></i>Edit</button>
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

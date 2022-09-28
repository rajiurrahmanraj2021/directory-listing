<?php $__env->startSection('title',trans('Dashboard')); ?>
<?php $__env->startSection('content'); ?>

    <!-- main -->
    <div class="container-fluid">
        <div class="main row">
           <div class="col-12">
              <div class="row g-4 mb-4">
                 <div class="col-xl-3 col-md-6">
                    <div class="dashboard-box">
                       <h5>Listings</h5>
                       <h3>454</h3>
                       <i class="fal fa-box-open"></i>
                    </div>
                 </div>
                 <div class="col-xl-3 col-md-6">
                    <div class="dashboard-box box-2">
                       <h5>Views</h5>
                       <h3>3454</h3>
                       <i class="fal fa-box-open"></i>
                    </div>
                 </div>
                 <div class="col-xl-3 col-md-6">
                    <div class="dashboard-box box-3">
                       <h5>Products</h5>
                       <h3>54</h3>
                       <i class="fal fa-box-open"></i>
                    </div>
                 </div>
                 <div class="col-xl-3 col-md-6">
                    <div class="dashboard-box box-4">
                       <h5>Products</h5>
                       <h3>54</h3>
                       <i class="fal fa-box-open"></i>
                    </div>
                 </div>
              </div>

              <!-- charts -->
              <section class="chart-information">
                 <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                       <div class="progress-wrapper">
                          <h3>Graph Chart</h3>
                          <div
                             id="container"
                             class="apexcharts-canvas"
                          ></div>
                       </div>
                    </div>

                    <div class="col-lg-6">
                       <div class="progress-wrapper">
                          <div
                             class="progress-container d-flex flex-column flex-sm-row justify-content-around"
                          >
                             <div class="circular-progress cp_1">
                                <svg
                                   class="radial-progress"
                                   data-percentage="19"
                                   viewBox="0 0 80 80"
                                >
                                   <circle
                                      class="incomplete"
                                      cx="40"
                                      cy="40"
                                      r="35"
                                   ></circle>
                                   <circle
                                      class="complete"
                                      cx="40"
                                      cy="40"
                                      r="35"
                                      style="
                                         stroke-dashoffset: 39.58406743523136;
                                      "
                                   ></circle>
                                   <text
                                      class="percentage"
                                      x="50%"
                                      y="53%"
                                      transform="matrix(0, 1, -1, 0, 80, 0)"
                                   >
                                      19 %
                                   </text>
                                </svg>
                                <h4
                                   class="golden-text mt-4 text-center"
                                >
                                   Invest Completed
                                </h4>
                             </div>

                             <div class="circular-progress cp_3">
                                <svg
                                   class="radial-progress"
                                   data-percentage="42"
                                   viewBox="0 0 80 80"
                                >
                                   <circle
                                      class="incomplete"
                                      cx="40"
                                      cy="40"
                                      r="35"
                                   ></circle>
                                   <circle
                                      class="complete"
                                      cx="40"
                                      cy="40"
                                      r="35"
                                      style="
                                         stroke-dashoffset: 39.58406743523136;
                                      "
                                   ></circle>
                                   <text
                                      class="percentage"
                                      x="50%"
                                      y="53%"
                                      transform="matrix(0, 1, -1, 0, 80, 0)"
                                   >
                                      42 %
                                   </text>
                                </svg>

                                <h4
                                   class="golden-text mt-4 text-center"
                                >
                                   ROI Speed
                                </h4>
                             </div>

                             <div class="circular-progress cp_2">
                                <svg
                                   class="radial-progress"
                                   data-percentage="58"
                                   viewBox="0 0 80 80"
                                >
                                   <circle
                                      class="incomplete"
                                      cx="40"
                                      cy="40"
                                      r="35"
                                   ></circle>
                                   <circle
                                      class="complete"
                                      cx="40"
                                      cy="40"
                                      r="35"
                                      style="
                                         stroke-dashoffset: 147.3406954533613;
                                      "
                                   ></circle>
                                   <text
                                      class="percentage"
                                      x="50%"
                                      y="53%"
                                      transform="matrix(0, 1, -1, 0, 80, 0)"
                                   >
                                      58 %
                                   </text>
                                </svg>

                                <h4
                                   class="golden-text mt-4 text-center"
                                >
                                   ROI Redeemed
                                </h4>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </section>

              <!-- search area -->
              <div class="search-bar">
                 <div class="row g-3">
                    <div class="col-lg-3 col-md-6">
                       <div class="input-box input-group">
                          <button class="search">
                             <i class="fal fa-search"></i>
                          </button>
                          <input
                             type="text"
                             class="form-control"
                             placeholder="search"
                          />
                       </div>
                    </div>
                    <div class="input-box col-lg-3 col-md-6">
                       <select
                          class="js-example-basic-single form-control"
                          name="state"
                       >
                          <option value="Audi">Enter Location</option>
                          <option value="Bmw">Bmw</option>
                          <option value="Cadillac">Cadillac</option>
                          <option value="Dodge">Dodge</option>
                          <option value="Ferrari">Ferrari</option>
                          <option value="Hennessey">Hennessey</option>
                          <option value="Jaguar">Jaguar</option>
                       </select>
                    </div>
                    <div class="input-box col-lg-3 col-md-6">
                       <select
                          class="js-example-basic-single form-control"
                          name="state"
                       >
                          <option value="Audi">Enter Location</option>
                          <option value="Bmw">Bmw</option>
                          <option value="Cadillac">Cadillac</option>
                          <option value="Dodge">Dodge</option>
                          <option value="Ferrari">Ferrari</option>
                          <option value="Hennessey">Hennessey</option>
                          <option value="Jaguar">Jaguar</option>
                       </select>
                    </div>
                    <div class="col-lg-3 col-md-6">
                       <button class="btn-custom">search</button>
                    </div>
                 </div>
              </div>

              <!-- table -->
              <div class="table-parent table-responsive">
                 <table class="table table-striped">
                    <thead>
                       <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th class="text-end">Action</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <td>01</td>
                          <td class="company-logo">
                             <div>
                                <img
                                   src="./img/company/company-5.png"
                                   alt=""
                                />
                             </div>
                             <div>
                                hackerrank@support.com <br />
                                #04985FGJ
                             </div>
                          </td>
                          <td>Paid</td>
                          <td>$65.00</td>
                          <td class="action">
                             <div class="d-flex justify-content-end">
                                <button
                                   data-bs-toggle="modal"
                                   data-bs-target="#editModal"
                                >
                                   <i class="fal fa-pencil"></i>
                                </button>
                                <button
                                   data-bs-toggle="modal"
                                   data-bs-target="#describeModal"
                                   class="btn2"
                                >
                                   <i class="fal fa-ban"></i>
                                </button>
                             </div>
                          </td>
                       </tr>
                       <tr>
                          <td>02</td>
                          <td class="company-logo">
                             <div>
                                <img
                                   src="./img/company/company-3.png"
                                   alt=""
                                />
                             </div>
                             <div>
                                hackerrank@support.com <br />
                                #04985FGJ
                             </div>
                          </td>
                          <td>Paid</td>
                          <td>$65.00</td>
                          <td class="action">
                             <div class="d-flex justify-content-end">
                                <button
                                   data-bs-toggle="modal"
                                   data-bs-target="#editModal"
                                >
                                   <i class="fal fa-pencil"></i>
                                </button>
                                <button
                                   data-bs-toggle="modal"
                                   data-bs-target="#describeModal"
                                   class="btn2"
                                >
                                   <i class="fal fa-ban"></i>
                                </button>
                             </div>
                          </td>
                       </tr>
                       <tr>
                          <td>03</td>
                          <td class="company-logo">
                             <div>
                                <img
                                   src="./img/company/company-4.png"
                                   alt=""
                                />
                             </div>
                             <div>
                                hackerrank@support.com <br />
                                #04985FGJ
                             </div>
                          </td>
                          <td>Paid</td>
                          <td>$65.00</td>
                          <td class="action">
                             <div class="d-flex justify-content-end">
                                <button
                                   data-bs-toggle="modal"
                                   data-bs-target="#editModal"
                                >
                                   <i class="fal fa-pencil"></i>
                                </button>
                                <button
                                   data-bs-toggle="modal"
                                   data-bs-target="#describeModal"
                                   class="btn2"
                                >
                                   <i class="fal fa-ban"></i>
                                </button>
                             </div>
                          </td>
                       </tr>
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
     </div>

     <?php $__env->startPush('loadModal'); ?>
      <!-- Modal -->
      <div
         class="modal fade"
         id="editModal"
         tabindex="-1"
         aria-labelledby="editModalLabel"
         aria-hidden="true"
      >
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="editModalLabel">Modal title</h4>
                  <button
                     type="button"
                     class="close-btn"
                     data-bs-dismiss="modal"
                     aria-label="Close"
                  >
                     <i class="fal fa-times"></i>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="">
                     <div class="row g-4">
                        <div class="input-box col-12">
                           <input
                              class="form-control"
                              type="text"
                              placeholder="HLAKSJDFKLJL453"
                           />
                        </div>
                        <div class="input-box col-12">
                           <select class="form-select">
                              <option selected>BTC</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button
                     type="button"
                     class="btn-custom btn2"
                     data-bs-dismiss="modal"
                  >
                     Close
                  </button>
                  <button type="button" class="btn-custom">Save changes</button>
               </div>
            </div>
         </div>
      </div>

      <div
         class="modal fade"
         id="describeModal"
         tabindex="-1"
         aria-labelledby="describeModalLabel"
         aria-hidden="true"
      >
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="describeModalLabel">
                     Followers [Ultra-High Quality Profiles]
                  </h4>
                  <button
                     type="button"
                     class="close-btn"
                     data-bs-dismiss="modal"
                     aria-label="Close"
                  >
                     <i class="fal fa-times"></i>
                  </button>
               </div>
               <div class="modal-body">
                  <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     Sequi similique quos atque, iste quidem sit corrupti
                     repudiandae recusandae consequuntur. Rem voluptate quidem
                     ut quaerat sunt quae, veritatis enim architecto tempora!
                  </p>
               </div>
               <div class="modal-footer">
                  <button
                     type="button"
                     class="btn-custom btn2"
                     data-bs-dismiss="modal"
                  >
                     Close
                  </button>
                  <button type="button" class="btn-custom">Save changes</button>
               </div>
            </div>
         </div>
      </div>
     <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

    
<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/user/dashboard.blade.php ENDPATH**/ ?>
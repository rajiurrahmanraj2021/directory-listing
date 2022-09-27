@extends($theme.'layouts.user')
@section('title',trans('All Listing'))

@section('content')

    <!-- main -->
    <div class="container-fluid">
        <div class="main row">
           <div class="col-12">
              <div
                 class="d-flex justify-content-between align-items-center"
              >
                 <h3 class="mb-0">Listings</h3>
                 <button
                    class="btn-custom add-contact"
                    onclick="toggleContactSidebar()"
                 >
                    add Listing
                 </button>
              </div>
              <div class="switcher">
                 <button class="active">all</button>
                 <button class="">Inbox</button>
                 <button class="">scheduled</button>
                 <button class="">paid</button>
              </div>

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

     @push('loadModal')
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
     @endpush

@endsection
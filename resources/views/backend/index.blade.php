@extends('backend.layouts.master')
@section('title','Ecommerce Laravel || DASHBOARD')
@section('main-content')
 <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-primary shadow-sm">
                    <i class="bi bi-bag-check-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Total Order</span>
                    <span class="info-box-number">
                      {{\App\Models\Order::countActiveOrder()}}
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-danger shadow-sm">
                    <i class="bi bi-tag-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Products</span>
                    <span class="info-box-number">{{\App\Models\Product::countActiveProduct()}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <!-- fix for small devices only -->
              <!-- <div class="clearfix hidden-md-up"></div> -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-success shadow-sm">
                    <i class="bi bi-bookmark-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Category</span>
                    <span class="info-box-number">{{\App\Models\Category::countActiveCategory()}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Blog</span>
                    <span class="info-box-number">{{\App\Models\Post::countActivePost()}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
             <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-primary shadow-sm">
                    <i class="bi bi-bag-plus-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">New Order</span>
                    <span class="info-box-number">
                      {{\App\Models\Order::countNewReceivedOrder()}}
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-danger shadow-sm">
                    <i class="bi bi-gear-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Processing Order</span>
                    <span class="info-box-number">{{\App\Models\Order::countProcessingOrder()}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <!-- fix for small devices only -->
              <!-- <div class="clearfix hidden-md-up"></div> -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-success shadow-sm">
                    <i class="bi bi-cart-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Delivered Order</span>
                    <span class="info-box-number">{{\App\Models\Order::countDeliveredOrder()}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-x-circle-fill"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cancelled Order</span>
                    <span class="info-box-number">{{\App\Models\Order::countCancelledOrder()}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <!--begin::Row-->
            <div class="row">
              <!-- Start col -->
              <div class="col-md-8">
               
                <!--end::Row-->
                <!--begin::Latest Order Widget-->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Orders</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Popularity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR9842</a
                              >
                            </td>
                            <td>Call of Duty IV</td>
                            <td><span class="badge text-bg-success"> Shipped </span></td>
                            <td><div id="table-sparkline-1"></div></td>
                          </tr>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR1848</a
                              >
                            </td>
                            <td>Samsung Smart TV</td>
                            <td><span class="badge text-bg-warning">Pending</span></td>
                            <td><div id="table-sparkline-2"></div></td>
                          </tr>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR7429</a
                              >
                            </td>
                            <td>iPhone 6 Plus</td>
                            <td><span class="badge text-bg-danger"> Delivered </span></td>
                            <td><div id="table-sparkline-3"></div></td>
                          </tr>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR7429</a
                              >
                            </td>
                            <td>Samsung Smart TV</td>
                            <td><span class="badge text-bg-info">Processing</span></td>
                            <td><div id="table-sparkline-4"></div></td>
                          </tr>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR1848</a
                              >
                            </td>
                            <td>Samsung Smart TV</td>
                            <td><span class="badge text-bg-warning">Pending</span></td>
                            <td><div id="table-sparkline-5"></div></td>
                          </tr>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR7429</a
                              >
                            </td>
                            <td>iPhone 6 Plus</td>
                            <td><span class="badge text-bg-danger"> Delivered </span></td>
                            <td><div id="table-sparkline-6"></div></td>
                          </tr>
                          <tr>
                            <td>
                              <a
                                href="pages/examples/invoice.html"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                >OR9842</a
                              >
                            </td>
                            <td>Call of Duty IV</td>
                            <td><span class="badge text-bg-success">Shipped</span></td>
                            <td><div id="table-sparkline-7"></div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                      Place New Order
                    </a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                      View All Orders
                    </a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
           
               
                <!-- PRODUCT LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Recently Added Products</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="px-2">
                      <div class="d-flex border-top py-2 px-1">
                        <div class="col-2">
                          <img
                            src="./assets/img/default-150x150.png"
                            alt="Product Image"
                            class="img-size-50"
                          />
                        </div>
                        <div class="col-10">
                          <a href="javascript:void(0)" class="fw-bold">
                            Samsung TV
                            <span class="badge text-bg-warning float-end"> $1800 </span>
                          </a>
                          <div class="text-truncate">Samsung 32" 1080p 60Hz LED Smart HDTV.</div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <div class="d-flex border-top py-2 px-1">
                        <div class="col-2">
                          <img
                            src="./assets/img/default-150x150.png"
                            alt="Product Image"
                            class="img-size-50"
                          />
                        </div>
                        <div class="col-10">
                          <a href="javascript:void(0)" class="fw-bold">
                            Bicycle
                            <span class="badge text-bg-info float-end"> $700 </span>
                          </a>
                          <div class="text-truncate">
                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <div class="d-flex border-top py-2 px-1">
                        <div class="col-2">
                          <img
                            src="./assets/img/default-150x150.png"
                            alt="Product Image"
                            class="img-size-50"
                          />
                        </div>
                        <div class="col-10">
                          <a href="javascript:void(0)" class="fw-bold">
                            Xbox One
                            <span class="badge text-bg-danger float-end"> $350 </span>
                          </a>
                          <div class="text-truncate">
                            Xbox One Console Bundle with Halo Master Chief Collection.
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <div class="d-flex border-top py-2 px-1">
                        <div class="col-2">
                          <img
                            src="./assets/img/default-150x150.png"
                            alt="Product Image"
                            class="img-size-50"
                          />
                        </div>
                        <div class="col-10">
                          <a href="javascript:void(0)" class="fw-bold">
                            PlayStation 4
                            <span class="badge text-bg-success float-end"> $399 </span>
                          </a>
                          <div class="text-truncate">PlayStation 4 500GB Console (PS4)</div>
                        </div>
                      </div>
                      <!-- /.item -->
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="uppercase"> View All Products </a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>

      @endsection
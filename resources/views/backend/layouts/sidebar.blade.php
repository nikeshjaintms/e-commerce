  <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Admin</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
             <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >

              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                <a class="nav-link" href="{{route('admin')}}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <span>Dashboard</span></a>
              </li>
              <li class="nav-header">Banner</li>
              <li class="nav-item">
                <a href="{{route('file-manager')}}" class="nav-link">
                  <i class="nav-icon bi bi-journal"></i>
                  <p>
                    Media Manager
                  </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-card-image"></i>
                  <p>
                    Banners
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('banner.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Banners</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('banner.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Banners</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">Shop</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-diagram-2-fill"></i>
                  <p>
                    Category
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('category.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-boxes"></i>
                  <p>
                    Products
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('product.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Products</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{route('product.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Product</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-file-earmark-spreadsheet-fill"></i>
                  <p>
                    Brands
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('brand.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Brands</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{route('brand.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Brand</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-truck"></i>
                  <p>
                    Shipping
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('shipping.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Shipping</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{route('shipping.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Shipping</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{route('order.index')}}" class="nav-link">
                  <i class="nav-icon bi bi-cart-plus-fill"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('review.index')}}" class="nav-link">
                  <i class="nav-icon bi bi-card-checklist"></i>
                  <p>Reviews</p>
                </a>
              </li>
              <li class="nav-header">Posts</li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-file-post-fill"></i>
                  <p>
                    Posts
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Posts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('post.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Post</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-diagram-3-fill"></i>
                  <p>
                    Category
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('post-category.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Category</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{route('post-category.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-tags-fill"></i>
                  <p>
                    Tags
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('post-tag.index')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Tag</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{route('post-tag.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Tag</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{route('comment.index')}}" class="nav-link">
                  <i class="nav-icon bi bi-chat-text-fill"></i>
                  <p>Comments</p>
                </a>
              </li>
              <li class="nav-header">General Settings</li>
              <li class="nav-item">
                <a href="{{route('coupon.index')}}" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>Coupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">
                  <i class="nav-icon bi bi-people-fill"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('settings')}}" class="nav-link">
                  <i class="nav-icon bi bi-gear-fill"></i>
                  <p>Settings</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>

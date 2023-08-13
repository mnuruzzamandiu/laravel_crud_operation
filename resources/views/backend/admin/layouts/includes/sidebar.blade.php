<aside class="app-sidebar" id="sidebar">
    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
      <a href="index.html" class="header-logo">
        <img
          src="{{asset('contents/backend/admin')}}/assets/images/desktop-logo.png"
          alt="logo"
          class="desktop-logo"
        />
        <img
          src="{{asset('contents/backend/admin')}}/assets/images/toggle-logo.png"
          alt="logo"
          class="toggle-logo"
        />

      </a>
    </div>
    <!-- End::main-sidebar-header -->
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: -8px 0px -80px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              class="simplebar-content-wrapper"
              tabindex="0"
              role="region"
              aria-label="scrollable content"
              style="height: 100%; overflow: hidden scroll"
            >
              <div class="simplebar-content" style="padding: 8px 0px 80px">
                <!-- Start::nav -->
                <nav
                  class="main-menu-container nav nav-pills flex-column sub-open open active"
                >
                  <div class="slide-left active d-none" id="slide-left">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="#7b8191"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                      ></path>
                    </svg>
                  </div>
                  <ul
                    class="main-menu"
                    style="
                      display: block;
                      margin-left: 0px;
                      margin-right: 0px;
                    "
                  >

                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide active">
                        <a href="{{ route('admin.dashboard') }}" class="side-menu__item active">
                          <span class="side-menu__icon">
                            <i class="bx bx-desktop"></i>
                          </span>
                          <span class="side-menu__label">Dashboard</span>
                        </a>
                      </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category">
                      <span class="category-name">General</span>
                    </li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-cube"></i>
                        </span>
                        <span class="side-menu__label">Advanced Ui</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 642.5px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Advanced Ui</a>
                        </li>
                        <li class="slide">
                          <a
                            href="accordions_collpase.html"
                            class="side-menu__item"
                            >Accordions &amp; Collapse</a
                          >
                        </li>
                        <li class="slide">
                          <a href="carousel.html" class="side-menu__item"
                            >Carousel</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="draggable-cards.html"
                            class="side-menu__item"
                            >Draggable Cards</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="modals_closes.html"
                            class="side-menu__item"
                            >Modals &amp; Closes</a
                          >
                        </li>
                        <li class="slide">
                          <a href="navbar.html" class="side-menu__item"
                            >Navbar</a
                          >
                        </li>
                        <li class="slide">
                          <a href="offcanvas.html" class="side-menu__item"
                            >Offcanvas</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="placeholders.html"
                            class="side-menu__item"
                            >Placeholders</a
                          >
                        </li>
                        <li class="slide">
                          <a href="ratings.html" class="side-menu__item"
                            >Ratings</a
                          >
                        </li>
                        <li class="slide">
                          <a href="scrollspy.html" class="side-menu__item"
                            >Scrollspy</a
                          >
                        </li>
                        <li class="slide">
                          <a href="swiperjs.html" class="side-menu__item"
                            >Swiper JS</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category">
                      <span class="category-name">Pages</span>
                    </li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-food-menu"></i>
                        </span>
                        <span class="side-menu__label">Pages</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 737.5px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Blog
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a href="blog.html" class="side-menu__item"
                                >Blog</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="blog-details.html"
                                class="side-menu__item"
                                >Blog Details</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="blog-create.html"
                                class="side-menu__item"
                                >Create Blog</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a href="chat.html" class="side-menu__item"
                            >Chat</a
                          >
                        </li>
                        <li class="slide">
                          <a href="contacts.html" class="side-menu__item"
                            >Contacts</a
                          >
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Ecommerce
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="add-products.html"
                                class="side-menu__item"
                                >Add Products</a
                              >
                            </li>
                            <li class="slide">
                              <a href="cart.html" class="side-menu__item"
                                >Cart</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="checkout.html"
                                class="side-menu__item"
                                >Checkout</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="edit-products.html"
                                class="side-menu__item"
                                >Edit Products</a
                              >
                            </li>
                            <li class="slide">
                              <a href="orders.html" class="side-menu__item"
                                >Orders</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="order-details.html"
                                class="side-menu__item"
                                >Order Details</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="products.html"
                                class="side-menu__item"
                                >Products</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="product-details.html"
                                class="side-menu__item"
                                >Product Details</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="products-list.html"
                                class="side-menu__item"
                                >Products List</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="wishlist.html"
                                class="side-menu__item"
                                >Wishlist</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Email
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a href="mail.html" class="side-menu__item"
                                >Mail App</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="mail-chat.html"
                                class="side-menu__item"
                                >Mail-chat</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="mail-settings.html"
                                class="side-menu__item"
                                >Mail Settings</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a href="empty.html" class="side-menu__item"
                            >Empty</a
                          >
                        </li>
                        <li class="slide">
                          <a href="faq's.html" class="side-menu__item"
                            >FAQ's</a
                          >
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >File Manager
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="file-manager.html"
                                class="side-menu__item"
                                >File Manager</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="file-details.html"
                                class="side-menu__item"
                                >File Details</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Invoice
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="invoice-create.html"
                                class="side-menu__item"
                                >Create Invoice</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="invoice-details.html"
                                class="side-menu__item"
                                >Invoice Details</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="invoice-list.html"
                                class="side-menu__item"
                                >Invoice List</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Timeline
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="timeline.html"
                                class="side-menu__item"
                                >Timeline-1</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="timeline2.html"
                                class="side-menu__item"
                                >Timeline-2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a href="landing.html" class="side-menu__item"
                            >Landing</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="notifications.html"
                            class="side-menu__item"
                            >Notifications</a
                          >
                        </li>
                        <li class="slide">
                          <a href="pricing.html" class="side-menu__item"
                            >Pricing</a
                          >
                        </li>
                        <li class="slide">
                          <a href="profile.html" class="side-menu__item"
                            >Profile</a
                          >
                        </li>
                        <li class="slide">
                          <a href="reviews.html" class="side-menu__item"
                            >Reviews</a
                          >
                        </li>
                        <li class="slide">
                          <a href="team.html" class="side-menu__item"
                            >Team</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="terms_conditions.html"
                            class="side-menu__item"
                            >Terms &amp; Conditions</a
                          >
                        </li>
                        <li class="slide">
                          <a href="to-do-list.html" class="side-menu__item"
                            >To Do List</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-magnet"></i>
                        </span>
                        <span class="side-menu__label">Utilities</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 780px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Utilities</a>
                        </li>
                        <li class="slide">
                          <a href="avatars.html" class="side-menu__item"
                            >Avatars</a
                          >
                        </li>
                        <li class="slide">
                          <a href="borders.html" class="side-menu__item"
                            >Borders</a
                          >
                        </li>
                        <li class="slide">
                          <a href="breakpoints.html" class="side-menu__item"
                            >Breakpoints</a
                          >
                        </li>
                        <li class="slide">
                          <a href="colors.html" class="side-menu__item"
                            >Colors</a
                          >
                        </li>
                        <li class="slide">
                          <a href="columns.html" class="side-menu__item"
                            >Columns</a
                          >
                        </li>
                        <li class="slide">
                          <a href="flex.html" class="side-menu__item"
                            >Flex</a
                          >
                        </li>
                        <li class="slide">
                          <a href="gutters.html" class="side-menu__item"
                            >Gutters</a
                          >
                        </li>
                        <li class="slide">
                          <a href="helpers.html" class="side-menu__item"
                            >Helpers</a
                          >
                        </li>
                        <li class="slide">
                          <a href="position.html" class="side-menu__item"
                            >Position</a
                          >
                        </li>
                        <li class="slide">
                          <a href="more.html" class="side-menu__item"
                            >Additional Content</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-lock-alt"></i>
                        </span>
                        <span class="side-menu__label">Authentication</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 822.5px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Authentication</a>
                        </li>
                        <li class="slide">
                          <a href="coming-soon.html" class="side-menu__item"
                            >Coming Soon</a
                          >
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Create Password
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="create-password-basic.html"
                                class="side-menu__item"
                                >Basic</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="create-password-cover.html"
                                class="side-menu__item"
                                >Cover</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="create-password-cover2.html"
                                class="side-menu__item"
                                >Cover2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Lock Screen
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="lockscreen-basic.html"
                                class="side-menu__item"
                                >Basic</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="lockscreen-cover.html"
                                class="side-menu__item"
                                >Cover</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="lockscreen-cover2.html"
                                class="side-menu__item"
                                >Cover2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Reset Password
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="reset-password-basic.html"
                                class="side-menu__item"
                                >Basic</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="reset-password-cover.html"
                                class="side-menu__item"
                                >Cover</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="reset-password-cover2.html"
                                class="side-menu__item"
                                >Cover2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Sign Up
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="sign-up-basic.html"
                                class="side-menu__item"
                                >Basic</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="sign-up-cover.html"
                                class="side-menu__item"
                                >Cover</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="sign-up-cover2.html"
                                class="side-menu__item"
                                >Cover2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Sign In
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="sign-in-basic.html"
                                class="side-menu__item"
                                >Basic</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="sign-in-cover.html"
                                class="side-menu__item"
                                >Cover</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="sign-in-cover2.html"
                                class="side-menu__item"
                                >Cover2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Two Step Verification
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="two-step-verification-basic.html"
                                class="side-menu__item"
                                >Basic</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="two-step-verification-cover.html"
                                class="side-menu__item"
                                >Cover</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="two-step-verification-cover2.html"
                                class="side-menu__item"
                                >Cover2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a
                            href="under-maintenance.html"
                            class="side-menu__item"
                            >Under Maintenance</a
                          >
                        </li>
                        <li class="slide">
                          <a href="no-internet.html" class="side-menu__item"
                            >no-internet</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-error-alt"></i>
                        </span>
                        <span class="side-menu__label">Error</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 865px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Error</a>
                        </li>
                        <li class="slide">
                          <a href="401-error.html" class="side-menu__item"
                            >401 - Error</a
                          >
                        </li>
                        <li class="slide">
                          <a href="404-error.html" class="side-menu__item"
                            >404 - Error</a
                          >
                        </li>
                        <li class="slide">
                          <a href="500-error.html" class="side-menu__item"
                            >500 - Error</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-carousel"></i>
                        </span>
                        <span class="side-menu__label">Apps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 907.5px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Apps</a>
                        </li>
                        <li class="slide">
                          <a
                            href="full-calendar.html"
                            class="side-menu__item"
                            >Full Calendar</a
                          >
                        </li>
                        <li class="slide">
                          <a href="gallery.html" class="side-menu__item"
                            >Gallery</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="sweet_alerts.html"
                            class="side-menu__item"
                            >Sweet Alerts</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                      <a href="icons.html" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-smile"></i>
                        </span>
                        <span class="side-menu__label">Icons</span>
                      </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                      <a href="widgets.html" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-layout"></i>
                        </span>
                        <span class="side-menu__label"
                          >Widgets<span
                            class="badge bg-danger-transparent ms-2"
                            >Hot</span
                          ></span
                        >
                      </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category">
                      <span class="category-name">Web Apps</span>
                    </li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-underline"></i>
                        </span>
                        <span class="side-menu__label">Ui Elements</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1 mega-menu"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1087.5px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Ui Elements</a>
                        </li>
                        <li class="slide">
                          <a href="alerts.html" class="side-menu__item"
                            >Alerts</a
                          >
                        </li>
                        <li class="slide">
                          <a href="badge.html" class="side-menu__item"
                            >Badge</a
                          >
                        </li>
                        <li class="slide">
                          <a href="breadcrumb.html" class="side-menu__item"
                            >Breadcrumb</a
                          >
                        </li>
                        <li class="slide">
                          <a href="buttons.html" class="side-menu__item"
                            >Buttons</a
                          >
                        </li>
                        <li class="slide">
                          <a href="buttongroup.html" class="side-menu__item"
                            >Button Group</a
                          >
                        </li>
                        <li class="slide">
                          <a href="cards.html" class="side-menu__item"
                            >Cards</a
                          >
                        </li>
                        <li class="slide">
                          <a href="dropdowns.html" class="side-menu__item"
                            >Dropdowns</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="images_figures.html"
                            class="side-menu__item"
                            >Images &amp; Figures</a
                          >
                        </li>
                        <li class="slide">
                          <a href="listgroup.html" class="side-menu__item"
                            >List Group</a
                          >
                        </li>
                        <li class="slide">
                          <a href="navs_tabs.html" class="side-menu__item"
                            >Navs &amp; Tabs</a
                          >
                        </li>
                        <li class="slide">
                          <a href="object-fit.html" class="side-menu__item"
                            >Object Fit</a
                          >
                        </li>
                        <li class="slide">
                          <a href="pagination.html" class="side-menu__item"
                            >Pagination</a
                          >
                        </li>
                        <li class="slide">
                          <a href="popovers.html" class="side-menu__item"
                            >Popovers</a
                          >
                        </li>
                        <li class="slide">
                          <a href="progress.html" class="side-menu__item"
                            >Progress</a
                          >
                        </li>
                        <li class="slide">
                          <a href="spinners.html" class="side-menu__item"
                            >Spinners</a
                          >
                        </li>
                        <li class="slide">
                          <a href="toasts.html" class="side-menu__item"
                            >Toasts</a
                          >
                        </li>
                        <li class="slide">
                          <a href="tooltips.html" class="side-menu__item"
                            >Tooltips</a
                          >
                        </li>
                        <li class="slide">
                          <a href="typography.html" class="side-menu__item"
                            >Typography</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-menu"></i>
                        </span>
                        <span class="side-menu__label">Nested Menu</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1128.75px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Nested Menu</a>
                        </li>
                        <li class="slide">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Nested-1</a
                          >
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Nested-2
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Nested-2-1</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Nested-2-2
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child3">
                                <li class="slide">
                                  <a
                                    href="javascript:void(0);"
                                    class="side-menu__item"
                                    >Nested-2-2-1</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="javascript:void(0);"
                                    class="side-menu__item"
                                    >Nested-2-2-2</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category">
                      <span class="category-name">Maps &amp; Charts</span>
                    </li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-map-pin"></i>
                        </span>
                        <span class="side-menu__label">Maps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1225px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Maps</a>
                        </li>
                        <li class="slide">
                          <a href="google-maps.html" class="side-menu__item"
                            >Google Maps</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="leaflet-maps.html"
                            class="side-menu__item"
                            >Leaflet Maps</a
                          >
                        </li>
                        <li class="slide">
                          <a href="vector-maps.html" class="side-menu__item"
                            >Vector Maps</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-scatter-chart"></i>
                        </span>
                        <span class="side-menu__label">Charts</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1267.5px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Charts</a>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Apex Charts
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="apex-line-charts.html"
                                class="side-menu__item"
                                >Line Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-area-charts.html"
                                class="side-menu__item"
                                >Area Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-column-charts.html"
                                class="side-menu__item"
                                >Column Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-bar-charts.html"
                                class="side-menu__item"
                                >Bar Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-mixed-charts.html"
                                class="side-menu__item"
                                >Mixed Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-rangearea-charts.html"
                                class="side-menu__item"
                                >Range Area Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-timeline-charts.html"
                                class="side-menu__item"
                                >Timeline Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-candlestick-charts.html"
                                class="side-menu__item"
                                >CandleStick Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-boxplot-charts.html"
                                class="side-menu__item"
                                >Boxplot Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-bubble-charts.html"
                                class="side-menu__item"
                                >Bubble Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-scatter-charts.html"
                                class="side-menu__item"
                                >Scatter Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-heatmap-charts.html"
                                class="side-menu__item"
                                >Heatmap Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-treemap-charts.html"
                                class="side-menu__item"
                                >Treemap Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-pie-charts.html"
                                class="side-menu__item"
                                >Pie Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-radialbar-charts.html"
                                class="side-menu__item"
                                >Radialbar Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-radar-charts.html"
                                class="side-menu__item"
                                >Radar Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="apex-polararea-charts.html"
                                class="side-menu__item"
                                >Polararea Charts</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a
                            href="chartjs-charts.html"
                            class="side-menu__item"
                            >Chartjs Charts</a
                          >
                        </li>
                        <li class="slide">
                          <a href="echarts.html" class="side-menu__item"
                            >Echart Charts</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category">
                      <span class="category-name">Forms &amp; Tables </span>
                    </li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-file"></i>
                        </span>
                        <span class="side-menu__label">Forms</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1362.5px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Forms</a>
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Form Elements
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="form_inputs.html"
                                class="side-menu__item"
                                >Inputs</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_check_radios.html"
                                class="side-menu__item"
                                >Checks &amp; Radios</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_input_group.html"
                                class="side-menu__item"
                                >Input Group</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_select.html"
                                class="side-menu__item"
                                >Form Select</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_range.html"
                                class="side-menu__item"
                                >Range Slider</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_input_masks.html"
                                class="side-menu__item"
                                >Input Masks</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_file_uploads.html"
                                class="side-menu__item"
                                >File Uploads</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_dateTime_pickers.html"
                                class="side-menu__item"
                                >Date,color Picker</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a
                            href="floating_labels.html"
                            class="side-menu__item"
                            >Floating Labels</a
                          >
                        </li>
                        <li class="slide">
                          <a href="form_layout.html" class="side-menu__item"
                            >Form Layouts</a
                          >
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Form Editors
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="quill_editor.html"
                                class="side-menu__item"
                                >Quill Editor</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="slide">
                          <a
                            href="form_validation.html"
                            class="side-menu__item"
                            >Validation</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="form_select2.html"
                            class="side-menu__item"
                            >Select2</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-table"></i>
                        </span>
                        <span class="side-menu__label"
                          >Tables<span
                            class="badge bg-success-transparent ms-2"
                            >3</span
                          ></span
                        >
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1405px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Tables</a>
                        </li>
                        <li class="slide">
                          <a href="tables.html" class="side-menu__item"
                            >Tables</a
                          >
                        </li>
                        <li class="slide">
                          <a href="grid-tables.html" class="side-menu__item"
                            >Grid JS Tables</a
                          >
                        </li>
                        <li class="slide">
                          <a href="data-tables.html" class="side-menu__item"
                            >Data Tables</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!-- End::slide -->
                  </ul>
                  <div class="slide-right d-none" id="slide-right">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="#7b8191"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                      ></path>
                    </svg>
                  </div>
                </nav>
                <!-- End::nav -->
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: auto; height: 1462px"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar"
          style="
            width: 0px;
            transform: translate3d(0px, 0px, 0px);
            display: none;
          "
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-vertical"
        style="visibility: visible"
      >
        <div
          class="simplebar-scrollbar"
          style="
            height: 25px;
            transform: translate3d(0px, 0px, 0px);
            display: block;
          "
        ></div>
      </div>
    </div>
    <!-- End::main-sidebar -->
  </aside>

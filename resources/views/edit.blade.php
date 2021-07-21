<!DOCTYPE HTML>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    Tes Implementasi KP
  </title>

  <!-- bootsrap -->

  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-feathericons/dist/feather.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-linearicons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-icomoon/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/chart.js/dist/Chart.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/c3/c3.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.css" />
  <link rel="stylesheet" type="text/css"
    href="{{ asset('vendors/tempus-dominus-bs4/build/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fullcalendar/dist/fullcalendar.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/ionrangeslider/css/ion.rangeSlider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-sweetalert/dist/sweetalert.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/nprogress/nprogress.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/summernote/dist/summernote.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/dropify/dist/css/dropify.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jquery-steps/demo/css/jquery.steps.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">


  <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendors/popper.js/dist/umd/popper.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.js') }}"></script>
  <script src="{{ asset('vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
  <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
  <script src="{{ asset('vendors/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('vendors/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.usa.js') }}"></script>
  <script src="{{ asset('vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
  <script src="{{ asset('vendors/d3/d3.min.js') }}"></script>
  <script src="{{ asset('vendors/d3-dsv/dist/d3-dsv.js') }}"></script>
  <script src="{{ asset('vendors/d3-time-format/dist/d3-time-format.js') }}"></script>
  <script src="{{ asset('vendors/c3/c3.min.js') }}"></script>
  <script src="{{ asset('vendors/peity/jquery.peity.min.js') }}"></script>
  <script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.js"></script>
  <script src="{{ asset('vendors/editable-table/mindmup-editabletable.js') }}"></script>
  <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('vendors/tempus-dominus-bs4/build/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <script src="{{ asset('vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendors/ionrangeslider/js/ion.rangeSlider.min.js') }}"></script>
  <script src="{{ asset('vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-sweetalert/dist/sweetalert.min.js') }}"></script>
  <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
  <script src="{{ asset('vendors/summernote/dist/summernote.min.js') }}"></script>
  <script src="{{ asset('vendors/nestable/jquery.nestable.js') }}"></script>
  <script src="{{ asset('vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
  <script src="{{ asset('vendors/autosize/dist/autosize.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-show-password/dist/bootstrap-show-password.min.js') }}"></script>
  <script src="{{ asset('vendors/dropify/dist/js/dropify.min.js') }}"></script>
  <script src="{{ asset('vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
  <script src="{{ asset('vendors/jquery-steps/build/jquery.steps.min.js') }}"></script>
  <script src="{{ asset('vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

  <!-- AIR UI HTML ADMIN TEMPLATE MODULES-->
  <!-- v1.0.0 -->
  <link rel="stylesheet" type="text/css" href="{{ asset('components/vendors/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/core/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/widgets/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/system/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/menu-left/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/menu-top/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/footer/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/topbar/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/subbar/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/sidebar/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/chat/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/apps/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/apps/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/extra-apps/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('components/ecommerce/style.css') }}">

  <script src="{{ asset('components/core/index.js') }}"></script>
  <script src="{{ asset('components/menu-left/index.js') }}"></script>
  <script src="{{ asset('components/menu-top/index.js') }}"></script>
  <script src="{{ asset('components/sidebar/index.js') }}"></script>
  <script src="{{ asset('components/topbar/index.js') }}"></script>
  <script src="{{ asset('components/chat/index.js') }}"></script>

</head>
<body class="air__menu--gray">
 <div class="air__initialLoading"></div>
  <div class="air__layout air__layout--hasSider">
    <div class="air__menuLeft">
      <div class="air__menuLeft__outer">
        <div class="air__menuLeft__mobileToggleButton air__menuLeft__mobileActionToggle">
          <span></span>
        </div>
        <div class="air__menuLeft__toggleButton air__menuLeft__actionToggle">
          <span></span>
          <span></span>
        </div>
        <a href="javascript: void(0);" class="air__menuLeft__logo">
          <img src="../../components/core/img/air-logo.png" alt="Air UI" />
          <div class="air__menuLeft__logo__name">KP Tes</div>
          <div class="air__menuLeft__logo__descr">DRI 2021 LAC</div>
        </a>
        <a href="javascript: void(0);" class="air__menuLeft__user">
          <div class="air__menuLeft__user__avatar">
            <img src="../../components/core/img/avatars/avatar.png" alt="David Beckham" />
          </div>
          <div class="air__menuLeft__user__name">
            Faishal
          </div>
          <div class="air__menuLeft__user__role">
            Barra
          </div>
        </a>
        <div class="air__menuLeft__container air__customScroll">
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__item air__menuLeft__submenu">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>Tables</span>
              </a>
              <ul class="air__menuLeft__list">
                <li class="air__menuLeft__item">
                  <a href="tables-bootstrap-tables.html" class="air__menuLeft__link">
                    <span>Bootstrap Tables</span>
                  </a>
                </li>
                <li class="air__menuLeft__item">
                  <a href="tables-datatables.html" class="air__menuLeft__link">
                    <span>DataTables</span>
                  </a>
                </li>
                <li class="air__menuLeft__item">
                  <a href="tables-editable-tables.html" class="air__menuLeft__link">
                    <span>Editable Tables</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="air__menuLeft__backdrop air__menuLeft__mobileActionToggle"></div>
    <div class="air__sidebar">
      <div class="air__utils__line mb-4" style="margin-top: 19px;"></div>
    </div>
    <div class="air__layout">
      <div class="air__layout__header">
        <div class="air__utils__header">
          <div class="air__topbar">
            <div class="air__topbar__searchDropdown dropdown mr-md-4 mr-auto">
              <div class="air__topbar__search dropdown-toggle" data-toggle="dropdown" data-offset="5,15">
                <div class="air__topbar__searchContainer">
                  <i class="air__topbar__searchIcon fe fe-search"></i>
                  <input
                    class="air__topbar__searchInput"
                    type="text"
                    placeholder="Start typing to search..."
                  />
                </div>
              </div>
            </div>
            <div class="dropdown mr-auto d-none d-md-block">
              <a
                href=""
                class="dropdown-toggle text-nowrap"
                data-toggle="dropdown"
                aria-expanded="false"
                data-offset="0,15"
              >
                <i class="dropdown-toggle-icon fe fe-book-open"></i>
                <span class="dropdown-toggle-text">Issues History</span>
              </a>
            </div>
            <p class="mb-0 mr-4 d-xl-block d-none">
              Status
              <span class="ml-1 badge bg-danger text-white font-size-12 text-uppercase air__topbar__status"
                >Trialing</span
              >
            </p>
            <div class="air__topbar__actionsDropdown dropdown mr-4 d-none d-sm-block">
              <a
                href=""
                class="dropdown-toggle text-nowrap"
                data-toggle="dropdown"
                aria-expanded="false"
                data-offset="0,15"
              >
                <i class="dropdown-toggle-icon fe fe-menu"></i>
                <span class="dropdown-toggle-text">Actions</span>
              </a>
              <div class="air__topbar__actionsDropdownMenu dropdown-menu dropdown-menu-right" role="menu">
                <div class="card-header card-header-flex">
                  <ul
                    class="nav nav-tabs nav-tabs-line nav-tabs-line-bold nav-tabs-noborder nav-tabs-stretched flex-nowrap"
                  >
                    <li class="nav-item" role="tablist">
                      <a
                        href="#tab-alert-content"
                        class="nav-link active"
                        id="tab-alert"
                        data-toggle="tab"
                        aria-selected="true"
                      >
                        Alerts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="#tab-events-content"
                        class="nav-link"
                        id="tab-events"
                        data-toggle="tab"
                        aria-selected="false"
                      >
                        Events
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="#tab-actions-content"
                        class="nav-link"
                        id="tab-actions"
                        data-toggle="tab"
                        aria-selected="false"
                      >
                        Actions
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="height-300 air__customScroll">
                    <div class="tab-content">
                      <div
                        class="tab-pane fade show active"
                        id="tab-alert-content"
                        role="tabpanel"
                        aria-labelledby="tab-alert-content"
                      >
                        <div class="width-250">
                          No Alert
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="tab-events-content"
                        role="tabpanel"
                        aria-labelledby="tab-alert-content"
                      >
                        <div class="width-250">
                          No Events
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="tab-actions-content"
                        role="tabpanel"
                        aria-labelledby="tab-alert-content"
                      >
                        <div class="width-250">
                          No Actions
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown">
                <img
                  class="dropdown-toggle-avatar"
                  src="../../components/core/img/avatars/avatar-2.png"
                  alt="User avatar"
                />
              </a>
            </div>
          </div>
          <div class="air__subbar">
            <div class="air__subbar__amount mr-3 ml-auto d-none d-sm-flex">
              <p class="air__subbar__amountText">
                This month
                <span class="air__subbar__amountValue">$251.12</span>
              </p>
              <div class="air__subbar__amountGraph">
                <i class="air__subbar__amountGraphItem" style="height: 10%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 20%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 15%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 5%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 10%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 25%"></i>
              </div>
            </div>
            <div class="air__subbar__amount d-none d-sm-flex">
              <p class="air__subbar__amountText">
                Last month
                <span class="air__subbar__amountValue">$12,256.12</span>
              </p>
              <div class="air__subbar__amountGraph">
                <i class="air__subbar__amountGraphItem" style="height: 10%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 25%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 15%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 20%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 10%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 15%"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="air__layout__content">
        <div class="air__utils__content">
          <div class="air__utils__heading">
  <h5>
    <span class="mr-3">edit data</span>
  </h5>
</div>
 <div class="card">
  <div class="card-body">
    <h4 class="mb-4">
      <strong>Basic Responsive Table</strong>
    </h4>
    @foreach($dataujian as $ujian)
    <form action="/update" method="POST">
      @csrf 
      <input type="hidden" name="Nim" value="{{ $ujian->Nim }}"> <br/>
      Nama <input type="text" required="required" name="Nama" value="{{ $ujian->Nama }}"> <br/>
      Nim <input type="number" required="required" name="Nim" value="{{ $ujian->Nim }}"> <br/>
      Jurusan <input type="text" required="required" name="Jurusan" value="{{ $ujian->Jurusan }}"> <br/>
      Ujian <input type="text" required="required" name="Ujian" value="{{ $ujian->Ujian }}"> <br/>
    <input type="submit" value="Simpan Data">
  </form>
  @endforeach
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
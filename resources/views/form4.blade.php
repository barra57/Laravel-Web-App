<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    Language Center
  </title>
  <link href="../../components/core/img/TelULogo.png" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900" rel="stylesheet">

 <!-- VENDORS -->
  <!-- v1.0.0 -->
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

<!-- PRELOADER STYLES-->
  <style>
    .air__initialLoading {
      position: fixed;
      z-index: 99999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center center;
      background-repeat: no-repeat;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDFweCIgIGhlaWdodD0iNDFweCIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIiBjbGFzcz0ibGRzLXJvbGxpbmciPiAgICA8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiBmaWxsPSJub25lIiBuZy1hdHRyLXN0cm9rZT0ie3tjb25maWcuY29sb3J9fSIgbmctYXR0ci1zdHJva2Utd2lkdGg9Int7Y29uZmlnLndpZHRofX0iIG5nLWF0dHItcj0ie3tjb25maWcucmFkaXVzfX0iIG5nLWF0dHItc3Ryb2tlLWRhc2hhcnJheT0ie3tjb25maWcuZGFzaGFycmF5fX0iIHN0cm9rZT0iIzAxOTBmZSIgc3Ryb2tlLXdpZHRoPSIxMCIgcj0iMzUiIHN0cm9rZS1kYXNoYXJyYXk9IjE2NC45MzM2MTQzMTM0NjQxNSA1Ni45Nzc4NzE0Mzc4MjEzOCIgdHJhbnNmb3JtPSJyb3RhdGUoODQgNTAgNTApIj4gICAgICA8YW5pbWF0ZVRyYW5zZm9ybSBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iIHR5cGU9InJvdGF0ZSIgY2FsY01vZGU9ImxpbmVhciIgdmFsdWVzPSIwIDUwIDUwOzM2MCA1MCA1MCIga2V5VGltZXM9IjA7MSIgZHVyPSIxcyIgYmVnaW49IjBzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSI+PC9hbmltYXRlVHJhbnNmb3JtPiAgICA8L2NpcmNsZT4gIDwvc3ZnPg==);
      background-color: #fff;
    }
  </style>
  <script>
    $(document).ready(function () {
      $('.air__initialLoading').delay(200).fadeOut(400)
    })
  </script>
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
          <img src="../../components/core/img/logoTelu-small.png" />
        </a>
          <a href="javascript: void(0);" class="air__menuLeft__user">
            <div class="air__menuLeft__user__avatar">
              <img src="../../components/core/img/avatars/avatar.png" alt="David Beckham" />
            </div>
            <div class="air__menuLeft__user__name">
              {{ Auth::user()->name }}
            </div>
            <div class="air__menuLeft__user__role">
              as USER
            </div>
          </a>
        <div class="air__menuLeft__container air__customScroll">
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__category">
              <span>Dashboards</span>
            </li>
              <a href="{{ route('client.home') }}" class="air__menuLeft__link">
              <i class="fe fe-home air__menuLeft__icon"></i> 
                <span>Dashboards</span>
              </a>
              <a href="{{ route('client.test') }}" class="air__menuLeft__link">
              <i class="fe fe-home air__menuLeft__icon"></i> 
                <span>Start Test</span>
              </a>
              <li class="air__menuLeft__category">
              <span>Table</span>
            </li>
              <a href="/terjemah" class="air__menuLeft__link">
              <i class="fe fe-bookmark air__menuLeft__icon"></i> 
                <span>Translate</span>
              </a>
              </a>
              <a href="/table2" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Course</span>
              </a>
              <a href="/dataujian" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Language Test</span>
              </a>
              <li class="air__menuLeft__category">
                <span>Other</span>
              </li>
              <li class="air__menuLeft__item">
                <a href="javascript: void(0)" class="air__menuLeft__link air__sidebar__actionToggle">
                  <i class="fe fe-settings air__menuLeft__icon"></i>
                    <span>Settings</span>
                </a>
              </li>
              <li class="air__menuLeft__item air__menuLeft__submenu">
                <a href="javascript: void(0)" class="air__menuLeft__link">
                  <i class="fe fe-settings air__menuLeft__icon"></i>
                <span>User Settings</span>
                </a>
                <ul class="air__menuLeft__list">
                  <li class="air__menuLeft__item">
                    <a href="/table4" class="air__menuLeft__link">
                      <span>Log</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="/upload" class="air__menuLeft__link">
                      <span>Upload</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="{{ route('client.password.create') }}" class="air__menuLeft__link">
                      <span>Change Password</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="air__menuLeft__link">
                      <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </div> 
    <div class="air__menuLeft__backdrop air__menuLeft__mobileActionToggle"></div>
    <div class="air__sidebar">
      <a
        href="javascript: void(0);"
        class="air__sidebar__close air__sidebar__actionToggle fe fe-x-circle"
      ></a>
      <h5>
        <strong>Theme Settings</strong>
      </h5>
      <div class="air__utils__line mb-4" style="margin-top: 19px;"></div>
      <div class="air__sidebar__scroll">
        <p class="text-muted">
          This component gives possibility to construct custom blocks with any widgets, components and
          elements inside, like this theme settings
        </p>
        <div class="air__sidebar__type">
          <div class="air__sidebar__type__title">
            <span>Menu Type</span>
          </div>
          <div class="air__sidebar__type__items">
            <div class="row">
              <div class="col-6">
                <label class="air__utils__control air__utils__control__radio">
                  <input type="radio" name="menuType" checked to="body" setting="" />
                  <span class="air__utils__control__indicator"></span>
                  Default
                </label>
                <label class="air__utils__control air__utils__control__radio hideIfMenuTop">
                  <input type="radio" name="menuType" to="body" setting="air__menu--flyout" />
                  <span class="air__utils__control__indicator"></span>
                  Flyout
                </label>
              </div>
              <div class="col-6">
                <label class="air__utils__control air__utils__control__radio hideIfMenuTop">
                  <input type="radio" name="menuType" to="body" setting="air__menu--compact" />
                  <span class="air__utils__control__indicator"></span>
                  Compact
                </label>
                <label class="air__utils__control air__utils__control__radio">
                  <input type="radio" name="menuType" to="body" setting="air__menu--nomenu" />
                  <span class=" air__utils__control__indicator"></span>
                  No Menu
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="air__sidebar__item hideIfMenuTop">
          <div class="air__sidebar__label">
            Toggled left menu
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__menu--toggled" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item hideIfMenuTop">
          <div class="air__sidebar__label">
            Unfixed left menu
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__menu--unfixed" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Fixed topbar
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--fixedHeader" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Menu color
          </div>
          <div class="air__sidebar__container">
            <div class="air__sidebar__select" to="body">
              <div
                class="air__sidebar__select__item air__sidebar__select__item--white"
                setting="air__menu--white"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--gray"
                setting="air__menu--gray"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--blue"
                setting="air__menu--blue"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--black air__sidebar__select__item--active"
              ></div>
            </div>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Flyout menu
          </div>
          <div class="air__sidebar__container">
            <div class="air__sidebar__select" to="body">
              <div
                class="air__sidebar__select__item air__sidebar__select__item--white"
                setting="air__menu__submenu--white"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--gray"
                setting="air__menu__submenu--gray"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--blue air__sidebar__select__item--active"
                setting="air__menu__submenu--blue"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--black"
                setting="air__menu__submenu--black"
              ></div>
            </div>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Login color
          </div>
          <div class="air__sidebar__container">
            <div class="air__sidebar__select" to="body">
              <div
                class="air__sidebar__select__item air__sidebar__select__item--white"
                setting="air__auth--white"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--gray air__sidebar__select__item--active"
                setting=""
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--blue"
                setting="air__auth--blue"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--black"
                setting="air__auth--black"
              ></div>
              <div
                class="air__sidebar__select__item air__sidebar__select__item--img"
                setting="air__auth--img"
              ></div>
            </div>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Content no max-width
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--contentNoMaxWidth" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            App max-width
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--appMaxWidth" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Gray background
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--grayBackground" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Gray topbar
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--grayTopbar" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Squared card borders
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--squaredBorders" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Card shadow
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--cardsShadow" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Borderless cards
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__layout--borderless" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
        <div class="air__sidebar__item">
          <div class="air__sidebar__label">
            Menu shadow
          </div>
          <div class="air__sidebar__container">
            <label class="air__sidebar__switch">
              <input type="checkbox" to="body" setting="air__menu--shadow" />
              <span class="air__sidebar__switch__slider"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="air__layout">
      <div class="air__layout__header">
        <div class="air__utils__header">
          <div class="air__subbar">
            <ul class="air__subbar__breadcrumbs mr-4">
              <li class="air__subbar__breadcrumb">
                <a href="#" class="air__subbar__breadcrumbLink">Main</a>
              </li>
              <li class="air__subbar__breadcrumb">
                <a href="#" class="air__subbar__breadcrumbLink air__subbar__breadcrumbLink--current"
                  >form Log</a
                >
              </li>
            </ul>
    <!--        <div class="air__subbar__divider mr-4 d-none d-xl-block"></div>
            <p class="color-gray-4 text-uppercase font-size-18 mb-0 mr-4 d-none d-xl-block">INV-00125</p>
            <button class="btn btn-primary btn-with-addon mr-auto text-nowrap d-none d-md-block">
              <span class="btn-addon">
                <i class="btn-addon-icon fe fe-plus-circle"></i>
              </span>
              New Request
            </button>
            <div class="air__subbar__amount mr-3 ml-auto d-none d-sm-flex">
              <p class="air__subbar__amountText">
                This month
                <span class="air__subbar__amountValue">$251.12</span>
              </p>
              <div class="air__subbar__amountGraph">
                <i class="air__subbar__amountGraphItem" style="height: 80%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 50%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 70%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 60%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 50%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 65%"></i>
              </div>
            </div>
            <div class="air__subbar__amount d-none d-sm-flex">
              <p class="air__subbar__amountText">
                Last month
                <span class="air__subbar__amountValue">$12,256.12</span>
              </p>
              <div class="air__subbar__amountGraph">
                <i class="air__subbar__amountGraphItem" style="height: 60%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 65%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 75%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 55%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 100%"></i>
                <i class="air__subbar__amountGraphItem" style="height: 85%"></i>
              </div>
            </div> -->
          </div>
        </div>
      </div> 
      <div class="air__layout__content">
        <div class="air__utils__content">
          <div class="air__utils__heading"> 
  <h5>Very Cool Form</h5>
</div>

<!-- <div class="card">
  <div class="card-body">
    <h4 class="mb-4">
      <strong>Form</strong>
    </h4>
    <form action="task/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="name" required="required"> <br/>
		NIM <input type="number" name="NIM" required="required"> <br/>
		email <input type="text" name="email" required="required"> <br/>
		book <input type name="book" required="required"><br/>
		<input type="submit" value="Upload">
	</form> -->
  <div class="card-body">
    <h4 class="mb-4">
      <div class="form-group"> 
      <form action="store4" method="post">
      {{ csrf_field() }}
        <label for="inputname">Name</label>
        <input type="text" class="form-control" id="name" name="name"required="required"/>
        <label for="inputname">NIM</label>
        <input type="number" class="form-control" id="NIM" name="NIM"required="required"/>
        <label for="inputname">E-mail</label>
        <input type="email" class="form-control" id="email" name="email"required="required"/>
        <label for="inputname">Logs</label>
        <input type="text" class="form-control" id="logs" name="logs"required="required"/>
        <br>
        <button type="submit" class="btn btn-primary mr-2 mb-2">
        Submit &ensp;<i class="fa fa-arrow-circle-right fa-lg"></i> 
        </button>
      </form>  
   </div>
</div> 
 <!--     <div class="form-row">
      <form action="/Task/store" method="post">
      
        <div class="form-group col-md-6">
          <label for="inputfirstname">Name</label>
          <input type="text" class="form-control" id="name" name="name"/>
        </div>
        <div class="form-group col-md-6">
          <label for="inputlastname">NIM</label>
          <input type="number" class="form-control" id="NIM" name="NIM"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputemail">Email</label>
        <input type="text" class="form-control" id="email"  name="name" placeholder="example@mail.com" />
      </div>
      <div class="form-group">
      <label for="jasa">Service Type</label>
           <select class="selectpicker">
                <option>Regular - 50,000</option>
                <option>Express - 75,000</option>
           </select>
      </div>
      <div class="form-group">
        <label for="bookT">Book Title</label>
        <input type="book" class="form-control" id="book" name="book" placeholder="Harry Potter" />
      </div>       
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Upload Document</label>
          <input type="file" class="dropify" />
        </div> 
      </div>
      <div class="form-group">
        <label class="air__utils__control air__utils__control__checkbox">
          <input type="checkbox" checked="checked" />
          <span class="air__utils__control__indicator"></span>
          I VERIFY THAT THE ABOVE FILE IS CORRECT.
        </label>
      </div>
      <input type="submit" value="Simpan Data"> -->
      </div>
      <div class="air__layout__footer">
        <div class="air__footer">
          <div class="air__footer__inner">
            <div class="row">
              <div class="col-md-8">
                <p>
                This website aims to provide information for students regarding their English academic information.
                </p>
                <p>
                  &copy; 2021 Telkom University
                </p>
              </div>
              <div class="col-md-4">
                <div class="air__footer__logo">
                  <img src="../../components/core/img/logoTelu-small.png"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
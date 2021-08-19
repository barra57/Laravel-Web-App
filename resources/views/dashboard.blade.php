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
            Donald Gracie
          </div>
          <div class="air__menuLeft__user__role">
            Student
          </div>
        </a>
        <div class="air__menuLeft__container air__customScroll">
          <ul class="air__menuLeft__list">
            <li class="air__menuLeft__category">
              <span>Information</span>
            </li>
            <li class="air__menuLeft__item">
              <a href="javascript: void(0)" class="air__menuLeft__link air__sidebar__actionToggle">
                <i class="fe fe-settings air__menuLeft__icon"></i>
                <span>Settings</span>
              </a>
            </li>
            <li class="air__menuLeft__item">
              <a href="https://docs.airuitemplate.com" target="_blank" class="air__menuLeft__link">
                <i class="fe fe-compass air__menuLeft__icon"></i>
                <span>Documentation</span>
              </a>
            </li>
            <li class="air__menuLeft__category">
              <span>Dashboards</span>
            </li>
        <!--    <li class="air__menuLeft__item air__menuLeft__submenu"> -->
              <a href="/dashboard" class="air__menuLeft__link">
              <i class="fe fe-home air__menuLeft__icon"></i> 
                <span>Dashboards</span>

              </a>
              <li class="air__menuLeft__category">
              <span>Table</span>
            </li>
              </a>
              <a href="/table3" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Table Quiz</span>

              </a>
              <a href="/table2" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Table Course</span>

              </a>
              <a href="/table" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Table Translate</span>

              </a>
              <a href="/table4" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Table Log</span>

              </a>
              <a href="/upload" class="air__menuLeft__link">
              <i class="fe fe-hard-drive air__menuLeft__icon"></i> 
                <span>Table Materi</span>

              </a>
              <li class="air__menuLeft__item air__menuLeft__submenu">
                    <a href="javascript: void(0)" class="air__menuLeft__link">
                        <i class="fe fe-menu air__menuLeft__icon"></i>
                    <span>Layanan</span>
                    </a>
                    <ul class="air__menuLeft__list">
                        <li class="air__menuLeft__item">
                        <a href="/translate" class="air__menuLeft__link">
                            <span>Terjemahan</span>
                        </a>
                        </li>
                    </ul>
                </li>
    <!--      <ul class="air__menuLeft__list">
                <li class="air__menuLeft__item">
                  <a href="dashboards-analytics.html" class="air__menuLeft__link">
                    <span>Analytics</span>
                  </a>
                </li>
                <li class=" air__menuLeft__item">
                  <a href="dashboards-statistics.html" class="air__menuLeft__link">
                    <span>Statistics</span>
                  </a>
                </li>
                <li class=" air__menuLeft__item">
                  <a href="dashboards-ecommerce.html" class="air__menuLeft__link">
                    <span>Ecommerce</span>
                  </a>
                </li>
                <li class=" air__menuLeft__item">
                  <a href="dashboards-crypto.html" class="air__menuLeft__link">
                    <span>Crypto</span>
                  </a>
                </li>
                <li class=" air__menuLeft__item">
                  <a href="dashboards-jira.html" class="air__menuLeft__link">
                    <span>Example of a Dashboard</span>
                  </a>
                </li>
                <li class=" air__menuLeft__item">
                  <a href="dashboards-helpdesk.html" class="air__menuLeft__link">
                    <span>Helpdesk</span> 
                  </a>
                </li>
              </ul>
            </li> -->
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
<!--    <button
      class="air__sidebar__toggleButton air__sidebar__actionToggle btn btn-rounded btn-light text-nowrap text-dark font-weight-bold font-size-18"
    >
      <i class="fe fe-settings text-blue mr-md-2"></i>
      <span class="d-none d-md-inline">Settings</span>
    </button> -->
    <div class="air__chat">
      <button
        class="air__chat__toggleButton air__chat__actionToggle btn btn-rounded btn-light text-nowrap text-dark font-weight-bold font-size-18"
      >
        <i class="fe fe-message-square text-blue mr-md -2"></i>
        <span class="d-none d-md-inline">Support Chat</span>
      </button>
      <div class="air__chat__container">
        <div class="d-flex flex-wrap mb-2">
          <div class="text-dark font-size-18 font-weight-bold mr-auto">Support Chat</div>
          <button class="air__g14__closeBtn btn btn-link air__chat__actionToggle">
            <i class="fe fe-x-square font-size-21 align-middle text-gray-6"></i>
          </button>
        </div>
        <div class="air__chat__innerContainer d-flex flex-column justify-content-end">
          <div class="air__g14__contentWrapper air__customScroll">
            <div class="air__g14__message">
              <div class="air__g14__messageContent">
                <div class="text-gray-4 font-size-12 text-uppercase">You, 5 min ago</div>
                <div>
                  Hi! I have a question how soon can i apply for a EPRT exam?
                </div>
              </div>
              <div class="air__g14__messageAvatar air__utils__avatar">
                <img src="../../components/core/img/avatars/avatar-2.png" alt="You" />
              </div>
            </div>
            <div class="air__g14__message air__g14__message--answer">
              <div class="air__g14__messageContent">
                <div class="text-gray-4 font-size-12 text-uppercase">Ikhsan, 14 sec ago</div>
                <div>
                  It's open right now, all you have to do is apply. Click the link provided in the language test.
                </div>
              </div>
              <div class="air__g14__messageAvatar air__utils__avatar">
                <img src="../../components/core/img/avatars/avatar-2.png" alt="Admin ELC" />
              </div>
            </div>
          </div>
        </div>
        <div class="pt-2 pb-2">
          Ikhsan is typing...
        </div>
        <div>
          <div class="input-group mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Send message..."
              aria-label="Recipient's username"
              aria-describedby="button-addon2"
            />
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fe fe-send align-middle"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
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
              <div class="dropdown-menu" role="menu">
                <div class="air__customScroll">
                  <div class="air__l1 height-300">
                    <div class="text-uppercase font-size-12 mb-2 text-gray-6">Documents (3)</div>
                    <ul class="list-unstyled">
                      <li class="air__l1__item">
                        <a href="javascript: void(0);" class="air__l1__itemLink">
                          <div class="air__l1__itemPic mr-3">
                            <i class="air__l1__itemIcon fe fe-file"></i>
                          </div>
                          <div>
                            <div class="text-blue">Something important.pdf</div>
                            <div class="text-muted">568kb</div>
                          </div>
                        </a>
                      </li>
                      <li class="air__l1__item">
                        <a href="javascript: void(0);" class="air__l1__itemLink">
                          <div class="air__l1__itemPic mr-3">
                            <i class="air__l1__itemIcon fe fe-file"></i>
                          </div>
                          <div>
                            <div class="text-blue">Queue Info.pdf</div>
                            <div class="text-muted">1.2mb</div>
                          </div>
                        </a>
                      </li>
                      <li class="air__l1__item">
                        <a href="javascript: void(0);" class="air__l1__itemLink">
                          <div class="air__l1__itemPic mr-3">
                            <i class="air__l1__itemIcon fe fe-file"></i>
                          </div>
                          <div>
                            <div class="text-blue">Something even more important.pdf</div>
                            <div class="text-muted">67mb</div>
                          </div>
                        </a>
                      </li>
                    </ul>
            <!--        <div class="text-uppercase font-size-12 mb-2 text-gray-6">Agents (4)</div>
                    <ul class="list-unstyled">
                      <li class="air__l1__item">
                        <a href="javascript: void(0);" class="air__l1__itemLink">
                          <div class="air__utils__avatar mr-3">
                            <img src="../../components/core/img/avatars/5.jpg" alt="Mary Stanform" />
                          </div>
                          <div>
                            <div class="text-blue">Mary Stanform</div>
                            <div class="text-muted">Sales Manager</div>
                          </div>
                        </a>
                      </li>
                      <li class="air__l1__item">
                        <a href="javascript: void(0);" class="air__l1__itemLink">
                          <div class="air__utils__avatar mr-3">
                            <img src="../../components/core/img/avatars/1.jpg" alt="Jamie Rockstar" />
                          </div>
                          <div>
                            <div class="text-blue">Jamie Rockstar</div>
                            <div class="text-muted">Blackoffice Agent</div>
                          </div>
                        </a>
                      </li>
                      <li class="air__l1__item">
                        <a href="javascript: void(0);" class="air__l1__itemLink">
                          <div class="air__utils__avatar mr-3">
                            <img src="../../components/core/img/avatars/2.jpg" alt="Axel Freddie" />
                          </div>
                          <div>
                            <div class="text-blue">Axel Freddie</div>
                            <div class="text-muted">Blackoffice Agent</div>
                          </div>
                        </a>
                      </li> -->
                    </ul>
                  </div> 
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
                <span class="dropdown-toggle-text">Recent</span>
              </a>
              <div class="dropdown-menu" role="menu">
        <!--        <div class="dropdown-header">Active</div> -->
                <a class="dropdown-item" href="javascript:void(0)">EPRT Test</a>
                <a class="dropdown-item" href="javascript:void(0)">ECCT Test</a>
        <!--        <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
                <div class="dropdown-header">Inactive</div>
                <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-settings"></i>
                  Settings
                </a> -->
              </div>
            </div>
            <p class="mb-0 mr-4 d-xl-block d-none">
              Status
              <span class="ml-1 badge bg-success text-white font-size-12 text-uppercase air__topbar__status"
                >Online</span
              >
            </p>
            <div class="dropdown mr-4 d-none d-sm-block">
              <a href="" class="dropdown-toggle text-nowrap" data-toggle="dropdown" data-offset="5,15">
                <span class="dropdown-toggle-text">EN</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a class="dropdown-item" href="javascript:void(0)"
                  ><span class="text-uppercase font-size-12 mr-1 align-text-bottom">EN</span> English</a
                >
                <a class="dropdown-item" href="javascript:void(0)"
                  ><span class="text-uppercase font-size-12 mr-1 align-text-bottom">ID</span> Bahasa</a
                >
              </div>
            </div>
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
                        <ul class="width-250 list-unstyled">
                          <li class="mb-3">
                            <div class="air__l2__head">
                              <p class="air__l2__title">
                                Test Result:
                                <strong class="text-black">Passed</strong>
                              </p>
                              <time class="air__l2__time">5 min ago</time>
                            </div>
                            <p class="air__l2__content">
                              Check your email for your certificate.
                            </p>
                          </li>
                       <!--   <li class="mb-3">
                            <div class="air__l2__head">
                              <p class="air__l2__title">
                                Update Status:
                                <strong class="text-danger">Rejected</strong>
                              </p>
                              <time class="air__l2__time">15 min ago</time>
                            </div>
                            <p class="air__l2__content">
                              Mary has declined your quote.
                            </p>
                          </li>
                          <li class="mb-3">
                            <div class="air__l2__head">
                              <p class="air__l2__title">
                                Payment Received:
                                <strong class="text-black">$5,467.00</strong>
                              </p>
                              <time class="air__l2__time">15 min ago</time>
                            </div>
                            <p class="air__l2__content">
                              GOOGLE, LLC AUTOMATED PAYMENTS
                            </p>
                          </li>
                          <li class="mb-3">
                            <div class="air__l2__head">
                              <p class="air__l2__title">
                                Notification:
                                <strong class="text-danger">Access Denied</strong>
                              </p>
                              <time class="air__l2__time">5 Hours ago</time>
                            </div>
                            <p class="air__l2__content">
                              The system prevent login to your account
                            </p>
                          </li>
                          <li class="mb-3">
                            <div class="air__l2__head">
                              <p class="air__l2__title">
                                Payment Received:
                                <strong class="text-black">$55,829.00</strong>
                              </p>
                              <time class="air__l2__time">1 day ago</time>
                            </div>
                            <p class="air__l2__content">
                              GOOGLE, LLC AUTOMATED PAYMENTS
                            </p>
                          </li>
                          <li class="mb-3">
                            <div class="air__l2__head">
                              <p class="air__l2__title">
                                Notification:
                                <strong class="text-danger">Access Denied</strong>
                              </p>
                              <time class="air__l2__time">5 Hours ago</time>
                            </div>
                            <p class="air__l2__content">
                              The system prevent login to your account
                            </p>
                          </li> -->
                        </ul>
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
              <a
                href=""
                class="dropdown-toggle text-nowrap"
                data-toggle="dropdown"
                aria-expanded="false"
                data-offset="5,15"
              >
                <img
                  class="dropdown-toggle-avatar"
                  src="../../components/core/img/avatars/avatar-2.png"
                  alt="User avatar"
                />
              </a>
              <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-user"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-header">
                  Home
                </div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-chevron-right"></i>
                  System Dashboard
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-chevron-right"></i>
                  User Boards
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-chevron-right"></i>
                  Issue Navigator
                  <span class="badge badge-success font-size-11 ml-2">25 New</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-log-out"></i> Logout
                </a>
              </div>
            </div>
          </div>
          <div class="air__subbar">
            <ul class="air__subbar__breadcrumbs mr-4">
              <li class="air__subbar__breadcrumb">
                <a href="#" class="air__subbar__breadcrumbLink">Main</a>
              </li>
              <li class="air__subbar__breadcrumb">
                <a href="#" class="air__subbar__breadcrumbLink air__subbar__breadcrumbLink--current"
                  >Dashboard</a
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
  <h5>Very Cool Dashboard</h5>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="card air__utils__cardMarked air__utils__cardMarked--primary">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-0">Introduction</h5>
        </div>
        <div class="ml-auto d-flex flex-column justify-content-center">
          <div>
          <!--  <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn btn-light dropdown-toggle dropdown-toggle-noarrow"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fe fe-more-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="bottom-start">
                <a class="dropdown-item" href="javascript: void(0)">Action</a>
                <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
              </div>
            </div> -->
          </div> 
        </div>
      </div>
      <div class="card-body">
        <h3 class="text-dark font-size-18 font-weight-bold mb-3">Welcome to the Language Center</h3>
        <p>
          First time here? Check out down below.
        </p>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
          been the industry's standard dummy text ever since the 1500s, when an unknown printer took
          a galley of type and scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting, remaining essentially
          unchanged.
        </p>
        <a href="javascript: void(0);" class="btn btn-outline-primary mb-1">Read more</a>
      </div>
    </div>
    <div class="card air__utils__cardMarked air__utils__cardMarked--primary">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-0">Announcement</h5>
        </div>
        <div class="ml-auto d-flex flex-column justify-content-center">
          <div>
      <!--      <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn btn-light dropdown-toggle dropdown-toggle-noarrow"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fe fe-more-vertical"></i>
              </button> 
              <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="bottom-start">
                <a class="dropdown-item" href="javascript: void(0)"></a>
                <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
              </div> 
            </div> -->
          </div>
        </div>
      </div>
      <div class="card-body">
        <p class="text-uppercase text-muted mb-3">
        Admin ELC
        </p>
        <p class="mb-4">
        Monthly Maintenance
        </p>
        <p class="text-uppercase text-muted mb-3">
        Admin ELC
        </p>
        <p class="mb-4">
        Monthly Maintenance
        </p>
        <p class="text-uppercase text-muted mb-3">
        Admin ELC
        </p>
        <p class="mb-4">
        Monthly Maintenance
        </p>
        <a href="javascript: void(0);" class="btn btn-outline-primary mb-1">View history</a>
      </div>
    </div>
    
 <!--   <div class="card">
      <div class="air__g6 pt-3">
        <div class="air__g6__status bg-danger"></div>
        <div class="d-flex flex-nowrap align-items-center pb-3 pl-4 pr-4">
          <div class="mr-auto">
            <div class="text-uppercase font-weight-bold font-size-24 text-dark">-$1,125</div>
            <div class="font-size-18">4512-XXXX-1678-7528</div>
          </div>
          <div class="ml-1 text-danger">
            <i class="fe fe-arrow-right-circle font-size-40"></i>
          </div>
        </div>
        <div class="py-3 bg-gray-1 pl-4">
          To DigitalOcean Cloud Hosting, Winnetka, LA
        </div>
      </div>
    </div> -->
    <div class="card air__utils__cardMarked air__utils__cardMarked--primary">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-0">Users Online</h5>
        </div>
        <div class="ml-auto d-flex flex-column justify-content-center">
          <div>
      <!--      <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn btn-light dropdown-toggle dropdown-toggle-noarrow"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fe fe-more-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="bottom-start">
                <a class="dropdown-item" href="javascript: void(0)">Action</a>
                <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
              </div>
            </div>  -->
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <div class="bg-gray-1 text-gray-6 text-uppercase px-3 py-1 mb-2">
            Users Online 
          </div>
          <div class="table-responsive">
            <table class="table table-borderless text-gray-6 mb-0">
              <tbody>
               
                <tr>
                  <td>Donald</td>
                  <td class="text-right"><strong>1303184041</strong></td>
                </tr>
                                 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="air__g6 pt-3">
        <div class="air__g6__status bg-success"></div>
        <div class="d-flex flex-nowrap align-items-center pb-3 pl-4 pr-4">
          <div class="mr-auto">
            <div class="text-uppercase font-weight-bold font-size-24 text-dark">You've Passed!</div>
            <div class="font-size-18">Check your student email for your certificate.</div>
          </div>
          <div class="ml-1 text-success">
          </div>
        </div>
        <div class="py-3 bg-gray-1 pl-4">
          From Admin ELC
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-6">
    <div class="card air__utils__cardMarked air__utils__cardMarked--primary">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-0">Language Test</h5>
        </div>
        <div class="ml-auto d-flex flex-column justify-content-center">
          <div>
        <!--    <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn btn-light dropdown-toggle dropdown-toggle-noarrow"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fe fe-more-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="bottom-start">
                <a class="dropdown-item" href="javascript: void(0)">Action</a>
                <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="card-body">
      <h3 class="text-dark font-size-18 font-weight-bold mb-3">Types of Test</h3> 
        <p>
        </p>
        <p>
           <a href="javascript: void(0);" class="text-blue">EPRT Online Edition</a>
        </p> 
        <p>
           <a href="javascript: void(0);" class="text-blue">ECCT Online Edition</a>
        </p>
        <p>
           <a href="javascript: void(0);" class="text-blue">TOEFL ITP® Online Remote Proctoring</a> 
        </p> 
       
      </div>
    </div>
    <div class="card air__utils__cardMarked air__utils__cardMarked--primary">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-0">Schedule Feed</h5>
        </div>
        <div class="ml-auto d-flex flex-column justify-content-center">
          <div>
      <!--      <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn btn-light dropdown-toggle dropdown-toggle-noarrow"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fe fe-more-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="bottom-start">
                <a class="dropdown-item" href="javascript: void(0)">Action</a>
                <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
              </div>
            </div>  -->
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <div class="bg-gray-1 text-gray-6 text-uppercase px-3 py-1 mb-2">
            Today - 5 JULY 2021
          </div>
          <div class="table-responsive">
            <table class="table table-borderless text-gray-6 mb-0">
              <tbody>
                <tr>
                  <td>EPRT Online Edition</td>
                  <td class="text-right"><strong>8.00 AM</strong></td>
                </tr>
                <tr>
                  <td>EPRT Online Edition</td>
                  <td class="text-right"><strong>10.30 AM</strong></td>
                </tr>
                <tr>
                  <td>ECCT Online Edition</td>
                  <td class="text-right"><strong>1.30 PM</strong></td>
                </tr>
                <tr>
                  <td>ECCT Online Edition</td>
                  <td class="text-right"><strong>4.00 PM</strong></td>
                </tr>
                <tr>
                  <td>TOEFL ITP® Online Remote Proctoring</td>
                  <td class="text-right"><strong>4.30 PM</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
          <div class="bg-gray-1 text-gray-6 text-uppercase px-3 py-1 mb-2">
            TOMMOROW - 6 JULY 2021
          </div>
          <div class="table-responsive">
            <table class="table table-borderless text-muted mb-0">
              <tbody>
                <tr>
                  <td>EPRT Online Edition</td>
                  <td class="text-right"><strong>8.30 AM</strong></td>
                </tr>
                <tr>
                  <td>ECCT Online Edition</td>
                  <td class="text-right"><strong>10.30 AM</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="card air__utils__cardMarked air__utils__cardMarked--primary">
      <div class="card-header card-header-flex">
        <div class="d-flex flex-column justify-content-center">
          <h5 class="mb-0">Time Progress</h5>
        </div>
        <div class="ml-auto d-flex flex-column justify-content-center">
        <div>
          <div class="dropdown d-inline-block">
            <!--  <button
                type="button"
                class="btn btn-light dropdown-toggle dropdown-toggle-noarrow"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fe fe-more-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu" x-placement="bottom-start">
                  
                <a class="dropdown-item" href="javascript: void(0)">Action</a>
                <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
              </div> -->
            </div> 
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th class="border-bottom-0 font-weight-normal text-gray-6 text-uppercase">
                  Students
                </th>
                <th
                  class="border-bottom-0 font-weight-normal text-gray-6 text-uppercase text-right"
                  width="50%"
                >
                  Progress
                </th>
                <th class="border-bottom-0 font-weight-normal text-gray-6 text-uppercase text-right">
                  Time Left
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Participating in EPRT</td>
                <td width="50%">
                  <div class="progress">
                    <div
                      class="progress-bar bg-success"
                      style="width: 60%"
                      role="progressbar"
                      aria-valuenow="60"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </td>
                <td class="font-weight-bold text-right">29 minutes remaining</td>
              </tr>
              <tr>
                <td>Participating in ECCT </td>
                <td width="50%">
                  <div class="progress">
                    <div
                      class="progress-bar bg-success"
                      style="width: 80%"
                      role="progressbar"
                      aria-valuenow="70"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </td>
                <td class="font-weight-bold text-right">15 minutes remaining</td>
              </tr>
              <tr>
                <td>Participating in TOEFL</td>
                <td width="50%">
                  <div class="progress">
                    <div
                      class="progress-bar bg-success"
                      style="width: 20%"
                      role="progressbar"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </td>
                <td class="font-weight-bold text-right">2 hours remaining</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>
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
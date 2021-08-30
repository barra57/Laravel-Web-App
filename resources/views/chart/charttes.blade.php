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
            <li class=" air__menuLeft__item">
                <a href="{{ route('client.home') }}" class="air__menuLeft__link">
                  <i class="fe fe-menu air__menuLeft__icon"></i>
                  <span>Dashboard</span>
                </a>
            </li>
            <li class="air__menuLeft__item air__menuLeft__submenu">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>Charts</span>
              </a>
              <ul class="air__menuLeft__list">
                <li class="air__menuLeft__item">
                  <a href="/chart/charttes" class="air__menuLeft__link">
                    <span>Charts Language Test</span>
                  </a>
                </li>
                <li class="air__menuLeft__item">
                  <a href="/chart/chartkursus" class="air__menuLeft__link">
                    <span>Charts Language Course</span>
                  </a>
                </li>
                <li class="air__menuLeft__item">
                  <a href="/chart/chartterjemahan" class="air__menuLeft__link">
                    <span>Charts Translate</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=" air__menuLeft__item">
              <a href="/news" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>News</span>
              </a>
            </li>
            <li class=" air__menuLeft__item">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>Announcement</span>
              </a>
            </li>
            <li class=" air__menuLeft__item">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>Agenda</span>
              </a>
            </li>
            <li class="air__menuLeft__item air__menuLeft__submenu">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>Service</span>
              </a>
              <ul class="air__menuLeft__list">
                <li class="air__menuLeft__item">
                  <a href="/languagetest/index" class="air__menuLeft__link">
                    <span>Language Test</span>
                  </a>
                </li>
                <li class="air__menuLeft__item">
                  <a href="/course/index" class="air__menuLeft__link">
                    <span>Language Course</span>
                  </a>
                </li>
                <li class="air__menuLeft__item">
                  <a href="/translate/index" class="air__menuLeft__link">
                    <span>Translate</span>
                  </a>
                </li>
              </ul>
          </li>  
          <li class=" air__menuLeft__item">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>About</span>
              </a>
            </li>
            <li class=" air__menuLeft__item">
              <a href="javascript: void(0)" class="air__menuLeft__link">
                <i class="fe fe-menu air__menuLeft__icon"></i>
                <span>FAQ</span>
              </a>
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
                    <a href="/log/index" class="air__menuLeft__link">
                      <span>Log</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="/upload/index" class="air__menuLeft__link">
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
          <div class="air__topbar">
            <div class="air__topbar__searchDropdown dropdown mr-md-4 mr-auto">
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
                            <div class="text-blue">System Requirements.pdf</div>
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
                            <div class="text-blue">Affected_app.mov</div>
                            <div class="text-muted">67mb</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="text-uppercase font-size-12 mb-2 text-gray-6">Agents (4)</div>
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
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown mr-auto d-none d-md-block">
                <span class="dropdown-toggle-text">⠀⠀</span>
              </a>
            </div>
            <p class="mb-0 mr-4 d-xl-block d-none">
              Beranda
            </p>
            <p class="mb-0 mr-4 d-xl-block d-none">
              Services
            </p>
            <p class="mb-0 mr-4 d-xl-block d-none">
              FAQ
            </p>
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
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="dropdown-icon fe fe-log-out"></i> Logout
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="air__layout__content">
        <div class="air__utils__content">
          <div class="air__utils__heading">
  <h5>
    <span class="mr-3"><strong>Language Test Chart</strong></span>
  </h5>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h4 class="mb-4"><strong>Line Chart</strong></h4>
        <div class="mb-5">
          <!-- Line Chart -->
          <canvas id="chart-line" width="400" height="200"></canvas>
          <!-- End Line Chart -->
        </div>
      </div>
      <div class="col-lg-6">
        <h4 class="mb-4"><strong>Bar Chart</strong></h4>
        <div class="mb-5">
          <!-- Bar Chart -->
          <canvas id="chart-bar" width="400" height="200"></canvas>
          <!-- End Bar Chart -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h4 class="mb-4"><strong>Radar Chart</strong></h4>
        <div class="mb-5">
          <!-- Radar Chart -->
          <canvas id="chart-radar" width="400" height="200"></canvas>
          <!-- End Radar Chart -->
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Polar Area Chart</strong></h5>

        <div class="mb-5">
          <!-- Polar Area Chart -->
          <canvas id="chart-polar" width="400" height="200"></canvas>
          <!-- End Polar Area Chart -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h4 class="mb-4"><strong>Pie Chart</strong></h4>
        <div class="mb-5">
          <!-- Radar Chart -->
          <canvas id="chart-pie" width="400" height="200"></canvas>
          <!-- End Radar Chart -->
        </div>
      </div>
      <div class="col-lg-6">
        <h4 class="mb-4"><strong>Doughnut Chart</strong></h4>
        <div class="mb-5">
          <!-- Doughnut Chart -->
          <canvas id="chart-doughnut" width="400" height="200"></canvas>
          <!-- End Doughnut Chart -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  ;(function($) {
    'use strict'
    $(function() {
      // LINE CHART
      var lineCtx = document.getElementById('chart-line').getContext('2d')

      var dataLine = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'My First dataset',
            fill: false,
            lineTension: 0.1,
            backgroundColor: 'rgba(75,192,192,0.4)',
            borderColor: 'rgba(75,192,192,1)',
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: 'rgba(75,192,192,1)',
            pointBackgroundColor: '#fff',
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: 'rgba(75,192,192,1)',
            pointHoverBorderColor: 'rgba(220,220,220,1)',
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40],
            spanGaps: false,
          },
        ],
      }

      new Chart(lineCtx, {
        type: 'line',
        data: dataLine,
        options: {
          scales: {
            xAxes: [
              {
                display: false,
              },
            ],
          },
        },
      })

      // BAR CHART
      var barCtx = document.getElementById('chart-bar').getContext('2d')

      var dataBar = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'My First dataset',
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)',
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)',
            ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
      }

      new Chart(barCtx, {
        type: 'bar',
        data: dataBar,
        options: {
          scales: {
            xAxes: [
              {
                stacked: true,
              },
            ],
            yAxes: [
              {
                stacked: true,
              },
            ],
          },
        },
      })

      // RADAR CHART
      var radarCtx = document.getElementById('chart-radar').getContext('2d')

      var dataRadar = {
        labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
        datasets: [
          {
            label: 'My First dataset',
            backgroundColor: 'rgba(179,181,198,0.2)',
            borderColor: 'rgba(179,181,198,1)',
            pointBackgroundColor: 'rgba(179,181,198,1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(179,181,198,1)',
            data: [65, 59, 90, 81, 56, 55, 40],
          },
          {
            label: 'My Second dataset',
            backgroundColor: 'rgba(255,99,132,0.2)',
            borderColor: 'rgba(255,99,132,1)',
            pointBackgroundColor: 'rgba(255,99,132,1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(255,99,132,1)',
            data: [28, 48, 40, 19, 96, 27, 100],
          },
        ],
      }

      new Chart(radarCtx, {
        type: 'radar',
        data: dataRadar,
        options: {
          scale: {
            reverse: true,
            ticks: {
              beginAtZero: true,
            },
          },
        },
      })

      // POLAR CHART
      var polarCtx = document.getElementById('chart-polar').getContext('2d')

      var dataPolar = {
        datasets: [
          {
            data: [11, 16, 7, 3, 14],
            backgroundColor: ['#FF6384', '#4BC0C0', '#FFCE56', '#E7E9ED', '#36A2EB'],
            label: 'My dataset', // for legend
          },
        ],
        labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue'],
      }

      new Chart(polarCtx, {
        type: 'polarArea',
        data: dataPolar,
        options: {
          elements: {
            arc: {
              borderColor: '#4BC0C0',
            },
          },
        },
      })

      // PIE CHART
      var pieCtx = document.getElementById('chart-pie').getContext('2d')

      var dataPie = {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [
          {
            data: [300, 50, 100],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
          },
        ],
      }

      new Chart(pieCtx, {
        type: 'pie',
        data: dataPie,
      })

      // DOUGHTNUT CHART
      var doughnutCtx = document.getElementById('chart-doughnut').getContext('2d')

      var chartDoughnut = {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [
          {
            data: [300, 50, 100],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
          },
        ],
      }

      new Chart(doughnutCtx, {
        type: 'doughnut',
        data: chartDoughnut,
      })
    })
  })(jQuery)
</script>
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
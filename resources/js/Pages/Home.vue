<template>

<home-layout>
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3" style="font-size: 1.8rem;font-weight: bold;line-height: 1.2;font-weight: bold!important;">Panel principal</h2>
                        <!--end::Page Title-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center flex-wrap">
                    <!--begin::Button-->
                    <a href="#" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="d-none d-md-inline" style="font-size: 1.2rem;line-height: 1.5;font-weight: bold;">{{ $page.props.user.name }} {{ $page.props.user.lastname }}</span>
                    </a>
                    <!--end::Button-->
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left">
                        <a href="#" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Files/File.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
                                        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="d-none d-md-inline" style="font-weight: bold !important;">Acciones</span>
                        </a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-separator mt-3 opacity-70"></li>
                                
                                <li class="navi-item">
                                    <div class="navi-link">
                                        <inertia-link :href="route('profile.show')" class="label label-xl label-inline label-light-primary">
                                            Mi Perfil
                                        </inertia-link>
                                    </div>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">

                                        <form @submit.prevent="logout">
                                            <span class="navi-text">
                                            <jet-dropdown-link as="button" class="label label-xl label-inline label-light-danger">
    
                                                Cerrar sesión
                                            </jet-dropdown-link>
                                            </span>
                                        </form>
                                        
                                    </a>
                                </li>
                                
                                <li class="navi-separator mt-3 opacity-70"></li>
                                
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                    <!--end::Dropdown-->

                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        
        <!--end::Subheader-->
            <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
                <!--begin::Row-->
                <div class="row">

                    <div class="col-xl-6">
                                <!--begin::Stats Widget 11-->
                                <div class="card card-custom gutter-b card card-custom wave wave-animate-slow mb-8 mb-lg-0">
                                    <!--begin::Body-->
                                    <div class="card-body p-0" style="position: relative;">
                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                            <span class="symbol symbol-circle symbol-50 symbol-light-success mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h1 counter" data-counter="counterup" data-value="4">4</span>
                                                <span class="text-muted font-weight-bold mt-2">Cantidad usuarios activos</span>
                                            </div>
                                        </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 11-->
                                </div>
                    </div>
                <!--end::Row-->


                    <div class="col-xl-6">
                                <!--begin::Stats Widget 11-->
                                <div class="card card-custom gutter-b card card-custom wave wave-animate-slow mb-8 mb-lg-0">
                                    <!--begin::Body-->
                                    <div class="card-body p-0" style="position: relative;">
                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                            <span class="symbol symbol-circle symbol-50 symbol-light-success mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
                                                                <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h1 counter" data-counter="counterup" data-value="6">2</span>
                                                <span class="text-muted font-weight-bold mt-2">Cantidad clientes activos</span>
                                            </div>
                                        </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 11-->
                                </div>
                    </div>
                <!--end::Row-->
                </div>
                <br>


                <div class="row">

                    <div class="col-xl-3">
                                <!--begin::Stats Widget 11-->
                                <div class="card card-custom gutter-b card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
                                    <!--begin::Body-->
                                    <div class="card-body p-0" style="position: relative;">
                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                            <span class="symbol symbol-circle symbol-50 symbol-light-success mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" fill="#000000"></path>
                                                </g>
                                            </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h1 counter" data-counter="counterup" data-value="9">4</span>
                                                <span class="text-muted font-weight-bold mt-2">Cantidad dispositivos activos</span>
                                            </div>
                                        </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 11-->
                                </div>
                    </div>
                <!--end::Row-->


                    <div class="col-xl-3 ">
                                <!--begin::Stats Widget 11-->
                                <div class="card card-custom gutter-b card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
                                    <!--begin::Body-->
                                    <div class="card-body p-0" style="position: relative;">
                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                            <span class="symbol symbol-circle symbol-50 symbol-light-danger mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-danger">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" fill="#000000"></path>
                                                </g>
                                            </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h1 counter" data-counter="counterup" data-value="3">3</span>
                                                <span class="text-muted font-weight-bold mt-2">Cantidad dispositivos inactivos</span>
                                            </div>
                                        </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 11-->
                                </div>
                    </div>
                <!--end::Row-->
                                            
                            
                    <div class="col-xl-3">
                                <!--begin::Stats Widget 11-->
                                <div class="card card-custom gutter-b card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
                                    <!--begin::Body-->
                                    <div class="card-body p-0" style="position: relative;">
                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                            <span class="symbol symbol-circle symbol-50 symbol-light-success mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"></path>
                                                    <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h1 counter" data-counter="counterup" data-value="6">1</span>
                                                <span class="text-muted font-weight-bold mt-2">Cantidad mediciones activas</span>
                                            </div>
                                        </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 11-->
                                </div>
                    </div>
                <!--end::Row-->


                    <div class="col-xl-3">
                                <!--begin::Stats Widget 11-->
                                <div class="card card-custom gutter-b card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
                                    <!--begin::Body-->
                                    <div class="card-body p-0" style="position: relative;">
                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                            <span class="symbol symbol-circle symbol-50 symbol-light-danger mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-danger">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"></path>
                                                    <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h1 counter" data-counter="counterup" data-value="2">1</span>
                                                <span class="text-muted font-weight-bold mt-2">Cantidad mediciones inactivas</span>
                                            </div>
                                        </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 11-->
                                </div>
                    </div>
                <!--end::Row-->								 
                </div>
                <!--end::Dashboard-->
            </div>
            <!--end::Container-->
        </div>
    </div>
</div>
 
<!--end::Entry-->

</home-layout>

</template>


<script>
import HomeLayout from "@/Layouts/Home/HomeLayout";

export default {
  components: {
    HomeLayout,
  },
};
</script>
<template>
  <home-layout>
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
      <!--begin::Content-->
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div
          class="subheader py-3 py-lg-8 subheader-transparent"
          id="kt_subheader"
        >
          <div
            class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap"
          >
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
              <!--begin::Page Heading-->
              <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h2
                  class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"
                  style="
                    font-size: 1.8rem;
                    font-weight: bold;
                    line-height: 1.2;
                    font-weight: bold !important;
                  "
                >
                  Mi Perfil
                </h2>
                <!--end::Page Title-->
              </div>
              <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
              <!--begin::Button-->
              <a
                href="#"
                class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2"
              >
                <span class="svg-icon svg-icon-lg">
                  <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="24px"
                    height="24px"
                    viewBox="0 0 24 24"
                    version="1.1"
                  >
                    <g
                      stroke="none"
                      stroke-width="1"
                      fill="none"
                      fill-rule="evenodd"
                    >
                      <polygon points="0 0 24 0 24 24 0 24" />
                      <path
                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                        fill="#000000"
                        fill-rule="nonzero"
                        opacity="0.3"
                      />
                      <path
                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                        fill="#000000"
                        fill-rule="nonzero"
                      />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
                <span
                  class="d-none d-md-inline"
                  style="font-size: 1.2rem; line-height: 1.5; font-weight: bold"
                  >{{ $page.props.user.name }}
                  {{ $page.props.user.lastname }}</span
                >
              </a>
              <!--end::Button-->
              <!--begin::Dropdown-->
              <div
                class="dropdown dropdown-inline"
                data-toggle="tooltip"
                title=""
                data-placement="left"
              >
                <a
                  href="#"
                  class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Files/File.svg-->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                          d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          opacity="0.3"
                        />
                        <rect
                          fill="#000000"
                          x="6"
                          y="11"
                          width="9"
                          height="2"
                          rx="1"
                        />
                        <rect
                          fill="#000000"
                          x="6"
                          y="15"
                          width="5"
                          height="2"
                          rx="1"
                        />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span
                    class="d-none d-md-inline"
                    style="font-weight: bold !important"
                    >Acciones</span
                  >
                </a>
                <div
                  class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right"
                >
                  <!--begin::Navigation-->
                  <ul class="navi navi-hover">
                    <li class="navi-separator mt-3 opacity-70"></li>

                    <li class="navi-item">
                      <div class="navi-link">
                        <jet-dropdown-link
                          :href="route('profile.show')"
                          class="label label-xl label-inline label-light-primary"
                        >
                          Mi Perfil
                        </jet-dropdown-link>
                      </div>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <form @submit.prevent="logout">
                          <span class="navi-text">
                            <jet-dropdown-link
                              as="button"
                              class="label label-xl label-inline label-light-danger"
                            >
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

        <template>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mi Pefil
          </h2>
        </template>

        <div>
          <div class="mx-auto py-10 sm:px-6 lg:px-8">
            <div v-if="$page.props.jetstream.canUpdateProfileInformation">
              <update-profile-information-form :user="$page.props.user" />

              <jet-section-border />
            </div>

            <div v-if="$page.props.jetstream.canUpdatePassword">
              <update-password-form class="mt-10 sm:mt-0" />

              <jet-section-border />
            </div>

            <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
              <two-factor-authentication-form class="mt-10 sm:mt-0" />

              <jet-section-border />
            </div>

            <logout-other-browser-sessions-form
              :sessions="sessions"
              class="mt-10 sm:mt-0"
            />

            <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
              <jet-section-border />

              <delete-user-form class="mt-10 sm:mt-0" />
            </template>
          </div>
        </div>
      </div>
    </div>
  </home-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import HomeLayout from "@/Layouts/Home/HomeLayout";

import DeleteUserForm from "./DeleteUserForm";
import JetSectionBorder from "@/Jetstream/SectionBorder";
import LogoutOtherBrowserSessionsForm from "./LogoutOtherBrowserSessionsForm";
import TwoFactorAuthenticationForm from "./TwoFactorAuthenticationForm";
import UpdatePasswordForm from "./UpdatePasswordForm";
import UpdateProfileInformationForm from "./UpdateProfileInformationForm";

export default {
  props: ["sessions"],

  components: {
    HomeLayout,
    AppLayout,
    DeleteUserForm,
    JetSectionBorder,
    LogoutOtherBrowserSessionsForm,
    TwoFactorAuthenticationForm,
    UpdatePasswordForm,
    UpdateProfileInformationForm,
  },
};
</script>

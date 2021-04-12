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
                  Lista de Cuentas
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
                        <inertia-link
                          :href="route('profile.show')"
                          class="label label-xl label-inline label-light-primary"
                        >
                          Mi Perfil
                        </inertia-link>
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
        <div class="d-flex flex-column-fluid">
          <!--begin::Container-->
          <div class="container" id="contenedor_general">
            <!--begin::Card-->
            <div class="card card-custom">
              <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                  <h3
                    class="card-label"
                    style="font-size: 1.5rem; font-weight: bold"
                  >
                    Gestión de Cuentas
                  </h3>
                </div>

                <div class="card-toolbar">
                  <!--begin::Button-->
                  <a
                    @click.prevent="modal(0, '', '')"
                    class="btn btn-primary font-weight-bolder"
                  >
                    <span class="svg-icon svg-icon-md" style="display: flex">
                      <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Design/Flatten.svg-->
                      <svg
                        style="margin-right: 10px"
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
                          <rect x="0" y="0" width="24" height="24"></rect>
                          <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                          <path
                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                            fill="#000000"
                            opacity="0.3"
                          ></path>
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                      Nuevo cliente
                    </span></a
                  >
                  <!--end::Button-->
                </div>
              </div>

              <div class="card-body">
                <!--begin: Datatable-->
                <table
                  class="table table-bordered table-hover table-checkable mt-10"
                  id="kt_datatable"
                >
                  <thead style="background-color: ghostwhite">
                    <tr>
                      <th style="font-weight: bold">Nombre</th>
                      <th style="font-weight: bold">Usuario</th>
                      <th style="font-weight: bold">Tipo Perfil</th>
                      <th style="font-weight: bold">Mail</th>
                      <th style="font-weight: bold">Cliente Asociado</th>
                      <th style="font-weight: bold">Estado</th>
                      <th style="font-weight: bold">Editar</th>
                      <th style="font-weight: bold">Eliminar</th>
                      <th style="font-weight: bold">Acciones</th>
                    </tr>
                  </thead>
                  <tbody style="font-size: 13px">
                    <tr v-for="(user, i) in users" :key="i">
                      <td>{{ user.name }} {{ user.lastname }}</td>
                      <td align="center">
                        {{ user.username }}
                      </td>
                      <td align="center">
                        {{ user.estado_mostrar }}
                      </td>

                      <td align="center">
                        {{ user.email }}
                      </td>

                      <td align="center">
                        {{ user.nombre_cliente }}
                      </td>

                      <td align="center" v-if="user.status == 1">
                        <a
                          @click.prevent="updateStatus(user.id)"
                          title="Cambiar estado"
                          class="btn btn-sm btn-light-danger font-weight-bold mr-2"
                          >Inactivo</a
                        >
                      </td>

                      <td align="center" v-if="user.status == 0">
                        <a
                          @click.prevent="updateStatus(user.id)"
                          title="Cambiar estado"
                          class="btn btn-sm btn-light-primary font-weight-bold mr-2"
                          >Activo</a
                        >
                      </td>

                      <td align="center">
                        <a
                          class="btn btn-primary btn-sm mr-3"
                          @click.prevent="modal(1, user, user.id)"
                        >
                          Editar</a
                        >
                      </td>

                      <td align="center">
                        <a
                          data-toggle="modal"
                          @click.prevent="destroy(user)"
                          class="btn btn-danger btn-sm mr-3"
                        >
                          Eliminar</a
                        >
                      </td>

                      <td align="center">Todas Permitidas</td>
                    </tr>
                  </tbody>
                </table>
                <!--end: Datatable-->
              </div>
            </div>
            <!--end::Card-->

            <div
              id="responsive"
              class="modal fade"
              tabindex="-1"
              aria-hidden="true"
              style="display: none"
            >
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <br /><br />
                  <h4
                    class="modal-title"
                    id="titulo_tabla"
                    style="font-size: 22px; text-align: center"
                  ></h4>

                  <form @submit.prevent="submit" role="form">
                    <div class="modal-body" style="margin-top: -30px">
                      <div
                        class="slimScrollDiv"
                        style="
                          position: relative;
                          overflow: hidden;
                          width: auto;
                          height: auto;
                        "
                      >
                        <div
                          class="scroller"
                          style="height: 6auto; overflow: hidden; width: auto"
                          data-always-visible="1"
                          data-rail-visible1="1"
                          data-initialized="1"
                        >
                          <div class="row">
                            <div
                              id="contenedor_data"
                              class="col-md-12"
                              style="overflow-y: auto"
                            >
                              <!-- BEGIN EXAMPLE TABLE PORTLET-->
                              <div class="portlet light bordered">
                                <div
                                  class="portlet-body"
                                  id="tabla_general"
                                  style="height: 460px"
                                >
                                  <input type="hidden" id="id" />
                                  <input type="hidden" id="action" />

                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Nombres</label
                                    >
                                    <div class="col-lg-10">
                                      <input
                                        type="text"
                                        placeholder="John"
                                        class="form-control"
                                        id="nombres"
                                        value=""
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Apellidos</label
                                    >
                                    <div class="col-lg-10">
                                      <input
                                        type="text"
                                        placeholder="Ugarte"
                                        class="form-control"
                                        id="apellidos"
                                        value=""
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Número telefónico</label
                                    >
                                    <div class="col-lg-10">
                                      <input
                                        type="text"
                                        placeholder="981377582"
                                        class="form-control"
                                        id="telefono"
                                        value=""
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Mail</label
                                    >
                                    <div class="col-lg-10">
                                      <input
                                        type="text"
                                        placeholder="j.ugarte@jtautomatizacion.cl"
                                        class="form-control"
                                        id="mail"
                                        value=""
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Usuario</label
                                    >
                                    <div class="col-lg-10">
                                      <input
                                        type="text"
                                        placeholder="jugarte"
                                        class="form-control"
                                        id="usuario"
                                        value=""
                                      />
                                      <p
                                        style="font-size: 12px"
                                        class="help-block"
                                      >
                                        La clave inicial será el mismo nombre de
                                        usuario.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Perfil</label
                                    >
                                    <div class="col-lg-10">
                                      <select
                                        class="form-control"
                                        id="id_perfil"
                                      >
                                        <option value="" selected>
                                          Seleccione
                                        </option>
                                        <option
                                          v-for="(estado, i) in estados"
                                          :key="i"
                                          :value="estado.id_mostrar"
                                        >
                                          {{ estado.estado_mostrar }}
                                        </option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"
                                      >Cliente Asociado</label
                                    >
                                    <div class="col-lg-10">
                                      <select
                                        class="form-control"
                                        id="id_cliente"
                                      >
                                        <option value="" selected>
                                          Seleccione
                                        </option>
                                        <option
                                          v-for="(cliente, i) in clientes"
                                          :key="i"
                                          :value="cliente.id"
                                        >
                                          {{ cliente.nombre_cliente }}
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="slimScrollBar"
                      style="
                        background: rgb(187, 187, 187);
                        width: 7px;
                        position: absolute;
                        top: 0px;
                        opacity: 0.4;
                        display: none;
                        border-radius: 7px;
                        z-index: 99;
                        right: 1px;
                        height: 300px;
                      "
                    ></div>
                    <div
                      class="slimScrollRail"
                      style="
                        width: 7px;
                        height: 100%;
                        position: absolute;
                        top: 0px;
                        display: none;
                        border-radius: 7px;
                        background: rgb(234, 234, 234);
                        opacity: 0.2;
                        z-index: 90;
                        right: 1px;
                      "
                    ></div>

                    <div class="modal-footer">
                      <input
                        type="submit"
                        class="btn btn-success mr-2"
                        value="Guardar"
                      />

                      <button
                        type="button"
                        class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal"
                      >
                        Cerrar
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::Entry-->
      </div>
    </div>
  </home-layout>
</template>


<script>
import HomeLayout from "@/Layouts/Home/HomeLayout";

export default {
  mounted() {
   this.pageChange();
  },
  props: {
    users: Array,
    estados: Array,
    clientes: Array,
  },
  components: {
    HomeLayout,
  },
  data() {
    return {};
  },
  methods: {
    updateStatus(id) {
      this.$inertia.delete(this.route("statusCuentas.destroy", id));
    },
      pageChange(){
      if( window.location.pathname == "/cuentas"){

        
        $('#kt_aside_tab_2').addClass(" active show");
        
        $('#user').addClass(" active");
        
        $('#cuentas').addClass(" menu-item-active");
        $('#cuentas').css("color", "#3699FF");

        $('#cuenta').addClass(" menu-item-active");
        $('#cuenta').css("background", "ghostwhite");
        $('#cuenta').css("width", "155px"); 
    }
    },

    change() {
      let val = document.getElementById("id_cliente").value;
      document.getElementById("cliente_form").value = val;
    },

    submit() {
      let id = document.getElementById("id").value;
      let action = document.getElementById("action").value;

      let json = {
        name: document.getElementById("nombres").value,
        lastname: document.getElementById("apellidos").value,
        phone: document.getElementById("telefono").value,
        mail: document.getElementById("mail").value,
        usuario: document.getElementById("usuario").value,
        id_cliente: document.getElementById("id_cliente").value,
        id_perfil: document.getElementById("id_perfil").value,
      };

      if (action == 0) {
        this.$inertia.post(this.route("cuentas.store", json));
      } else {
        this.$inertia.put(this.route("cuentas.update", id), json);
      }
    },
    modal(action, user, id) {
      if (action == 0) {
        $("#responsive").modal("show");
        document.getElementById("titulo_tabla").innerHTML =
          'Nuevo Cliente	<div class="card-header border-0 py-5">	<h3 class="card-title align-items-start flex-column">	<span class="text-muted mt-3 font-weight-bold font-size-sm">Creación/Edición cuentas de cliente</span></h3>	</div>';

        document.getElementById("nombres").value = "";

        document.getElementById("apellidos").value = "";
        document.getElementById("telefono").value = "";
        document.getElementById("mail").value = "";
        document.getElementById("usuario").value = "";

        document.getElementById("id").value = id;
        document.getElementById("action").value = action;
      } else {
        $("#responsive").modal("show");
        document.getElementById("titulo_tabla").innerHTML =
          'Editar Cliente	<div class="card-header border-0 py-5">	<h3 class="card-title align-items-start flex-column">	<span class="text-muted mt-3 font-weight-bold font-size-sm">Creación/Edición cuentas de cliente</span></h3>	</div>';

        document.getElementById("nombres").value = user.name;

        document.getElementById("apellidos").value = user.lastname;
        document.getElementById("telefono").value = user.phone;
        document.getElementById("mail").value = user.email;
        document.getElementById("usuario").value = user.username;
        document.getElementById("id").value = id;
        document.getElementById("action").value = action;

        $("#boton_guardar").attr(
          "onclick",
          "guardar_cliente(" + action + "," + id + ")"
        );
      }
    },

    destroy(user) {
      if (confirm("Esta seguro que desea eliminar?")) {
        this.$inertia.delete(this.route("cuentas.destroy", user.id));
      }
    },
  },
};
</script>
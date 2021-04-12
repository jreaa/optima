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
                  Graficos
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

  
        <!--end::Entry-->

        <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container" id="contenedor_general">


								<div class="row" style="height:350px;">
									<div class="col-lg-12 col-xxl-12">
										<!--begin::Advance Table Widget 9-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Datos actualizados</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Últimas 24 horas de datos desplegados en los gráficos</span>
												</h3>

											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0 pb-3">
												<div class="tab-content">
                        

                        <form @submit.prevent="buscarGrafico">

													<div class="form-group">
														<label>Seleccione los gráficos que desea ver:</label>
														<div class="checkbox-inline">

                            
                              <select v-model="form.selected" class="form-control" multiple>
                                <option v-for="(d, i) in data" :key="i" v-bind:value="d.id">{{d.dispositivo}}</option>
                    
                              </select>

                              <span>Seleccionado: {{form.selected}}</span>

  <!--
                              <select2-multiple-control v-model="form.myValue" @change="myChangeEvent($event)" ></select2-multiple-control>
                              <h4>Value: {{ form.myValue }}</h4>-->

														</div>
														<span class="form-text text-muted">Tipo de gráficos analógicos</span>


													</div>
													<button id="boton_guardar" class="btn btn-success mr-2">Desplegar gráficos</button>

                        </form>

													<br><br>



												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 9-->
									</div>
								</div>


								<div id="body_tablas" class="mt-5">



								</div>





								<div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title" id="titulo_tabla" style="font-size:22px; text-align: center;"></h4>
											</div>
											<div class="modal-body">
												<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
													<div class="scroller" style="height: 6auto; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
														<div class="row">
															<div class="col-md-12">

																<!-- BEGIN EXAMPLE TABLE PORTLET-->
																<div class="portlet light bordered">
																	<center>
																		<div class="portlet-title">
																			<div class="caption font-dark">
																				<i class="icon-settings font-dark"></i>
																				<img src="Loading_2.gif" alt="Loading" style="width:20%"> <br>
																				<span class="caption-subject bold uppercase">Cargando gráficos...</span>

																			</div>

																		</div>
																	</center>

																</div>
																<!-- END EXAMPLE TABLE PORTLET-->


															</div>
														</div>




													</div>
												</div>
											</div>
											<div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div>
											<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>

											<div class="modal-footer">
											</div>
										</div>
									</div>
								</div>





							</div>
							<!--end::Container-->
						</div>

      </div>
    </div>
  </home-layout>
</template>


<script>
import HomeLayout from "@/Layouts/Home/HomeLayout";
import Select2MultipleControl from 'v-select2-multiple-component';

export default {
  mounted() {
   this.pageChange();
  },
  props: {
    //chart: Object
    body: String,
    data: {
      type : Array,
      default: () => []
    },
  },
  components: {
    HomeLayout,
    Select2MultipleControl,
  },
  data() {
    selected : ''
    return {
      
      myOptions: {
        type : Array,
        default(){
          return data;
        }
      },
      form : {
        selected : '',
        myValue: '',
      }
    }
  },
  methods: {
    pageChange(){
      if( window.location.pathname == "/graficos"){

        
        $('#kt_aside_tab_3').addClass(" active show");
        
        $('#tablero').addClass(" active");
        
        $('#graficos').addClass(" menu-item-active");
        $('#graficos').css("color", "#3699FF");

        $('#graf').addClass(" menu-item-active");
        $('#graf').css("background", "ghostwhite");
        $('#graf').css("width", "155px"); 
    }
    },
    change(){
        let $select = $('#selected');
     
        let selecteds = [];

        // Buscamos los option seleccionados
        $select.children(':selected').each((idx, el) => {
          // Obtenemos los atributos que necesitamos
          selecteds.push({
            id: el.id,
            value: el.value
          });
        });
        
        //
        console.log(selecteds);

    },
      myChangeEvent(val){
            console.log(val);
        },
        mySelectEvent({id, text}){
            console.log({id, text})
        },

    buscarGrafico(){
     
      axios.post(this.route("graficos.store", this.form)).then(response => {

          let respuesta_full = response.data.split('--**--');
          let respuesta = respuesta_full[0];
					let respuesta_js = respuesta_full[1];
					let cant_graficos = respuesta_full[2];
					let query = respuesta_full[3];

          document.getElementById("body_tablas").innerHTML = respuesta;	
          /*console.log("respuesta: "+respuesta);
          console.log("respuesta_js: "+respuesta_js);
          console.log("graficos: "+cant_graficos);*/
          jQuery(document).ready(function($) {
						var head= document.getElementsByTagName('head')[0];
						var script= document.createElement('script');
						script.type= 'text/javascript';
						script.text = respuesta_js;
						head.appendChild(script);
					});	
					

      });
    }
  },
};
</script>
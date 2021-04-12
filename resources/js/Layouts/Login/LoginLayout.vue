<template>
<div style="heigh:">
    <div class="d-flex flex-column flex-root min-h-screen">
    <!--begin::Login-->
    <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/bg/bg-1.jpg);">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="img/logo-optima_blanco-vertical.png" class="max-h-150px" alt="" />
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div id="login">
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3 style="font-size: 25px; font-weight:bold">Iniciar sesión</h3>
                            <p style="font-size: 15px; font-weight: bold;" class="opacity-60">Ingresa tus datos para entrar a tu cuenta</p>
                        </div>
                        <div id="kt_login_signin_form">

                            <slot></slot>
                        </div>
                    </div>
                    <!--end::Login Sign in form-->

                    <div class="copyright"> 2021 © Óptima by <a href="joseera.heroukuapp.com">Jose Era</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</template>
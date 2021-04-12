<template>
    <login-layout>
        <jet-validate-errors/>
        <form @submit.prevent="submit">
            <div class="form-group">
                <jet-input id="email" type="email" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" placeholder="Usuario"  v-model="form.email" required autofocus />
            </div>

            <div class="mt-4 form-group">
                <jet-input id="password" type="password" class="form-control  h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 " placeholder="Contraseña" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center justify-end">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span style="font-size:15px;color:white" class="ml-2 text-sm text-gray-600">Recordarme</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-5" style="justify-content:center">
                <inertia-link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900" style="font-size:15px;color:white">
                    Olvido su contraseña?
                </inertia-link>
            </div>

            <div class="form-group text-center">
                <jet-button class=" mt-10 btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3" :class="{ 'opacity-25': form.processing }">
                    Ingresar
                </jet-button>
            </div>

                
           
        </form>   
    </login-layout>
    
</template>

<script>
    import LoginLayout from '@/Layouts/Login/LoginLayout'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            LoginLayout,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    }
</script>

<template>
    <form @submit.prevent="register">
        <div class="login-form">
            <div>
                <label for="name" class="label text-center" >Name</label>
                <input type="text" v-model="form.name" id="name" class="input text-center" />
                <div class="input-error" v-if="form.errors.name">{{form.errors.name}}</div>
            </div> 
            <div class="mt-4">
                <label for="email" class="label text-center">Email</label>
                <input type="text" v-model="form.email" id="email" class="input text-center" />
                <div class="input-error" v-if="form.errors.email">{{form.errors.email}}</div>
            </div> 
            <div class="mt-4 ">
                <label for="password" class="label text-center">Password</label>
                <input type="password" v-model="form.password" id="password" class="input text-center"/>
                <div class="input-error" v-if="form.errors.password">{{form.errors.password}}</div>
            </div> 
            <div class="mt-4 ">
                <label for="password_confirmation" class="label text-center">Password Confirmation</label>
                <input type="password" v-model="form.password_confirmation" id="password_confirmation" class="input text-center"/>
                
            </div> 
            <div class="mt-4">
                <button class="btn-primary w-full" type="submit">Create Account</button>
            </div>
            <div class="mt-2 text-center">
                    <Link :href="route('login')" class="text-sm text-gray-500" >
                       Already have an account? Click here
                    </Link>
                </div>
        </div>
    </form>
</template>

<script setup>
import {useForm , Link} from '@inertiajs/vue3'

    
    const form = useForm({

        name: null,
        email: null,
        password: null,
        password_confirmation: null
    })

    const register = ()=> form.post(route('register.store'))


</script>
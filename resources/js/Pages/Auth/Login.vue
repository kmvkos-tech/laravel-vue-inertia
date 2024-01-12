<template>
    <form @submit.prevent="login">
        <div class="login-form mt-8">
            <div>
                <label for="name" class="label text-center">Agent's Username:</label>
                <input type="text" v-model="form.name" id="name" class="input text-center" />
                <div class="input-error text-center" v-if="form.errors.name">{{form.errors.name}}</div>
            </div> 
            <div class="mt-4 hidden">
                <label for="password" class="label">Password</label>
                <input type="password" v-model="form.password" id="password" class="input"/>
                <div class="input-error" v-if="form.errors.password">{{form.errors.password}}</div>
            </div> 
            <div class="mt-4">
                <button class="btn-primary w-full" type="submit">Login</button>
                <div class="mt-2 text-center">
                    <Link :href="route('register.create')" class="text-sm text-gray-500" >
                        Need and account? Click here
                    </Link>
                    <div class="mt-2 text-center text-sm">
                        Demo Agent's Username : Antigoni
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import {useForm , Link} from '@inertiajs/vue3'

    
    const form = useForm({
        name: null,
        password: 'password'
    })

    const login = ()=> form.post(route('login.store'))


</script>
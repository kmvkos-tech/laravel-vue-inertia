<template>
    
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
        <div class="container mx-auto"></div>
        <nav class="p-4 flex items-center justify-between">
            <div class="text-xl text-indigo-600 font-bold text-center">
                <Link :href="route('project.index')"> SC!FY </Link>
            </div>
            <div >
              
            </div>
            <div v-if="user" class="flex items-center gap-4" >
                <div class="text-sm text-gray-500">Γειά σου {{ user.name }}!</div>
           
                
                <Link :href="route('logout')" method="delete" class="btn-primary" as="button"> <i class="fas fa-sign-out-alt"></i> Logout</Link>
            </div>
            <div v-else class="flex center-items gap-2">
                <Link  :href="route('login')" >Login</Link>
                <Link  :href="route('register.create')" >Register</Link>
            </div>
            
        </nav>
    </header>
    <main class="container mx-auto p-4 w-full">

        <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 bg-green-200 dark:border-green-200 p-2">
        {{ flashSuccess }}
       
    </div>
    

    <slot></slot>
    </main>
   
    
</template>


<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'



const page = usePage();
const flashSuccess = computed(
    () => page.props.flash.success

)
const user = computed(
    ()=> page.props.user
)




</script>


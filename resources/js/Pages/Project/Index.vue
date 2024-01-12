<template>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-2">
       
        <Table :projects = "projects" />
        
    </div>
   
</template>

<script setup>
    
    import Table from '@/Pages/Project/Index/Components/Table.vue'

defineProps({
    projects: Array,
})



</script>
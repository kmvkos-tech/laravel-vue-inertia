<template>
  <div class="block overflow-x-auto md:table">
    <div class="flex">
      <input class="input bg-gray-100 mb-2" v-model="searchFilter" placeholder="Search">
  </div>
  <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
    <thead class="bg-indigo-600">
      <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider ">
          A/A
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider ">
          Application
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
          Creator
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider ">
          Name
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
          Date of Creation
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <tr v-for="(project, index) in paginatedProjects" :key="project.id" :class="index % 2 === 0 ? 'bg-white' : 'bg-gray-200'">
        <td class="px-6 py-4 whitespace-nowrap">
          {{ (currentPage - 1) * itemsPerPage + index + 1 }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          {{ project.application }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          {{ project.creator }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <a :href="project.link" :target="'_blank'" >  {{ project.name }} <i class="fas fa-link fa-xs"></i></a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          {{ project.date_of_creation }}
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="flex items-center justify-between mt-4">
  <button 
    @click="prevPage" 
    :disabled="currentPage === 1" 
    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed"
  >
    Previous
  </button>
  <span class="text-gray-700">Page {{ currentPage }} of {{ totalPages }}</span>
  <button 
    @click="nextPage" 
    :disabled="currentPage === totalPages" 
    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed"
  >
    Next
  </button>
</div>
</template>
  
 
<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
  projects: Array,
});

const searchFilter = ref('');
const currentPage = ref(1);
const itemsPerPage = ref(10);

const filteredProjects = computed(() => {
  const lowerCaseFilter = searchFilter.value.toLowerCase();
  return props.projects.filter(project => {
    return project.application.toLowerCase().includes(lowerCaseFilter) 
      || project.creator.toLowerCase().includes(lowerCaseFilter)
      || project.name.toLowerCase().includes(lowerCaseFilter);
  });
});

const paginatedProjects = computed(() => {
  const start = (currentPage.value - 1) * itemsPerPage.value;
  const end = start + itemsPerPage.value;
  return filteredProjects.value.slice(start, end);
});

const totalPages = computed(() => {
  return Math.ceil(filteredProjects.value.length / itemsPerPage.value);
});

const nextPage = () => {
  if (currentPage.value < totalPages.value) {
    currentPage.value++;
  }
};

const prevPage = () => {
  if (currentPage.value > 1) {
    currentPage.value--;
  }
};
</script>

<style scoped>
@media (max-width: 768px) {
  .md\:table {
    display: block;
  }
  .md\:table-row {
    display: block;
  }
  .md\:table-cell {
    display: block;
  }
}
</style>
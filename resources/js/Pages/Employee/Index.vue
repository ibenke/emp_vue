<!-- resources/js/Pages/Employee/Index.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage, Link } from '@inertiajs/vue3'

</script>

<template>
    <Head title="Employees" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Employees</h2>
        </template>
        
    </AuthenticatedLayout>
</template>

  

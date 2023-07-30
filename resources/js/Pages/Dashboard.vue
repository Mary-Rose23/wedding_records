<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    clients: Array,
    users: Array
})



</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-32">
                    <h2 class="text-xl p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">
                        WeddingVault is an innovative and reliable system that embodies the essence of safeguarding and conveniently accessing wedding-related information. As the name suggests, it serves as a secure and protected digital vault, preserving the cherished memories and essential details of each wedding. With WeddingVault, couples can trust in the privacy and longevity of their records, ensuring that their special day remains immortalized and readily available for years to come.
                    </h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div class="flex flex-wrap">

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


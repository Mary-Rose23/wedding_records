<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    client: Object
})

const form = useForm({
    title: props.client.title,
    date: props.client.date,
    location: props.client.location,
    bride: props.client.bride,
    groom: props.client.groom,
    email: props.client.email,

})

function submit() {

    if (form.price === '') {
        // If the price is empty, call the updatePrice function to calculate and set it
        updatePrice();
    }

    // Now, the form.price value should be updated with the calculated price

    form.patch('/clients/' + props.client.id)
}


</script>

<template>
    <Head title="Edit Client" />

    <AuthenticatedLayout>
        <div style="display: grid; place-content: center;">
            <div style="margin-top: 70px;">
                <form @submit.prevent="submit" class="justify-between mx-auto">
                    <div class="text-white">
                        <label for=""><b>Wedding Title</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="title" v-model="form.title" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Date</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="date" id="date" v-model="form.date" class="text-white mb-10 border-0 ">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Location</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="location" v-model="form.location" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Bride's Name</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="bride" v-model="form.bride" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Groom's Name</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="groom" v-model="form.groom" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Email</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="email" id="email" v-model="form.email" class="text-white mb-10 border-0">
                    </div>

                    <button style="width: 375px;" type="submit" class="bg-white text-black hover:bg-black hover:text-white duration-100 p-5">Update</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

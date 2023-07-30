<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({

    title: '',
    date: '',
    location: '',
    bride: '',
    groom: '',
    email: '',
    pic: null
});

function submit() {

    form.post('/clients/');
}

</script>

<template>
    <Head title="Create Client" />
    <AuthenticatedLayout>
        <div style="display: grid; place-content: center;">
            <div style=" margin-top: 70px;">
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
                    <div class=" text-white">
                        <label for="pic"><b>Wedding Picture</b></label> <br>
                        <input required type="file" @input="form.pic = $event.target.files[0]" class="h-full border-gray-400 rounded text-center" accept="image/png" />
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                        </progress>
                        </div> <br>
                    <button style="width: 375px;" type="submit" class="bg-white text-black hover:bg-black hover:text-white duration-100 p-5">Create</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

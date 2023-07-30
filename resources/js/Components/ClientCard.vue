<template>
<div style="cursor: pointer;" @click="open(client)" class="flex flex-wrap">
    <div class="m-3 mb-8 shadow-2xl">
        <div class="flex" style="margin-bottom: -50px; margin-left: 15px;">
            <label :for="'enabled' + '-' + client.id" class="switch">
                <input type="checkbox" :id="'enabled' + '-' + client.id" :checked="client.enabled" @change.prevent="toggleEnabled(client)">
                <span class="slider round"></span>
            </label>
            <h1 style="font-size: 20px; margin-left: 15px; z-index: 1; text-shadow: 0px 2px 5px black;">
                <b>{{ client.enabled ? 'Done' : 'Pending' }}</b>
            </h1>
        </div>
        <img :src="client.picUrl" alt="Product photo" class="w-[580px] h-[480px]">
        <div style="transform: translateY(-280px); text-align: center; margin-bottom: -60px; text-shadow: 0px 2px 5px #000000;">
            {{ client.bride }} & {{ client.groom }}
        </div>
        <div class="p-5" style="font-size: 15px; margin-bottom: -80px; transform: translateY(-77px); background-color: rgba(0, 0, 0, 0.701);">
            <div class="mb-2 text-center" style="font-size: 20px;">
                <b> {{ client.title }}</b>
            </div>
        </div>

    </div>
</div>
</template>
<style scoped>
    .switch {
    position: relative;
    display: inline-block;
    width: 75px;
    height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    /* The slider */
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #6a6a6a;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 5px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #20a6c7;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #1ac233;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26spx);
    -ms-transform: translateX(26px);
    transform: translateX(40px);
    }


    .Rounded .sliders,
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }
</style>

<script setup>
import { router } from '@inertiajs/vue3';


const props = defineProps({
    client: Object
})

function open(client) {
    router.visit('/clients/' + client.id)
}


function toggleEnabled(client) {
    router.visit('/clients/toggle/' + client.id,{
        method: 'post',
        preserveScroll: true
    })
}

</script>

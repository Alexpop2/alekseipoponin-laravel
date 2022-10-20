<script setup>
import {defineProps} from "vue";
import {Link} from '@inertiajs/inertia-vue3';


defineProps({
    href: String,
    active: Boolean,
})
</script>

<template>
    <li class="p-3 first:border-0 lg:border-l lg:border-l-gray-300">
        <button
            class="block text-center hover:text-black active:text-black transition-all"
            :class="{'text-black': active, 'text-gray-500': !active}"
        >
            <span class="block w-full"><slot name="icon"></slot></span>
            <span class="block w-full font-light"><slot name="text"></slot></span>
        </button>
    </li>
</template>

<style scoped>

</style>

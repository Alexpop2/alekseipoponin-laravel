<script setup>
import {defineProps} from "vue";
import {Link} from '@inertiajs/inertia-vue3';


defineProps({
    href: String
})
</script>

<template>
    <li class="p-3 first:border-0 lg:border-l lg:border-l-gray-300">
        <Link
            :href="href"
            class="block text-center text-gray-500 hover:text-black active:text-black transition-all"
        >
            <span class="block w-full"><slot name="icon"></slot></span>
            <span class="block w-full font-light"><slot name="text"></slot></span>
        </Link>
    </li>
</template>

<style scoped>

</style>

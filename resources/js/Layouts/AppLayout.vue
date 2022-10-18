<script setup>
import {defineProps} from "vue";
import {Head} from '@inertiajs/inertia-vue3';
import Menu from "../Components/Menu.vue";

defineProps({
    title: String,
});
</script>

<template>
    <div>
        <Head :title="title" />

        <div class="min-h-screen bg-gray-400">
            <main>
                <slot />
            </main>
        </div>
        <Menu />
    </div>
</template>

<style scoped>

</style>

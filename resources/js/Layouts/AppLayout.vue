<script setup>
import {defineProps} from "vue";
import {Head} from '@inertiajs/inertia-vue3';

defineProps({
    title: String,
});
</script>

<template>
    <div>
        <Head :title="title" />

        <div class="min-h-screen bg-gray-100">
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<style scoped>

</style>

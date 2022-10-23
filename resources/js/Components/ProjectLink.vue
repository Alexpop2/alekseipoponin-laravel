<script setup>
import {defineProps} from "vue";

defineProps({
   href: String,
   img: String,
});
</script>

<template>
    <div class="relative opacity-25 hover:opacity-100 transition-all border border-gray-500 rounded">
        <a :href="href"><div class="w-full h-[200px] bg-center bg-contain bg-no-repeat cursor-pointer transition-all" :style="`background-image: url('${img}')`"></div></a>
    </div>
</template>

<style scoped>

</style>

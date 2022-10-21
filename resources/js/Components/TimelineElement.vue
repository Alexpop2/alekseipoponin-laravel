<script setup>

</script>

<template>
    <div class="font-extralight text-gray-300 mt-4">
        <span class="rounded-lg border border-gray-300 px-2"><slot name="years" /></span>
    </div>
    <div><slot name="title" /></div>
    <div class="font-extralight text-gray-500">
        <slot name="text" />
    </div>
</template>

<style scoped>

</style>

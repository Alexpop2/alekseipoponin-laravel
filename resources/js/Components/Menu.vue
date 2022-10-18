<script setup>

import MenuElement from "./MenuElement.vue";
</script>

<template>
    <div class="fixed left-w-center w-full lg:w-fit bottom-0 lg:bottom-4 mx-auto bg-white lg:rounded-lg drop-shadow-2xl border border-solid border-gray-300 z-50">
        <ul class="flex justify-between">
            <MenuElement
                href="#"
            >
                <template #icon>
                    <i class="fa-regular fa-user"></i>
                </template>
                <template #text>
                    About
                </template>
            </MenuElement>
            <MenuElement
                href="#"
            >
                <template #icon>
                    <i class="fa-regular fa-rectangle-list"></i>
                </template>
                <template #text>
                    Resume
                </template>
            </MenuElement>
            <MenuElement
                href="#"
            >
                <template #icon>
                    <i class="fa-solid fa-briefcase"></i>
                </template>
                <template #text>
                    Projects
                </template>
            </MenuElement>
            <MenuElement
                href="#"
            >
                <template #icon>
                    <i class="fa-regular fa-envelope"></i>
                </template>
                <template #text>
                    Contact
                </template>
            </MenuElement>
        </ul>
    </div>
</template>

<style scoped>

</style>

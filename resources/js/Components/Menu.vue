<script setup>

import MenuElement from "./MenuElement.vue";
import {defineProps} from "vue";

defineProps({
    pageData: Object
});

function scrollTo(el){
    let domEl = document.querySelector(`#${el}`);
    window.scrollTo(0, domEl.offsetTop);
}
</script>

<template>
    <div class="fixed left-w-center w-full lg:w-fit bottom-0 lg:bottom-4 mx-auto bg-white lg:rounded-lg drop-shadow-2xl border border-solid border-gray-300 z-50">
        <ul class="flex justify-between">
            <MenuElement
                @click="pageData.currentSection = 'about'; scrollTo('about')"
                :active="pageData.currentSection === 'about'"
            >
                <template #icon>
                    <i class="fa-regular fa-user"></i>
                </template>
                <template #text>
                    About
                </template>
            </MenuElement>
            <MenuElement
                @click="pageData.currentSection = 'resume'; scrollTo('resume')"
                :active="pageData.currentSection === 'resume'"
            >
                <template #icon>
                    <i class="fa-regular fa-rectangle-list"></i>
                </template>
                <template #text>
                    Resume
                </template>
            </MenuElement>
            <MenuElement
                @click="pageData.currentSection = 'projects'; scrollTo('projects')"
                :active="pageData.currentSection === 'projects'"
            >
                <template #icon>
                    <i class="fa-solid fa-briefcase"></i>
                </template>
                <template #text>
                    Projects
                </template>
            </MenuElement>
            <MenuElement
                @click="pageData.currentSection = 'contact'; scrollTo('contact')"
                :active="pageData.currentSection === 'contact'"
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

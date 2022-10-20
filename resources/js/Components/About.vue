<script setup>
import TextHeader from "../Components/TextHeader.vue";
import DescriptionCard from "../Components/DescriptionCard.vue";
import Service from "../Components/Service.vue";

</script>

<template>
    <DescriptionCard>
        <TextHeader>
            About Me
        </TextHeader>
        <div class="font-light">
            Hello. My name is Aleksei Poponin. I'm Full stack web developer with 8+ years experience. Mainly working with PHP, CSS, JavaScript, Laravel and Vue.js.
        </div>
        <TextHeader class="mt-12">
            My Services
        </TextHeader>
        <div class="font-light">
            <div class="grid grid-cols-2 gap-4 text-center">
                <Service>
                    <template #icon><i class="fa-brands fa-html5"></i></template>
                    <template #text>Frontend</template>
                </Service>
                <Service>
                    <template #icon><i class="fa-solid fa-code"></i></template>
                    <template #text>Backend</template>
                </Service>
            </div>
        </div>
    </DescriptionCard>
</template>

<style scoped>

</style>

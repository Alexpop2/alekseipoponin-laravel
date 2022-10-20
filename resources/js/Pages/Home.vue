<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import Container from "../Components/Container.vue";
import PersonCard from "../Components/PersonCard.vue";
import About from "../Components/About.vue";
import Resume from "../Components/Resume.vue";
import Projects from "../Components/Projects.vue";
import Contact from "../Components/Contact.vue";
import {onMounted, ref} from "vue";

const pageData = ref({});


onMounted(() => {
    pageData.value.currentSection = 'about';
})

</script>

<template>
    <AppLayout title="Home" :page-data="pageData">
        <Container v-motion-fade>
            <PersonCard />
            <About :class="{'lg:opacity-0 lg:invisible': pageData.currentSection !== 'about'}" id="about" />
            <Resume :class="{'lg:opacity-0 lg:invisible': pageData.currentSection !== 'resume'}" id="resume" />
            <Projects :class="{'lg:opacity-0 lg:invisible': pageData.currentSection !== 'projects'}" id="projects" />
            <Contact :class="{'lg:opacity-0 lg:invisible': pageData.currentSection !== 'contact'}" id="contact" />
        </Container>
    </AppLayout>
</template>

<style scoped>

</style>

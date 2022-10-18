<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import TextHeader from "../Components/TextHeader.vue";
import Container from "../Components/Container.vue";
import PersonCard from "../Components/PersonCard.vue";
import DescriptionCard from "../Components/DescriptionCard.vue";
</script>

<template>
    <AppLayout title="About">
        <Container>
            <PersonCard />
            <DescriptionCard>
                <TextHeader>
                    About me
                </TextHeader>
                <div class="font-light">
                    Hello. My name is Aleksei Poponin. I'm Full stack web developer with 8+ years experience. Mainly working with PHP, CSS, JavaScript, Laravel and Vue.js.
                </div>
            </DescriptionCard>
        </Container>
    </AppLayout>
</template>

<style scoped>

</style>

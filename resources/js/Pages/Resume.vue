<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import TextHeader from "../Components/TextHeader.vue";
import Container from "../Components/Container.vue";
import PersonCard from "../Components/PersonCard.vue";
import DescriptionCard from "../Components/DescriptionCard.vue";
</script>

<template>
    <AppLayout title="Resume">
        <Container>
            <PersonCard />
            <DescriptionCard>
                <TextHeader>
                    Resume
                </TextHeader>
                <div class="font-light">
                    Resume
                </div>
            </DescriptionCard>
        </Container>
    </AppLayout>
</template>

<style scoped>

</style>

<script setup>
import TextHeader from "../Components/TextHeader.vue";
import DescriptionCard from "../Components/DescriptionCard.vue";
import { GoogleMap, Marker } from 'vue3-google-map'
import {useForm, usePage} from "@inertiajs/inertia-vue3";
import Label from "./Label.vue";
import InputError from "./InputError.vue";
import Input from "./Input.vue";
import TextArea from "./TextArea.vue";
import Button from "./Button.vue";
import {computed} from "vue";
import AlertSuccess from "./AlertSuccess.vue";

const center = { lat: 37.8579352, lng: 27.2592791 };

const form = useForm({
    name: '',
    email: '',
    message: '',
});

const submit = (e) => {
    usePage().props.value.flash = null;
    form.post(route('mail'), {
        preserveScroll: true
    });
};

const message = computed(() => usePage().props.value.flash?.message || '');

</script>

<template>
    <DescriptionCard>
        <TextHeader>
            Contact
        </TextHeader>
        <div class="font-light">
            <GoogleMap
                api-key="AIzaSyDBdEkL-v7SLhzGgyC5Y9P6OHbYIyVN090"
                style="width: 100%; height: 200px"
                :center="center"
                :zoom="15"
            >
                <Marker :options="{ position: center }" />
            </GoogleMap>
            <div class="mt-4">Location: <span class="text-gray-500">Kuşadası, Turkey</span></div>
            <div class="mt-2">Email: <span class="text-gray-500"><a href="mailto:alekseipoponin@alekseipoponin.com">alekseipoponin@alekseipoponin.com</a></span></div>
        </div>
        <TextHeader class="mt-4">
            Contact Form
        </TextHeader>
        <AlertSuccess v-if="message" v-motion-slide-left>
            {{ message }}
        </AlertSuccess>
        <form @submit.prevent="submit" class="mt-4">
            <div>
                <Label for="name" value="Your name" />
                <Input
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div class="mt-4">
                <Label for="email" value="Your email" />
                <Input
                    id="email"
                    type="email"
                    v-model="form.email"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mt-4">
                <Label for="message" value="Message" />
                <TextArea
                    id="message"
                    v-model="form.message"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.message" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Send
                </Button>
            </div>
        </form>
    </DescriptionCard>
</template>

<style scoped>

</style>

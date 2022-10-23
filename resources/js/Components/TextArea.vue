<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

</script>

<template>
    <textarea
            rows="10"
            cols="80"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            class="border-gray-300 focus:border-gray-500 focus:ring focus:ring-gray-500 focus:ring-opacity-50 rounded-md shadow-sm"
        >
    </textarea>
</template>

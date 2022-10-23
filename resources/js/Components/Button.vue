<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
    active: {
        type: Boolean,
        default: false,
    }
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 border-2 border-gray-500 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-500 hover:text-white disabled:opacity-25 transition"
        :class="{'text-white': active, 'bg-gray-500': active, 'text-gray-500': !active}"
    >
        <slot />
    </button>
</template>

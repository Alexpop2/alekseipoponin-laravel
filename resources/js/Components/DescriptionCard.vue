<template>
    <div class="w-full h-full absolute pl-[500px] flex" v-motion-slide-right>
        <div class="border rounded-r-lg bg-white h-[90%] w-full my-auto p-8">
            <slot />
        </div>
    </div>
</template>

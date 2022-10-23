<script setup>
import TextHeader from "../Components/TextHeader.vue";
import DescriptionCard from "../Components/DescriptionCard.vue";
import ProjectLink from "./ProjectLink.vue";

</script>

<template>
    <DescriptionCard>
        <TextHeader>
            Projects
        </TextHeader>
        <div class="font-light">
            <h3 class="text-xl">IMEMO</h3>
            <div>imemo.ru whole website development. Many projects have been done with pure PHP, JavaScript, CSS, Bootstrap. Many projects have been done with Laravel + Vue.js frameworks. For public and private usage.</div>
            <div>Most valuable: </div>
            <ul class="list-disc list-inside">
                <li>Online application system for postgraduate school.</li>
                <li>Online voting system in the competitions for vacancies.</li>
                <li>Online voting system for academic council tasks.</li>
                <li>REB Statistics graphs.</li>
                <li>Energyeconomics section graphs.</li>
            </ul>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mt-4">
                <div>
                    <ProjectLink
                        href="https://t.ly/fN8m"
                        img="/assets/imemo.png"
                    />
                </div>
                <div>
                    <ProjectLink
                        href="https://t.ly/-PVY"
                        img="/assets/reb.png"
                    />
                </div>
            </div>
            <h3 class="text-xl mt-4">afjournal.ru</h3>
            <div>Analysis and Forecasting. IMEMO Journal. Website development.</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mt-4">
                <div>
                    <ProjectLink
                        href="https://t.ly/sbr3"
                        img="/assets/afjournal.png"
                    />
                </div>
            </div>
            <h3 class="text-xl mt-4">primakovreadings.com</h3>
            <div>Primakov Readings meetings. Website development.</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mt-4">
                <div>
                    <ProjectLink
                        href="https://t.ly/x4rc"
                        img="/assets/primakovreadings.png"
                    />
                </div>
            </div>
            <h3 class="text-xl mt-4">Self projects</h3>
            <div>Coopnotes - for share your notes with other users.</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mt-4">
                <div>
                    <ProjectLink
                        href="https://t.ly/Mzsc"
                        img="/assets/coopnotes.png"
                    />
                </div>
            </div>
        </div>
    </DescriptionCard>
</template>

<style scoped>

</style>

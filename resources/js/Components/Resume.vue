<script setup>
import TextHeader from "../Components/TextHeader.vue";
import DescriptionCard from "../Components/DescriptionCard.vue";
import Service from "../Components/Service.vue";
import TimelineElement from "./TimelineElement.vue";
import Tag from "./Tag.vue";
</script>

<template>
    <DescriptionCard>
        <TextHeader>
            Resume
        </TextHeader>
        <div class="font-light">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center">
                <div>
                    <div class="text-xl"><i class="fa-solid fa-briefcase"></i> Experience</div>
                    <TimelineElement>
                        <template #years>
                            2014 - Present
                        </template>
                        <template #title>
                            Primakov National Research Institute of World Economy and International Relations, Russian Academy of Sciences (IMEMO)
                        </template>
                        <template #text>
                            Full Stack Web developer
                        </template>
                    </TimelineElement>
                </div>
                <div>
                    <div class="text-xl"><i class="fa-solid fa-school"></i> Education</div>
                    <TimelineElement>
                        <template #years>
                            2015 - 2018
                        </template>
                        <template #title>
                            Federal State Budgetary Educational Institution of Higher Education Moscow Technological University
                        </template>
                        <template #text>
                            Master's degree
                        </template>
                    </TimelineElement>
                    <TimelineElement>
                        <template #years>
                            2011 - 2015
                        </template>
                        <template #title>
                            Federal State Educational Budgetary Institution of Higher Education Moscow State University of Economics, Statistics and Informatics (MESI)
                        </template>
                        <template #text>
                            Bachelor's degree
                        </template>
                    </TimelineElement>
                </div>
                <div>
                    <div class="text-xl"><i class="fa-solid fa-tags"></i> Skills</div>
                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <Tag>
                            PHP
                        </Tag>
                        <Tag>
                            MySQL
                        </Tag>
                        <Tag>
                            Laravel
                        </Tag>
                        <Tag>
                            CSS
                        </Tag>
                        <Tag>
                            JavaScript
                        </Tag>
                        <Tag>
                            Vue.js
                        </Tag>
                        <Tag>
                            HTML
                        </Tag>
                        <Tag>
                            Git
                        </Tag>
                        <Tag>
                            API Integration
                        </Tag>
                        <Tag>
                            CI/CD
                        </Tag>
                        <Tag>
                            Docker
                        </Tag>
                        <Tag>
                            Swift
                        </Tag>
                    </div>
                </div>
                <div>
                    <div class="text-xl"><i class="fa-solid fa-user"></i> Soft Skills</div>
                    <div class="mt-4 flex flex-wrap justify-center gap-2">
                        <Tag>
                            Responsibility
                        </Tag>
                        <Tag>
                            Teamwork
                        </Tag>
                        <Tag>
                            Communication
                        </Tag>
                        <Tag>
                            Problem-solving
                        </Tag>
                        <Tag>
                            Time management
                        </Tag>
                        <Tag>
                            Decision-making
                        </Tag>
                        <Tag>
                            Creativity
                        </Tag>
                        <Tag>
                            Adaptability
                        </Tag>
                        <Tag>
                            Organizational
                        </Tag>
                        <Tag>
                            Flexibility
                        </Tag>
                        <Tag>
                            Patience
                        </Tag>
                    </div>
                </div>
                <div>
                    <div class="text-xl"><i class="fa-solid fa-language"></i> Languages</div>
                    <div class="mt-4">
                        <div>English</div>
                        <div class="text-gray-500">Professional Working Proficiency</div>
                    </div>
                    <div class="mt-2">
                        <div>German</div>
                        <div class="text-gray-500">Elementary Proficiency</div>
                        <div class="text-gray-500">Goethe Zertifikat A1</div>
                    </div>
                    <div class="mt-2">
                        <div>Russian</div>
                        <div class="text-gray-500">Native</div>
                    </div>
                </div>
                <div>
                    <div class="text-xl"><i class="fa-solid fa-list-check"></i> Also</div>
                    <div class="mt-4">
                        <div><i class="fa-solid fa-check"></i> Have a certificate for meeting organisation "Primakov Readings 2019"</div>
                        <div><i class="fa-solid fa-check"></i> Participated in social life as cameraman and video editor with polit.ru</div>
                    </div>
                </div>
            </div>
        </div>
    </DescriptionCard>
</template>

<style scoped>

</style>

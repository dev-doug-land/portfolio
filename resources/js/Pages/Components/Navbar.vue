<script setup>
    import { Link } from "@inertiajs/vue3";

    defineProps({
        isOnSectionPage: Boolean,
    })

</script>

<template>
    <nav v-if="isOnSectionPage" class="flex justify-center mx-auto">
        <ul class="flex justify-center max-w-sm p-3">
            <Link as="li" class="px-2 drop-shadow-2xl max-w-sm flex hover:text-[#2D19FF]" :href="'/home'">About me</Link>
            <Link as="li" class="px-2 drop-shadow-2xl max-w-sm flex hover:text-[#2D19FF]" :href="'/home'">Projects</Link>
            <Link as="li" class="px-2 drop-shadow-2xl max-w-sm flex hover:text-[#2D19FF]" :href="'/home'">Skills</Link>
            <Link as="li" class="px-2 drop-shadow-2xl max-w-sm flex hover:text-[#2D19FF]" :href="'/home'">Contact</Link>
        </ul>
    </nav>
</template>


<style lang="scss" scoped>

    nav{
        background-color: #FFAE19;
        ul{
            li{
                color: #FFF;
                font-family: 'Roboto', sans-serif;
            }
        }
    }

</style>
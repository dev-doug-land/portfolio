<script setup>
    import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="md:px-16 sm:px-8 flex justify-between w-[100vw] max-h-[3.375rem]">
        <Link :href="'/home'" class="flex justify-center w-[15vw] min-w-[230px] transition rounded-lg hover:scale-110 hover:bg-[#806533] duration-300 hover:translate-y-2 " >
            <img :src="asset('/images/logo.png')" class="hover:invert max-w-[158px] min-w-[158px] max-h-[53px] min-h-[53px]" alt="Logo site">
        </Link>
        <ul class="flex justify-center p-3 w-[35vw] gap-x-3">
            <Link as="a" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" :href="'/about'">About me</Link>
            <Link as="a" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" :href="'/projects'">Projects</Link>
            <Link as="a" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" :href="'/skills'">Skills</Link>
            <Link as="a" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" :href="'/contact'">Contact</Link>
        </ul>
    </nav>
</template>


<style lang="scss" scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

    nav{
        position: fixed;
        background-color: #FFAE19;
        z-index: 999;
        ul{
            a{
                color: #0E1623;
                font-family: 'Roboto', sans-serif;
            }
        }
    }

</style>

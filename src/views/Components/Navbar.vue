<script setup>
    import { ref } from 'vue';
    import { isMobile } from '@/helpers.js';

    let isNavbarActive = ref(false);

    function toggleNavbar() {
        isNavbarActive.value = !isNavbarActive.value;
    }

</script>

<template>
    <nav v-if="!isMobile()" class="md:px-16 sm:px-8 flex justify-between w-[100vw] max-h-[3.375rem]">
        <RouterLink to="/home" class="flex justify-center w-[15vw] min-w-[230px] transition rounded-lg hover:scale-110 hover:bg-[#806533] duration-300 hover:translate-y-2 " >
            <img src="/images/logo.png" class="hover:invert max-w-[158px] min-w-[158px] max-h-[53px] min-h-[53px]" alt="Logo site">
        </RouterLink>
        <ul class="flex justify-center p-3 w-[35vw] gap-x-3">
            <RouterLink class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" to="/about">About me</RouterLink>
            <RouterLink class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" to="/projects">Projects</RouterLink>
            <RouterLink class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" to="/skills">Skills</RouterLink>
            <RouterLink class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]" to="/contact">Contact</RouterLink>
        </ul>
    </nav>
    <nav v-else class="bg-gray-800 p-4 md:px-16 sm:px-8 flex justify-between w-[100vw] max-h-[3.375rem]">
        <div class="flex items-center justify-between w-full">
            <div class="flex justify-between w-full">
                <RouterLink to="/home" class="flex justify-start w-[15vw] min-w-[230px] transition rounded-lg hover:scale-110 hover:bg-[#806533] duration-300 hover:translate-y-2 " >
                    <img src="/images/logo.png" class="hover:invert max-w-[158px] min-w-[158px] max-h-[53px] min-h-[53px]" alt="Logo site">
                </RouterLink>
                <button class="text-white focus:outline-none" @click="toggleNavbar">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div :class="{'hidden': !isNavbarActive, 'flex': true, 'flex-col': true, 'mt-4': true}" class="w-full">
                    <ul class="flex justify-center flex-col p-3 w-[35vw] gap-x-3">
                        <RouterLink to="/about" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]">About me</RouterLink>
                        <RouterLink to="/project" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]">Projects</RouterLink>
                        <RouterLink to="/skills" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]">Skills</RouterLink>
                        <RouterLink to="/contact" class="px-2 flex justify-center items-center hover:scale-110 rounded shadow-inner hover:shadow-lg drop-shadow-2xl max-w-sm text-base hover:text-[#2D19FF] hover:shadow-[#2D19FF]">Contact</RouterLink>
                    </ul>
                </div>
            </div>
        </div>
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

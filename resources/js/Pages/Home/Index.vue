<script setup>
import Compass from '../Components/Compass.vue';

</script>

<template>
    <div id="background" class="grid h-screen">
        <div id="option1" class="grid col-span-12 h-[calc(100vh/3)] text-6xl text-[#FFEDE6] ease-in duration-300 hover:text-[#B4F58E] place-content-center">About me</div>
        <div id="option2" class="grid col-span-5 h-[calc(100vh/3)] text-6xl text-[#FFEDE6] ease-in duration-300 hover:text-[#9AD3F5] place-content-center">Projects</div>
        <Compass class="col-span-2 h-[calc(100vh/3)]"/>   
        <div id="option3" class="grid col-span-5 h-[calc(100vh/3)] text-6xl text-[#FFEDE6] ease-in duration-300 hover:text-[#F5DEBF] place-content-center">Skills</div>
        <div id="option4" class="grid col-span-12 h-[calc(100vh/3)] text-6xl text-[#FFEDE6] ease-in duration-300 hover:text-[#f4a6f5] place-content-center">
            Contact
        </div>
    </div>
</template>


<style lang="scss" scoped>

    #background{
        div{
            border: 1px solid white;
        }
        width: 100%;
    }

</style>
<script setup>
import { Link } from '@inertiajs/vue3';
import Compass from '../Components/Compass.vue';

// // watch works directly on a ref
// watch(question, async (newQuestion, oldQuestion) => {
//   if (newQuestion.indexOf('?') > -1) {
//     try {
//       const res = await fetch('https://yesno.wtf/api')
//       answer.value = (await res.json()).answer
//     } catch (error) {
//       answer.value = 'Error! Could not reach the API. ' + error
//     }
//   }
// })

</script>

<template>
    <div class="grid h-screen">
        <Link id="option1" :href="'/home'" class="grid col-span-12 h-[calc(100vh/3)] lg:text-6xl md:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#B4F58E] place-content-center">About me</Link>
        <div class="flex justify-around w-[100vw]">
            <Link id="option2" :href="'/home'" class="grid h-[calc(100vh/3)] lg:text-6xl md:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#9AD3F5] place-content-center">Projects</Link>
            <Compass class="grid px-4 h-[calc(100vh/3)]"/>   
            <Link id="option3" :href="'/home'" class="grid h-[calc(100vh/3)] lg:text-6xl md:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#F5DEBF] place-content-center">Skills</Link>
        </div>
        <Link id="option4" :href="'/home'" class="grid col-span-12 h-[calc(100vh/3)] lg:text-6xl md:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#f4a6f5] place-content-center">Contact</Link>
    </div>
</template>


<style lang="scss" scoped>


</style>
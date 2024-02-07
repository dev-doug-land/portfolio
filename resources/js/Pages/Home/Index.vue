<script setup>
import { Link } from '@inertiajs/vue3';
import Compass from '@/Pages/Components/Compass.vue';

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
        <Link :href="'/about'" class="grid col-span-12 h-[calc(100vh/3)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#B4F58E] place-content-center">About me</Link>
        <div class="grid grid-cols-12 w-[100vw]">
            <Link :href="'/projects'" class="grid col-span-5 h-[calc(100vh/3)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#9AD3F5] place-content-center">Projects</Link>
            <Compass class="grid col-span-2 place-content-center"/>
            <Link :href="'/home'" class="grid col-span-5 h-[calc(100vh/3)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#F5DEBF] place-content-center">Skills</Link>
        </div>
        <Link :href="'/home'" class="grid col-span-12 h-[calc(100vh/3)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#f4a6f5] place-content-center">Contact</Link>
    </div>
</template>


<style lang="scss" scoped>


</style>
<script setup>
    import Compass from '@/views/Components/Compass.vue';

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
    <div class="grid h-screen max-h-[100vh]">
        <RouterLink to="/about" class="grid col-span-12 h-[calc(100vh/3 - 0.3px)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#B4F58E] place-content-center">About me</RouterLink>
        <div class="flex justify-around md:grid md:grid-cols-12 w-[100vw]">
            <RouterLink to="/projects" class="grid col-span-5 h-[calc(100vh/3 - 0.3px)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#9AD3F5] place-content-center">Projects</RouterLink>
            <Compass class="grid col-span-2 place-content-center"/>
            <RouterLink to="/skills" class="grid col-span-5 h-[calc(100vh/3 - 0.3px)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#F5DEBF] place-content-center">Skills</RouterLink>
        </div>
        <RouterLink to="/contact" class="grid col-span-12 h-[calc(100vh/3 - 0.3px)] lg:text-6xl 2xl:text-9xl xl:text-8xl md:text-6xl sm:text-4x1 text-[#FFEDE6] ease-in duration-300 hover:text-[#f4a6f5] place-content-center">Contact</RouterLink>
    </div>
</template>


<style lang="scss" scoped>


</style>
<template>
    <NavBar />
    <div class="content relative top-[3.375rem]">
        <div class="project h-[calc('100vw - 3.375rem')]"> Resume Registration </div>
        <div class="project"> OneBitHealth </div>
        <div class="project"> OneBitCamera </div>
        <div class="project"> Frog-Jump </div>
    </div>
</template>

<script setup>
import NavBar from '../Components/Navbar.vue';

</script>

<style lang="scss" scoped>

    .project{
        color: #fff;
    }
    
</style>
<script setup>
  import anime from 'animejs';
  import { onMounted } from 'vue';

  onMounted(() => {
    anime({
      targets: '#compass',
      rotate: 5,
      scale: 1,
      loop: true,
    });
  })
</script>

<template>
  <div class="flex justify-center items-center">
    <img id="compass" src="images/compass.svg" alt="Compass image">
  </div>
</template>



<style lang="scss" scoped>
    #compass{
      max-width: 100%;
      max-height: 100%;
      border: 0.15rem solid black;
      border-radius: 50%;
      padding: 1rem;
      background-color: #fff;
    }
</style>
<template>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

  <NavBar />
  <div class="content flex justify-around items-center relative top-[3.375rem]">
    <div class="bg-photo">
      <img src="/images/profile-photo-edited.jpeg" alt="profile-photo" class="photo">
    </div>
    <div class="description">
      <p>
        Desenvolvedor Full Stack, especializado em LIVT (Laravel, InertiaJS, Vue.JS, TailwindCSS). Um ano de experiência em Laravel e Vue.JS, desenvolvendo soluções e modelos de acordo com o esperado do cliente, criando e modificando funcionalidades no principal sistema, de gestão turística. Também possuo experiência com CakePHP no desenvolvimento de um blog.
      </p>
    </div>
  </div>
</template>

<script setup>
import NavBar from '@/views/Components/Navbar.vue';

</script>

<style lang="scss" scoped>

  .content{
    display: flex;
    min-height: calc(100vh - 3.375rem);
    .bg-photo{
      width: 50vw;
      height: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      .photo{
        max-width: 70%;
        border-style: double;
        border-radius: 50%;
        padding: 0.5rem;
        background: linear-gradient(to right, rgba(170,25,255,1) 0%,  rgba(91,12,232,1) 100%);
      }
    }
    .description{
      width: 50vw;
      p {
        font-family: arial;
        color: #FFF;
        text-align: justify;
        padding: 0px 2rem 0px;
        // text-shadow: 2px 2px rgba(173, 173, 173, 0.6);
      }
    }
  }
</style>
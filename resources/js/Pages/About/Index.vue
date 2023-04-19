<template>
  <NavBar :isOnSectionPage="true" />
  <div class="content flex justify-around items-center relative top-[3.375rem]">
    <div class="bg-photo">
      <img src="images/profile-photo.jpeg" alt="profile-photo" class="photo">
    </div>
    <div class="description relative top-[3.375rem]">
      <p>
        Desenvolvedor Full Stack, especializado em LIVT (Laravel, InertiaJS, Vue.JS, TailwindCSS). 

Um ano de experiência em Laravel e Vue.JS, desenvolvendo soluções e modelos de acordo com o esperado do cliente, criando e modificando funcionalidades no principal sistema, de gestão turística. Também possuo experiência com CakePHP no desenvolvimento de um blog.
      </p>
    </div>
  </div>
</template>

<script setup>
import NavBar from '../Components/Navbar.vue';

</script>

<style lang="scss" scoped>

  .content{
    display: flex;
    min-height: calc(100vh - 3.375rem);
    .bg-photo{
    width: 50vw;
    display: flex;
    justify-content: center;
    align-items: center;
    .photo{
      max-width: 60%;
      border: 5px solid white;
      border-style: double;
      border-radius: 50%;
      border-color: #FFAE19;
    }
    }
    .description{
      width: 50vw;
      p {
        color: #FFF;
        text-align: justify;
        padding: 0px 2rem 0px;
        text-shadow: 2px 2px gray;
      }
    }
  }
</style>
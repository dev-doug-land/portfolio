<template>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

  <NavBar />
  <div class="content flex justify-around items-center relative top-[3.375rem]">
    <div class="bg-photo">
      <img src="/images/profile-photo.jpg" alt="profile-photo" class="photo">
    </div>
    <div class="description">
      <h1>Desenvolvedor Full Stack, especializado em Laravel e Vue.JS. </h1>
      <p>A mais de dois anos e meio de experiência em Laravel e Vue.JS, PHP e JS. Já atuei desenvolvendo soluções e modelos de acordo com o esperado pelo cliente, criando e modificando funcionalidades em principais sistemas web, em escopo de gestão turística, layouts de impressões, gestão financeira, gestão de pagamentos, entre outros. Sempre investindo em aprimorar habilidades já existentes e conhecer novas tecnologias.</p>
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
      height: 20vh;
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
      p, h1 {
        font-family: arial;
        color: #FFF;
        text-align: justify;
        padding: 0px 2rem 0px;
        // text-shadow: 2px 2px rgba(173, 173, 173, 0.6);
      }
      h1 {
        font-size: 2rem;
        margin-bottom: 2rem;
      }
    }
  }
</style>
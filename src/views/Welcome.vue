<script setup>
    import anime from 'animejs/lib/anime.es.js';  
    import { onMounted } from 'vue';
    // import { router } from '@inertiajs/vue3'

    let message = 'Welcome To My Portfolio';
    
    message = message.replace(/\S/g, "<span>$&</span>");    

    onMounted(() => {
        anime.timeline({
            loop: false,
        }).add({
            targets: '.text span',
            translateY: [-600, 0],
            scale: [10, 1],
            opacity: [0, 1],
            easing: 'easeOutExpo',
            duration: 1500,
            delay: anime.stagger(100),
        }).add({
            targets: '.text span',
            translateX: [0, -1000],
            scale: [1, 1],
            opacity: [0],
            easing: 'easeOutExpo',
            duration: 1500,
            delay: anime.stagger(100),
            complete: (anim) => {
                // router.get('/home');
            }
        })
    })   
</script>

<template>
    <section>
        <h1 class="text" v-html="message"></h1>
    </section>
</template>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
        section{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #0e1623;
            overflow: hidden;
            .text{
                position: relative;
                font-size: 5rem;
                text-align: center;
                color: #00fe77;
                -webkit-box-reflect: below -3.6rem linear-gradient(transparent, #0004);
                span{
                    position: relative;
                    display: inline-block;
                }
            }
        }
    }

</style>

    
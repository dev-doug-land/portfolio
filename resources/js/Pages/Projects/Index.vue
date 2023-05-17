<template>
    <NavBar />
    <div class="flex justify-between items-center content relative top-[3.375rem] gap-x-[2.5rem]">
        <a href="https://github.com/BigCouve/resume-registration" target="_blank" id="resume-registration" class="project"> 
            <p> Resume Registration </p>
        </a>
        <div class="line"></div>
        <a href="https://github.com/BigCouve/onebithealth" target="_blank" id="one-bit-health" class="project"> 
            <p> One Bit Health </p>
        </a>
        <div class="line"></div>
        <a href="https://github.com/BigCouve/smartphonecamera" target="_blank" id="one-bit-camera" class="project">
            <p> One Bit Camera </p>
        </a>
        <div class="line"></div>
        <a href="https://github.com/BigCouve/blog-in-cakephp" target="_blank" id="cake-blog" class="project">
            <p> Cake Blog </p>
        </a>
    </div>
</template>

<script setup>
import NavBar from '../Components/Navbar.vue';
import { Link } from '@inertiajs/vue3';

</script>

<style lang="scss" scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    .content{
        height: calc(100vh - 3.375rem);
        .project{
            .line{
                margin: 0;
                padding: 0;
                height: inherit;
                background-color: red;
                width: 50px;
            }
            p{
                font-size: 2rem;
                color: #4B77BD;
                font-weight: bold;
                font-family: 'Cambria';
                text-transform: uppercase;
                text-shadow: 2px 2px #0E1623;
                text-align: center;
                background-color: hsl(217, 46%, 52%, 0.5);
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
            }
            height: inherit;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            width: 25%;
            min-width: 10%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            opacity: 0.5;
            &:hover{
                opacity: 1;
                animation: project-focused 3s;
                transition-timing-function: ease-in;
                width: 100%;
                p{
                    transform: translateY(-35vh);
                    transition: 250ms;
                    transition-timing-function: ease-out;
                }
                @keyframes project-focused {
                    0% {width: 25%}
                    100% {width: 100%;}
                }
            }
            
        }

        #resume-registration{
            background-image: url('images/resume-registration.png');
            

        }

        #one-bit-health{
            background-image: url('images/onebithealth.jpeg');
            &:hover{
                width: 100%;
                transition: width 300ms;
                transition-timing-function: ease-in;
                background-size: 50%;
            }
        }

        #one-bit-camera{
            background-image: url('images/camera.jpeg');
            &:hover{
                width: 100%;
                transition: width 300ms;
                transition-timing-function: ease-in;
                background-size: 50%;
            }
        }

        #cake-blog{
            background-image: url('images/blogcake.jpeg');
        }
    }

    
    
</style>
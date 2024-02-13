<script setup>
  import { onMounted } from 'vue';


  function followMouseCursor(){
    let box = document.querySelector("#needle");
    let boxBoundingRect = box.getBoundingClientRect();
    let boxCenter= {
        x: boxBoundingRect.left + boxBoundingRect.width/2, 
        y: boxBoundingRect.top + boxBoundingRect.height/2
    };

    document.addEventListener("mousemove", e => {
        let angle = Math.atan2(e.pageX - boxCenter.x, - (e.pageY - boxCenter.y) )*(180 / Math.PI);      
        box.style.transform = `rotate(${angle}deg)`;  
    })
  }

  // function showInConsole(e){
  //     // anime({
  //     //   targets: '#compass',
  //     //   rotate: 5,
  //     //   scale: 1,
  //     //   loop: true,
  //     // });
  //     setTimeout(() => {
  //         console.log(e.clientX, e.clientY);
          
  //     }, 2000);
  // }

  onMounted(() => {      
      followMouseCursor();
  })
</script>

<template>
  <div>
    <div id="background" class="flex justify-center items-center">
      <img id="compass" src="images/compass.svg" alt="Compass image">
      <div id="needle">
        <!-- i need create the needle with css border -->
        <div id="red-tip"></div>
        <div id="black-tip"></div>
      </div>
    </div>
  </div>
</template>



<style lang="scss" scoped>
    #background{
      position: relative;
      margin: 0;
      padding: 0;
      max-width: 25vw;
      #compass{
        max-width: 12rem;
        border: 0.15rem solid black;
        border-radius: 50%;
        padding: 1rem;
        background-color: #fff;
      }
      #needle{
        position: absolute;
        // left: calc(12rem / 2 - 0.4rem);
        // left: 50%;
        // top: 50%;
        // transform: translate(-50%,-50%);
        // left: 46.5%;
        // transform: translate(-46.5%, -12.8%);
        #red-tip{
          width: 0;
          height: 0;
          border-left: 0.6rem solid transparent;
          border-right: 0.6rem solid transparent;
          border-bottom: 5rem solid #b2140f;
        };
        #black-tip{
          width: 0;
          height: 0;
          border-left: 0.6rem solid transparent;
          border-right: 0.6rem solid transparent;
          border-top: 5rem solid #343434;
        }
      }
    }
</style>

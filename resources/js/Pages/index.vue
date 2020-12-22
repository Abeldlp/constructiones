<template>
    <navbar></navbar>
    <div id="banner" class="w-100">
        <div id="intro">
            <h2>La casa de tus suenos</h2>
            <h3>La casa de tus suenos es un lugar donde buscar confort</h3>
        </div>
    </div>
    <div class="w-100 d-flex align-items-center justify-content-center">
        <img id="down-image" src="/storage/pageImages/downthin.png"/>
<!--        <transition name="fade">-->
<!--            <img id="down-image" src="/storage/pageImages/downthin.png"/>-->
<!--        </transition>-->
    </div>


</template>

<script>
import Navbar from "./components/navbar";
export default {
    name: "index",
    components: {Navbar},
    mounted() {
        this.dropArrow()
        this.showIntro()
    },
    methods:{
        showIntro(){
            let intro = document.getElementById('intro')
            setTimeout(function(){
                intro.style.transform = 'translateY(20px)'
                intro.style.opacity = 1
            }, 500);
        },
        dropArrow(){
            let arrow = document.getElementById('down-image')
            setTimeout(function(){
                arrow.style.transform = 'translateY(20px)'
                arrow.style.opacity = 1
            }, 2000);
        }
    }
}
</script>

<style scoped>
    #banner{
        height: 80vh;
        background-image: url("/storage/pageImages/banner.jpg");
        background-size: cover;
        background-position: center;
    }

    #intro{
        background-color: rgba(255, 255, 255, .5);
        box-shadow: 0px 10px 12px -2px rgba(0,0,0,0.54);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 30px;
        min-width: 300px;
        max-width: 500px;
        height: 300px;
        position: absolute;
        bottom: 130px;
        right: 30px;
        backdrop-filter: blur(5px);
        opacity: 0;
        transition: all ease-in-out 0.5s;
        transform: translateY(40px);
    }

    #down-image{
        height: 40px;
        transition: all ease-in-out 0.5s;
        opacity: 0;
    }


</style>

<template>
    <navbar></navbar>
    <div id="banner" class="w-100">
        <div id="intro">
            <h2>La casa de tus suenos</h2>
            <h4>El lugar donde la comodidad esta al alcance de todos</h4>
        </div>
    </div>
    <div class="w-100 d-flex align-items-center justify-content-center">
        <img id="down-image" src="/storage/pageImages/downthin.png"/>
    </div>
    <br>

    <div style="padding-top: 10vh">
        <h1 class="pt-5 text-center">Ofrecemos calidad de servicio rapido y comodo</h1>
        <h4 class="text-center pb-5">Asi es como lo hacemos posible</h4>
        <project></project>
    </div>


    <div id="presentation" style="padding-top: 10vh; height: auto">
        <h3 class="pt-5 text-center">El mejor equipo de profesionales</h3>
        <br>
        <div class="d-flex justify-content-center flex-wrap">
            <personal image="/storage/pageImages/ceo.jpg" name="Paco Jimenez" position="Jefe de empresa" tel="645 234 632"></personal>
            <personal image="/storage/pageImages/subceo.jpg" name="Encarni Borrero" position="Jefe de obras" tel="630 910 900"></personal>
        </div>
        <div class="w-75 m-auto">
            <vueper-slides
                class="no-shadow"
                id="slide"
                :visible-slides="3"
                slide-multiple
                :gap="3"
                :slide-ratio="1 / 4"
                :dragging-distance="200"
                :breakpoints="{ 800: { visibleSlides: 2, slideMultiple: 2 } }">
                <vueper-slide v-for="i in slides" :key="i" :title="i.title" :content="i.content">
                    <template v-slot:content>
                        <div class="vueperslide__content-wrapper">
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="pr-4">{{ i.title }}</div>
                                <star-rating
                                    :rating="i.score"
                                    :fixed-points="true"
                                    :star-size="20"
                                    :round-start-rating="false"
                                ></star-rating>
                            </div>
                            <p class="p-5 text-left">{{i.content}}</p>
                        </div>
                    </template>
                </vueper-slide>
            </vueper-slides>
        </div>
    </div>

    <div id="contact" style="padding-top: 10vh">
        <h1 class="pt-5 text-center">Ponte en contacto</h1>
        <p class="text-center pb-4">Ponte en contacto sin ningun compromiso y responderemos lo antes posible</p>
        <contact-form class="mt-4"></contact-form>
    </div>



</template>

<script>
import Navbar from "./components/navbar";
import Personal from "./components/personal";
import Project from "./components/project";
import ContactForm from "./components/contactForm";
import Evaluation from "./components/evaluation";
import { VueperSlides, VueperSlide } from 'vueperslides'
import StarRating from 'vue-star-rating'
import 'vueperslides/dist/vueperslides.css'
export default {
    name: "index",
    components: {
        Evaluation,
        ContactForm,
        Project,
        Personal,
        Navbar,
        VueperSlide,
        VueperSlides,
        StarRating
    },
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
    },
    data(){
        return {
            slides: [
                {
                    title: 'Maria Jose',
                    score: 4.8,
                    content: 'La mejor reforma! Todo acabado a tiempo y sin ningun problema'
                },
                {
                    title: 'Ricardo Garcia',
                    score: 5,
                    content: 'Los mejores pofesionales que se pueden encontrar, maravilla de personal'
                },
                {
                    title: 'Lope Miranda',
                    score: 4.7,
                    content: 'No he encontrado un servicion igual al que me han proporcionado'
                },
                {
                    title: 'Paula Ramirez',
                    score: 4.9,
                    content: 'Increible servicios, pocos quedan asi'
                },
                {
                    title: 'Fernando Oregon',
                    score: 4.8,
                    content: 'Me sonprendio la rapidez con la que trabajan'
                },
                {
                    title: 'Maria Gutierrez',
                    score: 5,
                    content: 'Tal y como dice en la pagina, la casa de mis suenos'
                },
            ]
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
        border-radius: 5px;
    }

    #down-image{
        height: 40px;
        transition: all ease-in-out 0.5s;
        opacity: 0;
    }

    #presentation{
        height: 500px;
    }

    #slide{
        margin: 5px;
    }
</style>

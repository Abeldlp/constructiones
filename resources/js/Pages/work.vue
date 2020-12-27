<template>
    <navbar></navbar>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-center align-items-center">

            <div v-for="cons in constructions" id="work_image" v-bind:style="{
                backgroundImage: 'url(' +'/storage/'+ cons.image + ')',
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                height: '400px',
                width: '350px' ,
                borderRadius : '5px',
                cursor: 'pointer',
                margin: '10px'
            }"></div>
        </div>
    </div>
</template>

<script>
import Navbar from "./components/navbar";
export default {
    name: "work",
    components: {Navbar},
    props: {
        constructions : Array
    }
}
</script>

<style scoped>

    #work_image:hover{
        opacity: 0.7;
    }

</style>

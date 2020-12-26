<template>
    <navbar></navbar>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-around align-items-center">
            <img v-for="cons in constructions" :src="`/storage/${cons.image}`" >
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

    img{
        max-width: 400px;
    }

</style>

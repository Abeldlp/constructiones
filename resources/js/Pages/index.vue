<template>
    <navbar></navbar>
    <div id="banner" class="w-100">

    </div>
</template>

<script>
import Navbar from "./components/navbar";
export default {
name: "index",
    components: {Navbar}
}
</script>

<style scoped>
    #banner{
        height: 80vh;
        background-image: url("/storage/pageImages/banner.jpg");
        background-size: cover;
        background-position: center;
    }
</style>

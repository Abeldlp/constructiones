<template>
    <div id="personal" class="d-flex justify-content-start align-items-center m-5">
        <img id="personal_image" :src="image"/>
        <div class="pl-4">
            <h2>{{name}}</h2>
            <p>{{position}}</p>
            <p>tel: {{tel}}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "personal",
    props:{
        image: String,
        name: String,
        position : String,
        tel : String,
    }
}
</script>

<style scoped>
    #personal{
        max-width: 500px;
        min-width: 400px;
    }

    #personal_image{
        height: 200px;
        border-radius: 100%;
    }

</style>

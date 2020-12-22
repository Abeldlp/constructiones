<template>
    <div class="d-flex justify-content-center p-3 align-items-center">
        <img class="process_img" src="/storage/pageImages/cimientos.jpg">
        <div>
            <ol class="d-flex flex-column justify-content-around">
                <li>Ponte en contacto</li>
                <li>Te ofrecemos un presupuesto sin compromiso</li>
                <li>Nos ponemos manos a la obra</li>


            </ol>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <img id="curly_down" src="/storage/pageImages/curlydown.png">
    </div>
    <div class="d-flex justify-content-center p-3 align-items-center">
        <div>
            <ol start="4" class="d-flex flex-column justify-content-around pr-4">
                <li>Te mantendremos informado del proceso</li>
                <li>Acabaremos la obra en el tiempo prometido</li>
                <li>Limpiaremos y dejaremos el lugar listo para su uso</li>
            </ol>
        </div>
        <img class="process_img" src="/storage/pageImages/hecha.jpeg">
    </div>

</template>

<script>
export default {
name: "project"
}
</script>

<style scoped>
    .process_img{
        height: 500px;
        border-radius: 5px;
        box-shadow: 0px 10px 12px -2px rgba(0,0,0,0.54);
    }
    ol{
        height: 300px;
    }

    #curly_down{
        transform: rotate(180deg);
    }
</style>

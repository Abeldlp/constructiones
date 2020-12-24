<template>
    <div class="d-flex justify-content-center p-3 align-items-center">
        <img class="process_img" src="/storage/pageImages/cimientos.jpg">
        <div>
            <ul class="d-flex flex-column justify-content-around">
                <li><img class="num" src="/storage/pageImages/num1.png"/>Ponte en contacto</li>
                <li><img class="num" src="/storage/pageImages/num2.png"/>Te ofrecemos un presupuesto sin compromiso</li>
                <li><img class="num" src="/storage/pageImages/num3.png"/>Nos ponemos manos a la obra</li>


            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <img id="curly_down" src="/storage/pageImages/curlydown.png">
    </div>
    <div class="d-flex justify-content-center p-3 align-items-center">
        <div>
            <ul class="d-flex flex-column justify-content-around pr-4">
                <li><img class="num" src="/storage/pageImages/num4.png"/>Te mantendremos informado del proceso</li>
                <li><img class="num" src="/storage/pageImages/num5.png"/>Acabaremos la obra en el tiempo prometido</li>
                <li><img class="num" src="/storage/pageImages/num6.png"/>Limpiaremos y dejaremos el lugar listo para su uso</li>
            </ul>
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
    ul{
        height: 300px;
        list-style: none;
    }

    #curly_down{
        transform: rotate(180deg);
    }

    .num{
        height: 50px;
    }
</style>

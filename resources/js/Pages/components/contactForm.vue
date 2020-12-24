<template>
    <div class="d-flex justify-content-center align-items-center">
        <div id="back_image"></div>
        <div id="contact_form">
            <div class="d-flex w-50 justify-content-between mt-3 align-items-center">
                <span class="w-25">Nombre</span>
                <input v-model="first_name" class="w-75 ml-5"/>
            </div>
            <div class="d-flex w-50 justify-content-between mt-3 align-items-center">
                <span class="w-25">Apellido</span>
                <input v-model="last_name" class="w-75 ml-5"/>
            </div>
            <div class="d-flex w-50 justify-content-between mt-3 align-items-center">
                <span class="w-25">Email</span>
                <input v-model="email" class="w-75 ml-5"/>
            </div>
            <div class="d-flex w-50 justify-content-between mt-3 align-items-center">
                <span class="w-25">Telefono</span>
                <input v-model="tel" class="w-75 ml-5"/>
            </div>
            <div class="d-flex w-50 justify-content-between mt-3 align-items-center">
                <span class="w-25">Trabajo</span>
                <div class="w-75 ml-5 d-flex flex-column">
                    <div><input v-model="inquiry" name="inquiry" type="radio" value="Obra"> <span>Obra</span></div>
                    <div><input v-model="inquiry" name="inquiry"  type="radio" value="Reforma"> <span>Reforma</span></div>
                    <div><input v-model="inquiry" name="inquiry"  type="radio" value="Trabajo electrico"> <span>Trabajo electrico</span></div>
                </div>
            </div>
            <div class="d-flex w-50 justify-content-between mt-3">
                <span class="w-25">Como hablamos?</span>
                <div class="w-75 ml-5 d-flex flex-column">
                    <div><input v-model="contact_method" name="contact_method" type="radio" value="email"> <span>Email</span></div>
                    <div><input v-model="contact_method" name="contact_method"  type="radio" value="telefono"> <span>Telefono</span></div>
                </div>
            </div>
            <button>Enviar</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "contactForm",
    data(){
        return{
            first_name: '',
            last_name: '',
            email: '',
            tel: '',
            inquiry: 'Obra',
            contact_method : 'email'
        }
    }
}
</script>

<style scoped>

    #contact_form{
        width: 70%;
        height: 600px;
        max-width: 700px;
        min-width: 400px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;align-items: center;
        background-color: white;
        box-shadow: 0px 10px 12px -2px rgba(0,0,0,0.3);

    }
    #back_image{
        position: absolute;
        width: 100%;
        height: 700px;
        /*background-color: rgb(230,209,178);*/
        background-image: linear-gradient( 44.8deg,  rgba(255,136,102,0.67) -53.1%, rgba(255,221,136,0.28) 49% );
        z-index: -1;
        clip-path: polygon(0 44%, 100% 0, 100% 100%, 0% 100%);
    }

    button{
        border: none;
        padding: 10px 20px;
        color: white;
        background-color: rgb(24,120,141);
        border-radius: 5px;
        margin-top: 40px;
        transition: all ease-in-out 0.3s;
    }

    button:hover{
        background-color: rgb(119,208,206);
    }

    input{
        padding: 5px;
    }

</style>

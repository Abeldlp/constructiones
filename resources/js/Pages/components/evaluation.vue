<template>

        <button id="button" @click="send"></button>
</template>

<script>
export default {
    name: "evaluation",
    data(){
        return{
            sent : false,
        }
    },
    methods : {
        send (){
            let button = document.getElementById('button')
            if(!this.sent){
                button.classList.add(('onclic'))
                this.sent = true

                setTimeout(function() {
                    button.classList.remove( "onclic" );
                    button.classList.add(('validate'))
                }, 1250 )

                setTimeout(() => {
                    this.$emit('finished')
                }, 1250 )

            }
        },
    }
}
</script>

<style scoped lang="scss">
$green: #1ECD97;
$brown : #a0a078;
$gray: #bbbbbb;
* {
    font-family: 'Roboto', sans-serif;
}

button {
    margin-top: 40px;
    outline:none;
    height: 40px;
    text-align: center;
    width: 130px;
    border-radius:5px;
    background: #fff;
    border: 2px solid $brown;
    color:$brown;
    letter-spacing:1px;
    font:{
        size:12px;
        weight:bold;
    }
    cursor: pointer;
    transition: all 0.25s ease;
    &:hover {
        color:white;
        background: $brown;
    }
    &:active {
        //letter-spacing: 2px;
        letter-spacing: 2px ;
    }
    &:after {
        content:"Enviar";
    }
}
.onclic {
    width: 40px;
    border-color:$gray;
    border-radius:40px;
    border-width:3px;
    font-size:0;
    border-left-color:$green;
    animation: rotating 2s 0.25s linear infinite;

    &:after {
        content:"";
    }
    &:hover {
        color:$green;
        background: white;
    }
}
.validate {
    font-size:13px;
    color: white;
    background: $green;
    border: 2px solid $green;
    &:after {
        font-family:'Roboto', sans-serif;
        content:"Hecho!";
    }
    &:hover{
        background: $green;
    }
}

@keyframes rotating {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
</style>

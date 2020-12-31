<template>
    <admin-navbar></admin-navbar>
    <div class="container">
        <h1>Hola {{user.name}}</h1>

        <div class="enumerator">
            <span>Contactos por hacer: {{undoneContact.length}}</span>
            <span>Total de clientes: {{totalContact.length}}</span>
        </div>
        <div class="enumerator">
            <span>Numero de presupuestos este mes: 5</span>
            <span>Total de presupuestos este mes: 2500 Euros</span>
        </div>
        <div class="enumerator">
            <span>Numero de presupuestos: 32</span>
            <span>Total de presupuestos: 4502 Euros</span>
        </div>
        <div class="total">
            <span>Total Ganancias: 5000 Euros</span>
        </div>

    </div>
</template>

<script>
import AdminNavbar from "./components/adminNavbar";
export default {
    name: "adminMain",
    components: {AdminNavbar},
    props: {
        user : Object,
        totalContact : Array,
        undoneContact : Array,
    }
}
</script>

<style scoped>
    .enumerator{
        background-color: #e9e9e9;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 15px;
        border-radius: 5px;
        max-width: 400px;
        margin: 20px;
        transition: all ease-in-out 0.2s;
    }
    .enumerator span{
        padding: 10px;
    }
    .total{
        background-color: #f5f5f5;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 15px;
        border-radius: 5px;
        max-width: 400px;
        margin: 20px;
        box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.3);
    }
    .enumerator:hover{
        box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.3);
        transform: translateY(-5px);
    }
</style>

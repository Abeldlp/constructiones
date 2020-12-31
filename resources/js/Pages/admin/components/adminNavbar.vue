<template>
    <div class="p-2">
        <div class="container d-flex justify-content-between align-items-center">
            <img id="logo" src="/storage/pageImages/logo.png"/>
            <ul class="d-flex align-items-center justify-content-between pt-3">
                <inertia-link class="text-decoration-none text-dark" href="/admin"><li>Administrador</li></inertia-link>
                <inertia-link class="text-decoration-none text-dark" href="/admin/nueva_obra"><li>Nueva obra</li></inertia-link>
                <inertia-link class="text-decoration-none text-dark" href="/admin/clientes"><li>Clientes</li></inertia-link>
                <inertia-link class="text-decoration-none text-dark" href="/admin"><li>Presupuetos</li></inertia-link>
                <a class="text-decoration-none text-dark" href="/" target="_blank"><li>Pagina web</li></a>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "adminNavbar"
}
</script>

<style scoped>
ul{
    list-style: none;
}
li{
    padding: 0px 20px;
}

#logo{
    height: 85px;
}
</style>

<template>
    <div class="bg-dark d-flex justify-content-between align-items-center p-2">
        <h1 class="text-light">Logo</h1>
        <ul class="text-light d-flex align-items-center justify-content-between pt-3">
            <inertia-link class="text-decoration-none text-light" href="/"><li>Inicio</li></inertia-link>
            <inertia-link class="text-decoration-none text-light" href="/sobre-nosotros"><li>Sobre nosotros</li></inertia-link>
            <inertia-link class="text-decoration-none text-light" href="/obras"><li>Obras</li></inertia-link>
            <inertia-link class="text-decoration-none text-light" href="/contacta"><li>Contacta</li></inertia-link>
        </ul>
    </div>
</template>

<script>
export default {
name: "navbar"
}
</script>

<style scoped>
    ul{
        list-style: none;
    }
    li{
        padding: 0px 20px;
    }
</style>

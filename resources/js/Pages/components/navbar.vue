<template>
    <div class="p-2">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="t">Logo</h1>
            <ul class="d-flex align-items-center justify-content-between pt-3">
                <inertia-link class="text-decoration-none text-dark" href="/"><li>Inicio</li></inertia-link>
                <inertia-link class="text-decoration-none text-dark" href="/sobre-nosotros"><li>Sobre nosotros</li></inertia-link>
                <inertia-link class="text-decoration-none text-dark" href="/obras"><li>Obras</li></inertia-link>
                <inertia-link class="text-decoration-none text-dark" href="/contacta"><li>Contacta</li></inertia-link>
            </ul>
        </div>
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

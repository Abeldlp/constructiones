<template>
    <admin-navbar></admin-navbar>
    <div class="container mt-5 pt-5">
        <form action="/admin/nueva_obra" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" :value="csrf">
            <div class="form-group">
                <label for="product_image">Imagen</label>
                <input id="product_image" type="file" name="image" required/>
            </div>
            <div class="form-group">
                <label for="product_price">Titulo</label>
                <input class="form-control" id="product_price"  name="title"/>
            </div>
            <div class="form-group">
                <label for="product_description">Descripcion</label>
                <textarea class="form-control" id="product_description" name="description"/>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>

</template>

<script>
import AdminNavbar from "./components/adminNavbar";
export default {
    name: "createConstruction",
    components: {AdminNavbar},
    data(){
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    }
}
</script>

<style scoped>

</style>

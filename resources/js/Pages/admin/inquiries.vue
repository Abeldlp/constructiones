<template>
    <admin-navbar></admin-navbar>
    <table class="table table-hover container mt-5 pt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Tipo</th>
            <th scope="col">Contacto</th>
            <th scope="col">Hecho</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="inquiry in inquiries" :key="inquiry.id">
            <td>#{{inquiry.id}}</td>
            <td>{{inquiry.first_name}}</td>
            <td>{{inquiry.last_name}}</td>
            <td>{{inquiry.email}}</td>
            <td>{{inquiry.tel}}</td>
            <td>{{inquiry.inquiry}}</td>
            <td>{{inquiry.contact_method}}</td>
            <td>
                <button v-if="!inquiry.done" @click="setAsDone(inquiry.id)" class="btn btn-outline-info">Hecho</button>
                <span v-else>{{inquiry.done}}</span>
            </td>
            <td>
                <button @click="deleteInquiry(inquiry.id)" class="btn btn-light">Detele</button>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
import AdminNavbar from "./components/adminNavbar";
export default {
    name: "inquiries",
    components: {AdminNavbar},
    props: {
        inquiries : Array
    },
    methods : {
        deleteInquiry(inquiryId){
            axios.delete(`/admin/clientes/delete/${inquiryId}`)
                .then(res => location.reload())
        },
        setAsDone(inquiryId){
            axios.put(`/admin/clientes/update/${inquiryId}`)
                .then(res => location.reload())
        }
    }
}
</script>

<style scoped>

</style>

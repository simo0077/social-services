<template>
    <div class="p-5" style="background: #FFF5F5">
        <h2 class="sub-title text-center fw-bold " style="color: #E05C5C">Vos demandes</h2>
        <hr>
        <form>
            <div class="row">
                <div class="col-6">
                    <p class="h5">Veuillez entrer votre cin, numero de téléphone et date de naissance</p>
                </div>
                <div class="col-6">

                    <div class="mb-3">
                        <input v-model="cin" name="cin" type="text" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input v-model="birthday" name="birthday" max="2002-01-01" type="date" class="form-control"
                               id="exampleInputPassword1">
                    </div>

                </div>
            </div>
        </form>
        <div class="text-center mt-3">
            <button class="btn btn-lg  btn-outline-danger" @click="search">Chercher</button>
        </div>
        <hr>
        <br>


        <div v-for="(demande, index) in demandes.demandes_social_protection">
            <demande-card :demande="demande" :demande_type="'Social protection'" :type="'socialProtection'"/>
        </div>
        <br>
        <div v-for="(demande, index) in demandes.demandes_familial_protection">
            <demande-card :demande="demande" :demande_type="'Familial protection'" :type="'socialProtection'"/>
        </div>
        <div v-for="(demande, index) in demandes.demandes_bourse">
            <demande-card :demande="demande" :demande_type="'Scholarship'" :type="'bourse'"/>
        </div>
        <br>


    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            cin: "",
            birthday: "",
            demandes: []
        }
    },
    methods: {
        search: function () {
            axios.post('/api/suivie/search', {
                cin: this.cin,
                birthday: this.birthday
            }).then(response => {
                this.demandes = response.data
                console.log(this.demandes)
            });
        }
    }
}
</script>

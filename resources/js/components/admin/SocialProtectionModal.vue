<template>
    <div class="modal fade " id="socialProtection" tabindex="-1" ref="socialProtection"
         aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ demande.firstName }} {{ demande.lastName }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="inputAddress">Nom de Famille:</label>
                                <input v-model="demande.lastName"  name="lastname" type="text" class="form-control" placeholder="Nom de Famille"
                                       disabled>

                            </div>
                            <div class="col">
                                <label class="form-label" for="inputAddress">Prénom:</label>
                                <input v-model="demande.firstName" name="firstname" type="text" class="form-control" placeholder="Prénom"
                                       disabled>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="cin">Numéro CIN:</label>
                                <input v-model="demande.cin" name="cin" type="text" class="form-control" placeholder="CIN" disabled >
                            </div>

                            <div class="col ">
                                <label class="form-label">Sexe:</label>
                                <br>
                                <div class="form-check form-check-inline ">
                                    <input v-model="demande.sexe" name="sexe" class="form-check-input" type="radio"
                                           id="inlineRadio1"
                                           value="male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline ">
                                    <input v-model="demande.sexe" name="sexe" class="form-check-input" type="radio"
                                           id="inlineRadio2"
                                           value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Femelle</label>
                                </div>


                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="inputAddress">Téléphone:</label>
                                <input v-model="demande.phone" name="phone" type="text" class="form-control" id="inputAddress" placeholder=""
                                       disabled>
                            </div>
                            <div class="col">
                                <label class="form-label" for="inputAddress">Ville:</label>
                                <input v-model="demande.city" name="city" type="text" class="form-control" id="inputAddress" placeholder=""
                                       disabled>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="inputAddress">Addresse:</label>
                                <input v-model="demande.address" name="address" type="text" class="form-control" id="inputAddress"
                                       placeholder=""
                                       disabled>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label" for="inputRegion">Profession:</label>
                                <input v-model="demande.profession" name="profession" type="text" class="form-control" id="inputAddress" placeholder=""
                                       disabled>
                            </div>

                            <div class="col">
                                <label class="form-label" for="inputAddress">Salaire:</label>
                                <input v-model="demande.salary" name="salary" type="text" class="form-control" id="inputAddress"
                                       placeholder=""
                                       disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['demande'],
    data(){
        return {
           demande_d:{}
        }
    },
    methods:{

    },


}

</script>

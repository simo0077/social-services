<template>
    <div class="modal fade " id="bourse" tabindex="-1" ref="bourse"
         aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ demande.firstName }} {{ demande.lastName }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert" :class="{ 'alert-success': demande.status==2, 'alert-warning': demande.status==1,'alert-danger': demande.status==-1 }" role="alert">
                        <Strong>{{demande.message}}</Strong>
                    </div>
                    <hr>
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
                                <input v-model="demande.sexe" name="sexe" type="text" class="form-control" id="inputAddress" placeholder=""
                                       disabled>


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
                            <div class="col">
                                <label class="form-label" for="inputAddress">Date de naissance:</label>
                                <input v-model="demande.birthday" type="text" class="form-control" id="inputAddress"
                                       placeholder=""
                                       disabled>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-5">
                                <label class="form-label" for="inputRegion">Ecole:</label>
                                <input v-model="demande.school" type="text"  class="form-control" id="inputAddress"
                                       placeholder=""
                                       disabled>
                            </div>

                            <div class="col-4">
                                <label class="form-label" for="inputAddress">Salaire des parents combinés:</label>
                                <input v-model="demande.parentsSalary" type="text" class="form-control" id="inputAddress"
                                       placeholder=""
                                       disabled>
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="inputAddress">Niveau d'étude:</label>
                                <input v-model="demande.level" type="text" class="form-control" id="inputAddress"
                                       placeholder=""
                                       disabled>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col">
                                <a class="btn btn-primary consulter"  :href="/storage/+demande.imagecin" download>
                                    dowload cin image
                                </a>
                            </div>
                            <div class="form-group col">
                                <a class="btn btn-primary consulter"  :href="/storage/+demande.pdfsalaryattestation" download>
                                    dowload salary attestation
                                </a>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</template>
<style>
.consulter:hover {
    background: #FF8D8D;

}

.consulter {
    background: #FAB9B9;
    border: 0px;
    color:#890000;
    border-radius: 20px;
    box-shadow: 1px 2px grey;
}
</style>
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

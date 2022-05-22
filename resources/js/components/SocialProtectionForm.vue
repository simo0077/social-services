<template>
    <form>
        <div class="p-5 mt-4" style="background: #FFF5F5">
            <h2 class="sub-title text-center fw-bold" style="color: #E05C5C">Informations Personnelles:</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="inputAddress">Nom de Famille:</label>
                    <input v-model="demande.lastname" type="text" class="form-control" placeholder="Nom de Famille"
                           required>
                </div>
                <div class="col">
                    <label class="form-label" for="inputAddress">Prénom:</label>
                    <input v-model="demande.firstname" type="text" class="form-control" placeholder="Prénom" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="cin">Numéro CIN:</label>
                    <input v-model="demande.cin" type="text" class="form-control" placeholder="CIN" required>
                </div>

                <div class="col ">
                    <label class="form-label">Sexe:</label>
                    <br>
                    <div class="form-check form-check-inline ">
                        <input v-model="demande.sexe" class="form-check-input" type="radio" name="inlineRadioOptions"
                               id="inlineRadio1"
                               value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>

                    <div class="form-check form-check-inline ">
                        <input v-model="demande.sexe" class="form-check-input" type="radio" name="inlineRadioOptions"
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
                    <input v-model="demande.phone" type="text" class="form-control" id="inputAddress" placeholder=""
                           required>
                </div>
                <div class="col">
                    <label class="form-label" for="inputAddress">Ville:</label>
                    <select v-model="demande.city" class="form-select" aria-label="Default select example">
                        <option v-for="city in cities" :value="city">{{ city }}</option>

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="inputAddress">Addresse:</label>
                    <input v-model="demande.address" type="text" class="form-control" id="inputAddress" placeholder=""
                           required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col">
                    <label class="form-label" for="inputRegion">Profession:</label>
                    <select v-model="demande.profession" id="inputRegion" class="form-select" required>
                        <option v-for="profession in professions" :value="profession">{{ profession }}</option>
                    </select>
                </div>

                <div class="col">
                    <label class="form-label" for="inputAddress">Salaire:</label>
                    <input v-model="demande.salary" type="text" class="form-control" id="inputAddress" placeholder=""
                           required>
                </div>
            </div>
            <br>

            <div class=" d-flex justify-content-center">
                <button type="button" class="btn btn-lg btn-success">Confirmer</button>
            </div>

        </div>


    </form>
</template>
<script>
export default {
    data: function () {
        return {
            demande: {
                firstname: "",
                lastname: "",
                cin: "",
                phone: "",
                address: "",
                sexe: "",
                city: "",
                salary: 0,
                profession: ""
            },
            cities: ['Meknes', 'Casablance', 'Rabat', 'Tanger', 'Agadir', 'Fes'],
            professions: ['Plombier', 'Professeur', 'Sans emploi', 'Libre']
        }
    }
}
</script>

<template>
    <div>


        <div class="p-5 mt-4" style="background: #FFF5F5">
            <h2 class="sub-title text-center fw-bold" style="color: #E05C5C">Informations Personnelles:</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="inputAddress">Nom de Famille:</label>
                    <input name="lastname" type="text" class="form-control" placeholder="Nom de Famille"
                           required>

                </div>
                <div class="col">
                    <label class="form-label" for="inputAddress">Prénom:</label>
                    <input name="firstname" type="text" class="form-control" placeholder="Prénom"
                           required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="cin">Numéro CIN:</label>
                    <input name="cin" type="text" class="form-control" placeholder="CIN" required >
                </div>

                <div class="col ">
                    <label class="form-label">Sexe:</label>
                    <br>
                    <div class="form-check form-check-inline ">
                        <input name="sexe" class="form-check-input" type="radio"
                               id="inlineRadio1"
                               value="male" checked>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>

                    <div class="form-check form-check-inline ">
                        <input name="sexe" class="form-check-input" type="radio"
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
                    <input name="phone" type="text" class="form-control" id="inputAddress" placeholder=""
                           required>
                </div>
                <div class="col">
                    <label class="form-label" for="inputAddress">Ville:</label>
                    <select name="city" class="form-select" aria-label="Default select example">
                        <option v-for="city in cities" :value="city">{{ city }}</option>

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label" for="inputAddress">Addresse:</label>
                    <input name="address" type="text" class="form-control" id="inputAddress"
                           placeholder=""
                           required>
                </div>
                <div class="col">
                    <label class="form-label" for="inputAddress">Date de naissance:</label>
                    <input name="birthday" type="date"  max="2002-01-01"class="form-control" id="inputAddress"
                           placeholder=""
                           required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-5">
                    <label class="form-label" for="inputRegion">Ecole:</label>
                    <input name="school" type="text"  class="form-control" id="inputAddress"
                           placeholder=""
                           required>
                </div>

                <div class="col-4">
                    <label class="form-label" for="inputAddress">Salaire des parents combinés:</label>
                    <input name="parentsSalary" type="text" class="form-control" id="inputAddress"
                           placeholder=""
                           required>
                </div>
                <div class="col-3">
                    <label class="form-label" for="inputAddress">Niveau d'étude:</label>
                    <select name="level" class="form-select" aria-label="Default select example">
                        <option v-for="level in levels" :value="level">{{ level }}</option>

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col">
                    <label class="form-label" for="inputRegion">Photo de votre carte d'identité:</label>
                    <input name="imagecin" type="file" class="form-control" id="image"
                           placeholder=""
                    required>
                </div>
                <div class="form-group col">
                    <label class="form-label" for="fromFile">Pdf contenant les attestations de salaire des deux parents:</label>
                    <input name="pdfsalaryattestation" type="file" class="form-control" id="image"
                           placeholder=""
                           required>
                </div>


            </div>
            <br>

            <div class=" d-flex justify-content-center">
                <button type="submit" class="btn btn-lg btn-success">Confirmer</button>
            </div>

        </div>


    </div>
</template>
<script>
import axios from 'axios';

export default {
    data: function () {
        return {

            cities: ['Meknes', 'Casablance', 'Rabat', 'Tanger', 'Agadir', 'Fes'],
            professions: ['Plombier', 'Professeur', 'Sans emploi', 'Libre'],
            levels:['bac','bac+1','bac+2','bac+3','bac+4','bac+5']

        }
    },
    methods: {},

}
</script>

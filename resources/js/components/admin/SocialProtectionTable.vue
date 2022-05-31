<template>
    <div>
        <table class="table table-borderless" style="background: #FFF2F2; border-radius: 10px">
            <thead style="background: #F8847D;">
            <tr>
                <th scope="col" style="color: white">CIN</th>
                <th scope="col" style="color: white">FirstName</th>
                <th scope="col" style="color: white">LastName</th>
                <th scope="col" style="color: white">Sexe</th>
                <th scope="col" style="color: white">Profession</th>
                <th scope="col" style="color: white">Status</th>
                <th scope="col" style="color: white; width: 10%">Options</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="(demande, index) in demandes"
                :class="{ 'table-success': demande.status==2, 'table-warning': demande.status==1,'table-danger': demande.status==-1 }">
                <td>{{ demande.cin }}</td>
                <td>{{ demande.firstName }}</td>
                <td>{{ demande.lastName }}</td>
                <td>{{ demande.sexe }}</td>
                <td>{{ demande.profession }}</td>
                <td>{{ demande.status }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Options
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="Options">
                            <li>
                                <button type="button" class="btn " @click="showDetails(index)">Afficher
                                </button>
                            </li>
                            <li><a class="dropdown-item" href="#">Rejeter</a></li>
                            <li><a class="dropdown-item" href="#">Envoyer</a></li>
                        </ul>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

        <social-protection-modal ref="socialProtection" :demande="demande"/>

    </div>


</template>
<script>
export default {
    props: ['demandes'],
    data() {
        return {

            demande: {}
        }
    },
    methods: {
        async showDetails(index) {
            this.demande = this.demandes[index];
            this.showModal("socialProtection");
        },
        showModal: function (element) {
            var element = this.$refs[element].$el;
            $(element).modal("show");
        },
    }
}
</script>

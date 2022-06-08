<template>
    <div>
        <div>
            <form>
                <div class="row">
                    <div class="col-2">
                        <button class="btn btn-outline-danger   dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
                            Trier
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="Trier">
                            <li>
                                <button type="button" class="btn" @click="recent()" >Récent
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn" @click="ancien()">Ancien
                                </button>
                            </li>
                            <li><button type="button" class="btn" @click="cin_asc()">Cin croissant
                            </button></li>
                            <li><button type="button" class="btn" @click="cin_desc()">Cin decroissant</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-8 ">
                        <input class="form-control" type="text" v-model="search" placeholder="Entrer votre terme de recherche ici">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-danger   dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
                            Filtrer
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="Filtrer">
                            <li>
                                <button type="button" class="btn" @click="traitement('reset')" >Reset
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn" @click="traitement('0')" >Non traité
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn" @click="traitement('1')">En traitement
                                </button>
                            </li>
                            <li><button type="button" class="btn" @click="traitement('-1')">Rejetée
                            </button></li>
                            <li><button type="button" class="btn" @click="traitement('2')">Acceptée</button>
                            </li>
                        </ul>
                    </div>

                </div>
            </form>

        </div>


        <hr>
        <br>
        <table class="table table-borderless" style="background: #FFF2F2; border-radius: 10px">
            <thead style="background: #F8847D;">
            <tr>
                <th scope="col" style="color: white">CIN</th>
                <th scope="col" style="color: white">FirstName</th>
                <th scope="col" style="color: white">LastName</th>
                <th scope="col" style="color: white">Sexe</th>
                <th scope="col" style="color: white">School</th>
                <th scope="col" style="color: white">Status</th>
                <th scope="col" style="color: white; width: 10%">Options</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="(demande, index) in filteredDemands "
                :class="{ 'table-success': demande.status==2, 'table-warning': demande.status==1,'table-danger': demande.status==-1 }">
                <td>{{ demande.cin }}</td>
                <td>{{ demande.firstName }}</td>
                <td>{{ demande.lastName }}</td>
                <td>{{ demande.sexe }}</td>
                <td>{{ demande.school }}</td>
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
                            <li><button type="button" class="btn " @click="sendToApi(demande)" :disabled="demande.status!='0'">Envoyer
                            </button></li>
                            <li><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="setDemande(demande)" :disabled="demande.status!='0'" >Rejeter</button>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

        <bourse-modal ref="bourse" :demande="demande"/>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Veuillez écrire la raison du rejet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea v-model="message" class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger " data-bs-dismiss="modal" @click="reject(demande)" >Rejeter
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>


</template>
<script>
import axios from "axios";

export default {
    props: ['demandes_sent'],
    data() {
        return {
            status:0,
            demande: {},
            demande_received: {},
            message:"",
            search:"",
            demandes:[]
        }
    },
    created() {
        console.log(this.demandes_sent);
        this.demandes = this.demandes_sent;

    },
    computed:{
        filteredDemands: function(){
            return this.demandes.filter((demande)=>{
                var cin = demande.cin.toLowerCase().match(this.search.toLowerCase());
                var firstName = demande.firstName.toLowerCase().match(this.search.toLowerCase());
                var lastName = demande.lastName.toLowerCase().match(this.search.toLowerCase());
                var school = demande.school.toLowerCase().match(this.search.toLowerCase());
                if(firstName || cin ||lastName || school){
                    return true;
                }

            })
        }
    },
    methods: {
        async showDetails(index) {
            this.demande = this.demandes[index];
            this.showModal("bourse");
        },
        showModal: function (element) {
            var element = this.$refs[element].$el;
            $(element).modal("show");
        },
        setDemande: function(demande){
            this.demande = demande;
        },
        sendToApi(demande) {

            demande.status='1';
            demande.message='Votre demande est en cours de traitement';
            console.log(demande)
            axios.post('/api/services/bourse', {
                demande : demande
            }).then(response=>{
                this.$forceUpdate();
            });
        },
        reject(demande){
            demande.status='-1';
            demande.message=this.message;
            axios.post('/api/services/bourse', {
                demande : demande
            }).then(response=>{
                this.$forceUpdate();
            });
        },
        recent:function (){
            this.demandes = _.orderBy(this.demandes, 'created_at', 'desc');
        },
        ancien:function (){
            this.demandes = _.orderBy(this.demandes, 'created_at', 'asc');

        },
        cin_asc:function (){
            this.demandes = _.orderBy(this.demandes, 'cin', 'asc');
        },
        cin_desc:function (){
            this.demandes = _.orderBy(this.demandes, 'cin', 'desc');
        },
        traitement:function(status){
            this.demandes = this.demandes_sent;
            if(status!='reset'){
                this.demandes =  this.demandes.filter((demande)=>{
                    return demande.status==status;
                })
            }

        }
    }
}
</script>

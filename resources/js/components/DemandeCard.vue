<template>
    <div>
        <div class="p-4" :class="{ 'card-success': demande.status==2, 'card-warning': demande.status==1,'card-danger': demande.status==-1 || demande.status==0 }" style=" border-radius: 30px;">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th class="h4" scope="col" style="width:33%;"><strong>Id</strong></th>
                    <th class="h4" scope="col" style="width:33%"><strong>Type de dossiers</strong></th>
                    <th class="h4" scope="col" style="width:33%"><strong>Etat</strong></th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td><strong>{{ demande.id }}</strong></td>
                    <td><strong>{{demande_type}}</strong></td>
                    <td><strong :class="{ 'success': demande.status==2, 'warning': demande.status==1,'danger': demande.status==-1 }">{{ status }}</strong></td>
                </tr>

                </tbody>
            </table>
            <div class="text-center">
                <button id="consulter" class="btn btn-lg  btn-danger consulter" @click="showDetails()"><Strong
                    style=" color:#890000">Consulter</Strong>
                </button>
            </div>
        </div>
        <social-protection-modal ref="socialProtection" :demande="demande"/>
    </div>
</template>
<style lang="scss">
.table td {
    text-align: center;
}

.table th {
    text-align: center;
    color: #A50F0F;
}

.table th strong {
    color: #A50F0F;
}

.consulter:hover {
    background: #FF8D8D;

}

.consulter {
    background: #FAB9B9;
    border: 0px;
    border-radius: 20px;
    box-shadow: 1px 2px grey;
}
.success{
    color : #1CB70E;
}
.warning{
    color : #E19016;
}
.danger{
    color : #FF1A1A;
}
.card-success{
    box-shadow: 5px 10px #65B96D;
    background: #D6FFDA;
}
.card-danger{
    box-shadow: 5px 10px #FFBFBF;
    background: #FFEAEA;
}
.card-warning{
    box-shadow: 5px 10px #C89952;
    background: #FFF0D9;
}


</style>
<script>
export default {
    props: ["demande","demande_type"],
    data() {
        return {
            status: 'Non traité'
        }
    },
    created() {
        if (this.demande.status == 1) {
            this.status = 'En cours de traitement'
        } else if (this.demande.status == 2) {
            this.status = 'Demande réussite'
        } else if (this.demande.status == -1) {
            this.status = 'Demande rejeté'
        }
    },
    methods: {
        async showDetails() {
            this.showModal("socialProtection");
        },
        showModal: function (element) {
            var element = this.$refs[element].$el;
            $(element).modal("show");
        },
    }
}
</script>

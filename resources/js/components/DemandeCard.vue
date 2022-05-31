<template>
    <div>
        <div class="p-4" style="background: #FFEAEA; border-radius: 30px;box-shadow: 5px 10px #FFBFBF">
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
                    <td><strong>Protection social</strong></td>
                    <td><strong style="color:orange">{{ status }}</strong></td>
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


</style>
<script>
export default {
    props: ["demande"],
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

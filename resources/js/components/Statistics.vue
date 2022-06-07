<template>
    <div class="p-5 " style="background: #FFF5F5">
        <h2 class="sub-title text-center fw-bold " style="color: #E05C5C">Statistics</h2>
        <br>
        <br>
        <div class="row d-flex justify-content-around" style="height: 25rem">
            <div class="col-2">
                <div style="background: #FF9090; width: 100%; height: 80%">
                </div>
                <br>
                <div class="text-center ">
                    <h5><strong style="color: #FF9090">All requests : {{ all_requests }}</strong></h5>
                </div>
            </div>
            <div class="  col-2">
                <div class=" position-relative" style="width: 100%;height: 80%">
                    <div class="position-absolute bottom-0" :style="{background: '#FF9090', width: '100%', height: ((accepted_requests/all_requests)*100)+'%'}">
                    </div>
                </div>

                <br>
                <div class="text-center ">
                    <h5><strong style="color: #FF9090">Accepted requests : {{ accepted_requests }}</strong></h5>
                </div>
            </div>
            <div class="col-2">
                <div class=" position-relative" style="width: 100%;height: 80%">
                    <div class="position-absolute bottom-0" :style="{background: '#FF9090', width: '100%', height: ((rejected_requests/all_requests)*100)+'%'}">
                    </div>
                </div>
                <br>
                <div class="text-center ">
                    <h5><strong style="color: #FF9090">Rejected requests : {{ rejected_requests }}</strong></h5>
                </div>
            </div>
        </div>

    </div>
</template>
<script>

export default {
    props:["accepted_requests","rejected_requests","all_requests"],
    data() {
        return {


        }
    },
    created() {
        console.log(this.accepted_requests)
    }

}

</script>


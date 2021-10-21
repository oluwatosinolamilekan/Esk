<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{campaign.name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">

                    <div class="p-2 d-flex text-dark">
                        <div class="font-weight-bold mr-2">Name:</div>
                        <div>{{ campaign.name }}</div>
                    </div>
                    <div class="p-2 d-flex text-dark">
                        <div class="font-weight-bold mr-2">Daily Budget:</div>
                        <div>{{ campaign.daily_budget }}</div>
                    </div>
                    <div class="p-2 d-flex text-dark">
                        <div class="font-weight-bold mr-2">Total Budget:</div>
                        <div>{{ campaign.total_budget }}</div>
                    </div>
                    <div class="p-2 d-flex text-dark">
                        <div class="font-weight-bold mr-2">Date:</div>
                        <div>{{ campaign.date }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShowCampaign",
    props: ['campaign']
}
</script>

<style scoped>

</style>

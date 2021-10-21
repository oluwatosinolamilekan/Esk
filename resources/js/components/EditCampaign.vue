<template>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Edit campaign</h2>
                    <div class="align-items-center px-3 px-md-5">
                        <router-link to="/" class="btn btn-primary">
                            Back
                        </router-link>
                    </div>
                </div>
                <div class="card-body">
                    <form action=""  @submit.prevent="updateCampaign()" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" v-model="campaign.name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Date</label>
                                    <div class="d-flex">
                                        <div class="d-flex flex-column">
                                            <div>From:</div>
                                            <input type="date" class="form-control" :min="getCurrentDate" v-model="campaign.from_date">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div>To:</div>
                                            <input type="date" class="form-control" :min="campaign.from_date" v-model="campaign.to_date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Total Budget</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  v-model="campaign.total_budget">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Daily Budget</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" v-model="campaign.daily_budget">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Image</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="image" class="form-control" @change="onFileChange">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Preview</label>
                                    <div class="input-group mb-3">
                                        <img v-bind:src="campaign.image" class="img-fluid rounded"  width="100" height="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
export default {
    name: "EditCampaign",
    data(){
        return{
            campaign: {},
        }
    },
    computed: {
        getCurrentDate() {
            const date = new Date();
            return moment(date, 'YYYY-MM-DD').format('YYYY-MM-DD');
        }
    },
    created() {
        axios.get(`http://localhost/api/advertise/show/${this.$route.params.id}`)
            .then((response) => {
                this.campaign = response.data.data;
            });
    },
    methods: {
        onFileChange(event){
            this.campaign.image = event.target.files[0];
        },
        updateCampaign(){
            let formData = new FormData();
            formData.append('creative', this.campaign.creative);
            formData.append('to_date',this.campaign.to_date)
            formData.append('from_date',this.campaign.from_date)
            formData.append('total_budget',this.campaign.total_budget)
            formData.append('daily_budget',this.campaign.daily_budget)
            formData.append('name',this.campaign.name)
            axios.patch(`http://localhost/api/advertise/update/${this.$route.params.id}`,formData)
                .then((response) => {
                    this.$router.push({ name: 'home' });
                })
        }
    }
}
</script>

<style scoped>

</style>

<template>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Create campaign</h2>
                    <div class="align-items-center px-3 px-md-5">
                       <router-link to="/" class="btn btn-primary">
                           Back
                       </router-link>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" @submit.prevent="addCampaign()" enctype="multipart/form-data">
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
                                            <input type="date" class="form-control" :min="from_date" v-model="campaign.to_date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Total Budget</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control"  v-model="campaign.total_budget">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Daily Budget</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" v-model="campaign.daily_budget">
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
    name: "CreateCampaign",
    data() {
        return {
              campaign:{
                  name: '',
                  to_date: '',
                  from_date: '',
                  total_budget: '',
                  daily_budget: '',
                  creative: '',
              }
        }
    },
    computed: {
        getCurrentDate() {
            const date = new Date();
            return moment(date, 'YYYY-MM-DD').format('YYYY-MM-DD');
        }
    },
    methods:{
        addCampaign(){
            axios.post('api/advertise/store',this.campaign)
                .then(response => {
                    this.$router.push({name:'home'})
                })
                .catch(err => console.log(err))
        }
    }

}
</script>

<style scoped>


</style>

<template>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Advertising campaign</h2>
                    <div class="align-items-center px-3 px-md-5">
                        <router-link to="/create"  class="btn btn-primary">Create</router-link>
                    </div>
                </div>
                <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Total Budget</th>
                            <th>Daily Budget</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr  v-for="campaign in campaigns" v-bind:key="campaign.id">
                            <td>
                                <img v-bind:src="campaign.image">
                            </td>
                            <td>{{ campaign.name }}</td>
                            <td>{{ campaign.date }}</td>
                            <td>{{ campaign.total_budget }}</td>
                            <td>{{campaign.daily_budget}}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#exampleModal" :campaign="campaign" @click="showModal= true">
                                    Show
                                </button>
                                <show-campaign v-if="showModal" @close="showModal = false" :campaign="campaign"></show-campaign>
                                <router-link :to="{name: 'edit', params: { id: campaign.id }}" class="btn btn-secondary">Edit</router-link>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ShowCampaign from "./ShowCampaign";
export default {
    name: "ListCampaign",
    components:{
      ShowCampaign
    },
    data(){
        return{
            campaigns: [],
            showModal: false
        }
    },
    methods: {
        getCampaings(){
            axios.get('api/advertise/index')
                .then((response) => {
                    this.campaigns = response.data.data
                })
        },
    },
    created(){
        this.getCampaings();
    }

}
</script>

<style scoped>

</style>

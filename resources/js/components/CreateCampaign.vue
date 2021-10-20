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
                                        <input type="text" class="form-control" v-model="name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Date</label>
                                    <div class="d-flex">
                                        <div class="d-flex flex-column">
                                            <div>From:</div>
                                            <input type="date" class="form-control" :min="getCurrentDate" v-model="from_date">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div>To:</div>
                                            <input type="date" class="form-control" :min="from_date" v-model="to_date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Total Budget</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control"  v-model="total_budget">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Daily Budget</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" v-model="daily_budget">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Image</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="image" class="form-control" @change="onChangeFile">
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
                name: '',
                to_date: '',
                from_date: '',
                total_budget: '',
                daily_budget: '',
                image: '',
        }
    },
    computed: {
        getCurrentDate() {
            const date = new Date();
            return moment(date, 'YYYY-MM-DD').format('YYYY-MM-DD');
        }
    },
    methods:{
        onFileChange(event){
            /*
            Set the local file variable to what the user has selected.
            */
            this.image = event.target.files[0];

            /*
            Initialize a File Reader object
            */
            let reader  = new FileReader();

            /*
            Add an event listener to the reader that when the file
            has been loaded, we flag the show preview as true and set the
            image to be what was read from the reader.
            */
            reader.addEventListener("load", function () {
                this.showPreview = true;
                this.imagePreview = reader.result;
            }.bind(this), false);

            /*
            Check to see if the file is not empty.
            */
            if( this.image ){
                /*
                    Ensure the file is an image file.
                */
                if ( /\.(jpe?g|png|gif)$/i.test( this.image.name ) ) {

                    console.log("here");
                    /*
                    Fire the readAsDataURL method which will read the file in and
                    upon completion fire a 'load' event which we will listen to and
                    display the image in the preview.
                    */
                    reader.readAsDataURL( this.image );
                }
            }
        },
        addCampaign(){
            let formData = new FormData();
            formData.append('image', this.image);
            formData.append('to_date',this.to_date)
            formData.append('from_date',this.from_date)
            formData.append('total_budget',this.total_budget)
            formData.append('daily_budget',this.daily_budget)
            formData.append('name',this.name)
            axios.post('api/advertise/store',formData)
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

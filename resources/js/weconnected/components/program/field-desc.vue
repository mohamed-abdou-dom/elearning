<template>
    <div>
        <div class="field-desc">
            <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h2 class="main-title">{{category.category_name | capitalize}}</h2>
                    <p class="para mt-5 mb-5 pl-3" v-html="category.category_description"></p>
                    <router-link :to="'/field/'+category.category_slug" class="main-btn mt-5">Show The Programs</router-link>
                </div>
                <div class="col-md-6">
                    <img :src="'/images/categories/'+category.category_image+'.png'" width="100%" alt="">                    
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            field_slug: this.$route.params.slug,
            category: {}
        }
    },
    methods:{
        GetCategory(){
            this.$Progress.start();
            axios.get('/weconnected/category/'+this.field_slug)
            .then((res)=>{
                this.category = res.data[0];
                this.$Progress.finish();
            })
        }
    },
    created(){
        this.GetCategory();
    }
}
</script>

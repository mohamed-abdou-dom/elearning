<template>
  <div>
    <div class="fields page-section">
      <div class="container">
        <h2 class="main-title">Our Fields</h2>
        <p class="sub-title">you can choose a field and master it.</p>
        <div class="row mt-5">
          <div class="col-md-4" v-for="category in categories" :key="category.id">
            <router-link class="field" :to="'/field-desc/'+category.category_slug">
              <div class="card">
                <div class="card-body">
                  <p class="card-text">{{category.category_name|capitalize}}</p>
                </div>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      categories: {},
    };
  },
  methods: {
    GetCategories() {
      this.$Progress.start();
      axios.get("/weconnected/categories").then((res) => {
        this.categories = res.data;
        this.$Progress.finish();
      });
    },
  },
  created() {
    this.GetCategories();
  },
};
</script>
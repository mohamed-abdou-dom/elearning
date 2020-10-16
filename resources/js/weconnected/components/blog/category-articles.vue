<template>
  <div>
    <div class="blog page-section">
      <div class="container">
        <div v-if="!articles.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Articles ...</p>
            </div>
          </div>
        </div>

        <div v-else class="row">
          <div class="col-md-8">
            <div class="card article" v-for="article in articles" :key="article.id">
              <img
                :src="'/images/blog/' +article.image"
                height="350"
                width="100%"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <router-link :to="'/blog/'+article.slug">
                  <h2 class="main-title">{{ article.title }}</h2>
                </router-link>
                <div>
                  <span>
                    <i class="fa fa-user fa-fw mr-2"></i>
                    {{ article.username }}
                  </span>
                  <span class="float-right">
                    <i class="fa fa-calendar fa-fw mr-2"></i>
                    {{article.created_at | myDate}}
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card newsletter mt-5 mb-5">
              <div class="card-body">
                <h5 class="card-title">Newsletter</h5>
                <hr />
                <form>
                  <input type="email" placeholder="Enter Email" class="form-control" />
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
            <hr />
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
      category_slug: this.$route.params.category_slug,
      articles: {},
      categories: {},
    };
  },
  methods: {
    GetArticles() {
      this.$Progress.start();
      axios.get("/weconnected/category/"+this.category_slug+"/articles").then((res) => {
        this.articles = res.data;
        this.$Progress.finish();
      });
    }
  },
  created() {
    this.GetArticles();
  },
};
</script>

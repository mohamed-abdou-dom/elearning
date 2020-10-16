<template>
  <div>
    <div class="blog page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card article">
              <img
                :src="'/images/blog/' +article.image"
                height="350"
                width="100%"
                class="card-img-top"
              />
              <div class="card-body">
                <h2 class="main-title">{{ article.title }}</h2>
                <div>
                  <span>
                    <i class="fa fa-user fa-fw mr-2"></i>
                    {{ article.username }}
                  </span>
                  <span class="float-right">
                    <i class="fa fa-calendar fa-fw mr-2"></i>
                    {{ article.created_at | myDate }}
                  </span>
                </div>
                <p class="para mt-5" v-html="article.body"></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="category">
              <h2 class="main-title mb-3">categories</h2>
              <ul class="list-group list-group-flush">
                <li
                  @click="OpenCategory(category.category_slug)"
                  class="list-group-item"
                  v-for="category in categories"
                  :key="category.id"
                >{{ category.category_name }}</li>
              </ul>
            </div>
            <hr />
            <div class="card newsletter">
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
      article_slug: this.$route.params.article_slug,
      article: {},
      categories: {},
    };
  },
  methods: {
    GetArticle() {
      this.$Progress.start();
      axios.get("/weconnected/article/" + this.article_slug).then((res) => {
        this.article = res.data[0][0];
        this.categories = res.data[1];
        this.$Progress.finish();
      });
    },
    OpenCategory(category_slug){
      this.$router.push('/blog/category/'+category_slug);
    }
  },
  created() {
    this.GetArticle();
  },
};
</script>

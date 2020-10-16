<template>
  <div>
    <div class="container">
      <div class="page-section" v-if="!my_articles.length">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Oops!!!</h1>
            <p class="lead mt-4">There is No Articles For You ...</p>
          </div>
        </div>
      </div>

      <div v-else class="row justify-content-center page-section">
        <div class="card article" v-for="article in my_articles" :key="article.id">
          <img :src="'/images/blog/' +article.image" height="350" width="100%" class="card-img-top" alt="..."/>
          <div class="card-body">
            <router-link :to="'/blog/'+article.slug">
              <h2 class="main-title">{{ article.title }}</h2>
            </router-link>
            <div>
              <router-link class="main-btn" :to="'/my-articles/'+article.slug+'/edit'">Edit</router-link>
              <button class="main-btn" @click="RemoveArticle(article.id)">Remove</button>
            </div>
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
      my_articles: {},
    };
  },
  methods: {
    GetMyArticles() {
      this.$Progress.start();
      axios.get("/weconnected/myarticles").then((res) => {
        this.my_articles = res.data;
        this.$Progress.finish();
      });
    },
    RemoveArticle(id) {
      Swal.fire({
        title: "This Article 'll Removed From Your Profile",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Remove It",
      }).then((result) => {
        if (result.value) {
          this.$Progress.start();
          axios.delete("/weconnected/article/" + id);
          this.GetMyArticles();
          this.$Progress.finish();
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Removed Successfully",
            showConfirmButton: false,
            timer: 1500,
          });
        }
      });
    },
  },
  created() {
    this.GetMyArticles();
  },
};
</script>
<template>
  <div>
    <div class="container page-section">
      <h2 class="main-title">Review your knowledge in each course</h2>
      <p class="sub-title mb-5">answer the questions for an indvidual course and know your level.</p>
      <div v-if="!exams.length">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Oops!!!</h1>
            <p class="lead mt-4">There is No Exams ...</p>
          </div>
        </div>
      </div>

      <div v-else class="row">
        <div class="col-md-4 mb-3" v-for="exam in exams" :key="exam.id">
          <div class="card">
            <div class="card-body">
              <h2 class="title">{{exam.exam_name}}</h2>
              <p class="para">{{exam.exam_description}}</p>
              <button @click="OpenExam(exam.exam_slug)" class="sec-btn">Show Questions</button>
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
      exams: {},
    };
  },
  methods: {
    GetExams() {
      this.$Progress.start();
      axios.get("/weconnected/exams").then((res) => {
        this.exams = res.data;
        this.$Progress.finish();
      });
    },
    OpenExam(exam_slug) {
      this.$router.push("/test/" + exam_slug + "/questions");
    },
  },
  created() {
    this.GetExams();
  },
};
</script>
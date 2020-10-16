<template>
  <div>
    <div class="courses page-section">
      <div class="container">
        <h2 class="main-title">Our Courses</h2>
        <p class="sub-title mb-5">you can choose your favorite course.</p>

        <div class="row">
          <div class="col-md-3" v-for="course in courses" :key="course.id">
            <div class="card course">
              <img :src="'/images/courses/'+course.course_image+'.png'" class="card-img-top" alt="..." />
              <div class="card-body">
                <div class="content mb-4 mt-4">
                  <span class="subtitle">{{ course.course_name | capitalize }}</span>
                </div>
                <router-link
                  :to="'/course/' + course.course_slug"
                  class="main-btn"
                >Show Content</router-link>
              </div>
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
      courses: {},
    };
  },
  methods: {
    GetCourses() {
      this.$Progress.start();
      axios.get("/weconnected/courses").then((res) => {
        this.courses = res.data;
        this.$Progress.finish();
      });
    },
  },
  created() {
    this.GetCourses();
  },
};
</script>

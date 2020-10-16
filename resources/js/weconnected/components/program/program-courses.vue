<template>
  <div>
    <div class="courses page-section">
      <div class="container">
        <h2 class="main-title mb-5">
          {{slug}} Track
          <span class="after"></span>
        </h2>
        <div class="row">
          <div class="col-md-3" v-for="course in courses" :key="course.id">
            <div class="card course">
              <img :src="'/images/courses/'+course.course_image+'.png'" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="subtitle">{{course.course_name}}</p>
                <button
                  v-if="enrolled_courses.includes(course.id)"
                  @click="EnrollCourseProgram(course.id,course.course_slug)"
                  class="main-btn"
                >Open Course</button>
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
      slug: this.$route.params.slug,
      courses: {},
      enrolled_courses: [],
    };
  },
  methods: {
    GetCourses() {
      this.$Progress.start();
      axios
        .get("/weconnected/program/" + this.slug + "/courses")
        .then((res) => {
          this.courses = res.data[0];
          res.data[1].forEach((element) => {
            this.enrolled_courses.push(element.id);
            this.$Progress.finish();
          });
        });
    },
    EnrollCourseProgram(course_id, course_slug) {
      axios
        .post("/weconnected/program/" + this.slug + "/course/" + course_id)
        .then((res) => {
          this.$router.push("/program/" + this.slug + "/course/" + course_slug);
        });
    },
  },
  created() {
    this.GetCourses();
  },
};
</script>
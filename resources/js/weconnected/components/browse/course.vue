<template>
  <div>
    <div class="single-course page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="description">
              <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <!-- <h2 class="main-title mb-4">Description</h2> -->
                  <p class="para" v-html="course.course_description"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="courses">
              <div class="card course">
                <img
                  :src="'/images/courses/'+course.course_image+'.png'"
                  height="400"
                  width="100%"
                  alt="..."
                />
                <div class="card-body">
                  <h2 class="title mb-5">{{course.course_name | capitalize}} Course</h2>
                  <router-link class="info-btn" v-if="enroll_course.includes(course.course_slug)" :to="'/course/'+course.course_slug+'/lessons'">Contuine Course</router-link>
                  <button v-else @click="EnrollCourse()" class="main-btn">Take Course</button>
                  <button class="sec-btn">Add To Favorites</button>
                </div>
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
      course_slug: this.$route.params.slug,
      course: {},
      enroll_course: []
    };
  },
  methods: {
    GetCourse() {
      this.$Progress.start();
      axios.get("/weconnected/course/" + this.course_slug).then((res) => {
        this.course = res.data[0][0];
        res.data[1].forEach((element) => {
            this.enroll_course.push("" + element.course_slug + "");
          });
        this.$Progress.finish();
      });
    },
    EnrollCourse() {
      Swal.fire({
        title: "This Course 'll Saved On Your Profile",
        icon: "success",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Open It",
      }).then((result) => {
        if (result.value) {
          axios.post("/weconnected/course/" + this.course.id);
          this.$router.push("/course/" + this.course_slug + "/lessons");
        }
      });
    },
  },
  created() {
    this.GetCourse();
  },
};
</script>

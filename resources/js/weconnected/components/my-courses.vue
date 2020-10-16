<template>
  <div>
    <div class="courses page-section">
      <div class="container">
        <div v-if="!my_courses.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Courses You Should Start Take Course........</p>
            </div>
          </div>
        </div>
        <div v-else class="row">
          <div class="col-md-3" v-for="course in my_courses" :key="course.id">
            <div class="card course">
              <img :src="'/images/courses/'+course.course_image+'.png'" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-title">{{course.course_name}}</p>
                <router-link
                  style="text-decoration:none"
                  :to="'/course/'+course.course_slug+'/lessons'"
                  class="main-btn"
                >
                  Contuine
                  <i class="fa fa-folder-open"></i>
                </router-link>
                <button @click="RemoveCourse(course.id)" class="main-btn">
                  Remove
                  <i class="fa fa-remove"></i>
                </button>
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
      my_courses: {},
    };
  },
  methods: {
    GetMyCourses() {
      this.$Progress.start();
      axios.get("/weconnected/mycourses").then((res) => {
        this.my_courses = res.data;
        this.$Progress.finish();
      });
    },
    RemoveCourse(course_id) {
      Swal.fire({
        title: "This Course 'll Removed From Your Profile",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Remove It",
      }).then((result) => {
        if (result.value) {
          this.$Progress.start();
          axios.delete("/weconnected/mycourse/" + course_id);
          this.GetMyCourses();
          this.$Progress.finish();
        }
      });
    },
  },
  created() {
    this.GetMyCourses();
  },
};
</script>

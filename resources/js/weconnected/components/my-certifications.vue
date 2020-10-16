<template>
  <div>
    <div class="courses page-section">
      <div class="container">
        <div v-if="!course_certified.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Certifications Courses ...</p>
            </div>
          </div>
        </div>
        <div v-else>
          <h3 class="mb-5">Courses Certifications</h3>
          <div v-for="certified in course_certified" :key="certified.id">
            <div class="card course">
              <div class="card-body p-5">
                <p>Certificate of Completion</p>
                <p>This is To Certify that {{certified.username|capitalize}} Successfully Completed {{certified.course_name|capitalize}} Course</p>
                <p>{{certified.created_at|myDate}}</p>
                <button class="main-btn" @click="RemoveCourseCertified(certified.id)">Remove</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <div class="courses page-section">
      <div class="container">
        <div v-if="!program_certified.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Certifications Programs ...</p>
            </div>
          </div>
        </div>
        <div v-else>
          <h3 class="mb-5">Programs Certifications</h3>
          <div v-for="certified in program_certified" :key="certified.id">
            <div class="card course">
              <div class="card-body p-5">
                <p>Certificate of Completion</p>
                <p>This is To Certify that {{certified.username|capitalize}} Successfully Completed {{certified.program_name|capitalize}} Program</p>
                <p>{{certified.created_at|myDate}}</p>
                <button class="main-btn" @click="RemoveProgramCertified(certified.id)">Remove</button>
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
      course_certified: {},
      program_certified: {},
    };
  },
  methods: {
    GetCertifications() {
      this.$Progress.start();
      axios.get("/weconnected/certifications").then((res) => {
        this.course_certified = res.data[0];
        this.program_certified = res.data[1];
        this.$Progress.finish();
      });
    },
    RemoveCourseCertified(id) {
      Swal.fire({
        title: "This Certificate 'll Removed From Your Profile",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Remove It",
      }).then((result) => {
        if (result.value) {
          this.$Progress.start();
          axios.delete("/weconnected/course-certified/" + id);
          this.GetCertifications();
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
    RemoveProgramCertified(id) {
      Swal.fire({
        title: "This Certificate 'll Removed From Your Profile",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Remove It",
      }).then((result) => {
        if (result.value) {
          this.$Progress.start();
          axios.delete("/weconnected/program-certified/" + id);
          this.GetCertifications();
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
    this.GetCertifications();
  },
};
</script>

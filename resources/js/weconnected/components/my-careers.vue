<template>
  <div>
    <div class="courses page-section">
      <div class="container">
        <div v-if="!my_careers.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Programs You Should Start Take Programs........</p>
            </div>
          </div>
        </div>
        <div v-else class="row">
          <div class="col-md-3" v-for="program in my_careers" :key="program.id">
            <div class="card course">
              <img :src="'/images/programs/'+program.program_image+'.png'" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-title">{{program.program_name}}</p>
                <router-link style="text-decoration:none" :to="'/program/'+program.program_slug" class="main-btn">
                  Contuine
                  <i class="fa fa-folder-open"></i>
                </router-link>
                <button @click="RemoveCareer(program.id)" class="main-btn">
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
      my_careers: {},
    };
  },
  methods: {
    GetMyCareers() {
      this.$Progress.start();
      axios.get("/weconnected/mycareers").then((res) => {
        this.my_careers = res.data;
        this.$Progress.finish();
      });
    },
    RemoveCareer(career_id) {
      Swal.fire({
        title: "This Career 'll Removed From Your Profile",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Remove It",
      }).then((result) => {
        if (result.value) {
          this.$Progress.start();
          axios.delete("/weconnected/mycareer/" + career_id);
          this.GetMyCareers();
          this.$Progress.finish();
        }
      });
    },
  },
  created() {
    this.GetMyCareers();
  },
};
</script>

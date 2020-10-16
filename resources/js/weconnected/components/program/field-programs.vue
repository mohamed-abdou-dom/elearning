<template>
  <div>
    <div class="programs page-section">
      <div class="container">
        <div v-if="!programs.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Programs in This Field Yet........</p>
            </div>
          </div>
        </div>
        <div v-else>
          <h2 class="main-title">Our Programs</h2>
          <p class="sub-title">you can choose a program and master it.</p>
          <div class="mt-5" v-for="program in programs" :key="program.id">
            <router-link :to="'/program/'+program.program_slug" v-if="enroll_program.includes(program.program_slug)">
              <div class="card">
                <div class="card-body">
                    {{program.program_name|capitalize}}
                    <span class="float-right para" style="color:coral">contuine learning</span>
                </div>
              </div>
            </router-link>
            <div v-else @click="EnrollProgram(program.id,program.program_slug)">
              <div class="card">
                <div class="card-body">
                    {{program.program_name|capitalize}}
                    <span class="float-right para">start learning</span>
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
      field_slug: this.$route.params.slug,
      programs: {},
      enroll_program :[]
    };
  },
  methods: {
    GetPrograms() {
      this.$Progress.start();
      axios
        .get("/weconnected/category/" + this.field_slug + "/programs")
        .then((res) => {
          this.programs = res.data[0];
          res.data[1].forEach((element) => {
            this.enroll_program.push("" + element.program_slug + "");
          });
          this.$Progress.finish();
        });
    },
    EnrollProgram(id, slug) {
      Swal.fire({
        title: "This Program 'll Saved On Your Profile",
        icon: "success",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok, Open It",
      }).then((result) => {
        if (result.value) {
          axios.post("/weconnected/program/" + id).then((res) => {
            this.$router.push("/program/" + slug);
          });
         }
      });
    },
  },
  created() {
    this.GetPrograms();
  },
};
</script>
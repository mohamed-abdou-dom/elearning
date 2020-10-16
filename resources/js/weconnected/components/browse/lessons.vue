<template>
  <div>
    <div class="lessons page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div v-show="Lactive == false">
              <div class="jumbotron jumbotron-fluid" style="height:80vh">
                <div class="container">
                  <h1 class="display-4 mt-5">Select Lesson</h1>
                  <p
                    class="lead mt-5"
                  >This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
              </div>
            </div>
            <iframe v-show="Lactive == true" width="100%" height="500"
              :src="active_lesson.lesson_video">
            </iframe>
            <h2 class="sub-title">{{active_lesson.lesson_name}}</h2>
          </div>
          <div class="col-md-4">
            <ul class="list-group list-group-flush">
              <li
                v-for="lesson in lessons"
                :key="lesson.id"
                @click="OpenLesson(lesson.id,lesson.course_id)"
                class="list-group-item"
              >{{lesson.lesson_name}}
                <span><i v-if="taken_lessons.includes(lesson.lesson_slug)" class="fa fa-check float-right" style="color:#c5c523"></i></span>
              </li>
            </ul>
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
      lessons: {},
      active_lesson: {},
      Lactive: false,
      taken_lessons: []
    };
  },
  methods: {
    GetLessons() {
      this.$Progress.start();
      axios
        .get("/weconnected/course/" + this.course_slug + "/lessons")
        .then((res) => {
          this.lessons = res.data;
          this.$Progress.finish();
        });
    },
    OpenLesson(lesson_id, course_id) {
      this.$Progress.start();
      axios
        .get("/weconnected/lesson/" + lesson_id + "/course/" + course_id)
        .then((res) => {
          this.active_lesson = res.data[0];
          this.Lactive = true;
          this.enrolled_lessons();
          this.$Progress.finish();
        });
    },
    enrolled_lessons(){
      axios.get('/weconnected/enrolled_lessons/'+this.course_slug)
      .then((res) => {
        res.data[0].forEach((element) => {
            this.taken_lessons.push("" + element.lesson_slug + "");
          });
      })
    }
  },
  created() {
    this.GetLessons();
    this.enrolled_lessons();
  },
};
</script>
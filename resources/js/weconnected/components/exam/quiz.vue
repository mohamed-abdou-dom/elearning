<template>
  <div>
    <div class="container">
      <div class="page-section">
        <h2 class="title">some questions for {{exam_slug}} course</h2>
        <p class="subtitle mb-5">choose the correct answer for each question.</p>  
        <div v-if="!questions.length">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Oops!!!</h1>
              <p class="lead mt-4">There is No Questions For this Exam You ...</p>
            </div>
          </div>
        </div>
        <div v-else class="card mb-2" v-for="question in questions" :key="question.id">
          <div class="card-body">
            <h5 class="card-title">{{question.question_no}} {{question.question_name}}</h5>
            <div class="custom-control custom-radio">
              <input
                type="radio"
                :id="'option1'+question.question_no"
                :name="'question'+question.question_no"
                class="custom-control-input"
                @change="Mess(question.ans_one,question.correct_answer)"
              />
              <label
                class="custom-control-label"
                :for="'option1'+question.question_no"
              >{{question.ans_one}}</label>
            </div>
            <div class="custom-control custom-radio">
              <input
                type="radio"
                :id="'option2'+question.question_no"
                :name="'question'+question.question_no"
                class="custom-control-input"
                @change="Mess(question.ans_two,question.correct_answer)"
              />
              <label
                class="custom-control-label"
                :for="'option2'+question.question_no"
              >{{question.ans_two}}</label>
            </div>
            <div class="custom-control custom-radio">
              <input
                type="radio"
                :id="'option3'+question.question_no"
                :name="'question'+question.question_no"
                class="custom-control-input"
                @change="Mess(question.ans_three,question.correct_answer)"
              />
              <label
                class="custom-control-label"
                :for="'option3'+question.question_no"
              >{{question.ans_three}}</label>
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
      questions: {},
      exam_slug: this.$route.params.exam_slug,
    };
  },
  methods: {
    GetQuestions() {
      this.$Progress.start();
      axios
        .get("/weconnected/exam/" + this.exam_slug + "/questions")
        .then((res) => {
          this.questions = res.data;
          this.$Progress.finish();
        });
    },
    Mess(u_answer,correct_answer) {
      if(u_answer == correct_answer){
        Swal.fire({
          icon: 'success',
          title: 'Correct answer...',
          text: 'Your answer is correct!',
        });
      }else{
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Your answer is wrong!',
        })
      }
    },
    FinishQuiz(){
      console.log("finished");
    }
  },
  created() {
    this.GetQuestions();
  },
};
</script>
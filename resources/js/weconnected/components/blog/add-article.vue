<template>
  <div>
    <div class="container">
      <form class="page-section" @submit.prevent="AddArticle">
        <div class="form-group">
          <input
            v-model="form.title"
            placeholder="Title"
            type="text"
            name="title"
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('title') }"
            required
          />
          <has-error :form="form" field="title"></has-error>
        </div>
        <div class="form-group">
          <strong>your slug :</strong>
          <span v-text="Slug()" :class="{ 'is-invalid': form.errors.has('slug') }"></span>
          <has-error :form="form" field="slug"></has-error>
        </div>
        <div class="form-group">
          <input
            v-model="form.subtitle"
            placeholder="Subtitle"
            type="text"
            name="subtitle"
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('subtitle') }"
            required
          />
          <has-error :form="form" field="subtitle"></has-error>
        </div>
        <div class="form-group">
          <ckeditor
            :editor="editor"
            v-model="form.body"
            :class="{ 'is-invalid': form.errors.has('body') }"
            required
          ></ckeditor>
          <has-error :form="form" field="body"></has-error>
        </div>
        <div class="form-group">
          <input
            type="file"
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('image') }"
            @change="uploading"
            required
          />
          <has-error :form="form" field="image"></has-error>
        </div>
        <div class="form-group">
          <multiselect
            v-model="form.cat_selected"
            :options="categories"
            :multiple="true"
            :close-on-select="false"
            :clear-on-select="false"
            :preserve-search="true"
            placeholder="Categories"
            label="category_name"
            track-by="category_name"
            :preselect-first="true"
          ></multiselect>
        </div>
        <button type="submit" class="main-btn">Add Article</button>
      </form>
    </div>
  </div>
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import Multiselect from "vue-multiselect";

export default {
  components: { Multiselect },
  data() {
    return {
      editor: ClassicEditor,
      form: new Form({
        title: "",
        subtitle: "",
        body: "",
        slug: "",
        image: "",
        cat_selected: [],
      }),
      categories: [],
    };
  },
  methods: {
    AddArticle() {
      this.$Progress.start();
      this.form
        .post("/weconnected/add-article")
        .then((res) => {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your article has been added",
            showConfirmButton: false,
            timer: 1500,
          });
          this.form.reset();
          this.$Progress.finish();
        })
        .catch(() => {
          this.$Progress.fail();
          Swal.fire({
            position: "top-end",
            icon: "wrong",
            title: "oops something went wrong",
            showConfirmButton: false,
            timer: 1500,
          });
        });
    },
    uploading(element) {
      let file = element.target.files[0];
      let reader = new FileReader();
      if (file["size"] < 21111775) {
        reader.onloadend = (file) => {
          this.form.image = reader.result;
        };
        reader.readAsDataURL(file);
      } else {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
          footer: "<a href>Why do I have this issue?</a>",
        });
      }
    },
    Slug() {
      this.form.slug = Slug(this.form.title);
      return "http://weconnected/articles/" + Slug(this.form.title);
    },
    GetCategories() {
      this.$Progress.start();
      axios.get("/weconnected/categories").then((res) => {
        this.categories = res.data;
        this.$Progress.finish();
      });
    },
  },
  created() {
    this.GetCategories();
  },
};
</script>

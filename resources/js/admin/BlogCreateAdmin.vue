<template>
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <label for="title">Post Title</label>
        <input
          type="text"
          v-model="form.title"
          id="title"
          class="form-control"
          placeholder="Some crazy title"
        />
      </div>
    </div>

    <!--  -->

    <div class="row mb-3">
      <div class="col">
        <label for="title">Post Slug</label>
        <input type="text" v-model="form.slug" id="title" class="form-control disabled" disabled />
      </div>
    </div>

    <!--  -->

    <div class="row mb-3">
      <div class="col">
        <label for="title">Post Content</label>
        <text-editor v-model="form.content"></text-editor>
      </div>
    </div>

    <!--  -->

    <div class="row mb-3">
      <div class="col">
        <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
      </div>
    </div>
    <!--  -->
    <div class="row mb-3">
      <div class="col my-auto">
        <label for="status">Status</label>
        <select v-model="form.status" id="status" class="form-control">
          <option value="draft">Draft</option>
          <option value="published">Published</option>
        </select>
      </div>
      <div class="col my-auto text-right">
        <button class="btn btn-primary" @click="createPost">
          <i class="fad fa-save mr-2"></i>Save Post
        </button>
      </div>
    </div>

    <!--  -->
  </div>
</template>

<script>
import { TextEditor } from "@jaythegeek/crmtoolkit";

import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";

export default {
  data() {
    return {
      form: {
        title: "",
        content: "",
        slug: "",
        status: "draft",
        featured_image_url: ""
      },
      dropzoneOptions: {
        url: "/post-image-upload",
        thumbnailWidth: 300,
        //   maxFilesize: 0.5,
        success: (e, r) => {
          this.form.featured_image_url = r.url;
          window.location.href = "/posts";
        }
      }
    };
  },
  methods: {
    createPost() {
      window.axios.post("/posts", this.form).then(({ data }) => {
        // Bus.$emit("alert", data);
      });
    },
    slugify(string) {
      const a =
        "àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;";
      const b =
        "aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------";
      const p = new RegExp(a.split("").join("|"), "g");

      return string
        .toString()
        .toLowerCase()
        .replace(/\s+/g, "-") // Replace spaces with -
        .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
        .replace(/&/g, "-and-") // Replace & with 'and'
        .replace(/[^\w\-]+/g, "") // Remove all non-word characters
        .replace(/\-\-+/g, "-") // Replace multiple - with single -
        .replace(/^-+/, "") // Trim - from start of text
        .replace(/-+$/, ""); // Trim - from end of text
    }
  },
  watch: {
    form: {
      handler: function(val) {
        console.log(val);
        this.$nextTick(function() {
          this.form.slug = this.slugify(val.title);
        });
      },
      deep: true
    }
  },
  components: {
    TextEditor,
    vueDropzone: vue2Dropzone
  }
};
</script>

<style>
</style>
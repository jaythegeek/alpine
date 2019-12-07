<template>
  <div class="container">
    <div class="row mb-4">
      <div class="col my-auto">
        <h3 class="mb-0">Blog Posts - {{ posts.length }}</h3>
      </div>
      <div class="col-auto my-auto ml-auto">
        <a href="/create-post" class="btn btn-light">
          <i class="fad fa-plus mr-2"></i>Add Post
        </a>
      </div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col">
        <ul class="list-group">
          <li class="list-group-item" v-for="p in posts" :key="p.id">
            <div class="row">
              <div class="col-2 my-auto">
                <img :src="p.featured_image_url" :alt="p.title" width="100%" />
              </div>
              <div class="col my-auto">
                <h4 class="mb-0">{{ p.title }}</h4>
              </div>
              <div class="col-auto ml-auto my-auto">
                <a :href="'/posts/' + p.id" class="btn btn-light btn-sm mr-3">
                  <i class="fad fa-edit"></i>
                </a>
                <a :href="'/blog/' + p.slug" target="_blank" class="btn btn-light btn-sm">
                  <i class="fad fa-external-link"></i>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: []
    };
  },
  methods: {
    fetchPosts() {
      window.axios.get("/fetch-posts").then(({ data }) => {
        this.posts = data;
      });
    }
  },
  mounted() {
    this.fetchPosts();
  }
};
</script>

<style>
</style>
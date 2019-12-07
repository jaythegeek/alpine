<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Blog Posts - {{ posts.length }}</h2>
      </div>
      <div class="col-auto ml-auto">
          <a href="/create-post" class="btn btn-light"><i class="fad fa-plus mr-2"></i>Add Post</a>
      </div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col">
        <ul class="list-group">
          <li class="list-group-item" v-for="p in posts" :key="p.id">{{ p.title }}</li>
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
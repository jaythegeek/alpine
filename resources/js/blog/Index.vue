<template>
  <div class="container">
    <div class="row mb-4">
      <div class="col">
        <input
          type="text"
          id="search"
          placeholder="Search blog posts..."
          v-model="search"
          class="form-control form-control-lg"
          @input="searchPosts"
        />
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col-md-4 mb-4" v-for="p in posts" :key="p.id">
        <div class="card border-0 shadow-sm" style="cursor:pointer" @click="goToPost(p.slug)">
          <img :src="p.featured_image_url" class="card-img-top" :alt="p.title" />
          <div class="card-body">
            <h5 class="card-title">{{ p.title }}</h5>
            <p class="card-text">{{ ellipsis(p.stripped_content) }}</p>
            <p class="card-text">
              <small class="text-muted">Last updated {{ p.created_at | formatDate }}</small>
            </p>
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
      posts: [],
      search: ""
    };
  },
  methods: {
    searchPosts() {
      if (this.search.length > 2) {
        window.axios
          .get("/search-posts?search=" + this.search)
          .then(({ data }) => {
            this.posts = data;
          });
      } else if (this.search.length == 0) {
        this.fetchPosts();
      } else {
        this.posts = [];
      }
    },
    goToPost(slug) {
      window.location.href = "/blog/" + slug;
    },
    fetchPosts() {
      window.axios.get("/fetch-posts-admin").then(({ data }) => {
        this.posts = data;
      });
    },
    ellipsis(string) {
      if (string.length > 5) return string.substring(0, 120) + "...";
      else return string;
    }
  },
  filters: {
    formatDate(date) {
      return moment(date).format("Do MMM YYYY");
    }
  },
  mounted() {
    this.fetchPosts();
  }
};
</script>

<style>
</style>
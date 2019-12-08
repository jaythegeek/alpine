<template>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row mb-3">
          <div class="col">
            <h1 class="h2 mb-2">{{ post.title }}</h1>
            <hr />
          </div>
        </div>

        <!--  -->

        <div class="row mb-4" v-if="post.featured_image_url">
          <div class="col">
            <img :src="post.featured_image_url" :alt="post.title" width="100%" />
          </div>
        </div>

        <!--  -->

        <div class="row">
          <div class="col">
            <div v-html="post.content"></div>
          </div>
        </div>
      </div>

      <!--  -->
      <div class="col-md-3"><side-bar></side-bar></div>
    </div>
  </div>
</template>

<script>
import SideBar from "./SideBar";

export default {
  props: ["post"],
  components:{
      SideBar
  }
};
</script>

<style>
</style>
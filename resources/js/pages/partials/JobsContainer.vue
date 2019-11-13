<template>
  <div class="jobs-container">
    <div class="container my-5">
      <div class="row mb-3">
        <div class="col">
          <h1 class="text-capitalize">{{ (type == 'beach') ? type + ' Club' : type }} Jobs with Alpine Elements</h1>
          <hr width="50%" align="left">
        </div>
      </div>
      <div class="row" v-if="busy">
        <div class="col text-center">
          <i class="fad fa-spinner fa-spin fa-5x text-primary"></i>
        </div>
      </div>
      <div v-for="(j,i) in jobs" :key="j.id">
        <div v-if="isEven(i)" class="row mb-3 mb-md-5">
          <div class="col-md-6 my-auto">
            <img
              :src="'/images/' + type + '/' + imageNumber(i) + '.jpg'"
              :alt="j.title"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6 my-auto">
            <div class="card border-0 bg-light shadow-sm">
              <div class="card-body">
                <h4>{{ j.title }}</h4>
                <div v-html="j.description"></div>
                <div class="row">
                  <div class="col-md-6 mx-auto">
                    <a :href="j.url" target="_blank" class="btn btn-primary btn-lg btn-block">
                      <i class="fas fa-star mr-2"></i>Apply Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div v-if="!isEven(i)" class="row mb-3 mb-md-5">
          <div class="col-md-6 my-auto">
            <div class="card border-0 bg-light shadow-sm">
              <div class="card-body">
                <h4>{{ j.title }}</h4>
                <div v-html="j.description"></div>
                <div class="row">
                  <div class="col-md-6 mx-auto">
                    <a :href="j.url" target="_blank" class="btn btn-primary btn-lg btn-block">
                      <i class="fas fa-star mr-2"></i>Apply Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 my-auto">
            <img
              :src="'/images/' + type + '/' + imageNumber(i) + '.jpg'"
              :alt="j.title"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["type"],
  data() {
    return {
      jobs: [],
      busy: false
    };
  },
  methods: {
    imageNumber(i) {
      return i + 1;
    },
    fetchJobs() {
      this.busy = true;
      window.axios.get("/fetch-jobs?type=" + this.type).then(({ data }) => {
        this.jobs = data;
        this.busy = false;
      });
    },
    isEven(n) {
      return n % 2 == 0;
    }
  },
  mounted() {
    this.fetchJobs();
  }
};
</script>

<style>
</style>
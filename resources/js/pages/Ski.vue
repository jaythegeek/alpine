<template>
  <div class="winter">
    <div class style="margin-top: -3rem">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/headers/winter.jpg" class="d-block w-100" alt="/images/headers/1.jpg" />
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div
                    class="p-3 text-danger"
                    style="background: rgba(255,255,255,06); border-radius: 1rem"
                  >
                    <h1 class="h2 mb-0">Winter Jobs 2020/2021</h1>
                    <p class="text-dark mb-0">Winter jobs stuff</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h1></h1>
        </div>
      </div>

      <div v-for="(j,i) in jobs" :key="j.id">
        <div v-if="isEven(i)" class="row">
          <div class="col-md-6">
            <img src :alt="j.title" class="img-fluid" />
          </div>
          <div class="col-md-6">
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
        <div v-if="!isEven(i)" class="row">
          <div class="col-md-6">
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
          <div class="col-md-6">
            <img src :alt="j.title" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
    <job-page-links></job-page-links>
    <div class="container">
      <div class="row mt-5">
        <div class="col text-center">
          <a href="/jobs" class="btn btn-lg btn-primary">View All Jobs</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import JobPageLinks from "./partials/JobPageLinks";
export default {
  data() {
    return {
      jobs: []
    };
  },
  components: {
    JobPageLinks
  },
  methods: {
    fetchJobs() {
      window.axios.get("/fetch-jobs?type=ski").then(({ data }) => {
        this.jobs = data;
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
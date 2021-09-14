<template>
  <div class="summer">
    <div class style="margin-top: -3rem">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/headers/summer.jpg" class="d-block w-100" alt="/images/headers/1.jpg" />
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div
                    class="p-3 text-danger"
                    style="background: rgba(255,255,255,06); border-radius: 1rem"
                  >
                    <h1 class="h2 mb-0">Summer Jobs - We currently have no vacancies</h1>
                    <p
                      class="text-dark mb-0"
                    >The thrill of a downhill bike trail or a lazy day off by the lake? Join us in the alps this summer</p>
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

    <!--  -->

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card border-0 bg-light">
            <div class="card-body text-center p-3">
              <h2 class="mb-3">Winter is coming…until its not!</h2>
              <p> Summer is always around the corner. The days get longer and the alps thaw turning the mountains in to a playground of adventure and activities.</p>
              <p>What better day off than having the choice of white-water rafting, downhill mountain biking or Via Ferrata – the thrill seeker in you will love what the summer alps has to offer.</p>
              <p>For those that like to take their days off at a steady pace; a round of golf, a swim in the lake or a walk in the mountains offers the chance for your own type of adventure.</p>
              <p>Explore all the alps has to offer, we offer employment in France practically all year round so you can be in your element any time!</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  -->
    <jobs-container :type="'summer'"></jobs-container>
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
import JobsContainer from "./partials/JobsContainer";
export default {
  components: {
    JobPageLinks,
    JobsContainer
  }
};
</script>

<style>
</style>
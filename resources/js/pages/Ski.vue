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
                    <p class="text-dark mb-0">Ski or Snowboard on your downtime, every day? Work in the Alps this winter</p>
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
        <div class="col-md-8 mx-auto">
          <div class="card border-0 bg-light">
            <div class="card-body text-center p-3">
              <h2 class="mb-3">Be in your element!</h2>
              <p>Our first love is the snow of the French and Austrian Alps. For more than 20 years we have been providing guests and staff with the opportunity to work and holiday in some of the top destinations in Europe.</p>
              <p>Are you a speed freak, bombing down every piste? A park rat homing in on that new trick? Or the adventurous explorer looking for fresh tracks and waist deep snow; we have the resorts and positions that suit all ranges.</p>
              <p>Most of us here in the office started out with a winter season (What else is there to do after Uni?!) For us it is the ultimate must-do experience and where you will find us in our element.</p>
              <p><i>Come and find yours!</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <jobs-container :type="'ski'"></jobs-container>
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
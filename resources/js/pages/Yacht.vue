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
            <img src="/images/headers/yacht.jpg" class="d-block w-100" alt="/images/headers/1.jpg" />
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div
                    class="p-3 text-danger"
                    style="background: rgba(255,255,255,06); border-radius: 1rem"
                  >
                    <h1 class="h2 mb-0">Yacht Jobs</h1>
                    <p
                      class="text-dark mb-0"
                    >Weekly trips around the Ionian? Join our expanding yacht program and share your passion for the sea</p>
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
              <h2 class="mb-3">Be on the water and in your element!</h2>
              <p>Our expanding yacht program provides the perfect opportunity to put your hard-earned qualifications to use by sailing weekly around the Ionian Seas on a variety of routes.</p>
              <p>Whether your passion is to teach, sail or provide an intimate, tailored hosting experience – our challenge to you is to provide a fun and relaxed atmosphere for everyone aboard.</p>
              <p><i>We’re in our element on the water. You can be too!</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <jobs-container :type="'yacht'"></jobs-container>
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
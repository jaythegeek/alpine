<template>
  <div class="beach-club">
    <div class style="margin-top: -3rem">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/headers/beach.jpg" class="d-block w-100" alt="/images/headers/1.jpg" />
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div
                    class="p-3 text-danger"
                    style="background: rgba(255,255,255,06); border-radius: 1rem"
                  >
                    <h1 class="h2 mb-0">Beach Club Jobs</h1>
                    <p
                      class="text-dark mb-0"
                    >Beach, Sun, Sea, Watersports – think of those Insta pics! Join us in Greece this summer</p>
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
              <p>Here at Ocean Elements we like to stay active all year round, once our winter program finishes, we don our bathing suits and head out to Greece for sun, sea and a whole heap of water sports and land-based activities.</p>
              <p>We are looking for active people who are in their element by the beach and ocean. Whether delivering excellent customer service and food to fuel all those activities, providing top-class tuition on the ocean or ensuring children have a holiday of a lifetime; we have job roles that suit all experiences and qualifications.</p>
              <p>We’re in our element in the summer, are you?</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  -->
    <jobs-container :type="'beach'"></jobs-container>
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
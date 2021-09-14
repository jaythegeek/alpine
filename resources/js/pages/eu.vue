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
            <img src="/images/headers/summer.jpg" class="d-block w-100" alt="/images/headers/1.jpg" />
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div
                    class="p-3 text-danger"
                    style="background: rgba(255,255,255,06); border-radius: 1rem"
                  >
                    <h1 class="h2 mb-0">Working in the EU post Brexit and during the pandemic.</h1>
                    <p class="text-dark mb-0">A few things have changed since we last saw you.                       
                    </p>
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
              <h2 class="mb-3">You can still be in your element!</h2>
              <p>Covid and Brexit have changed the landscape for the travel industry over the past couple of years but we are starting to look ahead to a new normal.</p>
              <p>We operated our properties over summer 2020 and we worked within the operational contraints of covid and the restrictions in place, this experience means we are well versed with keeping our team and guests safe whilst away with us. </p>
              <p>Brexit has meant some major changes but we have worked with government officials and partners and we still expect UK nationals to be able to work throughout the countries we operate.  They'll be a few changes to the process from previous years, most of this will be for us to organise but it will mean that you will need a visa/right to work to ensure you can work within the EU moving forwards.</p>
              <p>First! Do not panic, most of the work is for us to complete and we'll be there every step of the way to guide you through the process and will ensure that you are covered to work for us whether you are returning or new to working on a season.</p>
              <p> Whatever happens, we have you covered!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <jobs-container :type="'all'"></jobs-container>
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
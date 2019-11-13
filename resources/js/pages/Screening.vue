<template>
  <div>
    <div class style="margin-top: -3rem">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/images/headers/screening.jpg"
              class="d-block w-100"
              alt="/images/headers/1.jpg"
            />
            <div class="carousel-caption d-none d-md-block">
              <div class="row">
                <div class="col-md-8 mx-auto">
                  <div
                    class="p-3 text-danger"
                    style="background: rgba(255,255,255,06); border-radius: 1rem"
                  >
                    <h1 class="h2 mb-0">Screening Process</h1>
                    <p class="text-dark mb-0">Helping to find out which role would suit you best!</p>
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
          <h1>How To Pick The Right Role For You?</h1>

          <h3>Qualified by Experience</h3>

          <p>
            When recruiting for each role we are looking for candidates that have previous experience of performing
            the
            role they are applying for. For example, when reviewing CV’s of applicants for a chalet host role we are
            looking for previous experience in a cleaning job, a hosting or waiter/ess role and of course previous
            experience of cooking – for example, through extensive experience in a catering job. We call this
            Qualified
            By Experience (QBE).
          </p>

          <p>
            In the example of the Chalet Host; Cleaning, Waiting on / Hosting and Cooking are the core skills you
            will
            need (we refer to them as competencies). By ensuring you have the Core Competencies for the role for
            which
            you are applying, the better you will be at your job, the better service you will deliver to our guests
            and
            importantly, the quicker you will be at your job and the more free time you will have to enjoy your
            season.
          </p>

          <h3>Professional Qualifications</h3>

          <p>
            You can also qualify through study programmes such as Further Educational college or Vocational courses.
            Studying for your city and Guilds 701 & 702 or your NVQ level 1,2 or 3 in Professional Cooking at
            Catering
            College is a good example of gaining the required qualifications to pass through our screening process.
            Many
            of our Hotels staff come from established, well recognised Further Educational colleges each year. We
            are
            able to offer placement students from such courses career development opportunities and the chance to
            cross
            train in other departments. We have established schemes with Further Educational Colleges and are always
            on
            the look out for new schools to work with.
          </p>

          <h3>The Right Stuff</h3>

          <p>
            We understand that getting experience can be a catch 22 scenario. How do you gain the experience if
            you’re
            never given the opportunity? The answer is simple. We are always on the look out for those shinning
            stars
            that possess skills that we simply cannot train. Candidates with;
          </p>

          <ul class="list-unstyled">
            <li>A Positive and Professional Manner</li>
            <li>A “Can do Attitude”</li>
            <li>Results Driven</li>
            <li>Customer Centric</li>
            <li>Empathic</li>
            <li>The ability to learn from their mistakes and take ownership for their decisions</li>
            <li>
              Can adapt to a culture of sharing successes and failures so we can all learn and move forward
              together as a team
            </li>
            <li>Will adapt easily to fit in with the existing Alpine Elements team.</li>
            <li>It’s your decision!</li>
          </ul>Finally, ask yourself why you want to do a season? We understand this is an experience and that working
          overseas can be an exciting prospect. However you will be committing to hard work, long hours and it will be
          YOU delivering the guest service! Make sure this decision is right for you and that the role is one you are:
          capable of performing, will commit to and see through to the end.
          If all this sounds like sound advice and your still excited about doing a season then complete the
          application form for your chosen role and send us your CV – we can’t wait to meet you.
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
  components: {
    JobPageLinks
  }
};
</script>

<style>
</style>
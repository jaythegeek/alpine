@extends('layouts.app')

@section('content')
<div class="" style="margin-top: -3rem">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/headers/1.jpg" class="d-block w-100" alt="/images/headers/1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <button class="btn btn-lg btn-primary mb-4">View Summer Jobs</button>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class=" p-3 text-danger" style="background: rgba(255,255,255,06); border-radius: 1rem">
                                <h1 class="h2 mb-0">Summer Jobs in the Alps 2020</h1>
                                <p class="text-dark mb-0">Our summer jobs across the Alps are now live for 2020. Check
                                    out our full list here!</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/headers/2.jpg" class="d-block w-100" alt="/images/headers/1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <button class="btn btn-lg btn-primary mb-4">View Beach Club Jobs</button>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class=" p-3 text-danger" style="background: rgba(255,255,255,06); border-radius: 1rem">
                                <h1 class="h2 mb-0">Beach Club Jobs 2020</h1>
                                <p class="text-dark mb-0">Our summer beach club jobs are now live for 2020. Check
                                    out our full list here!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/headers/3.jpg" class="d-block w-100" alt="/images/headers/1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <button class="btn btn-lg btn-primary mb-4">View Winter Jobs</button>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class=" p-3 text-danger" style="background: rgba(255,255,255,06); border-radius: 1rem">
                                <h1 class="h2 mb-0">Winter Jobs in the Alps 2020/2021</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col">
            <i class="fad fa-chevron-down fa-6x text-primary py-4"></i>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-primary">Step 1</h1>
                            <i class="fad fa-file-alt fa-5x text-primary mt-4 mb-3"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}

        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-dark">The Application</h3>
                            <p>Applying for a job with Alpine Elements has never been easier. Just visit our full list
                                of available positions and click "Apply"</p>
                            <a href="/jobs" class="btn btn-lg btn-primary mt-3">View All Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}

    <div class="row mb-5">
        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-primary">Step 2</h1>
                            <i class="fad fa-user fa-5x text-primary mt-4 mb-3"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}

        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-dark">Screening Process</h3>
                            <p>We screen every candidate before inviting for an interview to ensure you will be the
                                right fit for Alpine Elements</p>
                            <a href="/screening" class="btn btn-lg btn-primary mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--  --}}

    <div class="row mb-5">
        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-primary">Step 3</h1>
                            <i class="fad fa-certificate fa-5x text-primary mt-4 mb-3"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}

        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-dark">The Interview</h3>
                            <p>A member of the Alpine Elements recruitment team will reach out to invite you for a
                                face-to-face interview. Yay!</p>
                            <a href="/jobs" class="btn btn-lg btn-primary mt-3">Find our offices</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{--  --}}

    <div class="row mb-5">
        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-primary">Step 4</h1>
                            <i class="fad fa-plane fa-5x text-primary mt-4 mb-3"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}

        <div class="col-md-6 mb-3 mb-md-0 my-auto">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-dark">Off to Work!</h3>
                            <p>Congrats, you got the job!! Off to your destination for on-site training :) - Click here
                                to find
                                out more about our current &amp; past employees experiences!</p>
                            <a href="/jobs" class="btn btn-lg btn-primary mt-3">Alpine Elements Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@include('layouts.job-section')
@endsection

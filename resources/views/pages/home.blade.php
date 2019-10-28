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
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/headers/2.jpg" class="d-block w-100" alt="/images/headers/1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/headers/3.jpg" class="d-block w-100" alt="/images/headers/1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio odio quasi, ex debitis eum
                perspiciatis
                nulla assumenda iusto in hic vitae doloremque, eos quam quae ducimus porro ipsum. Officia? Lorem ipsum
                dolor
                sit amet consectetur adipisicing elit. Modi magnam omnis amet tempore magni totam accusantium itaque
                officia, corrupti voluptatem velit laboriosam! Aspernatur delectus nihil neque tempore sequi maxime
                nulla!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellendus adipisci beatae, non unde
                possimus eveniet, in illo, reprehenderit blanditiis autem eaque natus sequi laboriosam molestias placeat
                ex
                iste quia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis sed, nemo possimus,
                voluptas maiores error ipsum id voluptatem ratione quibusdam quam ducimus asperiores nam ea molestiae
                necessitatibus, consectetur quasi. Accusantium. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Obcaecati labore architecto repellendus. Magnam expedita, modi molestiae explicabo ratione
                exercitationem
                quam, delectus nisi ipsa provident eius aut consectetur reprehenderit accusamus! Quibusdam? Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Tenetur suscipit mollitia beatae nam impedit iure,
                voluptatem
                minus reiciendis ab harum ea laudantium! Assumenda, enim commodi! Soluta ea neque repellat eligendi?
                Lorem
                ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quis aspernatur aut, dicta facere
                recusandae
                ea odio nostrum reiciendis accusantium impedit ab totam repellat alias animi quisquam deleniti labore
                veritatis.</p>

        </div>
    </div>
</div>
@endsection

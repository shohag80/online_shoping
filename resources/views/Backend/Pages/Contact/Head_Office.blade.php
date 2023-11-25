@extends('Backend.Master')

@section('Container')

<section>
    <div class="container">
        <div class="row">
            <div class="slider pt-4">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://media.istockphoto.com/id/174897812/photo/illuminated-office-buildings-at-night-in-london.jpg?s=612x612&w=0&k=20&c=LqSeeWy-Vm1YJJsNex40bRN2Q4z_gLM93fySoMgLyhg=" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Head Office Dhaka</h5>
                                <p>House- 44, Road- 03, Sector- 11, Uttara, Dhaka-1230.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/premium-psd/office-reception-desk-mockup-side-view-interior-design_3146-1610.jpg?w=2000" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Recivetion of Head Office</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.istockphoto.com/id/1358416956/photo/aerial-view-at-group-of-business-people-working-together-and-preparing-new-project-on-a.webp?b=1&s=170667a&w=0&k=20&c=o0eO2DwGtvjp5WShtnZhbrg_Lc0RT7innfE715hjbtE=" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>All is your favorite</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://st3.depositphotos.com/2673929/32272/i/450/depositphotos_322724996-stock-photo-white-panoramic-ceo-office-corner.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>All is your favorite</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
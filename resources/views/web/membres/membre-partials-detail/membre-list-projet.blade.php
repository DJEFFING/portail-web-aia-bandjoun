<!-- ======= Projet Section ======= -->

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Projets</h2>
        </div>

        <div class="row gy-4">
            @forelse ($user->getProjet() as $projet)
                <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="col-xl-5">
                            <div class="card-bg"
                                style="background-image: url({{ asset('asset_web/assets/img/about.jpg') }});">
                            </div>
                        </div>
                        <h3>{{ $projet["titre"] }}</h3>
                        <p>{{ Str::limit($projet["description_1"], 100, '...') }}</p>
                        <a href="{{ route('web.show-projet', $projet["id"]) }}"
                            class="btn btn-primary">
                            consulter
                            <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->
            @empty
                <center>
                    <p>Aucun projet</p>
                </center>
            @endforelse
        </div>

    </div>
</section>

<div class="row gy-4 posts-list">
    <div class="section-header">
        <h2>Publication ({{ count($user->publications) }})</h2>
    </div>

     <!-- Liste des publication pas année -->
     <div class="col gy-8 posts-list ">

        <hr>
        @forelse ($publications as $annee => $pubs)
            <br>
            <br>
            <h5><span class="bg-success text-white" style="border-radius: 5px; margin-right: 5px;">
                    Annee : </span>{{ $annee }}</h5>
            <br>


            @forelse ($pubs as $publication)
                <div class="col-xl-12 d-flex " data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item d-flex card post-item position-relative h-100 ">
                        <div class="row">
                            {{-- <div class="col-xl-4">
                                <img src=" {{ asset('storage/' . $publication->media_url) }} "
                                    class="img-fluid" alt="">

                            </div> --}}
                            <div class="col-xl-12 d-flex align-items-center">

                                <div class="card-body">

                                    <h3 class="post-title">{{ Str::limit($publication->titre, 100, '...') }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i>
                                            @forelse ($publication->users as $user)
                                                <strong><span class="ps-2">{{ $user->name }}</span></strong>,
                                            @empty
                                            @endforelse

                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span
                                                class="ps-2">{{ count($publication->documents) }}
                                                Documents</span>
                                        </div>

                                    </div><br>
                                    {{-- <span class="px-3 text-black-50">/</span> --}}
                                    <div class="d-flex align-items-center">
                                        <span
                                            style="background-color: #8fceec; color:white; text-align: center; width: 80px; margin-right: 10px; padding: 5px;">Categ
                                            :
                                        </span>
                                        <span class="ps-2">
                                            {{ $publication->typePublication->nom }}
                                        </span>
                                    </div>
                                    <p style="display-flex:auto;" class="px-3">
                                        {{ Str::limit($publication->description_1, 1000, '...') }}</p>

                                    <hr>

                                    <a href="{{ route('web.show-publication', $publication->id) }}"
                                        class="readmore stretched-link "><span class="btn btn-primary">
                                            consluter </span><i class="bi bi-arrow-right"></i></a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div><br>
            @empty
            @endforelse


        @empty
            <center>
                <p>Aucune Information</p>
            </center>
        @endforelse



    </div>
    <!--END Liste des publication pas année -->
</div>

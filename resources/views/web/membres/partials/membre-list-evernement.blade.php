 <!-- ======= Our Projects Section ======= -->
 <section id="projects" class="projects">
     <div class="container" data-aos="fade-up">

         <div class="section-header">
             <h2>Evénements</h2>
         </div>

         <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
             data-portfolio-sort="original-order">

             <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                 <li data-filter="*" class="filter-active">All</li>
                 @forelse ($typeEvenement as $type)
                     <li data-filter=".filter-{{ $type->nom }}">{{ $type->nom }}</li>
                 @empty
                     <center>
                         <p>Pas d'Événement</p>
                     </center>
                 @endforelse

             </ul>
             <!-- End Projects Filters -->

             <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                 @forelse ($user->evernements as $evernement)
                     @if (count($evernement->types) > 1)
                         <div
                             class="col-lg-4 col-md-6 portfolio-item @foreach ($evernement->types as $type) filter-{{ $type->nom }} @endforeach ">
                             <div class="portfolio-content h-100">
                                 <img src=" {{ asset('storage/' . $evernement->media_url) }} " class="img-fluid"
                                     alt="">

                                 <div class="portfolio-info">
                                     <h4>{{ $evernement->date }}</h4>
                                     <h4>{{ $evernement->ville }}</h4>
                                     <p>{{ $evernement->titre }}</p>
                                     <a href=" {{ asset('storage/' . $evernement->media_url) }}"
                                         title="{{ $evernement->titre }}" data-gallery="portfolio-gallery-remodeling"
                                         class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                     <a href="{{ route('web.show-evernement', $evernement->id) }}" title="More Details"
                                         class="details-link"><i class="bi bi-link-45deg"></i></a>
                                 </div>
                             </div>
                         </div>
                         <!-- End Projects Item -->
                     @else
                         <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $evernement->types[0]->nom }} ">
                             <div class="portfolio-content h-100">
                                 <img src="  {{ asset('storage/' . $evernement->media_url) }} " class="img-fluid"
                                     alt="">
                                 <div class="portfolio-info">
                                     <h4>{{ $evernement->date }}</h4>
                                     <h4>{{ $evernement->ville }}</h4>
                                     <p>{{ $evernement->titre }}</p>
                                     <a href="  {{ asset('storage/' . $evernement->media_url) }} "
                                         title="{{ $evernement->titre }}" data-gallery="portfolio-gallery-remodeling"
                                         class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                     <a href="{{ route('web.show-evernement', $evernement->id) }}" title="More Details"
                                         class="details-link"><i class="bi bi-link-45deg"></i></a>
                                 </div>
                             </div>
                         </div>
                     @endif

                 @empty
                     <center>
                         <p>Pas d'événement pour l'instant</p>
                     </center>
                 @endforelse


             </div><!-- End Projects Container -->

         </div>

     </div>
 </section><!-- End Our Projects Section -->

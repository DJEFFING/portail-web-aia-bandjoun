 @extends('admin.app.app')
 @section('content')
     <div class="main-container">
         <div class="pd-ltr-20 xs-pd-20-10">
             <div class="min-height-200px">
                 <div class="page-header">
                     <div class="row">
                         <div class="col-md-12 col-sm-12">
                             <div class="title">
                                 <h4>Liste Evénements</h4>
                             </div>
                             <nav aria-label="breadcrumb" role="navigation">
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Liste Evénements</li>
                                 </ol>
                             </nav>
                         </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <input type="text " class="form-control" id="searchBar" name="search"
                         placeholder="Recherche: Titre, ville, Lieu, Date, Status ">
                 </div>

                 <div class="row clearfix">
                     @foreach ($listEvernement as $evernement)
                         <div class="col-sm-12 col-md-12 col-lg-4 mb-30 search-card">
                             <div class="card card-box">
                                 <img class="card-img-top" src="{{ asset('storage/' . $evernement->media_url) }}"
                                     alt="Card image cap">
                                 <div class="card-body">
                                     <small>
                                         <span class="badge badge-info">{{ $evernement->date }}</span>,
                                         <span class="badge badge-info">{{ $evernement->ville }}</span>,
                                         <span class="badge badge-info">{{ $evernement->adress }}</span>
                                         <a
                                             href="{{ Auth::user()->getRole('admin') ? route('admin.evernement.isVisible', $evernement->id) : '#' }}">
                                             @if ($evernement->status)
                                                 <span class="badge badge-success">
                                                     publier
                                                 </span>
                                             @else
                                                 <span class="badge badge-danger">
                                                     non-public
                                                 </span>
                                             @endif

                                         </a>
                                     </small>
                                     <h5 class="card-title weight-500">{{ $evernement->titre }}</h5>
                                     <p class="card-text">{{ $evernement->description_1 }}</p>

                                     <div class="row">

                                         <a href="{{ route('admin.evernement.show', $evernement->id) }}"
                                             class="btn btn-sm btn-outline-info me-2 col-md-4">
                                             <i class="dw dw-eye"></i>
                                         </a>

                                         @if (Auth::user()->getRole('Admin'))
                                             <a href="{{ route('admin.evernement.showUpdate', $evernement->id) }}"
                                                 class="btn btn-sm btn-outline-warning me-2 col-md-4">
                                                 <i class="dw dw-edit2"></i>
                                             </a>

                                             <button class="btn btn-sm btn-outline-danger col-md-4" data-toggle="modal"
                                                 data-target= "{{ '#delete' . $evernement->id }}">
                                                 <i class="dw dw-delete-3"></i>
                                             </button>

                                             @include('admin.global-modal.delete-modal', [
                                                 'url' => route('admin.evernement.delete', $evernement->id),
                                                 'id' => $evernement->id,
                                             ])
                                         @endif
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach

                 </div>

             </div>
             <div class="footer-wrap pd-20 mb-20 card-box">
                 UR-AIA BANDJOUN
             </div>
         </div>
     </div>
 @endsection

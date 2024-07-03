@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Creation d'une publication</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <form class="html-editor pd-20 card-box mb-30" method="POST" action="{{ route('admin.publication.store') }}"
                    enctype="multipart/form-data">
                    <h4 class="h4 text-blue">Ce formulaire Permet de crée une Publication</h4>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Titre : </label><span class="text-danger">*</span>
                            <input type="text" name="titre" class="form-control" required>
                        </div>
                    </div>

                    <!-- Liste des Type de Publication -->
                    <div class="col-md-12">
                        <div class="form-group mb-200">
                            <label>Type de publication : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="type_publication_id"
                                style="width: 100%; height: 38px;" required>

                                <optgroup label="Revue d'article">
                                    @forelse ($typePublications as $typePublication)
                                        <option value="{{ $typePublication->id }}">{{ $typePublication->nom }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <!-- Liste des Annee de Publication -->
                    <div class="col-md-12">
                        <div class="form-group mb-200">
                            <label>Annee de publication : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="annee_publication_id"
                                style="width: 100%; height: 38px;" required>

                                <optgroup label="Revue d'article">
                                    @forelse ($anneePublications as $annee)
                                        <option value="{{ $annee->id }}">{{ $annee->annee_publication }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image : </label><span class="text-danger"></span>
                            <input type="file" name="media_url" accept="image/*" class="form-control">
                        </div>
                    </div>
                    <!--END Image -->




                    <!-- description -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description : </label><span class="text-danger">*</span>
                            {{-- <input type="text" class="form-control"> --}}
                            <textarea name="description_1" id="" class="form-control" required></textarea>
                        </div>
                    </div>
                    <!--END description -->


                    <label>Contenue :</label> <span class="text-danger">*</span>
                    <textarea class="textarea_editor form-control border-radius-0" name="description_2" placeholder="Enter text ..."
                        required>
                    </textarea><br>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ajouter un lien externe : </label><span class="text-danger"></span>
                            <input type="text" placeholder="https://www.youtube.com/" name="lien_externe" class="form-control">
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">Valider</button>
                    <!--END Responssable du Domaine de Recherche -->
                </form>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANDJOUN</a>
            </div>
        </div>
    </div>
@endsection

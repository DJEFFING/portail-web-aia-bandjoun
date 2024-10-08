@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Modification d'un Article</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <form class="html-editor pd-20 card-box mb-30" method="POST"
                    action="{{ route('admin.article.update', $article->id) }}" enctype="multipart/form-data">
                    <h4 class="h4 text-yellow">Ce formulaire Permet de Modifier un Article</h4>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Titre : </label><span class="text-danger">*</span>
                            <input type="text" name="titre" value="{{ $article->titre }}" class="form-control"
                                required>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image : </label><span class="text-danger">*</span>
                            <input type="file" name="media_url" accept="image/*" class="form-control">
                        </div>
                    </div>
                    <!--END Image -->


                    <!-- description -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description : </label><span class="text-danger">*</span>
                            {{-- <input type="text" class="form-control"> --}}
                            <textarea name="description_1" id="" class="form-control" required>{{ $article->description_1 }}</textarea>
                        </div>
                    </div>
                    <!--END description -->


                    <label>Contenue :</label> <span class="text-danger">*</span>
                    <textarea class="textarea_editor form-control border-radius-0" name="description_2" placeholder="Enter text ..."
                        required>{{ $article->description_2 }}</textarea><br>



                    <!-- Liste des Revues -->
                    <div class="col-md-12">
                        <div class="form-group mb-200">
                            <label>Revue : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="revue_id" style="width: 100%; height: 38px;"
                                required>

                                <optgroup label="Revue d'article">
                                    @forelse ($listRevue as $revue)
                                        @if ($revue->id == $article->revue_id)
                                            <option value="{{ $revue->id }}" selected>{{ $revue->titre }}</option>
                                        @endif
                                        <option value="{{ $revue->id }}">{{ $revue->titre }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
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

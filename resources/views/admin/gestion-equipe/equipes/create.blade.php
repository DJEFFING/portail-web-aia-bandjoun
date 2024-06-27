@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Ajouter Une Equipe De Recherche</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <form class="html-editor pd-20 card-box mb-30" method="POST" action="{{ route('admin.equipe.store') }}" enctype="multipart/form-data">
                    <h4 class="h4 text-blue">Ce formulaire Permet D'ajouter une Equipe </h4>
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Code  : </label><span class="text-danger">*</span>
                                <input type="text" name="code_equipe" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Titre : </label><span class="text-danger">*</span>
                                <input type="text" name="titre" class="form-control" required>
                            </div>
                        </div>

                    </div>


                    <!-- Image -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image : </label><span class="text-danger">*</span>
                            <input type="file" name="media_url" accept="image/*" class="form-control" required>
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
                    <textarea class="textarea_editor form-control border-radius-0" name="description_2" placeholder="Enter text ..." required></textarea><br>

                    <!-- Liste Des Membres-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Responssable : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="user_id" style="width: 100%; height: 38px;" required>

                                <optgroup label="Liste Des Menbres">
                                    @forelse ($listUsers as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
                        </div>
                    </div>


                        <!-- Pôle de recherche List -->
                        <div class="col-md-12">
                            <div class="form-group mb-200">
                                <label>Pôle de Recherche : </label> <span class="text-danger">*</span>
                                <select class="custom-select2 form-control" name="pole_recherche_id" style="width: 100%; height: 38px;" required>

                                    <optgroup label="Pôle de Recherche">
                                        @forelse ($listPoles as $pole)
                                            <option value="{{ $pole->id }}">{{ $pole->titre }}</option>
                                        @empty
                                        @endforelse
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                    <button class="btn btn-primary" type="submit">Valider</button>
                    <!--END Responssable du pôles de recherche -->
                </form>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANDJOUN</a>
            </div>
        </div>
    </div>
@endsection

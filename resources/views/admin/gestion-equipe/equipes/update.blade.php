@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4 class="text-warning">Modifier l’équipe.</h4>
                                <h5 class="help-block form-text"  style="color:red;">{!! $errors->first('user_id', '<p class="help-block" style="color:red">:message</p>') !!}</h5>
                            </div>
                        </div>
                    </div>
                </div>


                <form class="html-editor pd-20 card-box mb-30" method="POST" action="{{ route('admin.equipe.update',$equipe->id) }}" enctype="multipart/form-data">
                    <h4 class="h4 text-blue">Ce formulaire permet de modifier une équipe.</h4>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Titre : </label><span class="text-danger">*</span>
                            <input type="text" name="titre"  value="{{ $equipe->titre }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image : </label><span class="text-danger">*</span>
                            <input type="file" value="{{ $equipe->media_url }}" name="media_url" class="form-control" >
                        </div>
                    </div>
                    <!--END Image -->


                    <!-- description -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description : </label><span class="text-danger">*</span>
                            {{-- <input type="text" class="form-control"> --}}
                            <textarea name="description_1" id="" class="form-control" required>{{ $equipe->description_1 }}</textarea>
                        </div>
                    </div>
                    <!--END description -->


                    <label>Contenue :</label> <span class="text-danger">*</span>
                    <textarea class="textarea_editor form-control border-radius-0" name="description_2" placeholder="Enter text ..." required>{{ $equipe->description_2 }}</textarea><br>

                    <!-- Responssable du pole de recherche -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Responssable : </label> <span class="text-danger">*</span>
                            <select class="custom-select2 form-control" name="user_id" style="width: 100%; height: 38px;" required>

                                <optgroup label="Liste Des Menbres">
                                    @forelse ($userList as $user)
                                    @if ($user->id == $equipe->user_id)
                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                    @endif
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                    @endforelse
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-white" type="reset">Retour</button>
                    <button class="btn btn-warning" type="submit">Modifier</button>
                    <!--END Responssable du pole de recherche -->
                </form>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                UR-AIA BANDJOUN</a>
            </div>
        </div>
    </div>
@endsection

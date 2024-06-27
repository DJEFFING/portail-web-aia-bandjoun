@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Modifier Un Evénement</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <form class="html-editor pd-20 card-box mb-30" method="POST" action="{{ route('admin.evernement.update',$evernement->id) }}"
                    enctype="multipart/form-data">
                    <h4 class="h4 text-blue">Ce formulaire Permet De Modifier un Evénement </h4>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Titre : </label><span class="text-danger">*</span>
                            <input type="text" name="titre" value="{{ $evernement->titre }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image : </label><span class="text-danger">*</span>
                            <input type="file" name="media_url" accept="image/*" class="form-control" >
                        </div>
                    </div>
                    <!--END Image -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ville : </label><span class="text-danger">*</span>
                                <input type="text" name="ville" value="{{ $evernement->ville }}" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Adress : </label><span class="text-danger">*</span>
                                <input type="text" name="adress" value="{{ $evernement->adress }}" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Date :</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" value="{{ $evernement->date }}" name="date" placeholder="Select Date" required >
                            </div>
                        </div>
                    </div>


                    <!-- description -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description : </label><span class="text-danger">*</span>
                            {{-- <input type="text" class="form-control"> --}}
                            <textarea name="description_1" id="" class="form-control" required>{{ $evernement->description_1 }}</textarea>
                        </div>
                    </div>
                    <!--END description -->


                    <label>Contenue :</label> <span class="text-danger">*</span>
                    <textarea class="textarea_editor form-control border-radius-0" name="description_2" placeholder="Enter text ..."
                        required>{{ $evernement->description_2 }}</textarea><br>

                    	<div class="col-md-12">
                            <div class="form-group">
                                <label>Type Evénement</label><span class="text-danger">*</span>
                                <select class="custom-select2 form-control" name="typeEvent_id[]" multiple="multiple" style="width: 100%;">
                                    <optgroup label="Type Evénement">
                                        @forelse ($listTypeEvernement as $item=>$TypeEvernement)
                                        {{-- @if ( ($item+1) <= (count($evernement->types)) && $TypeEvernement->id == $evernement->types[$item]->id ) --}}
                                        @if (in_array( ($item+1), ($evernement->types->pluck("id")->toArray())  ))
                                        <option value="{{ $TypeEvernement->id }}" selected>{{ $TypeEvernement->nom }}</option>
                                        @endif
                                        <option value="{{ $TypeEvernement->id }}">{{ $TypeEvernement->nom }}</option>
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

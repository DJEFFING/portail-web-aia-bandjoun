<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
    <div class="profile-setting">
        <form action="{{ route('admin.user.update',$user->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            <ul class="profile-edit-list row">
                <li class="weight-500 col-md-6">
                    <h4 class="text-blue h5 mb-20">Modifier Votre Profil</h4>
                    <div class="form-group">
                        <label>Nom :</label>
                        <input class="form-control form-control-lg" type="text"
                            value="{{ $user->name }}" name="name">
                    </div>
                    <div class="form-group">
                        <label>Prenom :</label>
                        <input class="form-control form-control-lg" type="text"
                            value="{{ $user->prenom }}" name="prenom">
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input class="form-control form-control-lg" type="email"
                            value="{{ $user->email }}" name="email">
                    </div>
                    <div class="form-group">
                        <label>Telephone :</label>
                        <input class="form-control "
                            type="text" value="{{ $user->telephone }}"
                            name="telephone">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <div class="d-flex">
                            <div class="custom-control custom-radio mb-5 mr-20">
                                <input type="radio" id="customRadio4"
                                    name="sexe" class="custom-control-input">
                                <label class="custom-control-label weight-400"
                                    for="customRadio4">Homme</label>
                            </div>
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio5"
                                    name="sexe" class="custom-control-input">
                                <label class="custom-control-label weight-400"
                                    for="customRadio5">Femme</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Profil : </label>
                        <input class="form-control"
                            type="file" accept="image/*" name="profil_url">
                    </div>


                    <div class="form-group">
                        <label>Address :</label>
                        <textarea class="form-control" name="adress">{{$user->adress}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Description :</label>
                        <textarea class="form-control" name="description">{{ $user->description }}</textarea>
                    </div>
                </li>

                <!-- Les Liens -->
                <li class="weight-500 col-md-6">
                    <h4 class="text-blue h5 mb-20">Lien Social</h4>
                    <div class="form-group">
                        <label>Facebook URL:</label>
                        <input class="form-control form-control-lg" type="text"
                            placeholder="Paste your link here"
                            value="{{ $user->facebook_url }}"
                            name="facebook_url">
                    </div>

                    <div class="form-group">
                        <label>Twitter URL:</label>
                        <input class="form-control form-control-lg" type="text"
                            placeholder="Paste your link here"
                            value="{{ $user->twiter_url }}" name="twiter_url">
                    </div>

                    <div class="form-group">
                        <label>Linkedin URL:</label>
                        <input class="form-control form-control-lg" type="text"
                            placeholder="Paste your link here"
                            value="{{ $user->linkdin_url }}"
                            name="linkdin_url">
                    </div>

                    <div class="form-group">
                        <label>Instagram URL:</label>
                        <input class="form-control form-control-lg" type="text"
                            placeholder="Paste your link here"
                            value="{{ $user->instagram_url }}"
                            name="instagram_url">
                    </div>


                    <div class="form-group">
                        <label>web URL:</label>
                        <input class="form-control form-control-lg" type="text"
                            placeholder="Paste your link here"
                            value="{{ $user->web_url }}" name="web_url">
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" class="btn btn-primary"
                            value="Save & Update">
                    </div>
                </li>
            </ul>
        </form>
    </div>
</div>

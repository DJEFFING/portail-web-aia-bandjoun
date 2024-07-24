<div class="tab-pane fade show " id="change_password" role="tabpanel">
    <div class="pd-20">
        <div class="profile-timeline">
            <form action="{{ route('admin.user.changePassword') }}" method="POST">
                @csrf
                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" name="current_password"
                        placeholder="Votre mot de passe actuelle">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                    </div>
                </div>

                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" name="password"
                        placeholder="Votre nouveau mo de passe">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                    </div>
                </div>
                @error('password')
                    <div class=" text text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror

                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" name="password_confirmation"
                        placeholder="confimez votre mot de passe">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                    </div>
                </div>
                @error('password_confirmation')
                    <div class=" text text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror

                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-0">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Changer le mot de passe</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

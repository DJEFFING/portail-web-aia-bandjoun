@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Gestion Des Partenaires</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Striped table start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Liste</h4>

                        </div>
                        @if (Auth::user()->getRole('Admin'))
                            <div class="pull-right">
                                <a href="#striped-table" class="btn btn-success btn-sm scroll-click" rel="content-y"
                                    data-toggle="modal" data-target="#Ajouter" role="button"><i class="icon-copy fi-plus"></i></a>
                            </div>
                        @endif

                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Logo</th>
                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($listPartenaires as $partenaire)
                                <tr>
                                    <th scope="row">{{ $partenaire->id }}</th>
                                    <td>{{ $partenaire->nom }}</td>
                                    <td><img src="{{ asset('storage/'.$partenaire->logo_url) }}" style="width: 50px; height: 50px;" alt=""></td>
                                    <td><a href="{{ ( Auth::user()->getRole("admin") ) ? route('admin.partenaire.isVisible',$partenaire->id) : '#' }}"><span class="{{($partenaire->status) ?  'badge badge-success' : 'badge badge-danger' }}">{{ ($partenaire->status) ? 'public' : 'non-public' }} </span></a></td>

                                    <td> <button href="" class="btn btn-sm btn-outline-info me-2" data-toggle="modal"
                                            data-target="{{ '#show' . $partenaire->id }}">
                                            <i class="dw dw-eye"></i>
                                        </button>
                                        @if (Auth::user()->getRole('Admin'))
                                            <button href="" class="btn btn-sm btn-outline-warning me-2"
                                                data-toggle="modal" data-target="{{ '#update' . $partenaire->id }}">
                                                <i class="dw dw-edit2"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="modal"
                                                data-target="{{ '#delete' . $partenaire->id }}">
                                                <i class="dw dw-delete-3"></i>
                                            </button>
                                        @endif
                                    </td>

                                    @include('admin.partenaire.show', [
                                        'id' => $partenaire->id,
                                        'item' => $partenaire,
                                    ])

                                    @include('admin.partenaire.update', [
                                        'id' => $partenaire->id,
                                        'item' => $partenaire,
                                    ])
                                    @include('admin.global-modal.delete-modal', [
                                        'id' => $partenaire->id,
                                        'url' => route('admin.partenaire.delete', $partenaire->id),
                                    ])

                                </tr>

                            @empty
                            @endforelse





                        </tbody>
                    </table>
                    <div class="collapse collapse-box" id="striped-table">
                        <div class="code-box">
                            <div class="clearfix">
                                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
                                    data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy
                                    Code</a>
                                <a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y"
                                    data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Striped table End -->

            </div>

        </div>
    </div>

    @include('admin.partenaire.create')
@endsection


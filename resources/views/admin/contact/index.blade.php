@extends('admin.app.app')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Section Slide</h4>
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
                        {{-- @if (Auth::user()->getRole('Admin'))
                            <div class="pull-right">
                                <a href="#striped-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"
                                    data-toggle="modal" data-target="#Ajouter" role="button">Ajouter</a>
                            </div>
                        @endif --}}

                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($contacts as $contact)
                                <tr>
                                    <th scope="row">{{ $contact->id }}</th>
                                    <td>{{ $contact->adress }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->telephone }}</td>

                                    <td>
                                        @if (Auth::user()->getRole('Admin'))
                                            <button href="" class="btn btn-sm btn-outline-warning me-2"
                                                data-toggle="modal" data-target="{{ '#update' . $contact->id }}">
                                                <i class="dw dw-edit2"></i>
                                            </button>

                                        @endif
                                    </td>


                                    @include('admin.contact.update', [
                                        'id' => $contact->id,
                                        'item' => $contact,
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

    {{-- @include('admin.fonction.create') --}}
@endsection

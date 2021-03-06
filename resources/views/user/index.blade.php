@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">{{ __('user.table_title') }}</h5>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama_lengkap }}</td>
                                        <td class="text-right">
                                            @if(!$user->is_admin)
                                                <a class="btn btn-success"><span class="text-white">Promote</span></a>
                                            @endif
                                            <a class="btn btn-primary" href="/u/{{ $user->id }}"><span class="text-white">Detail</span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
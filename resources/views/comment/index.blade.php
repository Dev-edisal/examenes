@extends('layouts.app')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    Lista de comentarios
                </h6>

                @can('comment_create')
                    <a class="btn btn-indigo" href="{{ route('comments.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.comment.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('comment.index')

    </div>
</div>
@endsection

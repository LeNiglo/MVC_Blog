@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($posts as $post)
                        <div class="row" id="posts">
                            <div class="col-xs-12 post">
                                <h3>{{ $post->title }}</h3>
                                <div class="well">
                                    {!! $post->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="text-center">
                        {{ $posts->appends($search)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

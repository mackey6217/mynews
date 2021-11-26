@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="name">
                                    {{ str_limit($post->name, 20) }}
                                </div>
                                <div class="gender mt-3">
                                    {{ str_limit($post->gender, 10) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 100) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 300) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
            </div>
        </div>
    </div>
@endsection
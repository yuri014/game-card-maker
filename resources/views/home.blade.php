@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="timeline-content">
                <div class="timeline-profile-social">
                    <div class="timeline-profile-image">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="User">
                    </div>
                    <div class="profile-details">
                        <h5>{{ $post->user->username }}</h5>
                        <a href="/profile/{{ $post->user->id }}" target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                <div class="timeline-posts">
                    <h4 class="post-title">{{ $post->title }}</h4>
                    <div class="timeline-post">
                        <img src="/storage/{{ $post->image }}" alt="">
                        <div class="post-atributes">
                            <div class="post-stats">
                                <div class="damage">
                                    <i class="fas fa-skull-crossbones"></i> {{ $post->power }}
                                </div>
                                <div class="defence">
                                    <i class="fas fa-shield-alt"></i> {{ $post->defence }}
                                </div>
                            </div>
                            <div class="post-description">
                                {{ $post->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
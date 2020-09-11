@extends('layouts.app')

@section('content')
<div class="container profile-block">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="profile-content">
                <div class="profile-social">
                    <div class="profile-image">
                        <img src="{{ $user->profile->profileImage() }}" alt="User">
                    </div>
                    <div class="profile-details">
                        <h5>{{ $user->username }}</h5>
                        <h5>Cards Pack: 12</h5>
                        <h5>Following: 500</h5>
                        <h5>Followers: 400</h5>
                        <a href="{{ $user->profile->link }}" target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                <div class="profile-data">

                    <div class="profile-edit">
                        @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit">Edit Profile {{$follows}}</a>

                        @endcan
                        <div id="follow-button" userId="{{ $user->id }}" follows="{{ $follows }}"></div>
                    </div>

                    <div class="profile-title">
                        {{ $user->profile->title }}
                    </div>
                    <div class="profile-description">
                        {{ $user->profile->description }}
                    </div>
                    <div class="profile-favcardgame">
                        My favorite Card Game is {{ $user->profile->favoriteCardGame }}
                    </div>
                </div>
                <hr>
            </div>
            <div class="profile-posts-block">
                <hr>
                <div class="profile-posts-content" id="bah">
                    @foreach($user->posts as $post)
                    <div class="post">
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
                            <div class="description">
                                {{ $post->description }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
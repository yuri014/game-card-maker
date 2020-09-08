@extends('layouts.app')

@section('content')
<div class="container profile-block">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="profile-content">
                <div class="profile-social">
                    <div class="profile-image">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="User">
                    </div>
                    <div class="profile-details">
                        <h5>{{ $user->username }}</h5>
                        <h5>Cards Pack: 12</h5>
                        <h5>Following: 500</h5>
                        <h5>Followers: 400</h5>
                        <a href="#">{{ $user->profile->link }}</a>
                    </div>
                </div>
                <div class="profile-data">
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
            <div class="profile-posts">
                <hr>
                TESTING
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            {{ dump(Auth::user()) }}
            <h2>{{ trans('index.hello')}}, {{ Auth::user()->first_name }}</h2>
            <form action="{{ route('user.profile.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file">
                <button class="profileButton"> {{ trans('index.save_photo')}}</button>
            </form>
            @if (!$user->img_path == 0)
                <img src='/images/profilePhoto/{{ $user->img_path}}' class="profilePhoto"/>
            @endif
            <form action="{{ route('user.profile.update', $user->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="con">
                    <div class="field-set">
                        <div>
                            <label for="profile">{{ trans('index.bio')}}</label>
                            <textarea id="profile" name="profile"
                                      placeholder="Write something..">{{ $user->profile }}</textarea>
                        </div>

                        <div>
                            <label for="website">{{ trans('index.website')}}</label>
                            <input class="profile-input" type="text" id="website" name="website"
                                   value="{{ $user->website }}">
                        </div>

                        <div>
                            <label for="twitter">{{ trans('index.twitter')}}</label>
                            <input class="profile-input" type="text" id="twitter" name="twitter"
                                   value="{{ $user->twitter }}">
                        </div>
                        <div>
                            <label for="instagram">{{ trans('index.instagram')}}</label>
                            <input class="profile-input" type="text" id="instagram" name="instagram"
                                   value="{{ $user->instagram }}">
                        </div>
                        <div>
                            <label for="facebook">{{ trans('index.facebook')}}</label>
                            <input class="profile-input" type="text" id="facebook" name="facebook"
                                   value="{{ $user->facebook }}">
                        </div>
                        <button  class="profileButton"> {{ trans('index.save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

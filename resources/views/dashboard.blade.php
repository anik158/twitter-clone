@extends('layouts.app')
@section('content')
    <div class="row">

        @include('includes.leftside-bar')
        <div class="col-6">

            @include('includes.success-message')
            @include('includes.submit-ideas')

            <hr>

            @foreach($ideas as $idea)
                <div class="mt-3">
                    @include('includes.card-body')
                </div>
            @endforeach

            <div class="mt-3">
                {{$ideas->links()}}
            </div>
        </div>

        <div class="col-3">
          @include('includes.search-bar')

            @include('includes.follow-box')
        </div>
    </div>
@endsection



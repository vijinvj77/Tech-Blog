@extends('layouts.app')
@section('content')
    <section class="lg-mt-2 md-mt-4">
        <div class="card container bg-dark mt-lg-4 mt-md-4">
            <div class="card-header text-warning mx-auto">Write New Blog!</div>
            <div class="card-body text-white">
                <form class="text-white" action="{{route('save-blog')}}" method="POST">
                    @csrf
                    
                </form>
            </div>
        </div>
    </section>
@endsection
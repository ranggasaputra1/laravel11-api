@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-space></x-space>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                        </div>
                        @endif

                        You Are Logged in
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
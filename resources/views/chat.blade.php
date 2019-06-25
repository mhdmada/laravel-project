@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Mythings Messenger</div>

                <div class="card-body" id="konten">
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
                <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
            </div>
        </div>
    </div>
</div>
@endsection

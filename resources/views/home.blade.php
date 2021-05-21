@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- inicio columna -->
        <div class="col-md-8">
            @include('includes.msg')
            @foreach($images as $img)
                @include('includes.card', ['img' => $img])
            @endforeach
            <!-- PAGINACION -->
            <div class="clearfix"></div>
            {{ $images->render() }}
        </div>
        <!-- fin columna -->
    </div>
</div>
@endsection
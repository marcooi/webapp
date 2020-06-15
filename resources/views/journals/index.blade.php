@extends('layouts.app')



@section('content')

<section class="panel">

    <header class="panel-heading">
        <div class="pull-right">            
            <a class="btn btn-sm btn-success" href="{{ route('journals.create') }}"> Add Journal</a>
           
        </div>

        <h2 class="panel-title">List Journal</h2>
    </header>


    <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

     

</section>

@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Virtual Machine</h1>
                    </div>
                </div>
                <livewire:virtual-machine-table theme="bootstrap-5"/>
            </div>
        </div>
    </div>
@endsection
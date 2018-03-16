@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are Admin in!

                        <div>
                            <b-btn v-b-modal.modal1>Launch demo modal</b-btn>

                            <!-- Modal Component -->
                            <b-modal id="modal1" title="Bootstrap-Vue">
                                <p class="my-4">Hello {{Auth::user()->hasRole('admin')}}</p>
                            </b-modal>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@extends('layouts.app')
@section('content')
    <section class="card-list py-5">
        <div class="ms-container">
            <div class="container-fluid">
                <div class="row row-cols-6 g-2">
                    @foreach ($data as $item)
                        <div class="col">
                            <div class="card">
                                <img src={{ $item['thumb'] }} alt={{ $item['title'] }}>
                                <p class="ms-card-subtitle">{{ $item['series'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="d-grid gap-2 col-2 mx-auto">
                <button class="btn btn-primary" type="button">Load more</button>
            </div>
        </div>


    </section>
@endsection

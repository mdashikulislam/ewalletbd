@extends('admin.app')
@section('main-content')

<div class="container">
            <div class="row">
                <div class="col-md-4">

<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>On Processing </h2>
            <p style="text-align: center;">{{App\Http\Helpers\Helper::onProcessCount()}}</p>
        </div>
    </div>
</div>
                <div class="col-md-4">

<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>Total Verified User</h2>
        </div>
    </div>
</div>
                <div class="col-md-4">

<div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
            <h2>Total Success EXCHANGES</h2>
        </div>
    </div>
</div>
</div>
</div>

@endsection

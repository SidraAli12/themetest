@extends('layout.app')

@section('page_title', 'Dashboard')
@section('breadcrumb', 'Overview')

@section('content')
<div class="row g-5 mb-5">
    <div class="col-md-6 col-xxl-3">
        <div class="card card-dashed h-100 p-6 d-flex justify-content-between flex-row">
            <div>
                <div class="fs-4 fw-bold mb-2">Total Revenue <span class="text-gray-400 fs-6 ms-2">+38%</span></div>
                <div class="fs-2x fw-bolder">$8,420</div>
            </div>
            <div id="chart1" class="w-75px h-75px"></div>
        </div>
    </div>

    <div class="col-md-6 col-xxl-3">
        <div class="card card-dashed h-100 p-6 d-flex justify-content-between flex-row">
            <div>
                <div class="fs-4 fw-bold mb-2">New Orders <span class="text-gray-400 fs-6 ms-2">+22%</span></div>
                <div class="fs-2x fw-bolder">1,045</div>
            </div>
            <div id="chart2" class="w-75px h-75px"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => console.log('Dashboard ready'));
</script>
@endsection

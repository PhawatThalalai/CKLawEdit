@extends('layouts.master')
@section('content')
    <div class="row g-1">

        {{-- header content --}}

        <div class="row mb-2">
            <div class="col-12 text-end">
                <a href="{{ route('Law.index') }}?type={{ 'DataCourt1' }}" type="button"
                    class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
                    ข้อมูลลูกหนี้ <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
        @include('DataLawsuit.section-court.data-case')
        @include('DataLawsuit.section-court.tab-content-case')
        <div class="col-12">
            <a type="button" class="btn btn-warning btn-rounded waves-effect waves-light mb-2 me-2">
                เบิกค่าใช้จ่ายในคดี <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>



    </div>
@endsection

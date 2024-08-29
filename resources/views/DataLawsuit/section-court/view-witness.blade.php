@extends('layouts.master')
@section('content')
    <div class="row g-1">

        {{-- header content --}}

        <div class="row mb-2">

            <div class="col-12 text-end">
                {{-- <a href="{{ route('Law.index') }}?type={{ 'DataCourt1' }}" type="button"
                    class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
                    ข้อมูลลูกหนี้ <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <a type="button" class="btn btn-danger btn-rounded waves-effect waves-light mb-2 me-2">
                    ปิดบัญชี <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <a type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                    ประนอมหนี้ <i class="fa-solid fa-arrow-right-long"></i>
                </a> --}}

                <a href="{{ route('Law.index') }}?type={{ 'DataCourt1' }}" type="button"
                    class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2" id="debtor">
                    ข้อมูลลูกหนี้ <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <a type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" id="compromise">
                    ประนอมหนี้ <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <a type="button" class="btn btn-danger btn-rounded waves-effect waves-light mb-2 me-2" id="close">
                    ปิดบัญชี <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <a type="button" class="btn btn btn-secondary btn-rounded waves-effect waves-light mb-2 me-2" id="execution ">
                    ข้อมูลชั้นบังคับคดี <i class="fa-solid fa-arrow-right-long"></i>
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

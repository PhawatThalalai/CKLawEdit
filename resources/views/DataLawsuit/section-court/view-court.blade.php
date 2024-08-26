@extends('layouts.master')
@section('content')
@section('DataCourt', 'active')

<div class="row g-1">

    {{-- header content --}}
    <div class="row mb-2 g-1">
        <div class="col-3 d-flex justify-content-start">
            <h5 class=" fw-semibold text-primary"><i class="fa-solid fa-address-book"></i> ฐานข้อมูลลูกหนี้ชั้นศาล
            </h5>
        </div>
        <div class="col-7">
            <div class="container mb-2">
                <form method="get" action="{{ route('Law.index') }}">
                    <div class="row g-2">
                        <div class="col">
                            <select class="form-select" name="type_time" id="">
                                <option value="date_tribunal" {{ @$type_time == 'date_tribunal' ? 'selected' : '' }}>
                                    วันยื่นฟ้อง</option>
                                <option value="date_witness" {{ @$type_time == 'date_witness' ? 'selected' : '' }}>
                                    วันนัดสืบพยาน</option>

                            </select>
                        </div>

                        <div class="col-xl">
                            <input type="date" value="{{ $dateStart }}"
                                class="form-control rounded-pill border border-0 shadow-sm" name = "dateStart">
                        </div>
                        <div class="col-xl">
                            <input type="date" value="{{ $dateEnd }}"
                                class="form-control rounded-pill border border-0 shadow-sm" name = "dateEnd">
                            <input type="hidden" value="{{ $type }}"
                                class="form-control rounded-pill border border-0 shadow-sm" name = "type">
                        </div>
                        <div class="col-xl col-md col-lg col-sm-12 d-grid gap-2">
                            <input type="submit" class="btn btn-primary rounded-pill" value="แสดง" />
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-10">
            <div class="text-sm-end">
                <a class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal"
                    data-bs-target="#modal-md" data-link="{{ route('Law.create') }}?type={{ 'ExportExcelLaw' }}">
                    <i class="fa-solid fa-download"></i> Export/Import
                </a>
                <a class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"
                    href="{{ route('showSue') }}"></i> ข้อมูลชั้นฟ้อง
                </a>
                <a class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"
                    href="{{ route('showWitness') }}"></i>
                    ข้อมูลคดีชั้นสืบพยาน
                </a>
                <a class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"
                    href="{{ route('showSubmit') }}"></i>
                    ข้อมูลคดีชั้นส่งคำบังคับ
                </a>
                <a class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"
                    href="{{ route('showAppoff') }}"></i>
                    ข้อมูลคดีชั้นตั้งพนักงาน
                </a>
            </div>
        </div>
        {{-- <div class="col-sm-3">
            <div class="text-sm-end">
                <a data-link="{{ route('Cus.create') }}?type={{ 'Createcus' }}" data-bs-toggle="modal"
                    data-bs-target="#modal-xl" type="button"
                    class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                    <i class="mdi mdi-plus me-1"></i> เพิ่มลูกค้า
                </a>
            </div>
        </div> --}}
        {{-- <div class="col-3 text-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-xl" data-link="" class="btn btn-warning btn-sm">สอบถาม <i class="fa-solid fa-magnifying-glass"></i></button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-lg" data-link="{{ route('Cus.create') }}?type={{'importDataCus'}}" class="btn btn-primary btn-sm">นำเข้า <i class="fa-solid fa-file-arrow-down"></i></button>
            <button type="button" class="btn btn-danger btn-sm">ลบ <i class="fa-solid fa-trash-can"></i></button>

        </div> --}}
    </div>


    {{-- left content --}}
    {{-- <div class="col-3">
        @include('DataCustomer.section-cus.Card-Cus')
    </div> --}}

    <div class="card col-12">
        <div class="card-body ">
            <div class="table-responsive" style="overflow-x:hidden">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dailytable"
                                class="table dailytable table-hover Custable nowrap dataTable no-footer dtr-inline">
                                <thead>
                                    <tr role="row">
                                        <th style="text-align: center;">ปีที่ฟ้อง</th>
                                        <th style="text-align: center;">เลขที่สัญญา</th>
                                        <th style="text-align: center;">จำเลย</th>
                                        <th style="text-align: center;">หมายเลขคดี</th>
                                        <th style="text-align: center;">หน่วยงาน</th>
                                        <th style="text-align: center;">ประเภทคดี</th>
                                        <th style="text-align: center;">รายงานศาล</th>
                                        {{-- <th style="text-align: center;">ประเภทคดี</th> --}}
                                        <th style="text-align: center;">สถานะ</th>

                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr data-href="{{ route('Cus.show', $item->id) }}?type={{ 'showDetail' }}">
                                            <td style="text-align: center;">
                                                {{ @$item->date_tribunal ? \Carbon\Carbon::parse($item->date_tribunal)->year + 543 : '' }}
                                            </td>
                                            <td style="text-align: center;">{{ $item->CON_NO }}</td>
                                            <td style="text-align: center;">{{ $item->prefix }}{{ $item->name }}
                                                {{ $item->surname }}
                                                @foreach ($dataGuarantor as $key => $guarantor)
                                                    @if ($item->id == $guarantor->cus_id)
                                                        <br>{{ $guarantor->prefix }}{{ $guarantor->name }}
                                                        {{ $guarantor->surname }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td style="text-align: center;">
                                                <p>{{ @$item->black_no }}</p>
                                                <p class="text-danger">{{ @$item->red_no }}</p>
                                            </td>
                                            <td style="text-align: center;">
                                                ศาลจังหวัด {{ @$item->tribunal }}

                                            </td>
                                            <td style="text-align: center;">{{ $item->case_type }}</td>

                                            <td style="text-align: center;">
                                                {{ @$item->witness_status }}
                                            </td>
                                            <td style="text-align: center;">{{ $item->status }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <script>
        $(function() {
            $(".Custable").DataTable({
                "responsive": false,
                "autoWidth": false,
                "ordering": true,
                "lengthChange": true,
                "order": [
                    [0, "asc"]
                ],
                "pageLength": 5,
                "scrollX": true,
            });
        })
    </script>

</div>


@endsection

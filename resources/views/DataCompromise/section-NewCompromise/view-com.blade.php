@extends('layouts.master')
@section('content')
@section('execution', 'active')

<div class="row g-1">
    {{-- header content --}}
    <div class="row mb-2 g-1">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div class="col-3">
                <h5 class="fw-semibold text-primary"><i class="fa-solid fa-address-book"></i> ฐานข้อมูลลูกหนี้ประนอมหนี้
                </h5>
            </div>
            <div class="col-6">
                <div class="mb-2">
                    <form method="get" action="{{ route('LawCom.index') }}">
                        <div class="row g-2">
                            <div class="col-xl">
                                <input type="date" value="{{ @$dateStart }}"
                                    class="form-control rounded-pill border border-0 shadow-sm" name="dateStart">
                            </div>
                            <div class="col-xl">
                                <input type="date" value="{{ @$dateEnd }}"
                                    class="form-control rounded-pill border border-0 shadow-sm" name="dateEnd">
                                <input type="hidden" value="{{ @$type }}"
                                    class="form-control rounded-pill border border-0 shadow-sm" name="type">
                            </div>
                            <div class="col-xl">
                                <input type="submit" class="btn btn-primary rounded-pill" value="แสดง">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3 d-flex">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-success btn-sm btn-rounded waves-effect waves-light mb-2 me-2 px-2 py-2"
                        data-bs-toggle="modal" data-bs-target="#modal-md"
                        data-link="{{ route('Exe.create') }}?type={{ 'ExportExcelExe' }}">
                        <i class="fa-solid fa-download"></i> Export
                    </a>
                    <a data-link="{{ route('Tracking.create') }}?type={{ 'shareTrack' }}" data-bs-toggle="modal"
                        data-bs-target="#modal-xl" type="button"
                        class="btn btn-success btn-sm btn-rounded waves-effect waves-light mb-2 me-2 px-2 py-2">
                        <i class="mdi mdi-plus me-1"></i> แบ่งทีมตาม
                    </a>
                    <a type="button" id="updateAll"
                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 me-2 px-2 py-2">
                        อัพเดตการจ่าย
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div class="card col-lg-12">
        <div class="card-body">
            <div class="table-responsive" style="overflow-x:hidden">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="row">
                        <div class="col-sm-12">

                            <table id="dailytable"
                                class="table dailytable table-hover Custable nowrap dataTable no-footer dtr-inline">
                                <thead>
                                    <tr role="row">
                                        <th style="text-align: center;">เลขที่สัญญา</th>
                                        <th style="text-align: center;">ชื่อ-สกุล</th>
                                        <th style="text-align: center;">ชำระล่าสุด</th>
                                        <th style="text-align: center;">จำนวนที่ผิดนัด</th>
                                        <th style="text-align: center;">ทีมตาม</th>
                                        <th style="text-align: center;">ดูรายละเอียด</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        @php
                                            $itemData = $dataInstall
                                                ->where('com_id', @$item->com_id)
                                                ->where('totalSum', '!=', '0')
                                                ->first();
                                            $dueDate = $itemData ? Carbon\Carbon::parse($itemData->due_date) : null;
                                            $monthsDiff =
                                                $dueDate && $dueDate > $today
                                                    ? 0
                                                    : ($dueDate
                                                        ? $dueDate->diffInMonths($today)
                                                        : 0);
                                            $isHighlight = $monthsDiff > 2;
                                        @endphp
                                        <tr class="{{ $isHighlight ? 'text-danger' : '' }}"
                                            data-href="{{ route('LawCom.show', $item->cus_id) }}?type={{ 'NewCompro' }}">
                                            <td style="text-align: center;">{{ @$item->CON_NO }} </td>
                                            <td style="text-align: center;">{{ @$item->name }} {{ @$item->surname }}
                                            </td>
                                            <td style="text-align: center;">{{ @$item->ViewComToFin->pay_date }} </td>
                                            <td style="text-align: center;">
                                                {{ $monthsDiff }}
                                            </td>

                                            <td style="text-align: center;">{{ @$item->ViewComToTeamFollow->name }}
                                            </td>
                                            <td style="text-align: center;">
                                            </td>
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
    <div class="modal fade " id="modal-sm-load" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content bg-transparent" style="border:0;">
                <div class="modal-body">
                    <div class="row">
                        <div class="col mx-3 text-center">
                            <lord-icon src="https://cdn.lordicon.com/ypttvtwr.json" trigger="loop"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <div class="bg-white p-2 pt-3 rounded-5">
                                <h6 class=""><b>กำลังอัพเดทข้อมูล โปรดรอซักครู่... </b></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#updateAll").click(() => {

                Swal.fire({
                    title: 'ต้องการอัพเดทการชำระ ใช่หรือไม่ ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่ ,ต้องการอัพเดท',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // $('#modal-sm-load').modal('show')
                        $.ajax({
                            url: "{{ route('LawCom.update', 0) }}",
                            type: 'put',
                            data: {
                                type: 'updateAll',
                                _token: '{{ csrf_token() }}',
                            },

                            success: (response) => {
                                // $('#modal-sm-load').modal('hide')

                                Swal.fire({
                                    icon: 'success',
                                    text: 'อัพเดทข้อมูลเรียบร้อย',
                                    showConfirmButton: true,
                                    showCancelButton: false,
                                })
                            },

                            error: (err) => {
                                //$('#modal-sm-load').modal('hide')
                                Swal.fire({
                                    icon: 'error',
                                    title: `ERROR ! ${err.status}`,
                                    text: 'อัพเดทข้อมูลไม่สำเร็จ',
                                    showConfirmButton: true,
                                    showCancelButton: false,

                                })
                                $("#modal-sm").modal('toggle');

                            }
                        })
                        $('#modal-sm-load').modal('hide')
                    }
                })

            })
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

@extends('layouts.master')
@section('content')
    <div class="row g-1">

        {{-- header content --}}
        <div class="row mb-2">
            <div class="col-6">
                <h5 class="fw-semibold text-primary"><i class="fa-solid fa-address-book"></i> ฐานข้อมูลลูกหนี้ (Data
                    Debtor)</h5>
            </div>
            <div class="col-6 text-end d-flex justify-content-end">
                <a type="button" class="btn btn-warning btn-rounded waves-effect waves-light mb-2 me-2 ">
                    ส่งชั้นฟ้อง <i class="fa-solid fa-arrow-right-long"></i>
                </a>
                <a href="{{ route('Law.index') }}?type={{ 'DataCourt1' }}" type="button"
                    class="btn btn-success btn-rounded waves-effect waves-light mb-2 ">
                    ไปหน้าลูกหนี้ชั้นฟ้อง <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
        {{-- right content --}}
        <div class="card border-0 mb-2 p-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-sm">
                            <tr>
                                <th class="text-start">เลขที่สัญญา</th>
                                <td colspan="4" class="text-start" id="CON_NO" name="CON_NO">30-2567/1234</td>
                            </tr>
                            <tr>
                                <th class="text-start">โจทย์</th>
                                <td class="text-start">บริษัท ชูเกียรติมอเตอร์ (1996) จำกัด</td>
                                <th class="text-start">จำเลย</th>
                                <td id="defendant-info" class="text-start">นายสมนึก สมมติ<br>นายสมมติ สมนึก</td>
                            </tr>
                            <tr>
                                <th class="text-start">สถานะ</th>
                                <td colspan="4" class="text-start"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card border-0 mb-1 p-2">
                <ul class="nav nav-pills row" id="pills-tab" role="tablist">
                    <li class="nav-item col text-center d-grid" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">ข้อมูลลูกหนี้(จำเลยที่ 1)</button>
                    </li>
                    <li class="nav-item col text-center d-grid" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">ข้อมูลผู้ค้ำประกัน</button>
                    </li>
                    <li class="nav-item col text-center d-grid" role="presentation">
                        <button class="nav-link" id="pills-finance-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-finance" type="button" role="tab" aria-controls="pills-finance"
                            aria-selected="false">ข้อมูลการเงิน</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    {{-- detail con --}}
                    @include('DataCustomer.section-contract.tab-Detail-Con')
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    {{-- detail con --}}
                    @include('DataCustomer.section-contract.tab-tracking-Con')
                </div>
                <div class="tab-pane fade" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab">
                    {{-- detail con --}}
                    @include('DataCustomer.section-contract.tab-finance-Con')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Inputmask().mask(document.querySelectorAll("input"));
            Inputmask().mask(document.getElementById('PhoneNumShow'));
            Inputmask().mask(document.getElementById('ID_numShow'));
            Inputmask().mask(document.getElementById('PhoneNumShow1'));
            Inputmask().mask(document.getElementById('ID_numShow1'));
            Inputmask().mask(document.getElementById('PhoneNumShow2'));
            Inputmask().mask(document.getElementById('ID_numShow2'));

            // Inputmask().mask(document.querySelector('.input-mask2'));

        });
    </script>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            $('#ID_num').mask('9-9999-99999-99-9');
            $('#PhoneNum').mask('999-9999999');
            $('#ID_numShow').mask('9-9999-99999-99-9');
            $('#PhoneNumShow').mask('999-9999999');
            
            let type = $('#type').val();
            console.log(type);
            // let currentDate = document.getElementById('date-input').valueAsDate = new Date();
            // console.log(currentDate);
            $('#saveEditCusBtn').hide()
            $('#edit_cus').on('change input', () => {
                $('#saveEditCusBtn').show()
            })
    
            $('#saveEditCusBtn').click(function(e) {
                data = {
                    status: ''
                };
                console.log('data', data);
    
                $('#edit_cus').serializeArray().map(function(x) {
                    data[x.name] = x.value;
                });
    
    
    
                console.log(data);
                let id = $('#id').val();
                console.log(id);
                let name = $('#name').val();
                let surname = $('#surname').val();
                let CON_NO = $('#CON_NO').val();
                let prefix = $('#prefix').val();
                let Engname = $('#Engname').val();
                let EngSurname = $('#EngSurname').val();
                let ID_num = $('#ID_num').val();
                let Nickname = $('#Nickname').val();
                let PhoneNum = $('#PhoneNum').val();
    
    
                let link = `{{ route('Cus.update', 'id') }}?type=${type}`;
                let url = link.replace('id', id);
                console.log(url);
                // if (name != '' && surname != '' && prefix != '' && ID_num != '' && PhoneNum !=
                //     '') {
    
                $.ajax({
                    url: url,
                    method: "PUT",
                    data: {
                        _token: "{{ csrf_token() }}",
                        data: data,
    
                    },
    
                    success: function(result) {
    
                        Swal.fire({
                            icon: 'success',
                            title: `SUCCESS `,
                            showConfirmButton: false,
                            text: result.message,
                            timer: 1500
                        });
                        $('#modal-xl').modal('hide');
                        if (type == 'updateGuarantor') {
                            console.log('updateGuarantor');
                            $('#content-tracking').html(result.html)
                        } else {
                            location.reload();
                        }
                        console.log(result);
                        // location.reload();
                    },
                    error: function(err) {
                        console.log(err);
                        Swal.fire({
                            icon: 'error',
                            title: `ERROR ` + err.status + ` !!!`,
                            text: err.responseJSON.message,
                            showConfirmButton: true,
                        });
    
                        // $('#modal_xl_2').modal('hide');
    
                    }
                });
                // } else {
                //     Swal.fire({
                //         icon: 'error',
                //         title: "ข้อมูลไม่ครบถ้วน",
                //         text: "โปรดตรวจสอบข้อมูลให้ครบถ้วนก่อนบันทึก. !",
                //     })
                // }
    
            });
    
    
    
    
            // $('#date-input').on('change input', () => {
            //     let currentDate = $('#date-input').val();
            //     console.log(currentDate);
            // })
    
        })
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var defendantInfo = document.getElementById('defendant-info').innerHTML;
            var defendants = defendantInfo.split('<br>');

            for (var i = 0; i < defendants.length; i++) {
                defendants[i] = defendants[i] + ' &emsp;&emsp;<strong>จำเลยที่ ' + (i + 1) + '</strong>';
            }

            document.getElementById('defendant-info').innerHTML = defendants.join('<br>');
        });
    </script>
@endsection

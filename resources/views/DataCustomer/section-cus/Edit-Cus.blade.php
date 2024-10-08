@include('public_Script.scriptAddress')
{{-- @include('js.plugin.js') --}}

<div class="modal-content" id="formCreate">
    <div class="row me-4 mt-2">
        <div class="d-flex m-3">
            <div class="flex-shrink-0 me-4">
                {{-- <img src="{{ URL::asset('\assets/images/calculator.png') }}" alt="" style="width: 40px;"> --}}
            </div>
            <div class="flex-grow-1 overflow-hidden">
                <h5 class="text-primary fw-semibold pb-2">แก้ไขข้อมูล</h5>
                <p class="border-primary border-bottom mb-0"></p>

            </div>
        </div>
    </div>

    @foreach ($customer as $key => $item)
        <div class="modal-body">
            <div class="col-12 mt-3">
                <form id='edit_cus' enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">

                            {{-- <div class="mb-3 ">
                                <span>เลขที่สัญญา</span>
                                <input type="text"class="form-control" value="{{ trim(@$item->CON_NO) }}"
                                    name="CON_NO" id="CON_NO" required placeholder=" " />
                                
                            </div> --}}
                            <div class="mb-3 input-bx">
                                <span>เลขบัตรประชาชน</span>
                                <input type="text" class="form-control input-mask" value="{{ trim(@$item->ID_num) }}"
                                    name="ID_num" id="ID_num" data-inputmask="'mask': '9-9999-99999-99-9'"
                                    data-bs-toggle="tooltip" title="เลขบัตรประชาชน" required />
                            </div>
                            <div class="mb-3 input-bx">
                                <span>ชื่อ</span>
                                <input type="text" class="form-control" value="{{ trim(@$item->name) }}"
                                    name="name" id="name" required placeholder=" " />
                                <input type="hidden"class="form-control" value="{{ trim(@$item->id) }}" name="id"
                                    id="id" required placeholder=" " />
                                <input type="hidden"class="form-control" value="{{ trim(@$item->cus_id) }}"
                                    name="cus_id" id="cus_id" required placeholder=" " />
                                <input type="hidden"class="form-control" value="{{ $type }}" name="type"
                                    id="type" required placeholder=" " />
                            </div>
                            <div class="mb-3 input-bx">
                                <span>ชื่อ</span>
                                <input type="text" class="form-control" name="name" id="name" required
                                    placeholder=" ">
                            </div>
                        </div>
                        <div class="col-sm-6 ">

                            <div class="mb-3 input-bx">
                                <span>คำนำหน้า</span>

                                <select value="{{ @$item->prefix }}" class="form-select addOPR" id="prefix"
                                    name="prefix" required>
                                    <option {{ @$item->prefix == 'นาย' ? 'selected' : '' }} value="นาย">นาย
                                    </option>
                                    <option {{ @$item->prefix == 'นาง' ? 'selected' : '' }} value="นาง">นาง
                                    </option>
                                    <option {{ @$item->prefix == 'นางสาว' ? 'selected' : '' }} value="นางสาว">นางสาว
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3 input-bx">
                                <span>นามสกุล</span>
                                <input type="text" class="form-control" value="{{ trim(@$item->surname) }}"
                                    name="surname" id="surname" required />
                            </div>




                        </div>

                        <div class="row">
                            <div class="col-9">
                                <span class=" fw-semibold text-primary mt-2"><i class="fa-solid fa-location-dot"></i>
                                    ที่อยู่ปัจจุบัน :</span>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                        บ้านเลขที่ / หมู่ : </p>
                                    <div class="col-12 col-sm-7">
                                        <div class="row">
                                            <div class="col-6 pr-0">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                    บ้านเลขที่ :</p>
                                                <input type="text" name="HouseNumber"
                                                    value="{{ @$Address->HouseNumber }}"
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "บ้านเลขที่" required />
                                            </div>
                                            <div class="col-6">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                    หมู่ :</p>
                                                <input type="text" name="Moo" value="{{ @$Address->Moo }}"
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "หมู่" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                        ถนน / ซอย : </p>
                                    <div class="col-12 col-sm-7">
                                        <div class="row">
                                            <div class="col-6 pr-0">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                    ถนน :</p>
                                                <input type="text" name="Road" {{-- value="{{ @$data->HouseNumber }}" --}}
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "ถนน" required />
                                            </div>
                                            <div class="col-6">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                    ตรอก / ซอย :</p>
                                                <input type="text" name="Soi" {{-- value="{{ @$data->Moo }}" --}}
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "ตรอก / ซอย" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">ภูมิภาค : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $dataZone = \App\Models\TB_Provinces::selectRaw(
                                                'Zone_pro, count(*) as total',
                                            )
                                                ->groupBy('Zone_pro')
                                                ->orderBY('Zone_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseZone"
                                            name="Region" id="Region" required>
                                            <option value="">--- ภูมิภาค ---</option>
                                            @foreach ($dataZone as $key => $Zone)
                                                <option value="{{ $Zone->Zone_pro }}"
                                                    {{ $Zone->Zone_pro == @$Address->Region ? 'selected' : '' }}>
                                                    {{ $Zone->Zone_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">จังหวัด : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $Province = \App\Models\TB_Provinces::where('Zone_pro', @$Address->Region)
                                                ->selectRaw('Province_pro, count(*) as total')
                                                ->groupBy('Province_pro')
                                                ->orderBY('Province_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseProvince"
                                            name="Province" required>
                                            <option value="" selected>--- จังหวัด ---</option>
                                            @foreach ($Province as $key => $value)
                                                <option value="{{ $value->Province_pro }}"
                                                    {{ $value->Province_pro == @$Address->Province ? 'selected' : '' }}>
                                                    {{ $value->Province_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">อำเภอ : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $District = \App\Models\TB_Provinces::where(
                                                'Province_pro',
                                                @$Address->Province,
                                            )
                                                ->selectRaw('District_pro, count(*) as total')
                                                ->groupBy('District_pro')
                                                ->orderBY('District_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseDistrict"
                                            name="District" required>
                                            <option value="" selected>--- อำเภอ ---</option>
                                            @foreach ($District as $key => $value)
                                                <option value="{{ $value->District_pro }}"
                                                    {{ $value->District_pro == @$Address->District ? 'selected' : '' }}>
                                                    {{ $value->District_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">ตำบล : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $Tambon = \App\Models\TB_Provinces::where(
                                                'District_pro',
                                                @$Address->District,
                                            )
                                                ->selectRaw('Tambon_pro, count(*) as total')
                                                ->groupBy('Tambon_pro')
                                                ->orderBY('Tambon_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseTambon"
                                            name="Tumbon" required>
                                            <option value="" selected>--- ตำบล ---</option>
                                            @foreach ($Tambon as $key => $value)
                                                <option value="{{ $value->Tambon_pro }}"
                                                    {{ $value->Tambon_pro == @$Address->Tumbon ? 'selected' : '' }}>
                                                    {{ $value->Tambon_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">เลขไปรษณีย์ : </p>
                                    <div class="col-sm-7">
                                        <input type="number" name="Postcode" value="{{ @$Address->Postcode }}"
                                            class="form-control form-control-sm textSize-13 Postal"
                                            placeholder="เลขไปรษณีย์" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="PhoneNum1">เบอร์โทร 1</label>
                                        <input type="text" name="PhoneNum1" id="PhoneNum1"
                                            class="form-control input-mask form-control-sm textSize-13"
                                            value="{{ @$item->PhoneNum }}" data-inputmask="'mask': '999-9999999'"
                                            required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="PhoneNum2">เบอร์โทร 2</label>
                                        <input type="text" name="PhoneNum2" id="PhoneNum2"
                                            class="form-control input-mask form-control-sm textSize-13"
                                            value="{{ @$item->PhoneNum2 }}" data-inputmask="'mask': '999-9999999'"
                                            required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="PhoneNum3">เบอร์โทร 3</label>
                                        <input type="text" name="PhoneNum3" id="PhoneNum3"
                                            class="form-control input-mask form-control-sm textSize-13"
                                            value="{{ @$item->PhoneNum3 }}" data-inputmask="'mask': '999-9999999'"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <span class=" fw-semibold text-primary mt-2"><i class="fa-solid fa-location-dot"></i>
                                    ที่อยู่ที่ทำงาน :</span>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right text-red">ชื่อที่ทำงาน : </p>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm textSize-13"
                                            placeholder="ชื่อที่ทำการ" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                        บ้านเลขที่ / หมู่ : </p>
                                    <div class="col-12 col-sm-7">
                                        <div class="row">
                                            <div class="col-6 pr-0">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                    บ้านเลขที่ :</p>
                                                <input type="text" name="HouseNumber"
                                                    value="{{ @$data->HouseNumber }}"
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "บ้านเลขที่" required />
                                            </div>
                                            <div class="col-6">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                    หมู่ :</p>
                                                <input type="text" name="Moo" value="{{ @$data->Moo }}"
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "หมู่" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                        ถนน / ซอย : </p>
                                    <div class="col-12 col-sm-7">
                                        <div class="row">
                                            <div class="col-6 pr-0">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                    ถนน :</p>
                                                <input type="text" name="Road" {{-- value="{{ @$data->HouseNumber }}" --}}
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "ถนน" required />
                                            </div>
                                            <div class="col-6">
                                                <p
                                                    class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                    ตรอก / ซอย :</p>
                                                <input type="text" name="Soi" {{-- value="{{ @$data->Moo }}" --}}
                                                    class="form-control form-control-sm textSize-13"
                                                    placeholder = "ตรอก / ซอย" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">ภูมิภาค : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $dataZone = \App\Models\TB_Provinces::selectRaw(
                                                'Zone_pro, count(*) as total',
                                            )
                                                ->groupBy('Zone_pro')
                                                ->orderBY('Zone_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseZone"
                                            name="Region" id="Region" required>
                                            <option value="">--- ภูมิภาค ---</option>
                                            @foreach ($dataZone as $key => $Zone)
                                                <option value="{{ $Zone->Zone_pro }}"
                                                    {{ $Zone->Zone_pro == @$data->Region ? 'selected' : '' }}>
                                                    {{ $Zone->Zone_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">จังหวัด : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $Province = \App\Models\TB_Provinces::where('Zone_pro', @$data->Region)
                                                ->selectRaw('Province_pro, count(*) as total')
                                                ->groupBy('Province_pro')
                                                ->orderBY('Province_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseProvince"
                                            name="Province" required>
                                            <option value="" selected>--- จังหวัด ---</option>
                                            @foreach ($Province as $key => $value)
                                                <option value="{{ $value->Province_pro }}"
                                                    {{ $value->Province_pro == @$data->Province ? 'selected' : '' }}>
                                                    {{ $value->Province_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">อำเภอ : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $District = \App\Models\TB_Provinces::where(
                                                'Province_pro',
                                                @$data->Province,
                                            )
                                                ->selectRaw('District_pro, count(*) as total')
                                                ->groupBy('District_pro')
                                                ->orderBY('District_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseDistrict"
                                            name="District" required>
                                            <option value="" selected>--- อำเภอ ---</option>
                                            @foreach ($District as $key => $value)
                                                <option value="{{ $value->District_pro }}"
                                                    {{ $value->District_pro == @$data->District ? 'selected' : '' }}>
                                                    {{ $value->District_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">ตำบล : </p>
                                    <div class="col-sm-7">
                                        @php
                                            $Tambon = \App\Models\TB_Provinces::where('District_pro', @$data->District)
                                                ->selectRaw('Tambon_pro, count(*) as total')
                                                ->groupBy('Tambon_pro')
                                                ->orderBY('Tambon_pro', 'ASC')
                                                ->get();
                                        @endphp
                                        <select class="form-control form-control-sm textSize-13 houseTambon"
                                            name="Tumbon" required>
                                            <option value="" selected>--- ตำบล ---</option>
                                            @foreach ($Tambon as $key => $value)
                                                <option value="{{ $value->Tambon_pro }}"
                                                    {{ $value->Tambon_pro == @$data->Tumbon ? 'selected' : '' }}>
                                                    {{ $value->Tambon_pro }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group row mb-0">
                                    <p class="col-sm-4 col-form-label text-right">เลขไปรษณีย์ : </p>
                                    <div class="col-sm-7">
                                        <input type="number" name="Postcode" value="{{ @$data->Postcode }}"
                                            class="form-control form-control-sm textSize-13 Postal"
                                            placeholder="เลขไปรษณีย์" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="PhoneNum1">เบอร์โทร 1</label>
                                        <input type="text" name="PhoneNum1" id="PhoneNum1"
                                            class="form-control input-mask form-control-sm textSize-13"
                                            value="{{ @$item->PhoneNum1 }}" data-inputmask="'mask': '999-9999999'"
                                            required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="PhoneNum2">เบอร์โทร 2</label>
                                        <input type="text" name="PhoneNum2" id="PhoneNum2"
                                            class="form-control input-mask form-control-sm textSize-13"
                                            value="{{ @$item->PhoneNum2 }}" data-inputmask="'mask': '999-9999999'"
                                            required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="PhoneNum3">เบอร์โทร 3</label>
                                        <input type="text" name="PhoneNum3" id="PhoneNum3"
                                            class="form-control input-mask form-control-sm textSize-13"
                                            value="{{ @$item->PhoneNum3 }}" data-inputmask="'mask': '999-9999999'"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary " id="saveEditCusBtn">บันทึก</button>
                        <button type="button" class="btn btn-danger " class="close" data-bs-dismiss="modal"
                            aria-label="Close">ปิด</button>
                    </div>

                </form>
            </div>


        </div>
    @endforeach

</div>
<script>
    function autoCurrenncy() {
        let capital_sue = document.getElementById("capital_sue");
        capital_sue.value = capital_sue.value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    }
</script>


{{-- <script src="{{ URL::asset('assets/js/plugin.js') }}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script> --}}

<script>
    $(document).ready(function() {
        Inputmask().mask(document.getElementById('ID_num'));
        Inputmask().mask(document.getElementById('PhoneNum'));
        let type = $('#type').val();
        console.log(type);
        // let currentDate = document.getElementById('date-input').valueAsDate = new Date();
        // console.log(currentDate);
        $('#saveEditCusBtn').hide()

        $('#edit_cus').on('change input', () => {
            $('#saveEditCusBtn').show()
        })
        $('#ID_num,#PhoneNum').on('keypress', () => {
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
</script>

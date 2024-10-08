@include('public_Script.scriptAddress')

<div class="modal-content" id="formCreate">
    <div class="row me-4 mt-2">
        <div class="d-flex m-3">
            <div class="flex-shrink-0 me-4">
                {{-- <img src="{{ URL::asset('\assets/images/calculator.png') }}" alt="" style="width: 40px;"> --}}
            </div>
            <div class="flex-grow-1 overflow-hidden">
                <h5 class="text-primary fw-semibold pb-2">เพิ่มข้อมูลลูกหนี้</h5>
                <p class="border-primary border-bottom mb-0"></p>
            </div>
        </div>
    </div>

    <div class="col-12 ">
        {{-- tab head content --}}
        <div class="card border border-black mb-1 p-2">
            <ul class="nav nav-pills row" id="pills-tab" role="tablist">
                <li class="nav-item col text-center d-grid" role="presentation">
                    <button class="nav-link active border-black" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">ข้อมูลลูกหนี้</button>
                </li>
                <li class="nav-item col text-center d-grid" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">เพิ่มลูกหนี้ใหม่</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                {{-- detail con --}}
                <div class="row mb-4">
                    <div class="col-6 mt-3">
                        <input type="text"class="form-control" name="CON_NO_Search" id="CON_NO_Search" required
                            placeholder="เลขที่สัญญา" />
                    </div>
                    <div class="col-3 mt-3">
                        <select class="form-select addOPR" id="plaintiff" name="plaintiff" required>
                            @foreach ($Plaintiff as $item)
                                <option value="{{ $item->db }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3 mt-3">
                        <button type="button" class="btn btn-primary " id="searchBtn">ค้นหา</button>
                    </div>
                </div>
                <div>
                    @include('DataCustomer.section-cus.show-search')
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger " class="close" data-bs-dismiss="modal"
                        aria-label="Close">ปิด</button>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                {{-- detail tracking --}}
                <div class="row ">
                    <div class="row mt-3">
                        <div class="col-9">
                            <span class=" fw-semibold text-primary mt-2"><i class="fa-solid fa-address-book"></i>
                                ข้อมูลลูกหนี้
                                (จำเลยที่ 1)</span>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <form id='create_cus'>
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <span>โจทย์</span>
                                            <select class="form-select addOPR" id="plaintiff" name="plaintiff" required>
                                                @foreach ($Plaintiff as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 input-bx">
                                            <span>เลขบัตรประชาชน</span>
                                            <input type="text" class="form-control input-mask"
                                                value="{{ trim(@$item->ID_num) }}" name="ID_num" id="ID_num"
                                                data-inputmask="'mask': '9-9999-99999-99-9'" data-bs-toggle="tooltip"
                                                title="เลขบัตรประชาชน" required />
                                        </div>
                                        <div class="mb-3 input-bx">
                                            <span>ชื่อ</span>
                                            <input type="text" class="form-control" name="name" id="name"
                                                required placeholder=" " />
                                        </div>
                                        {{-- <div class="mb-3 input-bx">
                                            <span>เบอร์โทร 1 </span>
                                            <input type="text" class="form-control input-mask"
                                                value="{{ trim(@$item->PhoneNum) }}" name="PhoneNum" id="PhoneNum"
                                                data-bs-toggle="tooltip" data-inputmask="'mask': '999-9999999'"
                                                required placeholder="" />
                                        </div> --}}
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3 input-bx">
                                            <div class="mb-3">
                                                <span>เลขที่สัญญา</span>
                                                <input type="text" class="form-control" name="CON_NO" id="CON_NO"
                                                    required placeholder=" " />
                                            </div>
                                            <span>คำนำหน้า</span>
                                            <select class="form-select addOPR" id="prefix" name="prefix"
                                                required>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 pr-0">
                                                <span>นามสกุล</span>
                                                <input type="text" name="surname" value="{{ @$data->surname }}"
                                                    class="form-control" placeholder="" required />
                                            </div>
                                            <div class="col-6">
                                                <span>จำเลยที่</span>
                                                <input type="text" name="Defname" value="{{ @$data->Defname }}"
                                                    class="form-control" placeholder="" required />
                                            </div>
                                        </div>
                                        {{-- <div class="row mt-3">
                                            <div class="col-12">
                                                <span>เบอร์โทร 2</span>
                                                <input type="text" class="form-control input-mask"
                                                    value="{{ trim(@$item->PhoneNum) }}" name="PhoneNum" id="PhoneNum"
                                                    data-bs-toggle="tooltip" data-inputmask="'mask': '999-9999999'"
                                                    required placeholder="" />
                                            </div>
                                        </div> --}}
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="col-9">
                                        <span class=" fw-semibold text-primary mt-2"><i
                                                class="fa-solid fa-location-dot"></i>
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
                                                            value="{{ @$data->HouseNumber }}"
                                                            class="form-control form-control-sm textSize-13"
                                                            placeholder = "บ้านเลขที่" required />
                                                    </div>
                                                    <div class="col-6">
                                                        <p
                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                            หมู่ :</p>
                                                        <input type="text" name="Moo"
                                                            value="{{ @$data->Moo }}"
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
                                                    $Province = \App\Models\TB_Provinces::where(
                                                        'Zone_pro',
                                                        @$data->Region,
                                                    )
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
                                                    $Tambon = \App\Models\TB_Provinces::where(
                                                        'District_pro',
                                                        @$data->District,
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
                                                    value="{{ @$item->PhoneNum1 }}"
                                                    data-inputmask="'mask': '999-9999999'" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="PhoneNum2">เบอร์โทร 2</label>
                                                <input type="text" name="PhoneNum2" id="PhoneNum2"
                                                    class="form-control input-mask form-control-sm textSize-13"
                                                    value="{{ @$item->PhoneNum2 }}"
                                                    data-inputmask="'mask': '999-9999999'" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="PhoneNum3">เบอร์โทร 3</label>
                                                <input type="text" name="PhoneNum3" id="PhoneNum3"
                                                    class="form-control input-mask form-control-sm textSize-13"
                                                    value="{{ @$item->PhoneNum3 }}"
                                                    data-inputmask="'mask': '999-9999999'" required>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-9">
                                        <span class=" fw-semibold text-primary mt-2"><i
                                                class="fa-solid fa-location-dot"></i>
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
                                                        <input type="text" name="Moo"
                                                            value="{{ @$data->Moo }}"
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
                                                    $Province = \App\Models\TB_Provinces::where(
                                                        'Zone_pro',
                                                        @$data->Region,
                                                    )
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
                                                    $Tambon = \App\Models\TB_Provinces::where(
                                                        'District_pro',
                                                        @$data->District,
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
                                                    value="{{ @$item->PhoneNum1 }}"
                                                    data-inputmask="'mask': '999-9999999'" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="PhoneNum2">เบอร์โทร 2</label>
                                                <input type="text" name="PhoneNum2" id="PhoneNum2"
                                                    class="form-control input-mask form-control-sm textSize-13"
                                                    value="{{ @$item->PhoneNum2 }}"
                                                    data-inputmask="'mask': '999-9999999'" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="PhoneNum3">เบอร์โทร 3</label>
                                                <input type="text" name="PhoneNum3" id="PhoneNum3"
                                                    class="form-control input-mask form-control-sm textSize-13"
                                                    value="{{ @$item->PhoneNum3 }}"
                                                    data-inputmask="'mask': '999-9999999'" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="mb-3 input-bx">
                                        <span>ที่อยู่</span>
                                        <textarea class="form-control" name="address" id="address" required></textarea>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            ผู้ค้ำคนที่ 1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div>
                                                <div class="row ">
                                                    <div class="col-9">
                                                        <span class=" fw-semibold text-primary mt-2"><i
                                                                class="fa-solid fa-address-book"></i>
                                                            ผู้ค้ำประกัน
                                                            (จำเลยที่ 2)</span>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mb-3 input-bx">
                                                            <span>เลขบัตรประชาชน</span>
                                                            <input type="text" class="form-control" name="ID_num1"
                                                                id="ID_num1" required placeholder=" "
                                                                data-inputmask="'mask': '9-9999-99999-99-9'" />
                                                        </div>

                                                        <div class="mb-3 input-bx">
                                                            <span>ชื่อ</span>
                                                            <input type="text" class="form-control" name="name1"
                                                                id="name1" required placeholder=" " />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="mb-3 input-bx">
                                                            <span>คำนำหน้า</span>
                                                            <select class="form-select addOPR" id="prefix1"
                                                                name="prefix1" required>
                                                                <option value="นาย">นาย</option>
                                                                <option value="นาง">นาง</option>
                                                                <option value="นางสาว">นางสาว</option>
                                                            </select>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6 pr-0">
                                                                <span>นามสกุล</span>
                                                                <input type="text" name="surname"
                                                                    value="{{ @$data->surname }}"
                                                                    class="form-control" placeholder="" required />
                                                            </div>
                                                            <div class="col-6">
                                                                <span>จำเลยที่</span>
                                                                <input type="text" name="Defname"
                                                                    value="{{ @$data->Defname }}"
                                                                    class="form-control" placeholder="" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">
                                                        <span class=" fw-semibold text-primary mt-2"><i
                                                                class="fa-solid fa-location-dot"></i>
                                                            ที่อยู่ปัจจุบัน :</span>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
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
                                                                        <input type="text" name="Moo"
                                                                            value="{{ @$data->Moo }}"
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "หมู่" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                                                ถนน / ซอย : </p>
                                                            <div class="col-12 col-sm-7">
                                                                <div class="row">
                                                                    <div class="col-6 pr-0">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                                            ถนน :</p>
                                                                        <input type="text" name="Road"
                                                                            {{-- value="{{ @$data->HouseNumber }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ถนน" required />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                                            ตรอก / ซอย :</p>
                                                                        <input type="text" name="Soi"
                                                                            {{-- value="{{ @$data->Moo }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ตรอก / ซอย" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p class="col-sm-4 col-form-label text-right">ภูมิภาค :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $dataZone = \App\Models\TB_Provinces::selectRaw(
                                                                        'Zone_pro, count(*) as total',
                                                                    )
                                                                        ->groupBy('Zone_pro')
                                                                        ->orderBY('Zone_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseZone"
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
                                                            <p class="col-sm-4 col-form-label text-right">จังหวัด :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $Province = \App\Models\TB_Provinces::where(
                                                                        'Zone_pro',
                                                                        @$data->Region,
                                                                    )
                                                                        ->selectRaw('Province_pro, count(*) as total')
                                                                        ->groupBy('Province_pro')
                                                                        ->orderBY('Province_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseProvince"
                                                                    name="Province" required>
                                                                    <option value="" selected>--- จังหวัด ---
                                                                    </option>
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
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseDistrict"
                                                                    name="District" required>
                                                                    <option value="" selected>--- อำเภอ ---
                                                                    </option>
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
                                                                    $Tambon = \App\Models\TB_Provinces::where(
                                                                        'District_pro',
                                                                        @$data->District,
                                                                    )
                                                                        ->selectRaw('Tambon_pro, count(*) as total')
                                                                        ->groupBy('Tambon_pro')
                                                                        ->orderBY('Tambon_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseTambon"
                                                                    name="Tumbon" required>
                                                                    <option value="" selected>--- ตำบล ---
                                                                    </option>
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
                                                            <p class="col-sm-4 col-form-label text-right">เลขไปรษณีย์ :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                <input type="number" name="Postcode"
                                                                    value="{{ @$data->Postcode }}"
                                                                    class="form-control form-control-sm textSize-13 Postal"
                                                                    placeholder="เลขไปรษณีย์" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum1">เบอร์โทร 1 :</label>
                                                                <input type="text" name="PhoneNum1" id="PhoneNum1"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum1 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum2">เบอร์โทร 2 :</label>
                                                                <input type="text" name="PhoneNum2" id="PhoneNum2"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum2 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum3">เบอร์โทร 3 :</label>
                                                                <input type="text" name="PhoneNum3" id="PhoneNum3"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum3 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">
                                                        <span class=" fw-semibold text-primary mt-2"><i
                                                                class="fa-solid fa-location-dot"></i>
                                                            ที่อยู่ที่ทำงาน :</span>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p class="col-sm-4 col-form-label text-right text-red">
                                                                ชื่อที่ทำงาน : </p>
                                                            <div class="col-sm-7">
                                                                <input type="text"
                                                                    class="form-control form-control-sm textSize-13"
                                                                    placeholder="ชื่อที่ทำการ" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
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
                                                                        <input type="text" name="Moo"
                                                                            value="{{ @$data->Moo }}"
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "หมู่" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                                                ถนน / ซอย : </p>
                                                            <div class="col-12 col-sm-7">
                                                                <div class="row">
                                                                    <div class="col-6 pr-0">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                                            ถนน :</p>
                                                                        <input type="text" name="Road"
                                                                            {{-- value="{{ @$data->HouseNumber }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ถนน" required />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                                            ตรอก / ซอย :</p>
                                                                        <input type="text" name="Soi"
                                                                            {{-- value="{{ @$data->Moo }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ตรอก / ซอย" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p class="col-sm-4 col-form-label text-right">ภูมิภาค :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $dataZone = \App\Models\TB_Provinces::selectRaw(
                                                                        'Zone_pro, count(*) as total',
                                                                    )
                                                                        ->groupBy('Zone_pro')
                                                                        ->orderBY('Zone_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseZone"
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
                                                            <p class="col-sm-4 col-form-label text-right">จังหวัด :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $Province = \App\Models\TB_Provinces::where(
                                                                        'Zone_pro',
                                                                        @$data->Region,
                                                                    )
                                                                        ->selectRaw('Province_pro, count(*) as total')
                                                                        ->groupBy('Province_pro')
                                                                        ->orderBY('Province_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseProvince"
                                                                    name="Province" required>
                                                                    <option value="" selected>--- จังหวัด ---
                                                                    </option>
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
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseDistrict"
                                                                    name="District" required>
                                                                    <option value="" selected>--- อำเภอ ---
                                                                    </option>
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
                                                                    $Tambon = \App\Models\TB_Provinces::where(
                                                                        'District_pro',
                                                                        @$data->District,
                                                                    )
                                                                        ->selectRaw('Tambon_pro, count(*) as total')
                                                                        ->groupBy('Tambon_pro')
                                                                        ->orderBY('Tambon_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseTambon"
                                                                    name="Tumbon" required>
                                                                    <option value="" selected>--- ตำบล ---
                                                                    </option>
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
                                                            <p class="col-sm-4 col-form-label text-right">เลขไปรษณีย์ :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                <input type="number" name="Postcode"
                                                                    value="{{ @$data->Postcode }}"
                                                                    class="form-control form-control-sm textSize-13 Postal"
                                                                    placeholder="เลขไปรษณีย์" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum1">เบอร์โทร 1 :</label>
                                                                <input type="text" name="PhoneNum1" id="PhoneNum1"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum1 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum2">เบอร์โทร 2 :</label>
                                                                <input type="text" name="PhoneNum2" id="PhoneNum2"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum2 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum3">เบอร์โทร 3 :</label>
                                                                <input type="text" name="PhoneNum3" id="PhoneNum3"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum3 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            ผู้ค้ำคนที่ 2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div>
                                                <div class="row ">
                                                    <div class="col-9">
                                                        <span class=" fw-semibold text-primary mt-2"><i
                                                                class="fa-solid fa-address-book"></i>
                                                            ผู้ค้ำประกัน
                                                            (จำเลยที่ 2)</span>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mb-3 input-bx">
                                                            <span>เลขบัตรประชาชน</span>
                                                            <input type="text" class="form-control" name="ID_num1"
                                                                id="ID_num1" required placeholder=" "
                                                                data-inputmask="'mask': '9-9999-99999-99-9'" />
                                                        </div>

                                                        <div class="mb-3 input-bx">
                                                            <span>ชื่อ</span>
                                                            <input type="text" class="form-control" name="name1"
                                                                id="name1" required placeholder=" " />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="mb-3 input-bx">
                                                            <span>คำนำหน้า</span>
                                                            <select class="form-select addOPR" id="prefix1"
                                                                name="prefix1" required>
                                                                <option value="นาย">นาย</option>
                                                                <option value="นาง">นาง</option>
                                                                <option value="นางสาว">นางสาว</option>
                                                            </select>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6 pr-0">
                                                                <span>นามสกุล</span>
                                                                <input type="text" name="surname"
                                                                    value="{{ @$data->surname }}"
                                                                    class="form-control" placeholder="" required />
                                                            </div>
                                                            <div class="col-6">
                                                                <span>จำเลยที่</span>
                                                                <input type="text" name="Defname"
                                                                    value="{{ @$data->Defname }}"
                                                                    class="form-control" placeholder="" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">
                                                        <span class=" fw-semibold text-primary mt-2"><i
                                                                class="fa-solid fa-location-dot"></i>
                                                            ที่อยู่ปัจจุบัน :</span>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
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
                                                                        <input type="text" name="Moo"
                                                                            value="{{ @$data->Moo }}"
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "หมู่" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                                                ถนน / ซอย : </p>
                                                            <div class="col-12 col-sm-7">
                                                                <div class="row">
                                                                    <div class="col-6 pr-0">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                                            ถนน :</p>
                                                                        <input type="text" name="Road"
                                                                            {{-- value="{{ @$data->HouseNumber }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ถนน" required />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                                            ตรอก / ซอย :</p>
                                                                        <input type="text" name="Soi"
                                                                            {{-- value="{{ @$data->Moo }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ตรอก / ซอย" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p class="col-sm-4 col-form-label text-right">ภูมิภาค :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $dataZone = \App\Models\TB_Provinces::selectRaw(
                                                                        'Zone_pro, count(*) as total',
                                                                    )
                                                                        ->groupBy('Zone_pro')
                                                                        ->orderBY('Zone_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseZone"
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
                                                            <p class="col-sm-4 col-form-label text-right">จังหวัด :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $Province = \App\Models\TB_Provinces::where(
                                                                        'Zone_pro',
                                                                        @$data->Region,
                                                                    )
                                                                        ->selectRaw('Province_pro, count(*) as total')
                                                                        ->groupBy('Province_pro')
                                                                        ->orderBY('Province_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseProvince"
                                                                    name="Province" required>
                                                                    <option value="" selected>--- จังหวัด ---
                                                                    </option>
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
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseDistrict"
                                                                    name="District" required>
                                                                    <option value="" selected>--- อำเภอ ---
                                                                    </option>
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
                                                                    $Tambon = \App\Models\TB_Provinces::where(
                                                                        'District_pro',
                                                                        @$data->District,
                                                                    )
                                                                        ->selectRaw('Tambon_pro, count(*) as total')
                                                                        ->groupBy('Tambon_pro')
                                                                        ->orderBY('Tambon_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseTambon"
                                                                    name="Tumbon" required>
                                                                    <option value="" selected>--- ตำบล ---
                                                                    </option>
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
                                                            <p class="col-sm-4 col-form-label text-right">เลขไปรษณีย์ :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                <input type="number" name="Postcode"
                                                                    value="{{ @$data->Postcode }}"
                                                                    class="form-control form-control-sm textSize-13 Postal"
                                                                    placeholder="เลขไปรษณีย์" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum1">เบอร์โทร 1 :</label>
                                                                <input type="text" name="PhoneNum1" id="PhoneNum1"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum1 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum2">เบอร์โทร 2 :</label>
                                                                <input type="text" name="PhoneNum2" id="PhoneNum2"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum2 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum3">เบอร์โทร 3 :</label>
                                                                <input type="text" name="PhoneNum3" id="PhoneNum3"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum3 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">
                                                        <span class=" fw-semibold text-primary mt-2"><i
                                                                class="fa-solid fa-location-dot"></i>
                                                            ที่อยู่ที่ทำงาน :</span>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p class="col-sm-4 col-form-label text-right text-red">
                                                                ชื่อที่ทำงาน : </p>
                                                            <div class="col-sm-7">
                                                                <input type="text"
                                                                    class="form-control form-control-sm textSize-13"
                                                                    placeholder="ชื่อที่ทำการ" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
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
                                                                        <input type="text" name="Moo"
                                                                            value="{{ @$data->Moo }}"
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "หมู่" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p
                                                                class="col-sm-4 col-form-label text-right d-none d-sm-block text-red">
                                                                ถนน / ซอย : </p>
                                                            <div class="col-12 col-sm-7">
                                                                <div class="row">
                                                                    <div class="col-6 pr-0">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right text-red">
                                                                            ถนน :</p>
                                                                        <input type="text" name="Road"
                                                                            {{-- value="{{ @$data->HouseNumber }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ถนน" required />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p
                                                                            class="col-12 d-sm-none col-form-label col-form-label-sm textSize-13 text-right">
                                                                            ตรอก / ซอย :</p>
                                                                        <input type="text" name="Soi"
                                                                            {{-- value="{{ @$data->Moo }}" --}}
                                                                            class="form-control form-control-sm textSize-13"
                                                                            placeholder = "ตรอก / ซอย" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group row mb-0">
                                                            <p class="col-sm-4 col-form-label text-right">ภูมิภาค :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $dataZone = \App\Models\TB_Provinces::selectRaw(
                                                                        'Zone_pro, count(*) as total',
                                                                    )
                                                                        ->groupBy('Zone_pro')
                                                                        ->orderBY('Zone_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseZone"
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
                                                            <p class="col-sm-4 col-form-label text-right">จังหวัด :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                @php
                                                                    $Province = \App\Models\TB_Provinces::where(
                                                                        'Zone_pro',
                                                                        @$data->Region,
                                                                    )
                                                                        ->selectRaw('Province_pro, count(*) as total')
                                                                        ->groupBy('Province_pro')
                                                                        ->orderBY('Province_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseProvince"
                                                                    name="Province" required>
                                                                    <option value="" selected>--- จังหวัด ---
                                                                    </option>
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
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseDistrict"
                                                                    name="District" required>
                                                                    <option value="" selected>--- อำเภอ ---
                                                                    </option>
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
                                                                    $Tambon = \App\Models\TB_Provinces::where(
                                                                        'District_pro',
                                                                        @$data->District,
                                                                    )
                                                                        ->selectRaw('Tambon_pro, count(*) as total')
                                                                        ->groupBy('Tambon_pro')
                                                                        ->orderBY('Tambon_pro', 'ASC')
                                                                        ->get();
                                                                @endphp
                                                                <select
                                                                    class="form-control form-control-sm textSize-13 houseTambon"
                                                                    name="Tumbon" required>
                                                                    <option value="" selected>--- ตำบล ---
                                                                    </option>
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
                                                            <p class="col-sm-4 col-form-label text-right">เลขไปรษณีย์ :
                                                            </p>
                                                            <div class="col-sm-7">
                                                                <input type="number" name="Postcode"
                                                                    value="{{ @$data->Postcode }}"
                                                                    class="form-control form-control-sm textSize-13 Postal"
                                                                    placeholder="เลขไปรษณีย์" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum1">เบอร์โทร 1 :</label>
                                                                <input type="text" name="PhoneNum1" id="PhoneNum1"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum1 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum2">เบอร์โทร 2 :</label>
                                                                <input type="text" name="PhoneNum2" id="PhoneNum2"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum2 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="PhoneNum3">เบอร์โทร 3 :</label>
                                                                <input type="text" name="PhoneNum3" id="PhoneNum3"
                                                                    class="form-control input-mask form-control-sm textSize-13"
                                                                    value="{{ @$item->PhoneNum3 }}"
                                                                    data-inputmask="'mask': '999-9999999'" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary " id="saveBtn">บันทึก</button>
                                <button type="button" class="btn btn-danger " class="close"
                                    data-bs-dismiss="modal" aria-label="Close">ปิด</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>



    </div>





</div>
<script>
    function autoCurrenncy() {
        let capital_sue = document.getElementById("capital_sue");
        capital_sue.value = capital_sue.value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    }
</script>



{{-- <script src="{{ URL::asset('js/plugin.js') }}"></script> --}}


<script>
    $(function() {

        // let currentDate = document.getElementById('date-input').valueAsDate = new Date();
        // console.log(currentDate);

        Inputmask().mask(document.getElementById('ID_num'));
        Inputmask().mask(document.getElementById('PhoneNum'));
        Inputmask().mask(document.getElementById('ID_num1'));
        Inputmask().mask(document.getElementById('PhoneNum1'));
        Inputmask().mask(document.getElementById('ID_num2'));
        Inputmask().mask(document.getElementById('PhoneNum2'));

        $('#searchBtn').click(function() {

            let con_no = $('#CON_NO_Search').val();
            let plaintiff = $('#plaintiff').val();
            $.ajax({
                url: "{{ route('Cus.show', 0) }}?type={{ 'SearchCus' }}",
                method: "GET",
                data: {
                    _token: "{{ csrf_token() }}",
                    con_no: con_no,
                    plaintiff: plaintiff
                },

                success: function(result) {

                    Swal.fire({
                        icon: 'success',
                        title: `SUCCESS `,
                        showConfirmButton: false,
                        text: result.message,
                        timer: 1500
                    });
                    // $('#modal-xl').modal('hide');
                    $('#show-search').html(result.html);
                    // console.log(result.html);
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
        });

        $('#saveBtn').click(function() {
            let num = 0;

            if ($('#name1').val() != '' && ($('#name2').val() == '')) {
                num = 1;
            }

            if ($('#name1').val() != '' && ($('#name2').val() != '')) {
                num = 2;
            }

            console.log(num);

            let data = {
                num: num
            };

            console.log('data', data);

            $('#create_cus').serializeArray().map(function(x) {
                data[x.name] = x.value;
            });


            console.log(data);


            let name = $('#name').val();
            let surname = $('#surname').val();
            let CON_NO = $('#CON_NO').val();
            let prefix = $('#prefix').val();
            let ID_num = $('#ID_num').val();
            let PhoneNum = $('#PhoneNum').val();
            let ex_date = $('#ex_date').val();
            let address = $('#address').val();

            //  (name != '' && surname != '' && CON_NO != '' && prefix != '' && Engname != '' && EngSurname != '' && ID_num != '' && Nickname !='' && PhoneNum != '' && ex_date != '')


            // if (name != '' && surname != '' && CON_NO != '' && prefix != ''  && ID_num != ''  && PhoneNum != '') {
            $.ajax({
                url: "{{ route('Cus.store') }}?type={{ 'createCus' }}",
                method: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    data: data
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
                    location.reload();
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

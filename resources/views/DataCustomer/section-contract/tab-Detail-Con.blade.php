<div class="row mb-2 g-1 ">
    <div class="col-12">
        {{-- ข้อมูลสัญญา --}}
        <div class="card border border-white mb-2 p-2">
            <div class="card-body">
                <div class="row">
                    <a data-link="{{ route('Cus.show', $data->id) }}?type={{ 'EditDatacus' }}" data-bs-toggle="modal"
                        data-bs-target="#modal-xl" type="button" class="btn-md float-end text-warning text-end">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <div class="col-6">
                        <table class="table table-sm">
                            <tr>
                                <th class="text-start">เลขบัตรประชาชน</th>
                                <td class="text-start">
                                    <span class="input-mask" id="ID_numShow"
                                        data-inputmask="'mask': '9-9999-99999-99-9'">{{ @$data->ID_num }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-start">ชื่อ</th>
                                <td class="text-start">{{ @$data->name }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6">
                        <table class="table table-sm">
                            <tr>
                                <th class="text-start">คำนำหน้า</th>
                                <td colspan="3" class="text-start">{{ @$data->prefix }}</td>
                            </tr>
                            <tr>
                                <th class="text-start">นามสกุล</th>
                                <td class="text-start">{{ @$data->surname }}</td>
                                <th class="text-start">จำเลยที่ </th>
                                <td class="text-start">{{ @$data->Defname }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <span class="fw-semibold text-primary mt-2">ที่อยู่ปัจจุบัน :</span>
                    </div>
                    <div class="col-12">
                        <table class="table table-sm">
                            <tr>
                                <th class="text-start">เลขที่/หมู่</th>
                                <td class="text-start">{{ @$data->houseNumber }}</td>
                                <th class="text-start">ถนน</th>
                                <td class="text-start">{{ @$data->street }}</td>
                                <th class="text-start">ตรอก/ซอย</th>
                                <td class="text-start">{{ @$data->alley }}</td>
                            </tr>
                            <tr>
                                <th class="text-start">ภูมิภาค</th>
                                <td class="text-start">{{ @$data->region }}</td>
                                <th class="text-start">จังหวัด</th>
                                <td class="text-start">{{ @$data->province }}</td>
                                <th class="text-start">อำเภอ</th>
                                <td class="text-start">{{ @$data->district }}</td>
                            </tr>
                            <tr>
                                <th class="text-start">ตำบล</th>
                                <td class="text-start">{{ @$data->subdistrict }}</td>
                                <th class="text-start">รหัสไปรษณีย์</th>
                                <td class="text-start">{{ @$data->postalCode }}</td>
                            </tr>
                            <tr>
                                <th class="text-start">เบอร์โทร 1</th>
                                <td class="text-start">{{ @$data->phone1 }}</td>
                                <th class="text-start">เบอร์โทร 2</th>
                                <td class="text-start">{{ @$data->phone2 }}</td>
                                <th class="text-start">เบอร์โทร 3</th>
                                <td class="text-start">{{ @$data->phone3 }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <span class="fw-semibold text-primary mt-2">ที่อยู่ที่ทำงาน :</span>
                    </div>
                    <div class="col-12">
                        <table class="table table-sm">
                            <tr>
                                <th class="text-start">ชื่อที่ทำงาน</th>
                                <td class="text-start"></td>
                                <th class="text-start">เลขที่/หมู่</th>
                                <td class="text-start"></td>
                                <th class="text-start">ถนน</th>
                                <td class="text-start"></td>
                                <th class="text-start">ตรอก/ซอย</th>
                                <td class="text-start"></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

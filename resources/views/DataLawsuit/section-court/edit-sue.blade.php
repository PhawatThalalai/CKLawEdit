<div class="modal-content" id="formCreate">
    <div class="row me-4 mt-2">
        <div class="d-flex m-3">
            <div class="flex-shrink-0 me-4">
                {{-- <img src="{{ URL::asset('\assets/images/calculator.png') }}" alt="" style="width: 40px;"> --}}
            </div>
            <div class="flex-grow-1 overflow-hidden">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="text-primary fw-semibold pb-2">แก้ไขข้อมูล</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <p class="border-primary border-bottom mb-0"></p>
            </div>

        </div>
    </div>
    <form action="" method="POST"><!--EBM-->
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3 input-bx">
                    <span>ยื่นฟ้องวันที่ :</span>
                    <input type="text" class="form-control input-mask" name="" value="" required />
                </div>
                <div class="mb-3 input-bx">
                    <span>หน่วยงาน :</span>
                    <input type="text" class="form-control input-mask" name="" value="" required />
                </div>
                <div class="mb-3 input-bx">
                    <span>ประเภทคดี :</span>
                    <input type="text" class="form-control" name="" id="name" required placeholder=" ">
                </div>
                <div class="mb-3 input-bx">
                    <span>ทุนทรัพย์ :</span>
                    <div class="input-group">
                        <input type="text" class="form-control" name="" id="name" required placeholder=" "><span class="input-group-text">บาท</span>
                    </div>
                </div>
                <div class="mt-5 pt-5 mb-3 input-bx">
                    <span>ส่งหมายเรียกจำเลย :</span>
                    <input type="text" class="form-control" name="" id="name" required placeholder=" ">
                </div>
            </div>
            <div class="col-sm-6 ">

                <div class="mb-3 input-bx">
                    <div class="mb-3 input-bx">
                        <span>ศาลรับฟ้องวันที่ :</span>
                        <input type="text" class="form-control input-mask" name=""  value="" required />
                    </div>
                    <div class="mb-3 input-bx">
                        <span>หมายเลขคดีดำ :</span>
                        <input type="text" class="form-control input-mask" name=""  value="" required />
                    </div>
                    <div class="mb-3 input-bx">
                        <span>หมายเลขคดีแดง :</span>
                        <input type="text" class="form-control" name="" id="name" required
                            placeholder=" ">
                    </div>
                    <div class="mb-3 input-bx">
                        <span>นัดสืบพยานวันที่ :</span>
                        <input type="text" class="form-control" name="" id="name" required
                            placeholder=" ">
                    </div>
                    <div class="mb-3 input-bx">
                        <span>เวลา :</span>
                        <input type="text" class="form-control" name="" id="name" required
                            placeholder=" ">
                    </div>
                    <div class="mb-3 input-bx">
                        <span>รายงานเดินหมาย :</span>
                        <input type="text" class="form-control" name="" id="name" required
                            placeholder=" ">
                    </div>
                </div>
            </div>
            <div class="mb-3 input-bx">
                <span>หมายเหตุ :</span>
                <textarea class="form-control" name="note" id="note" required>{{ @$data->note }}</textarea>
            </div>

        </div>
    </div>
    <div class="modal-footer d-flex justify-content-between">
        <div>
            <button type="button" class="btn btn-warning">ส่งชั้นสืบพยาน</button>
        </div>

        <div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
            <button type="button" class="btn btn-primary">บันทึก</button>
        </div>
    </div>
    </form>
</div>

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
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3 input-bx">
                    <span>นัดสืบพยาน :</span>
                    <input type="text" class="form-control input-mask" value="" required />
                </div>
                <div class="mb-3 input-bx">
                    <span>เลื่อนนัดสืบพยาน :</span>
                    <input type="text" class="form-control input-mask" value="" required />
                </div>
                <div class="mb-3 input-bx">
                    <span>รายงานศาล :</span>
                    <input type="text" class="form-control" name="name" id="name" required placeholder=" ">
                </div>
            </div>
            <div class="col-sm-6 ">

                <div class="mb-3 input-bx">
                    <div class="mb-3 input-bx">
                        <span>เวลา :</span>
                        <input type="text" class="form-control input-mask" value="" required />
                    </div>
                    <div class="mb-3 input-bx">
                        <span>เวลา :</span>
                        <input type="text" class="form-control input-mask" value="" required />
                    </div>
                    <div class="mb-3 input-bx">
                        <span>ยอดหนี้ :</span>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="name" required
                                placeholder=" ">
                            <span class="input-group-text">บาท</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  ส่งคำบังคับ
                </label>
              </div>
            <div class="mb-3 input-bx">
                <span>รายละเอียดคำพิพากษา :</span>
                <textarea class="form-control"></textarea>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">บันทึก</button>
    </div>
</div>

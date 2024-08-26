<div class="card border border-white mb-2 p-2">
    <div class="card-body">
        <div class="row">
            <a data-link="{{ route('Exe.edit', 1) }}?type={{ 'Edit-invest' }}" data-bs-toggle="modal"
                data-bs-target="#modal-xl" type="button" class="btn-md float-end text-warning text-end">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <div class="col-12">
                <span <i class="fa-solid fa-plus"></i> สืบทรัพย์บังคับคดี </span>
            </div>
            <div class="ml-3">
                <table class="table table-md ">
                    <tr>
                        <th class="text-start">สืบทรัพย์วันที่ :</th>
                        <td class="text-start">วว/ดด//ปป</td>
                        <th class="text-start">ผลการสืบทรัพย์ :</th>
                        <td class="text-start ">วว/ดด//ปป</td>
                    </tr>
                    <tr>
                        <th class="text-start">ทรัพย์ที่พบเป็น :</th>
                        <td colspan="3" class="text-start"></td>
                    </tr>
                </table>
            </div>
            <div class="col-12">
                <span <i class="fa-solid fa-plus"></i> คัดถ่ายเอกสารสิทธื์ </span>
            </div>
            <div class="ml-3">
                <table class="table table-md ">
                    <tr>
                        <th class="text-start">คัดถ่ายวันที่ :</th>
                        <td class="text-start">วว/ดด//ปป</td>
                        <th class="text-start">ผบการคัดถ่าย :</th>
                        <td class="text-start ">วว/ดด//ปป</td>
                    </tr>
                </table>
            </div>
            <table class="table table-md ">
                <tr>
                    <th class="text-start">หมายเหตุ :</th>
                </tr>
                <td class="text-start">
                    <textarea class="form-control" rows="3"></textarea>
                </td>
            </table>
        </div>
    </div>
</div>

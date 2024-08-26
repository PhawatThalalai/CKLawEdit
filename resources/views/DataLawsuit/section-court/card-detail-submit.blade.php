<div class="card border border-white mb-2 p-2">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <a data-link="{{ route('Law.edit', 1) }}?type={{ 'Edit-submit' }}" data-bs-toggle="modal"
                    data-bs-target="#modal-xl" type="button" class="btn-md float-end text-warning text-end">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>
            <div class="col-12">
                <table class="table table-md">
                    <tr>
                        <th class="text-start">ส่งคำบังคับวันที่ :</th>
                        <td class="text-start">วว/ดด//ปป</td>
                        <th class="text-start">รายงานการเดินหมาย :</th>
                        <td class="text-start "> <br></td>
                    </tr>
                    <tr>

                        <th class="text-start">พิพากษาวันที่ :</th>
                        <td colspan="3" class="text-start "> วว/ดด//ปป<br></td>
                    </tr>
                </table>
                <div class="mb-3 input-bx">
                    <span>รายละเอียดคำพิพากษา :</span>
                    <textarea class="form-control"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

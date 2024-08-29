<div class="card border border-white mb-2 p-2">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5 class=" fw-semibold text-primary"><i class="fa-solid fa-address-book"></i> ข้อมูลบังคับคดี
                </h5>
            </div>
            <div class="col-12">
                <table class="table table-md">
                    <tr>
                        <th class="text-start">เลขที่สัญญา :</th>
                        <td class="text-start" id="CON_NO" name="CON_NO">30-2567/1234</td>
                        <th class="text-start">ประเภทคดี :</th>
                        <td class="text-start ">เช่าซื้อ</td>
                    </tr>
                    <tr>
                        <th class="text-start">หน่วยงาน :</th>
                        <td class="text-start">ศาลจังหวัดสงขลา</td>
                        <th class="text-start">หมายเลขคดีดำ :</th>
                        <td class="text-start">ผบ.E123/2567</td>
                    </tr>
                    <tr>
                        <th class="text-start">หน่วยงาน :</th>
                        <td class="text-start"> </td>
                        <th class="text-start">หมายเลขคดีแดง :</th>
                        <td class="text-start text-danger">ผบ.E123/2567</td>
                    </tr>
                    <tr>
                        <th class="text-start">ทุนทรัพย์ :</th>
                        <td class="text-start">300,000 บาท</td>
                        <th class="text-start">รายงานศาล :</th>
                        <td class="text-start ">พิพากษา</td>
                    </tr>
                    <tr>
                        <th class="text-start">โจทย์ :</th>
                        <td class="text-start">บริษัท ชูเกียรติมอเตอร์ (1996) จำกัด</td>
                        <th class="text-start">จำเลย :</th>
                        <td class="text-start ">นายสมมติ สมนึก <br> นายสมนึก สมมติ <br></td>
                    </tr>
                    <tr>

                        <th class="text-start">สถานะ :</th>
                        <td colspan="3" class="text-start">{{ @$item->status }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card border border-white mb-1 p-2">
        <ul class="nav nav-pills row" id="pills-tab" role="tablist">
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link active" id="pills-invest-tab" data-bs-toggle="pill" data-bs-target="#pills-invest"
                    type="button" role="tab" aria-controls="pills-invest" aria-selected="true">ข้อมูลสืบทรัพย์/คัดถ่าย</button>
            </li>
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link" id="pills-prop-tab" data-bs-toggle="pill" data-bs-target="#pills-prop"
                    type="button" role="tab" aria-controls="pills-prop"
                    aria-selected="false">ข้อมูลนำชี้ทรัพย์</button>
            </li>
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link" id="pills-seques-tab" data-bs-toggle="pill" data-bs-target="#pills-seques"
                    type="button" role="tab" aria-controls="pills-seques"
                    aria-selected="false">ข้อมูลตั้งเรื่องยึดทรัพย์</button>
            </li>
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link" id="pills-aunction-tab" data-bs-toggle="pill" data-bs-target="#pills-aunction"
                    type="button" role="tab" aria-controls="pills-aunction"
                    aria-selected="false">ข้อมูลประกาศขายทอดตลาด</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-invest" role="tabpanel" aria-labelledby="pills-invest-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-execution.card-detail-invest')
        </div>

    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade  " id="pills-prop" role="tabpanel" aria-labelledby="pills-prop-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-execution.card-detail-prop')
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade  " id="pills-seques" role="tabpanel" aria-labelledby="pills-seques-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-execution.card-detail-seques')
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade  " id="pills-aunction" role="tabpanel" aria-labelledby="pills-aunction-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-execution.card-detail-aunction')
        </div>
    </div>
</div>



<script>
    // $(document).ready(function() {

    //     // เริ่มต้นหน้าให้แสดง
    //     $(".btn-primary, .btn-success, .btn-secondary").show();
    //     $(".btn-danger, .btn-warning").hide();

    //     $("#pills-invest-tab").click(function() {
    //         $(".btn-primary, .btn-success, .btn-secondary").show();
    //         $(".btn-danger").hide();
    //     });

    //     // เมื่อกดปุ่ม 'ชั้นสืบพยาน'
    //     $("#pills-prop-tab").click(function() {
    //         $(".btn-primary, .btn-success, .btn-danger, .btn-secondary").show();
    //         $(".btn-warning").hide();
    //     });

    //     // เมื่อกดปุ่ม 'ชั้นส่งคำบังคับ'
    //     $("#pills-seques-tab").click(function() {
    //         $(".btn-primary, .btn-success, .btn-danger, .btn-secondary, .btn-warning").show();
    //         // $(".btn-danger, .btn-secondary").hide();
    //     });

    //     // เมื่อกดปุ่ม 'ชั้นตั้งเจ้าพนักงาน'
    //     $("#pills-appoff-tab").click(function() {
    //         $(".btn-primary, .btn-success, .btn-danger, .btn-secondary, .btn-warning").show();
    //         // $(".btn-danger").hide();
    //     });
    // });

    $(document).ready(function() {

        // เริ่มต้นหน้าให้แสดง
        $(".btn-primary, .btn-success, .btn-secondary").show();
        $(".btn-danger, .btn-warning").hide();

        $("#pills-invest-tab").click(function() {
            $(".btn-primary, .btn-success, .btn-secondary").show();
            $(".btn-danger, .btn-warning").hide();
        });

        // เมื่อกดปุ่ม 'ชั้นสืบพยาน'
        $("#pills-prop-tab").click(function() {
            $(".btn-primary, .btn-success, .btn-secondary").show();
            $(".btn-danger").show();
            $(".btn-warning").hide();
        });

        // เมื่อกดปุ่ม 'ชั้นส่งคำบังคับ'
        $("#pills-seques-tab").click(function() {
            $(".btn-primary, .btn-success, .btn-secondary, .btn-danger, .btn-warning").show();
        });

        // เมื่อกดปุ่ม 'ชั้นตั้งเจ้าพนักงาน'
        $("#pills-appoff-tab").click(function() {
            $(".btn-primary, .btn-success, .btn-secondary, .btn-danger, .btn-warning").show();
        });
    });

</script>

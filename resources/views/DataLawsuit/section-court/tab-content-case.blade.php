<div class="col-12">
    <div class="card border border-white mb-1 p-2">
        <ul class="nav nav-pills row" id="pills-tab" role="tablist">
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link active" id="pills-sue-tab" data-bs-toggle="pill" data-bs-target="#pills-sue"
                    type="button" role="tab" aria-controls="pills-sue" aria-selected="true">ชั้นฟ้อง</button>
            </li>
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link" id="pills-witness-tab" data-bs-toggle="pill" data-bs-target="#pills-witness"
                    type="button" role="tab" aria-controls="pills-witness"
                    aria-selected="false">ชั้นสืบพยาน</button>
            </li>
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link" id="pills-submit-tab" data-bs-toggle="pill" data-bs-target="#pills-submit"
                    type="button" role="tab" aria-controls="pills-submit"
                    aria-selected="false">ชั้นส่งคำบังคับ</button>
            </li>
            <li class="nav-item col text-center d-grid" role="presentation">
                <button class="nav-link" id="pills-appoff-tab" data-bs-toggle="pill" data-bs-target="#pills-appoff"
                    type="button" role="tab" aria-controls="pills-appoff"
                    aria-selected="false">ชั้นตั้งเจ้าพนักงาน</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-sue" role="tabpanel" aria-labelledby="pills-sue-tab">
            {{-- detail con --}}
            
            @include('DataLawsuit.section-court.card-detail-sue')
        </div>

    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade  " id="pills-witness" role="tabpanel" aria-labelledby="pills-witness-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-court.card-detail-witness')
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade  " id="pills-submit" role="tabpanel" aria-labelledby="pills-submit-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-court.card-detail-submit')
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade  " id="pills-appoff" role="tabpanel" aria-labelledby="pills-appoff-tab">
            {{-- detail con --}}

            @include('DataLawsuit.section-court.card-detail-appoff')
        </div>
    </div>
</div>

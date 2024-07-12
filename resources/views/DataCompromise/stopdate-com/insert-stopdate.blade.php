<div class="modal-content" id="formCreate">
    <div class="row me-4 mt-2">
        <div class="d-flex m-3">
            <div class="flex-shrink-0 me-4">
                {{-- <img src="{{ URL::asset('\assets/images/calculator.png') }}" alt="" style="width: 40px;"> --}}
            </div>
            <div class="flex-grow-1 overflow-hidden">
                <h5 class="text-primary fw-semibold pb-2">เพิ่มวันงดการขาย</h5>
                <p class="border-primary border-bottom mb-0"></p>

            </div>
        </div>
    </div>


    <div class="modal-body">
        <div class="col-12 mt-3">
            <form id='insert_stopdate'>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3 input-bx">
                            <span>วันที่</span>
                            <input type="date" lang="th-th" name="stopdate" id="stopdate" class="form-control">
                            <input type="hidden" lang="th-th" value="{{ trim(@$cus_id) }}" name="cus_id"
                                id="cus_id" class="form-control">
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="mb-3 input-bx">
                        <span>หมายเหตุ</span>
                        <textarea class="form-control" name="note" id="note" required>{{ @$dataFinance->note }}</textarea>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary " id="saveEditBtn">
                        <span class="spinner-border spinner-border-sm" role="status" id="loading-sue"
                            aria-hidden="true" style="display: none"></span>
                        บันทึก
                    </button>

                    <button type="button" class="btn btn-danger " id="close-sue" class="close" data-bs-dismiss="modal"
                        aria-label="Close">ปิด</button>
                </div>



            </form>

        </div>
    </div>


</div>




<script type="text/javascript">
    $(function() {


        // let currentDate = document.getElementById('date-input').valueAsDate = new Date();
        // console.log(currentDate);
        $('#saveEditBtn').hide()
        $('#insert_stopdate').on('change input', () => {

            $('#saveEditBtn').show()
        })

        $('#saveEditBtn').click(function(e) {
            $('#saveEditBtn').prop('disabled', true);
            $('#close-sue').prop('disabled', true);
            $('#loading-sue').show();

            let num = parseInt($('#num').val());
            let Applicant = $('#Applicant').val();

            data = {

            };
            console.log('data', data);

            $('#insert_stopdate').serializeArray().map(function(x) {
                data[x.name] = x.value;
            });
            let link = "{{ route('LawCom.store') }}?type={{ 'InsertComStopdate' }}";



            $.ajax({
                url: link,
                method: 'POST',
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
                    $('#loading-sue').hide();
                    $('#modal-xl').modal('hide');
                    location.reload();
                },
                error: function(err) {
                    $('#loading-sue').hide();
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



        // $('#date-input').on('change input', () => {
        //     let currentDate = $('#date-input').val();
        //     console.log(currentDate);
        // })

    })
</script>

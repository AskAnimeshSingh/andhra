@extends('website.layout.layout')
@section('extra_css')
    <style>
        .the-div {
            padding: 50px 150px;
            /* Default padding */
        }

        /* For screens smaller than 768px */
        @media (max-width: 767px) {
            .the-div {
                padding: 30px 10px;
            }
        }

        /* For screens between 768px and 991px */
        @media (min-width: 768px) and (max-width: 991px) {
            .the-div {
                padding: 40px 100px;
            }
        }

        /* For screens larger than 992px */
        @media (min-width: 992px) {
            .the-div {
                padding: 10px 150px;
            }
        }
    </style>
@endsection
@section('content')
    <section style="background-color: var(--eerie-black-4); padding-top: 84px;">
        <div class="the-div" style="background-color:white; width:100%;">
            <div class="row bg-white">
                <div class="col-md-6">

                    <div class="contact-form-new">
                        <div style="width:100%;">
                            <h3 style="font-family:var(--fontFamily-forum); color: #A07E55; margin-bottom:20px;"
                                class="text-8xl">OTP</h3>

                            <p style="color:#2D1E16; font-size:15px;font-family: var(--fontFamily-dm_sans);">We have sent an
                                OTP to your number</p>
                            <form class="otp_verify" method="POST">
                              <div class="mt-4 mb-4 f-flex justify-start place-items-center" style="gap:15px;">
                                    <input type="number" name="f" class="form-control f-1" maxlength="1"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        style="border:3px solid #e7eff3 !important;line-height: 2.5 !important; font-size:17px;">

                                    <input type="number" name="s" class="form-control f-1" maxlength="1"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        style="border:3px solid #e7eff3 !important;line-height: 2.5 !important; font-size:17px;">

                                    <input type="number" name="t" class="form-control f-1" maxlength="1"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        style="border:3px solid #e7eff3 !important;line-height: 2.5 !important; font-size:17px;">

                                    <input type="number" name="l" class="form-control f-1" maxlength="1"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        style="border:3px solid #e7eff3 !important;line-height: 2.5 !important; font-size:17px;">
                                </div>
                                <input type="hidden" name="user_id" value="{{ $id }}">
                                <input type="hidden" name="branch_id" value="{{ $branch_id }}">
                                <input type="hidden" name="table_id" value="{{ $table_id }}">
                                <div class="mb-0 btnsubmit" style="align-items: flex-start; width:fit-content; padding:6px 15px;appearance: button;background-color: #E7E5DC;box-sizing: border-box;color: #A07E55;cursor: pointer;font-family: var(--fontFamily-dm_sans); font-size: 15px; font-weight: 500; line-height: 22.5px; text-align: center; transform: matrix(1.05, 0, 0, 1.05, 0, 0); transition: border 0.3s ease 0s,transform 0.3s ease 0s; width:fit-content;">
                                    <button type="submit" name="submit">Verify</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/website/custom/7.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@section('extra_js')
    <script>
        $(function() {
            $('.otp_verify').on('submit', function(e) {
                e.preventDefault()
                let fd = new FormData(this)
                fd.append('_token', "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('website.otp_verify') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            setTimeout(function() {
                                window.location.href = result.location;
                            }, 500);
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })
        });
    </script>
@endsection
@endsection

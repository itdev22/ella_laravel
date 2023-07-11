@extends('layouts.account')

@section('title')
    Tambah Uang Masuk - UANGKU
@stop

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> USER</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-user"></i> TAMBAH USER</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('account.user.store') }}" method="POST">
                            @csrf

                            <div class="">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="full_name" value="{{ old('nama') }}"
                                            placeholder="Masukkan Nama" class="form-control ">

                                        @error('full_name')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="Masukkan Email">

                                        @error('email')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username"
                                            placeholder="Masukkan Username">

                                        @error('username')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password"
                                            placeholder="Masukkan Password">

                                        @error('date_debit')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="text" class="form-control" name="password2"
                                            placeholder="Masukkan Password">

                                        @error('date_debit')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                                RESET</button>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }

        var cleaveC = new Cleave('.currency', {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });

        var timeoutHandler = null;

        /**
         * btn submit loader
         */
        $(".btn-submit").click(function() {
            $(".btn-submit").addClass('btn-progress');
            if (timeoutHandler) clearTimeout(timeoutHandler);

            timeoutHandler = setTimeout(function() {
                $(".btn-submit").removeClass('btn-progress');

            }, 1000);
        });

        /**
         * btn reset loader
         */
        $(".btn-reset").click(function() {
            $(".btn-reset").addClass('btn-progress');
            if (timeoutHandler) clearTimeout(timeoutHandler);

            timeoutHandler = setTimeout(function() {
                $(".btn-reset").removeClass('btn-progress');

            }, 500);
        })
    </script>
@stop

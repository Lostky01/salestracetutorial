@extends('layouts.app-backend-omsetku')

@section('css_after')
    <style>
        .atas {
            background-image: url('{{ asset('vectoratas.png') }}');
            background-position: center center;
        }
    </style>
@endsection

@section('css_before')
@endsection

@section('content')
    <section class="atas">
        <div class="col-lg-12 justify-content-center" style="padding:60px">
            <center>
                <h1 style="font-size: 28px;font-weight: 600;">QUOTATION</h1>
            </center>
            <center>
                <p style="color: #4C526C;font-size: 12px;font-weight: 500;">Atur keinginan customer dari awal sampai deal dengan QUOTATION</p>
            </center>
            <center style="text-align: center;">
                <a class="btn btn-primary"
                    style="width: 398px; height: 43px; border-radius: 3px; background: #1E3168; display: inline-block; line-height: 25px; color: #fff; text-decoration: none;"
                    href="#">Buat Quotation</a>
            </center>
        </div>
    </section>
    <section class="bagaimana SO bekerja" style="background: #F9F9FB; padding:50px">
        <center>
            <h1 style="text-align: center;font-size: 26px;font-weight: 600;">Bagaimana QUOTATION bekerja</h1>
        </center>
        <center>
            <p style="color: #4C526C;font-size: 12px;font-weight: 500;">ini adalah siklus QUOTATION Salestrace bekerja</p>
        </center>
        <center>
            <p style="line-height: 40px;font-weight: 600;font-size: 20px;color: #464A53;">QUOTATION</p>
        </center>
        <center><img src="{{ asset('flowquo.png') }}" alt=""></center>
        <div class="col-lg-12" style="text-align: center;">
            <div id="rcorners2"
                style="border-radius: 15px; border: 2px solid #438AFE; padding: 10px; width: 650px; height: 53px; display: inline-flex; align-items: center; margin-top:35px;margin-bottom:35px">
                <img src="{{ asset('bawahvector.png') }}" alt=""
                    style="margin-right: 10px; width: 35px; height: 35px;">
                <span style="text-align: left; font-weight: 400; font-size: 12px;">
                    Dengan sistem seperti manajemen tasking memudahkan pekerjaan dalam membuat quotation untuk customer
                </span>
            </div>
        </div>
        <center><img src="{{ asset('garisso.png') }}" alt=""></center>
    </section>
    <section class="dibagian invoice anda dapat" style="padding:10px">
        <center>
            <h2 style="color: #464A53;font-size: 18px;font-weight: 500;">Dibagian QUOTATION, Anda dapat :</h2>
        </center>
        <center>
            <ul style="list-style-type: none; padding: 0; text-align: left; display: inline-block;">
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="{{ asset('customlist.png') }}" alt="" style="margin-right: 5px;">
                    List pesanan customer
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="{{ asset('customlist.png') }}" alt="" style="margin-right: 5px;">
                    Atur keinginan customer
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="{{ asset('customlist.png') }}" alt="" style="margin-right: 5px;">
                    Menentukan komisi bagi hasil
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="{{ asset('customlist.png') }}" alt="" style="margin-right: 5px;">
                    Pilih tanggal periode pesanan
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="{{ asset('customlist.png') }}" alt="" style="margin-right: 5px;">
                    Atur termin pesanan customer
                </li>
            </ul>
        </center>
    </section>
@endsection

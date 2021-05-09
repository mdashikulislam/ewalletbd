@extends('frontend.layouts.app')
@section('content')
    <div class="register-col">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="thumbnail" style="margin-top: 30px;">
                        <div class="heading-col" style="margin-top: 30px;">
                            <h2>Documents Verification</h2>
                            <div class="border"></div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.document.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Identity Type</label>
                                    <select  name="id_type" id="id_type" class="form-control @error('id_type') is-invalid @enderror">
                                        <option {{old('id_type') == 'nid' ? 'selected':''}} value="nid">NID</option>
                                        <option {{old('id_type') == 'passport' ? 'selected':''}} value="passport">Passport</option>
                                        <option {{old('id_type') == 'driving' ? 'selected':''}} value="driving">Driving License</option>
                                    </select>
                                    @error('id_type')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div id="id_group">
                                    <div class="nid">

                                    </div>
                                    <div class="driving" >

                                    </div>
                                    <div class="passport">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Document Type</label>
                                    <select  name="document_type" id="document_type" class="form-control @error('document_type') is-invalid @enderror">
                                        <option {{old('document_type') == 'utility' ? 'selected':''}} value="utility">Utility Bill</option>
                                        <option {{old('document_type') == 'bank' ? 'selected':''}} value="bank">Bank Statement</option>
                                    </select>
                                    @error('document_type')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div id="document_group">
                                    <div class="utility">

                                    </div>
                                    <div class="bank" >

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Selfi with photo ID</label>
                                    <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" required="required">
                                    @error('image')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="submit-btn">
                                        <button type="submit" class="btn-submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .register-col{
            padding: 80px 0;
            background-image: url("{{asset('frontend/img/color-comb.png')}}");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .register-col .thumbnail{
            border-color: transparent;
        }
        .register-col .thumbnail .card-body{
            padding: 30px;
        }
        .register-col .thumbnail .form-control{
            height: 40px;
            /*border-radius: 0;*/
            text-shadow: none;
            box-shadow: none;
            font-size: 16px;
        }
        .register-col .thumbnail .form-control:focus{
            border-color: #ff4b00;
            outline: none;
            box-shadow: none;
        }


        .submit-btn{
            padding-top: 20px;
            overflow: hidden;
            text-align: center;
        }
        .submit-btn .btn-submit{
            border: 2px solid #ff4b00;
            color: #ff4b00;
            position: relative;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            letter-spacing: .08em;
            border-radius: 0;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
            background: transparent;
            border-radius: 4px;
            padding: 8px 25px;
        }
        .submit-btn .btn-submit:hover{
            color: #FFF;
            background: #ff4b00;
        }
    </style>
@endsection
@push('js')
    <script>
        $(window).on('load',function (){
            idTypeChange($('#id_type').val());
            documentTypeChange($('#document_type').val());
        })
        $(document).ready(function (){
            $(document).on('change','#id_type',function (){
                var type = $(this).val();
                idTypeChange(type);
            });
            $(document).on('change','#document_type',function (){
                var documentType = $(this).val();
                documentTypeChange(documentType);
            });
        });
        function idTypeChange(value){
            var idGroup = $('#id_group');
            if (value == 'nid'){
                idGroup.find('div.nid').append(`<div class="form-group">
                                            <label>NID Front Side</label>
                                            <input name="nid_front" type="file" class="form-control @error('nid_front') is-invalid @enderror" required="required">
                                            @error('nid_front')
                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                </div>
                <div class="form-group">
                    <label>NID Back Side</label>
                    <input name="nid_back" type="file" class="form-control @error('nid_back') is-invalid @enderror" required="required">
                                            @error('nid_back')
                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                </div>`);

                idGroup.find('div.passport').empty();
                idGroup.find('div.driving').empty();
            }else if(value == 'passport'){
                idGroup.find('div.nid').empty();
                idGroup.find('div.passport').append(`<div class="form-group">
                                            <label>Passport</label>
                                            <input name="passport" type="file" class="form-control @error('passport') is-invalid @enderror" required="required">
                                            @error('passport')
                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                </div>`);
                idGroup.find('div.driving').empty();
            }else{
                idGroup.find('div.nid').empty();
                idGroup.find('div.passport').empty();
                idGroup.find('div.driving').append(`<div class="form-group">
                                            <label>Driving Licence</label>
                                            <input name="driving" type="file" class="form-control @error('driving') is-invalid @enderror" required="required">
                                            @error('driving')
                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                </div>`);
            }
        }
        function documentTypeChange(value){
            var documentGroup = $('#document_group');
            if (value == 'bank'){
                documentGroup.find('div.bank').append(`<div class="form-group">
                                            <label>Bank Statement</label>
                                            <input name="bank" type="file" class="form-control @error('bank') is-invalid @enderror" required="required">
                                            @error('bank')
                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                </div>`);
                documentGroup.find('div.utility').empty();
            }else{
                documentGroup.find('div.utility').append(`<div class="form-group">
                                            <label>Utility Bill</label>
                                            <input name="utility" type="file" class="form-control @error('utility') is-invalid @enderror" required="required">
                                            @error('utility')
                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                </div>`);
                documentGroup.find('div.bank').empty();
            }
        }
    </script>


    @endpush

@extends('backend.index')

@section('title')
    <title>add New promo</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('backend/template/assets/plugins/multi-select/css/multi-select.css')}}">
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="{{ asset('backend/template/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{ asset('backend/template/assets/custom/css/bootstrap-slider.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/template/assets/custom/css/customslider.css')}}">
@endsection


@section('js')
<!-- Multi Select-->
<script src="{{ asset('backend/template/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{ asset('backend/template/assets/custom/js/bootstrap-slider.min.js')}}"></script>

<!-- Ckeditor -->
<script src="{{ asset('backend/template/assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
    //CKEDITOR
    let praItemList = [], eventItemList = [], postItemList = [];
    CKEDITOR.replace( 'editor1' );
    // CUSTOM UPLOAD
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    //MULTI SELECT
    $('.optgroup').multiSelect({ selectableOptgroup: true });

    //PENGAMBILAN DATA PRA DARI SELECT OPTION
    $('#pra_item').change(function() {
        praItemList = [];
        let selectedValue = $(this).val();
        getItemList('#table-item', '#pra_item', selectedValue, 'pra');
    })

    //PENGAMBILAN DATA EVENT DARI SELECT OPTION
    $('#event_item').change(function() {
        eventItemList = [];
        let selectedValue = $(this).val();
        getItemList('#table-item', '#event_item', selectedValue, 'event');
    })

    //PENGAMBILAN DATA POST DARI SELECT OPTION
    $('#post_item').change(function() {
        postItemList = [];
        let selectedValue = $(this).val();
        getItemList('#table-item', '#post_item', selectedValue, 'post');
    })

    //
    function getItemList(tableEl,currEl,selectedValue, type ){
        for(let i in selectedValue) {
            let elOption = $(`${currEl} option[value="${selectedValue[i]}"]`);
            let oOption = {
                id: selectedValue[i],
                name: elOption.data('name'),
                rate: elOption.data('rate'),
            };
            switch(type) {
                case 'pra':
                    praItemList.push(oOption);
                    break;
                case 'event':
                    eventItemList.push(oOption);
                    break;
                case 'post':
                    postItemList.push(oOption);
                    break;
            }
        }
        $(`${tableEl} tbody`).empty();
        insertItemList($(tableEl), praItemList);
        insertItemList($(tableEl), eventItemList);
        insertItemList($(tableEl), postItemList);
    }

    //MENEMPATKAN HASIL DARI PENGAMBILAN PRA EVENT DAN POST
    function insertItemList(tableEl, data) {
        for(let i in data) {
            let tbody = tableEl.find('tbody');
            let tr = $("<tr/>")
                    .appendTo(tbody);
            let tdItem = $("<td/>")
                    .html(data[i].name)
                    .appendTo(tr);
            let tdRate = $("<td/>")
                    .addClass('text-center item_rate')
                    .html(data[i].rate)
                    .appendTo(tr);
        }

        getTotalRateItem($(tableEl));
    }

     //MENGHITUNG HASIL DARI GROSS TOTAL // HARGA SETIAP ITEM
     function getTotalRateItem(tableEl) {
        let total = 0;
        tableEl.find('.item_rate').each(function() {
            total += (isNaN(parseFloat($(this).html())) ? 0 : parseFloat($(this).html()));
        });
        $('[name=gross_total]').val(total);
        calculateGrandTotal();
    }
    // With JQuery Version SLIDE JAVASCRIPT
    $("#ex6").slider();
    $("#ex6").on("slide", function(slideEvt) {
        $("#ex6SliderVal").text(slideEvt.value);
        calculateGrandTotal();
    });

    // Calculate Grand Total
    function calculateGrandTotal() {
        let totalRateItem = isNaN(parseFloat($('[name=gross_total]').val())) ? 0 : parseFloat($('[name=gross_total]').val());
        let sv = isNaN(parseFloat($('#ex6').val())) ? 0 : parseFloat($('#ex6').val());
        let svTotal = totalRateItem * (sv/100);
        let packageTotal = totalRateItem - svTotal;
        let ppnTotal = packageTotal * 0.1;
        let grandTotal = packageTotal + ppnTotal;

        $('[name=sv_total]').val(svTotal);
        $('[name=package_total]').val(packageTotal);
        $('[name=ppn]').val(ppnTotal);
        $('[name=grand_total]').val(grandTotal);
    }

    $(document).ready(function(){
        $('.optgroup').change();
    })
</script>
@endsection

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">add New Promo</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('promo.index') }}">Promo data</a></li>
                            <li class="breadcrumb-item active">add New Promo</li>
                        </ol>
                    </div>
                    <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="PATCH" name="_method">
                        {{ csrf_field() }}
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-header">
                                    <center><h6>Info Data</h6></center>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Marketing Name</label>
                                        <input class="form-control {{ $errors->has('marketing_name') ? ' is-invalid' : '' }}" type="text" name="marketing_name" value="{{ $promo->marketing_name }}" required>
                                        {{-- Error Notification --}}
                                        @if ($errors->has('marketing_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('marketing_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Campaign Name</label>
                                        <input class="form-control {{ $errors->has('campaign_name') ? ' is-invalid' : '' }}" type="text" name="campaign_name" value="{{ $promo->campaign_name }}" required>
                                        {{-- Error Notification --}}
                                        @if ($errors->has('campaign_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('campaign_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group" >
                                        <div class="form-group" style="margin-right:25px;">
                                            <label for="">Campaign Duration Start</label>
                                            <input class="form-control {{ $errors->has('campaign_duration_start') ? ' is-invalid' : '' }}" type="date" name="campaign_duration_start" value="{{ $promo->campaign_duration_start }}" required>
                                            {{-- Error Notification --}}
                                            @if ($errors->has('campaign_duration_start'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('campaign_duration_start') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Campaign Duration End</label>
                                            <input class="form-control {{ $errors->has('campaign_duration_end') ? ' is-invalid' : '' }}" type="date" name="campaign_duration_end" value="{{ $promo->campaign_duration_end }}" required>
                                            {{-- Error Notification --}}
                                            @if ($errors->has('campaign_duration_end'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('campaign_duration_end') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Priority</label>
                                        <select name="priority" class="form-control {{ $errors->has('priority') ? ' is-invalid' : '' }}" required>
                                            <option value="HIGH" <?php if($promo['priority'] == 'HIGH') { ?> selected="selected"<?php } ?>>HIGH</option>
                                            <option value="MEDIUM" <?php if($promo['priority'] == 'MEDIUM') { ?> selected="selected"<?php } ?>>MEDIUM</option>
                                            <option value="LOW" <?php if($promo['priority'] == 'LOW') { ?> selected="selected"<?php } ?>>LOW</option>
                                        </select>
                                        {{-- Error Notification --}}
                                        @if ($errors->has('priority'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('priority') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Detail Campaign Deals</label>
                                        <textarea class="form-control {{ $errors->has('promo_description') ? ' is-invalid' : '' }}" name="promo_description" id="editor1" required>{{ $promo->promo_description }}</textarea>
                                        {{-- Error Notification --}}
                                        @if ($errors->has('promo_description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('promo_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label>Media</label>
                                    <div>
                                        <img src="{{ asset('/backend/template/assest/images/promo/'. $promo->media . '') }}"
                                        style="width:115px; height:80px;" alt="foto">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input {{ $errors->has('media') ? ' is-invalid' : '' }}" name="media" value="{{ $promo->media }}" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">{{ $promo->media }}</label>
                                            {{-- Error Notification --}}
                                            @if ($errors->has('media'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('media') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-header">
                                    <center><h6>List Tools Campaign</h6></center>
                                </div>
                                <div class="card-body">
                                    <!-- Multi Select Pra-Event -->
                                    <div class="card">
                                        <div class="card-header">
                                            PRA-EVENT
                                        </div>
                                        <div class="card-body">
                                            <select id="pra_item" name="pra_item[]" class="ms optgroup {{ $errors->has('pra_item') ? ' is-invalid' : '' }}" multiple="multiple">
                                                @foreach ($item as $data)
                                                    @php
                                                        $selected = "";
                                                        if(array_key_exists($data->id, $promo->list_tools['pra'])) {
                                                            $selected = "selected='selected'";
                                                        }
                                                    @endphp
                                                    <option value="{{ $data->id }}" data-name="{{ $data->name }}" data-rate="{{ $data->rate }}" {{ $selected }}>{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- Error Notification --}}
                                            @if ($errors->has('pra_item'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('pra_item') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- #END# Multi Select Pra-Event-->

                                    <!-- Multi Select Event -->
                                    <div class="card">
                                        <div class="card-header">
                                            EVENT
                                        </div>
                                        <div class="card-body">
                                            <select id="event_item" name="event_item[]" class="ms optgroup {{ $errors->has('event_item') ? ' is-invalid' : '' }}" multiple="multiple">
                                                @foreach ($item as $data)
                                                    @php
                                                        $selected = "";
                                                        if(array_key_exists($data->id, $promo->list_tools['event'])) {
                                                            $selected = "selected='selected'";
                                                        }
                                                    @endphp
                                                    <option value="{{ $data->id }}" data-name="{{ $data->name }}" data-rate="{{ $data->rate }}" {{ $selected }}>{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- Error Notification --}}
                                            @if ($errors->has('event_item'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('event_item') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- #END# Multi Select Event-->

                                    <!-- Multi Select Post-Event -->
                                    <div class="card">
                                        <div class="card-header">
                                            POST-EVENT
                                        </div>
                                        <div class="card-body">
                                            <select id="post_item" name="post_item[]" class="ms optgroup {{ $errors->has('post_item') ? ' is-invalid' : '' }}" multiple="multiple">
                                                @foreach ($item as $data)
                                                    @php
                                                        $selected = "";
                                                        if(array_key_exists($data->id, $promo->list_tools['post'])) {
                                                            $selected = "selected='selected'";
                                                        }
                                                    @endphp
                                                    <option value="{{ $data->id }}" data<option value="{{ $data->id }}" data-name="{{ $data->name }}" data-rate="{{ $data->rate }}" {{ $selected }}>{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- Error Notification --}}
                                            @if ($errors->has('post_item'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('post_item') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- #END# Multi Select Post-Event-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-body">
                                    {{-- TABLE START --}}
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="table-item">
                                            <thead>
                                                <tr>
                                                    <td>Item List</td>
                                                    <td>Price</td>
                                                </tr>
                                            </thead>
                                            <tbody>{{-- Ajax --}}</tbody>
                                        </table>
                                        <div class="col-sm-4">
                                            <h6>Gross Total</h6>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Rp.
                                                </span>
                                            <input type="text" name="gross_total" value="{{ $promo->gross_total }}" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- TABLE END --}}

                                    {{-- START SV --}}
                                    <center>
                                        <div class="col-md-6" style="margin-top:25px; margin-bottom:25px;">
                                            <input id="ex6" name="sv" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="{{ $promo->sv }}" />
                                            <span id="ex6CurrentSliderValLabel">SV: <span id="ex6SliderVal">{{ $promo->sv }}</span>%</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Rp.
                                                </span>
                                                <input type="text" name="sv_total" value="0" class="form-control" readonly>
                                            </div>
                                            <input type="hidden" name="package_total" value="0">
                                        </div>
                                    </center>
                                    {{-- END --}}

                                    {{-- START PPN --}}
                                    <div class="col-sm-4" style="margin-top:20px;">
                                        <h6>PPN 10%</h6>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Rp.
                                            </span>
                                            <input type="text" name="ppn" value="0" class="form-control" readonly>
                                        </div>
                                    </div>
                                    {{-- END PPN --}}

                                    {{-- START GRAND TOTAL --}}
                                    <div class="col-sm-4" style="margin-top:20px;">
                                        <h6>TOTAL PACKAGE NETT</h6>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Rp.
                                            </span>
                                            <input type="text" name="grand_total" value="0" class="form-control" readonly>
                                        </div>
                                    </div>
                                    {{-- END GRAND TOTAL --}}

                                    {{-- START CONFIRMATION PAGE --}}
                                    <center>
                                        <div class="col-sm-8" style="margin-top:40px;">
                                            <div class="card">
                                                <div class="card-header">
                                                    <center>Confirmation Page</center>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select name="type_post" class="form-control {{ $errors->has('type_post') ? ' is-invalid' : '' }}" required>
                                                            <option value="ALL" @if($promo['type_post'] == 'ALL') selected="selected" @endif>All Page</option>
                                                            <option value="FRONT" @if($promo['type_post'] == 'FRONT') selected="selected" @endif>Front Page</option>
                                                            <option value="DEALS" @if($promo['type_post'] == 'DEALS') selected="selected" @endif>Deal Page</option>
                                                        </select>
                                                        {{-- Error Notification --}}
                                                        @if ($errors->has('type_post'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('type_post') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                    {{-- END CONFIRMATION PAGE --}}
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-round btn-outline" data-qt-block="body">Simpan Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('main')
@include('layouts._sidebar')
<style type="text/css" media="screen">
    .inline-block{
        display: inline-block;
    }
    .row2{
        padding-top: 30px !important;
    }
    .bor-right{
        border-right: 1px solid black;
    }

    .bor-left{
        border-left: 1px solid black;
    }
    .bor-top{
        border-top: 1px solid black;
    }
    .bor-bottom{
        border-bottom: 1px solid black;
    }
    td{
        font-size: 12px !important;
        vertical-align:middle !important;
    }
    .dot {
        height: 10px;
        width: 10px;
        background-color: cyan;
        border-radius: 50%;
        display: inline-block;
        margin-bottom: 5px;
    }

    .dot1 {
        height: 10px;
        width: 10px;
        background-color: hotpink;
        border-radius: 50%;
        display: inline-block;
        margin-bottom: 5px;
    }

    .kena_dot {
        margin-bottom: 5px;
    }
    .plank{
        -webkit-transition-property: top; /* Safari */
        -webkit-transition-duration: 0.2s; /* Safari */
        transition-property: top;
        transition-duration: 0.2s; 
        position: fixed !important; 
        top: -20px; 
        left: 0px; 
        z-index: 1;
        width: 100%;
        background-color: #fff
    }
    .add_top{
        top: 65px;
    }
</style>

@section('content')

<div class="container-fluid">
      
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    @include('layouts.task')
    <div class="header">
        <ol class="breadcrumb breadcrumb-bg-pink">
            <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
            <li class=""><i class="material-icons"></i>Master Intinerary</li>
            <li class="active"><i class="material-icons"></i>Rooming List & Passport List</li>
        </ol>
    </div>
    <div class="row clearfix ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h4 class="inline-block">
                        Rooming List & Passport List
                    </h4>
                </div>
                <div class="plank" >
                    <div class="col-sm-4">
                         
                    </div>
                    <div class="col-sm-5">
                        <table>
                            <caption>KETERANGAN</caption>
                            <tr>
                                <td><span class="dot" style="margin-bottom: 0px !important"></span></td>
                                <td>:</td>
                                <td>CHILD</td>
                            </tr>
                            <tr>
                                <td><span class="dot1" style="margin-bottom: 0px !important"></span></td>
                                <td>:</td>
                                <td>INFANT</td>
                            </tr>
                        </table>    
                    </div>
                    <div class="col-sm-3">
                        <table style="width: 100%;margin-bottom: 10px;">
                            <caption>DETAIL PAX</caption>
                            <tr>
                                <td width="100">ADULT</td>
                                <td>:</td>
                                <td>
                                    @php
                                        $adult = 0;
                                        for ($i=0; $i < count($booking); $i++) { 
                                            $adult+=$booking[$i]->db_total_adult;
                                        }
                                        echo $adult;
                                    @endphp
                                </td>
                            </tr>
                            <tr>
                                <td width="100">CHILD</td>
                                <td>:</td>
                                <td>
                                    @php
                                        $child = 0;
                                        for ($i=0; $i < count($booking); $i++) { 
                                            $child+=$booking[$i]->db_total_child;
                                        }
                                        echo $child;
                                    @endphp
                                </td>
                            </tr>
                            <tr>
                                <td width="100">INFANT</td>
                                <td>:</td>
                                <td>
                                    @php
                                        $infant = 0;
                                        for ($i=0; $i < count($booking); $i++) { 
                                            $infant+=$booking[$i]->db_total_infant;
                                        }
                                        echo $infant;
                                    @endphp
                                </td>
                            </tr>
                        </table>
                    </div>
                </div> 
                <div class="body table-responsive">
                    <div class="col-sm-12 keterangan_1">
                        <div class="col-sm-6">
                            <table>
                                <caption>KETERANGAN</caption>
                                <tr>
                                    <td><span class="dot" style="margin-bottom: 0px !important"></span></td>
                                    <td>:</td>
                                    <td>CHILD</td>
                                </tr>
                                <tr>
                                    <td><span class="dot1" style="margin-bottom: 0px !important"></span></td>
                                    <td>:</td>
                                    <td>INFANT</td>
                                </tr>
                            </table>    
                        </div>
                        <div class="col-sm-6">
                            <table style="width: 100%">
                                <caption>DETAIL PAX</caption>
                                <tr>
                                    <td>ADULT</td>
                                    <td>:</td>
                                    <td>
                                        @php
                                            $adult = 0;
                                            for ($i=0; $i < count($booking); $i++) { 
                                                $adult+=$booking[$i]->db_total_adult;
                                            }
                                            echo $adult;
                                        @endphp
                                    </td>
                                </tr>
                                <tr>
                                    <td>CHILD</td>
                                    <td>:</td>
                                    <td>
                                        @php
                                            $child = 0;
                                            for ($i=0; $i < count($booking); $i++) { 
                                                $child+=$booking[$i]->db_total_child;
                                            }
                                            echo $child;
                                        @endphp
                                    </td>
                                </tr>
                                <tr>
                                    <td>INFANT</td>
                                    <td>:</td>
                                    <td>
                                        @php
                                            $infant = 0;
                                            for ($i=0; $i < count($booking); $i++) { 
                                                $infant+=$booking[$i]->db_total_infant;
                                            }
                                            echo $infant;
                                        @endphp
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <form id="save">
                        <div class="col-sm-12">
                            <div class="col-sm-2">
                                TOUR LEADER
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control tl" name="tl">
                                    <option>Select Tour Leader</option>
                                    @foreach ($tl as $tl)
                                        <option @if ($detail_intinerary->md_tour_leader == $tl->tl_id)
                                            selected="" 
                                        @endif value="{{ $tl->tl_id }}">{{ $tl->tl_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-2">
                                Tip
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control mask tip" name="tip" value="{{ number_format( $detail_intinerary->md_tip, 0, ",", ".") }}">
                            </div>
                        </div>
                        <table class="table table-bordered intinerary" style="width: 100%;vertical-align: middle;" >
                            <tr style="vertical-align: middle; border: 1px solid black">
                                <th class="center row2" rowspan="2">No</th>
                                <th class="center row2" rowspan="2">Passenger Name</th>
                                <th class="center row2" rowspan="2">Gender</th>
                                <th class="center row2" rowspan="2">Room Type</th>
                                <th class="center" colspan="3">Passport</th>
                                <th class="center" colspan="2">Birth</th>
                                <th class="center row2" rowspan="2">Remark</th>
                            </tr>
                            <tr style="border: 1px solid black">
                                <th class="center">Passport Number</th>
                                <th class="center">Issued</th>
                                <th class="center">Expired</th>
                                <th class="center">Place</th>
                                <th class="center">Date</th>
                            </tr>
                            @php
                                $temp = 0;
                            @endphp
                            @if ($id == null)
                                <tr>
                                    <td colspan="10" style="vertical-align: middle !important; text-align: center">TIDAK ADA DATA</td>
                                </tr>
                            @endif
                            @foreach ($id as $i=>$awal)
                                @foreach ($room[$i] as $a=>$awal1)
                                    <tr class="bor-top">
                                        <td align="center">
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    @if ($akhir->dp_status_person == 'child')
                                                        <label style="padding-left: 10px !important">{{ $temp +=1 }}</label><span class="dot" ></span><br>
                                                    @elseif($akhir->dp_status_person == 'baby')
                                                        <label style="padding-left: 10px !important">{{ $temp +=1 }}</label><span class="dot1" ></span><br>
                                                    @else
                                                        <label>{{ $temp +=1 }}</label><span class=""></span><br>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)

                                                    <label class="kena_dot">{{ $akhir->dp_name }}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ $akhir->dp_gender }}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @php
                                                $temp1 = 0;
                                            @endphp
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    @if ($temp1 == 0)
                                                        @if ($bed[$i][$a] == 'doubletwin&cnb')
                                                        <label class="kena_dot">double/twin + child no bed</label><br>
                                                        @elseif ($bed[$i][$a] == 'doubletwin&cwb')
                                                        <label class="kena_dot">double/twin + child with bed</label><br>
                                                        @else
                                                        <label class="kena_dot">{{ $bed[$i][$a] }}</label><br>
                                                        @endif
                                                        @php
                                                            $temp1 = 1;
                                                        @endphp
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ $akhir->dp_passport }}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ $akhir->dp_issuing }}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ carbon\carbon::parse($akhir->dp_expired)->format('d/m/Y')}}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ $akhir->dp_birth_place }}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ carbon\carbon::parse($akhir->dp_birth_date)->format('d/m/Y')}}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($passenger as $akhir)
                                                @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                    <label class="kena_dot">{{ $akhir->dp_reference }}</label><br>
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            <tr>
                                
                            </tr>
                        </table>
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                    <div class="preview_pdf col-sm-4">
                                        <div>
                                            <button type="button" class="btn btn-info" onclick="PreviewImage(this,'final')" style="margin-top: 5px;"><i class="fa fa-eye"></i> Preview PDF</button>
                                        </div>
                                    </div>
                                    <div class="file-upload upl_3 col-sm-8  @if ($detail_intinerary->md_final != null)
                                            active
                                        @endif">
                                        <div class="file-select">
                                            <div class="file-select-button fileName" >Final Confirmation</div>
                                            <div class="file-select-name noFile">{{ $detail_intinerary->md_final or 'PDF NAME'}}</div> 
                                            <input type="file" class="chooseFile"  name="fc">
                                            <input type="hidden" value="{{ $detail_intinerary->md_id }}" name="id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            
                            <div class="col-sm-12">
                                <div class="preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                    <div class="preview_pdf col-sm-4">
                                        <div>
                                            <button type="button" class="btn btn-info" onclick="PreviewImage(this,'tt')" style="margin-top: 5px;"><i class="fa fa-eye"></i> Preview PDF</button>
                                        </div>
                                    </div>
                                    <div class="file-upload upl_3 col-sm-8 @if ($detail_intinerary->md_tata_tertib != null)
                                            active
                                        @endif">
                                        <div class="file-select">
                                            <div class="file-select-button fileName" >Tata Tertib</div>
                                            <div class="file-select-name noFile">{{ $detail_intinerary->md_tata_tertib or 'PDF NAME'}}</div> 
                                            <input type="file" class="chooseFile"  name="tt">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                        <div class="col-sm-9">
                            <div class=" col-sm-3">
                                <div>
                                    <a href="{{ route('print_excel', ['id' => $detail_intinerary->md_id]) }}" class="btn bg-red  waves-effect waves-float">
                                        <i class="material-icons">layers</i>
                                    Excel
                                    </a>
                                </div>
                            </div>
                            <div class=" col-sm-3">
                                <div>
                                    <a href="{{ route('print_pdf', ['id' => $detail_intinerary->md_id]) }}" class="btn bg-pink  waves-effect waves-float">
                                        <i class="material-icons">picture_as_pdf</i>
                                    Pdf
                                    </a>
                                </div>
                            </div>
                            <div class=" col-sm-3">
                                <div>
                                    <a href="{{ route('print_passport', ['id' => $detail_intinerary->md_id]) }}" class="btn bg-cyan  waves-effect waves-float">
                                        <i class="material-icons">layers</i>
                                    Passport
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class=" col-sm-4">
                                <div>
                                    <button type="button" class="btn btn-warning" onclick="saving()" style="margin-top: 5px;"><i class="fa fa-save"></i> Save data</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="preview_pdf" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h3 class="modal-title" id="largeModalLabel">Preview PDF</h3>
            </div>
            <div class="modal-body">
                <div style="clear:both;top: 20px;left: 180px" class="col-sm-12" >
                   <iframe id="viewer" frameborder="0" scrolling="no" width="400" height="600"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra_scripts')
<script>
    $(window).scroll(function(){
      if ($(this).scrollTop() > 390) {
        $('.plank').addClass('add_top');
      }else{
        $('.plank').removeClass('add_top');
      }
    });

    $('.tip').maskMoney({
        precision:0,allowZero:true,defaultZero:true,thousands:'.'
    })

    function PreviewImage(a,jenis) {
        try{
            var par = $(a).parents('.preview_div').find('.chooseFile');
            console.log(par);
            pdffile= $(par)[0].files[0];
            pdffile_url=URL.createObjectURL(pdffile);
            $('#viewer').attr('src',pdffile_url);
        }catch(err){
            if (jenis == 'final') {
                $('#viewer').attr('src','{{ asset('storage/app') }}'+'/'+'{{ $detail_intinerary->md_final }}');
            }else{
                $('#viewer').attr('src','{{ asset('storage/app') }}'+'/'+'{{ $detail_intinerary->md_tata_tertib }}');
            }
        }
        

        $('#preview_pdf').modal('show');
    }

        $('.chooseFile').bind('change', function () {
        var filename = $(this).val();
        var fsize = $(this)[0].files[0].size;
        if(fsize>1048576) //do something if file size more than 1 mb (1048576)
        {
          return false;
        }
        var parent = $(this).parents(".preview_div");
        if (/^\s*$/.test(filename)) {
            $(parent).find('.file-upload').removeClass('active');
            $(parent).find(".noFile").text("No file chosen..."); 
        }
        else {
            $(parent).find('.file-upload').addClass('active');
            $(parent).find(".noFile").text(filename.replace("C:\\fakepath\\", "")); 
        }
        load(parent,this);
    });

    function load(parent,file) {
        var fsize = $(file)[0].files[0].size;
        if(fsize>2048576) //do something if file size more than 1 mb (1048576)
        {
          iziToast.warning({
            icon: 'fa fa-times',
            message: 'File Is To Big!',
          });
          return false;
        }
        var reader = new FileReader();
        reader.onload = function(e){
            $(parent).find('.output').attr('src',e.target.result);
        };
        reader.readAsDataURL(file.files[0]);
    }
    function saving() {

        var form = $('#save');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }
        iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fas fa-question-circle',
            title: 'Save Data!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#32CD32;">Save</button>',
                function (instance, toast) {

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url:'{{ route('save_detail') }}',
                        data: formdata ? formdata : form.serialize(),
                        dataType:'json',
                        processData: false,
                        contentType: false,
                      success:function(data){
                        if (data.status == '1') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Success!',
                                message: 'Data Berhasil Disimpan!',
                            });

                        }else if (data.status == '0') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Error!',
                                message:data.message,
                            });

                        }
                      },error:function(){
                        iziToast.warning({
                            icon: 'fa fa-info',
                            position:'topRight',
                            title: 'Error!',
                            message: 'Terjadi Kesalahan!',
                        });
                      }
                    });
                    instance.hide({
                        transitionOut: 'fadeOutUp'
                    }, toast);
                }
            ],
            [
                '<button style="background-color:#44d7c9;">Cancel</button>',
                function (instance, toast) {
                  instance.hide({
                    transitionOut: 'fadeOutUp'
                  }, toast);
                }
              ]
            ]
        });
    }
</script>
@endsection
  

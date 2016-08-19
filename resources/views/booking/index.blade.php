@extends('layout.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">

    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="col-lg-12">
    	<div class="col-lg-5">
        	<div class="col-lg-12">
            	<div class="headsearch">ค้นหาห้อง</div>
                
                <form>
                    <div class="boxsearch">
                        <div class="col-lg-12">
                        	<div class="col-lg-2">
                            	วันที่
                            </div>
                            <div class="col-lg-3">
                                <select class="form-control" style="font-weight:normal">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control" style="font-weight:normal">
                                    @for ($i = 1; $i <= 31; $i++)
                            		<option class="">{{$i}}</option>
                            		@endfor
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-control" style="font-weight:normal">
                                    @for ($i = 1; $i <= 12; $i++)
                            		<option class="">{{$i}}</option>
                            		@endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <select id="selectYear" style="width:auto;" class="form-control selectWidth">
                            @for ($i = 1900; $i <= 2015; $i++)
                            <option class="">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                        <br>
                        เวลา <br>
                        จำนวนคน <br>
                    </div>
                </form>
                
            </div>
            <div class="col-lg-12">cccc</div>
        </div>
    	<div class="col-lg-7">
        	www
        </div>
    </div>

@endsection

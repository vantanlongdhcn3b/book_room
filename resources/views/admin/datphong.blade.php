@extends('admin.layouts.master')
@section('content')

<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <!-- <div class=""> -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Tour <small>Trang quản lí đặt phòng</small></h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Bảng điều khiển <small>Danh sách đặt phòng</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID </th>
                                        <th>Tên Khách</th>
                                        <th style="width:70px">Email</th>
                                        <th style="width:40px">Số Điện Thoại</th>
                                        <th style="width:70px">Địa Chỉ</th>
                                        <th style="width:40px">Thời Gian Đến</th>
                                        <th style="width:40px">Thời Gian Đi</th>
                                        <th style="width:40px">Người Lớn</th>
                                        <th style="width:40px">Trẻ Em</th>
                                        <th style="width:40px">Chú Thích</th>
                                        <th style="width:40px">Loại Phòng</th>
                                        <th style="width:17px"> Tình Trạng</th>
                                        <th style="width:17px">     </th>

                                    </tr>
                                </thead>
                                <tbody> 
                                
                                    @foreach($danhsach as $item)                                       
                                        <tr >
                                            <td>{!!$item->DatPhong_ID!!}</td>
                                            <td>{!!$item->TenKhach!!}</td>
                                            <td>{!!$item->Email!!}</td>
                                            <td>{!!$item->SDT!!}</td>
                                            <td>{!!$item->DiaChi!!}</td>
                                            <td>{!!$item->TGDen!!}</td>
                                            <td>{!!$item->TGdi!!}</td>
                                            <td>{!!$item->NguoiLon!!}</td>
                                            <td>{!!$item->TreEm!!}</td>
                                            <td>{!!$item->ChuThich!!}</td>
                                            @foreach($lp as $i)
                                                @if($i->LoaiPhong_ID===$item->LoaiPhong_ID)
                                                <td>{!!$i->Ten!!}</td>
                                                @endif
                                            @endforeach
                                            
                                            <td>{!!$item->TenKhach!!}</td>
                                            <td> <button style="outline:0;border:0;width:34px;background:none" type="submit" name="xoa">Xóa</button> </td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                          
                        </div>
                    </div>

                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- /page content -->
@stop
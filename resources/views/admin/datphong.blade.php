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
                                    </tr>
                                </thead>
                                <tbody> 
                                <!--
                                    include "../../../admin/function/tour/tour.php";
                                    $tour=new TXSTour();
                                    foreach($tour->HienThi() as $key => $value){
                                        echo 
                                        '<tr >
                                            <td>'.$value->id_tour.'</td>'.
                                            '<td>'.$value->name_tour.'</td>'.
                                            '<td>'.$value->place_start.'</td>'.
                                            '<td>'.$value->date_go.'</td>'.
                                            '<td>'.
                                                '<a href="detail_tour.php?id='.
                                                $value->id_tour.'"'.
                                                    '>Xem chi tiết'.
                                                '</a></td>'.
                                                '<td> <button style="outline:0;border:0;width:34px;background:none" type="submit" name="xoa"><img src="../../../assets/icon/delete.png" style="width:100%"></button> </td>'.  
                                        '</tr>';
                                     }
                                   -->
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
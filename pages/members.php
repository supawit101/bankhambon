<?php include 'menu.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ข้อมูลสมาชิก</h1>
                    <a href="index.php" class="btn btn-lg btn-success btn-block" style="width:100px;" >ย้อนกลับ</a> <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ข้อมูลสมาชิก
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>เลขที่บัญชี</th>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>การกระทำ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td><a href="" class="btn btn-lg btn-warning " style="width:100px;" >แก้ไข</a> <a href="" class="btn btn-lg btn-danger" style="width:100px;" >ลบ</a></td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td><a href="" class="btn btn-lg btn-warning " style="width:100px;" >แก้ไข</a> <a href="" class="btn btn-lg btn-danger" style="width:100px;" >ลบ</a></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
    <!-- /#wrapper -->
<?php include 'footer-table.php';?>

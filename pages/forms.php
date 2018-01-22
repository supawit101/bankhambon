<?php include 'menu.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ฝาก - ถอน เงินสด</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ข้อมูล ฝาก - ถอน เงินสด
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>เลขที่บัญชี หรือ รหัสสมาชิก</label>
                                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="เลขที่บัญชี หรือ รหัสสมาชิก">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                <i class="fa fa-search"> ตรวจสอบ</i>
                                </button>
                            </span>
                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>ประเภท</label>
                                            <select class="form-control">
                                                <option>ออมทรัพย์</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>จำนวนเงิน</label>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon">฿</span>
                                            <input type="text" class="form-control" placeholder="กรอกจำนวนเงิน">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        </div>
                                       
                                        <div class="form-group">
                                        <label>ผู้นำฝาก</label>
                                            <input class="form-control" placeholder="กรอกชื่อผู้นำฝาก">
                                        </div>
                                        <div class="form-group">
                                            <label>หมายเหตุ</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">ฝาก</button>
                                        <button type="submit" class="btn btn-default">ถอน</button>
                                    </form>
                                </div>

                                <div class="col-lg-6">
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> ยอดเงินคงเหลือ
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<?php include 'footer.php';?>

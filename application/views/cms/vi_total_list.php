﻿<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                顧客・ペット一覧管理ページ
                <small>新規顧客・ペット一覧登録はここから</small>
            </h2>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>顧客一覧</h2>
                        <a href="customer_table">
                            <button type="btn" class="btn btn-primary m-t-15 waves-effect">新規登録</button>
                        </a>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <form action="customer_validation" method="POST">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>顧客名</th>
                                            <th>ペット名</th>
                                            <th>住所</th>
                                            <th>電話番号</th>
                                            <th>メールアドレス</th>
                                            <th>最終予約日</th>
                                            <th>設定</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>孫悟空</td>
                                            <td>忍者わんわん</td>
                                            <td>荒野町1-1</td>
                                            <td>090-0000-1111</td>
                                            <td>kakarot@kamehouse.com</td>
                                            <td>2019-07-01</td>
                                            <td>
                                                <button type="btn"
                                                    class="btn btn-primary m-t-15 waves-effect">詳細</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>カリン様</td>
                                            <td>ヤジロベー</td>
                                            <td>カリン塔1-1</td>
                                            <td>080-0000-1111</td>
                                            <td>karin@karintower.com</td>
                                            <td>2019-07-01</td>
                                            <td>
                                                <button type="btn"
                                                    class="btn btn-primary m-t-15 waves-effect">詳細</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>神様</td>
                                            <td>ミスターポポ</td>
                                            <td>神殿1－1</td>
                                            <td>070-0000-1111</td>
                                            <td>got@gothouse.com</td>
                                            <td>2019-07-01</td>
                                            <td>
                                                <button type="btn"
                                                    class="btn btn-primary m-t-15 waves-effect">詳細</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- #END# Exportable Table -->
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../assets/cms/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../assets/cms/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../assets/cms/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../assets/cms/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../assets/cms/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../assets/cms/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../assets/cms/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="../assets/cms/js/admin.js"></script>
<script src="../assets/cms/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../assets/cms/js/demo.js"></script>
</body>

</html>
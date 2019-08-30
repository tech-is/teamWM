﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ペットカルテ</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/cms/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../assets/cms/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/cms/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/cms/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../assets/cms/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../assets/cms/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../assets/cms/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/cms/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="../assets/cms/plugins/jquery-ui-1.12.1.custom/datepicker-ja.js" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/ja.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.min.js"></script>

    <link href="../assets/cms/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="../assets/cms/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <style>
        .thumb {
            height: 175px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
        }
    </style>


</head>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    ペット情報
                    <small>顧客情報はここから->  <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>ペット詳細</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                        <div class="body">
                            <form action="cl_pet_info/pet_info_validation" id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pet_name" required>
                                        <label class="form-label">名前</label>
                                    </div>
                                </div>
                                <!-- File Upload | Drag & Drop OR With Click & Choose -->
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>写真</h2>
                                                </div>
                                                <div class="body">
                                                    <input type="file" id="files" name="" multiple />
                                                    <output id="list"></output>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group form-float">
                                     <div class="form-line">
                                        <input type="text" class="form-control" name="pet_classification" required>
                                        <label class="form-label">分類</label>
                                     </div>
                                    <div class="help-info">犬、猫、鳥</div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="classification" required>
                                    <label class="form-label">分類</label>
                                </div>
                                <div class="form-group">
                                  <div class="form-line">
                                    <input type="radio" name="pet_animal_gender" id="male" value="1" class="with-gap" checked/>
                                    <label for="male">オス</label>

                                    <input type="radio" name="pet_animal_gender" id="female" value="2" class="with-gap">
                                    <label for="female" class="m-l-20">メス</label>

                                    <input type="radio" name="pet_animal_gender" id="other" value="3" class="with-gap">
                                    <label for="other" class="m-l-20">その他</label>
                                    </div>
                                </div>
                                      <div class="form-group">
                                        <div class="form-line">
                                            <label for="date">生年月日</label>
                                            <input id="date" name="pet_birthday" class="form-control" type="date" >
                                        </div>
                                      </div>
                                <div class="form-group">
                                    <div class="form-line">
                                    <label class="with-gap">去勢</label>
                                    <input type="radio" name="pet_contraception" id="on" value="1" class="with-gap">
                                    <label for="on">有</label>
                                    <input type="radio" name="pet_contraception" id="off" value="2" class="with-gap" checked/>
                                    <label for="off">無</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pet_body_height" required>
                                        <label class="form-label">体高</label>
                                    </div>
                                    <div class="help-info">cm</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pet_body_weight" required>
                                        <label class="form-label">体重</label>
                                    </div>
                                    <div class="help-info">kg</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="pet_information" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">備考：</label>
                                    </div>
                                </div>
                                    <button class="btn btn-primary waves-effect" type="submit">新規登録</button>
                                    <button class="btn btn-primary waves-effect" type="reset">クリア</button>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label class="">最終予約日：</label><br>
                                            < class="reservation form-control" name="" type="date" placeholder="最終予約日">
                                        </div>
                                    </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= isset($text)? $text: false; ?>
    <!-- Dropzone Plugin Js -->

    </div>
</section>
<!-- Dropzone Plugin Js -->
<script src="../assets/cms/plugins/dropzone/dropzone.js"></script>

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

<!-- Autosize Plugin Js -->
<script src="../assets/cms/plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="../assets/cms/plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/ja.js"></script>
<script src="../assets/cms/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<!-- <script src="../assets/cms/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> -->

<!-- Custom Js -->
<script src="../assets/cms/js/admin.js"></script>
<script src="../assets/cms/js/pages/forms/basic-form-elements.js"></script>
<script src="../assets/cms/js/pages/forms/advanced-form-elements.js"></script>
<script>
    function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {

            // Only process image files.
            if (!f.type.match('image.*')) {
                continue;
            }

            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function (theFile) {
                return function (e) {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML = ['<img class="thumb" src="', e.target.result,
                        '" title="', escape(theFile.name), '"/>'].join('');
                    document.getElementById('list').insertBefore(span, null);
                };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
    }

    document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>

<!-- Demo Js -->
<script src="../assets/cms/js/demo.js"></script>
</body>

</html>
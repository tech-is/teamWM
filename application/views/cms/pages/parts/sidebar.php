<?php
    $url = explode("/", $_SERVER['REQUEST_URI']);
    $req = end($url);
    $sidebar_parts_array = [
        "home" => [
            "icon" => "home",
            "title" => "ホーム",
            "target" => false
        ],
        "total_list" => [
            "icon" => "pets",
            "title" => "顧客・ペット管理",
            "target" => false
        ],
        "reserve" => [
            "icon" => "today",
            "title" => "予約管理",
            "target" => false
        ],
        "staff" => [
            "icon" => "group",
            "title" => "スタッフ管理",
            "target" => false
        ]
        // "magazine" => [
        //     "icon" => "contact_mail",
        //     "title" => "メルマガ管理",
        //     "target" => false
        // ],
        // "Karute" => [
        //     "icon" => "book",
        //     "title" => "受け付けモード",
        //     "target" => false
        // ],
        // "Karte_history" => [
        //     "icon" => "create_new_folder",
        //     "title" => "カルテ",
        //     "target" => false
        // ],
        // "/assets/plugins/php_barcode-master/barcode.php" => [
        //     "icon" => "format_list_numbered_rtl",
        //     "title" => "バーコード",
        //     "target" => "_blank"
        // ]
    ];
?>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <!-- <img src="<?php echo base_url('assets/cms/images/user.png') ?>"
                width="48" height="48" alt="User" /> -->
        </div>
        <div class="info-container">
            <div id="account_name" class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo @$_SESSION['name']?:null ?>様</div>
            <div id="account_email" class="email"><?php echo @$_SESSION['email']?:null ?></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="https://www.animarl.com/Profile"><i class="material-icons">person</i>プロフィール変更</a></li>
                    <li><a href="https://www.animarl.com/login/logout"><i class="material-icons">input</i>ログアウト</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <?php foreach ($sidebar_parts_array as $sidebar_url => $sidebar_parts): ?>
            <?php echo $req === $sidebar_url? '<li class="active">': '<li>'; ?>
            <a href="<?php echo base_url($sidebar_url); ?>" <?php echo $sidebar_parts['target']?' target='.$sidebar_parts['target'].'':null; ?>">
                <i class="material-icons"><?php echo $sidebar_parts["icon"] ?></i>
                <span><?php echo $sidebar_parts["title"]; ?></span>
            </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
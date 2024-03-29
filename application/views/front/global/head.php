<?php
$meta_title = isset($meta_title) ? $meta_title : "";
$meta_image = isset($meta_image) ? $meta_image : "";
$meta_site_name = isset($meta_site_name) ? $meta_site_name : "";
$meta_desc = isset($meta_desc) ? $meta_desc : "";
// $ip=getenv(remote_addr);
// $date=getdate(date(“U”));
// $day=$date[mday];
// $month=$date[month];
// $year=$date[year];
// if (!isset($_COOKIE[“visitor”]))
// {
// setcookie(“visitor”, “$ip”, time() +3600);
// mysql_connect(“localhost”, “root”, “”); //sesuaikan host, user, dan password-nya !
// mysql_select_db(“db_siapx”) or die(mysql_error()); //sesuaikan nama database-nya
// mysql_query(“INSERT INTO counter(ip, user_agent, tanggal) VALUES(‘$ip’, ‘$_SERVER[HTTP_USER_AGENT]’, ‘$day/$month/$year’)”);
// }
?>

    <head>
        <meta charset="utf-8" />
        <title>E-DOKUMENTASI</title>
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TPMD3ZP');</script>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="description" content="Sistem Aplikasi Dokumentasi Kegiatan">
        <meta content="Siap Kawal Kota Pekalongan" name="Sistem Aplikasi Dokumentasi Kegiatan" />
        <meta name="author" content="Harliyan Tri Mardian" />
        <meta name="keywords" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
        <!-- meta facebook -->
        <meta property="og:title" content="<?php echo $meta_title;?>"/>
        <meta property="og:image" content="<?php echo $meta_image;?>"/>
        <meta property="og:site_name" content="<?php echo $meta_site_name;?>"/>
        <meta property="og:description" content="<?php echo $meta_desc;?>"/> 

        <!-- icon -->
        <link rel="shortcut icon" href="<?php print base_url('Shards-Dashboard'); ?>/boy.ico" type="image/x-icon">
        <link rel="icon" href="<?php print base_url('Shards-Dashboard'); ?>/boy.ico" type="image/x-icon">
        
        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Kalam|Pacifico|Russo+One&display=swap" rel="stylesheet">

        <!-- Custom box css -->
        <link href="<?php print base_url('highfront/admin/'); ?>plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- lightbox -->
        <link href="<?php print base_url('lightbox'); ?>/dist/css/lightbox.css" rel="stylesheet">

        <!-- App css -->
        <link href="<?php print base_url('highfront/admin/horizontal/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php print base_url('highfront/admin/horizontal/'); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php print base_url('highfront/admin/horizontal/'); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/modernizr.min.js"></script>
        <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.min.js"></script>

        <script src="https://balkangraph.com/js/latest/OrgChart.js"></script>
    </head>

    
    

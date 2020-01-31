<!-- jQuery -->
<script src="<?php print base_url('adminlte'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php print base_url('adminlte'); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php print base_url('adminlte'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php print base_url('adminlte'); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php print base_url('adminlte'); ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="<?php print base_url('adminlte'); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php print base_url('adminlte'); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?php print base_url('adminlte'); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php print base_url('adminlte'); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php print base_url('adminlte'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php print base_url('adminlte'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php print base_url('adminlte'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php print base_url('adminlte'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php print base_url('adminlte'); ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php print base_url('adminlte'); ?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php print base_url('adminlte'); ?>/dist/js/demo.js"></script>

  <script type="text/javascript">
       console.log("%charliyan321@gmail.com", "color: black;");
       console.log("%c2019", "color: black;");

        var chart = new OrgChart(document.getElementById("tree"), {
        mouseScrool: OrgChart.action.none,
        enableDragDrop: true,
        nodeMouseClick: OrgChart.action.edit,
        nodeMenu: {
            details: { text: "Details" },
            edit: { text: "Edit" },
            add: { text: "Add" },
            remove: { text: "Remove" }
        },
        dragDropMenu: {
            addInGroup: { text: "Add in group" },
            addAsChild: { text: "Add as child" }
        },
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img"
        },
        tags: {
            pasutri1: {
                group: true,
                groupName: "Pasangan Suami Istri",
                groupState: OrgChart.EXPAND,
                template: "group_grey"
            },
             pasutri2: {
                group: true,
                groupName: "Pasangan Suami Istri",
                groupState: OrgChart.EXPAND,
                template: "group_grey"
            },
        },
        // <?php 
        //   $nodes = array(
        //     array(
        //       'id' => 1,
        //        'tags' => array(
        //        )
        //     )
        //   )
        //  ?>

        nodes: [
            { id: 1, tags: ["pasutri1"], name: "Billy Moore", title: "CEO", img: "https://cdn.balkan.app/shared/2.jpg" },
            { id: 2, tags: ["pasutri1"], name: "Marley Wilson", title: "Director", img: "https://cdn.balkan.app/shared/3.jpg" },
            { id: 4, pid: 1, name: "Billie Rose", title: "Dev Team Lead", img: "https://cdn.balkan.app/shared/5.jpg" },
            { id: 5, pid: 1, tags: ["pasutri2"], name: "Glenn Bell", title: "HR", img: "https://cdn.balkan.app/shared/10.jpg" },
            { id: 6, pid: 1, tags: ["pasutri2"], name: "Blair Francis", title: "HR", img: "https://cdn.balkan.app/shared/11.jpg" },
            { id: 7, pid: 6, name: "Blair Francis", title: "HR", img: "https://cdn.balkan.app/shared/11.jpg" },
        ]
    });

     </script>
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

    $(document).ready(function(){
        var tmps = <?php echo json_encode($keluarga); ?>;
        var datas = [];
        var _tag = {};

        tmps.forEach((item,index) => {
          datas.push({
            id: item.id,
            title : item['title'],
            name : item['nama'],
            pid : item['parent_id'],
            tags: [item[ 'tags' ]],
            img: "<?php print base_url('uploads/')?>"+item['foto']
          });

          _tag['tag'+item.id] = {
            group: true,
            groupName: item['status'],
            groupState: OrgChart.EXPAND,
            template: "group_grey"
          };
        });
        console.log(datas);
        chart(_tag,datas);
        
    });

    function chart(_tag, datas)
    {
        var chart = new OrgChart(document.getElementById("tree1"), {
          // mouseScrool: OrgChart.action.none,
          enableDragDrop: true,
          nodeMouseClick: OrgChart.action.edit,
          // dragDropMenu: {
          //     addInGroup: { text: "Add in group" },
          //     addAsChild: { text: "Add as child" }
          // },
          nodeBinding: {
              field_0: "name",
              field_1: "title",
              img_0: "img"              
          },
          tags: _tag,
          nodes: datas
      });
    }
        
</script>

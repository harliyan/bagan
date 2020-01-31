<style>

  .icon-bar {
    position: fixed;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-35%);
  }

  .icon-bar a {
    display: block;
    text-align: center;
    padding: 8px;
    transition: all 0.3s ease;
    color: white;
    font-size: 16px;
  }

  .icon-bar a:hover {
    background-color: #000;
  }

  .facebook {
    background: #3B5998;
    color: white;
  }

  .twitter {
    background: #55ACEE;
    color: white;
  }

  .instagram {
    background: #dd4b39;
    color: white;
  }


  .youtube {
    background: #bb0000;
    color: white;
  }

  .content {
    margin-left: 75px;
    font-size: 30px;
  }
</style>

<!--  <div class="icon-bar">
 <a href="https://www.facebook.com/HumasPemkotPekalongan" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/HumasPemkotPkl" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.instagram.com/humaspemkotpekalongan/" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://www.youtube.com/channel/UCfs4U9SM6I8HLUb9zK1RmpQ" class="youtube"><i class="fa fa-youtube"></i></a> 

</div> -->

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        E-Dokumentasi - contact : harliyan321@gmail.com<span class="d-none d-sm-inline-block"></span>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->

<script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/waves.js"></script>
<script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.slimscroll.js"></script>

<script src="<?php print base_url('highfront/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php print base_url('highfront/admin/'); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php print base_url('highfront/admin/'); ?>plugins/datatables/dataTables.responsive.min.js"></script>

<!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
      <![endif]-->
      <script src="<?php print base_url('highfront/admin/'); ?>plugins/jquery-knob/jquery.knob.js"></script>

      <!-- Modal-Effect -->
      <script src="<?php print base_url('highfront/admin/'); ?>plugins/custombox/js/custombox.min.js"></script>
      <script src="<?php print base_url('highfront/admin/'); ?>plugins/custombox/js/custombox.legacy.min.js"></script>

      <!-- App js -->
      <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.core.js"></script>
      <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.app.js"></script>

      <script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
        } );
      </script>

      <script type="text/javascript">
       console.log("%charliyan321@gmail.com", "color: black;");
       console.log("%c2019", "color: black;");


       var chart = new OrgChart(document.getElementById("tree"), {
        mouseScrool: OrgChart.action.none,
        nodeMouseClick: OrgChart.action.edit,
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
        { id: 1, tags: ["pasutri1"], name: "Billy Moore", title: "Bapak", img: "<?php base_url('/bagan/') ?>adminlte/boy.png" },
        { id: 2, tags: ["pasutri1"], name: "Marley Wilson", title: "Ibu", img: "https://cdn.balkan.app/shared/3.jpg" },
        { id: 4, pid: 1, name: "Billie Rose", title: "Dev Team Lead", img: "https://cdn.balkan.app/shared/5.jpg" },
        { id: 5, pid: 1, tags: ["pasutri2"], name: "Glenn Bell", title: "HR", img: "https://cdn.balkan.app/shared/10.jpg" },
        { id: 6, pid: 1, tags: ["pasutri2"], name: "Blair Francis", title: "HR", img: "https://cdn.balkan.app/shared/11.jpg" },
        { id: 7, pid: 6, name: "Blair Francis", title: "HR", img: "https://cdn.balkan.app/shared/11.jpg" },
        ]
      });

    </script>
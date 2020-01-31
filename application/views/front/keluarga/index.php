  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    html, body{
      padding: 0;
      margin:10;
      overflow: ;
      font-family: Helvetica;
    }
    #tree{
      width:100%;
      height:100%;
    }
  </style>
  <div class="wrapper">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="btn-group float-right">
              <ol class="breadcrumb hide-phone p-0 m-0">
                <li class="breadcrumb-item"><a href="../">Home</a></li>
                <li class="breadcrumb-item">Struktur Keluarga</li>
              </ol>
            </div>
            <h4 class="page-title">Struktur Keluarga</h4>
            <div class="card mt-4">
              <h2 class="text-center mt-4">Struktur Keluarga</h2>
              <div id="tree" class="mb-4" />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="pt-3 pb-4">
            <form method="post">
              <div class="input-group">
              </div>
            </form>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
  </div>
</div>
<br>
</div>
</div>

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
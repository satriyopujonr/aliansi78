  <?php
    require ('head.php');
    require ('navbar.php');
  ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <?php
    $CONP = number_format(($CON/$JI)*100,3);
    $UNCONP = number_format(($UNCON/$JI)*100,3);
    $dataPoints = array(
      array("y" => $CONP, "name" => "Confirmed"),
      array("y" => $UNCONP, "name" => "UnPaid"),
    );
  ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="count"><?= $JP?></div>
                  <h3>Jumlah Produk</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-tag"></i></div>
                  <div class="count"><?= $JK?></div>
                  <h3>Jumlah Category</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?= $JPEL?></div>
                  <h3>Jumlah Pelanggan</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count"><?= $JI?></div>
                  <h3>Total Invoice</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 ">
                <div id="chartContainer"></div>

                  <div class="x_title">
                    <h2>Line graph<small>Sessions</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  </div>

              </div>

              <div class="col-md-6 ">
                <div id="chartContainer2"></div>

                  <div class="x_title">
                    <h2>Line graph<small>Sessions</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  </div>

              </div>

            </div>
















          </div>
        </div>

        <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Rekap Penjualan"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
		dataPoints: [
			{ x: 1, y: <?= $R1?>, label: "Januari" },
			{ x: 2, y: <?= $R2?>, label: "Februari" },
			{ x: 3, y: <?= $R3?>, label: "Maret" },
			{ x: 4, y: <?= $R4?>, label: "April" },
			{ x: 5, y: <?= $R5?>, label: "Mei" },
			{ x: 6, y: <?= $R6?>, label: "Juni" },
			{ x: 7, y: <?= $R7?>, label: "Juli" },
			{ x: 8, y: <?= $R8?>, label: "Agustus" },
			{ x: 9, y: <?= $R9?>, label: "September" },
			{ x: 10, y: <?= $R10?>, label: "Oktober" },
			{ x: 11, y: <?= $R11?>, label: "November" },
			{ x: 12, y: <?= $R12?>, label: "Desember" }
		]
	}]
});
chart.render();

}

</script>

        <script type="text/javascript">
        $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
          theme: "theme2",
          title:{
            text: "Grafik Status Invoice  "
          },
          exportFileName: "New Year Resolutions",
          exportEnabled: true,
          animationEnabled: true,
          data: [
          {
            type: "pie",
            showInLegend: true,
            toolTipContent: "{name}: <strong>{y}%</strong>",
            indexLabel: "{name} {y}%",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
          }]
        });
        chart.render();
        });
        </script>
        <!-- /page content -->

        <?php
          require ('footer.php');
        ?>

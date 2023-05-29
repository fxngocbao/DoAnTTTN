 
        <meta charset="UTF-8">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load('visualization', '1.0', {'packages':['corechart']});
     google.setOnLoadCallback(drawVisualization);
     function drawVisualization() {
		 				//thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
    // b1: có bảng
    var data=new google.visualization.DataTable();
    var tenhh=new Array();
    var soluongban=new Array();
    var datahh=0;
    var slb=0;
    var rows=new Array();
    
    // Lấy ra dòng
    <?php
      $hh=new hanghoa();
      $result=$hh->getThongKeMatHang();
      while($set=$result->fetch())
      {
        $tenhh=$set['tenhh'];
        $soluong=$set['soluong'];
        echo "tenhh.push('".$tenhh."');";
        echo "soluongban.push('".$soluong."');";
      }
    ?>
    // tạo dòng
    for(var i=0; i<tenhh.length; i++)
    {
      datahh=tenhh[i];
      slb=parseInt(soluongban[i]);
      rows.push([datahh,slb]);
    }
    // cột
    data.addColumn('string',"Tên hàng hóa");
    data.addColumn('number',"Số lượng bán");
    data.addRows(rows);
    //b2: option
    var option={
      tittle:'Thống kê sản phẩm bán được',
      'width':600,
      'height':400,
      'backgroundColor':'#ffffff',
      is3D:true
    };
    // b3: tiến hành vẽ
    var chart=new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, option);
	 }
                   
    </script>
        <div class="thongke">
        <div style=" width:50%;  float: left;"   id="chart_div">dfsf</div>
        <div style=" width:50%;  float: right"   id="chart_div1">dsfd</div>    
      </div>
 
 
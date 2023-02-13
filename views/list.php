<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Dashboard</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
              
                </div>
            </div>
			
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
           <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
                <div class="row">
				
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
					<h4 class="card-title">Data Materi</h4>
			
           <canvas id="myChart"></canvas>
        
		</div>
		</div>
		</div>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
$(document).ready(function() {
tabel();
window.setInterval(function(){
tabel();
}, 5000);
});

function tabel(){
 $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>grafik/data_data',
                async : true,
                dataType : 'json',
                success : function(data){
				console.log(data);
                    var label = [];
                    var value = [];
					
                    for (var i in data) {
						label.push(data[i].data1);
                        value.push(data[i].data1);
						
                    }
// Mulai buat Grafik
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
 
     data: {
                            labels: label,
                            datasets: [{
                                label: 'Jumlah Peraturan Daerah',
                                backgroundColor: 'rgb(252, 116, 101)',
                                borderColor: 'rgb(255, 255, 255)',
                                data: value
                            }]
                        },
	options: {
	  scales: {
        yAxes: [{
            display: true,
            stacked: true,
            ticks: {
                min: 0, // minimum value
               
            }
        }]
    }
    
	}
});
}
});
}
  </script>

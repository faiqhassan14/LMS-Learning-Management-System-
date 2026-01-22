<div class="shadow-sm rounded-3 mt-5 p-4">
    <h4>Overall Class Performance</h4>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Advanced',     11],
          ['Below avg',      7],
          ['Average',    2]
        ]);

        var options = {
          title: 'Skill Profeciancy'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 440px; height: 250px;"></div>
    <h5>Average Students</h5>
    <div>
       <div class="d-flex align-items-center justify-content-between">
       <div class="d-flex align-items-center justify-content-around gap-2 mt-2" style="height: 55px;">
          <div class="rounded-pill overflow-hidden" style="width: 55px; height: 55px; border: 1px solid #8338EB;">
             <img class="m-auto" src="https://i.pinimg.com/736x/4d/d8/ca/4dd8ca16d3aab895358b944024e92a08.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
          </div>
          <div class="d-flex flex-column my-auto">
            <div>Tariq</div>
            <p>Mark Percentage: <span style="color: #FF9900;">55.5%</span></p>
          </div>
       </div>
       <button class="btn text-white rounded-5" style="background-color: #8338EB; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">View</button>
       </div>
       <div class="d-flex align-items-center justify-content-between">
       <div class="d-flex align-items-center justify-content-around gap-2 mt-2" style="height: 55px;">
          <div class="rounded-pill overflow-hidden" style="width: 55px; height: 55px; border: 1px solid #8338EB;">
             <img class="m-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZdtVdm_m3lkavBna_Za0Pr4rprd3uMppukw&s" style="width: 100%; height: 100%; object-fit: cover;" alt="">
          </div>
          <div class="d-flex flex-column my-auto">
            <div>Hamdan</div>
            <p>Mark Percentage: <span style="color: #FF9900;">60.1%</span></p>
          </div>
       </div>
       <button class="btn text-white rounded-5" style="background-color: #8338EB; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">View</button>
       </div>
       <div class="d-flex align-items-center justify-content-between">
       <div class="d-flex align-items-center justify-content-around gap-2 mt-2" style="height: 55px;">
          <div class="rounded-pill overflow-hidden" style="width: 55px; height: 55px; border: 1px solid #8338EB;">
             <img class="m-auto" src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 100%; height: 100%; object-fit: cover;" alt="">
          </div>
          <div class="d-flex flex-column my-auto">
            <div>Sameer</div>
            <p>Mark Percentage: <span style="color: #FF9900;">61.1%</span></p>
          </div>
       </div>
       <button class="btn text-white rounded-5" style="background-color: #8338EB; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">View</button>
       </div>
    </div>
</div>
<?php
   session_start();
   include "config.php";
   include "psiteAuth.php";
   include "stats.php";
?>


   <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="Chart.min.js"></script>
  <title>TED-Program Coordinator</title>

</head>

<body>
  <!-- START HERE -->
<div class="bg-light text-center">
<nav class="navbar navbar-expand-sm">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <ul class="navbar-nav">
          <li class="nav-item">
          <form action='index.php'>
          <button class="btn btn-danger"  style="font-size:18px">Sign Out <i class="fa fa-sign-out"></i></button>
          </form>
          </li>
        </ul>
      </div>
    </nav>
      <h1 class="display-4 text-danger">Welcome Program Coordinator!</h1>
      <br>
      <dl>
  <dt >In this section, you will find :</dt>
  <dd>(1) the average online learning readiness score for all the students enrolled in this program,</dd>
  <dd>(2) the average online learning readiness scores of each site.</dd>
  </dl>
      </div>
<span class="d-block bg-dark text-white p-2 mb-3"><h1 class = "text-center">Program Average Online Learning Readiness Level</h1></span>
<div class= "container">
<p>In <b>June <?php echo date( 'Y'); ?></b>,<b> <?php echo $row_cnt; ?> </b>students completed the online learning readiness survey. The average score of the students is <b> <?php echo $mean; ?></b>, and the standard deviation is <b> <?php echo $std; ?> </b>. The average score of each dimension is presented in the polar chart. 
</p>
<canvas id="chart-area" width="400" height="190"></canvas>
<br>
<br>
</div>
<span class="d-block bg-dark text-white p-2 mb-3"><h1 class = "text-center">Site Comparison : Online Learning Readiness Level
</h1></span>
<div class="container">
<p>In <b>June <?php echo date( 'Y'); ?></b>, students from <b><?php echo $nsite; ?></b> sites completed the online learning readiness survey. The average score of each site and the average score of each dimension of each site is presented in the bar charts below. 
</p>
<div class="table-responsive-sm mt-4 mb-5">  
       
 <table class="table table-bordered text-center">
    <thead>
      <tr>
      <th>Site</th>
<th>GP</th>
<th>Dal</th>
<th>Hou</th>
<th>AUS</th>
<th>ALD</th>
<th>FW</th>
<th>Hill</th>
<th>SA</th>
<th>NC</th>
      </tr>
    </thead>
    <tbody>
    <?php 

if ($row_cnt > 0) {
    // output data of each row
        echo "<tr><td>" . $row_cnt. "</td><td>" . $row_cnt_gp. "</td><td> " .$row_cnt_dal. " </td><td>" .$row_cnt_hou. " </td><td>" .$row_cnt_aus. " </td><td>" .$row_cnt_ald. " </td><td>" .$row_cnt_fw. " </td><td>" .$row_cnt_hill. " </td><td>" .$row_cnt_sa. " </td><td>" . $row_cnt_nc. "</td></tr>";
    
    echo "</tbody></table>";
} else {
    echo "0 results";
}

$conn->close();
  $conn->close();
?>
  </div>
  <!-- bar chart for average total-->
  <canvas id="bar-chart_total" width="800" height="450"></canvas>

<br>
  <div class="row">
      <div class="col-sm-6">
      <canvas id="bar-chart_lm" width="800" height="850"></canvas>
      </div>
      <div class="col-sm-6" >
      <canvas id="bar-chart_rm" width="800" height="850"></canvas>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-6">
      <canvas id="bar-chart_im" width="800" height="850"></canvas>
      </div>
      <div class="col-sm-6" >
      <canvas id="bar-chart_mm" width="800" height="850"></canvas>
      </div>
    </div>

<br>
<br>
</div>
</div>

<!-- Polar Chart -->
<script>
angles = [
  Math.PI / 4,
  Math.PI / 4,
  Math.PI / 6,
  Math.PI / 6,
  Math.PI / 6,
  Math.PI / 4,
  Math.PI / 4,
  Math.PI / 4,
  Math.PI / 4
];
var backgroundColor = 'white';
Chart.plugins.register({
  afterRender: function(c) {
    console.log('afterRender called');
    var ctx = c.chart.ctx;
    ctx.save();
    // This line is apparently essential to getting the
    // fill to go behind the drawn graph, not on top of it.
    // Technique is taken from:
    // https://stackoverflow.com/a/50126796/165164
    ctx.globalCompositeOperation = 'destination-over';
    ctx.fillStyle = 'white';
    ctx.fillRect(0, 0, c.chart.width, c.chart.height);
    ctx.restore();
  }
});
var config = {
  data: {
    labels: [
      'Goal Setting',
      'Monitoring',
      'Time Management',
      'Space Management',
      'Technology Management',
      'Interaction with the Instructor',
      'Interaction with the Peers',
      'Effort Regulation',
      'Mastery Self-Talk'
    ],
    datasets: [
      {
        data: [<?php echo $gst; ?>,
         <?php echo $mot; ?>,
         <?php echo $tmt; ?>, 
         <?php echo $smt; ?>, 
         <?php echo $temt; ?>, 
         <?php echo $iit; ?>, 
         <?php echo $pit; ?>, 
         <?php echo $ert; ?>, 
         <?php echo $mst; ?>],
        borderColor: 'white',
        borderWidth: 2,
        backgroundColor: [
          'rgb(112,193,179)',
          'rgb(84,144,134)',
          'rgb(254, 240, 117)',
          'rgb(239, 213, 92)',
          'rgb(251, 221, 92)',
          'rgb(22, 75, 98)',
          'rgb(31, 107, 139)',
          'rgb(242,95,92)',
          'rgb(244, 116, 113)'
        ],
        hoverBackgroundColor: [
          'rgba(112,193,179,0.8)',
          'rgba(84,144,134,0.8)',
          'rgba(254, 240, 117,0.8)',
          'rgba(239, 213, 92,0.8)',
          'rgba(251, 221, 92,0.8)',
          'rgba(22, 75, 98,0.8)',
          'rgba(31, 107, 139,0.8)',
          'rgba(242,95,92,0.8)',
          'rgba(244, 116, 113,0.8)'
        ]
      }
    ]
  },
  options: {

    plugins: {
      datalabels: {
        display: false
      }
    },

    hover: {
      onHover: function(e) {
        var point = this.getElementAtEvent(e);
        if (point.length) e.target.style.cursor = 'pointer';
        else e.target.style.cursor = 'default';
      },
      mode: 'nearest',
      intersect: true
    },
    elements: {
      arc: {
        angle: angles
      }
    },

    responsive: true,
    legend: {
      onClick: null,
      display: true,
      position: 'left',
      align: 'center',
      labels: {
        fontSize: 16,
        generateLabels: function(chart) {
          var data = chart.data;
          if (data.labels.length && data.datasets.length) {
            return data.labels.map(function(label, i) {
              var meta = chart.getDatasetMeta(0);
              var ds = data.datasets[0];
              var arc = meta.data[i];
              var custom = (arc && arc.custom) || {};
              var getValueAtIndexOrDefault =
                Chart.helpers.getValueAtIndexOrDefault;
              var arcOpts = chart.options.elements.arc;
              var fill = custom.backgroundColor
                ? custom.backgroundColor
                : getValueAtIndexOrDefault(
                    ds.backgroundColor,
                    i,
                    arcOpts.backgroundColor
                  );
              var stroke = custom.borderColor
                ? custom.borderColor
                : getValueAtIndexOrDefault(
                    ds.borderColor,
                    i,
                    arcOpts.borderColor
                  );
              var bw = custom.borderWidth
                ? custom.borderWidth
                : getValueAtIndexOrDefault(
                    ds.borderWidth,
                    i,
                    arcOpts.borderWidth
                  );

              // We get the value of the current label
              var value =
                chart.config.data.datasets[arc._datasetIndex].data[arc._index];

                var stdvalue = [<?php echo $std_gs; ?>,
         <?php echo $std_mo; ?>,
         <?php echo $std_tm; ?>, 
         <?php echo $std_sm; ?>, 
         <?php echo $std_tem; ?>, 
         <?php echo $std_ii; ?>, 
         <?php echo $std_pi; ?>, 
         <?php echo $std_er; ?>, 
         <?php echo $std_mst; ?>]

              return {
                // Instead of `text: label,`
                // We add the value to the string
                text: label + ' : ' + value + ' (SD = ' + stdvalue[i] + ')',
                fillStyle: fill,
                strokeStyle: stroke,
                lineWidth: bw,
                hidden: isNaN(ds.data[i]) || meta.data[i].hidden,
                index: i
              };
            });
          } else {
            return [];
          }
        }
      }
    },
    title: {
      display: true,
      fontSize:20,
      text: 'Program Overall Average Scores'
    },
    scale: {
      ticks: {
        /*beginAtZero: true,*/
        max: 10,
        min: 0,
        maxTicksLimit: 12,
        stepSize: 2
      },
      reverse: false
    },
    animation: {
      animateRotate: true,
      animateScale: false
    },
    tooltips: {
      backgroundColor: 'rgba(0, 51, 0,0.8)'
    }
  }
};
window.onload = function() {
  var ctx = document.getElementById('chart-area').getContext('2d');
  window.myPolarArea = Chart.PolarArea(ctx, config);
};
</script>




<script>
// Bar chart for average total score
new Chart(document.getElementById("bar-chart_total"), {
    type: 'bar',
    data: {
      labels: [    'GP',
      'Dal',
      'Hou',
      'AUS',
      'ALD',
      'FW',
      'Hill',
      'SA',
      'NC'],
      datasets: [
        {
          label: "Total ",
          backgroundColor: 'rgb(238,115,32)',
        hoverBackgroundColor: 'rgba(238,115,32,0.8)',
        data: [<?php  echo $avg_gp; ?>, <?php  echo $avg_dal; ?>, <?php  echo $avg_hou; ?>, <?php  echo $avg_aus; ?>, <?php  echo $avg_ald; ?>, <?php  echo $avg_fw; ?>, <?php  echo $avg_hill; ?>, <?php  echo $avg_sa; ?>, <?php  echo $avg_nc; ?>]
        }
      ]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
                max: 10,
                min: 0,
                stepSize: 1
            }
        }]
    },
      legend: { display: false },
      title: {
        fontSize:18,
        display: true,
        text: 'Average OLR Scores'
      }
    }
});

// Bar chart for average learning management score
new Chart(document.getElementById("bar-chart_lm"), {
    type: 'bar',
    data: {
      labels: [ 'GP','Dal','Hou','AUS','ALD','FW','Hill','SA','NC'],

      datasets: [
        {
          label: "Goal Setting",
          backgroundColor: "rgb(52,104,192)",
          data: [<?php echo max(0.01,$gsgp); ?>,<?php echo max(0.01,$gsdal); ?>,<?php echo max(0.01,$gshou); ?>,<?php echo max(0.01,$gsaus); ?>,<?php echo max(0.01,$gsald); ?>,<?php echo max(0.01,$gsfw); ?>,<?php echo max(0.01,$gshill); ?>,<?php echo max(0.01,$gssa); ?>,<?php echo max(0.01,$gsnc); ?>] 

       
        }, {
          label: "Monitoring",
          backgroundColor: "rgb(241,119,36)",
          data: [<?php echo max(0.01,$mogp); ?>,<?php echo max(0.01,$modal); ?>,<?php echo max(0.01,$mohou); ?>,<?php echo max(0.01,$moaus); ?>,<?php echo max(0.01,$moald); ?>,<?php echo max(0.01,$mofw); ?>,<?php echo max(0.01,$mohill); ?>,<?php echo max(0.01,$mosa); ?>,<?php echo max(0.01,$monc); ?>]
        }
      ]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
                max: 10,
                min: 0,
                stepSize: 1
            }
        }]
    },
      title: {
        fontSize:16,
        display: true,
        text: 'Learning Management'
      },
      legend: {
          display: true,
        position: 'bottom'
      }
    }
});

// Bar chart for average resource management score
new Chart(document.getElementById("bar-chart_rm"), {
    type: 'bar',
    data: {
      labels: [ 'GP','Dal','Hou','AUS','ALD','FW','Hill','SA','NC'],

      datasets: [
        {
          label: "Time Management",
          backgroundColor: "rgb(52,104,192)",
          data: [<?php echo max(0.01,$tmgp); ?>,<?php echo max(0.01,$tmdal); ?>,<?php echo max(0.01,$tmhou); ?>,<?php echo max(0.01,$tmaus); ?>,<?php echo max(0.01,$tmald); ?>,<?php echo max(0.01,$tmfw); ?>,<?php echo max(0.01,$tmhill); ?>,<?php echo max(0.01,$tmsa); ?>,<?php echo max(0.01,$tmnc); ?>] 

       
        }, {
          label: "Space Management",
          backgroundColor: "rgb(156,155,156)",
          data: [<?php echo max(0.01,$smgp); ?>,<?php echo max(0.01,$smdal); ?>,<?php echo max(0.01,$smhou); ?>,<?php echo max(0.01,$smaus); ?>,<?php echo max(0.01,$smald); ?>,<?php echo max(0.01,$smfw); ?>,<?php echo max(0.01,$smhill); ?>,<?php echo max(0.01,$smsa); ?>,<?php echo max(0.01,$smnc); ?>]
        }, {
          label: "Technology Management",
          backgroundColor: "rgb(71,142,206)",
          data: [<?php echo max(0.01,$temgp); ?>,<?php echo max(0.01,$temdal); ?>,<?php echo max(0.01,$temhou); ?>,<?php echo max(0.01,$temaus); ?>,<?php echo max(0.01,$temald); ?>,<?php echo max(0.01,$temfw); ?>,<?php echo max(0.01,$temhill); ?>,<?php echo max(0.01,$temsa); ?>,<?php echo max(0.01,$temnc); ?>]
        }
      ]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
                max: 10,
                min: 0,
                stepSize: 1
            }
        }]
    },
      title: {
        fontSize:16,
        display: true,
        text: 'Resource Management'
      },
      legend: {
          display: true,
        position: 'bottom'
      }
    }
});

// Bar chart for average interaction management score
new Chart(document.getElementById("bar-chart_im"), {
    type: 'bar',
    data: {
      labels: [ 'GP','Dal','Hou','AUS','ALD','FW','Hill','SA','NC'],

      datasets: [
        {
          label: "Instructor Interaction",
          backgroundColor: "rgb(244,131,62)",
          data: [<?php echo max(0.01,$iigp); ?>,<?php echo max(0.01,$iidal); ?>,<?php echo max(0.01,$iihou); ?>,<?php echo max(0.01,$iiaus); ?>,<?php echo max(0.01,$iiald); ?>,<?php echo max(0.01,$iifw); ?>,<?php echo max(0.01,$iihill); ?>,<?php echo max(0.01,$iisa); ?>,<?php echo max(0.01,$iinc); ?>] 

       
        }, {
          label: "Peer Interaction",
          backgroundColor: "rgb(241,190,0)",
          data: [<?php echo max(0.01,$pigp); ?>,<?php echo max(0.01,$pidal); ?>,<?php echo max(0.01,$pihou); ?>,<?php echo max(0.01,$piaus); ?>,<?php echo max(0.01,$piald); ?>,<?php echo max(0.01,$pifw); ?>,<?php echo max(0.01,$pihill); ?>,<?php echo max(0.01,$pisa); ?>,<?php echo max(0.01,$pinc); ?>]
        }
      ]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
                max: 10,
                min: 0,
                stepSize: 1
            }
        }]
    },
      title: {
        fontSize:16,
        display: true,
        text: 'Interaction Management'
      },
      legend: {
          display: true,
        position: 'bottom'
      }
    }
});

// Bar chart for average motivation management score
new Chart(document.getElementById("bar-chart_mm"), {
    type: 'bar',
    data: {
      labels: [ 'GP','Dal','Hou','AUS','ALD','FW','Hill','SA','NC'],

      datasets: [
        {
          label: "Effort Regulation",
          backgroundColor: "rgb(108,173,63)",
          data: [<?php echo max(0.01,$ergp); ?>,<?php echo max(0.01,$erdal); ?>,<?php echo max(0.01,$erhou); ?>,<?php echo max(0.01,$eraus); ?>,<?php echo max(0.01,$erald); ?>,<?php echo max(0.01,$erfw); ?>,<?php echo max(0.01,$erhill); ?>,<?php echo max(0.01,$ersa); ?>,<?php echo max(0.01,$ernc); ?>] 

       
        }, {
          label: "Mastery Self-Talk",
          backgroundColor: "rgb(95,159,219)",
          data: [<?php echo max(0.01,$msgp); ?>,<?php echo max(0.01,$msdal); ?>,<?php echo max(0.01,$mshou); ?>,<?php echo max(0.01,$msaus); ?>,<?php echo max(0.01,$msald); ?>,<?php echo max(0.01,$msfw); ?>,<?php echo max(0.01,$mshill); ?>,<?php echo max(0.01,$mssa); ?>,<?php echo max(0.01,$msnc); ?>]
        }
      ]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
                max: 10,
                min: 0,
                stepSize: 1
            }
        }]
    },
      title: {
        fontSize:16,
        display: true,
        text: 'Motivation Management'
      },
      legend: {
          display: true,
        position: 'bottom'
      }
    }
});
</script> 







</body>

</html>
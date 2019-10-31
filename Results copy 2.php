
<!Doctype html>
<html>
<head>
<title>OLRSC</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<link rel="stylesheet" href="style.css" type="text/css">
<style>

 .container div {
    display: inline-block;
  }

  /* basic positioning */
  .legend { list-style: none; }
  .legend span { border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px; }
  /* your colors */
  .legend .SE { background-color: #800000; }
  .legend .GS { background-color: #008FFB; }
  .legend .MO { background-color: #00E396; }
  .legend .TM { background-color: #FEB019; }
  .legend .SM { background-color: #FF4560; }
  .legend .TEM { background-color: #775DD0; }
  .legend .II { background-color: #546E7A; }
  .legend .IC { background-color: #26a69a; }
  .legend .ER { background-color: #D10CE8; }
  .legend .MS { background-color: #808000; }


  .collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
  }

  .active, .collapsible:hover {
    background-color: #555;
  }

  .collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

  .content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;

  }

.arrow_box {
  position: relative;
  background: white;
padding: 5px;
}

		.container-fluid{
			margin-left: 0px;
			position: relative;
		}

* {
  box-sizing: border-box;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}


</style>
<script>

window.onload = function () {
var res1=localStorage.getItem("storeResult1");
var res2=localStorage.getItem("storeResult2");
var res3=localStorage.getItem("storeResult3");
var res4=localStorage.getItem("storeResult4");
var res5=localStorage.getItem("storeResult5");
var res6=localStorage.getItem("storeResult6");
var res7=localStorage.getItem("storeResult7");
var res8=localStorage.getItem("storeResult8");
var res9=localStorage.getItem("storeResult9");
var res10=localStorage.getItem("storeResult10");
var overall= localStorage.getItem("storeOverall");
var me=12;
var options1 = {
  chart: {

      height: 350,
      type: 'radialBar',
  },
  colors: ['#F44336', '#E91E63', '#9C27B0'],
  series: [parseInt(overall)],
  labels: ['Current Readiness'],
  tooltip: {
    enabled: true,
    custom: function({series, seriesIndex,dataPointIndex,w}) {
    return '<div class="arrow_box">' +
   '<span>' + 'Current Readiness.' + '</span>' +
   '</div>';
 }
},


}

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);

chart1.render();

var colors2 = ['#800000', '#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A', '#26a69a', '#D10CE8', '#808000'];
var options2 = {
            chart: {
               events: {
    dataPointSelection: function(event, chartContext, config) {
      if(config.dataPointIndex == 0){
       var elmnt = document.getElementById("SE");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 1){
       var elmnt = document.getElementById("GS");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 2){
       var elmnt = document.getElementById("MO");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 3){
       var elmnt = document.getElementById("TM");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 4){
       var elmnt = document.getElementById("SM");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 5){
       var elmnt = document.getElementById("TEM");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 6){
       var elmnt = document.getElementById("II");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 7){
       var elmnt = document.getElementById("IC");
  elmnt.scrollIntoView();
      }
	   else if(config.dataPointIndex == 8){
       var elmnt = document.getElementById("ER");
  elmnt.scrollIntoView();
      }
      else if(config.dataPointIndex == 9){
        var elmnt = document.getElementById("MS");
   elmnt.scrollIntoView();
       }
    },
               },

                height: 300,
                type: 'bar',
                toolbar: {
          show: false,
        },

            },
colors: colors2,
            plotOptions: {
                bar: {
                 distributed: true,
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    return val + "%";
                },

                style: {
                    fontSize: '12px',

                }
            },

            series: [{
                name: 'Your Score',
                data: [parseInt(res1),parseInt(res2),parseInt(res3),parseInt(res4),parseInt(res5),parseInt(res6),parseInt(res7),parseInt(res8),parseInt(res9),parseInt(res10)]

            }],
            xaxis: {
             categories: ["Self-efficacy", "Goal Setting", "Monitoring", "Time Management", "Space Management", "Technology Management", "Interaction with Instructor", "Interaction with Classmates", "Effort Regulation", "Mastery Self-Talk"],
           labels: {
            show: false},
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
            },

               tooltip: {

    custom: function({series, seriesIndex,dataPointIndex,w}) {
     if(dataPointIndex==0){
      return '<div class="arrow_box">' +
        '<span>' + '"Self-efficacy for completing an online course"'  + '</span>' +
        '</div>';}
        else if(dataPointIndex==1){
         return '<div class="arrow_box">' +
        '<span>' + '"Monitoring" involves students\' strategy '+'</br>'+ 'to monitor their leaning status in an'+'</br>'+ 'online course to make sure ...' + '</span>' +
        '</div>';
        }
        else if(dataPointIndex==2){
         return '<div class="arrow_box">' +
        '<span>' + '“Time management” is the process of'+ '</br>' +'organizing and planning how to divide'+ '</br>' +' your time between specific activities ...' + '</span>' +
        '</div>';}
        else if(dataPointIndex==3){
         return '<div class="arrow_box">' +
        '<span>' + '"Space management" involves students\' '+'</br>'+'strategy to manage their space effectively for'+ '</br>' +' success in online learning by finding ...' + '</span>' +
        '</div>';
        }
        else if(dataPointIndex==4){
         return '<div class="arrow_box">' +
        '<span>' + '"Technology management" involves students\' '+'</br>' +'level of proficiency in using technology'+ '</br>' +' relevant to online courses ...' + '</span>' +
        '</div>';
        }
        else if(dataPointIndex==5){
         return '<div class="arrow_box">' +
        '<span>' + '"Interaction with the instructor" involves students\' '+'</br>'+ 'strategy to interact with the instructor of'+'</br>'+ 'their online courses by initiating ...' + '</span>' +
        '</div>';
        }
        else if(dataPointIndex==6){
         return '<div class="arrow_box">' +
        '<span>' + '"Interaction with the classmates" involves students\' '+'</br>'+ 'strategy to interact with the peers not only' + '</br>'+ 'for learning but also for ...' + '</span>' +
        '</div>';
        }
		else if(dataPointIndex==7){
         return '<div class="arrow_box">' +
        '<span>' + '"Efort regulation" involves students\' '+'</br>'+ 'strategy to manage their effort and' + '</br>'+ 'attention in the face of ...' + '</span>' +
        '</div>';
        }
        else{
         return '<div class="arrow_box">' +
        '<span>' + '"Mastery self-talk" involves students\' '+'</br>'+ 'strategy to enhance their competence' + '</br>'+ 'through self-talking and reinforcing to ...' + '</span>' +
        '</div>';
        }

    }

  },



            yaxis: {
                axisBorder: {
                    show: true
                },
                axisTicks: {
                    show: false,
                },
                min:0,
                max:100,
                labels: {
                    show: true,
                    formatter: function (val) {
                        return val + "%";
                    }
                }

            },


        }

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);

chart2.render();

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}



}
</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
 <div id='maindiv' class='maindiv'>
<div class='container-fluid bg-grey row'></br>
  <div class='row'>
    <div class='col-sm-6'>
    <img src='COE logo.png' alt='CIEL' class='responsive' style='width:318px;height:71px;' align='left'>
    </div>
    <div class='col-sm-6'>
      <img src='CIEL logo.png' alt='CIEL' class='responsive' style='width:320px;height:70px;' align='right'>
    </div>
  </div>
</div></br>
<h2>Online Learning Readiness Self-Check Survey Results</h2>
	<div id="chart1"></div>




 <div class="container-fluid bg-grey row">

  <div class="row">

    <div class="col-sm-8">

    <div id="chart2"></div>
    </div>
    <div class="col-sm-4"></br></br>
      <ul class="legend">
        <li><span class="SE"></span> Self-Efficacy</li>
        <li><span class="GS"></span> Goal Setting</li>
        <li><span class="MO"></span> Monitoring</li>
        <li><span class="TM"></span> Time Management</li>
        <li><span class="SM"></span>Space Management</li>
        <li><span class="TEM"></span> Technology Management</li>
        <li><span class="II"></span> Interaction with the instructor</li>
        <li><span class="IC"></span> Interaction with the classmates</li>
        <li><span class="ER"></span> Effort regulation</li>
        <li><span class="MS"></span> Mastery self-talk</li>
</ul>

</div>


  </div>

 <h4 align="center">Please click on a bar in the graph above for a specific item feedback else please scroll down for feedback</h4></br></br>
</div>

 <h2>Feedback</h2>
 </br>

 <div id="GS">
   <button class="collapsible" style="background-color:#008FFB;">Goal Setting</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to manage and achieve their goals by breaking a long-term goal (e.g., completing an extensive and complex task) into small sub-goals so that they can be easily achieved.</p>
   </div>
   </br></br>
 <div id="MO">
   <button class="collapsible" style="background-color:#00E396;">Monitoring</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to monitor their learning status in an online course to make sure they are on the right track.</p>
     <iframe  width='100%' height='600px' src="https://www.youtube.com/embed/1zLtfzsaP58" frameborder="0" allowfullscreen>
     </iframe>
   </div>
 </br></br>

 <div id="TM">
    <button class="collapsible" style="background-color:#FEB019;">Time management</button>
    <div class="content">
  <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to manage and use their time effectively for success in online learning by predicting necessary time allotment for course task in relation to their entire schedule.</p>
</div>
</br></br>

 <div id="SM">

   <button class="collapsible" style="background-color:#FF4560;">Space management</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to manage their space effectively for success in online learning by finding a comfortable and non-distractive place in which they can focus on their tasks.</p>
</div>
</br></br>

 <div id="TEM">

   <button class="collapsible" style="background-color:#775DD0;">Technology management</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ level of proficiency in using technology relevant to online courses (e.g., using functions in Blackboard or installing software to learn).</p>
</div>
</br></br>
  </div>

 <div id="II">

   <button class="collapsible" style="background-color:#546E7A;">Interaction with the instructor</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to interact with the instructor of their online courses by initiating questions and discussions, as well as maintaining open communication with the instructor.</p>
</div>
</br></br>
  </div>

 <div id="IC">
   <button class="collapsible" style="background-color:#26a69a;">Interaction with the classmates</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to interact with the peers not only for learning but also for contributing to the online learning community by questioning and providing opinions to help each other.</p>
</div>
</br></br>
</div>

 <div id="ER">
   <button class="collapsible" style="background-color:#D10CE8;">Effort regulation</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to manage their effort and attention in the face of distractions and uninteresting tasks by being persistence in accomplishing learning tasks.</p>
</div>
</br></br>
  </div>


 <div id="MS">

   <button class="collapsible" style="background-color:#808000;">Mastery self-talk</button>
   <div class="content">
     <br><p style="font-size: 18px;font-family: Calibri, sans-serif;">Students’ strategy to enhance their competence through self-talking and reinforcing to master the content.</p>
</div>
</br></br>
  </div>

 </div>

</body>
</html>

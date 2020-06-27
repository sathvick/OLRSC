var res1 = localStorage.getItem('storeResult1');
var res2 = localStorage.getItem('storeResult2');
var res3 = localStorage.getItem('storeResult3');
var res4 = localStorage.getItem('storeResult4');
var res5 = localStorage.getItem('storeResult5');
var res6 = localStorage.getItem('storeResult6');
var res7 = localStorage.getItem('storeResult7');
var res8 = localStorage.getItem('storeResult8');
var res9 = localStorage.getItem('storeResult9');
var res10 = localStorage.getItem('storeResult10');
var overall = localStorage.getItem('storeOverall');
var me = 12;
var mean =
  (parseFloat(res2) +
    parseFloat(res3) +
    parseFloat(res4) +
    parseFloat(res5) +
    parseFloat(res6) +
    parseFloat(res7) +
    parseFloat(res8) +
    parseFloat(res9) +
    parseFloat(res10)) /
  90;
var a = parseFloat(res2).toFixed(2) * 1;
var b = parseFloat(res3).toFixed(2) * 1;
var c = parseFloat(res4).toFixed(2) * 1;
var d = parseFloat(res5).toFixed(2) * 1;
var e = parseFloat(res6).toFixed(2) * 1;
var f = parseFloat(res7).toFixed(2) * 1;
var g = parseFloat(res8).toFixed(2) * 1;
var h = parseFloat(res9).toFixed(2) * 1;
var i = parseFloat(res10).toFixed(2) * 1;
var avg = parseFloat(mean * 10).toFixed(2) * 1;
//alert(parseFloat(res4).toFixed(2));
angles = [
  Math.PI / 4,
  Math.PI / 4,
  Math.PI / 6,
  Math.PI / 6,
  Math.PI / 6,
  Math.PI / 4,
  Math.PI / 4,
  Math.PI / 4,
  Math.PI / 4,
];
// draw background
var backgroundColor = 'white';
Chart.plugins.register({
  afterRender: function (c) {
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
  },
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
      'Mastery Self-Talk',
    ],
    datasets: [
      {
        data: [a, b, c, d, e, f, g, h, i],
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
          'rgb(244, 116, 113)',
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
          'rgba(244, 116, 113,0.8)',
        ],
      },
    ],
  },
  options: {
    onClick: function (e) {
      var slice = myPolarArea.getElementAtEvent(e);
      if (!slice.length) return; // return if not clicked on slice
      var label = slice[0]._model.label;

      switch (label) {
        // add case for each label/slice
        case 'Goal Setting':
          if (a >= 8.14) {
            $('#mtext1').html(
              '<p>Goal setting skills are necessary skill for planning online learning. Your goal setting score is above average.<br><br>Check out the PDF below to see how other successful online learners set their goals.</p>'
            );
          } else {
            $('#mtext1').html(
              '<p>You have some knowledge about how to set goals for online learning, however your goal setting score is slightly lower than the average.<br><br>Here are some strategies that can help you to better master goal setting skills in online learning context.</p>'
            );
          }
          $('#myModal1').modal('show');
          break;
        case 'Monitoring':
          if (b >= 8.82) {
            $('#mtext2').html(
              '<p>Monitoring your learning progress can ensure you are on the right track and stay up to date.  Your monitoring score are above average.<br><br>Check out the PDF below to see what monitoring strategies that other successful online learners often use.</p>'
            );
          } else {
            $('#mtext2').html(
              '<p>Monitoring your learning progress is critical for your success in online learning. However your monitoring score is slightly below average.<br><br>Successful online learners often use the following monitoring strategies to be on the right track and stay up to date.</p>'
            );
          }
          $('#myModal2').modal('show');
          break;
        case 'Time Management':
          if (c >= 8.28) {
            $('#mtext3').html(
              '<p>Your time management score is above average. The flexibility of online learning makes time management a critical component for online learning success.<br><br>Check out the PDF below to see what management strategies that other successful online learners have.</p>'
            );
          } else {
            $('#mtext3').html(
              '<p>Be wise in your time management. In order to succeed in online learning, you are expected to be responsible for your own time management. However your monitoring score is slightly below average.<br><br>Here are some strategies that can help you to overcome procrastination and plan your time.</p>'
            );
          }

          $('#myModal3').modal('show');
          break;
        case 'Space Management':
          if (d >= 8.48) {
            $('#mtext4').html(
              '<p>You are good at finding a comfortable place to focus on your study.  Your space management score is above average.<br><br>Check out the PDF below to see how other successful online learners find an appropriate learning space for themselves.</p>'
            );
          } else {
            $('#mtext4').html(
              '<p>Your monitoring score is slightly below average. Don’t worry, this is not easy for everyone.  A comfortable place can help you focus on conquering the learning tasks.<br><br>Check out the PDF below to learn some strategies to find an appropriate space for online learning.</p>'
            );
          }

          $('#myModal4').modal('show');
          break;
        case 'Technology Management':
          if (e >= 8.14) {
            $('#mtext5').html(
              '<p>Your technology management score is above average. You must be a tech-savvy person!<br><br>Check out the PDF below to see some useful websites for TTU students.</p>'
            );
          } else {
            $('#mtext5').html(
              '<p>As we all know, online learning is mediated by diverse technologies. However, your technology management score is slightly below average.<br><br>Here comes the rescue! On the PDF below are some resources that can help you to use the technologies more smoothly in online learning context.</p>'
            );
          }

          $('#myModal5').modal('show');
          break;
        case 'Interaction with the Instructor':
          if (f >= 8.2) {
            $('#mtext6').html(
              '<p>Your instructor interaction score is above average.<br><br>Check out the PDF below to see the strategies that the other successful online learners use to interact with their instructors</p>'
            );
          } else {
            $('#mtext6').html(
              '<p>Online students often reported that interaction with the instructor is critical but not easy. Your instructor interaction score is slightly below average.<br><br>The PDF blow presents some strategies that can help you when interacting with your instructors in online learning context.</p>'
            );
          }

          $('#myModal6').modal('show');
          break;
        case 'Interaction with the Peers':
          if (g >= 8.74) {
            $('#mtext7').html(
              '<p>It seems you are well connected with your peers in online courses. Your peer interaction score is above average.<br><br>Check out the PDF below to see how other successful online learners interact with peers.</p>'
            );
          } else {
            $('#mtext7').html(
              '<p>Communicating with your classmates in an online course can benefit your learning and provide emotional support. However, your peer interaction score is slightly lower than average.<br><br>Try the following strategies when interacting with the classmates in your next online courses.</p>'
            );
          }

          $('#myModal7').modal('show');
          break;
        case 'Effort Regulation':
          if (h >= 8.84) {
            $('#mtext8').html(
              '<p>Your effort regulation score is above average.<br><br>Check out the PDF below to see how other successful online learners regulate their learning.</p>'
            );
          } else {
            $('#mtext8').html(
              '<p>Online learning can be challenging to many students. It is important to be able to regulate your learning. However, your effort regulation score is slightly below average.<br><br>Try the strategies below to regulate your effort for your next online courses.</p>'
            );
          }

          $('#myModal8').modal('show');
          break;
        case 'Mastery Self-Talk':
          if (i >= 8.7) {
            $('#mtext9').html(
              '<p>It seems you know well about how to enhance your competence through self-talking. <br><br>Check out the PDF below to see the steps that other successful online learners often use to encourage themselves.</p>'
            );
          } else {
            $('#mtext9').html(
              '<p>Willingness to master the learning is critical for successful learning in online courses. Students can enhance their competence through self-talking. Your score for mastery self-talk is slightly below average.<br><br>Check out the steps that can help you to enhance your competence through self-talking.</p>'
            );
          }

          $('#myModal9').modal('show');
          break;
      }
    },

    plugins: {
      datalabels: {
        display: false,
      },
    },

    hover: {
      onHover: function (e) {
        var point = this.getElementAtEvent(e);
        if (point.length) e.target.style.cursor = 'pointer';
        else e.target.style.cursor = 'default';
      },
      mode: 'nearest',
      intersect: true,
    },
    elements: {
      arc: {
        angle: angles,
      },
    },

    responsive: true,
    legend: {
      onClick: null,
      display: true,
      position: 'left',
      align: 'center',
      labels: {
        fontSize: 20,
        generateLabels: function (chart) {
          var data = chart.data;
          if (data.labels.length && data.datasets.length) {
            return data.labels.map(function (label, i) {
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

              return {
                // Instead of `text: label,`
                // We add the value to the string
                text: label + ' : ' + value,
                fillStyle: fill,
                strokeStyle: stroke,
                lineWidth: bw,
                hidden: isNaN(ds.data[i]) || meta.data[i].hidden,
                index: i,
              };
            });
          } else {
            return [];
          }
        },
      },
    },
    title: {
      display: true,
      /*  text: '' for title text*/
    },
    scale: {
      ticks: {
        /*beginAtZero: true,*/
        max: 10,
        min: 0,
        maxTicksLimit: 12,
        stepSize: 2,
      },
      reverse: false,
    },
    animation: {
      animateRotate: true,
      animateScale: false,
    },
    tooltips: {
      backgroundColor: 'rgba(0, 51, 0,0.8)',
    },
  },
};
window.onload = function () {
  var ctx = document.getElementById('chart-area').getContext('2d');
  window.myPolarArea = Chart.PolarArea(ctx, config);

  document.getElementById('avg').innerHTML =
    'Your overall online learning readiness score is ' + avg + ' / 10';
  document.getElementById('feedback').innerHTML =
    'Click on each section of the polar chart to find out more: score, feedback, and resources. ';

  var ctxs = document.getElementById('chartarea1').getContext('2d');
  window.myDoughnut = new Chart(ctxs, configs);
  $('.introright').show();
};

Chart.defaults.global.elements.arc.borderWidth = 15;

var configs = {
  type: 'doughnut',
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
      'Mastery Self-Talk',
    ],
    datasets: [
      {
        data: [45, 45, 30, 30, 30, 45, 45, 45, 45],
        labels: [
          ['Goal', 'Setting'],
          'Monitoring',
          ['Time', 'Management'],
          ['Space', 'Management'],
          ['Technology', 'Management'],
          ['Instructor', 'Interaction'],
          ['Peer', 'Interaction'],
          ['Effort', 'Regulation'],
          ['Mastery', 'Self-Talk'],
        ],
        backgroundColor: [
          'rgb(112,193,179)',
          'rgb(84,144,134)',
          'rgb(254, 240, 117)',
          'rgb(239, 213, 92)',
          'rgb(251, 221, 92)',
          'rgb(22, 75, 98)',
          'rgb(31, 107, 139)',
          'rgb(242,95,92)',
          'rgb(244, 116, 113)',
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
          'rgba(244, 116, 113,0.8)',
        ],
      },
    ],
  },
  options: {
    plugins: {
      datalabels: {
        color: function (ctxs) {
          //  alert(ctxs.dataset.labels[1]);
          // use the same color as the border
          //  if(ctxs.dataset
          var colors = [
            'black',
            'black',
            'black',
            'black',
            'black',
            'white',
            'white',
            'black',
            'black',
          ];
          return colors;
          //  return ctxs.dataset.borderColor
        },
        font: function (context) {
          var width = context.chart.width;
          var size = Math.round(width / 45);

          return {
            weight: 'bold',
            size: size,
          };
        },
        align: 'center',
        anchor: 'center',
        //color: "black",
        //clamp:true,
        //  clip:true,
        formatter: function (value, context) {
          return context.dataset.labels[context.dataIndex];
        },
      },
    },
    onClick: function (e) {
      var slice = myDoughnut.getElementAtEvent(e);
      if (!slice.length) return; // return if not clicked on slice
      var label = slice[0]._model.label;
      switch (label) {
        // add case for each label/slice
        case 'Goal Setting':
          $('#myDIV1').show();
          $('#mainDiv').hide();
          $('#myDIV2').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Monitoring':
          $('#myDIV2').show();
          $('#mainDiv').hide();
          $('#myDIV1').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Time Management':
          $('#myDIV3').show();
          $('#mainDiv').hide();
          $('#myDIV2').hide();
          $('#myDIV1').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Space Management':
          $('#myDIV4').show();
          $('#myDIV2').hide();
          $('#mainDiv').hide();
          $('#myDIV3').hide();
          $('#myDIV1').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Technology Management':
          $('#myDIV5').show();
          $('#myDIV2').hide();
          $('#mainDiv').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV1').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Interaction with the Instructor':
          $('#myDIV6').show();
          $('#myDIV2').hide();
          $('#mainDiv').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV1').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Interaction with the Peers':
          $('#myDIV7').show();
          $('#myDIV2').hide();
          $('#mainDiv').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV1').hide();
          $('#myDIV8').hide();
          $('#myDIV9').hide();
          break;
        case 'Effort Regulation':
          $('#myDIV8').show();
          $('#myDIV2').hide();
          $('#mainDiv').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV1').hide();
          $('#myDIV9').hide();
          break;
        case 'Mastery Self-Talk':
          $('#myDIV9').show();
          $('#mainDiv').hide();
          $('#myDIV2').hide();
          $('#myDIV3').hide();
          $('#myDIV4').hide();
          $('#myDIV5').hide();
          $('#myDIV6').hide();
          $('#myDIV7').hide();
          $('#myDIV8').hide();
          $('#myDIV1').hide();
          break;
      }
    },
    responsive: true,
    legend: {
      display: false,
    },
    title: {
      display: false,
    },
    hover: {
      onHover: function (e) {
        var point = this.getElementAtEvent(e);
        if (point.length) e.target.style.cursor = 'pointer';
        else e.target.style.cursor = 'default';
      },
      mode: 'nearest',
      intersect: true,
    },
    tooltips: {
      enabled: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true,
    },
  },
};

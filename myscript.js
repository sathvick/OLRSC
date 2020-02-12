var res1 = localStorage.getItem("storeResult1");
var res2 = localStorage.getItem("storeResult2");
var res3 = localStorage.getItem("storeResult3");
var res4 = localStorage.getItem("storeResult4");
var res5 = localStorage.getItem("storeResult5");
var res6 = localStorage.getItem("storeResult6");
var res7 = localStorage.getItem("storeResult7");
var res8 = localStorage.getItem("storeResult8");
var res9 = localStorage.getItem("storeResult9");
var res10 = localStorage.getItem("storeResult10");
var overall = localStorage.getItem("storeOverall");
var me = 12;
var mean = (parseFloat(res2) + parseFloat(res3) + parseFloat(res4) + parseFloat(res5) + parseFloat(res6) + parseFloat(res7) + parseFloat(res8) + parseFloat(res9) + parseFloat(res10)) / 90;
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
angles = [Math.PI / 4, Math.PI / 4, Math.PI / 6, Math.PI / 6, Math.PI / 6, Math.PI / 4, Math.PI / 4, Math.PI / 4, Math.PI / 4];
var config = {
    data: {
        labels: ["Goal Setting", "Monitoring", "Time Management", "Space Management", "Technology Management", "Interaction with the Instructor", "Interaction with the Peers", "Effort Regulation", "Mastery Self-Talk"],
        datasets: [{
            data: [a, b, c, d, e, f, g, h, i],
            borderColor: "white",
            borderWidth: 2,
            backgroundColor: [
                "rgb(112,193,179)", 'rgb(84,144,134)', 'rgb(254, 240, 117)', 'rgb(239, 213, 92)', 'rgb(251, 221, 92)', 'rgb(22, 75, 98)', 'rgb(31, 107, 139)', 'rgb(242,95,92)', 'rgb(244, 116, 113)',
            ],
            hoverBackgroundColor: ["rgba(112,193,179,0.8)", "rgba(84,144,134,0.8)", "rgba(254, 240, 117,0.8)", "rgba(239, 213, 92,0.8)", "rgba(251, 221, 92,0.8)", "rgba(22, 75, 98,0.8)", "rgba(31, 107, 139,0.8)", "rgba(242,95,92,0.8)", "rgba(244, 116, 113,0.8)"],
        }],
    },
    options: {
        onClick: function(e) {
            var slice = myPolarArea.getElementAtEvent(e);
            if (!slice.length) return; // return if not clicked on slice
            var label = slice[0]._model.label;

            switch (label) {
                // add case for each label/slice
                case 'Goal Setting':
								if (a >= 8) {
									$('#mtext1').html("<ul><li>You are skilled in goal setting, which will guide you to perform intentionally and succeed in online learning.</li><li>Check below what habits that other successful online learners have.</li></ul>");
								} else if (a < 6) {
									$('#mtext1').html("<ul><li>Improve your goal setting skills will guide you to perform intentionally and succeed in online learning. </li><li>Check below for some strategies that can help you to master goal setting in online learning context. </li></ul>");
								} else {
									$('#mtext1').html("<ul><li>You definitely know how to set goals for online learning, this skill can guide you to perform intentionally and succeed in online learning. </li><li>Check below to see resources that can help you do better:  </li></ul>");
								}
										$('#myModal1').modal('show');
	                  break;
                case 'Monitoring':
                if (b >= 8) {
                  $('#mtext2').html("<ul><li>You are skilled in monitoring your learning progress, which can ensure you are on the right track and stay up to date. </li><li>Check below to see what habits that other successful online learners have: </li></ul>");
                } else if (b < 6) {
                  $('#mtext2').html("<ul><li>Monitoring your learning progress is critical for your success in online learning. Check your own progress to make sure you are on the right track and check your online course on a regular basis to stay up to date.  </li><li>Successful online learners often use the following strategies for monitoring:  </li></ul>");
                } else {
                  $('#mtext2').html("<ul><li>You definitely know how to monitor your learning progress, this habit can ensure you are on the right track and stay up to date.  </li><li>Check below to see resources that can help you do better:  </li></ul>");
                }
                    $('#myModal2').modal('show');
                    break;
                case 'Time Management':
                if (c >= 8) {
                  $('#mtext3').html("<ul><li>Your time management skills are awesome, which is critical for the success of online learning. </li><li>Check out the link below to see what management strategies that other successful online learners have:  </li></ul>");
                } else if (c < 6) {
                  $('#mtext3').html("<ul><li>Be wise in your time management. In order to succeed in online learning, you are expected to be responsible for your own time management. </li><li>Here are some strategies that can help you to improve your time management skills in online learning context:  </li></ul>");
                } else {
                  $('#mtext3').html("<ul><li>You definitely have some knowledge about time management in online learning context.  </li><li>Check below to see resources that can help you manage you time better:   </li></ul>");
                }

                    $('#myModal3').modal('show');
                    break;
                case 'Space Management':
                if (d >= 8) {
                  $('#mtext4').html("<ul><li>You are good at finding a comfortable place to focus on your study. </li><li>Check below to see what habits that other successful online learners have:  </li></ul>");
                } else if (d < 6) {
                  $('#mtext4').html("<ul><li>Finding appropriate space for online learning is critical for your success. A comfortable place can help you focus on conquering the learning tasks. </li><li>Check out the resources for space management and improve your space management skills now:   </li></ul>");
                } else {
                  $('#mtext4').html("<ul><li>You know how important it is to find a comfortable place to help you concentrate in online learning. </li><li>Check below to see resources that can help you do better:  </li></ul>");
                }

                    $('#myModal4').modal('show');
                    break;
                case 'Technology Management':
                if (e >= 8) {
                  $('#mtext5').html("<ul><li>You are doing well in technology management. </li><li>Check below to see what habits that other successful online learners have:  </li></ul>");
                } else if (e < 6) {
                  $('#mtext5').html("<ul><li>As we all know, online learning is mediated by diverse technologies.  </li><li>Here are some resources that can help you to use the technologies more smoothly in online learning context: </li></ul>");
                } else {
                  $('#mtext5').html("<ul><li>You definitely have some technology knowledge that helps you in online learning context. </li><li>Check below to see resources that can help you do better:   </li></ul>");
                }

                    $('#myModal5').modal('show');
                    break;
                case 'Interaction with the Instructor':
                if (f >= 8) {
                  $('#mtext6').html("<ul><li>Your are good at communicating with your instructor even in online learning context.  </li><li>Check below to see the strategies that the other successful online learners use to interact with their instructors:  </li></ul>");
                } else if (f < 6) {
                  $('#mtext6').html("<ul><li>Online students often reported that interaction with the instructor is critical for their successful learning experiences.  </li><li>Here are some strategies that can help you when interacting with your instructors in online learning context: </li></ul>");
                } else {
                  $('#mtext6').html("<ul><li>You definitely know the importance of communication with instructor in online courses.  </li><li>Check below to see resources that can help you communicate with your instructor better: </li></ul>");
                }

                    $('#myModal6').modal('show');
                    break;
                case 'Interaction with the Peers':
                if (g >= 8) {
                  $('#mtext7').html("<ul><li>It seems you are well connected with your peers in online courses. </li><li>Check below to see what strategies that other successful online learners use to interact with peers:  </li></ul>");
                } else if (g < 6) {
                  $('#mtext7').html("<ul><li>Communicating with your classmates in an online course can benefit your learning and provide emotional support. </li><li>Try the following strategies when interacting with the classmates next time:  </li></ul>");
                } else {
                  $('#mtext7').html("<ul><li>You definitely know peer interaction can benefit your online learning.  </li><li>Check below to see strategies that can help you to improve peer interaction skills in online courses: </li></ul>");
                }

                    $('#myModal7').modal('show');
                    break;
                case 'Effort Regulation':
                if (h >= 8) {
                  $('#mtext8').html("<ul><li>You are skilled in effort regulation. </li><li>Check below to see what habits that other successful online learners have:  </li></ul>");
                } else if (h < 6) {
                  $('#mtext8').html("<ul><li>Online learning can be challenging to many students. </li><li>Try the strategies below to regulate your effort for your next online course:  </li></ul>");
                } else {
                  $('#mtext8').html("<ul><li>You definitely have the knowledge of effort regulation. </li><li>Check below to find out the strategies that can help you regulate your effort better: </li></ul>");
                }

                    $('#myModal8').modal('show');
                    break;
                case 'Mastery Self-Talk':
                if (i >= 8) {
                  $('#mtext9').html("<ul><li>You know well how to enhance your competence through self-talking and reinforcing to master the content.  </li><li>Check below to see what habits that other successful online learners have: </li></ul>");
                } else if (i < 6) {
                  $('#mtext9').html("<ul><li>Willingness to master the learning is critical for successful learning in online courses. Students can enhance their competence through self-talking and reinforcing to master the content.</li><li>Check out the following strategies that can help you to master your learning in online courses:  </li></ul>");
                } else {
                  $('#mtext9').html("<ul><li>You have some knowledge of enhancing your competence.  </li><li>Check below to see resources that can help you do better:  </li></ul>");
                }

                    $('#myModal9').modal('show');
                    break;
            }
        },

        plugins: {
            datalabels: {
                display: false,

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
              fontSize: 20,
     generateLabels: function(chart) {
         var data = chart.data;
         if (data.labels.length && data.datasets.length) {
             return data.labels.map(function(label, i) {
                 var meta = chart.getDatasetMeta(0);
                 var ds = data.datasets[0];
                 var arc = meta.data[i];
                 var custom = arc && arc.custom || {};
                 var getValueAtIndexOrDefault = Chart.helpers.getValueAtIndexOrDefault;
                 var arcOpts = chart.options.elements.arc;
                 var fill = custom.backgroundColor ? custom.backgroundColor : getValueAtIndexOrDefault(ds.backgroundColor, i, arcOpts.backgroundColor);
                 var stroke = custom.borderColor ? custom.borderColor : getValueAtIndexOrDefault(ds.borderColor, i, arcOpts.borderColor);
                 var bw = custom.borderWidth ? custom.borderWidth : getValueAtIndexOrDefault(ds.borderWidth, i, arcOpts.borderWidth);

   // We get the value of the current label
   var value = chart.config.data.datasets[arc._datasetIndex].data[arc._index];

                 return {
                     // Instead of `text: label,`
                     // We add the value to the string
                     text: label + " : " + value,
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
						backgroundColor: "rgba(0, 51, 0,0.8)",
        },
    }
};
window.onload = function() {
    var ctx = document.getElementById('chart-area').getContext("2d");
    window.myPolarArea = Chart.PolarArea(ctx, config);


    document.getElementById("avg").innerHTML =
        "Your overall online learning readiness score is " + avg + " / 10";
    document.getElementById("feedback").innerHTML =
        "Click on each section of the polar chart to find out more: score, feedback, and resources. ";



    var ctxs = document.getElementById('chartarea1').getContext('2d');
    window.myDoughnut = new Chart(ctxs, configs);
		$(".introright").show();
};




Chart.defaults.global.elements.arc.borderWidth = 15;

var configs = {
    type: 'doughnut',
    data: {
        labels: ["Goal Setting", "Monitoring", "Time Management", "Space Management", "Technology Management", "Interaction with the Instructor", "Interaction with the Peers", "Effort Regulation", "Mastery Self-Talk"],
        datasets: [{
            data: [
                45, 45, 30, 30, 30, 45, 45, 45, 45,
            ],
            labels: [["Goal", "Setting"], "Monitoring", ["Time", "Management"], ["Space", "Management"], ["Technology", "Management"], ["Instructor", "Interaction"], ["Peer", "Interaction"], ["Effort", "Regulation"], ["Mastery", "Self-Talk"]],
            backgroundColor: [
                "rgb(112,193,179)", 'rgb(84,144,134)', 'rgb(254, 240, 117)', 'rgb(239, 213, 92)', 'rgb(251, 221, 92)', 'rgb(22, 75, 98)', 'rgb(31, 107, 139)', 'rgb(242,95,92)', 'rgb(244, 116, 113)',
            ],
            hoverBackgroundColor: ["rgba(112,193,179,0.8)", "rgba(84,144,134,0.8)", "rgba(254, 240, 117,0.8)", "rgba(239, 213, 92,0.8)", "rgba(251, 221, 92,0.8)", "rgba(22, 75, 98,0.8)", "rgba(31, 107, 139,0.8)", "rgba(242,95,92,0.8)", "rgba(244, 116, 113,0.8)"],
        }],
    },
    options: {
      plugins: {
          datalabels: {
            color: function(ctxs) {
            //  alert(ctxs.dataset.labels[1]);
            // use the same color as the border
          //  if(ctxs.dataset
            return 'black'
          //  return ctxs.dataset.borderColor
        },
            font: function(context) {
                        var width = context.chart.width;
                        var size = Math.round(width / 45);

                        return {
                	          weight: 'bold',
                            size: size
                        };
                     },
            align: 'center',
            anchor: 'center',
            //color: "black",
            //clamp:true,
          //  clip:true,
            formatter: function(value, context) {
            	return context.dataset.labels[context.dataIndex];
            }
          }
        },
			onClick: function(e) {
					var slice = myDoughnut.getElementAtEvent(e);
					if (!slice.length) return; // return if not clicked on slice
					var label = slice[0]._model.label;
					switch (label) {
							// add case for each label/slice
							case 'Goal Setting':
                  $('#myDIV1').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Monitoring':
                  $('#myDIV2').show();
                  $('#myDIV1').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Time Management':
                  $('#myDIV3').show();
                  $('#myDIV2').hide();$('#myDIV1').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Space Management':
                  $('#myDIV4').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV1').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Technology Management':
                  $('#myDIV5').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV1').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Interaction with the Instructor':
                  $('#myDIV6').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV1').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Interaction with the Peers':
                  $('#myDIV7').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV1').hide();$('#myDIV8').hide();$('#myDIV9').hide();
									break;
							case 'Effort Regulation':
                  $('#myDIV8').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV1').hide();$('#myDIV9').hide();
									break;
							case 'Mastery Self-Talk':
                  $('#myDIV9').show();
                  $('#myDIV2').hide();$('#myDIV3').hide();$('#myDIV4').hide();$('#myDIV5').hide();$('#myDIV6').hide();$('#myDIV7').hide();$('#myDIV8').hide();$('#myDIV1').hide();
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
          onHover: function(e) {

           var point = this.getElementAtEvent(e);
           if (point.length) e.target.style.cursor = 'pointer';
           else e.target.style.cursor = 'default';
          },
            mode: 'nearest',
            intersect: true
        },
        tooltips: {
            enabled: false
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
};

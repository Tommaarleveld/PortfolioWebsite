$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn color-yellow"><span class="glyphicon glyphicon-chevron-up"></span><i class="fa fa-chevron-up fa-1x" aria-hidden="true"></i></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["HTML/CSS", "PHP", "JavaScript", "MySQL", "TypeScript", "Adobe Photoshop"],
        datasets: [{
            label: '% Skill level out of 100',
            data: [80, 60, 50, 60, 40, 70],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

$('.smooth').on('click', function() {
    $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#' + this.id
    });

    return false;
});

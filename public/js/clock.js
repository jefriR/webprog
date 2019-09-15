setInterval(500);
var months = ['Jan', 'Feb', 'Mar', 'April', 'Mei', 'Juni', 'Juli', 'Agu', 'Sept', 'Okt', 'Nov', 'Des'];
			var myDays = ['Mon', 'Sun', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			
            var time = document.getElementById('serverTime').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
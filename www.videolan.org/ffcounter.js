/*  Hacked for multi-items
 *
 * 
 * ffcounter.js - A simple "odometer-style" counter for Firefox downloads.
 *
 *  History:
 *      Version 0.5.1:
 *          - Minor tweaks to the way status is displayed.
 *          - Resets the request object right after the information is pulled.
 *      Version 0.5:
 *          - The script now resets the request object to fix errors in Safari.
 *          - Changed the way the script updates status elements.
 *      Version 0.4:
 *          - Added a default counter rate.
 *          - Made minor modifications to the counter status indicator.
 *          - If you don't want the timer on, it doesn't set the timeout.
 *      Version 0.3:
 *          - Changed the timing of HTTP requests to reflect the new feed
 *             refresh rate of once per minute.
 *          - Counter increments on a "tick" instead of a fixed rate.
 *          - Added support for status elements to debug/track counter metrics:
 *              - download rate
 *              - last count
 *              - last time
 *              - HTTP request status
 *              - time until HTTP request
 *              - time between counter ticks
 *      Version 0.2:
 *          - Now calculates download rates between subsequent queries for
 *            better accuracy.
 *          - Only reformats the number on an actual increment.
 *          - Increased the default speed.
 *      Version 0.1:
 *          - Initial release.
 *
 *  Copyright 2005 Infocraft
 *  http://www.infocraft.com/
 *
 *  The latest version of this script can be found at:
 *  http://www.infocraft.com/projects/ffcounter/ffcounter.js
 *
 *  You may use this script in its entirety, modify it to suit your needs,
 *  adapt its functions, or just use it for inspiration.  However, some form
 *  of acknowledgement, especially a link back to http://www.infocraft.com/, is
 *  always appreciated.
 */

/***************************  Adjustable Parameters ***************************/

var counter_url = "/retrieve.php";	// The URL of your counter mirror.
var initial_rate = 0.5;		// The initial rate, in downloads/second.

var counter_id = "vlccounter";	// The id of the counter element.
var dlrate_id = "dlrate";	// The id of the download rate display element.
var last_count_id = "lastcount";	// The id of the last count display element.
var last_time_id = "lasttime";	// The id of the last time display element.
var status_id = "counterstatus";	// The id of the counter status element.
var timer_id = "countertimer";	// The id of the counter timer element.
var tick_id = "ticktime";	// The id of the tick rate element.

/***************************     Static Globals     ***************************/

var current_count = 0.0;

var last_count = 0.0;
var last_time = null;

var download_rate = 0.0;
var tick_time = 0;
var request = null;
var counter_on = false;

/***************************    Public Functions    ***************************/

// This should be called from your HTML, probably as an onload="get_count();"
// event in your <body> tag.
function get_count()
{
	var delay = 60000;

	load_xml(counter_url);
	setTimeout("get_count()", delay);

	if (document.getElementById(timer_id)) {
		set_status(Math.round(delay / 1000));
	}
}

/***************************    Private Functions   ***************************/

// Advances the status counter, indicating the length until the next increment.
function set_status(time)
{
	var timer = document.getElementById(timer_id);

	timer.firstChild.data = time;

	time--;
	if (time > 0) {
		setTimeout("set_status(" + time + ")", 1000);
	}
}


// Adapted from the good people at ADC:
// http://developer.apple.com/internet/webcontent/xmlhttpreq.html
// this starts loading the XML data and sets up the process_request handler.
function load_xml(url) 
{
	set_element(status_id, "Sending Request");

	// branch for native XMLHttpRequest object
	if (window.XMLHttpRequest) {
		request = new XMLHttpRequest();
		request.onreadystatechange = process_request;
		request.open("GET", url, true);
		request.send(null);

	// branch for IE/Windows ActiveX version
	} else if (window.ActiveXObject) {
		request = new ActiveXObject("Microsoft.XMLHTTP");
		if (request) {
			request.onreadystatechange = process_request;
			request.open("GET", url, true);
			request.send();
		}
	}
}

// This function is called once the request state changes.  It pulls the
// relevant data from the response and sends to update_count().
function process_request()
{
	var response;
	var time;
	var count_item;
	var count;

	set_element(status_id, "Request status: " + request.readyState);

	if (request.readyState == 4) {
		if (request.status == 200) {
			response = request.responseXML;
			time = response.getElementsByTagName('pubDate')[0].firstChild.data;
			count_item = response.getElementsByTagName('item')[0];
			count = count_item.getElementsByTagName('description')[0].firstChild.data;
			update_count(time, count);
		} else {
			alert("Error: " + request.statusText());
		}

		set_element(status_id, "Received: " + (request.statusText ? request.statusText : request.status));
		request = null;
	}
}

// Now that the data from the XML request has been extracted, this updates the
// global variables with that data.
function update_count(time, count)
{
	time = new Date(time);
	count = parseFloat(count.replace(/\D/g,''));

	if (initial_rate > 0 || last_time) {

		if (last_time && time - last_time != 0) {
			download_rate = calculate_rate(time, count);
		} else {
			download_rate = initial_rate;
		}

		tick_time = Math.round(1000.0 / download_rate);

		set_element(tick_id, tick_time);
		set_element(dlrate_id, Math.round(download_rate * 10) / 10.0
				+ (last_time ? "" : " (est.)"));
	}

	last_time = time;
	last_count = count;
	current_count = count;

	set_element(last_count_id, format_count(last_count));
	set_element(last_time_id, format_time(last_time));

	if (!counter_on) {
		counter_on = true;
		update_counter();
	}
}

function update_counter()
{
	
	set_element(counter_id, format_count(Math.round(current_count)));
	current_count++;

	if (tick_time != 0) {
		setTimeout("update_counter()", tick_time);
	} else {
		counter_on = false;
	}
}

/***************************    Utility Functions   ***************************/

// Calculates the number of downloads per update interval.
function calculate_rate(new_time, new_count)
{
	var time_delta = (new_time - last_time) / 1000.0;
	var count_delta = new_count - last_count;
	var rate = count_delta / time_delta;

	return rate;
}

// Formats a count for display by making it into a string and inserting commas.
function format_count(count)
{
	count = count.toString();

	for (var i = count.length - 3; i > 0 ; i -= 3) {
		count = count.slice(0, i) + ',' + count.slice(i, count.length);
	}

	return count;
}

// Formats a time for display.
function format_time(time)
{
	var hour = time.getHours();
	var minutes = time.getMinutes();
	var seconds = time.getSeconds();

	if (minutes < 10)
		minutes = "0" + minutes ;
	if (seconds < 10)
		seconds = "0" + seconds;

	return hour + ":" + minutes + ":" + seconds;
}

// Sets an HTML element with element_id to the given content.
function set_element(element_id, content)
{
	var element;

	if (element = document.getElementById(element_id))
		element.firstChild.data = content;
}

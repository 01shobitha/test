
/* Based on original code from http://www.phpbb.com/about/map/ */

function load()
{
  if (GBrowserIsCompatible())
  {
    var map = new GMap2(document.getElementById("map"));
    map.addControl(new GLargeMapControl());
    map.setCenter(new GLatLng(25.0, 7.5), 2);
    map.setMapType( G_SATELLITE_MAP );

    // So we can reference the map outside of this load function
    globalMap = map;

    // Function to create a pin and its popup.
    function createMarker(point, icon, pintext)
    {
      var marker = new GMarker(point, icon);
      GEvent.addListener(marker, "click", function()
      {
        marker.openInfoWindowHtml(pintext, {maxWidth: 350});
      });
      return marker;
    }

    // Grab all the user information from the dynamic XML file and loop
    // through it.
    GDownloadUrl("team.xml", function(data, responseCode)
    {
      var xml = GXml.parse(data);
      var markers = xml.documentElement.getElementsByTagName("marker");
      var bounds = new GLatLngBounds();

      for (var i = 0; i < markers.length; i++)
      {
        // Generate the pin image and its proper color.
        icon = new GIcon();
        icon.image = "http://www.videolan.org/favicon.ico";
        icon.iconSize = new GSize(16, 16);
        icon.iconAnchor = new GPoint(8, 8);
        icon.infoWindowAnchor = new GPoint(8, 8)

        // Assign coordinates to the pin.
        var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
                                parseFloat(markers[i].getAttribute("lon")));

        // Compile all the user's information and format it for the pin popup.
        pintext = "<table width='350' cellpadding='0' cellspacing='0' border='0' id='pinTextTable'>";
        pintext += "<tr>"
        if( markers[i].getAttribute("picture") && markers[i].getAttribute("pic_width") && markers[i].getAttribute("pic_height") )
        {
          pintext += "<td width='100' nowrap='nowrap' valign='top' rowspan='2' class='imgTD'><img src='" + markers[i].getAttribute("picture") + "' width='" + markers[i].getAttribute("pic_width") + "px' height='" + markers[i].getAttribute("pic_height") + "px' /></td>";
        }
        else
        {
          pintext += "<td width='100' nowrap='nowrap' valign='top' rowspan='2' class='imgTD'><img src='http://images.videolan.org/images/cone-soppera10.png' width='60px' height='80px' /></td>";
        }

        pintext += "<td valign='top' class='contentTD'>"
        pintext += "<div class='name' style='white-space: nowrap;'>";
        // Does the user have a full name?
        if (markers[i].getAttribute("fullname"))
        {
          pintext += markers[i].getAttribute("fullname") + " (" + markers[i].getAttribute("username") + ")";
        }
        // If not, just display the plain 'ole username.
        else
        {
          pintext += markers[i].getAttribute("username");
        }
        pintext += "</div>";

        pintext += "<span style='font-weight: bold; font-size: 1.1em;";
        if( markers[i].getAttribute( "color" ) )
        {
          pintext += "color: #" + markers[i].getAttribute("color") + ";"
        }
        pintext += "'>" + markers[i].getAttribute("title") + "</span><br />";

        // Does the user have a location?
        if (markers[i].getAttribute("location"))
        {
          pintext += "from " + markers[i].getAttribute("location") + "<br /><br />";
        }
        else
        {
          pintext += "<br />";
        }

        // Does the user have a blurb?
        if (markers[i].getAttribute("blurb"))
        {
          pintext += markers[i].getAttribute("blurb") + "<br /><br />";
        }
        else
        {
          pintext += "<br />";
        }

        // Does the user have a website?
        if (markers[i].getAttribute("website"))
        {
          pintext += "<a href='" + markers[i].getAttribute("website") + "'>Personal Website</a>";
        }

        pintext += "</td></tr></table>";

        // Plot the pin on the map.
        map.addOverlay(createMarker(point, icon, pintext));
        bounds.extend( point );
      }
      map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
    });
  }
}

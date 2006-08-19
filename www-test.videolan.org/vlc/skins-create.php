<?php
   $title = "VLC media player - Skins";
   $lang = "en";
   $date = "28 March 2003";
   $menu = array( "vlc", "skins" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> HowTo create your own skin </h1>

<h2>Sections</h2>

<ul>
  <li><a href="#basic">Basic principles</a></li>
  <li><a href="#bezier">Bezier curves</a></li>
  <li><a href="#bitmap">Bitmaps</a></li>
  <li><a href="#xml">XML file</a></li>
  <li><a href="/vlc/skins-event.html">Events</a></li>
  <li><a href="#compression">Compression</a></li>
  <li><a href="#tools">Tools and advice</a></li>
</ul>

<h2><a name="basic"></a>Basic principles</h2>

<p>A skin (or theme, the two words have almost the same meaning) for VLC is
made of many BMP files (Windows Bitmap format) containing all the images
needed, and of an XML file describing how these images should be displayed, what
happens when the user clicks on a button, etc.</p>
<p>Those of you who have already done skins for other softwares shouldn't
have too many difficulties to understand how all this works.</p>

<h2><a name="bezier"></a>Bezier curves</h2>

<p>One cool thing with VLC sliders is that they are not necessarily
rectilinear, but they can follow any Bezier curve. So if you want to have a 
slider moving on a half-circle, or even doing a loop, you can !</p>
<p>This is not the place to explain how these curves work, the only thing
to know is that a Bezier curve can be caracterised by a set of points. Once you
have them (thanks to the graphical utility presented at the end of this file,
for example), you just need to enter the list of abscissas in the 'abs'
attribute and the list of ordinates (in the same order...) into the 'ord'
attribute.</p>
<p>The separator is the coma. Exemple: abs="2,45,88" ord="50,120,50"</p>
<p>Bezier curves are used for the SliderControl and the PlaylistControl
tags.</p>

<h2><a name="bitmap"></a>The bitmaps</h2>

<p>Basically, you need one bitmap file by state of control. For example,
with a image control you'll need 1 image, with a button 2 images (or 3 if you
provide the disabled state). A slider will also need 2, one for the static part
and another for the mobile part. Of course, the same bitmap file can be used
for many controls, provided you want to display the same image!</p>
<p>The bitmap format doesn't allow a transparent color, but in the XML file
you can specify a color that will be considered as transparent wherever it
appears in the bitmap file.</p>

<h2><a name="xml"></a>The XML file</h2>

<p>XML is a markup language, like HTML. It won't be explained here any
further, please use Google if you don't know what is XML. You'll see, it's 
rather easy to understand.</p>
<p>The XML file used for the VLC skins follows a predefined DTD. You can
find this DTD in VLC CVS, and its reading is strongly advised, since it contains
most of the default values used for the parameters. A skin that doesn't follow
the DTD with which VLC was compiled won't be loaded by VLC (and it might even
crash it...).</p>

<p>For a better comprehension of what follows, you should have a look at
the DTD (in modules/gui/skin/parser/dkin.dtd) and/or at an example of valid xml
skin (such as modules/gui/skin/skins/default/theme.xml).</p>

<p>OK, let's go for an enumeration of the different tags and their
attributes :</p>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">Theme</td>
    <td>The main tag.</td>
  </tr>
  <tr>
    <td class="skins-att">magnet</td>
    <td class="skins-att">Allows to select the range of action (in pixels) of 
magnetism with border of screen: that is to say when the distance between the 
border of the screen and a window is less than this value, the window will 
stick to the border. 0 means no magnetism. Default is "9".
    </td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">ThemeInfo</td>
    <td>You can enter here some information about you (but this
   information is currently unused by VLC...)</td>
  </tr>
  <tr>
    <td class="skins-att">name</td>
    <td class="skins-att">Not yet supported.</td>
  </tr>
  <tr>
    <td class="skins-att">author</td>
    <td class="skins-att">Not yet supported.</td>
  </tr>
  <tr>
    <td class="skins-att">email</td>
    <td class="skins-att">Not yet supported.</td>
  </tr>
  <tr>
    <td class="skins-att">webpage</td>
    <td class="skins-att">Not yet supported.</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">Bitmap</td>
    <td>Associates a bitmap file with a name (=identifiant) th
at will be Used by the various controls. Obviously, you need one Bitmap tag for 
each bitmap file you have.</td>
  </tr>
  <tr>
    <td class="skins-att">id</td>
    <td class="skins-att">This is the name of the bitmap that will be used with
controls ( 2 bitmaps shouldn't have the same name).</td>
  </tr>
  <tr>
    <td class="skins-att">alphacolor</td>
    <td class="skins-att">This is the transparency color of the bitmap. It must
be indicated with the following format: "#RRGGBB" (where RR stands for the
hexadecimal value of the red component, GG for the green one, and BB for the 
blue one).</td>
  </tr>
  <tr>
    <td class="skins-att">file</td>
    <td class="skins-att">This attribute is used to indicate the path 
and name of the bitmap file used. This path can be absolute (but you should 
avoid it as often as possible), or relative to the path of the xml file.</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">Event</td>
    <td>An action that will be associated to a control later.</td>
  </tr>
  <tr>
    <td class="skins-att">id</td>
    <td class="skins-att">This is the name of the event that will be used with
controls. (2 events shouldn't have the same name).</td>
  </tr>
  <tr>
    <td class="skins-att">event</td>
    <td class="skins-att"><a href="/vlc/skins-event.html">See events</a></td>
  </tr>
  <tr>
    <td class="skins-att">key</td>
    <td class="skins-att">This is the shortcut key associated with the event. 
This means that the event will be executed when hitting the correspounding key.
It must be indicated with the following format : "MOD+L" where MOD is the
modifier key ("CTRL" or "ALT") and "L" is the letter in uppercase ("MOD+"
is optional). Default is "none".
    </td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">Font</td>
    <td>Declares a font to be used in a TextControl or PlaylistControl.</td>
  </tr>
  <tr>
    <td class="skins-att">id</td>
    <td class="skins-att">This is the name of the font that will be used with
controls. Default is "default". (2 fonts shouldn't have the same name).</td>
  </tr>
  <tr>
    <td class="skins-att">font</td>
    <td class="skins-att">This is the name of the font. Default is "arial".
</td>
  </tr>
  <tr>
    <td class="skins-att">size</td>
    <td class="skins-att">This is the size of the font, in points. Default is
"12".</td>
  </tr>
  <tr>
    <td class="skins-att">color</td>
    <td class="skins-att">This is the color of the font with the following 
format, "#RRGGBB" (see Bitmap). Default is "#000000" (black).</td>
  </tr>
  <tr>
    <td class="skins-att">weight</td>
    <td class="skins-att">This is the weight of the font. It must be
between 0 and 1000. Default is "400" (normal weight). Fewer is thinner...</td>
  </tr>
  <tr>
    <td class="skins-att">italic</td>
    <td class="skins-att">Sets if the font must be in italic format. Default
is "false".</td>
  </tr>
  <tr>
    <td class="skins-att">underline</td>
    <td class="skins-att">Sets if the font must be underlined. Default is
"false".</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">Window</td>
    <td>A window that will appear on screen.</td>
  </tr>
  <tr>
    <td class="skins-att">id</td>
    <td class="skins-att">This is the name of the window (it will be only used
for events but it is important : 2 windows shouldn't have the same name).</td>
  </tr>
  <tr>
    <td class="skins-att">visible</td>
    <td class="skins-att">Sets if the window should appear or not at the launch
of VLC. Default is "true".</td>
  </tr>
  <tr>
    <td class="skins-att">x</td>
    <td class="skins-att">Sets the left position of the window. Default is "0".
    </td>
  </tr>
  <tr>
    <td class="skins-att">y</td>
    <td class="skins-att">Sets the top position of the window. Default is 
"0".</td>
  </tr>
  <tr>
    <td class="skins-att">fadetime</td>
    <td class="skins-att">Sets the time in milliseconds of the hide/show fading
transition. Default is "500".</td>
  </tr>
  <tr>
    <td class="skins-att">alpha</td>
    <td class="skins-att">Sets the transparency of the window. It must be
between 1 and 255. 1 is nearly total transparency and should be avoided. 255 is
total opacity. Default is "255". You should use high values.</td>
  </tr>
  <tr>
    <td class="skins-att">movealpha</td>
    <td class="skins-att">Sets the transparency of the window when the window
is moving. Same range as alpha. Default is "255".</td>
  </tr>
  <tr>
    <td class="skins-att">dragdrop</td>
    <td class="skins-att">Sets if drag and drop of media files is allowed in
this window. Default is "true".</td>
  <tr>
    <td class="skins-att">playondrop</td>
    <td class="skins-att">Sets if a dropped file is played directly (true)
or only enqueued (false). This attribute has no effect if dragdrop is set
to "false". Default is "true".</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">ControlGroup</td>
    <td>Adds an offset to the elements it contains. A
ControlGroup is only supposed to ease the job of the skin designer, who can
adjust the position of a group of controls without modifying all the
coordinates, but you can ignore it if you want (only one ControlGroup is
necessary, just inside Window). ControlGroup tags can be nested.</td>
  </tr>
  <tr>
    <td class="skins-att">x</td>
    <td class="skins-att">Try and guess. Default is "0".</td>
  </tr>
  <tr>
    <td class="skins-att">y</td>
    <td class="skins-att">What do you think ? Default is "0".</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">Anchor</td>
    <td>Creates a "magnetic point" in the current Window. If
an anchor of another Window enters in the range of action of this anchor, the 2
anchors will automatically be on the same place, and the windows are "sticked". 
Each anchor has a priority ('priority' attribute), and the anchor with the
highest priority is the winner, which means that when moving its Window all
the other anchored Windows will move too. To break the effect of 2 linked
anchors, you need to move the Window whose anchor has the lower priority.</td>
  </tr>
  <tr>
    <td class="skins-att">x</td>
    <td class="skins-att">Is it really necessary to explain ? Default is "0".
    </td>
  </tr>
  <tr>
    <td class="skins-att">y</td>
    <td class="skins-att">... Default is "0".</td>
  </tr>
  <tr>
    <td class="skins-att">priority</td>
    <td class="skins-att">Priority of anchor (see the previous description).
No default, must de defined!</td>
  </tr>
  <tr>
    <td class="skins-att">range</td>
    <td class="skins-att">Range of action of the anchor, in pixels. Default is
"10".</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">ImageControl, ButtonControl, CheckBoxControl,
TextControl, SliderControl, PlaylistControl</td>
    <td>The various visual controls that constitute a
Window. They share some properties: 'x' and 'y' for the position, 'visible'
for the initial state, 'id' for identifying them (only needed if you want to
create an event acting on this particular control) and 'help' for a short
description of the control that could be displayed in a special TextControl
(see below). All the controls can also accept events, and you have the
possibility to associate many events to a control at once, separing them
with semicolons.</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">ImageControl</td>
    <td>Creates a simple image. Useful for backgrounds.</td>
  </tr>
  <tr>
    <td class="skins-att">image</td>
    <td class="skins-att">This attribute must be set to an identifiant of a
Bitmap tag.</td>
  </tr>
  <tr>
    <td class="skins-att">onclick</td>
    <td class="skins-att">The 'event' attribute can be used to associate an
event to the image (the event is triggered by a click on the image).
Typical use: an Event made with 'WINDOW_MOVE(window)' (where window' is
the id of a Window) can be associated to an ImageControl of this
Window. Hence the Window can be moved via the image...</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">ButtonControl</td>
    <td>Creates a button.</td>
  </tr>
  <tr>
    <td class="skins-att">up</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing the up
state of the button.</td>
  </tr>
  <tr>
    <td class="skins-att">down</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing the down
state of the button.</td>
  </tr>
  <tr>
    <td class="skins-att">disabled</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing the
disabled state of the button.</td>
  </tr>
  <tr>
    <td class="skins-att">onclick</td>
    <td class="skins-att">Event executed when clicking on the
button. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onmouseover</td>
    <td class="skins-att">Event executed when the mouse cursor enters the
button. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onmouseout</td>
    <td class="skins-att">Event executed when the mouse cursor leaves the
button. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">tooltiptext</td>
    <td class="skins-att">Used to display a tooltip. Default is "none" (no
tooltip).</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">CheckBoxControl</td>
    <td>Creates a checkbox, i.e. a button with 2 states
(checked/unchecked). So you need 6 images for a full-featured checkbox: each
state has a basic image, an image corresponding to a click not yet released,
and an image for the disabled control. If you supply only the basic images,
the other ones will be identical.</td>
  </tr>
  <tr>
    <td class="skins-att">img1</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing
control in state 1.</td>
  </tr>
  <tr>
    <td class="skins-att">clickimg1</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for
drawing control when clicking on it in state 1. Default is the value of 'img1'
attribute.</td>
  </tr>
  <tr>
    <td class="skins-att">img2</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing control in 
state 2.</td>
  </tr>
  <tr>
    <td class="skins-att">clickimg2</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing control
when clicking on it in state 2. Default is the value of 'img2' attribute.</td>
  </tr>
  <tr>
    <td class="skins-att">disabled1</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing control in
state 1 when disabling. Default is the value of 'img1' attribute.</td>
  </tr>
  <tr>
    <td class="skins-att">disabled2</td>
    <td class="skins-att">Identifiant of a Bitmap. Used for drawing control in
state 1 when disabling. Default is the value of 'img2' attribute.</td>
  </tr>
  <tr>
    <td class="skins-att">onclick1</td>
    <td class="skins-att">Event executed when clicking on the control in state
1. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onclick2</td>
    <td class="skins-att">Event executed when clicking on the control in state
2. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onmouseover1</td>
    <td class="skins-att">Event executed when the mouse cursor enters the
button in state 1. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onmouseout1</td>
    <td class="skins-att">Event executed when the mouse cursor leaves the
button in state 1. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onmouseover2</td>
    <td class="skins-att">Event executed when the mouse cursor enters the
button in state 2. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">onmouseout2</td>
    <td class="skins-att">Event executed when the mouse cursor leaves the
button in state 2. Default is "none".</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">TextControl</td>
    <td>Creates a text.</td>
  </tr>
  <tr>
    <td class="skins-att">font</td>
    <td class="skins-att">The font to use, which must be one of the 
Font identifiants.</td>
  </tr>
  <tr>
    <td class="skins-att">text</td>
    <td class="skins-att">The text to display.</td>
  </tr>
  <tr>
    <td class="skins-att">align</td>
    <td class="skins-att">Either 'left' or 'center' or 'right'.
       Default is "left".</td>
  </tr>
  <tr>
    <td class="skins-att">scroll</td>
    <td class="skins-att">If set to 'true', the text will scroll if it does not 
fit into the 'scrollspace'. Default is "true".</td>
  </tr>
  <tr>
    <td class="skins-att">scrollspace</td>
    <td class="skins-att">Size in pixel between two occurences of the text
when scrolling. Default is "20".</td>
  </tr>
  <tr>
    <td class="skins-att">display</td>
    <td class="skins-att">This value is a bit special, it allows to have a text
auto-updated by VLC. Possible values are 'time', 'left_time', 'total_time',
'file_name' (for the current file namewith its path), 'title' (for the name
without the path) and 'help' (for a help about the controls that defined their
'help' attribute). You can specify several types by separating them with
semicolons. To switch between then, just double-click on the text. Useful to
switch between 'time' and 'left_time'.</td>
  </tr>
  <tr>
    <td class="skins-att">width</td>
    <td class="skins-att">Width of the text in pixels. If set to "0", the width
is automatically calculated to fit with the current text. Default is "0".</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">SliderControl</td>
    <td>Creates a slider. The 'abs' and 
'ord' attributes are needed for the Bezier curve that the slider will
follow. 'up' and 'down' are the images of the slider. The 'tooltiptext' 
attribute works, and the slider will automatically append the percentage of the 
position.</td>
  </tr>
  <tr>
    <td class="skins-att">type</td>
    <td class="skins-att">Two 'types' of sliders are predefined: 'time' for a
slider allowing to seek in the stream, and 'volume' for a volume slider. Default
is "time".</td>
  </tr>
  <tr>
    <td class="skins-att">up</td>
    <td class="skins-att">Identifiant of a Bitmap.</td>
  </tr>
  <tr>
    <td class="skins-att">down</td>
    <td class="skins-att">Identifiant of a Bitmap.</td>
  </tr>
  <tr>
    <td class="skins-att">abs</td>
    <td class="skins-att">See SliderControl description and bezier curve
description.</td>
  </tr>
  <tr>
    <td class="skins-att">ord</td>
    <td class="skins-att">See SliderControl description and bezier curve
description.</td>
  </tr>
  <tr>
    <td class="skins-att">tooltiptext</td>
    <td class="skins-att">Used to display a tooltip. Default is "none" (no
tooltip).</td>
  </tr>
</table>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">PlaylistControl</td>
    <td>Creates a playlist. This tag must 
contain a SliderControl tag (to allow scrolling in the playlist). If the 
playlist contains entries wider than the list width, an automatic tooltip will 
appear with the full name of the entry. The other attributes are rather easy to
understand...</td>
  </tr>
  <tr>
    <td class="skins-att">width</td>
    <td class="skins-att">Width of the list, in pixels. This is the whole width
for file name, number of files in the playlist and info text. Default is "200".
</td>
  </tr>
  <tr>
    <td class="skins-att">infowidth</td>
    <td class="skins-att">Width in pixel of the info text. Default is "50".
    </td>
  </tr>
  <tr>
    <td class="skins-att">font</td>
    <td class="skins-att">The font to use, which must be one of the Font
       identifiants.</td>
  </tr>
  <tr>
    <td class="skins-att">playfont</td>
    <td class="skins-att">The font to use for current playing file, which must 
be one of the Font identifiants. Default is "none".</td>
  </tr>
  <tr>
    <td class="skins-att">selcolor</td>
    <td class="skins-att">Color in "#RRGGBB" format of the selected files.
       Default is "#0000FF" (blue).</td>
  </tr>
  <tr>
    <td class="skins-att">abs</td>
    <td class="skins-att">See PlaylistControl description and bezier curve
       description.</td>
  </tr>
  <tr>
    <td class="skins-att">ord</td>
    <td class="skins-att">See PlaylistControl description and bezier curve
description.</td>
  </tr>
</table>


<h2><a name="compression"></a>Compression</h2>

<p>Once your skin is finished, instead of keeping many bitmap files and the
XML file, you can compress them in a .tar.gz archive (Winzip and UmtimateZip
can do it perfectly, for example). Before doing so, don't forget to rename your
XML file into "theme.xml", or VLC won't be able to read it...  Then rename
your compressed file with the .vlt extension and... that's all! VLC can load
directly skins with the .vlt extension.</p>

<h2><a name="tools"></a>Tools and advice</h2>

<p>To generate easily Bezier curves, you can use the <a
href="/vlc/skins/VLC-curve-maker.exe">curve-maker</a>. Basically,
you add and remove points at will, and you can move them to see how the
curve evolves. When you have reached the perfect curve, you just have
to copy-paste the list ob abscisses and ordinates in the 'abs' and 'ord'
attributes of your SliderControl or PlaylistControl. The curve-maker
also allows to load a bitmap, this could be useful if you want to follow a
specific pattern of a slider, for example.</p>

<p>When you are creating your skin, you may want to see the VLC messages
where some errors are logged. For this, open a dos window, go to the
directory where VLC is installed, and type "vlc -I skin -v --extraintf logger".
This should open VLC and a log window (what's more, the logs should be
saved in a file called vlc-log.txt). The interesting lines are those with "skin
interface"...</p>

<p>For the Bitmap tags, don't use absolute paths but relative paths
(they are relative to the XML file directory), so that your skin can be reused
by anybody without a particular file structure.</p>

<p>To fully use the possibilities given, you should look at how other
skins are made, it's often very useful.</p>


<h2>Good luck!</h2>

<?php footer('$Id$'); ?>

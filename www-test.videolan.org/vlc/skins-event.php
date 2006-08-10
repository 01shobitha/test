<?php
   $title = "VLC media player - Skins events";
   $lang = "en";
   $date = "28 March 2003";
   $menu = array( "vlc", "skins" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1>Skins events</h1>

<h2>What is an event ?</h2>

<p>Events are the dynamic part of the skins. It means that beyond visual
aspect, the interface must react with the user actions. An event describes a
simple interaction, in fact one simple action such as playing a file, hiding a
window... So when designing a skin you will have to specify what those
interactions are. For this you will use simple actions that are described in
event tags and you would be able to add them and associate them to controls.</p>

<h2>How to create an event ?</h2>

<p>An event describes a simple action as seen above.
All attributes are explained in the 'skins-howto.txt' file except the
'event' attribute wich is a bit special. In the 'event' attribute you will enter
a simple script with the following syntax :</p>

<pre style="margin-left: 50px;">"EVENT(parameter1,parameter2,...)"</pre>

<ul>
  <li>The number of parameters depends on EVENT.</li>
  <li>All this is case sensitive.</li>
  <li>Don't add spaces.</li>
</ul>

<p>EVENT is the action to execute, it can be one of the followings</p>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">EVENT</td>
    <td align="center">Description and parameters</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_NOTHING</td>
    <td class="skins-att">None, it executes nothing so don't use it
    !</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_SHOW</td>
    <td class="skins-att">Open all windows of the interface with a
    fading effect if selected.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_HIDE</td>
    <td class="skins-att">Close all windows of the interface with a
    fading effect if selected.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>An EVENT to execute when all windows have been
    closed.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">VLC_QUIT</td>
    <td class="skins-att">Quit the interface</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_OPEN</td>
    <td class="skins-att">Open an "open file dialog box" to open a
    file to play.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_ON_TOP</td>
    <td class="skins-att">Toggle the "Always on top" status</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_LOAD_SKIN</td>
    <td class="skins-att">Open an "open file dialog box" to change
    the current skin.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_LOG_SHOW</td>
    <td class="skins-att">Not supported yet</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_INTF_REFRESH</td>
    <td class="skins-att">Force refreshing of the interface.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_CHANGE_TRAY</td>
    <td class="skins-att">If VLC is not visible in system tray, show
    it, else, hide it.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_CHANGE_TASKBAR</td>
    <td class="skins-att">If VLC is not visible in taskbar, show it,
    else, hide it.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_FULLSCREEN</td>
    <td class="skins-att">Switch current playing file to fullscreen mode.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_PLAY</td>
    <td class="skins-att">Play stream.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_STOP</td>
    <td class="skins-att">Stop playing stream.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_PAUSE</td>
    <td class="skins-att">Pause the stream.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_NEXT</td>
    <td class="skins-att">Go to next file in playlist.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_PREV</td>
    <td class="skins-att">Go to previous file in playlist.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_SLOWER</td>
    <td class="skins-att">Play a stream slower.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_FASTER</td>
    <td class="skins-att">Play a stream faster.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_STREAMPOS</td>
    <td class="skins-att">Not supported yet.</td>
  </tr>
  <tr>
    <td class="skins-att">VLC_VOLUME_CHANGE</td>
    <td class="skins-att">Change sound volume.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>VLC_VOLUME_MUTE: switch to mute mode.<br/>
    VLC_VOLUME_UP: raise sounds volume.<br />
    VLC_VOLUME_DOWN:<br />
    VLC_VOLUME_SET: set sound volume to second parameter.</li>
    <li>If first parameter is VLC_VOLUME_SET only, an integer 
    between 0 and 100.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">VLC_PLAYLIST_ADD_FILE</td>
    <td class="skins-att">Open an "open file dialog box" to add 
    files to playlist.</td>
  </tr>
  <tr>
    <td class="skins-att">WINDOW_MOVE</td>
    <td class="skins-att">Initiate manual window movement.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>Must match the ID of a window. It should be used
    with image controls.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">WINDOW_OPEN</td>
    <td class="skins-att">Open a window with a fading effect if
    selected.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>ID of the window to open.</li>
    <li>Describe what to do. Nothing is opening. 'TRUE' is the
    same. 'FALSE' is closing window. 'CHANGE' is switching between these two
    states.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">WINDOW_CLOSE</td>
    <td class="skins-att">Close a window with a fading effect if
    selected.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>ID of the window to close.</li>
    <li>Describe what to do. Nothing is closing. 'TRUE' is the
    same. 'FALSE' is opening window. 'CHANGE' is switching between these two
    states.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">CTRL_SET_SLIDER</td>
    <td class="skins-att">Not supported yet.</td>
  </tr>
  <tr>
    <td class="skins-att">CTRL_SET_TEXT</td>
    <td class="skins-att">Not supported yet.</td>
  </tr>
  <tr>
    <td class="skins-att">CTRL_ID_VISIBLE</td>
    <td class="skins-att">Hide/show a control.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>ID of the control to hide/show.</li>
    <li>Describe what to do. Nothing is showing control. 
    'TRUE' is the same. 'FALSE' is hiding control. 'CHANGE' is switching between
    these two states.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">CTRL_ID_ENABLED</td>
    <td class="skins-att">Not supported yet.</td>
  </tr>
  <tr>
    <td class="skins-att">CTRL_ID_MOVE</td>
    <td class="skins-att">Moves a control.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>ID of the control to move.</li>
    <li>Horizontal offset of movement.</li>
    <li>Vertical offset of movement.</li></ol></td>
  </tr>
  <tr>
    <td class="skins-att">PLAYLIST_ID_DEL</td>
    <td class="skins-att">Remove items from playlist.<br />
    <i>Parameters:</i>
    <ol class="skins-att"><li>ID of the playlist.</li></ol></td>
  </tr>
</table>

<h2>What to do with event ?</h2>

<p>When creating your event, you must assign an ID to each of them.
Now you have to associate events with controls. Some attributes of some controls
are supposed to be filled with those IDs. That is to say that when the action
correspounding to the attribute will be done, the event associated will be
executed. The best exemple is assigning an event to the 'onclick' attribute of a
button control. The event will be executed when clicking on the button.
You can execute several events. To do this you just have to separate
them with semicolon.</p>
<p>Exemple:</p>

<pre style="margin-left: 50px;">
&lt;ButtonControl [...] onclick="event1;event2;event3"/&gt;
</pre>

<h2>Do I have to create every event for each skin ?</h2>

<p>No, a set of predefined events are present. Here they are with their ID
and shortcut.</p>

<table class="skins-tag">
  <tr>
    <td class="skins-tag">ID</td>
    <td class="skins-tag">Description</td>
    <td class="skins-tag">Shortcut</td>
  </tr>
  <tr>
    <td class="skins-att">tray</td>
    <td class="skins-att">Hide or show in the system tray.</td>
    <td class="skins-att"></td>
  </tr>
  <tr>
    <td class="skins-att">taskbar</td>
    <td class="skins-att">Hide or show in the taskbar.</td>
    <td class="skins-att">CTRL+B</td>
  </tr>
  <tr>
    <td class="skins-att">play</td>
    <td class="skins-att">Play.</td>
    <td class="skins-att">X</td>
  </tr>
  <tr>
    <td class="skins-att">pause</td>
    <td class="skins-att">Pause.</td>
    <td class="skins-att">C</td>
  </tr>
  <tr>
    <td class="skins-att">stop</td>
    <td class="skins-att">Stop.</td>
    <td class="skins-att">V</td>
  </tr>
  <tr>
    <td class="skins-att">next</td>
    <td class="skins-att">Next file.</td>
    <td class="skins-att">B</td>
  </tr>
  <tr>
    <td class="skins-att">prev</td>
    <td class="skins-att">Previous file.</td>
    <td class="skins-att">Z</td>
  </tr>
  <tr>
    <td class="skins-att">slow</td>
    <td class="skins-att">Play slower.</td>
  </tr>
  <tr>
    <td class="skins-att">fast</td>
    <td class="skins-att">Play faster.</td>
  </tr>
  <tr>
    <td class="skins-att">fullscreen</td>
    <td class="skins-att">Switch to fullscreen mode.</td>
    <td class="skins-att">F</td>
  </tr>
  <tr>
    <td class="skins-att">mute</td>
    <td class="skins-att">Mute the sound.</td>
    <td></td>
  </tr>
  <tr>
    <td class="skins-att">volume_up</td>
    <td class="skins-att">Volume up</td>
    <td></td>
  </tr>
  <tr>
    <td class="skins-att">volume_down</td>
    <td class="skins-att">Volume down</td>
    <td></td>
  </tr>
  <tr>
    <td class="skins-att">quit</td>
    <td class="skins-att">Quit VLC.</td>
    <td class="skins-att">CTRL+C</td>
  </tr>
  <tr>
    <td class="skins-att">open</td>
    <td class="skins-att">Open a file.</td>
    <td class="skins-att">CTRL+O</td>
  </tr>
  <tr>
    <td class="skins-att">add_file</td>
    <td class="skins-att">Add a file.</td>
    <td class="skins-att">CTRL+A</td>
  </tr>
  <tr>
    <td class="skins-att">load_skin</td>
    <td class="skins-att">Change skin.</td>
    <td class="skins-att">CTRL+S</td>
  </tr>
  <tr>
    <td class="skins-att">on_top</td>
    <td class="skins-att">Toggle the "Always on top" status.</td>
    <td class="skins-att">CTRL+T</td>
  </tr>
  <tr>
    <td class="skins-att">show_prefs</td>
    <td class="skins-att">Show the Preferences dialog box.</td>
    <td></td>
  </tr>
  <tr>
    <td class="skins-att">show_info</td>
    <td class="skins-att">Show the FileInfo dialog box.</td>
    <td></td>
  </tr>
  <tr>
    <td class="skins-att">show_log</td>
    <td class="skins-att">Show the Messages dialog box.</td>
    <td></td>
  </tr>
  <tr>
    <td class="skins-att">hide_log</td>
    <td class="skins-att">Hide the Messages dialog box.</td>
    <td></td>
  </tr>
</table>

<?php footer('$Id$'); ?>

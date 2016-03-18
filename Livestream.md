

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_livestream.gif' alt='Livestream' width='857' height='241' /></p>

The Livestream plugin checks for the start of a live video broadcast every few seconds. It is useful because users don't have to keep refreshing the web page to see if the broadcast has begun.


---


There are six parameters:

  * **RTMP Stream** - Name or ID of live video broadcast to keep checking
  * **Image** - A poster image to display at the end of the live video broadcast
  * **Interval** - Number of seconds between checking for the video (smaller time intervals will put unnecessary strain on your server
  * **Message** - Text to display while Livestream is checking for the live broadcast to begin
  * **Streamer** - RTMP Media server that broadcasts the live video
  * **Tags (advanced)** - See [JW FLV Player Livestream](http://developer.longtailvideo.com/trac/wiki/PluginsLivestream) documentation

**Please note**: The Livestream plugin requires custom configuration by a developer for your particular RTMP media streaming service. Contact your IT support for further information.

The relevant Media Player Livestream code can be found here: http://code.google.com/p/moodle-mplayer/source/browse/trunk/lib.php currently at around line 933 - `function mplayer_list_streamer()`


---


## Livestream Demo ##

You can see the Livestream plugin in action, continuously checking for a non-existent broadcast, here: http://matbury.com/moodle/mod/mplayer/view.php?id=627 (Login as a guest)


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/PluginsLivestream
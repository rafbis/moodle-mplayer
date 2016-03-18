

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_hd.gif' alt='HD' width='863' height='182' /></p>

The HD plugin provides an alternative high-definition video so that users can switch between high or low definition video according to their internet connection speeds.


---


There are four parameters:

  * **Bitrate** - For RTMP media servers, it's necessary to set the desired bandwidth to enable automatic bandwidth switching
  * **HD Video File** - The video file or video stream ID to play
  * **Switch to HD on Fullscreen** - Automatically switch to high-definition video when users switch to full screen mode
  * **Default HD** - Always start with high-definition video. Users can switch between high and normal definition at any time.

**Please note**: For progressive download video, when users switch between high and low definition, the video restarts. It also restarts when users switch full screen on or off.


---


## Known Bug ##

As of 28th January 20010, there is a known bug with the HD plugin. With progressive download videos, e.g. videos in the Moodle course files directory, when the video file has downloaded completely, users can no longer switch between high and normal definition. Hopefully, the developers at LongtailVideo.com will resolve this issue soon.


---


## HD Demo ##

You can see the HD plugin in action here: http://matbury.com/moodle/mod/mplayer/view.php?id=629


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/PluginsHd
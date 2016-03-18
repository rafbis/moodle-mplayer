

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_audio_description.gif' alt='Audiodescription' width='857' height='154' /></p>

The Audio Description plugin synchronises an MP3 audio file with the video. It has a variety of uses including Section 508 accessibility, multilingual support, voice-overs, etc.


---


## How to use ##

The 3 parameters are:

  * **MP3 File** - The MP3 audio that you want to synchronise with the video
  * **Auto Start** - Start playing audio immediately (there's currently a bug in this)
  * **Volume** - Volume of the MP3 audio (independent of the video audio)

  1. Click on the "Choose or upload a file..." button
  1. Select the MP3 audio file you want to synchronise with the video
  1. Set the Auto Start and Volume parameters as desired

**Please note**: Users can switch the Audio Description on and off as desired. If you want to replace the video audio, set the video volume to 0.


---


## Known Bug ##

As of 28th January 2010, there is a bug in the Audio Description plugin. The audio always starts automatically, whether the video plays or not, ignoring the Auto Start parameter. However, the audio and video are synchronised once video playback commences. Hopefully, the developers at LongtailVideo.com will fix this bug soon.


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/PluginsAudiodescription
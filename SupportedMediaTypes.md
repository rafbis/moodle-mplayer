

## What can I play using the Media Player module? ##

The Media Player module and the media player it uses, the [FLV Player](http://longtailvideo.com) by Jeroen Widjering, supports all the media types that Flash Player supports. These are:

## Video Media Containers ##

The Media Player module supports the following video media containers:

  * **FLV** - (.flv) - Video for Adobe Flash Player
  * **F4V** - (.f4v) - Video for Adobe Flash Player for using H.264 CODEC
  * **F4P** - (.f4p) - DRM`*` Video for Adobe Flash Player
  * **MOV** - (.mov) - Apple's Quicktime video
  * **MP4** - (.mp4) - Commonly used video format based on MOV
  * **M4V** - (.m4v) - Apple's DRM`*` video for iPods, iPhones, etc. based on MOV
  * **3GPP** - (.3gp, .3g2) - Commonly used on mobile devices

`*` Digital Rights Management

**Please note:** MP4 and M4V are all based on the MOV video container format and there is very little difference between them. Also, see this explanation about them on [Wikipedia.org](http://en.wikipedia.org/wiki/MP4#.MP4_versus_.M4A_file_extensions).


---


## Audio Media Containers ##

The Media Player module supports the following audio media containers:

  * **MP3** - (.mp3) - The most commonly and widely used and supported audio file type
  * **F4A** - (.f4a) - Audio for Adobe Flash Player
  * **F4B** - (.f4b) - Audio Book for Adobe Flash Player
  * **M4A** - (.m4a) - Apple's DRM`*` audio and audio books for iPods, iPhones, etc.


---


## Image and Animation Media Containers ##

The Media Player module supports the following image media containers:

  * **GIF** - (.gif) - Bitmap graphic images. Best for simple graphics and logos. Only displays the first frame of animated images.
  * **PNG** - (.png) - Combined bitmap and vector graphic images. Only displays the first frame of animated images.
  * **JPEG** - (.jpg, .jpeg) - Bitmap graphic images. Best for photos. Only displays the first frame of animated images.
  * **SWF** - (.swf) - Full support of still and animated and bitmap vector graphics.


---


## The Media Player module doesn't support ##

Flash Player and therefore the JW FLV Player and the Media Player module don't support and cannot play Microsoft proprietary file formats:

  * **AVI** - (.avi) - Audio Video Interleave
  * **WMV** - (.wmv) - Windows Media Video
  * **WMA** - (.wma) - Windows Media Audio

If you have videos in any of the above formats they most probably won't play in the Media Player module. (I say most probably because one guy managed to get a WMV video to play on a development server but it wouldn't work on a production server.) For best results, recode the source video files to a format that Flash Player does support. If you transcode WMV or AVI files to FLV, MOV, MP4, etc., it'll significantly degrade the video quality and leave "artefacts" in the video streams.


---


## Don't confuse media containers with CODECs ##

CODEC is short for "Coder - Decoder" which means they handle the compression and decompression of audio, video and images. A media container can support several different CODECs. The Media Player module supports the following CODECs:


### FLV Media Container ###

  * **Video:** On2 VP6, Sorenson Spark (Sorenson H.263), Screen video, H.264
  * **Audio:** MP3, ADPCM, Linear PCM, Nellymoser, Speex, AAC


### F4V Media Container ###

  * **Video:** H.264
  * **Audio:** AAC, HE-AAC, MP3
  * **Images:** GIF, PNG, JPEG (will only display the first frame of animated image files)
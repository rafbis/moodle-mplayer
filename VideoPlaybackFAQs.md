

This page contains the most common problems that users have reported when playing back video using the Media Player module in Moodle.


---


## Why do some of my videos take several minutes to start playing? ##

This is usually cause by the way that the video file has been encoded and applies to video files played back using progressive download. Progressive download is the way that most web video is deployed. When the video player starts, it starts downloading the video file. The player can also start playing the parts of the video that have downloaded before the entire video file has finished downloading.

The video player has to read the MOOV atom in the video file before play back can commence. If the MOOV atom is at the beginning of the video file, play back can start immediately but if it's at the end, the entire video has to download, which can take anything from a few seconds to several minutes depending on the video file size and the user's internet connection speed.

### Solution: ###

When encoding video, always make sure that your using CODEC software that puts the MOOV atom at the beginning of the file. Some software packages have an "optimise for web" or "enable progressive download" option that has to be checked.

There's also a useful tool that can, in some cases, move the MOOV atom without having to recode video files here: http://renaun.com/blog/2008/02/25/250/


---


## Why won't my video files play back from another domain? ##

The Flash Player security model protects your computer by not allowing Flash applications to load any files from other domains.

### Solution ###

The correct procedure is to use a correctly configured cross domain XML policy file. See this page for more information: http://code.google.com/p/moodle-mplayer/wiki/CrossDomainSecurity
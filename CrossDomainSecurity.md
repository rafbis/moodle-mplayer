

## What is cross domain security? ##

The Flash Player security model protects your computer by not allowing Flash applications to load any files from other domains. For example, a Media Player is deployed on this domain:

```
http://mydomain.com/
```

and a video file is deployed on this domain:

```
http://anotherdomain.com/
```

If the video player at `http://mydomain/moodle/mod/mplayer/jw/player.swf` tries to load the video file hosted at `http://anotherdomain.com/videos/videofile.mp4`, the Flash Player security model will throw an error and prevent it from loading. This security feature can be circumvented with a proxy script on your server but it is not recommended because of the security risks this entails.

The correct procedure is to use a correctly configured cross domain XML policy file. Check the Adobe Flash Player documentation for the most up to date specifications for crossdomain.xml policy files.


---


## The Flash Player security model has changed ##

There are a lot of examples and tutorials about how to configure crossdomain.xml policy files but many of them are out of date and might not work. See here for a more up-to-date tutorial: http://www.adobe.com/devnet/flashplayer/articles/fplayer9_security.html

Please remember that crossdomain.xml policy files were created to protect users' computers and your servers. It is not recommended to use any methods that circumvent the Flash Player security model, such as proxy scripts, as they can leave computers and servers vulnerable to malicious code attacks.


---


## When you don't need a crossdomain.xml policy file ##

Many media hosting sites already have a "catch all" crossdomain.xml policy file in place. Sites like YouTube.com and TED.com all allow you to play videos hosted on their servers.


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/FlashSecurity


<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_configxml.gif' alt='Config XML' width='858' height='103' /></p>

A config.xml file is an external file that configures the Media Player's parameters. It's useful because you can use a single file to set the parameters of any number of Media Players and edit their settings in one place.

Any parameters set on the Media Player configuration page will override the settings in the config.xml file.


---


There's only one parameter:

  * **File** - The config.xml file


---


## Example Config.xml File ##

The following is an example of a config.xml file. The XML node names are the same as the FlashVars names. [See this page for a full list of FlashVars](http://developer.longtailvideo.com/trac/wiki/Player5FlashVars).

```
<?xml version="1.0" encoding="utf-8"?>
<config>
   <image>files/bunny.jpg</image>
   <repeat>true</repeat>
   <backcolor>333333</backcolor>
   <volume>40</volume>
   <playlist>right</playlist>
   <playlist.size>150</playlist.size>
   <controlbar>over</controlbar>
</config>
```


---


There is no demo of this feature.
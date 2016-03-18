

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_captions.gif' alt='Captions' width='856' height='181' /></p>

The Captions plugin displays captions (or subtitles) synchronised with the video playback.


---


There are four parameters:

  * **Transparent Background** - Puts a semi-transparent background area behind the the captions making them easier to read but obscuring part of the video window.
  * **Captions File** - The captions to display. Anything entered here activates the Captions plugin.
  * **Font Size** - The size of the captions text (some captions files also contain text formatting information)
  * **Show Captions** - Whether captions are shown by default or not. Users can also turn them on or off.


---


## What are the advantages of external captions files? ##

There are several advantages:

  * **They're easier to read** - They're real text, not graphic images of text so when they scale up or down, they're clear and legible.
  * **You can change the size and formatting of the text** - Again, they're real text so you can change the font, style, size, etc. at any time without having to re-edit and recode the video.
  * **It's easier to create external captions files** - There are a number of free and not so free tools available to create your own captions files.
  * **It's easier to edit them** - They're essentially text files so you can also edit them with a simple text editor. If you find typos or other mistakes when you've finished a project it can take just a few seconds or minutes to correct them.
  * **You can have any number of different captions files for the same video** - External captions are ideal for multilingual support or different versions of captions for the same video, such as director's or lecturer's notes.
  * **They're more search engine friendly (SEO)** - Since they're essentially text, search engines can easily find and catalogue them, giving much more accurate information about the content of your videos.


---


## Example captions file ##

Here is the captions file from the demo on the Media Player Demo. You can find the demo here: http://matbury.com/moodle/mod/mplayer/view.php?id=622 (Login as a guest).

```
<tt xmlns="http://www.w3.org/2006/10/ttaf1">
	<body>
		<div xml:id="captions">
			<p begin="00:00" end="00:08">matbury.com</p>
			<p begin="00:08" end="00:09.9">Thank you. Thank you very much ladies and gentlemen.</p>
			<p begin="00:10" end="00:14.9">Um, we'd like to do a sketch for you now. It's called the Hedge Sketch...</p>
			<p begin="00:14" end="00:22">...and it's set in a shop. The Hedge Sketch. Thank you very much indeed.</p>
			<p begin="00:22" end="00:24">Hello, I'd like to buy a hedge please.</p>
			<p begin="00:24" end="00:26">Good morning sir, how can I help you?</p>
			<p begin="00:26" end="00:28">Well, what sorts have you got?</p>
			<p begin="00:28" end="00:31">A hedge? Certainly sir. What sort would you like?</p>
			<p begin="00:31" end="00:32">Could I have a look at the Imperial please?</p>
			<p begin="00:32" end="00:43">Well, we have three sorts sir. We have the Royal, the Imperial and the Standard hedge.</p>
			<p begin="00:43" end="00:49">No, it's a present.</p>
			<p begin="00:49" end="00:55">Certainly sir, um. May I ask, is the hedge for you?</p>
			<p begin="00:55" end="00:57">I'm not married.</p>
			<p begin="00:57" end="01:01">For your wife perhaps.</p>
			<p begin="01:01" end="01:02">Not at all. I'm in no hurry.</p>
			<p begin="01:02" end="01:05">Well, if you wouldn't mind waiting, I'll just ring down to the stock...</p>
			<p begin="01:05" end="01:09">Start again, start again.</p>
			<p begin="01:11" end="01:12">Good morning sir, how can I help you?</p>
			<p begin="01:12" end="01:14">Hello, I'd like to buy a hedge.</p>
			<p begin="01:14" end="01:16">A hedge, certainly sir. What sort of hedge would you like?</p>
			<p begin="01:16" end="01:24">Well, we have three sorts sir. We have the Royal, the Imperial and the Standard hedge.</p>
			<p begin="01:24" end="01:27">Can I have a look at the Imperial please?</p>
			<p begin="01:27" end="01:31">Certainly sir. May I ask, is the hedge for you?</p>
			<p begin="01:31" end="01:33">Um, no, it's a present.</p>
			<p begin="01:33" end="01:35">Ah, for your wife perhaps.</p>
			<p begin="01:35" end="01:37">I'm not married.</p>
			<p begin="01:37" end="01:39">Well, if you wouldn't mind waiting, I'll just ring down to the stockroom.</p>
			<p begin="01:39" end="01:43">Not at all. I'm in no hurry.</p>
			<p begin="01:46" end="01:47">Well, there's no telephone.</p>
			<p begin="01:47" end="01:48">It's under the table.</p>
			<p begin="01:48" end="01:51">Under, under there.</p>
			<p begin="01:51" end="01:57">Hello, stockroom? Have we got any Imperial hedges left?</p>
			<p begin="01:57" end="02:00">I'll just have a look.</p>
			<p begin="02:00" end="02:04">Thanks. He's just having a look.</p>
			<p begin="02:04" end="02:05">We've got one left sir.</p>
			<p begin="02:05" end="02:08">Right, I'll take it then.</p>
			<p begin="02:15" end="02:20">Ah, you seem to be in luck sir. Stockroom tells me we've got one left.</p>
			<p begin="02:20" end="02:21">Cash if you don't mind.</p>
			<p begin="02:21" end="02:24">Certainly sir. How would you like to pay?</p>
			<p begin="02:24" end="02:27">Start again, start again.</p>
			<p begin="02:30" end="02:31">Good morning sir, how can I help you?</p>
			<p begin="02:31" end="02:32">Hello, I'd like to buy a hedge.</p>
			<p begin="02:32" end="02:33">Certainly sir. What sort of hedge would you like?</p>
			<p begin="02:33" end="02:34">Well, what sorts have you got?</p>
			<p begin="02:34" end="02:36">We have three sorts sir. We have the Royal, the Imperial and the Standard hedge.</p>
			<p begin="02:36" end="02:37">Can I have a look at the Imperial please?</p>
			<p begin="02:37" end="02:38">Certainly sir. May I ask, is the hedge for you?</p>
			<p begin="02:38" end="02:39">No, it's a present.</p>
			<p begin="02:39" end="02:40">For your wife perhaps.</p>
			<p begin="02:40" end="02:41">I'm not married.</p>
			<p begin="02:41" end="02:42">Oh, if you wouldn't mind waiting, I'll just ring down to the stockroom.</p>
			<p begin="02:42" end="02:43">Not at all. I'm in no hurry.</p>
			<p begin="02:43" end="02:44">Err, hello stockroom?</p>
			<p begin="02:44" end="02:45">Come on. On the phone.</p>
			<p begin="02:45" end="02:48">Hello stockroom? Err, do we have any hedges left?<br />He's just checking. You're in luck, we have one left.</p>
			<p begin="02:48" end="02:50">Right, I'll take it then.</p>
			<p begin="02:50" end="02:51">Err, certainly sir. How would you like to pay?</p>
			<p begin="02:51" end="02:52">Cash if you don't mind.</p>
			<p begin="02:52" end="02:57">Cash would be perfectly convenient sir.</p>
			<p begin="03:00" end="03:18">matbury.com</p>
		</div>
	</body>
</tt>
```


---


## Captions writing and editing software ##

You can create and edit captions files in any simple text editor. However, it's easy to make mistakes that will stop your captions from being readable by the Media Player. It's also much quicker and more accurate to use one of the many captioning software packages available.

There are two main formats of external captions that the Media Player supports:

  1. TimedText also known as SubRip
  1. SMIL XML also known as RealText

### Free captioning software ###

  * [SubRip](http://zuggy.wz.cz/): By far the most popular captions software editor. It can also "rip" subtitles from DVDs, convert them into text and export them in a variety of captions file formats with very little effort.

  * [MAGPie](http://ncam.wgbh.org/invent_build/web_multimedia/tools-guidelines/magpie): Award winning captions editor for educational purposes.

  * [CaptionTube](http://captiontube.appspot.com/): Yep, you can create SubRip (.srt) caption files on-line at YouTube.com!

### Paid for captioning software ###

  * [Hi-Caption Studio](http://www.hisoftware.com/products/hicaptionstudio.html): Supports a number of captions formats. I haven't tried it.

If you know of any other software for creating SMIL XML or SubRip captions files please post links in the comments below. Thanks in advance!


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/PluginsCaptions
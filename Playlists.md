

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_media_source.gif' alt='Media Source' width='861' height='155' /></p>

There are two parameters to edit here:

  * Media File - Select the playlist file to play here.
  * Type - Select XML Playlist

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_playlist.gif' alt='Playlist' width='866' height='205' /></p>

Parameters for the playlist's appearance and behaviour:

  * Position - bottom, right or over
  * Size (pixels) - the width or height, depending on the position, of the playlist
  * Start Item - which item in the playlist to play first (starts at 0)
  * Repeat - none, list, always, single
  * Shuffle - Play videos in the list in a random order


---


## SMIL XML Playlist ##

Here's an example of a SMIL XML format playlist. You can see a demo of this playlist in action here: http://matbury.com/moodle/mod/mplayer/view.php?id=632 (Login as a guest)

```
<?xml version="1.0" encoding="utf-8"?>
<smil>
	<head>
		<meta name="TED Talks" content="Playlist of TED Talks videos to demonstrate the Moodle Media Player plugin"/>
	</head>
	<body>
		<seq>
			<par>
				<video title="Kiran Bir Sethi teaches kids to take charge" src="http://video.ted.com/talks/podcast/KiranBirSethi_2009I_480.mp4" author="TED Talks" alt="Kiran Bir Sethi shows how her groundbreaking Riverside School in India teaches kids life's most valuable lesson: I can. Watch her students take local issues into their own hands, lead other young people, even educate their parents." image="http://matbury.com/moodle/file.php/9/thumbs/kiran_sethi.jpg"/>
				<anchor href="http://www.ted.com/talks/kiran_bir_sethi_teaches_kids_to_take_charge.html"/>
			</par>
			<par>
				<video title="Charles Fleischer insists all things are Moleeds" src="http://video.ted.com/talks/podcast/CharlesFleischer_2005_480.mp4" author="TED Talks" alt="In a presentation that can only be described as epic, comedian Charles Fleischer delivers a hysterical send-up of a time-honored TED theme: the map. Geometry, numbers, charts and stamp art also factor in (somehow), as he weaves together a unique theory of everything called Moleeds." image="http://matbury.com/moodle/file.php/9/thumbs/charles_fleischer.jpg"/>
				<anchor href="http://www.ted.com/talks/charles_fleischer_insists_all_things_are_moleeds.html"/>
			</par>
			<par>
				<video title="Christopher deCharms looks inside the brain" src="http://video.ted.com/talks/podcast/ChristopherdeCharms_2008_480.mp4" author="TED Talks" alt="Neuroscientist and inventor Christopher deCharms demonstrates a new way to use fMRI to show brain activity -- thoughts, emotions, pain -- while it is happening. In other words, you can actually see how you feel." image="http://matbury.com/moodle/file.php/9/thumbs/christopher_decharms.jpg"/>
				<anchor href="http://www.ted.com/talks/christopher_decharms_scans_the_brain_in_real_time.html"/>
			</par>
			<par>
				<video title="Captain Charles Moore on the seas of plastic" src="http://video.ted.com/talks/podcast/CharlesMoore_2009U_480.mp4" author="TED Talks" alt="Captain Charles Moore of the Algalita Marine Research Foundation first discovered the Great Pacific Garbage Patch -- an endless floating waste of plastic trash. Now he's drawing attention to the growing, choking problem of plastic debris in our seas." image="http://matbury.com/moodle/file.php/9/thumbs/charles_moore.jpg"/>
				<anchor href="http://www.ted.com/talks/capt_charles_moore_on_the_seas_of_plastic.html"/>
			</par>
		</seq>
	</body>
</smil>
```


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/Player5Formats#XMLPlaylists
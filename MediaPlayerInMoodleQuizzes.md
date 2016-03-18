

This page gives a brief description of how to include instances of the Media Player module in Moodle quizzes but it is equally applicable to any Moodle pages where it's possible to create objects using HTML code.


---


## How it works ##

This is a simple hack that only requires a small snippet of HTML code to embed video in a Moodle quiz using an iFrame.


---


## How to do it ##

  1. Create a Media Player instance anywhere in a Moodle course and make a note (or copy) of the player instance URL, e.g. `http://localhost/moodle/mod/mplayer/view.php?id=26`
  1. In the same curse, create a quiz module instance
  1. Create a question in the question bank where you want the video to be displayed
  1. While editing the question, turn the HTML editor on (click on "<>") and include the following HTML code in the page:
```
<iframe src="http://localhost/moodle/mod/mplayer/embed.php?id=26" width="100%" height="400" >
<p>Your browser does not support iframes</p>
</iframe>
```

Please note that the URL has been changed from:
```
http://localhost/moodle/mod/mplayer/view.php?id=26
```
to
```
http://localhost/moodle/mod/mplayer/embed.php?id=26
```
The "embed.php" page is a simplified version of view.php without the standard Moodle navigation menus.

The iframe height parameter should be about 50 pixels greater than the height of the Media Player video instance height parameter.
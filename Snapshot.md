

<p><img src='http://matbury.com/tutorials/mplayer-docs/mplayer_snapshot.gif' alt='Snapshot' width='857' height='127' /></p>

The Snapshot plugin takes snapshot images of frames of the video currently being played. The images are saved in a sub-directory of the Moodle course files directory.


---


There are two parameters:

  * **Bitmap** - There are two options `true` (default) takes the snapshot of the video frame and sends it to the server-side script or `false` sends frame position data to a server-side script which can then extract the frame there (this script is not supplied).
  * **Script** - The server-side script that saves the snapshot on the server. A demo snapshot script which provides basic functions is provided for testing purposes. Select "Demo Snapshot Script".


---


## How to take a snapshot ##

  1. Go to a Media Player video page with Snapshot enabled and play the video
  1. At the desired point in the video, click on "Select frame at... " at the top of the video window (you can also pause the video)
  1. It will send the snapshot to the server and display, "Sending snapshot, please wait..."
  1. After a second or two it should display, "Snapshot sent; click to return or select another frame"
  1. Click on "click to return"
  1. A new window will open in your browser, showing the snapshot
  1. You can download the snapshot or, if you have teacher capabilities or higher, you can find the image in the course files directory

**Please note**: For security reasons, the provided Snapshot script can only take snapshots of videos hosted on the same site as your Moodle. Allowing users to take Snapshots of videos on unknown, unverified sites is a security risk. Snapshot doesn't work on videos hosted on YouTube.com.


---


## How to configure ##

The Snapshot plugin will not work "out of the box", it requires a little configuration.

### How it works ###

The moodle/mod/mplayer/scripts/snapshot.php script is configured to save video snapshots in the course files directory, in a folder called `/snapshots/`, in a sub-folder with the users' ID as the name, e.g. `snapshots/1/` would be for a guest user, `snapshots/2/` would most probably be the site administrator and `snapshots/3/`, `snapshots/4/`, etc. would be other users. If a user's directory does not exist in the course files directory, the script cannot save the snapshot image and will return an error. In this way, it is possible to control exactly who can and can't save snapshots on a user by user, course by course basis.

### Setting up a snapshots directory for a user ###

  1. On the desired Moodle course, go to: People > Participants and a list of user for that course will appear
  1. Click on a user's name to go to their profile page
  1. In the browser address bar you should see something like: `http://example.com/user/view.php?id=4&course=13` (`id=4` is the user ID and `course=13` is the course ID)
  1. On the course page, go to Administration > Files
  1. Click on "Make a folder" and name it `snapshots`
  1. Inside the `snapshots` folder, make another folder and call it `4` (the user ID number)
  1. That's it. User '4' can now save video snapshots using the Snapshots plugin.
  1. Repeat step 6 for each user that you want to give permission to.

Other scripts can be used and they're quite simple to write or edit. Any PHP developer should be able to create custom scripts to do exactly what you want.


---


## Snapshot Demo ##

See a demo of the Snapshot plugin in action: http://matbury.com/moodle/mod/mplayer/view.php?id=631 (Login as a guest)


---


JW FLV Player developer documentation: http://developer.longtailvideo.com/trac/wiki/PluginsSnapshot
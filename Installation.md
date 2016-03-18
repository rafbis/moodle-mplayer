

Installing the Media Player Activity Module plugin is a short, simple process:

  1. Download the latest version of the [Media Player here](http://code.google.com/p/moodle-mplayer/downloads/list)
  1. Unzip the package and upload its contents to `MOODLE/mod/mplayer`
  1. Check that your mplayer directory isn't "double skinned", i.e. `MOODLE/mod/mplayer/mplayer`
  1. Login to Moodle and go to Administration > Notifications
  1. The Media Player Activity Module will install
  1. That's it.

If you experience any problems, such as a blank screen or error messages when trying to create instances of the Media Player module immediately after installation/upgrade, try this:

  1. Go to Administration > Modules > Activities > Media Player
  1. (Optional) Adjust any site wide Media Player module settings
  1. Save Changes

This will prevent any empty parameter values from being passed on the the Media Player module and triggering errors.
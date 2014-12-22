Getting Started
===============

Get to know the Terminal
------------------------

The terminal is your friend! OS X comes with the Terminal application (which you can find under `Applications > Utilities`), but I personally find [iTerm 2](http://iterm2.com/) much more robust and customizable.

The method of text input on the command line and the accompanying feeling of overwhelming power can be hard to work with at first, but try to push yourself to do more and more from the command line. You should quickly find it to be flexible and significantly faster than clicking through GUIs.

Install Homebrew
----------------

[Homebrew](http://brew.sh/) is a package manager for command line utilities for OS X. It manages dependencies and versions quiet articulately. When installing a command line utility, always opt for using Homebrew.

TL;DR

`ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`

Install git
-----------

[git](http://git-scm.com/) is a free and open source, distributed version control system. It works incredibly well for managing project progress and tracking file history.

If you’re following along at home, you should already have Homebrew installed, so all you'll need to do to install git is run:

`brew install git`

Install Node.js
---------------

[Node.js](http://nodejs.org/) is a fast, scalable platform for web applications. We primarily use Node for managing front end script dependencies and compiling CSS from Stylus. Node will install its dedicated package manager, npm, when you install Node.

Again, all you'll need to do to install Node is run a Homebrew command:

`brew install node`

Install EditorConfig
--------------------

[EditorConfig](http://editorconfig.org/) manages basic coding styles between different editors used by different team members.

Once again, we’ll install this with Homebrew.

`brew install editorconfig`

Be sure to install the EditorConfig plugin for your editor:

* [EditorConfig for Sublime](https://github.com/sindresorhus/editorconfig-sublime)
* [EditorConfig for Vim](https://github.com/editorconfig/editorconfig-vim)
* [EditorConfig for Emacs](https://github.com/editorconfig/editorconfig-emacs)
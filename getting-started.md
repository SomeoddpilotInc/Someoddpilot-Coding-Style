Getting Started
===============

Get to know the Terminal
------------------------

The terminal is your friend! OS X comes with the Terminal application (which you can find under `Applications > Utilities`), but I personally find [iTerm 2](http://iterm2.com/) much more robust and customizable.

The method of text input on the command line and the accompanying feeling of overwhelming power can be hard to work with at first, but try to push yourself to do more and more from the command line. You should quickly find it to be flexible and significantly faster than clicking through GUIs.


A fantastic text editor is just three characters away
-----------------------------------------------------

OS X, like most `*NIX` environments, comes with the phenomenal text editor `vim`. Vim allows for fast, repeatable text editing using modes. These modes can be confusing at first, but you will quickly grow to appreciate the level of power and command they offer. If you're interested in learning the basics of Vim, checkout [openvim.com](http://www.openvim.com/).

To use vim to edit a file, run `vim <filename>`.

If you plan to use Vim as your primary text editor, you should install [Vundle](https://github.com/gmarik/Vundle.vim), a package manager for Vim. It makes it very easy to install and update Vim plugins.

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

Install ESLint
--------------

[ESLint](http://eslint.org/) is a powerful linter for Javascript which covers significantly more territory than older Javascript linters.

ESLint can be install via npm.

`npm install eslint -g`

Be sure to install the plugin for your editor:

* [SublimeLinter ESLint](https://github.com/roadhump/SublimeLinter-eslint)
* [Syntastic for Vim](https://github.com/scrooloose/syntastic)

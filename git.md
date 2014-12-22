Git
===

We use git to manage our codebase.

Things you shouldn’t commit
---------------------------

### Binary files

Git works extremely well for tracking textual changes to files. Some changes to files are not so easy to track with git and result in large chunks, increasing the file size of the repo, making each action by other team members gradually slower and slower.

Some common examples of binary files:

* Images (png, jpg, gif, tif, psd)
* Videos (mp4, mov, ogg, webm)
* Webfonts (ttf, otf, eot)

See:

* [Don’t Ever Commit Binary Files to Git](https://robinwinslow.co.uk/2013/06/11/dont-ever-commit-binary-files-to-git/)

### Credentials

Git repos are not entirely secure and should not contain sensitive information. Git repos are by nature easy to reproduce, including the entire history of a project. Once sensitive information is commited, it is incredibily difficult to track down and exterminate. Unfortunately we don’t have an Arnold Schwarzenegger we can send back in time to prevent them from being commited, but we do have tools to help us, so don’t despair too much.

Credentials include:

* SSH keys
* Usernames and passwords
* Software licenses

### Copyrighted and licensed material

We frequently use tools created by other programmers and designers. While the licenses and copyrights for the material we use may permit us to use them in the way we do, including that material in our repos likely violates their terms. Use package managed versions of these utilities and scripts when available.

Copyrighted and licensed material includes:

* Javascript Libraries
* PHP Libraries
* Wordpress Plugins
* Webfonts
* Icon fonts

### Vendor Libraries

Package managers install dependencies into specific directories. These packages are often intended to be used in the development process, not to be included in consuming repos. These directories can be quite large (A npm `node_modules` directory is usually around 30mb!). Packages are managed to avoid having to commit and keep track of changes to dependencies.

* node_modules (npm)
* vendor (compsoer)
* bower_components (bower)

# Source Control

All code should be source controlled.

## Git

We use [git](http://git-scm.com/) as our source control management. Git makes it easy to track changes to files and work in a distributed environment.

Code is versioned based on release milestones.

## Repo

We track our code in repos on two services:

* [Github](https://github.com/) - 6 private repos for unlimited users
* [BitBucket](https://bitbucket.org/) - Unlimited private repos for up to 10 users

For all private, client work, we track repos with BitBucket. These are projects that are sensitive and contain a lot of front end and back end work. These projects need the security and safety of a closed source code.

For open source, abstract work, we track repos with Github. These are projects that we have no issue with everyone in the outside world taking a look at.

## Third Party Code

Due to copyright and other restrictions, third part code should not be source controlled.

Third party code should also be loosely coupled, allowing for future upgrades as they are released.

Packages of third party code should be managed by their respective package manager.

### Reference

* [Storing third-party libraries in source control](http://stackoverflow.com/questions/49196/storing-third-party-libraries-in-source-control)

## Compiled Code

Compiled code should not be included in source control. This includes CSS compiled from SASS, LESS, or Stylus, Javascript from Coffeescript, and Javascript from JST or HBS.

Compiled code changes frequently and already exists in its uncompiled form.

### Reference

* [Should I store generated code - StackOverflow](http://stackoverflow.com/questions/893913/should-i-store-generated-code-in-source-control)

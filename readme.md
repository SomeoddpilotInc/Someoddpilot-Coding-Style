# Someoddpilot Coding Style

## [Practices](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/practices.md)

We have some common practices in our development workflow.

## [Basic Programming Principles](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/principles.md)

Some basic principals apply to all programming, regardless of language.

## [Conventions](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/conventions.md)

Some basic conventions apply across all languages.

## [Source Control](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/source.md)

All code should be source controlled.

## Workflow

* [Front End Workflow](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/front.md)
* [Back End Workflow](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/back.md)

## Languages

* [PHP](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/php.md)
* [Javascript](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/javascript.md)
* [HTML](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/html.md)
* [CSS](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/css.md)

## Templating

[Templating principles](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/templating.md)

## Package management

Package managers allows automation of the installation process of tools and libraries. This installation process can then be repeated easily as the code base is changed, pushed to other developers, and ultimately deployed.

Third party code should never be included in the source of a project and instead be managed via a package.

First party code should be abstracted into a package when feasible.

### npm

Use [npm](http://www.npmjs.org/) to install Node.js modules.

### Composer

Use [Composer](https://getcomposer.org/) to install PHP modules.

### Homebrew

Use [Homebrew](http://brew.sh/) to install OS X command line packages.

### Reference

* [Package Management - Wikipedia](http://en.wikipedia.org/wiki/Package_management_system)

## Code Analysis

### Linters

Code should **always** be linted by the appropriate linter. Sloppy code is dangerous code.

#### Reference

* [Lint - Wikipedia](http://en.wikipedia.org/wiki/Lint_(software))

### Similarities

#### PHPCPD

PHP projects should be run through [PHP Copy Paste Detector](https://github.com/sebastianbergmann/phpcpd).

#### Simian

Projects should be run through [Simian](http://www.harukizaemon.com/simian/) to find lines of code that are similar. These lines should be refactored.

    -excludes={*.sublime-workspace,node_modules,bower_components}
    -includes={**/,}**/*.{js,php,scss,hbs}
    -formatter=plain:simian.txt
    -threshold=4

#### Reference

* [Static program analysis - Wikipedia](http://en.wikipedia.org/wiki/Static_program_analysis)

## Tasks

All common tasks should be automated and configurable.

### Grunt

Use [Grunt](http://gruntjs.com) to create tasks which can be run via the command line or by watching a set of files.

### Reference

* [Build Automation - Wikipedia](http://en.wikipedia.org/wiki/Build_automation)

## Testing

### Unit Testing

Significan modules should always be unit tested. Unit tests provide a quickly repeatable way to automatically test functionality and prevent newer code from interfering with previous code.

#### Behavior Driven

Interactive modules should be tested with behavior driven tests to ensure that interactivity is functional in all environments through all stages of development.

#### Test Driven

Modules with complex, custom CRUD operations or calculations should be developed using test driven fundamentals.

### Browser Testing

Functionality should be tested in latest versions of:

* Safari
* Chrome
* Mozilla
* iOS
* Android
* IE

Testing should occur in native, hardware environment, not emulated.

#### Reference

* [Unit Testing - Wikipedia](http://en.wikipedia.org/wiki/Unit_testing)
* [Behaviour Driven Testing - Wikipedia](http://en.wikipedia.org/wiki/Behavior-driven_development)
* [Test Driven Development - Wikipedia](http://en.wikipedia.org/wiki/Test-driven_development)

## [Reference](https://github.com/alexsomeoddpilot/Someoddpilot-Coding-Style/blob/master/books.md)

We have tons of books on programming. Talk to me and I'll find what you're looking for.

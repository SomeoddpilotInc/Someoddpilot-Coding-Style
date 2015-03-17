# Practices

## Prerequisites

A list of prerequisites should be written before development.

The prerequisites should outline:

* Development structure
* Functionality
* Architecture (file structure)
* Detailed design of components (front end modules, back end modules, plugin integration)
* Environment (Wordpress, Node.js, static)

## Pair Programming

### Reference

Two programmers work together at one workstationg. One, the **driver**, writes code while the other, the **observer**, reviews each line of code as it is typed. The two switch frequently.

* [Pair Programming - Wikipedia](http://en.wikipedia.org/wiki/Pair_programming)

## Testing

### Reference

* [Unit Testing - Wikipedia](http://en.wikipedia.org/wiki/Unit_testing)
* [Behaviour Driven Testing - Wikipedia](http://en.wikipedia.org/wiki/Behavior-driven_development)
* [Test Driven Development - Wikipedia](http://en.wikipedia.org/wiki/Test-driven_development)

## Documenting

Write code that documents itself. Variables should be descriptive and not ambigeous. Code should be simple and clear.

Document with comments when implementation is ambigeous, but strict documentation is not required.

### Reference

* [Self-documenting - Wikipedia](http://en.wikipedia.org/wiki/Self-documenting)

## Quality Assurance

Code should always be tested for correct functionality and performance before staging and production.

## Flow

Work should flow in this pattern:

```
Plan <-----
  V      ^ ^
Test <-  | |
  V    ^ | |
Build >  | |
  V      | |
Verify ->  |
  V        |
Stage      |
  V        |
Approve--->
  V
Production
```

## Phasing out code

Sometimes it comes time to phase code which was used in production, but no longer is used. There are a few ways to handle the phase out.

### Comment out

Commenting out code is the most direct, but is not advised. While commented out code clearly communicates its inactive nature, it presents a false impression that it will work if uncommented.

**Do not leave commented out code in the codebase.**

### Delete code from file

Deleting code from a file is another direct way to remove code from the codebase. The code will be retained in source control, so it if is needed, it can easily be recovered.

Deleting code is the best option if there is no forseeable use for the code in the future.

### Create a configuration option

Sometimes code can be configured to not use the phased out code, while retaining it in the codebase. This is done by way of passing an option to enable or disable the deprecated functionality.

Adding a configuration option is the best solution is the code will likely be used again in the future.

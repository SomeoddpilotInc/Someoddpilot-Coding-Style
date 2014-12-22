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
Plan-------|
  |      | |
Test --| | |
  |    | | |
Build -| | |
  |      | |
Verify --| |
  |        |
Stage      |
  |        |
Approve----|
  |
Production
```

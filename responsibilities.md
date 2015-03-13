# Responsibilities

You are ultimately responsibility for the code you introduce to the code base. You are expected to vet your code and its dependencies.

## Modifying existing code

If you modify existing code, you are responsible for the modifications. Use [`git blame`](http://git-scm.com/docs/git-blame) to uncover and understand where code came from and its history.

## Dependencies

You are expected to add dependencies wisely. Don’t add needless dependencies that can be added with a few lines of existing code.

Be sure to vet each dependency and not introduce critical points which can easily fail due to an untested dependency.

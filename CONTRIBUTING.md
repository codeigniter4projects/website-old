# Contributing to the CodeIgniter.com website

We welcome issues and pull requests, to the *develop* branch,
 to fix bugs, errors or omissions; or to complete approved
work packages.

If you would like to work on one of those, add a comment to the
relevant issue. We will assign volunteers as needed.

## Working Group

We have formed a working group with interested community members,
to address matters of style and content.
Please see the [forum thread](https://forum.codeigniter.com/thread-74262.html)
for details.

The working group will come up with recommendations. Those that are adopted will result
in work package issues in the repo, to guide potential contributors.

## Guidelines

We expect contributions to follow [Git-Flow](http://nvie.com/posts/a-successful-git-branching-model/), 
to conform to our style guide, 
be commented (inside the PHP source files).

Our main repository has a proper [contributing guide](https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing), 
which applies here if you substitute this repo name in it.

## Issues

We use Github issues for bug tracking and for work packages.

Support questions should be posted on our forum.

### Signing

You must [GPG-sign](https://help.github.com/articles/about-gpg/) your work, 
certifying that you either wrote the work or otherwise have the right to pass it 
on to an open source project. 
This is *not* just a "signed-off-by" commit, but instead a digitally signed one.

### Keeping your fork up-to-date

From the command line or git bash shell, you can do the following:

1. `git remote add codeigniter git://github.com/codeigniter4projects/website2.git`
2. `git pull codeigniter develop`
3. `git push origin develop`

Now your fork is up to date. This should be done regularly, or before you send a pull request at least.

The `codeigniter` alias above is arbitrary. It could as well have been `upstream`.

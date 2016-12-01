How To Write a Good Commit Message
==================================

Quick reference
---------------

Example of a good commit:

::

    UserController: Change isAdmin middleware usage

    This entrypoint helps to use the isAdmin middleware to be used properly.
    Now admin can access database queries as well.

    Fixes https://github.com/winuall/winuall-internship-module/issues/21

- `QuestionController : Change question info entrypoint`: Describe the change in
   maximum of 50 characters.

- `This entrypoint.. ..for this`: Describe the reasoning of your changes
   in maximum of 72 characters per line.

- `Fixes https://github.com/winuall/winuall-internship-module/issues/21`: Mention the URL
   of the issue it closes or fixes.

At Winuall we are looking heavily at the maintainability of the code.

.. note::

    Code is more often read than written!

It is obvious that we need good code. In order to do that we are
verifying that every change to our code (i.e. the commits) is making it
better.

What Makes a Good Commit
------------------------

A good commit is atomic. It should describe only one change and not more.

Why? Because we may create more bugs if we had more changes per commit.

How to Write Good Commit Messages
---------------------------------

A commit message consists of 3 parts:

- shortlog
- commit body
- issue reference

Example:

::

    UserController: Change  users' entrypoint

    This entrypoint ensures that Winuall discovers
    the users correctly.
    It helps not writing more functions inside
    ``QuestionController`` for this.

    Fixes https://github.com/winuall/winuall-internship-module/issues/21

Shortlog
~~~~~~~~

Example:

::

    Migration: Migrate create_users_table

-  Maximum of 50 characters.
-  Should describe the *change* - the action being done in the commit.
-  Should have a tag and and a short description separated by a colon (``:``)

   -  **Tag**

      -  The file or class or package being modified.
      -  Not mandatory.

   -  **Short Description**

      - Starts with a capital letter.
      - Written in imperative present tense (i.e. ``Add something``, not
        ``Adding something`` or ``Added something``).
      - No trailing period.

Commit Body
~~~~~~~~~~~

Example:

::

    While creating a migration for users, instead of adding columns, creating a new one is better.
    Customized users table and added important columns like isActive(Boolean), last_seen(TimeStamp) etc.

-  Maximum of 72 chars excluding newline for *each* line.
-  Not mandatory - but helps explain what you're doing.
-  Should describe the reasoning for your changes. This is especially
   important for complex changes that are not self explanatory. This is also
   the right place to write about related bugs.
-  First person should not be used here.

Issue reference
~~~~~~~~~~~~~~~

Example:

::

    Fixes https://github.com/winuall/winuall-internship-module/issues/269

-  Should use the ``Fixes`` keyword if your commit fixes a bug, or ``Closes``
   if it adds a feature/enhancement.
-  Should use full URL to the issue.
-  There should be a single space between the ``Fixes`` or ``Closes`` and the
   URL.

.. note::

    -  The issue reference will automatically add the link of the commit in
       the issue.
    -  It will also automatically close the issue when the commit is
       accepted into Winuall.

.. seealso::

    https://wiki.gnome.org/Git/CommitMessages

More Examples
-------------

Example 1 (fixed bug):
::

    environment: update .env file - Add API_KEY

    When updating the .env, API key is now called from the environment file instead of hardcoding it.

    Fixes https://github.com/winuall/winuall-internship-module/issues/269

Example 2 (implemented feature):
::

    Last Seen: Now shows users' last seen in profile

    This massively helps students to check when the user/expert was last online.

    Closes https://github.com/winuall/winuall-internship-module/issues/299

Why Do We Need Good Commits?
----------------------------

-  An atomic commit is way easier to review. The reviewer thus will be
   able to review faster and find more bugs due to the lower complexity
   of the change.
-  Atomic commits are like good objects in object oriented programming -
   you can split up a bigger thing into many small objects. Reducing
   complexity is the key to developing good software and finding its bug
   before they occur.
-  Good commit messages make it easy to check at a glance what happened
   in a time range.
-  It is way easier to revert single changes without side effects.
   Reverting multiple commits at a time is easy, reverting a part of a
   commit is not.
-  ``git blame`` will be much more effective. It is the best
   documentation you can get. The older your code is, the more
   documentation it has. The better the commit messages are, the better
   is your hidden documentation. Your commit messages document the
   reason for every single change you did to any line.
-  ``git bisect`` will be much more effective. If you bisect through
   atomic commits to find the commit which caused a bug, you should be
   able to identify the real cause of the bug fastly. Good commit
   messages and atomicity of commits are key to that ability.
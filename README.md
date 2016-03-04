# cookiecutter-mediawiki-extension
A [Cookiecutter](https://github.com/audreyr/cookiecutter) template for MediaWiki extensions.

## Features (current)
* Comes with all features of the [upstream BoilerPlate](https://www.mediawiki.org/wiki/Extension:BoilerPlate) extension.

## Features (future)
* Makefile support
* License support
* Tests using PHPUnit

## Optional Integrations
*These features can be enabled during initial project setup.*

* Different extension types
    * [Parser Functions](https://www.mediawiki.org/wiki/Manual:Parser_functions)
    * [Tag Extensions](https://www.mediawiki.org/wiki/Manual:Tag_extensions)
    * [Special Pages](https://www.mediawiki.org/wiki/Manual:Special_pages)

* Integration with [Gerrit](https://www.mediawiki.org/wiki/Gerrit) (using git-review)

## Constraints
* Cannot create MediaWiki skins. See [](https://github.com/JonasGroeger/cookiecutter-mediawiki-skin/) for that.


## Usage
Let's pretend you want to create a MediaWiki extension called "ExampleMan". Rather than cloning the
[BoilerPlate extension](https://www.mediawiki.org/wiki/Extension:BoilerPlate), and then changing every occurrence of
`BoilerPlate` by hand, use [cookiecutter](https://github.com/audreyr/cookiecutter) to do all the work.

First, get cookiecutter. Trust me, it's awesome::

    $ pip install cookiecutter

Now run it against this repo::

    $ cookiecutter https://github.com/JonasGroeger/cookiecutter-mediawiki-extension.git

You'll be prompted for some questions, answer them, then it will create a custom MediaWiki extension for you.

**Warning**: No warnings right now.

It prompts you for questions. Answer them::

    TODO

Enter the project and take a look around::

    $ cd ExampleMan/
    $ ls

Create a GitHub repo and push it there::

    $ git init
    $ git add .
    $ git commit -m "Initial commit: MediaWiki extension ExampleMan"
    $ git remote add origin git@github.com:JonasGroeger/ExampleMan.git
    $ git push -u origin master

Now take a look at your repo. Don't forget to carefully look at the generated README.md. Awesome, right?

For development, see the following for local development:


## Support This Project
This project is maintained by volunteers. Support their work by contributing or spreading the word.


## "Your Stuff"
Scattered throughout this project there are places marked with "Your Stuff". This is where third-party libraries are to
be integrated with your project.


## Releases
Want a stable release? You can find them at https://github.com/JonasGroeger/cookiecutter-mediawiki-extension/releases


## Not Exactly What You Want?
This is what I want. *It might not be what you want.* Don't worry, you have options:

### Fork This
If you have differences in your preferred setup, I encourage you to fork this to create your own version.
Once you have your fork working, let me know and I'll add it to a '*Similar Cookiecutter Templates*' list here.
It's up to you whether or not to rename your fork.

If you do rename your fork, I encourage you to submit it to the following places:

* [cookiecutter](https://github.com/audreyr/cookiecutter) so it gets listed in the README as a template.

### Or Submit a Pull Request
I also accept pull requests on this, if they're small, atomic, and if they make my own project development
experience better.
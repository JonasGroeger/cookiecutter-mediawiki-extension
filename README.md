# cookiecutter-mediawiki-extension

[![Up-To-Date with Upstream](https://img.shields.io/badge/Up--To--Date (upstream)-%E2%9C%93-brightgreen.svg?style=flat-square)](https://github.com/wikimedia/mediawiki-extensions-BoilerPlate)

A [Cookiecutter](https://github.com/audreyr/cookiecutter) template for
MediaWiki extensions.

## Features
* Comes with all features of the [upstream BoilerPlate](https://www.mediawiki.org/wiki/Extension:BoilerPlate)
  extension.
* Makefile support (`make help`, `make install`, `make update`, `make test`)

## Features (future)
* License support
* Tests using PHPUnit

## Optional Integrations
*These features can be enabled during initial project setup.*

* Set the extension type
    * [Parser Functions](https://www.mediawiki.org/wiki/Manual:Parser_functions) (parserhook)
    * [Special Pages](https://www.mediawiki.org/wiki/Manual:Special_pages) (specialpage)
    * [Tag Extensions](https://www.mediawiki.org/wiki/Manual:Tag_extensions) (not sure?! please help)
    * … and more!
* Add an example special page `[[Special:HelloWorld]]`
* Add an example parser hook `{{#something: }}`
* Integration with [Gerrit](https://www.mediawiki.org/wiki/Gerrit) (using git-review)

## Constraints
* Cannot create MediaWiki skins. See [cookiecutter-mediawiki-skin](https://github.com/JonasGroeger/cookiecutter-mediawiki-skin/)
for that. (In theory, you can select the skin option, but it doesent do
anything special for skins right now. A separate repository is better imho.)

## Usage
Let's pretend you want to create a MediaWiki extension called "SomeExtension".
Rather than cloning the [BoilerPlate extension](https://www.mediawiki.org/wiki/Extension:BoilerPlate),
and then changing every occurrence of `BoilerPlate` by hand, use [cookiecutter](https://github.com/audreyr/cookiecutter)
to do all the work.

First, get cookiecutter. Trust me, it's awesome:

    $ pip install cookiecutter

Now run it against this repo:

    $ cookiecutter https://github.com/JonasGroeger/cookiecutter-mediawiki-extension.git

You'll be prompted for some questions, answer them, then it will create a
custom MediaWiki extension for you.

**Note**: If you want to conform with all naming conventions (PHP, JS/CSS,
Composer) you should watch closely when filling out the project template
parameters. The default values are conforming with all conventions.

It prompts you for questions. Answer them:

    $ cookiecutter https://github.com/JonasGroeger/cookiecutter-mediawiki-extension.git
    Cloning into 'cookiecutter-mediawiki-extension'...
    remote: Counting objects: 151, done.
    remote: Compressing objects: 100% (102/102), done.
    remote: Total 151 (delta 57), reused 140 (delta 46), pack-reused 0
    Receiving objects: 100% (151/151), 28.13 KiB | 0 bytes/s, done.
    Resolving deltas: 100% (57/57), done.
    Checking connectivity... done.
    repo_name [ExtensionName]: SomeExtension
    description [A short description of the extension.]: This will be an extension that adds a parser hook.
    jscss_prefix [extensionName]: someExtension
    composer_vendor_name [vendorname]: jonasgroeger
    composer_package_name [some-extension]: 
    version [0.1.0]: 
    author_name [Your Name]: Jonas Gröger
    url [https://github.com/...]: https://github.com/JonasGroeger/SomeExtension
    i18n_prefix [someextension]:  
    license [GPL v2]: 
    Select extension_type:
    1 - api
    2 - antispam
    3 - datavalues
    4 - media
    5 - parserhook
    6 - semantic
    7 - skin
    8 - specialpage
    9 - variable
    10 - other
    Choose from 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 [1]: 5
    integration_add_example_parser_hook [y]: y
    integration_add_example_special_page [y]: y
    integration_add_gerrit [y]: y

Enter the project and take a look around:

    $ cd SomeExtension/
    $ ls

Create a GitHub repo and push it there:

    $ git init
    $ git add .
    $ git commit -m "Initial commit: MediaWiki extension SomeExtension"
    $ git remote add origin git@github.com:JonasGroeger/SomeExtension.git
    $ git push -u origin master

Now take a look at your repo. Don't forget to carefully look at the generated
README.md. Awesome, right?

## Support This Project
This project is maintained by volunteers. Support their work by contributing or
spreading the word.

## Not Exactly What You Want?
This is what I want. *It might not be what you want.* Don't worry, you have
options:

### Fork This
If you have differences in your preferred setup, I encourage you to fork this
to create your own version. Once you have your fork working, let me know and
I'll add it to a '*Similar Cookiecutter Templates*' list here. It's up to you
whether or not to rename your fork.

If you do rename your fork, I encourage you to submit it to the following
places:

* [cookiecutter](https://github.com/audreyr/cookiecutter) so it gets listed in
  the README as a template.

### Or Submit a Pull Request
I also accept pull requests on this, if they're small, atomic, and if they make
my own project development experience better.

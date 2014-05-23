# C
***

We're working on something exciting and this is how we're telling the world.

Our setup
---------
- WordPress as a Git submodule in `/wp/`
- Custom content directory in `/content/` (cleaner, and also because it can't be in `/wp/`)
- `wp-config.php` in the root (because it can't be in `/wp/`)

Getting Started
---------------
- From the command line navigate to your future site directory. (on non windows machines it might be something like `cd documents/dev/sites/`).
- Run `git clone --recursive`.
- Then navigate to `/content/themes/ywam_thailand_c`.
- If your machine already has ruby and [Bundlr](http://bundler.io/) installed you can move on to the next step. If your on a Unix based system (that includes Mac's) you already have ruby others will need to find instructions for setting ruby up in their environment. The internet is full of tutorials for every platform so you should be fine. Now just run `gem install bundler`!
- For most of you your last step will be `bundle install`.

For those of you looking to manage frontend packages you can also install [Node](http://nodejs.org/) and [Bower](http://bower.io/). Given the advanced usage of these tools and the fact the the project does not depend on your usage of them I will leave this up to you to figure out. You can find some additional theme documentation in `/content/themes/ywam_thailand/readme.md`.
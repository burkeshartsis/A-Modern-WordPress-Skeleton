A-Modern-WordPress-Skeleton
=============================

We're working on something exciting and this is how we're telling the world.

The setup
---------
- WordPress as a Git submodule in `/wp/`
- Custom content directory in `/content/` (cleaner, and also because it can't be in `/wp/`)
- `wp-config.php` in the root (because it can't be in `/wp/`)
- [A-Better-Underscores-Theme](https://github.com/burkeshartsis/A-Better-Underscores-Theme/) as a submodule in `/content/themes/A-Better-Underscores-Theme`.
- Modern frontend tooling that includes:
	* [SASS](http://sass-lang.com/) (makes CSS awesome)
	* Basic [Webpack](https://webpack.github.io/) setup to start you on the way to a better life with js. Webpack is pre configured to:
		- Cross compile your ES6/ES2015 javascript to ES5 with [Babel](https://babeljs.io/). The futures is now!
		- Bundle your js module 'import' declarations in `index.js` to `bundle.js`.
		- Compile your SASS and watch for file changes.

Getting Started
---------------
- From the command line navigate to your future site directory. (on non-windows machines it might be something like `cd documents/dev/sites/`).
- Run `git clone --recursive`. This will make sure to also clone the `/wp/` and `/content/themes/A-Better-Underscores-Theme` submodules.
- Then navigate to `/content/themes/A-Better-Underscores-Theme`.
- If your machine already has [Node](http://nodejs.org/) installed you can skip to the next step otherwise download and install.
- Now a simple `npm install`.
- To starting developing `npm run webpack` to compile you SASS and js.
- When deploying to production environments use `npm run build` to compile and minify your assets.

You can find some additional theme documentation in `/content/themes/A-Better-Underscores-Theme/readme.md`.

Updating WordPress
------------------
- From the command line navigate to `/wp/`.
- Run `git fetch --tags`.
- Check out the most recent tag `git checkout x.x.x` where x is the most recent WordPress update.
- Navigate back to your project root.
- Commit the updated WordPress files to the project repository.


Theme Setup
-----------
You'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
4. Search for `_s-` to capture prefixed handles.
5. Search for `Text Domain: _s` in style.css.

OR

* Search for: `'_s'` and replace with: `'megatherium'`
* Search for: `_s_` and replace with: `megatherium_`
* Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `_s-` and replace with: `megatherium-`
* Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium` in style.scss.

Then, update the stylesheet header in style.scss, recompile your sass, and change the links in footer.php with your own information. Next, update or delete this readme.
# Afloats WordPress Theme Boilerplate (The non-SPA one)

## Features:

* SCSS (with auto-prefixing & Normalize CSS reset)
* ES2015 JavaScript (with Babel, Webpack, React)
* BrowserSync live reloading and code injection
* Sourcemaps

## Prerequisites:

* Node JS - https://nodejs.org/
* Yarn - https://yarnpkg.com/
* A computer - http://lmgtfy.com/?iie=1&q=What+is+a+computer
* A WordPress installation - https://wordpress.org/

## Install

Clone this boilerplate in your WordPress themes folder (replace 'desired-theme-name' with your desired theme name)

    git clone https://github.com/afloat-agency/wordpress-theme-boilerplate desired-theme-name

Change to the new theme directory

    cd desired-theme-name

Install dependencies with Yarn

    yarn

Change devUrl in webpack.mix.js to match your development URL, this is for
browserSync

    const devUrl = 'http://yourdevserver.com'

## Usage

### Running the BrowserSync dev server

Run the following in your theme folder. You can use ctrl-c to stop the server

yarn dev

### Building (non-production)

In your theme folder

yarn build

### Building for production

In your theme folder

yarn production

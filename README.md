# Afloats WordPress Theme Boilerplate (The non-SPA one)

## Features:
  - SCSS (with auto-prefixing & Normalize CSS reset)
  - ES2015 JavaScript (with babel, webpack, support for .vue templates also)
  - BrowserSync live reloading and code injection
  - Sourcemaps

## Prerequisites:
  - Node JS
  - Yarn or NPM
  - A computer
  - A WordPress installation

## Install
  
  // Clone this boilerplate in your WordPress themes folder (replace 'desired-theme-name' with your desired theme name)
  git clone https://github.com/afloat-agency/wordpress-theme-boileplate desired-theme-name

  // Change to the new theme directory
  cd desired-theme-name

  // Install dependencies with Yarn
  yarn

  // Or install dependencies with NPM
  npm install

## Usage

### Running the BrowserSync dev server

  // Run the following in your theme folder. You can use ctrl-c to stop the server
  npm run dev

### Building (non-production)

  // In your theme folder
  npm run build

### Building for production

  // In your theme folder
  npm run production


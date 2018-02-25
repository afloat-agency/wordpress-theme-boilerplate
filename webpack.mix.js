const devUrl = 'http://dev-server.com'
const Mix = require('laravel-mix')

Mix.sass('src/scss/app.scss', 'dist/css')
  .react('src/js/app.js', 'dist/js')
  .browserSync({
    proxy: devUrl,
    files: ['**/*.php', 'dist/css/*.css', 'dist/js/*.js', 'static/*']
  })
  .sourceMaps()

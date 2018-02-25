const devUrl = 'http://theme.sam' // this should be your dev URL (http://theme.sam is mine)
const Mix = require('laravel-mix')

Mix.sass('src/scss/app.scss', 'dist/css')
  .react('src/js/app.js', 'dist/js')
  .browserSync({
    proxy: devUrl,
    files: ['**/*.php', 'dist/css/*.css', 'dist/js/*.js', 'static/*']
  })
  .sourceMaps()

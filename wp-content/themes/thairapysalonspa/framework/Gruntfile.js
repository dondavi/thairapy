module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

    grunt.initConfig({
      
      pkg: grunt.file.readJSON('package.json'), 

      // Project config
      app: {
        src : 'src',
        dist:	'dist',
        styles: {
          src     : '<%= app.src %>/css',
          dist    : '<%= app.dist %>/css'
        },
        fonts: {
          src     : '<%= app.src %>/fonts',
          dist    : '<%= app.dist %>/fonts'
        },
        scripts: {
          src		:	'<%= app.src %>/js',
          dist  : '<%= app.dist %>/js'
        },
        img: {
          src: '<%= app.src %>/img',
          dist: '<%= app.dist %>/img'
        }
      },

      watch: {
        css: {
          files: ['<%= app.src %>/css/**/*.css'], 
          tasks: [
            'newer:concat:styles',
            'newer:cssmin'
          ],
          options: { debounceDelay: 250, event: ['added', 'changed'], reload: true}
        },
        js: {
          files: ['<%= app.src %>/js/**/*.js'], 
          tasks: [
            'newer:concat:scripts',
            'newer:cssmin'
          ],
          options: { debounceDelay: 250, event: ['added', 'changed'], reload: true}
        },
        jpg: {
          files: ['<%= app.src %>/img/**/*.jpg'],
            tasks: [
            'newer:imagemin'
          ],
          options: { debounceDelay: 250, event: ['added', 'changed'], reload: true}
        },
        png: {
          files: ['<%= app.src %>/img/**/*.png'],
            tasks: [
            'newer:pngquant'
          ],
          options: { debounceDelay: 250, event: ['added', 'changed'], reload: true}
        }
      },

      // Minify the compiled CSS
      cssmin: {
        styles: {
          options: {
            keepSpecialComments: 0,
            report: 'min'
          },
          files: { '<%= app.styles.dist %>/main.min.css' : '<%= app.styles.dist %>/main.css' }
        }
      },

      concat: {
        styles: {
          src: [
            '<%= app.styles.src %>/bootstrap.css',
            '<%= app.styles.src %>/jpreloader.css',
            '<%= app.styles.src %>/animate.css',
            '<%= app.styles.src %>/plugin.css',
            '<%= app.styles.src %>/owl.carousel.css',
            '<%= app.styles.src %>/owl.theme.css',
            '<%= app.styles.src %>/owl.transitions.css',
            '<%= app.styles.src %>/magnific-popup.css',
            '<%= app.styles.src %>/style.css'
            //'<%= app.styles.src %>/bg.css',
            //'<%= app.styles.src %>/colors/blue.css',
            //'<%= app.styles.src %>/custom.css'
          ],
          dest: '<%= app.styles.dist %>/main.css',
        }, 
        scripts: {
          src: [
            '<%= app.scripts.src %>/jquery.min.js',
            '<%= app.scripts.src %>/jpreLoader.js', 
            '<%= app.scripts.src %>/bootstrap.min.js', 
            '<%= app.scripts.src %>/jquery.isotope.min.js', 
            '<%= app.scripts.src %>/easing.js', 
            '<%= app.scripts.src %>/jquery.flexslider-min.js', 
            '<%= app.scripts.src %>/jquery.scrollto.js', 
            '<%= app.scripts.src %>/owl.carousel.js', 
            '<%= app.scripts.src %>/jquery.countTo.js', 
            '<%= app.scripts.src %>/classie.js', 
            '<%= app.scripts.src %>/video.resize.js', 
            '<%= app.scripts.src %>/validation.js', 
            '<%= app.scripts.src %>/wow.min.js', 
            '<%= app.scripts.src %>/jquery.magnific-popup.min.js', 
            '<%= app.scripts.src %>/enquire.min.js', 
            '<%= app.scripts.src %>/jquery.stellar.min.js', 
            '<%= app.scripts.src %>/designesia.js',
            '<%= app.scripts.src %>/responsiveimages.js', 
            '<%= app.scripts.src %>/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js',
            '<%= app.scripts.src %>/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js'
          ],
          dest: '<%= app.scripts.dist %>/scripts.js',
        }
      },
      
      pngquant: {
        dist: {
          options: {
            quality: 100
          },
          files: [{
            expand: true,
            cwd: '<%= app.src %>/img',
            src: ['**/*.png'],
            dest: '<%= app.dist %>/img'
          }]
        }
      },
      
      imagemin: {                          // Task 
        dynamic: {                         // Another target 
          files: [{
            expand: true,                  // Enable dynamic expansion 
            cwd: '<%= app.src %>/img',                   // Src matches are relative to this path 
            src: ['**/*.jpg'],   // Actual patterns to match 
            dest: '<%= app.dist %>/img'                  // Destination path prefix 
          }]
        }
      },
      
      compress: {
        styles: {
          options: {
            mode: 'gzip'
          },
          files: [{
            expand: true,
            cwd: '<%= app.dist %>/css',
            src: ['**/*.css'],
            dest: '<%= app.dist %>/css',
            ext: '.css.gz'
          }]
        }, 
        scripts: {
          options: {
            mode: 'gzip'
          },
          files: [{
            expand: true,
            cwd: '<%= app.dist %>/js',
            src: ['**/*.js'],
            dest: '<%= app.dist %>/js',
            ext: '.js.gz'
          }]
        }
      }
  });

  grunt.event.on('watch', function (action, filepath, target) {
    grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
  });
  
  // For Dev
  grunt.registerTask('dev', ['watch']);
  
  // For Distribution
  grunt.registerTask('dist', [
    'concat',
    'cssmin',
    'pngquant', 
    'imagemin',
    'compress'
  ]);

  // Set the default Grunt Task
  grunt.registerTask('default', ['dist']);
};
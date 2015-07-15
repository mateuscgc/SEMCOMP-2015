module.exports = function(grunt) {
    grunt.initConfig({
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'assets/stylesheets/application.css' : 'assets/stylesheets/main.scss'
                }
            }
        },
        autoprefixer: {
            options: {
                browsers: ['last 2 versions']
            },
            dist: {
                files: {
                    'assets/stylesheets/application.css' : 'assets/stylesheets/application.css'
                },
            },
        },
        cssmin: {
            options: {
                sourceMap: true
            },
            target: {
                files: {
                    'assets/stylesheets/application.css' : ['assets/stylesheets/application.css']
                },
            },
        },
        watch: {
            stylesheets: {
                files: ['assets/stylesheets/**/*.scss'],
                tasks: ['sass', 'autoprefixer', 'cssmin'],
            },
        },
    });

    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};

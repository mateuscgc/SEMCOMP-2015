module.exports = function(grunt) {
    grunt.initConfig({
        copy: {
            main: {
                files: {
                    {expand: true, src: ['node_modules/jquery/dist/**'], dest: 'vendors/jquery/'},
                    {expand: true, src: ['node_modules/font-awesome/**'], dest: 'vendors/font-awesome/'},
                }
            }
        }
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
                browsers: ['> 1%']
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
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['copy', 'sass', 'autoprefixer', 'cssmin']);
};

module.exports = function (grunt) {

    require("load-grunt-tasks")(grunt);

    grunt.initConfig({
        uglify: {
            dist: {
                options: {
                    sourceMap: true
                },
                files: {
                    'dist/app.min.js': ['src/!(*.spec).js']
                }
            }
        },
        watch: {
            scripts: {
                options: {
                    livereload: true
                },
                files: "src/**/*.js",
                tasks: ["default"]
            },
            pages: {
                options: {
                    livereload: true
                },
                files: "index.html"
            }
        },
        connect: {
            server: {
                options: {
                    port: 9001,
                    open: 'http://localhost:9001'
                }
            }
        },
        karma: {
            unit: {
                options: {
                    configFile: 'karma.conf.js'
                }
            }
        }
    });

    grunt.registerTask("dev", ["default", "connect", "watch"]);
    grunt.registerTask("test", ["karma"]);
    grunt.registerTask("default", ["uglify", "test"]);

};

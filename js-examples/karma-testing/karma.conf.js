module.exports = function(config) {
    'use strict';

    config.set({
        basePath: '',
        files: [
            'src/*.js',
            'src/*.spec.js'
        ],
        frameworks: ['jasmine'],
        reporters: ['progress', 'coverage'],
        colors: true,
        logLevel: config.LOG_INFO,
        browsers: ['PhantomJS'],
        autoWatch: false,
        singleRun: true,
        plugins: [
            'karma-jasmine',
            'karma-phantomjs-launcher',
            'karma-coverage'
        ]
    });
};

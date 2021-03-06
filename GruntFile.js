module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-concat')
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            css: {
                src: [
                    'public/css/style.css',
                    'public/css/polyglot-language-switcher-2.css'
                ],
                dest: 'public/css/style.combined.css'
            }
        },
        cssmin: {
            css: {
                src: 'public/css/style.combined.css',
                dest: 'public/css/style.combined.min.css'
            }
        },
        watch: {
            files: ['public/css/*'],
            tasks: ['concat', 'cssmin']
        }
    });

    grunt.registerTask('default', ['concat:css', 'cssmin:css']);
}

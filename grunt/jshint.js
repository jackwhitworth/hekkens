/**
 * Lint JavaScript
 */
module.exports = {

	options: {
		jshintrc: '.jshintrc'
	},

	default: [
		'<%= package.config.path.source %>/js/**/*.js',
		'grunt/**/*.js',
		'Gruntfile.js'
	].concat('Gruntfile.js')

};

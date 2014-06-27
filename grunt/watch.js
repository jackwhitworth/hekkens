/**
 * Watch
 */
module.exports = {

	options: {
		livereload: '<%= package.config.server.livereload.port %>'
	},

	bower: {
		files: [
			'<%= package.config.path.source %>/php/**/footer.php',
			'bower.json'
		],
		tasks: [
			'bowerInstall'
		]
	},

	icons: {
		files: [
			'<%= package.config.path.source %>/images/**/*.ico',
			'<%= package.config.path.bower_components %>/**/*'
		],
		tasks: [
			'exec:setMaxfiles',
			'newer:copy:icons'
		]
	},

	images: {
		files: ['<%= package.config.path.source %>/images/**/*.{gif,jpg,jpeg,png,svg}'],
		tasks: [
			'images'
		]
	},

	scripts: {
		files: [
			'<%= package.config.path.source %>/js/**/*.js',
			'grunt/*.js',
			'Gruntfile.js'
		],
		tasks: [
			'scripts'
		]
	},

	styles: {
		files: '<%= package.config.path.source %>/styles/**/*.scss',
		tasks: [
			'styles',
		]
	},

	wordpress: {
		files: [
			'<%= package.config.path.source %>/wordpress/**/*',
			'<%= package.config.path.source %>/wordpress/**/.*',
			'!<%= package.config.path.source %>/wordpress/wp-content/plugins/**/*',
			'!<%= package.config.path.source %>/wordpress/wp-content/plugins/**/.*'
		],
		tasks: [
			'wordpress'
		]
	}
};

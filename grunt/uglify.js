/**
 * Uglify
 */
module.exports = {

	default: {
		options: {
			beautify: true,
			sourceMap: true,
			sourceMappingURL: '<%= package.config.path.source %>/js/functions.map',
		},
		files: {
			'<%= package.config.path.source %>/js/functions.js': [
				'<%= package.config.path.source %>/js/source/**/*.js'
			]
		}
	}

};

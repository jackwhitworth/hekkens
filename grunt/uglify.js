/**
 * Uglify
 */
module.exports = {

	default: {
		options: {
			beautify: true,
			sourceMap: true,
			sourceMappingURL: '<%= package.config.path.source %>/js/hekkens.map',
		},
		files: {
			'<%= package.config.path.source %>/js/hekkens.js': [
				'<%= package.config.path.source %>/js/**/*.js'
			]
		}
	}

};

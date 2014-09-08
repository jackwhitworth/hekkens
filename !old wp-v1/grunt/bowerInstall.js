/**
 * Make Bower packages available to the templates
 */
module.exports = {

	default: {
		src: [
			'<%= package.config.path.theme %>/footer.php'
		],
		dependencies: true,
		devDependencies: false,
		exclude: [
			'<%= package.config.path.bower_components %>/html5shiv/'
		],
		fileTypes: {
			html: {
				replace: {
					js: '<script src="<%= package.config.url.build %>/{{filePath}}"></script>'
				}
			}
		}
		// ignorePath: '../../../../'
	}

};

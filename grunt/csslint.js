/**
 * Lint CSS
 */
// module.exports = function (grunt) {
module.exports = {

	options: {
		csslintrc: '.csslintrc',
	},

	default: {
		src: [
			'<%= package.config.path.source %>/styles/style.css'
		]
	}

};

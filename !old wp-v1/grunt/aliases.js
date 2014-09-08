module.exports = {

	'fonts': [
		'newer:copy:fonts'
	],

	'images': [
		'newer:copy:icons',
		'newer:imagemin',
		'newer:svgmin'
	],

	'misc': [
		'newer:copy:dotFiles'
	],

	'scripts': [
		'newer:jshint',
		'newer:uglify',
		'newer:copy:scripts',
		'rename:scripts'
	],

	'styles': [
		// 'scsslint', //awaiting scss-lint 0.23.2, see https://github.com/causes/scss-lint/commit/16dfc11e3
		'compass', //does not work with grunt-newer
		'rename:styles',
		// 'uncss',
		'newer:copy:styles' //copy SASS source files for source map usage
	],

	'wordpress': [
		'bowerInstall', //does not work with grunt-newer
		'newer:copy:wordpress'
	],

	'build': [
		'wordpress',
		'styles',
		'scripts',
		'fonts',
		'images',
		// 'misc'
	],

	'default': [
		'build',
		'watch'
	]

};

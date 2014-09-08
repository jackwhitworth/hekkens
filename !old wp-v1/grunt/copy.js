/**
 * Copy Static Resources
 */
module.exports = {

	// bower: {
	// 	files: [
	// 		{
	// 			expand: true,
	// 			flatten: false,
	// 			cwd: 'bower_components',
	// 			src: [
	// 				'**/*',
	// 			],
	// 			dest: '<%= package.config.path.theme %>'
	// 		},
	// 	]
	// },

	dotFiles: {
		files: [
			{
				dot: true,
				expand: true,
				flatten: false,
				cwd: '<%= package.config.path.source %>',
				src: [
					'**/.*'
				],
				dest: '<%= package.config.path.build %>',
				filter: 'isFile'
			}
		]
	},

	fonts: {
		files: [
			{
				expand: true,
				flatten: false,
				cwd: '<%= package.config.path.source %>/fonts',
				src: [
					'**/*'
				],
				dest: '<%= package.config.path.theme %>/fonts',
				filter: 'isFile'
			}
		]
	},

	icons: {
		files: [
			{
				expand: true,
				flatten: false,
				cwd: '<%= package.config.path.source %>/images/chrome',
				src: [
					'favicon.ico'
				],
				dest: '<%= package.config.path.theme %>',
				filter: 'isFile'
			}
		]
	},

	scripts: {
		files: [
			{
				expand: true,
				flatten: false,
				cwd: '<%= package.config.path.source %>/js/source',
				src: [
					'**/*.{js,map}'
				],
				dest: '<%= package.config.path.theme %>/js/source',
				filter: 'isFile'
			},
		]
	},

	styles: {
		files: [
			{
				expand: true,
				flatten: false,
				cwd: '<%= package.config.path.source %>/styles',
				src: [
					'**/*.scss'
				],
				dest: '<%= package.config.path.theme %>/styles',
				filter: 'isFile'
			},
		]
	},

	wordpress: {
		files: [
			{
				expand: true,
				flatten: false,
				cwd: '<%= package.config.path.source %>/wordpress',
				src: [
					'**/*',
					'**/.*'
				],
				dest: '<%= package.config.path.build %>',
				filter: 'isFile'
			}
		]
	}

};

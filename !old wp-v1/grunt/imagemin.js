/**
 * Image minification
 */
module.exports = {

	default: {

		options: {
			optimizationLevel: 3
		},

		files: [
			{
				expand: true,
				cwd: 'src/images',
				src: [
					'screenshot.png'
				],
				dest: '<%= package.config.path.theme %>'
			},
			{
				expand: true,
				cwd: 'src/images',
				src: [
					'**/*.{gif,jpg,jpeg,png}',
					'!screenshot.png'
				],
				dest: '<%= package.config.path.theme %>/images'
			}
		]

	}

};

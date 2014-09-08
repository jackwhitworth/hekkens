/**
 * Rename resources
 */
module.exports = {

	scripts: {
		files: [
			{
				src: ['<%= package.config.path.source %>/js/hekkens.js'],
				dest: '<%= package.config.path.theme %>/js/hekkens.js',
				filter: 'isFile'
			},
			{
				src: ['<%= package.config.path.source %>/js/hekkens.map'],
				dest: '<%= package.config.path.theme %>/js/hekkens.map',
				filter: 'isFile'
			}
		]
	},

	styles: {
		files: [
			{
				src: ['<%= package.config.path.source %>/styles/style.css'],
				dest: '<%= package.config.path.theme %>/style.css',
				filter: 'isFile'
			},
			{
				src: ['<%= package.config.path.source %>/styles/library.css'],
				dest: '<%= package.config.path.theme %>/library.css',
				filter: 'isFile'
			},
			// {
			// 	cwd: '<%= package.config.path.source %>/styles',
			// 	src: ['screen.css'],
			// 	dest: '<%= package.config.path.theme %>/styles/screen.css',
			// 	filter: 'isFile'
			// },
			// {
			// 	cwd: '<%= package.config.path.source %>/styles',
			// 	src: ['print.css'],
			// 	dest: '<%= package.config.path.theme %>/styles/print.css',
			// 	filter: 'isFile'
			// },
			{
				src: ['<%= package.config.path.source %>/styles/style.css.map'],
				dest: '<%= package.config.path.theme %>/style.css.map',
				filter: 'isFile'
			},
			{
				src: ['<%= package.config.path.source %>/styles/library.css.map'],
				dest: '<%= package.config.path.theme %>/library.css.map',
				filter: 'isFile'
			},
			// {
			// 	cwd: '<%= package.config.path.source %>/styles',
			// 	src: ['screen.css.map'],
			// 	dest: '<%= package.config.path.build %>/styles/screen.css.map',
			// 	filter: 'isFile'
			// },
			// {
			// 	cwd: '<%= package.config.path.source %>/styles',
			// 	src: ['print.css.map'],
			// 	dest: '<%= package.config.path.build %>/styles/print.css.map',
			// 	filter: 'isFile'
			// }
		]
	}

};

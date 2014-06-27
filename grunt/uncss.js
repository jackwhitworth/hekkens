/**
 * Uncss
 */
module.exports = {

	options: {
		// csspath: '<%= package.config.path.theme %>/',
		// htmlroot: '<%= package.config.url.build %>',
		ignoreSheets : [/fast.fonts.net/, /fonts.googleapis/, /bower_components/],
		report: 'min'
	},

	screen: {
		options: {
			stylesheets: ['style.css']
		},
		media: ['(min-width: 992px) screen'],
		files: {
			'<%= package.config.path.theme %>/screen.tidy.css': ['<%= package.config.path.theme %>/*.html']
		}
	},

	print: {
		options: {
			stylesheets: ['print.css']
		},
		media: ['(min-width: 992px) print'],
		files: {
			'<%= package.config.path.theme %>/print.tidy.css': ['<%= package.config.path.theme %>/*.html']
		}
	},

	mobile: {
		options: {
			stylesheets: ['style.css']
		},
		media: ['(max-width: 767px) handheld'],
		files: {
			'<%= package.config.path.theme %>/mobile.tidy.css': ['<%= package.config.path.theme %>/*.html']
		}
	},

	tabletPortrait: {
		options: {
			stylesheets: ['style.css']
		},
		media: ['(min-width: 768px) handheld and (max-width: 991px) handheld and (orientation: portrait)'],
		files: {
			'<%= package.config.path.theme %>/tablet-portrait.tidy.css': ['<%= package.config.path.theme %>/index.html']
		}
	},

	tabletLandscape: {
		options: {
			stylesheets: ['style.css']
		},
		media: ['(min-width: 992px) handheld and (orientation: landscape)'],
		files: {
			'<%= package.config.path.theme %>/tablet-landscape.tidy.css': ['<%= package.config.path.theme %>/*.html']
		}
	}

};

/**
 * Make new build dir
 */
module.exports = {

	default: {
		options: {
			mode: '0755',
			create: [ '<%= package.config.path.build %>' ]
		}
	}

};

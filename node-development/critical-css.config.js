module.exports = {
	base: './', 
	inline: true,
	html: undefined,
	src: '../',	
	isDir: true,
	css: '../style.css', 
	dest: '../', 
	width: undefined, 
	height: undefined, 
	dimensions:  [{
			width: 360,
			height: 640
		 },
		 {
			width: 1366,
			height: 768
		 },
		{
			width: 1440,
			height: 900
		},
		{
			width: 1920,
			height: 1080
	}],
	extract: true,
	minify: true,
	pathPrefix: undefined,
	ignore: undefined,
	ignoreOptions: {},
};
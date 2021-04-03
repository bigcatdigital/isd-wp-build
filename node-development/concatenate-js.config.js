let opts = {
	target: '../scripts/app-concat.min.js',
};
if (process.env.ENV === 'production') {
	opts.files = ['node_modules/gsap/dist/gsap.min.js', 'node_modules/gsap/dist/ScrollToPlugin.min.js', 'node_modules/flickity/dist/flickity.pkgd.js', './app/scripts/app-temp.js'];
} else {
	opts.files = ['node_modules/gsap/dist/gsap.min.js', 'node_modules/gsap/dist/ScrollToPlugin.min.js', 'node_modules/flickity/dist/flickity.pkgd.js', './app/scripts/app.js'];
}
module.exports = opts;
module.exports = function(eleventyConfig) {
    eleventyConfig.addPassthroughCopy('src/images');
    eleventyConfig.addPassthroughCopy('src/style.min.css');
}

module.exports.config = {
    dir: {
        input: 'src'
    },
    copy: "images"
    
}
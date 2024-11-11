module.exports = function(eleventyConfig) {
    eleventyConfig.addPassthroughCopy('src/images')
}

module.exports.config = {
    dir: {
        input: 'src'
    },
    copy: "images"
    
}
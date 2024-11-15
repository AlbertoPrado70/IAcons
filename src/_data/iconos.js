const fs = require('fs');
const path = require('path');

module.exports = function() {

    const baseDir = path.join(__dirname, '..', 'images');
    
    const svgFiles = fs.readdirSync(baseDir, {withFileTypes: true}).flatMap(dir => {
        
        return fs.readdirSync(path.join(dir.parentPath, dir.name), {withFileTypes: true}).flatMap(item => {

            if(item.name.endsWith('.png')) {
                return [];
            }

            return {
                name: item.name.split('.')[0].replaceAll('-', ' '),
                category: dir.name,
                svg: item.name.split('.')[0] + '.svg',
                png: item.name.split('.')[0] + '.png'
            }

        });

    });

    return svgFiles;
    
}
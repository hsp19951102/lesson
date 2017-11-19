// 该文件用于返回一些需要在html中显示的东西
// 引入json文件
var str = require('./data.json')
module.exports = function(){
	// 创建有一个用来展示的元素
	var d = document.createElement('div');
	d.textContent = str.data;
	return d;
}
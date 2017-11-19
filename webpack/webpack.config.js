module.exports = {
	entry: __dirname + '/app/main.js',//项目为唯一入口文件，__dirname表示当前文件所在的根目录
	output: {
		path:__dirname+'/public',//打包后文件存放的路径
		filename:'bundle.js'//打包后的文件名
	},
	devServer:{
		contentBase:'./public',//本地服务所加载的页面的路径
		inline:true//实时监听页面的变化
	},
	module:{
		loaders:{
			test:/\.json$/,
			loader:'json-loader'
		}
	}
}
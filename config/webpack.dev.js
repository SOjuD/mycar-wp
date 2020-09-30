const merge = require('webpack-merge');
const commonConfig = require('./webpack.common.js');
const webpack = require('webpack');
// const BrowserSyncPlugin = require('browser-sync-webpack-plugin')


module.exports = merge(commonConfig, {
    devtool: 'eval',
    devServer: {
        compress: true,
        historyApiFallback: true,
        hot: true,
        proxy: {
            '**': {
                target: 'http://mycar.loc/catalog/',
                secure: true,
                changeOrigin: true,
                path: /./
            }
        }
    },
    module: {
        rules: [{
            test: /\.(css|sass|scss)$/,
            use: [
                'style-loader',
                'css-loader',
                {
                    loader: 'postcss-loader',
                    options: {
                        config: {
                            path: './config/postcss.config.js'
                        }
                    }
                },
                'sass-loader'
            ]
        }]
    },
    plugins: [
        new webpack.HotModuleReplacementPlugin(),
        new webpack.NamedModulesPlugin(),
        new webpack.DefinePlugin({
            'process.env': {
                'NODE_ENV': JSON.stringify('development')
            }
        }),
        //     new BrowserSyncPlugin( {
        //         files: [
        //             '**/*.php'
        //         ],
        //         port: 8080,
        //         proxy: 'http://ssk2/',
        //         reloadDelay: 0
        //     }
        // ),
    ]
});
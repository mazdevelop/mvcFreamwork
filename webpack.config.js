const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry: './resources/assets/js/app.js',
    output: {
        filename: 'js/app.js',
        path: path.join(__dirname, 'public')
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/app.css'
        })
    ],
    module: {
        rules: [
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    'css-loader',
                    'sass-loader',
                    'postcss-loader'
                ]
            }
        ]
    }
};
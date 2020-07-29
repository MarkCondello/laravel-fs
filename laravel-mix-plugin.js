const mix = require('laravel-mix');

//insert an override once wbepackconfig has run
// mix.extend('foo', (webpackConfig, ...args)=>{
//    // console.log(webpackConfig);
//     console.log(args);
// })

//A full component class
  class Example{
    register(val) {
        console.log(`Foo extention was called with ${val} parameter..`)
    }
    dependencies() {}

    webpackRules() {}

    webpackPlugins() {}
}

mix.extend('foo', new Example());
const mix = require('laravel-mix');
const config = require('laravel-mix/src/config');
 
  class TailWind{

    register(configPath = './tailwind.config.js') {
        this.configPath = configPath;
        this.requiresReload = 'Tailwind is installed. Please ensure yor tailwind config file is included. Run node_modules/.bin/tailwind init. Then run npm run dev.';
    }

    dependencies() {
        return ['tailwindcss'];
    }

    webpackRules() {}

    webpackPlugins() {}

    //method to call once all settings are loaded
    boot(){
        //we have access to the Mix object and its settings eg Mix.components
        console.log("MIX:", Mix)
        if(Mix.components.has('sass')){
            Config.processCssUrls = false;
        }
        let tailwindcss = require('tailwindcss');
        Config.postCss.push(tailwindcss(this.configPath));
    }
}

mix.extend('tailwind', new TailWind());

/* An NPM pacakge is available for this extension here: https://github.com/jeffreyway/laravel-mix-tailwind#readme */
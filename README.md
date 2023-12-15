<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Working Developer Information On Cloned Laravel Repo  

Name : Gagan Deep Kashyap
Profile : Software Developer(Java + Laravel)

## Integration Vue Js With Laravel

Step 1 : Installing Dependencies and Building Assets

To install the necessary frontend dependencies and build the assets, run the following commands:

npm install
npm run dev

Step 2 : Installing Vue.js and Vue Loader

To enhance the development experience when working with Vue.js components, we’ll install Vue Loader. Vue Loader is the Webpack loader that enables writing single-file Vue components. It simplifies the component structure by combining HTML, CSS, and JavaScript in a single file.

To install Vue Loader, run the following command:

npm install vue@next vue-loader@next

Step 3 : Installing Vue.js Plugin for Vite

Vite is a next-generation front-end build tool, and Laravel provides a plugin to integrate it with your Laravel application. Install the Vue.js plugin for Vite by running the following command:

npm i @vitejs/plugin-vue 

Step 4 : Updating the Vite Configuration

To configure Vite, open the vite.config.js file and update it with the following code:

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            'vue': 'vue/dist/vue.esm-bundler.js'
        },
    },
});

Step 5 : Updating the app.js File

Open the app.js file and update it as follows:

import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

app.mount("#app");

Step 6 : Modifying Blade Templates

To make Vue.js components work with Laravel’s Blade templating engine, you need to make a few modifications to the blade files. Open the app.blade.php and guest.blade.php files and add id="app" to their parent elements.

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" id="app">

Step 7 :  Creating Vue.js Components

Create a new folder named “components” inside the resources/js directory. Inside the "components" folder, create a Vue.js component file, such as ComponentA.vue, and define the component's template and logic. For example:

<template>
    <h1>Working</h1>
</template>



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


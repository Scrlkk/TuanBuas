import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "./vendor/filament/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
                raleway: ["Raleway", "sans-serif"],
                quicksand: ["Quicksand", "sans-serif"],
                merriweather: ["Merriweather", "serif"],
                josefin: ["Josefin Sans", "sans-serif"],
            },
        },
    },

    plugins: [forms],
};

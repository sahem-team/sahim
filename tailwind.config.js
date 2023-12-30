/** @type {import('tailwindcss').Config} */
const flowbitePlugin = require("flowbite/plugin");
const formsPlugin = require("@tailwindcss/forms");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                almaria: ["Almarai"],
                madani: ["madani"],
            },
            colors: {
                sahem_pr: {
                    50: "#fef3f2",
                    100: "#fee5e2",
                    200: "#fed0ca",
                    300: "#fcafa5",
                    400: "#f88171",
                    500: "#f16d5b",
                    600: "#dc3c26",
                    700: "#b92f1c",
                    800: "#992a1b",
                    900: "#7f291d",
                    950: "#45110a",
                },
                primary_light: "#f7a79d",
                primary_dark: "#a84c40",
                dark_1: "#283238",
                dark_2: "#495a64",
                light_1: "#ebebeb",
                light_2: "#f5f5f5",
            },
        },
    },
    plugins: [flowbitePlugin, formsPlugin],
};

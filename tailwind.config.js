/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
        "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
    ],
    theme: {
        fontSize: {
            xs: ["0.75rem", { lineHeight: "1rem" }],
            sm: ["0.875rem", { lineHeight: "1.5rem" }],
            base: ["0.95rem", { lineHeight: "1.5rem" }],
            lg: ["1.125rem", { lineHeight: "1.75rem" }],
            xl: ["1.25rem", { lineHeight: "2rem" }],
            "2xl": ["1.5rem", { lineHeight: "2.5rem" }],
            "3xl": ["2rem", { lineHeight: "2.5rem" }],
            "4xl": ["2.5rem", { lineHeight: "3rem" }],
            "5xl": ["3rem", { lineHeight: "3.5rem" }],
            "6xl": ["3.75rem", { lineHeight: "1" }],
            "7xl": ["4.5rem", { lineHeight: "1" }],
            "8xl": ["6rem", { lineHeight: "1" }],
            "9xl": ["8rem", { lineHeight: "1" }],
        },
        screens: {
            xs: "480px",
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1440px",
            "3xl": "1780px",
            "4xl": "2160px",
        },
        extend: {
            colors: {
                dark: {
                    300: "#939db8",
                    500: "#293040",
                    600: "#222838",
                    800: "#1a202f",
                    900: "#121826",
                    1000: "#11181c",
                },
                light: {
                    100: "#ecedee",
                    200: "#f5f6fa",
                },
                blue: {
                    lighter: "#2fc4d8",
                    light: "#2cd4ff",
                    dark: "#015bcd",
                    darker: "#020F40",
                },
                green: {
                    light: "#45b547",
                    dark: "#009736",
                },
                yellow: {
                    lighter: "#fa8209",
                    light: "#FEC42D",
                    dark: "#E59038",
                },
                red: {
                    light: "#ff4f4f",
                },
                brown: {
                    light: "#e9bf95",
                    dark: "#a67b58",
                },
                pink: {
                    light: "#fa709a",
                },
            },
            maxWidth: {
                container: "85rem",
            },
            boxShadow: {
                card: "0px 0px 6px rgba(79, 95, 120, 0.1)",
                dropdown: "0px 10px 32px rgba(46, 57, 72, 0.2)",
                submenu:
                    "0 0 #0000, 0 0 #0000, 0 8px 16px rgba(17, 24, 39, .1)",
                "bottom-nav": "0 -2px 3px rgba(0, 0, 0, 0.08)",
                cmsLogo: "-9px 0 20px #59667a1a",
                cmsSidebar: "0 0 21px #59667a1a",
                cmsNavbar: "0 4px 40px #2720781a",
                cmsCard: "0 9px 20px #2e235e12",
                cartHead: "    0 0 10px #0000001a",
                cartClose: "0 0 20px #00000026",
            },
            fontSize: {
                "10px": ".625rem",
                "13px": "13px",
                "15px": "15px",
            },
            fontFamily: {
                sans: ["'Inter', sans-serif"],
                display: ["'Lexend', sans-serif"],
            },
            transitionProperty: {
                height: "height",
            },
            keyframes: {
                "bounce-up": {
                    "0%, 100%": {
                        transform: "translateY(0)",
                        "animation-timing-function":
                            "cubic-bezier(0, 0, 0.2, 1)",
                    },
                    "50%": {
                        transform: "translateY(-25%)",
                        "animation-timing-function":
                            "cubic-bezier(0.8, 0, 1, 1)",
                    },
                },
            },
            animation: {
                "bounce-up": "bounce-up 1s ease-in-out infinite",
            },
        },
    },
    plugins: [require("preline/plugin")],
};

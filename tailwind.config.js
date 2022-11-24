/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        "theme-dark": "#0b132b",
        "theme-violet": "#413fbe",
        "theme-blue": "#14213d",
        "theme-gray": "#e5e5e5",
      },
      fontFamily: {
        opensans: ["Open Sans", "sans-serif"],
      },
    },
  },
  variants: {
    extend: {
      visibility: ["group-hover"],
    },
  },
  plugins: [],
};

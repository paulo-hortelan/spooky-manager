const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: [
		'Intervar',
		 ...defaultTheme.fontFamily.sans,
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
		require("daisyui")
	],
}

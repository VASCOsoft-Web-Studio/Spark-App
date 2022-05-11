module.exports = {
	content: [
		'./src/**/*.{html,php,js,jsx,ts,tsx}',
		'./src/*.{html,php,js,jsx,ts,tsx}',
		'./app/**/*.{html,php,js,jsx,ts,tsx}',
		'./app/*.{html,php,js,jsx,ts,tsx}'
	],
	theme: {
		fontFamily: {
			Montserrat: ['Montserrat', 'sans-serif'],
		},
		extend: {},
	},
	plugins: [
		require('daisyui'),
	],

	// daisyUI config (optional)
	daisyui: {
		styled: true,
		themes: true,
		base: true,
		utils: true,
		logs: true,
		rtl: false,
		prefix: '',
		darkTheme: 'light',
	},
}

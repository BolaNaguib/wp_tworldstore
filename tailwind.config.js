module.exports = {
	purge: {
		enabled: true,
		content: ["./**/*.php"],
	},
	theme: {
		extend: {
			colors: {
				main: "#ad46a8",
				secondary: "#ec509a",
			},
			fontFamily: {
				body: ["Lobster Two", "cursive"],
				display: ["Lobster Two", "cursive"],
				number: ["sans-serif"],
			},
		},
	},
	variants: {},
	plugins: [],
};

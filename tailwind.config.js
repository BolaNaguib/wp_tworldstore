module.exports = {
	purge: {
		enabled: true,
		content: ["./**/*.php"],
	},
	theme: {
		extend: {
			colors: {
				main: "#f53212",
				secondary: "#feb707",
			},
			fontFamily: {
				body: ["Poppins", "sans-serif"],
				display: ["Poppins", "sans-serif"],
				number: ["sans-serif"],
			},
		},
	},
	variants: {
		scale: ["group-hover", "hover"],
		translate: ["responsive", "group-hover", "hover"],
	},
	plugins: [],
};

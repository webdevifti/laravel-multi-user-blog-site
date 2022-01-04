module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  variants: {
    display:['group-hover']
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}

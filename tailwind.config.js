module.exports = {
  content: [
    './*.php',
    './**/*.php',
  ],
  // other configurations...
  purge: {
    content: ['./**/*.php'],
    options: {
      safelist: [], // Add any classes you don't want to purge here
    },
  },
}

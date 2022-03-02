// Settings
const settingsColors = require('./tailwind/tailwind.settings.colors');
const settingsFontFamily = require('./tailwind/tailwind.settings.fontFamily');
const settingsfluidType = require('./tailwind/tailwind.settings.fluidType');

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily: settingsFontFamily,
    fontSize: settingsfluidType,
    extend: {
      zIndex: {
        negative: '-1',
      },
      colors: settingsColors,
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};

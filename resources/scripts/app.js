import {domReady} from '@roots/sage/client';
import toggleMobileMenu from './navigation';
import buttonScroll from './buttonScroll';
import headerScroll from './headerScroll';
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
  toggleMobileMenu();
  buttonScroll();
  headerScroll();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

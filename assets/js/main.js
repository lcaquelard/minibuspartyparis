/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (main.css in this case)
import '../scss/main.scss';

// start the Stimulus application
import './bootstrap';

import './jquery.min';
import './slick.min';

// Recursively gathers the images accessed by the templates and then iteratively transposes these to the public build
const imagesContext = require.context('../images', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesContext.keys().forEach(imagesContext);

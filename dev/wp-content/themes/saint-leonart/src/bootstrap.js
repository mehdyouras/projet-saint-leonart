try {
  window._ = require('lodash');
  window.axios = require('axios');
  window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.WordPress.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
  };
} catch (e) {}

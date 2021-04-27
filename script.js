'use strict';

// const lang = document.querySelector('html').lang;
//
// if(lang === 'ja'){
//     document.querySelector('option[value="http://localhost/minnano_backup/index.php"]').selected = true;
// }else if(lang === 'en'){
//     document.querySelector('option[value="http://localhost/minnano_backup/en/index.php"]').selected = true;
// }

document.getElementById('form').select.onchange = function() {
    location.href = document.getElementById('form').select.value;
}

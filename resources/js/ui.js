document.addEventListener('bfg:register', (e) => {

    let app = e.detail;

    app.inject(require('./Injects/Alert'));
    app.bind('toast', require('toastr'));
});

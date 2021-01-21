const swal = require('sweetalert2');

module.exports = {

    alert (...params) {
        return swal.fire(...params);
    },

    alert_error (text = 'Error!', params = {}) {
        return this.alert({
            icon: 'error',
            title: text,
            ...params
        })
    },

    alert_success (text = 'Success!', params = {}) {
        return this.alert({
            icon: 'success',
            title: text,
            ...params
        })
    },

    alert_warning (text = 'Warning!', params = {}) {
        return this.alert({
            icon: 'warning',
            title: text,
            ...params
        })
    },

    alert_info (text = 'Info!', params = {}) {
        return this.alert({
            icon: 'info',
            title: text,
            ...params
        })
    },

    alert_done (text = 'Done!', params = {}) {
        return this.alert({
            icon: 'success',
            title: text,
            showConfirmButton: false,
            timer: 1500,
            ...params
        })
    },

    alert_brake (text = 'Brake!', params = {}) {
        return this.alert({
            icon: 'error',
            title: text,
            showConfirmButton: false,
            timer: 1500,
            ...params
        })
    }
}